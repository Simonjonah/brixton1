<!DOCTYPE html>
<html>

<!-- Mirrored from themexriver.com/tfhtml/finano/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jan 2019 01:58:40 GMT -->
<head>
<meta charset="utf-8">

<title>Brixtonn Schools - Nigeria </title>





<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('images/sch14.jpg')}}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/sch14.jpg') }}" type="image/x-icon">


<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
	<?php
		
		use App\Models\Studycenter;
		$display_studycenters = Studycenter::all();
	?>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
 	
    <!-- Main Header-->
    <header class="main-header header-style-five">
    	
		<!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="fa fa-envelope-o"></i>info@brixtonnschools.com.ng</li>
                            <li><i class="fa fa-user"></i><a href="{{ url('/login') }}">Teacher's Login</a></li>
							<li><i class="fa fa-phone"></i><a href="#"> +234 808 908 0898 </a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Header Top -->
		
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="home"><img style="height: 90px; width: 200px;" src="{{ asset('images/sch14.jpg') }}" alt="" title=""></a></div>
                    </div>
                   
                   	<div class="nav-outer clearfix">
                    
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="{{ url('/') }}">Home</a></li>	
									<li class="dropdown"><a href="#">About Us</a>
										<ul>
											<li><a href="{{ url('about') }}">About Us</a></li>
											<li><a href="{{ url('team') }}">Our Team</a></li>
											<li><a href="{{ url('clubs') }}">School Clubs</a></li>
											<!-- <li><a href="alumni/alumni">Alumni</a></li> -->

										</ul>
									</li>
									<li class="dropdown"><a href="#">Services</a>
										<ul>
											<li><a href="{{ url('services') }}">Services</a></li>
											
										</ul>
									</li>
									<li class="dropdown"><a href="#">Admission</a>
										<ul>
											@foreach ($display_studycenters as $display_studycenter)
												<li><a href="{{ url('admission/admissionform/'.$display_studycenter->slug) }}">{{ $display_studycenter->centername }}</a></li>
											@endforeach
											{{-- <li><a href="{{ url('secondaryform') }}">Secondary</a></li>  --}}
										</ul>
									</li>
									<li class="dropdown"><a href="#">Press Release</a>
										<ul>
											<li><a href="{{ url('blog') }}">Our Press</a></li>
											<li><a href="{{ url('ourevents') }}">Our Events</a></li>

										</ul>
									</li>
									<li class="dropdown"><a href="#">Academics</a>
									<ul>
										<li><a href="{{ url('academics') }}">Academics</a></li>
										<li><a href="{{ url('gallery') }}">Gallery</a></li>
										<li><a href="{{ url('facilities') }}">Facilities</a></li>

										
									</ul>

									<li><a href="{{ url('login') }}">Login</a></li> 
								</li>
								
								</li>
									<li><a href="{{ url('contact') }}">Contact us</a></li>
									
								</li>
								
								</ul>
							</div>
							
						</nav>
						
						<!--Outer Box-->
						<div class="outer-box">
							
							<!--Search Box-->
							<div class="search-box-outer">
								<div class="dropdown">
									<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
									<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
										<li class="panel-outer">
											<div class="form-container">
												<form method="post" action="">
													<div class="form-group">
														<input type="search" name="field-name" value="" placeholder="Search Here" required>
														<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
						
					</div>
					
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="home"><img style="height: 50px; width: 200px;" src="{{ asset('images/sch14.jpg') }}" alt="" title=""></a></div>
                    </div>
                 
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
								<li><a href="{{ url('/') }}">Home</a></li>	
									<li class="dropdown"><a href="#">About Us</a>
									<ul>
										<li><a href="{{ url('about') }}">About Us</a></li>
										<li><a href="{{ url('team') }}">Our Team</a></li>
										<li><a href="{{ url('clubs') }}">School Clubs</a></li>
										<!-- <li><a href="alumni/alumni">Alumni</a></li> -->
									</ul>
								</li>
								
									<li><a href="{{ url('services') }}">Services</a></li>
									
								<li class="dropdown"><a href="#">Admission</a>
									<ul>
										@foreach ($display_studycenters as $display_studycenter)
												<li><a href="{{ url('admission/admissionform/'.$display_studycenter->slug) }}">{{ $display_studycenter->centername }}</a></li>
											@endforeach
									</ul>
								</li>
								<li class="dropdown"><a href="#">Press Release</a>
									<ul>
										<li><a href="{{ url('blog') }}">Our Press</a></li>
										<li><a href="{{ url('ourevents') }}">Our Events</a></li>
									</ul>
								</li>

								<li class="dropdown"><a href="#">Academics</a>
									<ul>
										<li><a href="{{ url('academics') }}">Academics</a></li>
										<li><a href="{{ url('gallery') }}">Gallery</a></li>
										<li><a href="{{ url('facilities') }}">Facilities</a></li>
										
									</ul>
								</li>
								<li><a href="{{ url('login') }}">Login</a></li> 

								<li><a href="{{ url('contact') }}">Contact us</a></li>
								
								
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
		
    </header>
    <!--End Main Header -->