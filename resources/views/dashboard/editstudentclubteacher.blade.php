@include('dashboard.header')

  @include('dashboard.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Upload </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload  </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Add </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ url('web/updateclubteacher/'.$edit_club->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  @if (Session::get('success'))
                  <div class="alert alert-success">
                      {{ Session::get('success') }}
                  </div>
                  @endif

                  @if (Session::get('fail'))
                  <div class="alert alert-danger">
                  {{ Session::get('fail') }}
                  @endif
                  <div class="row">


                    <div class="col-sm-6">
                        <div class="form-group">
                          <label> First Name</label>
                          <input required type="text" class="form-control" value="{{ $edit_club->fname }}" name="fname" placeholder="First Name">
                          <input required type="hidden" value="{{ Auth::guard('web')->user()->fname }}" class="form-control" name="tname" placeholder="First Name">
                          <input required type="hidden" value="{{ Auth::guard('web')->user()->surname }}" class="form-control" name="tlastname" placeholder="First Name">
                          <input required type="hidden" value="{{ Auth::guard('web')->user()->centername }}" class="form-control" name="centername" placeholder="First Name">
                          <input required type="hidden" value="{{ Auth::guard('web')->user()->classname }}" class="form-control" name="classname" placeholder="First Name">
                          <input required type="hidden" value="{{ Auth::guard('web')->user()->id }}" class="form-control" name="user_id" placeholder="First Name">
                        </div>
                      </div>
                      @error('fname')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror 


                      <div class="col-sm-6">
                        <div class="form-group">
                          <label> Middle Name</label>
                          <input type="text" class="form-control" value="{{ $edit_club->middlename }}" name="middlename" placeholder="First Name">
                        </div>
                      </div>
                      @error('middlename')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror 

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label> SurName</label>
                          <input type="text" class="form-control" value="{{ $edit_club->surname }}" name="surname" placeholder=" SurName">
                        </div>
                      </div>
                      @error('surname')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror 

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label> Age</label>
                          <input required type="text" class="form-control" value="{{ $edit_club->age }}" name="age" placeholder="Age">
                        </div>
                      </div>
                      @error('age')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror 

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label> Club Name</label>
                          <select name="clubname" class="form-control" id="">
                            @foreach ($view_clubs as $view_club)
                            <option value="{{ $view_club->clubname }}">{{ $view_club->clubname }}</option>
                            @endforeach
                              
                          </select>
                        </div>
                      </div>
                      @error('clubname')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror

                      
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label> Gender</label>
                        <select name="gender" class="form-control" id="">
                            <option value="{{ $edit_club->gender }}">{{ $edit_club->gender }}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                           
                        </select>
                        
                      </div>
                    </div>
                    @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 

                    
                    


                    <div class="col-sm-6">
                        <div class="form-group">
                            <h5>Section </h5>
                            <select required class="form-control" type="text" name="section">
                                <option value="{{ $edit_club->section }}">{{ $edit_club->section }}</option>
                                <option value="Creche">Creche</option>
                                <option value="Pre-School">Pre-School</option>
                                <option value="Preparatory">Preparatory</option>
                                <option value="Nursery">Nursery</option>
                                <option value="Primary">Primary</option>
                                <option value="High School">High School</option>
                                                                    
                            </select>
                        </div> 
                    </div>
                    
                 

                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

    @include('dashboard.footer')