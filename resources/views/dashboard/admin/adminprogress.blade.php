@include('dashboard.admin.header')
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
                    <th>Surname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Images</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Status</th>
                    <th>Reject</th>
                   
                    <th>Suspend</th>
                    <th>Admit</th>
                    <th>Print</th>
                    <th>Delete</th>
                    <th>Date</th>

                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($admin_progress as $admin_progres)
                      @if ($admin_progres->status == null)
                      <tr>
                        <td>{{ $admin_progres->surname }}</td>
                        <td>{{ $admin_progres->middlename }}</td>
                        <td>{{ $admin_progres->fname }}</td>
                        <td><img style="width: 100%; height: 60px;" src="{{ URL::asset("/public/../$admin_progres->images")}}" alt=""></td>
                        <td><a href="{{ url('admin/viewstudents/'.$admin_progres->ref_no1) }}"
                            class='btn btn-default'>
                             <i class="far fa-eye"></i>
                         </a></td>
                         <td><a href="{{ url('admin/editstudent/'.$admin_progres->ref_no1) }}"
                          class='btn btn-info'>
                           <i class="far fa-edit"></i>
                       </a></td>
                       <td>@if ($admin_progres->status == null)
                        <span class="badge badge-secondary"> In progress</span>
                       @elseif($admin_progres->status == 'suspend')
                       <span class="badge badge-warning"> Suspended</span>
                       @elseif($admin_progres->status == 'reject')
                       <span class="badge badge-danger"> Rejected</span>
                       @elseif($admin_progres->status == 'approved')
                       <span class="badge badge-info"> Approved</span>
                       @elseif($admin_progres->status == 'admitted')
                       
                       <span class="badge badge-success">Admitted</span>
                       @endif</td>
                       

                       <th><a href="{{ url('admin/rejectstudent/'.$admin_progres->ref_no1) }}" class="btn btn-sm bg-teal">
                        <i class="fas fa-user"></i>
                      </a></th>
                      {{-- <th><a href="{{ url('admin/studentsapprove/'.$admin_progres->ref_no1) }}" class="btn btn-sm bg-teal">
                        <i class="fas fa-comments"></i> --}}
                      </a></th><th><a href="{{ url('admin/suspendstudent/'.$admin_progres->ref_no1) }}" class="btn btn-sm bg-teal">
                        <i class="fas fa-comments"></i>
                      </a></th>

                      <th> <a href="{{ url('admin/studentsaddmit/'.$admin_progres->ref_no1) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-user"></i> 
                      </a></th>
                      <th><a href="{{ url('admin/studentpdf/'.$admin_progres->ref_no1) }}" class="btn btn-success"><i class="fas fa-print"></i></a></th>
                       <td><a href="{{ url('admin/deletestudent/'.$admin_progres->ref_no1) }}"
                        class='btn btn-danger'>
                         <i class="far fa-trash-alt"></i>
                     </a></td>
                        
                     <td>{{ $admin_progres->created_at->format('D d, M Y, H:i')}}</td>

                      </tr>
                      @else
                        
                      @endif
                    @endforeach
                 
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                    <th>Surname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Images</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Status</th>
                    <th>Reject</th>
                   
                    <th>Suspend</th>
                    <th>Admit</th>
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
  
@include('dashboard.admin.footer')
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