@include('dashboard.header')

  <!-- Main Sidebar Container -->
  @include('dashboard.sidebar')

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
    @if (Auth::guard('web')->user()->section == 'Early Years Foundation Stage (EYFS)')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Your Students Result</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if (Session::get('fail'))
                <div class="alert alert-danger">
                {{ Session::get('fail') }}
                @endif
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Admission No</th>
                    <th>Comments</th>
                    <th>Approved</th>
                    <th>Edit</th>
                    <th>Pscomotor</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($view_myresults as $view_myresult)
                        @if ($view_myresult->centername == Auth::guard('web')->user()->centername )
                        <tr>
                            <td>{{ $view_myresult->user['surname'] }}
                            
                            </td>
                            <td>{{ $view_myresult->user['fname'] }} {{ $view_myresult->entrylevel }}</td>
                            <td>{{ $view_myresult->user['middlename'] }}
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                                    Check Result
                                </button>
                              
                            </td>
                            <td>{{ $view_myresult->regnumber }}
                            <small>{{ $view_myresult->centername }}</small>
                            </td>
                            <td><input type="text" class="form-control" name="comment" value="{{ $view_myresult->comment }}" placeholder="">
                           
    
                          <td>
                            <small>

                              @if ($view_myresult->status == null)
                                <span class="badge badge-secondary"> In progress</span>
                            @elseif($view_myresult->status == 'suspend')
                            <span class="badge badge-warning"> Suspended</span>
                            @elseif($view_myresult->status == 'reject')
                            <span class="badge badge-danger"> Rejected</span>
                            @elseif($view_myresult->status == 'approved')
                            <span class="badge badge-success"> Approved</span>
                            @elseif($view_myresult->status == 'admitted')
                            
                            <span class="badge badge-success">Admitted</span>
                            @endif
                            </small>
                            <a href="{{ url('web/approvedresulthead/'.$view_myresult->id) }}"
                            class='btn btn-info'>
                            Approved
                             <i class="far fa-eye"></i></a></td>
                         
                        
                        
                         <td><a href="{{ url('web/editresult/'.$view_myresult->id) }}"
                                class='btn btn-info'>
                                 <i class="far fa-edit"></i>
                             </a></td>
                                 
                         <td><a href="{{ url('web/addpsychomotor/'.$view_myresult->id) }}"
                              class='btn btn-default'>
                              Add Psycomotor
                               <i class="far fa-eye"></i></a></td>
    
                          <td>


                           
                           
                          
                          
                          <td><a href="{{ url('web/deletreslt/'.$view_myresult->id) }}"
                            class='btn btn-danger'>
                             <i class="far fa-trash-alt"></i>
                         </a></td>
                        
                         {{-- <td>{{ $view_myresult->created_at->format('D d, M Y, H:i')}}</td> --}}
    
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
                    <th>Admission No</th>
                    <th>Comments</th>
                    <th>Approved</th>
                    <th>Edit</th>
                    <th>Pscomotor</th>

                    <th>Delete</th>
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
    @elseif (Auth::guard('web')->user()->section == 'Primary')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Your Students Result</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if (Session::get('fail'))
                <div class="alert alert-danger">
                {{ Session::get('fail') }}
                @endif
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Admission No</th>
                    <th>Psycomotor</th>
                    <th>Approved</th>
                    <th>CA 1</th>
                    <th>CA 2</th>
                    <!-- <th>CA 3</th> -->
                    <th>Exams</th>
                    <th>Total</th>
                    <th>Grade</th>
                    <!-- <th>Remarks</th> -->
                    <th>Edit</th>
                    {{-- <th>View</th> --}}

                    <th>Delete</th>
              
                    {{-- <th>Date</th> --}}
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($view_myresults as $view_myresult)
                        @if ($view_myresult->centername == Auth::guard('web')->user()->centername)
                        <tr>
                            <td>{{ $view_myresult->user['surname'] }}
                            
                            </td>
                            <td>{{ $view_myresult->user['fname'] }} {{ $view_myresult->entrylevel }}</td>
                            <td>{{ $view_myresult->user['middlename'] }}
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                                    Check Result
                                </button>
                            </td>
                            <td>{{ $view_myresult->regnumber }}
                            <small>{{ $view_myresult->centername }}</small>
                            </td>
                            <td><a href="{{ url('web/addpsychomotor/'.$view_myresult->id) }}"
                              class='btn btn-default'>
                              Add Psycomotor
                               <i class="far fa-eye"></i></a></td>
    
                           
    
                          <td>
                            <small>

                              @if ($view_myresult->status == null)
                                <span class="badge badge-secondary"> In progress</span>
                            @elseif($view_myresult->status == 'suspend')
                            <span class="badge badge-warning"> Suspended</span>
                            @elseif($view_myresult->status == 'reject')
                            <span class="badge badge-danger"> Rejected</span>
                            @elseif($view_myresult->status == 'approved')
                            <span class="badge badge-success"> Approved</span>
                            @elseif($view_myresult->status == 'admitted')
                            
                            <span class="badge badge-success">Admitted</span>
                            @endif
                            </small>
                            <a href="{{ url('web/approvedresulthead/'.$view_myresult->id) }}"
                            class='btn btn-info'>
                            Approved
                             <i class="far fa-eye"></i></a></td>
                          <td>{{ $view_myresult->test_1 }}</td>
                          <td>{{ $view_myresult->test_2 }}</td>
                          <!-- <td>{{ $view_myresult->test_3 }}</td> -->
                          <td>{{ $view_myresult->exams }}</td>
                          <td>{{ $view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams }}</td>
                          <td>@if ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 69)
                            <p>A</p>
                           
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 59)
                            <p>B</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 49)
                            <p>C</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 44)
                            <p>D</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 40)
                            <p>E</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 39)
                            <p>F</p>
                            @else
                            <p>F</p>
                          @endif</td>
    
                             
                          
                         <td><a href="{{ url('web/editresult/'.$view_myresult->id) }}"
                                class='btn btn-info'>
                                 <i class="far fa-edit"></i>
                             </a></td>
                             {{-- <td><a href="{{ url('web/teacherviewresults/'.$view_myresult->user_id)}}"
                              class='btn btn-default'>
                               <i class="far fa-eye"></i>
                           </a></td> --}}
                           
                          {{-- <th><a href="{{ url('web/studentit/'.$view_myresult->ref_no) }}" class="btn btn-info"><i class="fas fa-user"></i> IT</a></th> --}}
                           <td><a href="{{ url('web/deletreslt/'.$view_myresult->id) }}"
                            class='btn btn-danger'>
                             <i class="far fa-trash-alt"></i>
                         </a></td>
                        
                         {{-- <td>{{ $view_myresult->created_at->format('D d, M Y, H:i')}}</td> --}}
    
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
                      <th>Admission No</th>
                      <th>Psycomotor</th>

                      <th>Approved</th>
                      <th>CA 1</th>
                      <th>CA 2</th>
                      <!-- <th>CA 3</th> -->
                      <th>Exams</th>
                      <th>Total</th>
                      <th>Grade</th>
                      <!-- <th>Remarks</th> -->
                      <th>Edit</th>
                      {{-- <th>View</th> --}}
                      <th>Delete</th>
                
                      {{-- <th>Date</th> --}}
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
    @else

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Your Students Result</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if (Session::get('fail'))
                <div class="alert alert-danger">
                {{ Session::get('fail') }}
                @endif
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Admission No</th>
                    <th>Psycomotor</th>
                    <th>Approved</th>
                    <th>CA 1</th>
                    <th>CA 2</th>
                    <!-- <th>CA 3</th> -->
                    <th>Exams</th>
                    <th>Total</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                    <th>Edit</th>
                    {{-- <th>View</th> --}}

                    <th>Delete</th>
              
                    {{-- <th>Date</th> --}}
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($view_myresults as $view_myresult)
                        @if ($view_myresult->centername == Auth::guard('web')->user()->centername)
                        <tr>
                            <td>{{ $view_myresult->user['surname'] }}
                            
                            </td>
                            <td>{{ $view_myresult->user['fname'] }} {{ $view_myresult->entrylevel }}</td>
                            <td>{{ $view_myresult->user['middlename'] }}
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                                    Check Result
                                </button>
                            </td>
                            <td>{{ $view_myresult->regnumber }}
                            <small>{{ $view_myresult->centername }}</small>
                            </td>
                            <td><a href="{{ url('web/addpsychomotor/'.$view_myresult->id) }}"
                              class='btn btn-default'>
                              Add Psycomotor
                               <i class="far fa-eye"></i></a></td>
    
                           
    
                          <td>
                            <small>

                              @if ($view_myresult->status == null)
                                <span class="badge badge-secondary"> In progress</span>
                            @elseif($view_myresult->status == 'suspend')
                            <span class="badge badge-warning"> Suspended</span>
                            @elseif($view_myresult->status == 'reject')
                            <span class="badge badge-danger"> Rejected</span>
                            @elseif($view_myresult->status == 'approved')
                            <span class="badge badge-success"> Approved</span>
                            @elseif($view_myresult->status == 'admitted')
                            
                            <span class="badge badge-success">Admitted</span>
                            @endif
                            </small>
                            <a href="{{ url('web/approvedresulthead/'.$view_myresult->id) }}"
                            class='btn btn-info'>
                            Approved
                             <i class="far fa-eye"></i></a></td>
                          <td>{{ $view_myresult->test_1 }}</td>
                          <td>{{ $view_myresult->test_2 }}</td>
                          <!-- <td>{{ $view_myresult->test_3 }}</td> -->
                          <td>{{ $view_myresult->exams }}</td>
                          <td>{{ $view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams }}</td>
                          <td>@if ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 69)
                            <p>A</p>
                           
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 59)
                            <p>B</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 49)
                            <p>C</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 44)
                            <p>D</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 40)
                            <p>E</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 39)
                            <p>F</p>
                            @else
                            <p>F</p>
                          @endif</td>
    
                          <td>@if ($view_myresult->test + $view_myresult->exams > 69)
                            <p>An Excellent Performance </p>
                           
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 59)
                            <p>A good Performance</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 49)
                            <p>A fair performance</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 44)
                            <p>A Poor performance.</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 40)
                            <p>A Poor performance.</p>
                            @elseif ($view_myresult->test_1 + $view_myresult->test_2 + $view_myresult->test_3 + $view_myresult->exams > 39)
                            <p>A Poor performance.</p>
                            @else
                            <p>A Poor performance.</p>
                          @endif</td>
                             
                          
                         <td><a href="{{ url('web/editresult/'.$view_myresult->id) }}"
                                class='btn btn-info'>
                                 <i class="far fa-edit"></i>
                             </a></td>
                             {{-- <td><a href="{{ url('web/teacherviewresults/'.$view_myresult->user_id)}}"
                              class='btn btn-default'>
                               <i class="far fa-eye"></i>
                           </a></td> --}}
                           
                          {{-- <th><a href="{{ url('web/studentit/'.$view_myresult->ref_no) }}" class="btn btn-info"><i class="fas fa-user"></i> IT</a></th> --}}
                           <td><a href="{{ url('web/deletreslt/'.$view_myresult->id) }}"
                            class='btn btn-danger'>
                             <i class="far fa-trash-alt"></i>
                         </a></td>
                        
                         {{-- <td>{{ $view_myresult->created_at->format('D d, M Y, H:i')}}</td> --}}
    
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
                      <th>Admission No</th>
                      <th>Psycomotor</th>

                      <th>Approved</th>
                      <th>CA 1</th>
                      <th>CA 2</th>
                      <!-- <th>CA 3</th> -->
                      <th>Exams</th>
                      <th>Total</th>
                      <th>Grade</th>
                      <th>Remarks</th>
                      <th>Edit</th>
                      {{-- <th>View</th> --}}
                      <th>Delete</th>
                
                      {{-- <th>Date</th> --}}
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
      
    @endif
    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2023 <a href="https://brixtoonschool.com.ng">Brixtonn</a>.</strong> All rights
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Check Result of A Child</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('web/checkresultbyheads') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Admission No</label>
                
                <select name="regnumber" id="" class="form-control">
                @foreach ($view_myresults as $view_myresult)
                        @if ($view_myresult->centername == Auth::guard('web')->user()->centername)
                    <option value="{{ $view_myresult->regnumber }}">{{ $view_myresult->regnumber }}</option>
                    @endif
              @endforeach
                </select>

                
              </div>

              <div class="form-group">
                <label for="">Entrylevel</label>
                <select name="entrylevel" id="" class="form-control">
                    <option value="Pioneer Term">Pioneer Term</option>
                    <option value="Penultimate Term">Penultimate Term</option>
                    <option value="Premium Term">Premium Term</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Class</label>
                <select name="classname" id="" class="form-control">

                  @foreach ($view_classes as $view_classe)
                  <option value="{{ $view_classe->classname }}">{{ $view_classe->classname }}</option>
                    
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="">Select Section</label>
                <select name="section" id="" class="form-control">
                  <option value="Early Years Foundation Stage (EYFS)">Early Years (EYFS)</option>
                <option value="Primary">Primary</option>
								<option value="High School">High School</option>
                    
                </select>
              </div>

              <div class="form-group">
                <label for="">Admission No</label>
                <select name="academic_session" id="" class="form-control">
                  @foreach ($view_sessions as $view_session)
                  <option value="{{ $view_session->academic_session }}">{{ $view_session->academic_session }}</option>
                    
                  @endforeach
                </select>
              </div>

              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Check</button>
              </div>
          </form>
        </div>
        
      </div>
      
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->




  