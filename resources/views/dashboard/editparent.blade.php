@include('dashboard.header')

  @include('dashboard.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Upload </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload  </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Add </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
 
				<div class="row clearfix">
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <h3>Details of Child's Parent (Father)</h3>
						<div class="contactform">
							<form method="post" action="{{ url('web/updatecreateparenthead/'.$edit_parent->ref_no) }}" enctype="multipart/form-data">
							@csrf

                            @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif
          
                            @if (Session::get('fail'))
                            <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                            @endif
                            @method('PUT')
								<div class="form-group">
									<h5>Surname</h5>
									<input class="form-control" type="text" name="fathersurname" value="{{ $edit_parent->fathersurname }}" placeholder="Surname" required="">
								</div>
								
								<div class="form-group">
									<h5>First name</h5>
									<input class="form-control" type="text" name="fathername" value="{{ $edit_parent->fathername }}" placeholder="First Name" required="">
								</div>
								<div class="form-group">
									<h5>Middle name</h5>
									<input class="form-control" type="text" name="fathermiddlename" value="{{ $edit_parent->fathermiddlename }}" placeholder="Middle Name" required="">
								</div>
								<div class="form-group">
									<h5>Title</h5>
									<input class="form-control" type="text" name="title" value="{{ $edit_parent->title }}" placeholder="Title" required="">
								</div>
								 
                   
                                <div class="form-group">
									<h5>Nationality</h5>
									<input class="form-control" type="text" name="nationality" value="{{ $edit_parent->nationality }}" placeholder="Nationality" required="">
								</div>
                                <div class="form-group">
									<h5>Employer</h5>
									<input class="form-control" type="text" name="fatheremployer" value="{{ $edit_parent->fatheremployer }}" placeholder="Employer" required="">
								</div>

             
                   
								<div class="form-group">
									<h5>Address</h5>
									<input class="form-control" type="text" name="fatheraddress" value="{{ $edit_parent->fatheraddress }}" placeholder="Address" required="">
								</div>
                                <div class="form-group">
									<h5>Select Center</h5>
                                <select name="centername"  class="form-control">
                                    @foreach ($addcenters as $addcenter)
                                        <option value="{{ $addcenter->centername }}">{{ $addcenter->centername }}</option>
                                    @endforeach
                                </select>
								</div>
                                
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <h3>Details of Child's Parent (Mother)</h3>
						<div class="form-group">
                            <h5>Surname</h5>
                            <input class="form-control" type="text" name="mothersurname" value="{{ $edit_parent->mothersurname }}" placeholder="Surname" required="">
                        </div>
                        
                        <div class="form-group">
                            <h5>First name</h5>
                            <input class="form-control" type="text" name="mothername" value="{{ $edit_parent->mothername }}" placeholder="First Name" required="">
                        </div>
                        <div class="form-group">
                            <h5>Middle name</h5>
                            <input class="form-control" type="text" name="mothermiddlename" value="{{ $edit_parent->mothermiddlename }}" placeholder="Middle Name" required="">
                        </div>
                        <div class="form-group">
                            <h5>Title</h5>
                            <input class="form-control" type="text" name="mothertitle" value="{{ $edit_parent->mothertitle }}" placeholder="Title" required="">
                        </div>
                        <div class="form-group">
                            <h5>Phone</h5>
                            <input class="form-control" type="text" name="motherphone" value="{{ $edit_parent->motherphone }}" placeholder="Phone Number" required="">
                        </div>
                        <div class="form-group">
                            <h5>Nationality</h5>
                            <input class="form-control" type="text" name="mothernationality" value="{{ $edit_parent->mothernationality }}" placeholder="Nationality" required="">
                        </div>
                        <div class="form-group">
                            <h5>Employer</h5>
                            <input class="form-control" type="text" name="motheremployer" value="{{ $edit_parent->motheremployer }}" placeholder="Employer" required="">
                        </div>

                        <div class="form-group">
                            <h5>Mother Email</h5>
                            <input class="form-control" type="text" name="motheremail" value="{{ $edit_parent->motheremail }}" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <h5>Address</h5>
                            <input class="form-control" value="{{ $edit_parent->motheraddress }}" type="text" name="motheraddress" value="" placeholder="Address" required="">
                        </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Section</label>
                      <select name="section" class="form-control" required>
                        <option value="{{ $edit_parent->section }}">{{ $edit_parent->section }}</option>
                      <option value="Early Years Foundation Stage (EYFS)">Early Years (EYFS)</option>
                      <option value="Primary">Primary</option>
								      <option value="High School">High School</option>
                      </select>
                    </div>
                    @error('section')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

          
                
							<div class="form-group">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>                                        
						</form>
					</div>
				</div>
    <!-- /.content -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
    @include('dashboard.footer')