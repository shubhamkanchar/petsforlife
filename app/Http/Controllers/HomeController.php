<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $post = DB::table('dog_post')->get();
        return view('home')->with('post', $post);
    }

    public function index(Request $request)
    {

        $request->session()->put('pet_breed', $request->input('pet_breed'));
        $request->session()->put('city', $request->input('city'));
        $pet_breed = $request->session()->get('pet_breed');
        $city = $request->session()->get('city');


        if (!empty($pet_breed) && !empty($city)) {
            $post = DB::table('dog_post')->where([['approved', '=', '1'], ['pet_breed', 'like', $pet_breed], ['city', 'like', $city]])->paginate(15)->withQueryString();
        } else if (!empty($pet_breed) && empty($city)) {
            $post = DB::table('dog_post')->where([['approved', '=', '1'], ['pet_breed', 'like', $pet_breed]])->paginate(15)->appends('pet_breed', $pet_breed);
        } else if (empty($pet_breed) && !empty($city)) {
            $post = DB::table('dog_post')->where([['approved', '=', '1'], ['city', 'like', $city]])->paginate(15)->appends('city', $city);
        } else if (empty($pet_breed) && empty($city)) {
            $post = DB::table('dog_post')->where('approved', 1)->paginate(15);
        }

        return view('index', ['post' => $post]);
    }

    public function store_dog()
    {
        $file = file_get_contents(public_path() . '/file/dogs.json');
        $var = json_decode($file, true);
        return response($var, 200);
    }

    public function state()
    {
        $file = file_get_contents(public_path() . '/file/states-and-districts.json');
        $var = json_decode($file, true);
        $json = $var['states'];

        foreach ($json as $value) {
            $state = $value['state'];
            $id = DB::table('state')->insertGetId(['name' => $state]);
            foreach ($value['districts'] as $v) {
                DB::table('city')->insertGetId(['state_id' => $id, 'city' => $v]);
            }
        }
    }

    public function state_s2()
    {
        $state = DB::table('state')->get();
        return response($state);
    }

    public function city_s2(Request $request)
    {
        $city = DB::table('city')->where('state_id', '=', $request->input('id'))->get();
        return response($city);
    }

    public function pet_form_store(Request $request)
    {
        $file = $request->file('filename');
        $i = 0;
        $pr_image = array();
        // foreach($file as $value)
        // {      
        //     $imageName=$value->getClientoriginalName();
        //     $exists=file_exists(public_path().'/dog_image/'.$imageName);
        //     if($exists)
        //     {
        //         $i++;
        //         array_push($pr_image, $imageName);
        //     }
        // }

        if ($i == 0) {
            $image = array();
            foreach ($file as $value) {
                $r = rand();
                $destinationPath = public_path() . '/dog_image/';

                $imageName = $value->getClientoriginalName();
                $imageName = $r . "_" . $imageName;
                //$exists=file_exists(public_path().'/dog_image/'.$imageName);

                $value->move($destinationPath, $imageName);
                array_push($image, $imageName);
            }
            $image = json_encode($image);

            DB::table('dog_post')->insert([
                [
                    'customer_id' => Auth::user()->id,
                    'name' => $request->input('name'),
                    'kci' => $request->input('kci'),
                    'state' => $request->input('state'),
                    'city' => $request->input('city'),
                    'pet_breed' => $request->input('pet_breed'),
                    'available_puppies_male' => $request->input('available_puppies_male'),
                    'available_puppies_female' => $request->input('available_puppies_female'),
                    'price' => $request->input('price'),
                    'mob' => $request->input('mob'),
                    'dob' => $request->input('dob'),
                    'des' => $request->input('des'),
                    'filename' => $image,
                ],
            ]);

            return response()->json([
                'status' => '1',
                'message' => 'Post Uploaded successfully',
            ], 200);
        } else {
            return response()->json([
                'status' => '0',
                'message' => 'File already exists. Please rename file',
                'filename' => $pr_image
            ], 200);
        }
    }

    public function read_dog_post()
    {
        $post = DB::table('dog_post')->get();
        $post = json_decode(json_encode($post), true);
        return response()->json([
            'status' => '1',
            'message' => 'Faculty added successfully',
            'data' => $post
        ], 201);
    }

    public function approve(Request $request)
    {
        $id = $request->input('id');
        $r = DB::table('dog_post')
            ->where('id', $id)
            ->update(['approved' => 1]);
        if ($r) {
            return response()->json([
                'status' => '1',
                'message' => 'Post Disapproved',
            ], 201);
        } else {
            return response()->json([
                'status' => '0',
                'message' => 'Something went wrong',
            ], 201);
        }
    }

    public function disapprove(Request $request)
    {
        $id = $request->input('id');
        $r = DB::table('dog_post')
            ->where('id', $id)
            ->update(['approved' => 0]);
        if ($r) {
            return response()->json([
                'status' => '1',
                'message' => 'Post Disapproved',
            ], 201);
        } else {
            return response()->json([
                'status' => '0',
                'message' => 'Something went wrong',
            ], 201);
        }
    }

    public function mail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $msg = $request->input('msg');
        if (!empty($name) && !empty($email) && !empty($mobile) && !empty($msg)) {
            $message = "name :" . $name . "\nemail :" . $email . "\nMobile :" . $mobile . "\nMessage :" . $msg . "";
            $message1 = wordwrap($message, 70);

            Mail::send([], [], function ($message) use ($message1) {
                $message->to('shubhamkanchar687@gmail.com')
                    ->subject('PetsforLife')
                    ->setBody($message1);
            });

            if (count(Mail::failures()) > 0) {
                return response()->json([
                    'status' => '0',
                    'message' => 'Something Went Wrong',
                ], 201);
            } else {
                return response()->json([
                    'status' => '1',
                    'message' => 'Mail Sent. Thank you for your Valuable feedback.',
                ], 201);
            }
        } else {
            return response()->json([
                'status' => '0',
                'message' => 'Please enter all required fields',
            ], 201);
        }
    }

    public function filter(Request $request)
    {
        $pet_breed = $request->input('breed');
        $city = $request->input('city');


        if (!empty($pet_breed) && !empty($city)) {
            $post = DB::table('dog_post')->where([['approved', '=', '1'], ['pet_breed', 'like', $pet_breed], ['city', 'like', $city]])->paginate(16);
        } else if (!empty($pet_breed) && empty($city)) {
            $post = DB::table('dog_post')->where([['approved', '=', '1'], ['pet_breed', 'like', $pet_breed]])->paginate(15);
        } else if (empty($pet_breed) && !empty($city)) {
            $post = DB::table('dog_post')->where([['approved', '=', '1'], ['city', 'like', $city]])->paginate(15);
        } else if (empty($pet_breed) && empty($city)) {
            $post = DB::table('dog_post')->where('approved', 1)->paginate(15);
        }


        $response = ([
            'post' => $post,
            'pagination' => view('section.list')->with('post', $post)->render(),
        ]);

        echo json_encode($response);

        //return response()->json($response);
    }

    public function dashboard()
    {
        $app=DB::table('dog_post')->where('customer_id',Auth::user()->id)->where('approved',1)->count();
        $pen=DB::table('dog_post')->where('customer_id',Auth::user()->id)->where('approved',0)->count();
        $total=DB::table('dog_post')->where('customer_id',Auth::user()->id)->count();
        $dis=DB::table('dog_post')->where('customer_id',Auth::user()->id)->where('approved',0)->count();
        return view('dashboard',['app'=>$app,'pen'=>$pen,'total'=>$total,'dis'=>$dis]);
    }

    public function admin_dashboard()
    {
        $app=DB::table('dog_post')->where('approved',1)->count();
        $pen=DB::table('dog_post')->where('approved',0)->count();
        $total=DB::table('dog_post')->count();
        $dis=DB::table('dog_post')->where('approved',0)->count();
        return view('admin_dashboard',['app'=>$app,'pen'=>$pen,'total'=>$total,'dis'=>$dis]);
    }

    public function manage_ads()
    {
        return view('manage_ads');
    }
}
