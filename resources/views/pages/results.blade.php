@include('pages.common.header')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>PRESS <span>RELEASE</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Press Release</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Blog Press Section -->
	<section class="blog-Press-section" style="margin-top: 50px;">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title" style="color: red;">Press Release</div>
				<h2 style="color: purple;">Our latest press Release</h2>
			</div>
			<div class="row clearfix">
			


				@foreach ($posts as $post)
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ url('singleblog/'.$post->slug) }}">
                    		<img style="width: 1000px; height: 250px;" src="{{ URL::asset("/public/../$post->images")}}" alt=""></a></h2></span>
							
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>{{ $post->created_at->format('h:i:s a m/d/y') }}</li>
								<li><span class="fa fa-user"></span></li>
							</ul>
							<h4><a href="{{ url('singleblog/'.$post->slug) }}">{{ $post->title }}</a></h4>
						</div>
					</div>
				</div>

			@endforeach


			
			</div>
		</div>
	</section>
	<!-- End Blog Press Section -->
	
	<!-- Call To Action Two -->
	<section class="call-to-action-two">
		<div class="auto-container">
			<div class="clearfix">
				
				<div class="pull-left">
					<h2>Request for <span> Call back</span></h2>
				</div>
				<div class="pull-right">
					<a href="{{ url('contact') }}" class="theme-btn btn-style-five">Request now <span class="icon fa fa-arrow-right"></span></a>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Call To Action Two -->
	
	<!--Main Footer-->
@include('pages.common.footer')
