
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    /* .watermark{
      background-image: url('../assets/dist/img/AdminLTELogo.jpg');
      background-position: center; 
      background-repeat: no-repeat;
    } */

  .break-after {
    page-break-after: always;
  }

  #watermark {
    flow: static(watermarkflow);
    font-size: 80px;
    opacity: 0.5;
    transform: rotate(-30deg);
    text-align: center;
  }

  @page {
     @prince-overlay {
        content: flow(watermarkflow)
     }
  }
  </style>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
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
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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

  @include('dashboard.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Results</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Results</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h6><i class="fas fa-info"></i> Note:</h6>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    {{-- <img style="width: 100px; height: 100px;" src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}" alt=""> BRIXTONN SCHOOLS
                    <small class="float-right"> <img style="width: 100px; height: 100px;" src="{{ asset('/public/../'.Auth::guard('web')->user()->images)}}" class="" alt="User Image"></small> --}}
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">

                <div class="col-sm-4 invoice-col">
                  <img style="width: 200px; height: 100px;" src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}" alt="">
                  <address>
                    @if (Auth::guard()->user()->centername == 'Uyo')
                    <strong>BRIXTONN SCHOOLS</strong><br>
                    Unit 13 F-Line Ewet Housing Estate,<br>
                     Uyo, Akwa Ibom, Nigeria <br>
                    +234 816 7930 965 <br>
                    info@brixtonnschools.com.ng
                    
                    @else
                    <strong>BRIXTONN SCHOOLS</strong><br>
                    54 Nsikak Eduok Avenue,<br>
                    Uyo, Akwa Ibom State<br>
                    Phone: 08167930965<br>
                    Email: info@imfiacademy.edu.ng
                    @endif
                    
                  </address>
                </div>

                
                <div class="col-sm-4 invoice-col">
                  
                  <b> ID:</b> {{ Auth::guard('web')->user()->ref_no }}<br>
                  <b>Admission Number</b> {{ Auth::guard('web')->user()->regnumber }}<br>
                  <b>Section:</b> {{ Auth::guard('web')->user()->section }}<br>
                  <b>Class</b> {{ Auth::guard('web')->user()->classname }}<br>
                  <b>Gender</b> {{ Auth::guard('web')->user()->gender }}<br>
                  <b>Centername</b> {{ Auth::guard('web')->user()->centername }}<br>
                  <b>Term</b> {{ Auth::guard('web')->user()->entrylevel }}<br>
                  <b>Session</b> {{ Auth::guard('web')->user()->academic_session }}<br>
                </div>


                <div class="col-sm-4 invoice-col">
               

                  <small class="float-right"> <img style="width: 200px; height: 200px;" src="{{ asset('/public/../'.Auth::guard('web')->user()->images)}}" class="" alt="User Image"></small>
                </div>
                <!-- /.col -->
              </div>
              {{-- <div id="watermark">BRIXTONN SCHOOLS</div> --}}

              <!-- /.row -->
              
              <!-- Table row -->
              <div class="row">
                @if (Session::get('success'))
                  <div class="alert alert-success">
                      {{ Session::get('success') }}
                  </div>
                  @endif

                  @if (Session::get('fail'))
                  <div class="alert alert-danger">
                  {{ Session::get('fail') }}
                  @endif
                <div class="col-12 table-responsive">
                  
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>SUBJECTS </th>
                      <th>CA</th>
                      
                      <th>Exams</th>
                      <th>Total</th>
                      <th>Grade</th>
                      <th>Remarks</th>

                      
  
                    </tr>
                    </thead>
                    <tbody>
                     
                    @foreach ($getyour_results as $getyour_result)
                        <tr>
                            <td>{{ $getyour_result->subjectname }}</td>
                            <td>{{ $getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3}}</td>
                        
                            <td>{{ $getyour_result->exams }}</td>
                            <td>{{ $getyour_result->test_1 + $getyour_result->exams }}</td>
                          
                            <td>@if ($getyour_result->test + $getyour_result->exams > 69)
                              <p>A</p>
                             
                              @elseif ($getyour_result->test + $getyour_result->exams > 59)
                              <p>B</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 49)
                              <p>c</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 44)
                              <p>D</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 40)
                              <p>E</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 39)
                              <p>F</p>
                              @else
                              <p>F</p>
                            @endif</td>

                            <td>@if ($getyour_result->test + $getyour_result->exams > 69)
                              <p>An Excellent Performance </p>
                             
                              @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 59)
                              <p>A good Performance</p>
                              @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 49)
                              <p>A fair performance</p>
                              @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 44)
                              <p>A Poor performance.</p>
                              @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 40)
                              <p>A Poor performance.</p>
                              @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 39)
                              <p>A Poor performance.</p>
                              @else
                              <p>A Poor performance.</p>
                            @endif</td>
  
                          </tr> 
                       
                    @endforeach
                  
                
                    {{-- <td> <b>CGP {{ $total_credit_hour/$total_credit_unit }}</b></td> --}}
                          {{-- <td>{{ $total_score }}</td> --}}
                          {{-- <td>{{ $total_credit_hour }}</td> --}}
                          {{-- <td>total credit unit {{ $total_credit_unit }}</td> --}}
                          {{-- <td>{{ round($total_credit_unit/$total_credit_hour)  }}</td> --}}
                    </tbody>
  
                  </table>




                  <table class="table table-bordered">
                    <tr>
                      <th style="width:50%">BEHAVIOUR:</th>
                      <th style="width:50%">A</th>
                      <th style="width:50%">B</th>
                      <th style="width:50%">C</th>
                      <th style="width:50%">D</th>
                      <th style="width:50%">E</th>
                    </tr>
                    {{-- <td><input type="hidden" name="user_id" value="{{ $view_student->id }}" id=""></td> --}}

                    <tr>
                      <th>Punctuality</th>
                      @foreach ($getyours as $getyour)
                      @if ($getyour->punt1 == 'Yes')
                      <td><h6><i style="color: green; background-repeat:no-repeat; " class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="punt1" value="Yes" id=""></td>
                      @endif
                      @endforeach
                     
                     
                      @foreach ($getyours as $getyour)
                       @if ($getyour->punt2 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                        <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                        @if ($getyour_result->punt3 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                        @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                        @if ($getyour->punt4 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                        @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                        @if ($getyour->punt5 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                        @endif
                      @endforeach

                    </tr>


                    <tr>
                      <th>Mental Alertness</th>

                      @foreach ($getyours as $getyour)
                      @if ($getyour->mentalalert1 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="mentalalert1" value="Yes" id=""></td>
                      @endif
                    @endforeach

                    @foreach ($getyours as $getyour)
                    @if ($getyour->mentalalert2 == 'Yes')
                    <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                      @else
                    <td><input type="checkbox" name="mentalalert1" value="Yes" id=""></td>
                    @endif
                  @endforeach

                    @foreach ($getyours as $getyour)
                    @if ($getyour->mentalalert3 == 'Yes')
                    <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                      @else
                    <td><input type="checkbox" name="mentalalert1" value="Yes" id=""></td>
                    @endif
                  @endforeach

                  @foreach ($getyours as $getyour)
                  @if ($getyour->mentalalert4 == 'Yes')
                  <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                    @else
                  <td><input type="checkbox" name="mentalalert1" value="Yes" id=""></td>
                  @endif
                @endforeach

                @foreach ($getyours as $getyour)
                @if ($getyour->mentalalert5 == 'Yes')
                <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                  @else
                <td><input type="checkbox" name="mentalalert1" value="Yes" id=""></td>
                @endif
              @endforeach

            </tr>
                    <tr>
                      <th>Respect</th>
                      @foreach ($getyours as $getyour)
                        @if ($getyour->respect1 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="respect1" value="Yes" id=""></td>
                        @endif
                      @endforeach


                      @foreach ($getyours as $getyour)
                      @if ($getyour->respect2 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="respect1" value="Yes" id=""></td>
                      @endif
                    @endforeach



                       @foreach ($getyours as $getyour)
                        @if ($getyour->respect3 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="respect1" value="Yes" id=""></td>
                        @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->respect4 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="respect1" value="Yes" id=""></td>
                      @endif
                    @endforeach

                    @foreach ($getyours as $getyour)
                    @if ($getyour->respect5 == 'Yes')
                    <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                      @else
                    <td><input type="checkbox" name="respect1" value="Yes" id=""></td>
                    @endif
                  @endforeach

                    </tr>


                  <tr>
                      <th>Neatness</th>
                      @foreach ($getyours as $getyour)
                      @if ($getyour->neat1 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="neat1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->neat2 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="neat1" value="Yes" id=""></td>
                      @endif
                      @endforeach


                     @foreach ($getyours as $getyour)
                      @if ($getyour->neat3 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="neat1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->neat4 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="neat1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->neat5 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="neat1" value="Yes" id=""></td>
                      @endif
                      @endforeach
                    </tr>
                  <tr>
                      <th>Politeness</th>

                      @foreach ($getyours as $getyour)
                      @if ($getyour->polite1 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="polite1" value="Yes" id=""></td>
                      @endif
                      @endforeach


                    @foreach ($getyours as $getyour)
                     @if ($getyour->polite2 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="polite1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->polite3 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="polite1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->polite4 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="polite1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->polite5 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="polite1" value="Yes" id=""></td>
                      @endif
                      @endforeach
                     
                    </tr>

                  <tr>
                    <th>Honesty</th>
                      @foreach ($getyours as $getyour)
                      @if ($getyour->honesty1 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="honesty1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->honesty2 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="honesty1" value="Yes" id=""></td>
                      @endif
                      @endforeach


                      @foreach ($getyours as $getyour)
                      @if ($getyour->honesty3 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="honesty3" value="Yes" id=""></td>
                      @endif
                      @endforeach


                      @foreach ($getyours as $getyour)
                      @if ($getyour->honesty4 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="honesty4" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->honesty5 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="honesty5" value="Yes" id=""></td>
                      @endif
                      @endforeach

                    
                      
                    
                    </tr>
                   <tr>
                      <th>Relationship with peers</th>

                      @foreach ($getyours as $getyour)
                      @if ($getyour->relationship1 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                      @endif
                    @endforeach

                    @foreach ($getyours as $getyour)
                    @if ($getyour->relationship2 == 'Yes')
                    <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                      @else
                    <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                    @endif
                  @endforeach

                  @foreach ($getyours as $getyour)
                  @if ($getyour->relationship3 == 'Yes')
                  <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                    @else
                  <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                  @endif
                @endforeach


                @foreach ($getyours as $getyour)
                  @if ($getyour->relationship4 == 'Yes')
                  <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                    @else
                  <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                  @endif
                @endforeach

                @foreach ($getyours as $getyour)
                  @if ($getyour->relationship5 == 'Yes')
                  <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                    @else
                  <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                  @endif
                @endforeach
                </tr>
                  <tr>
                      <th>Willingness to learn</th>
                      @foreach ($getyours as $getyour)
                      @if ($getyour->williness1 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                      @endif
                      @endforeach



                   @foreach ($getyours as $getyour)
                      @if ($getyour->williness2 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->williness3 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                      @endif
                      @endforeach


                      @foreach ($getyours as $getyour)
                      @if ($getyour->williness4 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->williness5 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                      @endif
                      @endforeach
                    </tr>
                    <tr>
                      <th>Team Spirit</th>
                      @foreach ($getyours as $getyour)
                      @if ($getyour->teamspirit1 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="teamspirit1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->teamspirit2 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="teamspirit1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->teamspirit3 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="teamspirit1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->teamspirit4 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="teamspirit1" value="Yes" id=""></td>
                      @endif
                      @endforeach

                      @foreach ($getyours as $getyour)
                      @if ($getyour->teamspirit5 == 'Yes')
                      <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                        @else
                      <td><input type="checkbox" name="teamspirit1" value="Yes" id=""></td>
                      @endif
                      @endforeach
                    </tr>

                  </table>

                </div>
                <!-- /.col -->


                <div class="col-6">
                  {{-- <p class="lead">PSYCHOMOTOR SKILLS</p> --}}
      
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">PSYCHOMOTOR SKILLS:</th>
                        <th style="width:50%">A</th>
                        <th style="width:50%">B</th>
                        <th style="width:50%">C</th>
                        <th style="width:50%">D</th>
                        <th style="width:50%">E</th>
                      </tr>
                      <tr>
      
                        <th>Verbal Skills</th>
                        @foreach ($getyours as $getyour)
                      @if ($getyour->verbal1 == 'Yes')
                            <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                              @else
                            <td><input type="checkbox" name="verbal1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->verbal2 == 'Yes')
                              <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                                @else
                              <td><input type="checkbox" name="verbal1" value="Yes" id=""></td>
                          @endif
                          @endforeach
      
                          @foreach ($getyours as $getyour)
                      @if ($getyour->verbal3 == 'Yes')
                            <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                              @else
                            <td><input type="checkbox" name="verbal1" value="Yes" id=""></td>
                        @endif
                        @endforeach
      
                        @foreach ($getyours as $getyour)
                        @if ($getyour->verbal4 == 'Yes')
                              <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                                @else
                              <td><input type="checkbox" name="verbal1" value="Yes" id=""></td>
                          @endif
                          @endforeach
                          @foreach ($getyours as $getyour)
                          @if ($getyour->verbal5 == 'Yes')
                                <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                                  @else
                                <td><input type="checkbox" name="verbal1" value="Yes" id=""></td>
                            @endif
                            @endforeach
                       
                      </tr>
                      <tr>
                        <th>Games and Sports</th>
                        @foreach ($getyours as $getyour)
                        @if ($getyour->sports1 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->sports2 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->sports3 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
                        @endif
                        @endforeach
      
                        @foreach ($getyours as $getyour)
                        @if ($getyour->sports4 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->sports5 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
                        @endif
                        @endforeach
      
      
                      </tr>
      
                      <tr>
                        <th>Arts and Craft</th>
                        @foreach ($getyours as $getyour)
                        @if ($getyour->arts1 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->arts2 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->arts3 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->arts4 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->arts5 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                       
      
                      </tr>
                      <tr>
                        <th>Creativity</th>
                        @foreach ($getyours as $getyour)
                        @if ($getyour->creativity1 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->creativity2 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->creativity3 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->creativity4 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->creativity5 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                        @endif
                        @endforeach


                      </tr>
      
                      <tr>
                        <th>Music Skills</th>
                       

      
                        @foreach ($getyours as $getyour)
                        @if ($getyour->music1 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="music1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->music2 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="music1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->music3 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="music1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->music4 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="music1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->music5 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="music1" value="Yes" id=""></td>
                        @endif
                        @endforeach
                       
                      </tr>
      
                      <tr>
                        <th>Dance Skills</th>
                        @foreach ($getyours as $getyour)
                        @if ($getyour->dance1 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="dance1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->dance2 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="dance1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->dance3 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="dance1" value="Yes" id=""></td>
                        @endif
                        @endforeach
      
                        @foreach ($getyours as $getyour)
                        @if ($getyour->dance4 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="dance1" value="Yes" id=""></td>
                        @endif
                        @endforeach

                        @foreach ($getyours as $getyour)
                        @if ($getyour->dance5 == 'Yes')
                        <td><h6><i style="color: green" class="icon fas fa-check"></i> </h6> </td>
                          @else
                        <td><input type="checkbox" name="dance1" value="Yes" id=""></td>
                        @endif
                        @endforeach
                      </tr>
                    
                    </table>
      
      
                 
                  </div>
      


                  
              </div>
              <div class="col-6">
                {{-- <p class="lead">PSYCHOMOTOR SKILLS</p> --}}
    
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:50%"></th>
                      <th style="width:50%">KEY</th>
                      
                    </tr>
                    <tr>
                      <th>A</th>
                      <td>Excellence</td>
                    </tr>
                    <tr>
                      <th>B</th>
                      <td>Very Good</td>
                    </tr>
    
                    <tr>
                      <th>C</th>
                      <td>Good</td>
                    </tr>
                    <tr>
                      <th>D</th>
                      <td>Needs Improvement</td>
                    </tr>
    
                    <tr>
                      <th>E</th>
                      <td>Unsatisfactory</td>
                    </tr>
                    
                   
                   
                  </table>
    
    
               
                </div>
    

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="{{ url('web/printresult/'.$getyour->user_id) }}" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                 
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer no-print">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2023 <a href="http:s//brixtonnschools.com.ng">BRIXTONN SCHOOL</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
</body>
</html>
