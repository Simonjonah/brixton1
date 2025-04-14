@include('dashboard.header')


  @include('dashboard.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Courses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Courses </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add a Child to Parent</h3>
            </div>
				<div class="row clearfix">
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
						<div class="contactform">
							<form method="post" action="{{ url('web/createstudentbyparent') }}" enctype="multipart/form-data">
							
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
									<h5>Surname</h5>
									<input class="form-control" type="hidden" name="centername" value="{{ $addyour_child->centername }}" placeholder="Surname" required="">
									<input class="form-control" type="hidden" name="user_id" value="{{ $addyour_child->id }}" placeholder="Surname" required="">
									<input class="form-control" type="hidden" name="ref_no" value="{{ $addyour_child->ref_no }}" placeholder="Surname" required="">
									<input class="form-control" type="text" name="surname" value="" placeholder="Surname" required="">
								</div>
								
								<div class="form-group">
									<h5>First name</h5>
									<input class="form-control" type="text" name="fname" value="" placeholder="First Name" required="">
								</div>
								<div class="form-group">
									<h5>Middle name</h5>
                                    <input type="text" name="middlename" class="form-control" @error('middlename')
                          
                                    @enderror value="{{ old('middlename') }}" id="exampleInputEmail1" placeholder="Middlename">
                                  </div>
                                  @error('middlename')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
              
								<div class="form-group">
									<h5>Place of Birth</h5>
                                    <input type="text" name="placeofbirth" class="form-control" @error('placeofbirth')
                          
                                    @enderror value="{{ old('placeofbirth') }}" id="exampleInputEmail1" placeholder="Place of Birth">
                                  </div>
                                  @error('placeofbirth')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
              
								
								
								
								<div class="form-group">
									<h5>Religion</h5>
                                    <input type="text" name="religion" class="form-control" @error('religion')
                          
                                    @enderror value="{{ old('religion') }}" id="exampleInputEmail1" placeholder="Religion">
                                  </div>
                                  @error('religion')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
              

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
                                    <input type="text" name="state" class="form-control" @error('state')
                          
                                    @enderror value="{{ old('state') }}" id="exampleInputEmail1" placeholder="State of Origin">
                                  </div>
                                  @error('state')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
              
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="form-group">
							<h5>Date of Birth</h5>
							{{-- <input class="form-control" type="date" name="dob" value="" placeholder="Date of birth" required=""> --}}
                            <input type="date" name="dob" class="form-control" @error('dob')
                          
                            @enderror value="{{ old('dob') }}" id="exampleInputEmail1" placeholder="Date of Birth">
                          </div>
                          @error('dob')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
      

						<div class="form-group">
							<h5>Proposed Month of Entry</h5>
                            <input type="month" name="monthofentry" class="form-control" @error('monthofentry')
                          
                            @enderror value="{{ old('monthofentry') }}" id="exampleInputEmail1" placeholder="Class Name">
                          </div>
                          @error('monthofentry')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
      
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
                      <option value="{{ Auth::guard('web')->user()->section }}">{{ Auth::guard('web')->user()->section }}</option>
                      {{-- <option value="{{ $edit_student->section }}">{{ $edit_student->section }}</option> --}}
                        <option value="Early Years Foundation Stage (EYFS)">Early Years (EYFS)</option>
                        <option value="Primary">Primary</option>
                        <option value="High School">High School</option>
																	
							</select>
						</div>  
						
								
							<div class="form-group">
								<h4>Child Passport</h4>
                    			<input  class="form-control" type="file" name="images" id="fileToUpload" required="">
							</div>

                           
                            <div class="form-group">
                                <h5>Academy Session</h5>
                                <select class="form-control" name="academic_session" id="">
                                    @foreach ($view_sessions as $view_session)
                                    <option value="{{ $view_session->academic_session }}">{{ $view_session->academic_session }}</option>
                                    @endforeach
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


              </div>
            </div>
          </div>
          <!-- /.card -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  </div>

@include('dashboard.footer')