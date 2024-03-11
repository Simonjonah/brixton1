@include('dashboard.admin.header')

  @include('dashboard.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
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
        
          <section class="contact-page-section" style="margin-bottom: 30px;">
            <div class="auto-container">
              <div class="inner-container">
               
                  
                <div class="row clearfix">
                  <!-- Info Column -->
                  <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="contactform">
                      <form method="post" action="{{ url('admin/updateadmission/'.$edit_students->ref_no) }}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group">
                          <h5>Surname</h5>
                          <input class="form-control" type="text" name="surname" value="{{ $edit_students->surname }}" placeholder="Surname" required="">
                        </div>
                        
                        <div class="form-group">
                          <h5>First name</h5>
                          <input class="form-control" type="text" name="fname" value="{{ $edit_students->fname }}" placeholder="First Name" required="">
                        </div>
                        <div class="form-group">
                          <h5>Middle name</h5>
                          <input class="form-control" type="text" name="middlename" value="{{ $edit_students->middlename }}" placeholder="Middle Name" required="">
                        </div>
                        <div class="form-group">
                          <h5>Place of Birth</h5>
                          <input class="form-control" type="text" name="placeofbirth" value="{{ $edit_students->placeofbirth }}" placeholder="Place of birth" required="">
                        </div>
                        <div class="form-group">
                          <h5>Phone</h5>
                          <input class="form-control" type="text" name="phone" value="{{ $edit_students->phone }}" placeholder="Phone Number" required="">
                        </div>
                        
                        <div class="form-group">
                          <h5>Religion</h5>
                          <input class="form-control" type="text" name="religion" value="{{ $edit_students->religion }}" placeholder="Religion" required="">
                        </div>
                        <div class="form-group">
                          <h5>Center Name</h5>
                          <input class="form-control" type="text" name="centername" value="{{ $edit_students->centername }}" placeholder="Center Name" required="">
                        </div>

                        <div class="form-group">
                          <h5>Term</h5>
                          <select name="entrylevel" class="form-control"  id="">
                            <option value="{{ $edit_students->entrylevel }}">{{ $edit_students->entrylevel }}</option>
  
                            <option value="Pioneer Term">Pioneer Term</option>
                            <option value="Penultimate Term">Penultimate Term</option>
                            <option value="Premium Term">Premium Term</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <h5>State of Origin</h5>
                          <input class="form-control" type="text" name="state" value="{{ $edit_students->state }}" placeholder="State" required="">
                        </div>
                        
                        

                    </div>
                  </div>
                  
                  <!-- Form Column -->
                  <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="form-group">
                      <h5>Date of Birth</h5>
                      <input class="form-control" type="date" name="dob" value="{{ $edit_students->dob }}" placeholder="Date of birth" required="">
                    </div>

                    <div class="form-group">
                      <h5>Propose Month of Entry</h5>
                      <input class="form-control" type="month" name="monthofentry" value="{{ $edit_students->monthofentry }}" placeholder="Propose month of entry " required="">
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
                        <option value="{{ $edit_students->gender }}">{{ $edit_students->gender }}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <h5>Section </h5>
                      <select required class="form-control" type="text" name="section">
                        <option value="{{ $edit_students->section }}">{{ $edit_students->section }}</option>
                        <option value="Creche">Creche</option>
                        <option value="Pre-School">Pre-School</option>
                        <option value="Preparatory">Preparatory</option>
                        <option value="Nursery">Nursery</option>
                        <option value="Primary">Primary</option>
                        <option value="High School">High School</option>
                                          
                      </select>
                    </div>  
                    <div class="form-group">
                        <h5>EMAIL</h5>
                      <input class="form-control" type="text" name="email" value="{{ $edit_students->email }}" placeholder="Email" required="">

                      @error('email')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror 
                    </div>
                    
                        
                      <div class="form-group">
                        <h4>Child Passport</h4>
                        <img style="width: 100px; height: 50px" src="{{ URL::asset("/public/../$edit_students->images")}}" alt="">
                          <input required class="form-control" type="file" name="images" id="fileToUpload" required="">
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
 
 @include('dashboard.admin.footer')