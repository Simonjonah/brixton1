

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE  | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
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

  <!-- Main Sidebar Container -->
  @include('dashboard.admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Semester</th>
                    <th>Session</th>
                    <th>Program</th>
                    <th>Lecturer's Name</th>

                    {{-- <th>View</th> --}}

                    
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Print</th>

                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($disall_subjectsby_programs as $disall_subjectsby_program)
                      @if ($disall_subjectsby_program->semester == 'First Semester')
                      <tr>
                        <td>{{ $disall_subjectsby_program->course_code1 }}</td>
                        <td>{{ $disall_subjectsby_program->course_title1 }}</td>
                        <td>{{ $disall_subjectsby_program->credit_unit1 }}</td>
                        <td>{{ $disall_subjectsby_program->semester }}</td>
                        <td>{{ $disall_subjectsby_program->resultsyear }}</td>
                        <td>Diploma Hardware Maintenance and Repairs</td>

                        <td><a href="viewsinglelecturer/{{ $disall_subjectsby_program->lecturer['ref_no'] }}">{{ $disall_subjectsby_program->lecturer['fname'] }}</a></td>

                        

                         <td><a href="{{ url('admin/editprogramcoursemt/'.$disall_subjectsby_program->id) }}"
                          class='btn btn-info'>
                           <i class="far fa-edit"></i>
                       </a></td>
                      
                       <td><a href="{{ url('admin/deleteprogramcourse/'.$disall_subjectsby_program->id) }}"
                        class='btn btn-danger'>
                         <i class="far fa-trash-alt"></i>
                     </a></td>
                     <th><a href="{{ url('admin/printcoursestudentmt') }}" class="btn btn-success"><i class="fas fa-print"></i></a></th>

                      </tr>
                      @else
                        
                      @endif
                      
                    @endforeach
                 
                    <td>Total</td>
                    <td>Nil</td>
                    <td>{{ $course_counts }}</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>nil</td>
                 
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th>Credit Unit</th>
                      <th>Semester</th>
                      <th>Session</th>
                      <td>Program</td>
                      <th>Lecturer's Name</th>

                    {{-- <th>View</th> --}}

                      
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>Print</th>
  
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>







    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-info">Second Semester for MT2</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Semester</th>
                    <th>Session</th>
                    <th>Program</th>
                    <th>Lecturer's Name</th>

                    
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Print</th>

                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($disall_subjectsby_programz as $disall_subjectsby_program)
                      @if ($disall_subjectsby_program->semester == 'Second Semester')
                      <tr>
                        <td>{{ $disall_subjectsby_program->course_code1 }}</td>
                        <td>{{ $disall_subjectsby_program->course_title1 }}</td>
                        <td>{{ $disall_subjectsby_program->credit_unit1 }}</td>
                        <td>{{ $disall_subjectsby_program->semester }}</td>
                        <td>{{ $disall_subjectsby_program->resultsyear }}</td>
                        <td>Diploma Hardware Maintenance and Repairs</td>

                        <td><a href="viewsinglelecturer/{{ $disall_subjectsby_program->lecturer['ref_no'] }}">{{ $disall_subjectsby_program->lecturer['fname'] }}</a></td>

                         <td><a href="{{ url('admin/editprogramcoursed1/'.$disall_subjectsby_program->id) }}"
                          class='btn btn-info'>
                           <i class="far fa-edit"></i>
                       </a></td>
                      
                       <td><a href="{{ url('admin/deleteprogramcourse/'.$disall_subjectsby_program->id) }}"
                        class='btn btn-danger'>
                         <i class="far fa-trash-alt"></i>
                     </a></td>
                     <th><a href="{{ route('admin.printcoursestudentd1') }}" class="btn btn-success"><i class="fas fa-print"></i></a></th>

                      </tr>
                      @else
                        
                      @endif
                      
                    @endforeach
                 
                    <td>Total</td>
                    <td>Nil</td>
                    <td>{{ $course_counts }}</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>nil</td>
                 
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th>Credit Unit</th>
                      <th>Semester</th>
                      <th>Session</th>
                      <th>Program</th>
                      <th>Lecturer's Name</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>Print</th>
  
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>





    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-info">Third Semester for MT3</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Semester</th>
                    <th>Session</th>
                    <th>Program</th>
                    <th>Lecturer's Name</th>

                    
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Print</th>

                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($disall_subjectsterm_programz as $disall_subjectsterm_program)
                      @if ($disall_subjectsterm_program->semester == 'Third Semester')
                      <tr>
                        <td>{{ $disall_subjectsterm_program->course_code1 }}</td>
                        <td>{{ $disall_subjectsterm_program->course_title1 }}</td>
                        <td>{{ $disall_subjectsterm_program->credit_unit1 }}</td>
                        <td>{{ $disall_subjectsterm_program->semester }}</td>
                        <td>{{ $disall_subjectsterm_program->resultsyear }}</td>
                        <td>Diploma Hardware Maintenance and Repairs</td>


                        <td><a href="viewsinglelecturer/{{ $disall_subjectsterm_program->lecturer['ref_no'] }}">{{ $disall_subjectsterm_program->lecturer['fname'] }}</a></td>

                         <td><a href="{{ url('admin/editprogramcoursed1/'.$disall_subjectsterm_program->id) }}"
                          class='btn btn-info'>
                           <i class="far fa-edit"></i>
                       </a></td>
                      
                       <td><a href="{{ url('admin/deleteprogramcourse/'.$disall_subjectsterm_program->id) }}"
                        class='btn btn-danger'>
                         <i class="far fa-trash-alt"></i>
                     </a></td>
                     <th><a href="{{ route('admin.printcoursestudentd1') }}" class="btn btn-success"><i class="fas fa-print"></i></a></th>

                      </tr>
                      @else
                        
                      @endif
                      
                    @endforeach
                 
                    <td>Total</td>
                    <td>Nil</td>
                    <td>{{ $course_countzs }}</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>
                    <td>Nil</td>

                 
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th>Credit Unit</th>
                      <th>Semester</th>
                      <th>Session</th>
                      <th>Lecturer's Name</th>

                    {{-- <th>View</th> --}}

                      
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>Print</th>
  
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  {{-- <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">₦ {{ $disall_subjectsterm_program->student['surname'] }} {{ $disall_subjectsby_program->course_title }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @csrf
            
        
             <div class="form-group">
                <p>Course Title</p>
                <input type="text" class="form-control" value="{{ $disall_subjectsby_program->registercourse['course_code1'] }}" name="course_title" id="" placeholder="Course Title">
            </div>
           <div class="form-group">
              <p>Course period</p>
              <input type="text" class="form-control" value="{{ $disall_subjectsby_program->course_period }}" name="course_period" id="" placeholder="Course Title">
          </div>
          <div class="form-group">
            <p>Course AMount</p>
            <input type="text" class="form-control" value="{{ $disall_subjectsby_program->course_amount }}" name="course_amount" id="" placeholder="Course Title">
        </div>

        <div class="form-group">
          <p>Course Program</p>
          <input type="text" class="form-control" value="{{ $disall_subjectsby_program->course_programs }}" name="course_programs" id="" placeholder="Course Title">
      </div>

      <div class="form-group">
        <input type="hidden" class="form-control" value="{{ $disall_subjectsby_program->id }}" name="course_id" id="" placeholder="Course Title">
    </div> 
            <div class="form-group">
              <input type="hidden" class="form-control" value="{{ $disall_subjectsby_program->course_code }}" name="course_code" id="" placeholder="Course Title">
          </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Please Enroll this Course</button>
            </div>
          </form> --}}
          
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://imfiacademy.edu.ng">IMFI ICT</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="../../assets/plugins/jquery/jquery.min.js"></script>

<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/jszip/jszip.min.js"></script>
<script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="../../assets/dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="../../assets/dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
