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
			<div class="inner-container">
				<div class="sec-title centered">
				<h2>BRIXTONN SCHOOLS </h2>

				<h5 style="color: #000">{{ $centerviews->address }}</h5>
				<span><img style="width: 200px; " src="{{ asset('images/sch14.jpg') }}"></a></span>
			</div>
					
				<div class="row clearfix">
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
						<div class="contactform">
							<form method="post" action="{{ url('createadmission') }}" enctype="multipart/form-data">
							
							@csrf
								
								<div class="form-group">
									<h5>Surname</h5>
									<input class="form-control" type="hidden" name="centername" value="{{ $centerviews->centername }}" placeholder="Surname" required="">
									<input class="form-control" type="hidden" name="slug" value="{{ $centerviews->slug }}" placeholder="Surname" required="">
									<input class="form-control" type="text" name="surname" value="" placeholder="Surname" required="">
								</div>
								
								<div class="form-group">
									<h5>First name</h5>
									<input class="form-control" type="text" name="fname" value="" placeholder="First Name" required="">
								</div>
								<div class="form-group">
									<h5>Middle name</h5>
									<input class="form-control" type="text" name="middlename" value="" placeholder="Middle Name" required="">
								</div>
								<div class="form-group">
									<h5>Place of Birth</h5>
									<input class="form-control" type="text" name="placeofbirth" value="" placeholder="Place of birth" required="">
								</div>
								
								

								<div class="form-group">
									<h5>Phone</h5>
								<input class="form-control" @error('phone') is-invalid @enderror" 
								value="{{ old('phone') }}" type="number" name="phone" value="" placeholder="phone" required="">
	
								@error('phone')
								<span class="text-danger">{{ $message }}</span>
								@enderror 
							</div>
								
								<div class="form-group">
									<h5>Religion</h5>
									<input class="form-control" type="text" name="religion" value="" placeholder="Religion" required="">
								</div>

								<div class="form-group">
									<h5>Term</h5>
									<select name="entrylevel" class="form-control"  id="">
										<option value="Pioneer Term">Pioneer Term</option>
										<option value="Penultimate Term">Penultimate Term</option>
										<option value="Premium Term">Premium Term</option>
									</select>
								</div>
								<div class="form-group">
									<h5>State of Origin</h5>
									<input class="form-control" type="text" name="state" value="" placeholder="State" required="">
								</div>
								<div class="form-group">
									<h5>Academy Session</h5>
									<select class="form-control" name="academic_session" id="">
										@foreach ($view_sessions as $view_session)
										<option value="{{ $view_session->academic_session }}">{{ $view_session->academic_session }}</option>
										@endforeach
									</select>
								</div>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="form-group">
							<h5>Date of Birth</h5>
							<input class="form-control" type="date" name="dob" value="" placeholder="Date of birth" required="">
						</div>

						<div class="form-group">
							<h5>Proposed Month of Entry</h5>
							<input class="form-control" type="month" name="monthofentry" value="" placeholder="Propose month of entry " required="">
						</div>
						<div class="form-group">
							<h5>Entry Level</h5>
							<select class="form-control" type="text" name="classname" required="">
								@foreach ($add_class as $add_clas)
									<option value="{{ $add_clas->classname }}">{{ $add_clas->classname }}</option>
								@endforeach
							</select>
							
						</div>
						<h5>Select Gender</h5>
						<div class="form-group">
							<select class="form-control" name="gender" required="">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="form-group">
							<h5>Section </h5>
							<select required class="form-control" type="text" name="section">
								<option value="Early Years Foundation Stage (EYFS)">Early Years (EYFS)</option>
            					<option value="Primary">Primary</option>
								<option value="High School">High School</option>
							</select>
						</div>  
						<div class="form-group">
								<h5>EMAIL</h5>
							<input class="form-control" @error('email') is-invalid @enderror" 
							value="{{ old('email') }}" type="text" name="email" value="" placeholder="Email" required="">

							@error('email')
							<span class="text-danger">{{ $message }}</span>
							@enderror 
						</div>
						
								
							<div class="form-group">
								<h4>Child Passport</h4>
                    			<input required class="form-control" type="file" name="images" id="fileToUpload" required="">
							</div>

							<div class="form-group">
								<h5>Phone Number</h5>
								<input class="form-control" type="password" name="password" value="" placeholder="Phone Number" required="">
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
