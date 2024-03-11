@include('dashboard.admin.header')

  @include('dashboard.admin.sidebar')
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
                <form action="{{ url('admin/createpayment') }}" method="post" enctype="multipart/form-data">
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
                  <div class="row">
                    
                    

                    <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Amount</label>
                            <input type="number" name="amount" 
                            value="" class="form-control" placeholder="Amount">
                          </div>
                        </div>



                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>Select Classes</label>
                              <select name="classname" class="form-control" id="">
                                 
                                @foreach ($view_classnames as $view_classname)
                                  <option value="{{ $view_classname->classname }}">{{ $view_classname->classname }}</option>
                                @endforeach
                                 
                              </select>
                              
                            </div>
                          </div>
                          


                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Select Term</label>
                              <select name="entrylevel" class="form-control" id="">
                                  <option value="Pioneer Term">Pioneer Term</option>
                                  <option value="Penultimate Term">Penultimate Term</option>
                                  <option value="Premium Term">Premium Term</option>
                              </select>
                              
                            </div>
                          </div>
                          
                          

                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Select Centername</label>
                              <select name="centername" class="form-control" id="">
                                @foreach ($view_centers as $view_center)
                                <option value="{{ $view_center->centername }}">{{ $view_center->centername }}</option>
                              @endforeach
                                 
                              </select>
                              
                            </div>
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
 

    @include('dashboard.admin.footer')