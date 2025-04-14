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
                    <th>F.name</th>
                    <th>F.Middlename</th>
                    <th>F.Last Name</th>
                    <th>F.Title</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Add Child</th>
                    <th>F.Nationality</th>
                    <th>F.Employer</th>
                    <th>F.Address<th>
                    <th>M.Name</th>
                    <th>M.email</th>
                    <th>M.phone</th>
                    <th>M.Address</th>
                    <th>M.Title</th>
                    <th>M.Nationlity</th>

                    <th>Status</th>
                    <th>Action</th>
                   
                    <th>Print</th>
                    <th>Delete</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
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
                    @foreach ($view_parents as $view_parent)
                    @if ($view_parent->centername == Auth::guard('web')->user()->centername )
                      <tr>
                        <td>{{ $view_parent->fathername }}</td>
                        <td>{{ $view_parent->fathermiddlename }}</td>
                        <td>{{ $view_parent->fathersurname }}</td>
                        <td>{{ $view_parent->title }}

                        <small>Section: {{ $view_parent->section }}</small>

                        </td>
                        <td>{{ $view_parent->phone }}
                        
                         <small> <a href="{{ url('web/viewchildrenbyhead/'.$view_parent->ref_no) }}"
                          class='btn btn-success'>
                           <i class="far fa-user">View Children</i>
                       </a></small>
                        </td>

                        <td>{{ $view_parent->email }}
                        <small>Centername: {{ $view_parent->centername }}</small>
                        </td>
                        <td><a href="{{ url('web/registeryourchild/'.$view_parent->ref_no) }}"
                            class='btn btn-success'>
                             <i class="far fa-user"></i>
                         </a></td>
                        
                        <td>{{ $view_parent->nationality }}</td>
                        <td>{{ $view_parent->fatheremployer }}</td>
                        <td>{{ $view_parent->fatheraddress }}</td>
                        <td>{{ $view_parent->mothersurname }} {{ $view_parent->mothername }}</td>
                        <td>{{ $view_parent->motheremail }}</td>
                        <td>{{ $view_parent->motheremail }}</td>
                        <td>{{ $view_parent->motherphone }}</td>
                        <td>{{ $view_parent->motheraddress }}</td>
                        <td>{{ $view_parent->mothertitle }}
                        </td>
                        <td>{{ $view_parent->mothernationality }}</td>
                      
                       
                       <td>@if ($view_parent->role == 'teacher')
                        <span class="badge badge-secondary">In Progress</span>
                        @elseif ($view_parent->role == 'sacked')
                        <span class="badge badge-danger">Sacked</span>
                        @elseif ($view_parent->role == 'suspend')
                        <span class="badge badge-warning">Suspended</span>
                          @else
                          <span class="badge badge-success">Employed</span>
                        @endif</td>

                       <td> <div class="input-group-prepend">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                          Action
                        </button>
                        <ul class="dropdown-menu">
                          <li class="dropdown-item"><a href="{{ url('web/viewsingparent/'.$view_parent->ref_no) }}">View</a></li>
                          <li class="dropdown-item"><a href="{{ url('web/editparent/'.$view_parent->ref_no) }}">Edit</a></li>
                          <li class="dropdown-item"><a href="{{ url('web/addmitparent/'.$view_parent->ref_no) }}">Approved</a></li>
                          <li class="dropdown-item"><a href="{{ url('web/suspendparent/'.$view_parent->ref_no) }}">Suspend</a></li>
                          <!-- <li class="dropdown-item"><a href="{{ url('web/studentpdf/'.$view_parent->ref_no) }}">Print</a></li> -->
                          <li class="dropdown-item"><a href="{{ url('web/rejectsparent/'.$view_parent->ref_no) }}">Reject</a></li>
                        </ul>
                      </div></td>
                     
                    
                     
                      <th><a href="{{ url('web/teachersprint') }}" class="btn btn-success"><i class="fas fa-print"></i></a></th>
                       <td><a href="{{ url('web/deletestudent/'.$view_parent->ref_no) }}"
                        class='btn btn-danger'>
                         <i class="far fa-trash-alt"></i>
                     </a></td>
                        
                     <td>{{ $view_parent->created_at->format('D d, M Y, H:i')}}</td>

                      </tr>
                     @endif
                    @endforeach
                 
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>F.name</th>
                        <th>F.Middlename</th>
                        <th>F.Last Name</th>
                        <th>F.Title</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Add Child</th>
                        <th>F.Nationality</th>
                        <th>F.Employer</th>
                        <th>F.Address<th>
                        <th>M.Name</th>
                        <th>M.email</th>
                        <th>M.phone</th>
                        <th>M.Address</th>
                        <th>M.Title</th>
                        <th>M.Nationlity</th>
    
                        <th>Status</th>
                        <th>Action</th>
                       
                        <th>Print</th>
                        <th>Delete</th>
                        <th>Date</th>
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2023 <a href="httpS://BRIXTONNSCHOOLS.COM.NG">BRIXTONN SCHOOLS</a>.</strong> All rights
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
