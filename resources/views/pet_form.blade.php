@include('section/head')
<style>
    .error{
        color: red;
    }
</style>
@include('section/header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card" style="padding: 20px;">
                  <h2>Pet Post Form</h2>
                  <form id="pet_form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pet_breed">Select Dog Breed</label>
                                <select class="form-control select2" id="pet_breed" name="pet_breed">
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kci">Is Dog KCI registred?</label>
                                <select class="form-control select2" id="kci" name="kci">
                                    <option></option>
                                    <option value="yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="state">Select State </label>
                                <select class="form-control select2" id="state" name="state">
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="city">Select City</label>
                                <select class="form-control select2" id="city" name="city">
                                    
                                </select>
                            </div>
                            <div class="form-group" >
                                <label for="dob">Date of Birth of Puppies</label>
                                <input class="form-control" placeholder="Select DOB" type="text" name="dob" id="dob"> 
                                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="available_puppies">Number of puppies available</label>
                                <input class="form-control" placeholder="Please enter no. of puppies available" type="number" name="available_puppies" id="available_puppies">  
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input class="form-control" placeholder="Please enter expected price" type="number" name="price" id="price">  
                            </div>
                            <div class="form-group">
                                <label for="name">Owner Name</label>
                                <input class="form-control" type="text" placeholder="Please enter your Name" name="name" id="name" value="{{ Auth::user()->name }}">  
                            </div>
                            <div class="form-group" >
                                <label for="mob">Contact No.</label>
                                <input class="form-control" placeholder="Please enter your contact No." type="number" name="mob" id="mob">
                                <label style="font-size: 12px;color: red">Note : Please enter valid mobile number. you will get all notification/call on this number related to your ad. </label>
                            </div>  
                        </div>                        
                    </div>
                    <label for="mob">Upload Puppies Photo</label>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="filename[]" multiple accept="image/x-png,image/gif,image/jpeg">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="form-group">
                        <label for="des">Description (Optional)</label>
                        <textarea class="form-control" type="text" name="des" id="des"></textarea>  
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@include('section/footer')
@include('section/script')

<script type="text/javascript">
    $(document).ready(function(){


        $('#kci').select2({
            placeholder: "Select answer",
        });
        $('#city').select2({
            placeholder: "Select a City",
        });

        $( "#dob" ).datepicker();

        $.ajax({
            url: "{{ route('store_dog')}}",
            data:{"_token": "{{ csrf_token() }}"},
            type: "POST", 
            success: function(result){
                var html="";
                html +="<option></option>";
                result['dogs'].forEach(myFunction);
                function myFunction(value, index, array) {
                    html +="<option value='"+value+"'>"+value+"</option>";
                }
                $('#pet_breed').html(html);
            }
        });
        $('#pet_breed').select2({
            placeholder: "Select a Dog Breed",
        });

        $.ajax({
            url: "{{ route('state_s2')}}",
            data:{"_token": "{{ csrf_token() }}"},
            type: "POST", 
            success: function(result){
                var html="";
                html +="<option></option>";
                result.forEach(myFunction);
                function myFunction(value, index, array) {
                    html +="<option value='"+value['id']+"'>"+value['name']+"</option>";
                }
                $('#state').html(html);
            }
        });
        $('#state').select2({
            placeholder: "Select a State",
        });
    
        $('#state').on('select2:select', function (e) {
            $('#city').select2("destroy");
            var id=$('#state').val();
            $.ajax({
                url: "{{ route('city_s2') }}",
                data:{"_token": "{{ csrf_token() }}",id:id},
                type: "POST", 
                success: function(result){
                    var html="";
                    html +="<option></option>";
                    result.forEach(myFunction);
                    function myFunction(value, index, array) {
                        html +="<option value='"+value['city']+"'>"+value['city']+"</option>";
                    }
                    $('#city').html(html);
                }
            });
            $('#city').select2({
                placeholder: "Select a City",
            });
        });

        $(".custom-file-input").on("change", function() {
            var files = [];
            for (var i = 0; i < $(this)[0].files.length; i++) {
                files.push($(this)[0].files[i].name);
            }
            $(this).next('.custom-file-label').html(files.join(', '));
        });



        $('#pet_form').validate({
            ignore: [],
            errorPlacement: function (error, element) {
                if (element.hasClass('select2')) {     
                    error.insertAfter(element.next('span'));  
                } else {
                    error.insertAfter(element);
                }
            }, 
            rules: {
                pet_breed: {
                    required: true,   
                },
                kci: {
                    required: true, 
                },
                state: {
                    required: true,   
                },
                city: {
                    required: true, 
                },
                available_puppies: {
                    required: true,   
                },
                name: {
                    required: true, 
                },
                mob: {
                    required: true,   
                },
                price: {
                    required: true, 
                },
                DOB: {
                    required: true, 
                },
                filename: {
                    required: true, 
                }

            },
             messages :{
                pet_breed: {
                    required: "Please Select Breed",   
                },
                kci: {
                    required: "Please select KCI", 
                },
                state: {
                    required: "Please select State",   
                },
                city: {
                    required: "Please select City", 
                },
                available_puppies: {
                    required: "Please enter number of puppies available",   
                },
                name: {
                    required: "Please enter Owner/seller Name", 
                },
                mob: {
                    required:"Please enter mobile no to Contact" ,   
                },
                price: {
                    required: "Please enter price", 
                },
                DOB: {
                    required: "Please enter Date of birth of puppies", 
                },
                filename: {
                    required: "Please upload puppies photo", 
                }
            },
            submitHandler: function(form) {
                showmodal('Please wait, We are posting your ad.');
                var formData = new FormData(document.getElementById("pet_form"));
                $.ajax({
                    url: "{{ route('pet_form_store') }}",
                    data: formData,
                    type: "POST",
                    processData: false,
                    dataType: 'json',
                    contentType: false, 
                    success: function(result){
                        if(result.status == 1)
                        {
                            hidemodal();
                            toastr.success(result.message);
                        }
                        else
                        {
                            hidemodal();
                            toastr.error(result.message);
                        } 
                    }
                });
            }
        });
    });
</script>
</body>
</html>
