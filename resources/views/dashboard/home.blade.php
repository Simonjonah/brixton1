@include('dashboard.header')

  @include('dashboard.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="text-transform: capitalize">{{ Auth::guard('web')->user()->role }}</h1>
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

   @if (Auth::guard('web')->user()->status == null)
     {{-- @include('dashboard.firstregistration') --}}
    <h1>Welcome, {{ Auth::guard('web')->user()->title }} {{ Auth::guard('web')->user()->fathername }}, Please wait for approval shortly! </h1>

   @elseif (Auth::guard('web')->user()->status == 'suspend')
    <h1>{{ Auth::guard('web')->user()->fname }}, You have been suspended</h1>
    @elseif (Auth::guard('web')->user()->status == 'reject')
    <h1>{{ Auth::guard('web')->user()->fname }}, You have been rejected</h1>
   
    @elseif (Auth::guard('web')->user()->status == 'admitted')
      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            {{-- <div class="small-box bg-info">
              <div class="inner">
                <h3>44</h3>

                <p>Courses Registered By Me</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div> --}}
          </div>
          <!-- ./col -->
          <div class="col-lg-12 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ Auth::guard('web')->user()->amount }}<sup style="font-size: 20px"></sup></h3>

                <p>School Initial Fees</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            {{-- <div class="small-box bg-warning">
              <div class="inner">
                <h3>33</h3>

                <p>Other Payments</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div> --}}
          </div>
          <!-- ./col -->
          {{-- <div class="col-lg-3 col-6"> --}}
            <!-- small box -->
            {{-- <div class="small-box bg-danger">
              <div class="inner">
                <h3>33</h3>

                <p>My Results NID</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div> --}}
              {{-- <a href="{{ route('web.legalcontact') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            {{-- </div>
          </div> --}}
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            {{-- <div class="small-box bg-secondary">
              <div class="inner">
                <h3>33</h3>

                <p>Results</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>

              </div> --}}
              {{-- <a href="{{ route('web.viewpersonnel') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->

        </div>
        
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
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Reg No</th>
                        <th>Images</th>
                        <th>Section</th>
    
                        <th>View</th>
                        <!-- <th>Edit</th> -->
                        <th>Status</th>
                        <!-- <th>Add Child</th> -->
                        
                        
                        <th>Date</th>
    
                      </tr>
                      </thead>
                      <tbody>
    
                        @foreach ($view_childrens as $view_children)
                          @if ($view_children->status = 'admitted')
                          <tr>
                            <td>{{ $view_children->surname }}</td>
                            <td>{{ $view_children->fname }}</td>
                            <td>{{ $view_children->middlename }}</td>
                            <td>{{ $view_children->regnumber }}</td>
                            <td><img style="width: 100%; height: 60px;" src="{{ URL::asset("/public/../$view_children->images")}}" alt=""></td>
                            <td>{{ $view_children->section }}
                            <small>{{ $view_children->classname }}</small>
                            </td>
    
    
                             <td><a href="{{ url('web/viewstudentsbyparent/'.$view_children->ref_no1) }}"
                              class='btn btn-default'>
                               <i class="far fa-eye"></i>
                           </a></td>
                             <!-- <td><a href="{{ url('web/editstudentbyparent/'.$view_children->ref_no1) }}"
                              class='btn btn-info'>
                               <i class="far fa-edit"></i>
                           </a></td> -->
                           <td>@if ($view_children->status == null)
                            <span class="badge badge-secondary"> In progress</span>
                           @elseif($view_children->status == 'admitted')
                           <span class="badge badge-success"> Admitted</span>
                           
                           @endif</td>
                           
                           
    
                           <!-- <th><a href="{{ url('web/registeryourchild/'.Auth::guard('web')->user()->ref_no) }}" class="btn btn-sm bg-teal">
                            <i class="fas fa-user"></i>
                          </a></th> -->
                  
    
                         
                            
                         <td>{{ $view_children->created_at->format('D d, M Y, H:i')}}</td>
    
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
      
                          <th>Reg No</th>
                          <th>Images</th>
                          <th>Section</th>
      
                          <th>View</th>
                          <!-- <th>Edit</th> -->
                          <th>Status</th>
                          <!-- <th>Add Child</th> -->
                          
                          
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
       
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->


      </div><!-- /.container-fluid -->
    </section>

{{-- @elseif (Auth::guard('web')->user()->role == 'teacher' AND Auth::guard('web')->user()->status == 'approved') --}}
@elseif (Auth::guard('web')->user()->status == 'teacher' && Auth::guard('web')->user()->role == 'approved')    
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $countyourresults }}</h3>

            <p>Result By Me</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{ url('web/pioneertermresults') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $countmysubjects }}<sup style="font-size: 20px"></sup></h3>

            <p>My Subjects</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{ url('web/mysubjects') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $countqueries }}</h3>

            <p>Your Query</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ url('web/checkyourquery') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $countreplyqueries }}</h3>

            <p>Replied Query</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="{{ route('web.queryrepliedview') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3>{{ $countmyquestions }}</h3>

            <p>Questions</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>

          </div>
          <a href="{{ route('web.mysquestions') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

    </div>
    <!-- /.row -->
    <!-- Main row -->
   <!-- TABLE: LATEST ORDERS -->
   <div class="card">
    <div class="card-header border-transparent">
      <h3 class="card-title">Your info</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table m-0">
          <thead>
          <tr>
            <th> ID</th>
            <th>Surname</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Center</th>
            <th>Status</th>
          </tr>
          
          </thead>
          <tbody>
          <tr>
            <td><a href="{{ url('web/profile/'.Auth::guard('web')->user()->ref_no1)  }}">{{ Auth::guard('web')->user()->ref_no1  }}</a></td>
            <td>{{ Auth::guard('web')->user()->surname  }}</td>
            <td>{{ Auth::guard('web')->user()->fname  }}</td>
            <td>{{ Auth::guard('web')->user()->middlename  }}</td>
            <td>{{ Auth::guard('web')->user()->centername  }}</td>
           <td> @if (Auth::guard('web')->user()->status = null)
            <span class="badge badge-info">Admission in progress</span>
            @elseif (Auth::guard('web')->user()->status = 'admitted')
            <span class="badge badge-success">Admtted</span>
            @elseif (Auth::guard('web')->user()->status = 'reject')
            <span class="badge badge-danger">Admtted</span>
            @elseif (Auth::guard('web')->user()->status = 'approved')
            <span class="badge badge-success">Approved</span>
            @elseif (Auth::guard('web')->user()->status = 'suspend')
            <span class="badge badge-warning">Suspended</span>
            @endif
           </td>
           
          </tr>
         
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <a href="{{ url('web/profile/'.Auth::guard('web')->user()->ref_no1)  }}" class="btn btn-sm btn-info float-left">View Profile</a>
      {{-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> --}}
    </div>
    <!-- /.card-footer -->
  </div>
  <!-- /.card -->
</div>
<!-- /.col -->


  </div><!-- /.container-fluid -->
</section>
@else

@endif

    
    <!-- /.content -->
  </div>
  @include('dashboard.footer')