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
            <form action="{{ url('admin/createsubject') }}" method="post" enctype="multipart/form-data">
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
                {{-- @method('PUT') --}}

                
           
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-23">
                        <div class="form-group">
                            <label>Subjects</label>
                            <input type="text" class="form-control" @error('subjectname')
                            @enderror value="{{ old('subjectname') }}" name="subjectname" placeholder="Subject name">
                          </div>
                        </div>
                        @error('subjectname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror 
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-23">
                      <div class="form-group">
                        <h5>Section </h5>
                        <select required class="form-control" type="text" name="section">
                          <option value="Early Years Foundation Stage (EYFS)">Early Years(EYFS)</option>
                        </select>
                      </div> 
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-23">
                      <div class="form-group">
                        <h5>Category </h5>
                        <select required class="form-control" type="text" name="category">
                         
                          <option value="COMMUNICATION AND LANGUAGE">COMMUNICATION AND LANGUAGE</option>
                          <option value="PHYSICAL DEVELOPMENT">PHYSICAL DEVELOPMENT</option>
                          <option value="PERSONAL, SOCIAL AND EMOTIONAL DEVELOPMENT">PERSONAL, SOCIAL AND EMOTIONAL DEVELOPMENT</option>
                          <option value="LANGUAGE DEVELOPMENT(LITERACY)">LANGUAGE DEVELOPMENT(LITERACY)</option>
                          <option value="MATH READINESS (NUMERACY)">MATH READINESS (NUMERACY)</option>
                          <option value="KNOWLEDGE TO UNDERSTAND THE WORLD (KUW)">KNOWLEDGE TO UNDERSTAND THE WORLD (KUW)</option>
                          <option value="">NONE</option>
                        </select>
                      </div> 
                    </div>
                
              
              

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add Subject</button>
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