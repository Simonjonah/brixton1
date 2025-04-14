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
            {{-- @foreach ($view_classess as $view_classes)
            <ol class="breadcrumb float-sm-right">
              Class
              
               
                  <a href="{{ url('web/classes/'.$view_classes->classname) }}">{{ $view_classes->classname }}</a>

            </ol>
            @endforeach --}}
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
                <h3 class="card-title" style="color: red">Your {{ Auth::guard('web')->user()->centername }} Center</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Classes</th>
                      <th>Name</th>
                      <th>Term</th>
                      <th>Centername</th>
                      <th>Images</th>
                      <th>Check Result</th>
                      <th>Status</th>
  
                      <th>Admit No</th>
                      {{-- <th>Form No</th> --}}
                      <!-- <th>Edit</th> -->
                      <!-- <th>Add Another Child</th> -->
       
                     
  
                      <th>Date</th>
  
                    </tr>
                  </thead>
                  <tbody>
                  {{-- @if (Auth::guard('web')->user()->promotion == 'Pre-School Head') --}}
                    @foreach ($check_results as $check_result)
                    {{-- @if ($check_result->centername == Auth::guard('web')->user()->centername && $check_result->role == null) --}}
                      <tr>
                        <td>{{ $check_result->classname }}</td>
                        <td>{{ $check_result->surname }}, {{ $check_result->fname }} {{ $check_result->middlename }}</td>
                        <td>{{ $check_result->entrylevel }}</td>
                        <td>{{ $check_result->centername }}
                        <small>Section: {{ $check_result->section }}</small>
                        </td>
  
                        <td><img style="width: 100%; height: 60px;" src="{{ URL::asset("/public/../$check_result->images")}}" alt=""></td>
                        <td><div class="card-body">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                            Check Result
                          </button></i>
                        </a></td>
                        <td>@if ($check_result->status == null)
                          <span class="badge badge-secondary"> In progress</span>
                        @elseif($check_result->status == 'suspend')
                        <span class="badge badge-warning"> Suspended</span>
                        @elseif($check_result->status == 'reject')
                        <span class="badge badge-danger"> Rejected</span>
                        @elseif($check_result->status == 'approved')
                        <span class="badge badge-info"> Approved</span>
                        @elseif($check_result->status == 'admitted')
                        
                        <span class="badge badge-success">Admitted</span>
                        @endif</td>
                      
                   
                        <td>{{ $check_result->regnumber }}</td>
                      {{-- <td>{{ $check_result->regnumber }}</td> --}}
                       
                    <td>{{ $check_result->created_at->format('D d, M Y, H:i')}}</td>
  
                      </tr>
                      {{-- @else
                        
                      @endif   --}}
                    
                  @endforeach
                        {{-- @else
                        
                      @endif
                 --}}
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>Classes</th>
                      <th>Name</th>
                      <th>Term</th>
                      <th>Centername</th>
                      <th>Images</th>
                      <th>Check Result</th>
                      <th>Status</th>
  
                      <th>Admit No</th>
                      {{-- <th>Form No</th> --}}
                      <!-- <th>Edit</th> -->
                      <!-- <th>Add Another Child</th> -->
       
                     
  
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
    <strong>Copyright &copy; 2023 <a href="https://brixtonnschools.com.ng">brixtonnschools.com.ng</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="{{  asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{  asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{  asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{  asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{  asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{  asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{  asset('assets/dist/js/weblte.min.js?v=3.2.0')}}"></script>

<script src="{{  asset('assets/dist/js/demo.js')}}"></script>

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
        <h4 class="modal-title">Check Result</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('web.generatllePDF') }}" method="post" enctype="multipart/form-data">
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
          <div class="card-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-6 col-form-label">Reg Number</label>
               <select name="regnumber" required class="form-control" id="">
                <option value="">Select Admision Number</option>
                @foreach ($check_results as $check_result)
                <option value="{{ $check_result->regnumber }}">{{ $check_result->fname }} {{ $check_result->section }} {{ $check_result->regnumber }}</option>
                  
                @endforeach
               </select>
               
              </div>
              @error('regnumber')
              <span class="text-danger">{{ $message }}</span>
              @enderror 
        
              <div class="form-group">
                <h5>Term</h5>
                <select name="entrylevel" class="form-control"  id="">
                  <option value="Pioneer Term">Pioneer Term</option>
                  <option value="Penultimate Term">Penultimate Term</option>
                  <option value="Premium Term">Premium Term</option>
                </select>
              </div>

              
<!-- 
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Pin</label>
              <input required type="number" name="pins" class="form-control" @error('pins')
                @enderror value="{{ old('pins') }}" id="exampleInputEmail1" placeholder="Pins">
            </div>
            @error('pins')
            <span class="text-danger">{{ $message }}</span>
            @enderror  -->

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Year</label>
              <select name="academic_session" class="form-control" id="">
                @foreach ($the_results as $the_result)
                <option value="{{ $the_result->academic_session }}">{{ $the_result->academic_session }}</option>
                @endforeach
              </select>
              
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Class</label>
              <select name="classname" class="form-control" id="">
                @foreach ($view_classes as $view_classe)
                <option value="{{ $view_classe->classname }}">{{ $view_classe->classname }}</option>
                @endforeach
              </select>
              
            </div>
            

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Section</label>
              <select name="section" required class="form-control" id="">
                <option value="">Select Section</option>
                <option value="Early Years Foundation Stage (EYFS)">Early Years (EYFS)</option>
                <option value="Primary">Primary</option>
								<option value="High School">High School</option>
              </select>
              
            </div>
           
            <div class="form-group">
              <div class="form-check">
                  <button type="submit" class="btn btn-info">Check Result</button>
              </div>
            </div>
          </div>
       
            
      </form>
      </div>
      <!-- <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



