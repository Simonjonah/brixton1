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
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('admin/teacherupdated/'.$edit_singteachers->id) }}" method="post" enctype="multipart/form-data">
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
           
            <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Firstname</label>
                  <input type="text" name="fname" class="form-control" @error('fname')
                      
                  @enderror  value="{{ $edit_singteachers->fname }}" id="exampleInputEmail1" placeholder="Title">
                </div>
                @error('fname')
                <span class="text-danger">{{ $message }}</span>
                @enderror 

                  
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" name="surname" class="form-control" @error('surname')
                      
                  @enderror  value="{{ $edit_singteachers->surname }}" id="exampleInputEmail1" placeholder="Title">
                </div>
                @error('surname')
                <span class="text-danger">{{ $message }}</span>
                @enderror 


                <div class="form-group">
                  <label for="exampleInputEmail1">Middle Name</label>
                  <input type="text" name="middlename" class="form-control" @error('middlename')
                      
                  @enderror  value="{{ $edit_singteachers->middlename }}" id="exampleInputEmail1" placeholder="Title">
                </div>
                @error('middlename')
                <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="form-group">
									<h5>Term</h5>
									<select name="entrylevel" class="form-control"  id="">
                    <option value="{{ $edit_singteachers->entrylevel }}">{{ $edit_singteachers->entrylevel }}</option>
										<option value="Pioneer Term">Pioneer Term</option>
										<option value="Penultimate Term">Penultimate Term</option>
										<option value="Premium Term">Premium Term</option>
									</select>
								</div>

                <div class="form-group">
                  <h5>Section </h5>
                  <select required class="form-control" type="text" name="section">
                    <option value="{{ $edit_singteachers->section }}">{{ $edit_singteachers->section }}</option>
                  <option value="Early Years Foundation Stage (EYFS)">Early Years (EYFS)</option>
                <option value="Primary">Primary</option>
								<option value="High School">High School</option>
																	
                                      
                  </select>
                </div>  
                

                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="fatheraddress" class="form-control" @error('fatheraddress')
                        
                    @enderror  value="{{ $edit_singteachers->fatheraddress }}" id="exampleInputEmail1" placeholder="Title">
                  </div>
                  @error('fatheraddress')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror


                  <div class="form-group">
                    <label for="exampleInputEmail1">Centername</label>
                    <select name="centername" class="form-control" id="">
                      <option value="{{ $edit_singteachers->centername }}">{{ $edit_singteachers->centername }}</option>

                      @foreach ($view_centernames as $view_centername)
                      <option value="{{ $view_centername->centername }}">{{ $view_centername->centername }}</option>
                      
                      @endforeach
                    </select>   
                  </div>

                  <h5>Select Gender</h5>
                <div class="form-group">
                  <select class="form-control" name="gender" required="">
                    <option value="{{ $edit_singteachers->gender }}">{{ $edit_singteachers->gender }}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
                    <select name="classname" class="form-control" id="">
                      <option value="{{ $edit_singteachers->classname }}">{{ $edit_singteachers->classname }}</option>
                      @foreach ($view_classnames as $view_classname)
                      <option value="{{ $view_classname->classname }}">{{ $view_classname->classname }}</option>
                      @endforeach
                    </select>   
                  </div>
                 
                  
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" name="phone" class="form-control" @error('phone')
                        
                    @enderror  value="{{ $edit_singteachers->phone }}" id="exampleInputEmail1" placeholder="Title">
                  </div>
                  @error('phone')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror 
                
                
                  <div class="form-group">
                    <img style="width: 10%; height: 30px;" src="{{ URL::asset("/public/../$edit_singteachers->images")}}" alt="">
                  </div>
                  <div class="form-group">
                    <input type="file" name="images" class="form-control" value="{{ $edit_singteachers->images }}">
                  </div>
                
              </div>
              <!-- /.card-body -->
       
              

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
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
