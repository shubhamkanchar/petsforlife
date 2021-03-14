<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Pets For Life : Buy puppies/dog online</title>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name=”description” content="Pets for life is platform where you can buy dog/puppies online. Here you get all dog breeds in budget">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   	<link rel="stylesheet" href="{{ asset('mdb/css/mdb.min.css') }}">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  	 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
   
  <style type="text/css">
  	.card-text
  	{
  		margin-bottom: 2px;
  	}
  	
	section {
	    padding: 60px 0;
	}

	section .section-title {
	    text-align: center;
	    color: #007b5e;
	    margin-bottom: 50px;
	    text-transform: uppercase;
	}
	.footer {
	    background: #343a40 !important;
	}
	.footer h5{
		padding-left: 10px;
	    border-left: 3px solid #eeeeee;
	    padding-bottom: 6px;
	    margin-bottom: 20px;
	    color:#ffffff;
	}
	.footer a {
	    color: #ffffff;
	    text-decoration: none !important;
	    background-color: transparent;
	    -webkit-text-decoration-skip: objects;
	}
	.footer ul.social li{
		padding: 3px 0;
	}
	.footer ul.social li a i {
	    margin-right: 5px;
		font-size:25px;
		-webkit-transition: .5s all ease;
		-moz-transition: .5s all ease;
		transition: .5s all ease;
	}
	.footer ul.social li:hover a i {
		font-size:30px;
		margin-top:-10px;
	}
	.footer ul.social li a,
	.footer ul.quick-links li a{
		color:#ffffff;
	}
	.footer ul.social li a:hover{
		color:#eeeeee;
	}
	.footer ul.quick-links li{
		padding: 3px 0;
		-webkit-transition: .5s all ease;
		-moz-transition: .5s all ease;
		transition: .5s all ease;
	}
	.footer ul.quick-links li:hover{
		padding: 3px 0;
		margin-left:5px;
		font-weight:700;
	}
	.footer ul.quick-links li a i{
		margin-right: 5px;
	}
	.footer ul.quick-links li:hover a i {
	    font-weight: 700;
	}

	@media (max-width:767px){
		.footer h5 {
	    padding-left: 0;
	    border-left: transparent;
	    padding-bottom: 0px;
	    margin-bottom: 10px;
	}
}

  html,
  body,
  header,
  .view {
    height: 100%;
  }

  @media (max-width: 740px) {
    html,
    body,
    header,
    .view {
      height: 100vh;
    }
  }

  .top-nav-collapse {
    background-color: #82b1ff !important;
  }

  .navbar:not(.top-nav-collapse) {
    background: transparent !important;
  }

  @media (max-width: 991px) {
   .navbar:not(.top-nav-collapse) {
    background: #82b1ff !important;
   }
  }
  
  /*h5 {
    
  }*/

  .mini-submenu{
  
  background-color: rgba(0, 0, 0, 0);  
  /*border: 1px solid rgba(0, 0, 0, 0.9);
  border-radius: 4px;
  padding: 9px;  
  /*position: relative;*/
  width: 42px;

}

.mini-submenu:hover{
  cursor: pointer;
}

.mini-submenu .icon-bar {
  border-radius: 1px;
  display: block;
  height: 2px;
  width: 22px;
  margin-top: 3px;
}

.mini-submenu .icon-bar {
  background-color: #000;
}

#slide-submenu{
  background: rgba(0, 0, 0, 0.45);
  display: inline-block;
  padding: 0 8px;
  border-radius: 4px;
  cursor: pointer;
}
.list-group-item.active
{
	background-color: #4285f4 !important;
}
.list-group
{
display:none;
}
#pagination
{
	margin-left: 40%
}
.select2-container {
   
    width: 100% !important;
}
</style>
</head>
<body>
	<header>
  <!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
			<div class="container">
				<a class="navbar-brand" href="#">
				<strong>PETSforLIFE</strong>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
				aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent-7">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#demo">HOME</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('pet-form')}}">SELL</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#buy">BUY</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about_us">ABOUT US</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#how_it_works">HOW IT WORKS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact_us">CONTACT US</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
  <!-- Navbar -->
  <!-- Full Page Intro -->
		<div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('{{ asset('images/petsforlife.jpg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
			<!-- Mask & flexbox options-->
			<div class="mask rgba-white-light d-flex justify-content-center align-items-center">
				<!-- Content -->
				<div class="container">
					<!--Grid row-->
					<div class="row">
						<!--Grid column-->
						<div class="col-md-12 white-text text-center">
							<h1 class="display-3 mb-0 pt-md-5 pt-5 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">PetsFor
								<a class="indigo-text font-weight-bold">Life</a>
							</h1>
							<h5 class="text-uppercase pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 white-text font-weight-bold wow fadeInDown"
							data-wow-delay="0.3s" style="letter-spacing: 3px;">Best platform to buy and Sell puppies online</h5>
							<div class="wow fadeInDown" data-wow-delay="0.3s">
								<a class="btn btn-light-blue btn-lg btn-rounded" href="#buy">Buy</a>
								<a class="btn btn-indigo btn-lg btn-rounded" href="{{ route('pet-form')}}">Sell</a>
							</div>
						</div>
						<!--Grid column-->
					</div>
					<!--Grid row-->
				</div>
				<!-- Content -->
			</div>
			<!-- Mask & flexbox options-->
		</div>
		<!-- Full Page Intro -->
	</header>
<!-- Main navigation -->
	<section id="buy">
	<div class="container mb-2">
  		<div class="row">
  			<div class="col-12">
	  			<h1 class="header-title" style="color: cornflowerblue">Available Pets</h1>
	    		<hr style="border: 1px solid cornflowerblue">
  			</div>
  		</div>
  	</div>
  	<div class="container-fluid mb-5" >	
  		<div class="row">	
  			<div class="col-sm-1" style="padding-left: 0">
				<div class="sidebar" style="position: sticky;top: 70px;z-index: 111;width: 250px;">
				    <div class="mini-submenu">
				    	<button class="btn aqua-gradient" style="margin-left: 0;width: max-content;"><i class="fa fa-filter" aria-hidden="true"></i>Filter</button>
				    </div>
					
					    <ul class="list-group">
					    	<form action="{{ route('index') }}" method="get">
					    	<span class="list-group-item active">
					            Filters
					            <span class="pull-right" id="slide-submenu">
					                <i class="fa fa-times"></i>
					            </span>
					        </span>
					        <li class="list-group-item">
								<div class="form-group" style="margin-bottom: 0;">
	                                
	                                <select class="form-control select2" id="pet_breed" name="pet_breed" style="">
	                                    
	                                </select>
	                            </div>
                        	</li>
                        	<li class="list-group-item">
	                            <div class="form-group" style="margin-bottom: 0;">
	                               
	                                <select class="form-control select2" id="state" name="state">
	                                    
	                                </select>
	                            </div>
                        	</li>
                            <li class="list-group-item">
	                            <div class="form-group" style="margin-bottom: 0;">
	                                
	                                <select class="form-control select2" id="city" name="city">
	                                    
	                                </select>
	                            </div>
	                        </li>
	                        <li class="list-group-item">
	                        	<button type="submit" class="btn btn-primary btn-rounded btn-sm" id="apply">Apply</button>
	                        	<button type="button" class="btn btn-warning btn-rounded btn-sm" id="clear" onclick="clear_data()">Clear</button>
	                        </li>
	                        </form>
	                        <form action="{{ route('index') }}" method="get" hidden id="myForm">
								<div class="form-group" style="margin-bottom: 0;">
	                                
	                                <select class="form-control select2" id="pet_breed" name="pet_breed" style="">
	                                    
	                                </select>
	                            </div>
                        	
	                            <div class="form-group" style="margin-bottom: 0;">
	                               
	                                <select class="form-control select2" id="state" name="state">
	                                    
	                                </select>
	                            </div>
                        	
	                            <div class="form-group" style="margin-bottom: 0;">
	                                
	                                <select class="form-control select2" id="city" name="city">
	                                    
	                                </select>
	                            </div>
	                        </form>
                        </ul>
                       
				</div>
	  		</div>
  			<div class="col-sm-10">
				<div class="row" id="ad_html">	
		  			@foreach($post as $p)
		    		<div class="col-sm-4">
			      		<div class="card mb-5">
			      			<div id="demo" class="carousel slide" data-ride="carousel" style="padding: 10px;margin-top: -25px;">
			      				<div class="card mb-2">
			      					<div class="card-body" style="padding: 0">
						      			<div class="carousel-inner" style="border-radius: 5px;">
						      				@foreach( json_decode($p->filename) as $image)
						      				@php
						      				$key = array_search($image, json_decode($p->filename));
											@endphp
											@if($key == 0)
										    <div class="carousel-item active">
										      	<img src="{{ asset('dog_image/'.$image.'') }}" alt="Los Angeles" style="width: 100%;height: 200px;">
										    </div>
										    
										    @else
										    <div class="carousel-item">
										      	<img src="{{ asset('dog_image/'.$image.'') }}" alt="Los Angeles" style="width: 100%;height: 200px;">
										    </div>
										    @endif
										    @endforeach
									  	</div>
								  	</div>
							  	</div>
						  	</div>
					    	<div class="card-body">
						      	<h4 class="card-title">{{ $p->pet_breed }}</h4>
						      	<p class="card-text">Puppies DOB: {{ $p->dob }}</p>
						      	<p class="card-text">Price : {{ $p->price }} K</p>
						      	<p class="card-text">Is KCI registered? : {{ $p->kci }} </p>
						      	<p class="card-text">City : {{ $p->city }}</p>
						      	<p class="card-text">Available Puppies : {{ $p->available_puppies }}</p>
						      	<p class="card-text">Owner/Seller Name : {{ $p->name }}</p>
						      	<p class="card-text">Owner/Seller Mobile No. : {{ $p->mob }}</p>
					      		<!-- <a href="#" class="btn btn-primary">See Profile</a> -->
					    	</div>
					  	</div>
		    		</div>
		    		@endforeach
	    		</div>
    		</div>
    		<div class="col-sm-1">
  			</div>	
  		</div>
  		<div class="row">
  			<div class="col-12" id="pagination">
    			{{ $post->links() }}
    		</div>
    	</div>
	</div>
	</section>
	<section id="how_it_works" class="mb-5 footer">
		<div class="container" id="">
			<div class="row">
				<div class="col-sm-12" >
	    			<h1 class="header-title" style="color: cornflowerblue">How it Works</h1>
	    			<hr style="border: 1px solid cornflowerblue">
	    		</div>
	    		<div class="col-sm-6" >
	    			<h5>Buy</h5>
	    			<ul style="color: aliceblue;">
	    				<li>In the "Available Puppies" section you get all types and breed puppies here and related information for that puppy/dog on that ad.</li>
	    				<li>You get contact number of seller/owner on every ad. respective to that puppy/dog.</li>
	    				<li>You can call that seller/owner and get that deal.</li>
	    			</ul>
	    		</div>
	    		<div class="col-sm-6" >
	    			<h5>Sell</h5>
	    			<ul style="color: aliceblue;">
	    				<li>In the "Sell" section you can post ad. For that click on sell button on top on page or bottom of page.</li>
	    				<li>Then login page appear. if you already registered for post ad then login otherwise click on register button on that page.</li>
	    				<li>Then register form appear. fill and submit that form then one verification mail will be sent on your mail.</li>
	    				<li>Verify your email and login in application and post your ads.</li>
	    			</ul>
	    		</div>
	    		
	    		
	    		</div>
	    	</div>
	  	</div>
  	</section>


  	<section id="contact_us">
		<form class="contact-form" id="contact_form">
			<div class="container mb-5">
				<div class="row">
					<div class="col-sm-12" >
			    		<h1 class="header-title" style="color: cornflowerblue"> Contact Us</h1>
			    		<h5>Please feel free to contact if you have any query or suggestion for us.</h5>
			    		<hr style="border: 1px solid cornflowerblue">
			    	</div>
			    
					<div class="col-sm-12 col-md-7" >
				    	<div class="row">
					    	<div class="col-sm-12" >		
						        <div class="md-form">
						        	<label for="name" class="">Name</label>
						          	<input type="text" class="form-control" id="name" name="name" required="">
						        </div>
						    </div>
						    <div class="col-sm-12 col-md-6" >    
						        @csrf
						        <div class="md-form">
						        	<label for="email" class="">Email</label>
						          	<input type="email" class="form-control" id="email" name="email"  required="">
						        </div>
						    </div>
						    <div class="col-sm-12 col-md-6" >
						      	<div class="md-form">
						      	<label for="phone" class="">Mobile No.</label>
						           <input type="text" class="form-control" id="phone" maxlength="10" minlength="10" required="" name="mobile">
						      	</div>
						    </div>
						    <div class="col-md-12">
				                  <div class="md-form mb-0">
				                    <textarea id="form-contact-message" class="form-control md-textarea" rows="3" name="msg"></textarea>
				                    <label for="form-contact-message">Your message</label>
				                  </div>
			                </div>
				     		<button type="button" class="btn btn-primary btn-send mail_form"><i class="fa fa-refresh fa-spin"></i><span class="glyphicon glyphicon-send"></span> Send </button>
			     		</div>
		    		</div>
		    		<div class="col-sm-12 col-md-5" style="background: cornflowerblue;">
		    			<div class="card-body contact text-center h-100 white-text">
			              	<h3 class="font-weight-bold my-4 pb-2">Contact information</h3>
			              	<ul class="text-lg-left list-unstyled ml-4">
				                <!-- <li>
				                  	<p><i class="fas fa-map-marker-alt pr-2"></i>New York, 94126, USA</p>
				                </li> -->
				                <li>
				                  	<p><i class="fas fa-phone pr-2"></i>+ 91 ( 9158853602 )</p>
				                </li>
				                <li>
				                  	<p><i class="fas fa-envelope pr-2"></i>petforlife@gmail.com</p>
				                </li>
				            </ul>
				            <hr class="hr-light my-4">
				            <ul class="list-inline text-center list-unstyled">
				                <!-- <li class="list-inline-item">
				                  	<a class="p-2 fa-lg tw-ic" hre>
				                    	<i class="fab fa-facebook"></i>
				                  	</a>
				                </li> -->
				                <li class="list-inline-item">
				                  	<a style="color: white;" class="p-2 fa-lg li-ic" href="https://www.linkedin.com/in/shubham-kanchar/">
				                    	<i class="fab fa-linkedin-in"> </i>
				                  	</a>
				                </li>
				                <li class="list-inline-item">
				                  	<a  style="color: white;" class="p-2 fa-lg ins-ic" href="https://www.instagram.com/shubhamkanchar/">
				                    	<i class="fab fa-instagram"> </i>
				                  	</a>
				                </li>
			              	</ul>
            			</div>
		    		</div>
		    	</div>
		    </div>
	  	</form>
  	</section>
  	
	<!-- Footer -->
	<section id="footer" class="footer">
		<div class="container" id="about_us">
			<div class="row text-center text-xs-center text-sm-left text-md-left mb-2">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h5>ABOUT US</h5>
					<p style="color: white">Pets for life is platform for sale puppies/dog online. Here you need to post your puppies ads and you get direct enquiry on your mobile number you provided while posting ads.</p>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#home"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="#buy"><i class="fa fa-angle-double-right"></i>Buy</a></li>
						<li><a href="{{ route('pet-form') }}"><i class="fa fa-angle-double-right"></i>Sell</a></li>
						
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#about_us"><i class="fa fa-angle-double-right"></i>About Us</a></li>
						<li><a href="#how_it_works"><i class="fa fa-angle-double-right"></i>How it Works</a></li>
						<li><a href="#contact_us"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
					</ul>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">petsforlife.com</a></p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>

<script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>
<script>

	$(document).ready(function(){
		new WOW().init();

		$('.fa-spin').hide();

		$('#city').select2({
            placeholder: "Select a City",
        });

		$('.mail_form').click( function(){
			$('.mail_form').prop('disabled', true);
			$('.fa-spin').show();
			var formData = new FormData(document.getElementById("contact_form"));
			$.ajax({
		        url: "{{ route('mail') }}",
		        data: formData,
		        type: "POST",
                processData: false,
                dataType: 'json',
                contentType: false, 
		        success: function(result){
		            if(result.status == 1)
		            {
		            	toastr.success(result.message);
		            	$('.mail_form').prop('disabled', true);
						$('.fa-spin').hide();
		            }
		            else
		            {
		            	toastr.error(result.message);
		            	$('.mail_form').prop('disabled', false);
						$('.fa-spin').hide();
		            }   
		        }
		    });
		});

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

       

	});

	function clear_data(){
	  	document.getElementById("myForm").submit();
	}
	
	$(function(){

		$('#slide-submenu').on('click',function() {			        
	        $(this).closest('.list-group').fadeOut('slide',function(){
	        	$('.mini-submenu').fadeIn();	
	        }); 
	    });

		$('.mini-submenu').on('click',function(){		
	        $(this).next('.list-group').toggle('slide');
	        $('.mini-submenu').hide();
		})
	});

</script> 
</body>
</html>
