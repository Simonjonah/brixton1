@include('pages.common.header')


	<!--Main Slider-->
    <section class="main-slider style-four">
        <div class="main-slider-carousel owl-carousel owl-theme">
			@foreach ($view_sliders as $view_slider)
				
            <div class="slide" style="background-image:url({{ URL::asset("/public/../$view_slider->images")}});  background-size: cover; background-repeat: no-repeat; background-position: center;">
                <div class="auto-container">
					<div class="content">
						<div class="title">BRIXTONN SCHOOLS</div>
						<h1>BRIXTONN <br> SCHOOLS, <span style="text-transform: uppercase; color: #ffff">{{ $view_slider->centername }}</span></h1>
						<div class="text">{{ $view_slider->facts }}</div>
						<div class="link-box">
							<a href="contact" class="theme-btn btn-style-twelve">Let’s start now <span class="fa fa-angle-right"></span></a>
							<a href="services" class="theme-btn btn-style-thirteen">Our services <span class="fa fa-angle-right"></span></a>
						</div>
					</div>
                </div>
            </div>
			@endforeach

		</div>

    </section>
    <!--End Main Slider-->

	<!-- About Section Four -->
	<section class="about-section-four">
		<div class="auto-container">

			<!-- Sec Title Three -->
			<div class="sec-title-three">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title"></div>
						<h2>About us</h2>
					</div>
					<div class="pull-right">
						<div class="text">For us at Brixtonn Schools, passion is our sole-driving force towards moulding our pupils into their excellent states.
						With our state-of-the art practice, e-learning and tech support are paramount in the daily nourishment of our dynamic future leaders.
						Our pupils remain the cream of the society in which we operate.<br>
						</div>
					</div>
				</div>
			</div>

			<div class="row clearfix">

				<!-- Content Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image-1"><img style="" src="{{ asset('images/resource/sch20.jpg') }}" alt=""></div>
					</div>
				</div>

				<!-- Skills Column -->
				<div class="skills-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">

							<!-- Services Block Thirteen -->
							<div class="services-block-thirteen col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-headphones"></span>
									</div>
									<h5>24/7 full <br> Online Support</h5>
								</div>
							</div>

							<!-- Services Block Thirteen -->
							<div class="services-block-thirteen col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="icon-box alternate">
										<span class="icon flaticon-loading"></span>
									</div>
									<h5>15+ Years of <br> Experience</h5>
								</div>
							</div>

							<!-- Services Block Thirteen -->
							<div class="services-block-thirteen col-lg-4 col-md-12 col-sm-12">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-creativity"></span>
									</div>
									<h5>100% <br> Creativity </h5>
								</div>
							</div>

						</div>

						<!--Skills-->
						<div class="skills">

							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Happy Pupils</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
								</div>
							</div>

							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Happy Parents</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
								</div>
							</div>

							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Satisfaction</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
								</div>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End About Section Four -->

	<!-- Services Section Ten -->
	<section class="services-section-ten">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-three centered">
				<div class="title">Our dedicated services</div>
				<h2>A close personal attention to each child is guaranteed</h2>
					<section class="testimonial-section-three">
					<div class="auto-container">
						<!-- Sec Title Two -->
						<div class="sec-title-two centered"></div>
						<div class="two-item-carousel owl-carousel owl-theme">
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">No compromise on our standards!</div>
								</div>
							</div>

							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">Montessori-based Foundation</div>
								</div>
							</div>


							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">Outdoor sport activities for the children</div>
								</div>
							</div>
							
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">Child-friendly Environment</div>
								</div>
							</div>
							
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">Right Speaking Culture</div>
								</div>
							</div>
							
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">Customised Educational Plans</div>
								</div>
							</div>

                        <!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">Great Focus on Child's Sense of Responsibility</div>
								</div>
							</div>
							
							
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">Broad British and Nigerian Curricular</div>
								</div>
							</div>
							
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">Small Classroom Population</div>
								</div>
							</div>
							
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">Qualified and Seasoned Teachers</div>
								</div>
							</div>
							
							
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">e-Learning</div>
								</div>
							</div>
							
							
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">Educative Club Activities</div>
								</div>
							</div>
							
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="text">Etiquette and Mannerism</div>
								</div>
							</div>
							
						</div>

					</div>
				</section>

			</div>
			<div class="row clearfix">

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<!-- <span class="icon flaticon-earnings"></span> -->
						</div>
						<h6><a href="{{ url('futuremanagement') }}">Future <br> Management</a></h6>
						{{-- <div class="text">The argument in favorite of using filler to text goes some thing like this top</div> --}}
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<!-- <span class="icon flaticon-budget-1"></span> -->
						</div>
						<h6><a href="{{ url('sports') }}">Sport <br> Activities</a></h6>
						{{-- <div class="text">The argument in favorite of using filler to text goes some thing like this top</div> --}}
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<!-- <span class="icon flaticon-target"></span> -->
						</div>
						<h6><a href="{{ url('musics') }}">Music <br> Classes</a></h6>
						{{-- <div class="text">The argument in favorite of using filler to text goes some thing like this top</div> --}}
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<!-- <span class="icon flaticon-car"></span> -->
						</div>
						<h6><a href="{{ url('reading') }}">Reading/ Spelling<br> Classes</a></h6>
						{{-- <div class="text">The argument in favorite of using filler to text goes some thing like this top</div> --}}
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<!-- <span class="icon flaticon-analysis-1"></span> -->
						</div>
						<h6><a href="{{ url('arts') }}">Artwork <br> Classes</a></h6>
						{{-- <div class="text">The argument in favorite of using filler to text goes some thing like this top</div> --}}
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<!-- <span class="icon flaticon-house"></span> -->
						</div>
						<h6><a href="{{ url('creative') }}">Creative <br> Classes</a></h6>
						{{-- <div class="text">The argument in favorite of using filler to text goes some thing like this top</div> --}}
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<!-- <span class="icon flaticon-employee"></span> -->
						</div>
						<h6><a href="{{ url('skillsdevelopment') }}">Skills <br> Development</a></h6>
						{{-- <div class="text">The argument in favorite of using filler to text goes some thing like this top</div> --}}
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<!-- <span class="icon flaticon-heartbeat"></span> -->
						</div>
						<h6><a href="{{ url('computerclasses') }}">Computer <br> Classes</a></h6>
						{{-- <div class="text">The argument in favorite of using filler to text goes some thing like this top</div> --}}
					</div>
				</div>

			    
			    
			    <!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<!-- <span class="icon flaticon-heartbeat"></span> -->
						</div>
						<h6><a href="{{ url('homemanagement') }}">Home <br> Management</a></h6>
						{{-- <div class="text">The argument in favorite of using filler to text goes some thing like this top</div> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section Ten -->

	

	<!-- Counter Section -->
	<section class="counter-section" style="background-image:url({{ asset('images/background/bri2.jpg') }})">
		<div class="auto-container">
			<!-- Fact Counter -->
			<div class="fact-counter style-three">
				<div class="row clearfix">

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-start"></span>
							</div>
							<div class="count-outer count-box">
								<span class="count-text" data-speed="3000ms" data-stop="1200">0</span>+
								<div class="counter-title">Happy Parents</div>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-collaboration"></span>
							</div>
							<div class="count-outer count-box">
								<span class="count-text" data-speed="2000" data-stop="19">0</span>+
								<div class="counter-title">Team Member</div>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-hand-shake-1"></span>
							</div>
							<div class="count-outer count-box">
								<span class="count-text" data-speed="2000" data-stop="5000">0</span>+
								<div class="counter-title">Happy Pupils</div>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-stopwatch"></span>
							</div>
							<div class="count-outer count-box">
								<span class="count-text" data-speed="1500" data-stop="15">0</span>+
								<div class="counter-title">Years of Experience</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- Counter Section -->

	<!-- Team Section Two -->
	<section class="team-section-two" >
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-three centered">
				<div class="title">Our dedicated Team</div>
				<h2>We have a large <br>  team of experts</h2>
			</div>

			<div class="row clearfix">

				<!--Team Block-->
				@foreach ($view_teams as $view_team)
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ url('viewsinglemember/'.$view_team->ref_no) }}"><img style="height: 350px; width: 100%;" src="{{ URL::asset("/public/../$view_team->images")}}" alt="" title=""></a>
							<ul class="social-box">
								<li><a href="{{ $view_team->facebook }}" class="fa fa-facebook"></a></li>
								<li><a href="{{ $view_team->twitter }}" class="fa fa-twitter"></a></li>
								<li><a href="{{ $view_team->linkedin }}" class="fa fa-linkedin"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="{{ url('viewsinglemember/'.$view_team->ref_no) }}">{{ $view_team->fname }} {{ $view_team->lname }}</a></h5>
							<div class="designation"><a href="{{ url('viewsinglemember/'.$view_team->ref_no) }}">{{ $view_team->designation }}</a> </div>
						</div>
					</div>
				</div>

				@endforeach
				

			</div>
			<div class="text-center">
				<a href="team" class="theme-btn btn-style-fourteen">View Our Team</a>
			</div>
		</div>
	</section>
	<!-- End Team Section Two -->


	<section class="testimonial-section-two" style="margin-bottom: 80px; margin-top: 80px;">
		<div class="image-layer" style="background-image:url(images/background/bri2.jpg)"></div>
		<div class="auto-container">
			<h2>Some of Our Latest <span>Events</span></h2>
			<div class="testimonial-carousel-two owl-carousel owl-theme">
				@foreach ($view_events as $view_event)
					<!-- Testimonial Block -->
				<div class="testimonial-block-three">
					<div class="inner-box">
						<div class="row clearfix">

							<!-- Image Column -->
							<div class="image-column col-lg-3 col-md-4 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<img style="width: 100%; height: 250px;" src="{{ URL::asset("/public/../$view_event->images")}}" alt="" />
									</div>
								</div>
							</div>
							<!-- Content Column -->
							<div class="content-column col-lg-9 col-md-8 col-sm-12">
								<div class="inner-column">
									<div class="text"><span class="icon flaticon-left-quote"></span></div>
									<h5><a href="{{ url('viewsingleevent/'.$view_event->ref_no)  }}">{{ $view_event->title }}</a></h5>
									<div class="designation"><a class="btn btn-primary" href="{{ url('viewsingleevent/'.$view_event->ref_no)  }}">View Event</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Section Two -->


	<!-- Blog Press Section -->
	<section class="blog-Press-section" style="margin-top: 300px;">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Press Release</div>
				<h2>Our Latest Press  <span>Release</span></h2>
			</div>
			<div class="row clearfix">
			@foreach ($view_blogs as $view_blog)
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ url('singleblog/'.$view_blog->slug) }}">
                    		<img style="width: 1000px; height: 250px;" src="{{ URL::asset("/public/../$view_blog->images")}}" alt=""></a></h2></span>
							
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>{{ $view_blog->created_at->format('h:i:s a m/d/y') }}</li>
								<li><span class="fa fa-user"></span></li>
							</ul>
							<h4><a href="{{ url('singleblog/'.$view_blog->slug) }}">{{ $view_blog->title }}</a></h4>
						</div>
					</div>
				</div>

			@endforeach
				
	
			
			</div>
			<div class="text-center">
				<a href="{{ url('blog') }}" class="theme-btn btn-style-fourteen">View All Press</a>
			</div>
		</div>
	</section>
	<!-- End Blog Press Section -->

	<section class="sponsors-section">
		<div class="auto-container">
			<div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                	@foreach ($view_blogs as $view_blog)
                    <li><div class="image-box"><a href="#"><img style="width: 100%; height: 100px;" src="{{ URL::asset("/public/../$view_blog->images")}}" alt=""></a></div></li>
					@endforeach
                </ul>
            </div>
		</div>
	</section>
	<!--End Sponsors Section-->

	<!-- Call To Action Section -->
	<section class="call-back-section" style="background-image:url(images/background/bri2.jpg)">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Request Form -->
						<div class="requestform">
							<!--Request Form-->
							<form method="post" action="{{ url('createbooking') }}" method="post">
								@csrf
								@if (Session::get('success'))
									<div class="alert alert-success">
										{{ Session::get('success') }}
									</div>
									@endif

									@if (Session::get('fail'))
									<div class="alert alert-danger">
									{{ Session::get('fail') }}
									</div>
								@endif
								<div class="row clearfix">
									<!-- Title Column -->
								<div class="title-column col-lg-4 col-md-12 col-sm-12">
									<div class="inner-column">
										<h2>Request for <span> Call-back</span></h2>
										<div class="text">If you want to discuss how to enrolment at BRIXTONN SCHOOLS, please schedule a meeting through this contact form.</div>
									</div>
								</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<label>Email Address</label>
										<input class="form-control" type="text" name="email" placeholder="Your Email">
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<label>Full Name</label>
										<input class="form-control" type="text" name="name" placeholder="Full Name">
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<label>Phone Number</label>
										<input class="form-control" type="text" name="phone" placeholder="Phone Number">
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">

										<button class="btn btn-success" type="submit" name="submitform">Submit now <span class="icon fa fa-angle-right"></span></button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
				
			</div>
		</div>
	</section>



	<!-- End Call To Action Section -->
@include('pages.common.footer')