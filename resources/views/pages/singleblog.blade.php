@include('pages.common.header')
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ URL::asset("/public/../$sigle_blogs->images")}})">
    	<div class="auto-container">
			<div class="content">
				<h1>BLOG <span>details</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>BLOG RELEASE details</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-single">
						<div class="inner-box">
							<div class="image">
								<img src="{{ URL::asset("/public/../$sigle_blogs->images")}}" alt="" />
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li><span class="fa fa-calendar"></span>{{ $sigle_blogs->created_at->format('h:i:s a m/d/y') }}</li>
									<li><span class="fa fa-user"></span>Admin</li>
									
								</ul>
								<h4>{!! $sigle_blogs->title !!}</h4>
								<div class="text">
									<p>{!! $sigle_blogs->messages !!}</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar default-sidebar">
						
						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="get" action="{{ url('search') }}">

                                <div class="form-group">
                                    <input type="search" name="title" value="" placeholder="Enter Your Keyword..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
					
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title-two">
                                <h4>Categories</h4>
                            </div>
                            <ul class="blog-cat-two">
                                @foreach ($all_blogs as $all_blog)
                                <li><a href="{{ url('singleblog/'.$all_blog->slug) }}">{{ $all_blog->title }}</span></a></li>
                                    
                                @endforeach
                                
                            </ul>
                            
                        </div>
						
						
						</div>
						
						
						
						<!-- Banner Widget-->
                        <div class="sidebar-widget banner-widget">
							<div class="widget-content" style="background-image:url({{ URL::asset("/public/../$sigle_blogs->images")}})">
								<div class="logo">
									<img src="images/icons/widget-logo.png" alt="" />
								</div>
								<div class="title" style="color: #FF0000;">Enroll your Child with us @</div>
								<h2 style="color: #FF0000;">BRIXTONN SCHOOLS</h2>
								<a href="{{ url('/') }}" class="theme-btn btn-style-seventen">Enroll now <span class="icon flaticon-link"></span></a>
							</div>
						</div>
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	<!--End Sidebar Page Container-->
	
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
    @include('pages.common.footer')