
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin  Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{  asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{  asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{  asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{  asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{  asset('assets/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{  asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{  asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{  asset('assets/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

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
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>

            
        <section class="contact-us-area">
          <div class="container">
              <div class="row g-5">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="contact-form form-style-2">
                          <div class="section-title">
                              <h4 class="title"></h4>
                          </div>
                          <form action="{{ url('admin/updatestudent/'.$view_singlstudent->id) }}" method="post" enctype="multipart/form-data">
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

                              @method('PUT')

                              <div class="row row--10">

                                  <div class="form-group col-12">
                                      <input type="text" class="form-control" name="surname" id="contact-name"  @error('surname')
                                      @enderror value="{{ $view_singlstudent->surname }}" placeholder="Surname">
                                  </div>
                                  @error('surname')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror

                                  <div class="form-group col-12">
                                      <input class="form-control" type="text"  @error('fname')
                                      @enderror value="{{ $view_singlstudent->fname }}" name="fname" id="contact-name" placeholder="Firstname">
                                  </div>
                                  @error('fname')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror

                                  <div class="form-group col-12">
                                      <input type="text" class="form-control" name="middlename" @error('middlename')
                                      @enderror value="{{ $view_singlstudent->middlename }}" id="contact-name" placeholder="Middlename">
                                  </div>
                                  @error('middlename')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror

                                  <div class="form-group col-12">
                                      <input class="form-control" type="email" @error('email')
                                      @enderror value="{{ $view_singlstudent->email }}" name="email" id="contact-email" placeholder="Enter your email">
                                  </div>
                                  @error('email')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                  
                                  <div class="form-group col-12">
                                      <input class="form-control" type="tel"  @error('phone')
                                      @enderror value="{{ $view_singlstudent->phone }}" name="phone" id="contact-phone" placeholder="Phone number">
                                  </div>
                                  @error('phone')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                  <div class="form-group col-12">
                                      <input type="text" class="form-control"  @error('state')
                                      @enderror value="{{ $view_singlstudent->state }}" name="state" id="contact-phone" placeholder="State">
                                      {{-- <textarea name="contact-message" id="contact-message" cols="30" rows="4" placeholder="Your message"></textarea> --}}
                                  </div>
                                  @error('state')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 

                                  <div class="form-group col-12">
                                      <input type="text" class="form-control"
                                       @error('logalgovt') @enderror value="{{ $view_singlstudent->logalgovt }}"  name="logalgovt" id="contact-phone" placeholder="LGA">
                                  </div>
                                  @error('logalgovt')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 

                                  <div class="form-group col-12">
                                      <input type="text" class="form-control" @error('nationality') @enderror 
                                      value="{{ $view_singlstudent->nationality }}" name="nationality" id="contact-phone" placeholder="Nationality">
                                  </div>
                                  @error('nationality')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 

                                  <div class="form-group col-12">
                                      <input type="text" class="form-control" @error('contactaddress')
                                      @enderror value="{{ $view_singlstudent->contactaddress }}" name="contactaddress" id="contact-phone" placeholder="Contact Address">
                                  </div>
                                  @error('contactaddress')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 

                                  <div class="form-group col-12">
                                      <input type="text" class="form-control" @error('permanentaddress')
                                      @enderror value="{{ $view_singlstudent->permanentaddress }}" name="permanentaddress" id="contact-phone" placeholder="Permanent Address">
                                  </div>
                                  @error('permanentaddress')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror

                                  <div class="form-group col-12">
                                      <input type="text" value="{{ $view_singlstudent->sponsorname }}" class="form-control" name="sponsorname"  id="contact-phone" placeholder="Sponsor Name">
                                  </div>
                                  <div class="form-group col-12">
                                      <input type="text" value="{{ $view_singlstudent->sponsoraddress }}" class="form-control" name="sponsoraddress" id="contact-phone" placeholder="Address of Sponsor">
                                  </div>
                                 
                                  <div class="form-group col-12">
                                      <select value="{{ $view_singlstudent->sessionapplied }}" class="form-control" name="sessionapplied" @error('sessionapplied')
                                      @enderror value="{{ $view_singlstudent->sessionapplied }}" id="">
                                          <option value="{{ $view_singlstudent->sessionapplied }}">{{ $view_singlstudent->sessionapplied }}</option>
                                          <option value="Morning">Morning</option>
                                          <option value="Afternoon">Afternoon</option>
                                          <option value="Evening">Evening</option>
                                      </select>
                                  </div>
                                  @error('sessionapplied')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                  <h4>Additional Qualification (OND, HND, B.sc, NCE etc )</h4>
                                  
                                  <div class="form-group col-12">
                                      <table>
                                          <tr>
                                              <th><div class="form-group col-12">
                                                  <input type="text" value="{{ $view_singlstudent->studyarea }}" class="form-control" name="studyarea" id="contact-phone" placeholder="Specify Area">
                                              </div></th>
                                          <th><div class="form-group col-12">
                                              <input type="text" name="institname" value="{{ $view_singlstudent->institname }}" class="form-control" id="contact-phone" placeholder="Name of Institution">
                                          </div></th>
                                            
                                          </tr>
                                          <tr>
                                              <th><div class="form-group col-12">
                                                  <input type="text"  name="studyear" value="{{ $view_singlstudent->studyear }}" class="form-control" id="contact-phone" placeholder="Year">
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <input type="text" name="gradepass" value="{{ $view_singlstudent->gradepass }}" class="form-control" id="contact-phone" placeholder="Grade of Pass">
                                              </div></th>
                                          </tr>
                                  
                                        </table>

                                        <div class="form-group col-12">
                                        <img style="width: 10%; height: 30px;" src="{{ URL::asset("/public/../$view_singlstudent->additionalquali")}}" alt="">

                                          <h3 for="">Uplaod Certificate here</h3>
                                          <input type="file" name="additionalquali" value="{{ $view_singlstudent->additionalquali }}" class="form-control" id="contact-phone" placeholder="Nationality">
                                      </div>

                                      <div class="form-group col-12">
                                        <img style="width: 10%; height: 30px;" src="{{ URL::asset("/public/../$view_singlstudent->passpot")}}" alt="">
                                          <h3 for="">Uplaod Passport here</h3>
                                          <input type="file" class="form-control" name="passpot" value="{{ $view_singlstudent->passpot }}" id="contact-phone" placeholder="Nationality">
                                      </div>

                                      <div class="form-group col-12">
                                          <table>
                                              <tr>
                                                  <th><div class="form-group col-12">
                                                    
                                                   <select class="form-control" name="quali_obtain" id="">
                                                      <option value="{{ $view_singlstudent->quali_obtain }}">{{ $view_singlstudent->quali_obtain }}</option>
                                                        <option value="WAEC">WAEC</option>
                                                        <option value="NECO">NECO</option>
                                                        <option value="GCE">GCE</option>
                                                        <option value="EQUIVALENT">EQUIVALENT</option>
                                                   </select>
                                                </div></th>
                                                <th><div class="form-group col-12">
                                                    <input type="text" class="form-control" value="{{ $view_singlstudent->examnumber }}"
                                                     name="examnumber" id="contact-phone" placeholder="Examination Number">
                                                </div></th>
                                                  
                                                </tr>
                                                <tr>
                                                    <th><div class="form-group col-12">
                                                        <input type="text" value="{{ $view_singlstudent->centre_name }}" name="centre_name" id="contact-phone" class="form-control" placeholder="Centre Name">
                                                    </div></th>
                                                    <th><div class="form-group col-12">
                                                        <input type="text" value="{{ $view_singlstudent->yearobtain }}" class="form-control" name="yearobtain" id="contact-phone" placeholder="Month/Year Obtain">
                                                    </div></th>
                                                </tr>
                                          </table>
                                      </div>
                                      <div class="form-group col-12">
                                          <label for="dateofbob">Date of Birth</label>
                                          <input class="form-control" type="date"  @error('dob')
                                          @enderror value="{{ $view_singlstudent->dob }}" name="dob" placeholder="dob" required>
                                      </div>
                                      @error('dob')
                                      <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                              </div>
                          
                         
                      </div> 
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="contact-form form-style-2">
                          <div class="section-title">
                              <h4 class="title"></h4>
                          </div>
                          
                              <div class="row row--10">
                                  <div class="form-group col-12">
                                      <table>
                                          
                                          <tr><th> <h3 style="text-align: center">Subject Taken</h3></th></tr>
                                          <tr>
                                             
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="subject1" id="">
                                                      <option value="{{ $view_singlstudent->subject1 }}">{{ $view_singlstudent->subject1 }}</option>
                                                      <option value="Mathematic">Mathematics</option>
                                                      <option value="English Language">English Language</option>
                                                      <option value="Biology">Biology</option>
                                                      <option value="Economics">Economics</option>
                                                      <option value="Literature">Literature</option>
                                                      <option value="Computer Studies">Computer Studies</option>
                                                      <option value="Library Studies">Library Studies</option>
                                                      <option value="Physics">Physics</option>
                                                      <option value=" Chemistry">Chemistry</option>
                                                      <option value="Technical Drawing">Technical Drawin</option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                      <option value="French">French</option>
                                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                                      <option value="C. R. Studies">C. R. Studies</option>
                                                      <option value="Government">Government</option>
                                                      <option value="History">History</option>
                                                      <option value="Geography  Music">Geography</option>
                                                      <option value="Fine Arts">Fine Arts</option>
                                                      <option value="Music">Music</option>
                                                      <option value="Agricultural Science">Commerce</option>
                                                      <option value="Financial Accounting">Financial Accounting</option>
                                                      <option value="Commerce ">Commerce </option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                 </select>
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="grade1" id="">
                                                      <option value="{{ $view_singlstudent->grade1 }}">{{ $view_singlstudent->grade1 }}</option>
                                                      <option value="A1">A1</option>
                                                      <option value="A2">A2</option>
                                                      <option value="A3">A3</option>
                                                      <option value="B2">B2</option>
                                                      <option value="B3">B3</option>
                                                      <option value="C4">C4</option>
                                                      <option value="C5">C5</option>
                                                      <option value="C6">C6</option>
                                                      <option value="D7">D7</option>
                                                      <option value="F9">F9</option>
                                                 </select>
                                              </div></th>
                                          </tr>
                                          <tr>
                                             
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="subject2" id="">
                                                      <option value="{{ $view_singlstudent->subject2 }}">{{ $view_singlstudent->subject2 }}</option>
                                                      <option value="Mathematic">Mathematics</option>
                                                      <option value="English Language">English Language</option>
                                                      <option value="Biology">Biology</option>
                                                      <option value="Economics">Economics</option>
                                                      <option value="Literature">Literature</option>
                                                      <option value="Computer Studies">Computer Studies</option>
                                                      <option value="Library Studies">Library Studies</option>
                                                      <option value="Physics">Physics</option>
                                                      <option value=" Chemistry">Chemistry</option>
                                                      <option value="Technical Drawing">Technical Drawin</option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                      <option value="French">French</option>
                                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                                      <option value="C. R. Studies">C. R. Studies</option>
                                                      <option value="Government">Government</option>
                                                      <option value="History">History</option>
                                                      <option value="Geography  Music">Geography</option>
                                                      <option value="Fine Arts">Fine Arts</option>
                                                      <option value="Music">Music</option>
                                                      <option value="Agricultural Science">Commerce</option>
                                                      <option value="Financial Accounting">Financial Accounting</option>
                                                      <option value="Commerce ">Commerce </option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                 </select>
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="grade2" id="">
                                                      <option value="{{ $view_singlstudent->grade2 }}">{{ $view_singlstudent->grade2 }}</option>

                                                      <option value="A1">A1</option>
                                                      <option value="A2">A2</option>
                                                      <option value="A3">A3</option>
                                                      <option value="B2">B2</option>
                                                      <option value="B3">B3</option>
                                                      <option value="C4">C4</option>
                                                      <option value="C5">C5</option>
                                                      <option value="C6">C6</option>
                                                      <option value="D7">D7</option>
                                                      <option value="F9">F9</option>
                                                 </select>
                                              </div></th>
                                          </tr>

                                          <tr>
                                             
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="subject3" id="">
                                                      <option value="{{ $view_singlstudent->subject3 }}">{{ $view_singlstudent->subject3 }}</option>
                                                      <option value="Mathematic">Mathematics</option>
                                                      <option value="English Language">English Language</option>
                                                      <option value="Biology">Biology</option>
                                                      <option value="Economics">Economics</option>
                                                      <option value="Literature">Literature</option>
                                                      <option value="Computer Studies">Computer Studies</option>
                                                      <option value="Library Studies">Library Studies</option>
                                                      <option value="Physics">Physics</option>
                                                      <option value=" Chemistry">Chemistry</option>
                                                      <option value="Technical Drawing">Technical Drawin</option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                      <option value="French">French</option>
                                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                                      <option value="C. R. Studies">C. R. Studies</option>
                                                      <option value="Government">Government</option>
                                                      <option value="History">History</option>
                                                      <option value="Geography  Music">Geography</option>
                                                      <option value="Fine Arts">Fine Arts</option>
                                                      <option value="Music">Music</option>
                                                      <option value="Agricultural Science">Commerce</option>
                                                      <option value="Financial Accounting">Financial Accounting</option>
                                                      <option value="Commerce ">Commerce </option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                 </select>
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="grade3" id="">
                                                      <option value="{{ $view_singlstudent->grade3 }}">{{ $view_singlstudent->grade3 }}</option>

                                                      <option value="A1">A1</option>
                                                      <option value="A2">A2</option>
                                                      <option value="A3">A3</option>
                                                      <option value="B2">B2</option>
                                                      <option value="B3">B3</option>
                                                      <option value="C4">C4</option>
                                                      <option value="C5">C5</option>
                                                      <option value="C6">C6</option>
                                                      <option value="D7">D7</option>
                                                      <option value="F9">F9</option>
                                                 </select>
                                              </div></th>
                                          </tr>
                                          <tr>
                                             
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="subject4" id="">
                                                      <option value="{{ $view_singlstudent->subject4 }}">{{ $view_singlstudent->subject4 }}</option>
                                                      <option value="Mathematic">Mathematics</option>
                                                      <option value="English Language">English Language</option>
                                                      <option value="Biology">Biology</option>
                                                      <option value="Economics">Economics</option>
                                                      <option value="Literature">Literature</option>
                                                      <option value="Computer Studies">Computer Studies</option>
                                                      <option value="Library Studies">Library Studies</option>
                                                      <option value="Physics">Physics</option>
                                                      <option value=" Chemistry">Chemistry</option>
                                                      <option value="Technical Drawing">Technical Drawin</option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                      <option value="French">French</option>
                                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                                      <option value="C. R. Studies">C. R. Studies</option>
                                                      <option value="Government">Government</option>
                                                      <option value="History">History</option>
                                                      <option value="Geography  Music">Geography</option>
                                                      <option value="Fine Arts">Fine Arts</option>
                                                      <option value="Music">Music</option>
                                                      <option value="Agricultural Science">Commerce</option>
                                                      <option value="Financial Accounting">Financial Accounting</option>
                                                      <option value="Commerce ">Commerce </option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                 </select>
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="grade4" id="">
                                                  <option value="{{ $view_singlstudent->grade4 }}">{{ $view_singlstudent->grade4 }}</option>
                                                      <option value="A1">A1</option>
                                                      <option value="A2">A2</option>
                                                      <option value="A3">A3</option>
                                                      <option value="B2">B2</option>
                                                      <option value="B3">B3</option>
                                                      <option value="C4">C4</option>
                                                      <option value="C5">C5</option>
                                                      <option value="C6">C6</option>
                                                      <option value="D7">D7</option>
                                                      <option value="F9">F9</option>
                                                 </select>
                                              </div></th>
                                          </tr>

                                          <tr>
                                             
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="subject5" id="">
                                                      <option value="{{ $view_singlstudent->subject5 }}">{{ $view_singlstudent->subject5 }}</option>
                                                      <option value="Mathematic">Mathematics</option>
                                                      <option value="English Language">English Language</option>
                                                      <option value="Biology">Biology</option>
                                                      <option value="Economics">Economics</option>
                                                      <option value="Literature">Literature</option>
                                                      <option value="Computer Studies">Computer Studies</option>
                                                      <option value="Library Studies">Library Studies</option>
                                                      <option value="Physics">Physics</option>
                                                      <option value=" Chemistry">Chemistry</option>
                                                      <option value="Technical Drawing">Technical Drawin</option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                      <option value="French">French</option>
                                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                                      <option value="C. R. Studies">C. R. Studies</option>
                                                      <option value="Government">Government</option>
                                                      <option value="History">History</option>
                                                      <option value="Geography  Music">Geography</option>
                                                      <option value="Fine Arts">Fine Arts</option>
                                                      <option value="Music">Music</option>
                                                      <option value="Agricultural Science">Commerce</option>
                                                      <option value="Financial Accounting">Financial Accounting</option>
                                                      <option value="Commerce ">Commerce </option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                 </select>
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="grade5" id="">
                                                    <option value="{{ $view_singlstudent->grade5 }}">{{ $view_singlstudent->grade5 }}</option>

                                                      <option value="A1">A1</option>
                                                      <option value="A2">A2</option>
                                                      <option value="A3">A3</option>
                                                      <option value="B2">B2</option>
                                                      <option value="B3">B3</option>
                                                      <option value="C4">C4</option>
                                                      <option value="C5">C5</option>
                                                      <option value="C6">C6</option>
                                                      <option value="D7">D7</option>
                                                      <option value="F9">F9</option>
                                                 </select>
                                              </div></th>
                                          </tr>
                                          <tr>
                                             
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="subject6" id="">
                                                      <option value="{{ $view_singlstudent->subject6 }}">{{ $view_singlstudent->subject6 }}</option>
                                                      <option value="Mathematic">Mathematics</option>
                                                      <option value="English Language">English Language</option>
                                                      <option value="Biology">Biology</option>
                                                      <option value="Economics">Economics</option>
                                                      <option value="Literature">Literature</option>
                                                      <option value="Computer Studies">Computer Studies</option>
                                                      <option value="Library Studies">Library Studies</option>
                                                      <option value="Physics">Physics</option>
                                                      <option value=" Chemistry">Chemistry</option>
                                                      <option value="Technical Drawing">Technical Drawin</option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                      <option value="French">French</option>
                                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                                      <option value="C. R. Studies">C. R. Studies</option>
                                                      <option value="Government">Government</option>
                                                      <option value="History">History</option>
                                                      <option value="Geography  Music">Geography</option>
                                                      <option value="Fine Arts">Fine Arts</option>
                                                      <option value="Music">Music</option>
                                                      <option value="Agricultural Science">Commerce</option>
                                                      <option value="Financial Accounting">Financial Accounting</option>
                                                      <option value="Commerce ">Commerce </option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                 </select>
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="grade6" id="">
                                                      <option value="{{ $view_singlstudent->grade6 }}">{{ $view_singlstudent->grade6 }}</option>

                                                      <option value="A1">A1</option>
                                                      <option value="A2">A2</option>
                                                      <option value="A3">A3</option>
                                                      <option value="B2">B2</option>
                                                      <option value="B3">B3</option>
                                                      <option value="C4">C4</option>
                                                      <option value="C5">C5</option>
                                                      <option value="C6">C6</option>
                                                      <option value="D7">D7</option>
                                                      <option value="F9">F9</option>
                                                 </select>
                                              </div></th>
                                          </tr>

                                          <tr>
                                             
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="subject7" id="">
                                                      <option value="{{ $view_singlstudent->subject7 }}">{{ $view_singlstudent->subject7 }}</option>
                                                      <option value="Mathematic">Mathematics</option>
                                                      <option value="English Language">English Language</option>
                                                      <option value="Biology">Biology</option>
                                                      <option value="Economics">Economics</option>
                                                      <option value="Literature">Literature</option>
                                                      <option value="Computer Studies">Computer Studies</option>
                                                      <option value="Library Studies">Library Studies</option>
                                                      <option value="Physics">Physics</option>
                                                      <option value=" Chemistry">Chemistry</option>
                                                      <option value="Technical Drawing">Technical Drawin</option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                      <option value="French">French</option>
                                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                                      <option value="C. R. Studies">C. R. Studies</option>
                                                      <option value="Government">Government</option>
                                                      <option value="History">History</option>
                                                      <option value="Geography  Music">Geography</option>
                                                      <option value="Fine Arts">Fine Arts</option>
                                                      <option value="Music">Music</option>
                                                      <option value="Agricultural Science">Commerce</option>
                                                      <option value="Financial Accounting">Financial Accounting</option>
                                                      <option value="Commerce ">Commerce </option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                 </select>
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="grade7" id="">
                                                   <option value="{{ $view_singlstudent->grade7 }}">{{ $view_singlstudent->grade7 }}</option>

                                                      <option value="A1">A1</option>
                                                      <option value="A2">A2</option>
                                                      <option value="A3">A3</option>
                                                      <option value="B2">B2</option>
                                                      <option value="B3">B3</option>
                                                      <option value="C4">C4</option>
                                                      <option value="C5">C5</option>
                                                      <option value="C6">C6</option>
                                                      <option value="D7">D7</option>
                                                      <option value="F9">F9</option>
                                                 </select>
                                              </div></th>
                                          </tr>

                                          <tr>
                                             
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="subject8" id="">
                                                      <option value="{{ $view_singlstudent->subject8 }}">{{ $view_singlstudent->subject8 }}</option>
                                                      <option value="Mathematic">Mathematics</option>
                                                      <option value="English Language">English Language</option>
                                                      <option value="Biology">Biology</option>
                                                      <option value="Economics">Economics</option>
                                                      <option value="Literature">Literature</option>
                                                      <option value="Computer Studies">Computer Studies</option>
                                                      <option value="Library Studies">Library Studies</option>
                                                      <option value="Physics">Physics</option>
                                                      <option value=" Chemistry">Chemistry</option>
                                                      <option value="Technical Drawing">Technical Drawin</option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                      <option value="French">French</option>
                                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                                      <option value="C. R. Studies">C. R. Studies</option>
                                                      <option value="Government">Government</option>
                                                      <option value="History">History</option>
                                                      <option value="Geography  Music">Geography</option>
                                                      <option value="Fine Arts">Fine Arts</option>
                                                      <option value="Music">Music</option>
                                                      <option value="Agricultural Science">Commerce</option>
                                                      <option value="Financial Accounting">Financial Accounting</option>
                                                      <option value="Commerce ">Commerce </option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                 </select>
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="grade8" id="">
                                                   <option value="{{ $view_singlstudent->grade8 }}">{{ $view_singlstudent->grade8 }}</option>

                                                      <option value="A1">A1</option>
                                                      <option value="A2">A2</option>
                                                      <option value="A3">A3</option>
                                                      <option value="B2">B2</option>
                                                      <option value="B3">B3</option>
                                                      <option value="C4">C4</option>
                                                      <option value="C5">C5</option>
                                                      <option value="C6">C6</option>
                                                      <option value="D7">D7</option>
                                                      <option value="F9">F9</option>
                                                 </select>
                                              </div></th>
                                          </tr>

                                          <tr>
                                             
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="subject9" id="">
                                                      <option value="{{ $view_singlstudent->subject9 }}">{{ $view_singlstudent->subject9 }}</option>
                                                      <option value="Mathematic">Mathematics</option>
                                                      <option value="English Language">English Language</option>
                                                      <option value="Biology">Biology</option>
                                                      <option value="Economics">Economics</option>
                                                      <option value="Literature">Literature</option>
                                                      <option value="Computer Studies">Computer Studies</option>
                                                      <option value="Library Studies">Library Studies</option>
                                                      <option value="Physics">Physics</option>
                                                      <option value=" Chemistry">Chemistry</option>
                                                      <option value="Technical Drawing">Technical Drawin</option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                      <option value="French">French</option>
                                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                                      <option value="C. R. Studies">C. R. Studies</option>
                                                      <option value="Government">Government</option>
                                                      <option value="History">History</option>
                                                      <option value="Geography  Music">Geography</option>
                                                      <option value="Fine Arts">Fine Arts</option>
                                                      <option value="Music">Music</option>
                                                      <option value="Agricultural Science">Commerce</option>
                                                      <option value="Financial Accounting">Financial Accounting</option>
                                                      <option value="Commerce ">Commerce </option>
                                                      <option value="Agricultural Science">Agricultural Science</option>
                                                 </select>
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" name="grade9" id="">
                                                   <option value="{{ $view_singlstudent->grade9 }}">{{ $view_singlstudent->grade9 }}</option>


                                                      <option value="A1">A1</option>
                                                      <option value="A2">A2</option>
                                                      <option value="A3">A3</option>
                                                      <option value="B2">B2</option>
                                                      <option value="B3">B3</option>
                                                      <option value="C4">C4</option>
                                                      <option value="C5">C5</option>
                                                      <option value="C6">C6</option>
                                                      <option value="D7">D7</option>
                                                      <option value="F9">F9</option>
                                                 </select>
                                              </div></th>
                                          </tr>
                                        <tr><th><img style="width: 10%; height: 30px;" src="{{ URL::asset("/public/../$view_singlstudent->olevel")}}" alt=""></th></tr>
                                          <tr><th><h3>Uplaod O'Level </h3><input value="{{ $view_singlstudent->olevel }}" class="form-control" type="file" name="olevel" id=""></th></tr>
                                          <tr><th> <h3 style="text-align: center">Second setting if Any</h3></th></tr>

                                          <tr>
                                              <th><div class="form-group col-12">
                                                
                                               <select class="form-control" name="qualiobtain2" id="">
                                                    <option value="{{ $view_singlstudent->qualiobtain2 }}">{{ $view_singlstudent->qualiobtain2 }}</option>
                                                    <option value="WAEC">WAEC</option>
                                                    <option value="NECO">NECO</option>
                                                    <option value="GCE">GCE</option>
                                                    <option value="EQUIVALENT">EQUIVALENT</option>
                                               </select>
                                            </div></th>
                                            <th><div class="form-group col-12">
                                                <input type="text" class="form-control" value="{{ $view_singlstudent->examnumber2 }}" class="form-control" name="examnumber2" value="{{ $view_singlstudent->examnumber2 }}" id="contact-phone" placeholder="Examination Number">
                                            </div></th>
                                              
                                            </tr>
                                            <tr>
                                                <th><div class="form-group col-12">
                                                    <input type="text" class="form-control" name="centre_name2" value="{{ $view_singlstudent->centre_name2 }}" id="contact-phone" placeholder="Centre Name">
                                                </div></th>
                                                <th><div class="form-group col-12">
                                                    <input type="text" class="form-control" name="yearobtain2" value="{{ $view_singlstudent->yearobtain2 }}" id="contact-phone" placeholder="Month/Year Obtain">
                                                </div></th>
                                            </tr>
                                            <tr><th> <h3 style="text-align: center">Subject Taken</h3></th></tr>
                                            <tr>
                                               
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" class="form-control" name="subject11" id="">
                                                        <option value="{{ $view_singlstudent->subject11 }}">{{ $view_singlstudent->subject11 }}</option>
                                                        <option value="Mathematic">Mathematics</option>
                                                        <option value="English Language">English Language</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Literature">Literature</option>
                                                        <option value="Computer Studies">Computer Studies</option>
                                                        <option value="Library Studies">Library Studies</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value=" Chemistry">Chemistry</option>
                                                        <option value="Technical Drawing">Technical Drawin</option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                        <option value="French">French</option>
                                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                                        <option value="C. R. Studies">C. R. Studies</option>
                                                        <option value="Government">Government</option>
                                                        <option value="History">History</option>
                                                        <option value="Geography  Music">Geography</option>
                                                        <option value="Fine Arts">Fine Arts</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Agricultural Science">Commerce</option>
                                                        <option value="Financial Accounting">Financial Accounting</option>
                                                        <option value="Commerce ">Commerce </option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                   </select>
                                                </div></th>
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="grade11" id="">
                                                        <option value="{{ $view_singlstudent->grade11 }}">{{ $view_singlstudent->grade11 }}</option>
                                                        <option value="A1">A1</option>
                                                        <option value="A2">A2</option>
                                                        <option value="A3">A3</option>
                                                        <option value="B2">B2</option>
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>
                                                        <option value="C5">C5</option>
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="F9">F9</option>
                                                   </select>
                                                </div></th>
                                            </tr>
                                            <tr>
                                               
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="subject12" id="">
                                                        <option value="{{ $view_singlstudent->subject12 }}">{{ $view_singlstudent->subject12 }}</option>
                                                        <option value="Mathematic">Mathematics</option>
                                                        <option value="English Language">English Language</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Literature">Literature</option>
                                                        <option value="Computer Studies">Computer Studies</option>
                                                        <option value="Library Studies">Library Studies</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value=" Chemistry">Chemistry</option>
                                                        <option value="Technical Drawing">Technical Drawin</option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                        <option value="French">French</option>
                                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                                        <option value="C. R. Studies">C. R. Studies</option>
                                                        <option value="Government">Government</option>
                                                        <option value="History">History</option>
                                                        <option value="Geography  Music">Geography</option>
                                                        <option value="Fine Arts">Fine Arts</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Agricultural Science">Commerce</option>
                                                        <option value="Financial Accounting">Financial Accounting</option>
                                                        <option value="Commerce ">Commerce </option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                   </select>
                                                </div></th>
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="grade12" id="">
                                                     <option value="{{ $view_singlstudent->grade12 }}">{{ $view_singlstudent->grade12 }}</option>

                                                        <option value="A1">A1</option>
                                                        <option value="A2">A2</option>
                                                        <option value="A3">A3</option>
                                                        <option value="B2">B2</option>
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>
                                                        <option value="C5">C5</option>
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="F9">F9</option>
                                                   </select>
                                                </div></th>
                                            </tr>

                                            <tr>
                                               
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="subject13" id="">
                                                        <option value="{{ $view_singlstudent->subject13 }}">{{ $view_singlstudent->subject13 }}</option>
                                                        <option value="Mathematic">Mathematics</option>
                                                        <option value="English Language">English Language</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Literature">Literature</option>
                                                        <option value="Computer Studies">Computer Studies</option>
                                                        <option value="Library Studies">Library Studies</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value=" Chemistry">Chemistry</option>
                                                        <option value="Technical Drawing">Technical Drawin</option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                        <option value="French">French</option>
                                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                                        <option value="C. R. Studies">C. R. Studies</option>
                                                        <option value="Government">Government</option>
                                                        <option value="History">History</option>
                                                        <option value="Geography  Music">Geography</option>
                                                        <option value="Fine Arts">Fine Arts</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Agricultural Science">Commerce</option>
                                                        <option value="Financial Accounting">Financial Accounting</option>
                                                        <option value="Commerce ">Commerce </option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                   </select>
                                                </div></th>
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="grade13" id="">
                                                     <option value="{{ $view_singlstudent->grade13 }}">{{ $view_singlstudent->grade13 }}</option>

                                                        <option value="A1">A1</option>
                                                        <option value="A2">A2</option>
                                                        <option value="A3">A3</option>
                                                        <option value="B2">B2</option>
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>
                                                        <option value="C5">C5</option>
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="F9">F9</option>
                                                   </select>
                                                </div></th>
                                            </tr>
                                            <tr>
                                               
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="subject14" id="">
                                                        <option value="{{ $view_singlstudent->subject14 }}">{{ $view_singlstudent->subject14 }}</option>
                                                        <option value="Mathematic">Mathematics</option>
                                                        <option value="English Language">English Language</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Literature">Literature</option>
                                                        <option value="Computer Studies">Computer Studies</option>
                                                        <option value="Library Studies">Library Studies</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value=" Chemistry">Chemistry</option>
                                                        <option value="Technical Drawing">Technical Drawin</option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                        <option value="French">French</option>
                                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                                        <option value="C. R. Studies">C. R. Studies</option>
                                                        <option value="Government">Government</option>
                                                        <option value="History">History</option>
                                                        <option value="Geography  Music">Geography</option>
                                                        <option value="Fine Arts">Fine Arts</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Agricultural Science">Commerce</option>
                                                        <option value="Financial Accounting">Financial Accounting</option>
                                                        <option value="Commerce ">Commerce </option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                   </select>
                                                </div></th>
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="grade14" id="">
                                                      <option value="{{ $view_singlstudent->grade14 }}">{{ $view_singlstudent->grade14 }}</option>

                                                        <option value="A1">A1</option>
                                                        <option value="A2">A2</option>
                                                        <option value="A3">A3</option>
                                                        <option value="B2">B2</option>
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>
                                                        <option value="C5">C5</option>
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="F9">F9</option>
                                                   </select>
                                                </div></th>
                                            </tr>

                                            <tr>
                                               
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="subject15" id="">
                                                        <option value="{{ $view_singlstudent->subject15 }}">{{ $view_singlstudent->subject15 }}</option>
                                                        <option value="Mathematic">Mathematics</option>
                                                        <option value="English Language">English Language</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Literature">Literature</option>
                                                        <option value="Computer Studies">Computer Studies</option>
                                                        <option value="Library Studies">Library Studies</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value=" Chemistry">Chemistry</option>
                                                        <option value="Technical Drawing">Technical Drawin</option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                        <option value="French">French</option>
                                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                                        <option value="C. R. Studies">C. R. Studies</option>
                                                        <option value="Government">Government</option>
                                                        <option value="History">History</option>
                                                        <option value="Geography  Music">Geography</option>
                                                        <option value="Fine Arts">Fine Arts</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Agricultural Science">Commerce</option>
                                                        <option value="Financial Accounting">Financial Accounting</option>
                                                        <option value="Commerce ">Commerce </option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                   </select>
                                                </div></th>
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="grade15" id="">
                                                       <option value="{{ $view_singlstudent->grade15 }}">{{ $view_singlstudent->grade15 }}</option>

                                                        <option value="A1">A1</option>
                                                        <option value="A2">A2</option>
                                                        <option value="A3">A3</option>
                                                        <option value="B2">B2</option>
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>
                                                        <option value="C5">C5</option>
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="F9">F9</option>
                                                   </select>
                                                </div></th>
                                            </tr>
                                            <tr>
                                               
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="subject16" id="">
                                                        <option value="{{ $view_singlstudent->subject16 }}">{{ $view_singlstudent->subject16 }}</option>
                                                        <option value="Mathematic">Mathematics</option>
                                                        <option value="English Language">English Language</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Literature">Literature</option>
                                                        <option value="Computer Studies">Computer Studies</option>
                                                        <option value="Library Studies">Library Studies</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value=" Chemistry">Chemistry</option>
                                                        <option value="Technical Drawing">Technical Drawin</option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                        <option value="French">French</option>
                                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                                        <option value="C. R. Studies">C. R. Studies</option>
                                                        <option value="Government">Government</option>
                                                        <option value="History">History</option>
                                                        <option value="Geography  Music">Geography</option>
                                                        <option value="Fine Arts">Fine Arts</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Agricultural Science">Commerce</option>
                                                        <option value="Financial Accounting">Financial Accounting</option>
                                                        <option value="Commerce ">Commerce </option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                   </select>
                                                </div></th>
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="grade16" id="">
                                                    <option value="{{ $view_singlstudent->grade16 }}">{{ $view_singlstudent->grade16 }}</option>

                                                        <option value="A1">A1</option>
                                                        <option value="A2">A2</option>
                                                        <option value="A3">A3</option>
                                                        <option value="B2">B2</option>
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>
                                                        <option value="C5">C5</option>
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="F9">F9</option>
                                                   </select>
                                                </div></th>
                                            </tr>

                                            <tr>
                                               
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="subject17" id="">
                                                        <option value="{{ $view_singlstudent->subject17 }}">{{ $view_singlstudent->subject17 }}</option>
                                                        <option value="Mathematic">Mathematics</option>
                                                        <option value="English Language">English Language</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Literature">Literature</option>
                                                        <option value="Computer Studies">Computer Studies</option>
                                                        <option value="Library Studies">Library Studies</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value=" Chemistry">Chemistry</option>
                                                        <option value="Technical Drawing">Technical Drawin</option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                        <option value="French">French</option>
                                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                                        <option value="C. R. Studies">C. R. Studies</option>
                                                        <option value="Government">Government</option>
                                                        <option value="History">History</option>
                                                        <option value="Geography  Music">Geography</option>
                                                        <option value="Fine Arts">Fine Arts</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Agricultural Science">Commerce</option>
                                                        <option value="Financial Accounting">Financial Accounting</option>
                                                        <option value="Commerce ">Commerce </option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                   </select>
                                                </div></th>
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="grade17" id="">
                                                      <option value="{{ $view_singlstudent->grade17 }}">{{ $view_singlstudent->grade17 }}</option>

                                                        <option value="A1">A1</option>
                                                        <option value="A2">A2</option>
                                                        <option value="A3">A3</option>
                                                        <option value="B2">B2</option>
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>
                                                        <option value="C5">C5</option>
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="F9">F9</option>
                                                   </select>
                                                </div></th>
                                            </tr>

                                            <tr>
                                               
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="subject18" id="">
                                                        <option value="{{ $view_singlstudent->subject18 }}">{{ $view_singlstudent->subject18 }}</option>
                                                        <option value="Mathematic">Mathematics</option>
                                                        <option value="English Language">English Language</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Literature">Literature</option>
                                                        <option value="Computer Studies">Computer Studies</option>
                                                        <option value="Library Studies">Library Studies</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value=" Chemistry">Chemistry</option>
                                                        <option value="Technical Drawing">Technical Drawin</option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                        <option value="French">French</option>
                                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                                        <option value="C. R. Studies">C. R. Studies</option>
                                                        <option value="Government">Government</option>
                                                        <option value="History">History</option>
                                                        <option value="Geography  Music">Geography</option>
                                                        <option value="Fine Arts">Fine Arts</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Agricultural Science">Commerce</option>
                                                        <option value="Financial Accounting">Financial Accounting</option>
                                                        <option value="Commerce ">Commerce </option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                   </select>
                                                </div></th>
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="grade18" id="">
                                                      <option value="{{ $view_singlstudent->grade18 }}">{{ $view_singlstudent->grade18 }}</option>

                                                        <option value="A1">A1</option>
                                                        <option value="A2">A2</option>
                                                        <option value="A3">A3</option>
                                                        <option value="B2">B2</option>
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>
                                                        <option value="C5">C5</option>
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="F9">F9</option>
                                                   </select>
                                                </div></th>
                                            </tr>

                                            <tr>
                                               
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="subject19" id="">
                                                        <option value="{{ $view_singlstudent->subject19 }}">{{ $view_singlstudent->subject19 }}</option>
                                                        <option value="Mathematic">Mathematics</option>
                                                        <option value="English Language">English Language</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Literature">Literature</option>
                                                        <option value="Computer Studies">Computer Studies</option>
                                                        <option value="Library Studies">Library Studies</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value=" Chemistry">Chemistry</option>
                                                        <option value="Technical Drawing">Technical Drawin</option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                        <option value="French">French</option>
                                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                                        <option value="C. R. Studies">C. R. Studies</option>
                                                        <option value="Government">Government</option>
                                                        <option value="History">History</option>
                                                        <option value="Geography  Music">Geography</option>
                                                        <option value="Fine Arts">Fine Arts</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Agricultural Science">Commerce</option>
                                                        <option value="Financial Accounting">Financial Accounting</option>
                                                        <option value="Commerce ">Commerce </option>
                                                        <option value="Agricultural Science">Agricultural Science</option>
                                                   </select>
                                                </div></th>
                                                <th><div class="form-group col-12">
                                                    <select class="form-control" name="grade19" id="">
                                                        <option value="{{ $view_singlstudent->grade19 }}">{{ $view_singlstudent->grade19 }}</option>


                                                        <option value="A1">A1</option>
                                                        <option value="A2">A2</option>
                                                        <option value="A3">A3</option>
                                                        <option value="B2">B2</option>
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>
                                                        <option value="C5">C5</option>
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="F9">F9</option>
                                                   </select>
                                                </div></th>
                                            </tr>
                                      </table>
                                      <img style="width: 10%; height: 30px;" src="{{ URL::asset("/public/../$view_singlstudent->olevel2")}}" alt="">

                                        <tr><th><h6>Upload O'Level 2nd sitting if any </h6><input class="form-control" type="file" value="{{ $view_singlstudent->olevel2 }}" name="olevel2" id=""></th></tr>
                                  </div>
                                  
                                  <div class="form-group col-12">
                                      <button class="btn btn-medium btn-primary" name="submit" type="submit">Submit Message <i class="icon-4"></i></button>
                                  </div>
                              </div>
                          </form>
                          
                      </div>

                  </div>
              </div>
              {{-- <input type="checkbox" class="form-control" name="nationality" id="contact-phone" > --}}

          </div>
      </section>
          </div>
          <!-- /.card -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  </div>
 
  <!-- jQuery -->
<script src="{{  asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{  asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{  asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{  asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{  asset('assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{  asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{  asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{  asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{  asset('assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{  asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{  asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{  asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{  asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{  asset('assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{  asset('assets/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{  asset('assets/dist/js/demo.js') }}"></script>
</body>
</html>
