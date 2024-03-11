@include('pages.common.header')

    <!--End Main Header -->
	
	<!--Page Title-->
    {{-- <section class="page-title" style="background-image:url({{ asset('images/background/bri2.jpg') }})">
    	<div class="auto-container">
			<div class="content">
				<h1>Teachers <span>Registration</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Teachers</li>
				</ul>
			</div>
        </div>
    </section> --}}
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="sec-title centered">
				<div class="title"> Teachers Registration</div>
				<h2>Teachers <span>Registration</span></h2>
				
			</div>
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
						<div class="contactform">
							<form method="post" action="{{ url('createteacher') }}" enctype="multipart/form-data">
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
								<div class="form-group">
									<h5>First Name</h5>
									<input class="form-control" value="{{ old('fname') }}" @error('fname')@enderror type="text" name="fname" value="" placeholder="First Name" required="">
								</div>
								
								<div class="form-group">
									<h5>Middlenames</h5>
									<input type="text" name="middlename" value="{{ old('middlename') }}" @error('middlename')@enderror class="form-control" placeholder="Middlename" required="">
								</div>

								<div class="form-group">
									<h5>Surname</h5>
									<input type="text" name="surname" value="{{ old('surname') }}" @error('surname')@enderror class="form-control" placeholder="Surname" required="">
								</div>

								<div class="form-group">
									<h5>Class</h5>
									<select class="form-control" type="text" name="classname" value="" placeholder="Class" required="">
										@foreach ($display_class as $display_clas)
											<option value="{{ $display_clas->classname }}">{{ $display_clas->classname }}</option>
										@endforeach
										
									</select>
									
								</div>
								
								<div class="form-group">
				                  <h5>Select Study Center</h5>
				                  <select class="form-control" name="centername" required="">
				                    @foreach ($display_centers as $display_center)
											<option value="{{ $display_center->centername }}">{{ $display_center->centername }}</option>
										@endforeach
				                  </select>
				                </div> 
								<div class="form-group">
									<h5>Gender</h5>
									<select class="form-control" name="gender" required="">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
								
								<div class="form-group">
									<h5>Term</h5>
									<select name="entrylevel" class="form-control"  id="">
										<option value="Pioneer Term">Pioneer Term</option>
										<option value="Penultimate Term">Penultimate Term</option>
										<option value="Premium Term">Premium Term</option>
									</select>
								</div>
                               
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="innercolumn">
							
							<div class="form-group">
								<h5>Phone</h5>
								<input type="text" name="phone" class="form-control" placeholder="Phone" required="">
							</div>
							<div class="form-group">
								<h5>Email</h5>
								<input type="email" name="email" class="form-control" placeholder="Email" required="">
							</div>
							 
							
							<div class="form-group">
								<h5>Address</h5>
								<input type="text" name="fatheraddress" class="form-control" placeholder="Address" required="">
							</div>
								
							<div class="form-group">
								<h5>Section </h5>
								<select required class="form-control" type="text" name="section">
									<option value="Creche">Creche</option>
									<option value="Pre-School">Pre-School</option>
									<option value="Preparatory">Preparatory</option>
									<option value="Nursery">Nursery</option>
									<option value="Primary">Primary</option>
									<option value="High School">High School</option>
																		
								</select>
							</div>

							<div class="form-group">
								<h4>UPLOAD PASSPORD</h4>
                				<input type="file" name="images" id="fileToUpload" required="">
							</div>
							
							<div class="form-group">
								<h5>Password</h5>
								<input type="password" name="password" class="form-control" placeholder="Password" required="">
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

	@include('pages.common.footer')
