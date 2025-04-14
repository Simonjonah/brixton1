@include('dashboard.admin.header')

  @include('dashboard.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Section {{ $view_teachers->section }}</h1>
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
              <h3 class="card-title">{{ $view_teachers->section }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('admin/createrol/'.$view_teachers->id) }}" method="post" enctype="multipart/form-data">
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
                <label for="">Role</label>

                   <select name="promotion" id="" class="form-control">
                        <option value="Early Years Foundation Stage (EYFS)">Early Years</option>
                        <option value="Center Head">Head of Center</option>
                        <!-- <option value="Pre-School Head">Early Years Head</option> -->
                        <option value="Primary Head">Primary Head</option>
                        <option value="High Head">High Admin</option>
                   </select>
              </div>

              <div class="form-group">
                <label for="">Centername</label>
                <select name="centername" id="" class="form-control">
                  @foreach ($view_centers as $view_center)
                  <option value="{{ $view_center->centername }}">{{ $view_center->centername }}</option>
                  @endforeach
              
                </select>
           </div>
           

          <div class="form-group">
							<h5>Section </h5>
							<select required class="form-control" type="text" name="section">
              <option value="{{ $view_teachers->section }}">{{ $view_teachers->section }}</option>
                <option value="Early Years Foundation Stage (EYFS)">Early Years (EYFS)</option>
                <option value="Primary">Primary</option>
								<option value="High School">High School</option>
																	
							</select>
						</div>  

           <div class="form-group">
            <label for="">Teachers</label>
            <select name="fname" id="" class="form-control">
              <option value="{{ $view_teachers->fname }}">{{ $view_teachers->fname }}, {{ $view_teachers->surname }} {{ $view_teachers->centername }} {{ $view_teachers->classname }}</option>
            </select>
          </div>
              
             
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add Role</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  </div>
    
   @include('dashboard.admin.footer')