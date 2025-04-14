@include('pages.common.header')

    <!--End Main Header -->

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Academic<span> Activities</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Services</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Services Section Ten -->
	<section class="services-section-ten style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">BRIXTONN SCHOOLS</div>
				<!-- <div class="title">BRITTONN SCHOOLS</div> -->
			</div>
			<div class="row clearfix">
				@foreach ($view_clubs as $view_club)
					<!-- Services Block Fifteen -->
				<div class="services-block-fifteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img style="width: 160px; height: 160px;" src="{{ URL::asset("/public/../$view_club->images")}}" alt="">
							<div class="overlay-box">
								<a href="{{ URL::asset("/public/../$view_club->images")}}" data-fancybox="service-2" data-caption="" class="plus flaticon-plus-symbol"></a>
							</div>
						</div>
						<div class="lower-content">
							
							<h5 style="text-align: "><a href="#">{{ $view_club->clubname }}</a></h5>
							<div class="text" style="margin-bottom: 30px;">{!! $view_club->messages !!}</div>
							
							
						</div>
					</div>
				</div>

				@endforeach
				
			
			</div>
		</div>
	</section>
	<!-- End Services Section Ten -->

	

	<!--Main Footer-->
	@include('pages.common.footer')

