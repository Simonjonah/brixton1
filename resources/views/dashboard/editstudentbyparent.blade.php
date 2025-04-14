@include('dashboard.header')

  @include('dashboard.sidebar')
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
                      <form method="post" action="{{ url('web/updatestudent/'.$edit_student->id) }}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
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
                          <input class="form-control" type="text" name="surname" value="{{ $edit_student->surname }}" placeholder="Surname" >
                        </div>
                        
                        <div class="form-group">
                          <h5>First name</h5>
                          <input class="form-control" type="text" name="fname" value="{{ $edit_student->fname }}" placeholder="First Name" >
                        </div>
                        <div class="form-group">
                          <h5>Middle name</h5>
                          <input class="form-control" type="text" name="middlename" value="{{ $edit_student->middlename }}" placeholder="Middle Name" >
                        </div>
                        <div class="form-group">
                          <h5>Place of Birth</h5>
                          <input class="form-control" type="text" name="placeofbirth" value="{{ $edit_student->placeofbirth }}" placeholder="Place of birth" >
                        </div>
                       
                        <div class="form-group">
                          <h5>Religion</h5>
                          <input class="form-control" type="text" name="religion" value="{{ $edit_student->religion }}" placeholder="Religion" >
                        </div>
                        <div class="form-group">
                          <h5>Center Name</h5>
                          <input class="form-control" type="text" name="centername" value="{{ $edit_student->centername }}" placeholder="Center Name" >
                        </div>

                        <div class="form-group">
                          <h5>Term</h5>
                          <select name="entrylevel" class="form-control"  id>
                            <option value="{{ $edit_student->entrylevel }}">{{ $edit_student->entrylevel }}</option>
  
                            <option value="Pioneer Term">Pioneer Term</option>
                            <option value="Penultimate Term">Penultimate Term</option>
                            <option value="Premium Term">Premium Term</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <h5>State of Origin</h5>
                          <input class="form-control" type="text" name="state" value="{{ $edit_student->state }}" placeholder="State" >
                        </div>
                        
                        

                    </div>
                  </div>
                  
                  <!-- Form Column -->
                  <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="form-group">
                      <h5>Date of Birth</h5>
                      <input class="form-control" type="date" name="dob" value="{{ $edit_student->dob }}" placeholder="Date of birth" >
                    </div>

                    <div class="form-group">
                      <h5>Propose Month of Entry</h5>
                      <input class="form-control" type="month" name="monthofentry" value="{{ $edit_student->monthofentry }}" placeholder="Propose month of entry " >
                    </div>
                    <div class="form-group">
                      <h5>Entry Level</h5>
                      <select class="form-control" type="text" name="classname" >
                        @foreach ($add_class as $add_clas)
                          <option value="{{ $add_clas->classname }}">{{ $add_clas->classname }}</option>
                        @endforeach
                      </select>
                      
                    </div>
                    <h5>Select Gender</h5>
                    <div class="form-group">
                      <select class="form-control" name="gender" >
                        <option value="{{ $edit_student->gender }}">{{ $edit_student->gender }}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <h5>Section </h5>
                      <select  class="form-control" type="text" name="section">
                        <option value="{{ $edit_student->section }}">{{ $edit_student->section }}</option>
                        <option value="Early Years Foundation Stage (EYFS)">Early Years (EYFS)</option>
                        <option value="Primary">Primary</option>
                        <option value="High School">High School</option>
                                          
                      </select>
                    </div>
                    
                    <div class="form-group">
                        <h5>Academic Session </h5>
                        <select  class="form-control" type="text" name="academic_session">
                          @foreach ($acas as $aca)
                          <option value="{{ $aca->academic_session }}">{{ $aca->academic_session }}</option>
                          @endforeach
                                            
                        </select>
                      </div>
                    
                    
                        
                      <div class="form-group">
                        <h4>Child Passport</h4>
                        <img style="width: 100px; height: 50px" src="{{ URL::asset("/public/../$edit_student->images")}}" alt>
                          <input  class="form-control" type="file" name="images" id="fileToUpload" >
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
 
 @include('dashboard.footer')