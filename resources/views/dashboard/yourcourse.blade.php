@include('dashboard.student.header')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('dashboard.student.sidebar')

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
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Print</th>
                    
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == null)
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>

                        <td><a href="{{ url('student/printcertcourse') }}"
                          class='btn btn-info'>
                           <i class="fas fa-print"></i>
                       </a></td>
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
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



     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-danger">First Semester D1</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Print</th>

                    
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'First Semester' && $getyour_course->registercourse['course_code5'] == 'D1')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td><a href="{{ url('student/printcertcoursed1') }}"
                          class='btn btn-info'>
                           <i class="fas fa-print"></i>
                       </a></td>
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
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
                <h3 class="card-title text-danger">First Semester D2</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Print</th>

                    
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'Second Semester' && $getyour_course->registercourse['course_code5'] == 'D1')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td><a href="{{ url('student/printcertcoursed1sec') }}"
                          class='btn btn-info'>
                           <i class="fas fa-print"></i>
                       </a></td>
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
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



    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-danger">First Semester MT1</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>

                    
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'First Semester' && $getyour_course->registercourse['course_code5'] == 'MT')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ url('student/printcertcoursemt1') }}"
                          class='btn btn-info'>
                           <i class="fas fa-print"></i>
                       </a></td>
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
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








    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-danger">Second Semester MT1</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                    <th>Print</th>

                    
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'Second Semester' && $getyour_course->registercourse['course_code5'] == 'MT')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ url('student/printcertcoursemt2') }}"
                          class='btn btn-info'>
                           <i class="fas fa-print"></i>
                       </a></td>
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">Third Semester MT3</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>

                    
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'Third Semester' && $getyour_course->registercourse['course_code5'] == 'MT')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ url('student/printcertcoursemt3') }}"
                          class='btn btn-info'>
                           <i class="fas fa-print"></i>
                       </a></td>
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">First Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>

                    
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'First Semester' && $getyour_course->registercourse['course_code5'] == 'NID')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">Second Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'Second Semester' && $getyour_course->registercourse['course_code5'] == 'NIDSOFT2SEMLEV1')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">First Semester 200L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'First Semester' && $getyour_course->registercourse['course_code5'] == 'NIDSOFT2FIRSTSEMLEV200')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">Second Semester 200L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'Second Semester' && $getyour_course->registercourse['course_code5'] == 'NIDSOFT2NDSEMLEV200')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">First Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'First Semester' && $getyour_course->registercourse['course_code5'] == 'NIDNET1FIRSTSEMLEV100')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">Second Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'Second Semester' && $getyour_course->registercourse['course_code5'] == 'NIDNET2NDSEMLEV100')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">Second Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'First Semester' && $getyour_course->registercourse['course_code5'] == 'NIDNETFIRSTSEMLEVEL200')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">Second Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'Second Semester' && $getyour_course->registercourse['course_code5'] == 'NIDNETSECONSEMLEVEL200L')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">First Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'First Semester' && $getyour_course->registercourse['course_code5'] == 'NIDHARDFIRSTSEMLEVEL100L')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">Second Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'Second Semester' && $getyour_course->registercourse['course_code5'] == 'NIDHARDSECONDSEM100L')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">First Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'First Semester' && $getyour_course->registercourse['course_code5'] == 'NIDHARDFIRSTSEMLEVEL200L')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">First Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'Second Semester' && $getyour_course->registercourse['course_code5'] == 'NIDHARDSECONDSEM200L')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">First Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'First Semester' && $getyour_course->registercourse['course_code5'] == 'NIDMANFIRSTSEMLEVEL100L')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">Second Semester 100L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'Second Semester' && $getyour_course->registercourse['course_code5'] == 'NIDMANSECONDSEM100L')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">Second Semester 200L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'First Semester' && $getyour_course->registercourse['course_code5'] == 'NIDMANFIRSTSEMLEVEL200L')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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
                <h3 class="card-title text-danger">Second Semester 200L</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>

                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credit Unit</th>
                    <th>Program Name</th>
                    <th>Semester</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($getyour_courses as $getyour_course)
                      @if ($getyour_course->registercourse['semester'] == 'Second Semester' && $getyour_course->registercourse['course_code5'] == 'NIDMANSECONDSEM200L')
                      <tr>
                        <td>{{ $getyour_course->student['surname'] }} </td>
                        <td>{{ $getyour_course->student['fname'] }} </td>
                        <td>{{ $getyour_course->student['middlename'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_code1'] }} </td>
                        <td>{{ $getyour_course->registercourse['course_title1'] }} </td>
                        <td>{{ $getyour_course->registercourse['credit_unit1'] }} </td>
                        <td>{{ $getyour_course->student['programname'] }} </td>
                        <td>{{ $getyour_course->registercourse['semester'] }} </td>
                        <td><a href="{{ route('student.printnidsofttcourse2') }}"><i class="fas fa-print"></i></a></td>
                      
                      </tr>
                      @else
                      @endif
                    @endforeach
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program Name</th>
                        <th>Semester</th>
                        
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

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2023 <a href="http://adminlte.io">IMFI ICT ACADEMY</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="{{  asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{  asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{  asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{  asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{  asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{  asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{  asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{  asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{  asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script src="{{  asset('assets/dist/js/adminlte.min.js?v=3.2.0') }}"></script>

<script src="{{  asset('assets/dist/js/demo.js') }}"></script>

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
