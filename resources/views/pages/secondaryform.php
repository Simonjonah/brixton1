<?php require_once 'common/header.php'; ?>

    <!--End Main Header -->
	<style type="text/css">
		.brixton{
			display: inline-block;
    		max-width: 100%;
   		 	height: auto;
    		margin-left: 161px;
		}
	</style>
	<!--Page Title-->
   <!--  <section class="page-title" style="background-image:url(<?php echo HOME; ?>images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Nursery <span>Form</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="<?php echo HOME; ?>home">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
        </div>
    </section> -->
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
	<section class="contact-page-section" style="margin-bottom: 40px;">
		<div class="auto-container">
			<div class="inner-container">
				<div class="sec-title centered">
				<h2>NIGERIAN CHRISTIAN INSTITUTE <br>EARLY LEARNING CENTRE</h2>

				<h5 style="color: #000">30 IBB AVENUE, Uyo Akwa Ibom State, Nigeria</h5>
				<span><img style="width: 90px; " src="images/sch14.jpg"></a></span>
			</div>
				
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
						<div class="contactform">
							<form method="post" action="" enctype="multipart/form-data">
							
								<div class="form-group">
									<h5>FIRSTNAME</h5>
									<input class="form-control" type="text" name="firstname" value="" placeholder="Firstname" required="">
								</div>
								
								<div class="form-group">
									<h5>OTHER NAMES</h5>
									<input class="form-control" type="text" name="othername" value="" placeholder="Othernames" required="">
								</div>
									<h5>SELECT GENDER</h5>
								<div class="form-group">
									<select class="form-control" name="sex" required="">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								<div class="form-group">
									<h5>STATE OF ORIGIN</h5>
									<input class="form-control" type="text" name="stateoforigin" value="" placeholder="State of origin" required="">
								</div>
								<div class="form-group">
									<h5>LOCAL GOVERNMENT</h5>

									<input class="form-control" type="text" name="localgovt" value="" placeholder="Local Government Origin" required="">
								</div>
								
								<div class="form-group">
									<h5>NATIONALITY</h5>

									<input class="form-control" type="text" name="nationality" value="" placeholder="Nationality" required="">
								</div>
								<div class="form-group">
									<h5>RELIGION</h5>

									<input class="form-control" type="text" name="religion" value="" placeholder="Religion" required="">
								</div>
								<div class="form-group">
									<h5>DATE OF BIRTH</h5>

									<input class="form-control" type="text" name="dateofbirth" value="" placeholder="Date of birth" required="">
								</div>
								
								<div class="form-group">
									<h5>SELECT CLASS</h5>
									<select class="form-control" type="text" name="class" required="">
										<option>PLEASE SELECT CLASS</option>
										<option>JSS ONE (1)</option>
										<option>JSS TWO (2)</option>
										<option>JSS THREE (3)</option>
										<option>SS ONE (1)</option>
										<option>SS TWO (2)</option>
										<option>SS THREE (3)</option>
									</select>
									
								</div>
								<h5>NAME OF FATHER</h5>
								<div class="form-group">
									<input class="form-control" type="text" name="fathername" value="" placeholder="Name Of Father">
								</div>
									                                 
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="innercolumn">
							<div class="form-group">
									<h5>CHILD'S HEALTH STATUS</h5>

								<input class="form-control" type="text" name="health" value="" placeholder="Health Status of Your Child" required="">
							</div>
							<div class="form-group">
									<h5>FORMER SCHOOL</h5>

								<input class="form-control" type="text" name="formerschool" value="" placeholder="Former School" required="">
							</div>  

							<div class="form-group">
									<h5>CONTACT ADDRESS</h5>

								<input class="form-control" type="text" name="contactaddress" value="" placeholder="Contact address of Parent" required="">
							</div>

							<div class="form-group">
									<h5>EMAIL</h5>

								<input class="form-control" type="text" name="email" value="" placeholder="Email" required="">
							</div>
								
							<div class="form-group">
								<h4>UPLOAD PASSPORT</h4>
                    			<input type="file" name="fileToUpload" id="fileToUpload" required="">
							</div>

							
		                    <div class="form-group">
									<h5>PHONE NUMBER</h5>

		                        <input class="form-control" type="text" name="password" placeholder="Phone Number" required="">
		                    </div>

		                    <div class="form-group">
								<h5>NAME OF MOTHER</h5>
								<input class="form-control" type="text" name="mothername" value="" placeholder="Name Of Mother" required="">
							</div>
							<div class="form-group">
								<h5>PHONE NUMBER</h5>
								<input class="form-control" type="text" name="tel" value="" placeholder="Parent Phone number" required="">
							</div>
							<div class="form-group">
								<h5>DATE OF REGISTRATION</h5>
								<input class="form-control" type="date" name="dateregister" value="" required="">
							</div>

		                    <div class="form-group">
		                        <h4>Declaration</h4>
		                        <select class="form-control" name="message">
		                        	<option>, has provides the above information correctly, and that if the information above is not correct that my right of <br>studentship should be terminated</option>
		                          </select>
		                    </div>
							<div class="form-group">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>                                        
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<!-- End Team Page Section -->
	
	
	
	<!--Main Footer-->
<?php require_once 'common/footer.php'; ?>