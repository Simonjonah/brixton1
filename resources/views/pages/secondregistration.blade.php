@include('pages.common.header')


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
    {{-- <section class="page-title" style="background-image:url(images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Nursery <span>Form</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
        </div>
    </section> --}}
    
	<!-- Contact Page Section -->
	<section class="contact-page-section" style="margin-bottom: 30px;">
		<div class="auto-container">
		
			<h3 style="color: green">{{ $addsec_registration->surname }} Please Continue</h3>
				<div class="row clearfix">
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <h3>Details of Child's Parent (Father)</h3>
						<div class="contactform">
							<form method="post" action="{{ url('addsecondadmmin/'.$addsec_registration->ref_no) }}" enctype="multipart/form-data">
							@csrf
								<div class="form-group">
									<h5>Surname</h5>
									<input class="form-control" type="text" name="fathersurname" value="{{ $addsec_registration->fathersurname }}" placeholder="Surname" required="">
								</div>
								
								<div class="form-group">
									<h5>First name</h5>
									<input class="form-control" type="text" name="fathername" value="{{ $addsec_registration->fathername }}" placeholder="First Name" required="">
								</div>
								<div class="form-group">
									<h5>Middle name</h5>
									<input class="form-control" type="text" name="fathermiddlename" value="{{ $addsec_registration->fathermiddlename }}" placeholder="Middle Name" required="">
								</div>
								<div class="form-group">
									<h5>Title</h5>
									<input class="form-control" type="text" name="title" value="{{ $addsec_registration->title }}" placeholder="Title" required="">
								</div>
								<div class="form-group">
									<h5>Phone</h5>
									<input class="form-control" type="text" name="fatherphone" value="{{ $addsec_registration->fatherphone }}" placeholder="Phone Number" required="">
								</div>
                                <div class="form-group">
									<h5>Nationality</h5>
									<input class="form-control" type="text" name="nationality" value="{{ $addsec_registration->nationality }}" placeholder="Nationality" required="">
								</div>
                                <div class="form-group">
									<h5>Employer</h5>
									<input class="form-control" type="text" name="fatheremployer" value="{{ $addsec_registration->fatheremployer }}" placeholder="Employer" required="">
								</div>

                                <div class="form-group">
									<h5>Email</h5>
									<input class="form-control" type="text" name="fatheremail" value="{{ $addsec_registration->fatheremail }}" placeholder="Email" required="">
								</div>
								<div class="form-group">
									<h5>Address</h5>
									<input class="form-control" type="text" name="fatheraddress" value="{{ $addsec_registration->fatheraddress }}" placeholder="Address" required="">
								</div>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <h3>Details of Child's Parent (Mother)</h3>
						<div class="form-group">
                            <h5>Surname</h5>
                            <input class="form-control" type="text" name="mothersurname" value="{{ $addsec_registration->mothersurname }}" placeholder="Surname" required="">
                        </div>
                        
                        <div class="form-group">
                            <h5>First name</h5>
                            <input class="form-control" type="text" name="mothername" value="{{ $addsec_registration->mothername }}" placeholder="First Name" required="">
                        </div>
                        <div class="form-group">
                            <h5>Middle name</h5>
                            <input class="form-control" type="text" name="mothermiddlename" value="{{ $addsec_registration->mothermiddlename }}" placeholder="Middle Name" required="">
                        </div>
                        <div class="form-group">
                            <h5>Title</h5>
                            <input class="form-control" type="text" name="mothertitle" value="{{ $addsec_registration->mothertitle }}" placeholder="Title" required="">
                        </div>
                        <div class="form-group">
                            <h5>Phone</h5>
                            <input class="form-control" type="text" name="motherphone" value="{{ $addsec_registration->motherphone }}" placeholder="Phone Number" required="">
                        </div>
                        <div class="form-group">
                            <h5>Nationality</h5>
                            <input class="form-control" type="text" name="mothernationality" value="{{ $addsec_registration->mothernationality }}" placeholder="Nationality" required="">
                        </div>
                        <div class="form-group">
                            <h5>Employer</h5>
                            <input class="form-control" type="text" name="motheremployer" value="{{ $addsec_registration->motheremployer }}" placeholder="Employer" required="">
                        </div>

                        <div class="form-group">
                            <h5>Email</h5>
                            <input class="form-control" type="text" name="motheremail" value="{{ $addsec_registration->motheremail }}" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <h5>Address</h5>
                            <input class="form-control" type="text" name="motheraddress" value="{{ $addsec_registration->motheraddress }}" placeholder="Address" required="">
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
	@include('pages.common.footer')
