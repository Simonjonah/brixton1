
@include('pages.common.header')

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Team <span>Members</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Pages</li>
					<li>Team</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Team Page Section -->
	<section class="team-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">About us</div>
				<h2 style="color: red;" >We have a large team of experts  </h2>
			</div>

			<div class="row clearfix">

				@foreach ($view_teams as $view_team)
				<div class="team-block-two style-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img style="width: 100%; height: 300px;" src="{{ URL::asset("/public/../$view_team->images")}}" alt="" title=""></a>
							<ul class="social-box">
								<li><a href="{{ $view_team->facebook }}" class="fa fa-facebook"></a></li>
								<li><a href="{{ $view_team->twitter }}" class="fa fa-twitter"></a></li>
								<li><a href="{{ $view_team->linkedin }}" class="fa fa-linkedin"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="{{ url('viewsinglemember/'.$view_team->ref_no) }}">{{ $view_team->fname }} {{ $view_team->lname }}</a></h5>
							<div class="designation"><a href="{{ url('viewsinglemember/'.$view_team->ref_no) }}">{{ $view_team->designation }}</a></div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->

	@include('pages.common.footer')

