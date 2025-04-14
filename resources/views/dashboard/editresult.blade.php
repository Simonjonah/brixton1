@include('dashboard.header')
@include('dashboard.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Result of {{ $edit_result->fname }} {{ $edit_result->middlename }} {{ $edit_result->surname }} in {{ $edit_result->classname }} {{ $edit_result->entrylevel }} {{ $edit_result->section }}  {{ $edit_result->regnumber }} Section</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subjects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      @if (Auth::guard('web')->user()->section == 'Early Years Foundation Stage (EYFS)')
        
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        {{-- <small class="float-right">{{ $edit_result->created_at->format('D d, M Y, H:i')}}</small> --}}
                    </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-2 invoice-col">
                    <img style="width: 80px; height: 80px;" src="{{ asset('images/sch14.jpg') }}" alt=""> <br>

                
                </div> 
                <!-- /.col -->
               <div class="col-sm-8 invoice-col" style="text-align: center">
                 
                  <h1><strong>BRIXTONN SCHOOLS</strong></h1>
                  
                  <address>
                    
                    @if ($edit_result->centername == 'Uyo')
                    13 F-Line Ewet Housing Estate, Uyo 
                    Akwa Ibom State, Nigeria <br>
                    Website: brixtonnschools.com.ng
                    @else
                    No. 4 Julius Nyerere Crescent, <br>  Abuja 
                    Nigeria 
                    @endif
                    <br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 invoice-col">
                    <img style="width: 100px; height: 100px;" src="{{ URL::asset("/public/../$edit_result->images")}}" alt="">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                    <div class="col-12 table-responsive">
                      <form action="{{ url('web/updateresults/'.$edit_result->id) }}" method="post" enctype="multipart/form-data">
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
                            @method('PUT')
                        <table class="table table-striped">
                            <thead>
                            <tr>
                              <th>Subjects</th>
                              
                              <th>Comments</th>
                            </tr>
                            </thead>
                            <tbody>
      
                              
                                  <tr>
                                      <td style="width: 90px;">{{ $edit_result->subjectname }}</td>

                                      <td><textarea cols="10" rows="10" value="" class="form-control" name="comment" placeholder="Test 1">{{ $edit_result->comment }} </textarea></td>
                                      <!-- <td><input type="number" value="{{ $edit_result->test_2 }}" class="form-control" name="test_2" placeholder="Test 2"></td> -->
                                      <!-- <td><input type="number" value="{{ $edit_result->test_3 }}" class="form-control" name="test_3" placeholder="Test 3"></td> -->
                                      <!-- <td><input type="number" value="{{ $edit_result->exams }}" class="form-control" name="exams" placeholder="Exams"></td> -->
                                      {{-- <td><input type="hidden" name="teacher_id[]" value="{{ Auth::guard('web')->user()->id }}" placeholder="Teacher ID"></td> --}}
                                      
                                    
                            </tbody>
                          </table>
                      
                        {{-- @else
                            
                      @endif --}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> 
                  Submit 
              </button>
                  
              </div>
           

                </form>
                
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


      
      @elseif (Auth::guard('web')->user()->section == 'Primary')
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        {{-- <small class="float-right">{{ $edit_result->created_at->format('D d, M Y, H:i')}}</small> --}}
                    </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-2 invoice-col">
                    <img style="width: 80px; height: 80px;" src="{{ asset('images/sch14.jpg') }}" alt=""> <br>

                
                </div> 
                <!-- /.col -->
               <div class="col-sm-8 invoice-col" style="text-align: center">
                 
                  <h1><strong>BRIXTONN SCHOOLS</strong></h1>
                  
                  <address>
                    
                    @if ($edit_result->centername == 'Uyo')
                    13 F-Line Ewet Housing Estate, Uyo 
                    Akwa Ibom State, Nigeria <br>
                    Website: brixtonnschools.com.ng
                    @else
                    No. 4 Julius Nyerere Crescent, <br>  Abuja 
                    Nigeria 
                    @endif
                    <br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 invoice-col">
                    <img style="width: 100px; height: 100px;" src="{{ URL::asset("/public/../$edit_result->images")}}" alt="">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                    <div class="col-12 table-responsive">
                      <form action="{{ url('web/updateresults/'.$edit_result->id) }}" method="post" enctype="multipart/form-data">
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
                            @method('PUT')
                        <table class="table table-striped">
                            <thead>
                            <tr>
                              <th>Subjects</th>
                              <th>Continous Assessment 1</th>
                              <th>Continous Assessment 2</th>
                              
                              <th>Exams Score</th>
                              <th>Teacher's Remarks</th>
                            </tr>
                            </thead>
                            <tbody>
      
                              
                                  <tr>
                                      <td>{{ $edit_result->subjectname }}</td>

                                      <td><input type="text" value="{{ $edit_result->test_1 }}" class="form-control" name="test_1" placeholder="Assessment Test 1"></td>
                                      <td><input type="text" value="{{ $edit_result->test_2 }}" class="form-control" name="test_2" placeholder="Assessment Test 2"></td>
                                      <td><input type="text" value="{{ $edit_result->exams }}" class="form-control" name="exams" placeholder="Exams"></td>
                                      <td><textarea cols="10" rows="10" value="" class="form-control" name="comment" placeholder="Teacher's Remarks">{!! $edit_result->comment !!}</textarea></td>
                                      {{-- <td><input type="hidden" name="teacher_id[]" value="{{ Auth::guard('web')->user()->id }}" placeholder="Teacher ID"></td> --}}
                                      
                                    
                            </tbody>
                          </table>
                      
                        {{-- @else
                            
                      @endif --}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> 
                  Submit 
              </button>
                  
              </div>
           

                </form>
                
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

      @else


      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        {{-- <small class="float-right">{{ $edit_result->created_at->format('D d, M Y, H:i')}}</small> --}}
                    </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-2 invoice-col">
                    <img style="width: 80px; height: 80px;" src="{{ asset('images/sch14.jpg') }}" alt=""> <br>

                
                </div> 
                <!-- /.col -->
               <div class="col-sm-8 invoice-col" style="text-align: center">
                 
                  <h1><strong>BRIXTONN HIGH SCHOOLS</strong></h1>
                  
                  <address>
                    
                    @if ($edit_result->centername == 'Uyo')
                    13 F-Line Ewet Housing Estate, Uyo 
                    Akwa Ibom State, Nigeria <br>
                    Website: brixtonnschools.com.ng
                    @else
                    No. 4 Julius Nyerere Crescent, <br>  Abuja 
                    Nigeria 
                    @endif
                    <br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 invoice-col">
                    <img style="width: 100px; height: 100px;" src="{{ URL::asset("/public/../$edit_result->images")}}" alt="">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                    <div class="col-12 table-responsive">
                      <form action="{{ url('web/updateresults/'.$edit_result->id) }}" method="post" enctype="multipart/form-data">
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
                            @method('PUT')
                        <table class="table table-striped">
                            <thead>
                            <tr>
                              <th>Subjects</th>
                              <th>Continous Assessment 1</th>
                              <th>Continous Assessment 2</th>
                              
                              <th>Exams</th>
                            </tr>
                            </thead>
                            <tbody>
      
                              
                                  <tr>
                                      <td>{{ $edit_result->subjectname }}</td>

                                      <td><input type="number" value="{{ $edit_result->test_1 }}" class="form-control" name="test_1" placeholder="Test 1"></td>
                                      <td><input type="number" value="{{ $edit_result->test_2 }}" class="form-control" name="test_2" placeholder="Test 2"></td>
                                      <td><input type="number" value="{{ $edit_result->exams }}" class="form-control" name="exams" placeholder="Exams"></td>
                                      {{-- <td><input type="hidden" name="teacher_id[]" value="{{ Auth::guard('web')->user()->id }}" placeholder="Teacher ID"></td> --}}
                                      
                                    
                            </tbody>
                          </table>
                      
                        {{-- @else
                            
                      @endif --}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> 
                  Submit 
              </button>
                  
              </div>
           

                </form>
                
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

        
      @endif

  
    </div>
    <!-- /.row -->
















    

  </div>
  <!-- /.content-wrapper -->

  
 @include('dashboard.footer')