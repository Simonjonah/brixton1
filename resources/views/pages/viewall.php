<?php require_once 'common/header.php'; ?>

    <!--End Main Header -->

	<!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo HOME; ?>images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Academics<span> Facilities</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="<?php echo HOME; ?>home">Home</a></li>
					<li>Facilities</li>
					<li>Hostels</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Case Section Three-->
	<section class="case-section-three">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Academic Facilities</div>
			</div>
			<div class="row clearfix">
				
				<!-- Case Block -->
				<?php if (count($view_all_facilities) > 0): ?>
				<?php foreach ($view_all_facilities as $view_all_facilitie): $images = $view_all_facilitie['images']; ?>
				
				<div class="case-block-two col-lg-3 col-md-6 col-sm-12">

					<div class="inner-box wow pulse" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image-outer">
							<div class="image">
								<img style="width: 100%; height: 200px;" src="<?php echo HOME. $view_all_facilitie['images']; ?>" alt="" />
								<div class="overlay-box">
									<a href="<?php echo HOME. $view_all_facilitie['images']; ?>" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
								</div>
							</div>
						</div>
						<div class="lower-content">
							<div class="category"><h5><?php echo $view_all_facilitie['department']; ?></h5></div>
							<p><?php echo $view_all_facilitie['description']; ?></p></div>
							<!-- <a href="contact" class="theme-btn btn-style-five">Request for Admission now <span class="icon fa fa-arrow-right"></span></a> -->
							<a href="<?php echo HOME; ?>nurseryform" class="theme-btn btn-style-eight">Request for Admission now <span class="icon fa fa-arrow-right"></span></a>
						</div>
					

					</div>


					<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>	
		</div>
	</section>
	<!-- End Case Section Three-->

	<section class="testimonial-section-two" style="margin-bottom: 80px; margin-top: 80px;">
		<div class="image-layer" style="background-image:url(<?php echo HOME; ?>images/background/bri2.jpg)"></div>
		<div class="auto-container">
			<!-- <h2>Some of our latest <span>events</span></h2> -->
			<div class="testimonial-carousel-two owl-carousel owl-theme">
				<?php if (count($view_all_facilities) > 0): ?>
                <?php foreach ($view_all_facilities as $view_all_facilitie): $images = $view_all_facilitie['images']; ?>
				<!-- Testimonial Block -->
				<div class="testimonial-block-three">
					<div class="inner-box">
						<div class="row clearfix">

							<!-- Image Column -->
							<div class="image-column col-lg-6 col-md-4 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<img style="width: 100%; height: 300px;" src="<?php echo HOME.$view_all_facilitie['images']; ?>" alt="" />
									</div>
								</div>
							</div>
							<!-- Content Column -->
							<div class="content-column col-lg-6 col-md-8 col-sm-12">
								<div class="inner-column">
									<div class="text"><?php echo $view_all_facilitie['description']; ?></div>
									<a href="<?php echo HOME; ?>nurseryform" class="theme-btn btn-style-eight">Request for Admission now <span class="icon fa fa-arrow-right"></span></a>
									<!-- <h5>Amber Lee</h5> -->
									<!-- <div class="designation">Co-founder</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section Two -->

	<!-- Call To Action Two -->
	<section class="call-to-action-two">
		<div class="auto-container">
			<div class="clearfix">

				<div class="pull-left">
					<h2>Request for <span> Admission</span></h2>
				</div>
				<div class="pull-right">
					<a href="contact" class="theme-btn btn-style-five">Request now <span class="icon fa fa-arrow-right"></span></a>
				</div>

			</div>
		</div>
	</section>
	<!-- End Call To Action Two -->

	<!--Main Footer-->
<?php require_once 'common/footer.php'; ?>
