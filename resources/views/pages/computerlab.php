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
					<li>Computer Laboratory</li>
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
				<?php if (count($computerlab_facilities) > 0): ?>
				<?php foreach ($computerlab_facilities as $computerlab_facilitie): $images = $computerlab_facilitie['images']; ?>
				
				<div class="case-block-two col-lg-4 col-md-6 col-sm-12">

					<div class="inner-box wow pulse" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image-outer">
							<div class="image">
								<img src="<?php echo HOME. $computerlab_facilitie['images']; ?>" alt="" />
								<div class="overlay-box">
									<a href="<?php echo HOME. $computerlab_facilitie['images']; ?>" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
								</div>
							</div>
						</div>
						<div class="lower-content">
							<div class="category"><h5>Computer Laboratory</h5></div>
							<p><?php echo $computerlab_facilitie['description']; ?></p></div>
						</div>
					</div>

					<?php endforeach; ?>
			<?php endif; ?>
				</div>
				<div class="text-center" style="margin-top: 20px;">
				<a href="<?php echo HOME; ?>library" class="theme-btn btn-style-fourteen">View Facilities</a>
			</div>
			</div>	
		</div>
	</section>
	<!-- End Case Section Three-->

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
