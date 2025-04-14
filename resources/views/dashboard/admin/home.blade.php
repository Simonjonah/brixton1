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
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                {{-- <h3>{{ $payment_counts }}</h3> --}}

                <p>Payments</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              {{-- <a href="{{ route('admin.viewallpayment') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $countstudent }}<sup style="font-size: 20px"></sup></h3>

                <p>Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('admin.allstudents') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $countsubjects }}</h3>

                <p>Subjects </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ route('admin.allsubjects') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $countsubjecthigh }}</h3>

                <p>High School Subjects</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('admin.viewsubject') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $countsubjectprim }}</h3>
                <p>Primary Section</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ route('admin.nurserysubjects') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $countteacher }}</h3>
                <p>Teachers</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ route('admin.viewteachers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $countteacheruyo }}</h3>
                <p>Uyo Teachers</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ route('admin.uyoteachers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3>{{ $countteacherabuja }}</h3>
                <p>Abuja Teachers</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ route('admin.abujateachers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
              {{-- <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span> --}}

              <div class="info-box-content">
                <span class="info-box-text">Suspended Students</span>
                <span class="info-box-number">
                  {{ $countstudenttsuspend }}
                  {{-- <small>%</small> --}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              {{-- <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span> --}}
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approved Students</span>
                <span class="info-box-number">{{ $countstudentapprove }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
              {{-- <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span> --}}

              <div class="info-box-content">
                <span class="info-box-text">Rejected Students</span>
                <span class="info-box-number">{{ $countstudentreject }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Queries</span>
                <span class="info-box-number">{{ $countsqueries }}</span>
              </div>
            </div>
          </div>


          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Replied Queries</span>
                <span class="info-box-number">{{ $countsrepliedqueries }}</span>
              </div>
            </div>
          </div>


          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Events</span>
                <span class="info-box-number">{{ $countsevents }}</span>
              </div>
            </div>
          </div>


          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Testimonies</span>
                <span class="info-box-number">{{ $countstestimony }}</span>
              </div>
            </div>
          </div>


          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Replied Queries</span>
                <span class="info-box-number">{{ $countsrepliedqueries }}</span>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Lecturers</h3>
                    <div class="card-tools">
                      {{-- <span class="badge badge-danger">{{ $lecturer_counts }} New Lecturers</span> --}}
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                 
                  {{-- <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      @foreach ($view_lecturers as $view_lecturer)
                        @if ($view_lecturer->status = 'approved')
                          <li>
                           <a href="viewsinglelecturer/{{ $view_lecturer->ref_no }}"> <img style="width: 128px; height: 128px;" src="{{ URL::asset("/public/../$view_lecturer->images")}}" alt="User Image"></a>
                            <a class="users-list-name" href="viewsinglelecturer/{{ $view_lecturer->ref_no }}">{{ $view_lecturer->fname }} {{ $view_lecturer->lname }}</a>
                            <span class="users-list-date">Today</span>
                          </li>
                        @else
                        
                      @endif
                    @endforeach
                  </ul>
                  </div> --}}
                  
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    {{-- <a href="{{ route('admin.lecturers') }}">View All Users</a> --}}
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->





              <!-- TABLE: LATEST ORDERS -->
              <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Latest Students</h3>

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
                        <th>Student ID</th>
                        <th>Surname</th>
                        <th>First Name</th>

                        <th>Status</th>
                        <th>Program</th>
                      </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach ($view_students as $view_student)
                        <tr>
                          <td><a href="viewstudents/{{ $view_student->ref_no }}">{{ $view_student->ref_no }}</a></td>
                          <td>{{ $view_student->surname }}</td>
                          <td>{{ $view_student->fname }}</td>

                          <td>@if ($view_student->status == null)
                            <span class="badge badge-secondary">In Progress</span>
                          @elseif($view_student->status == 'approved')
                          <span class="badge badge-info">Approved</span>
                          @elseif($view_student->status == 'suspend')
                          <span class="badge badge-danger">Suspended</span>
                          @elseif($view_student->status == 'admitted')
                          <span class="badge badge-info">Admitted</span>
                          @endif
                        </td>
                        <td>{{ $view_student->programname }}</td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table> --}}
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  {{-- <a href="{{ route('admin.allstudents') }}" class="btn btn-sm btn-info float-left">View All Student</a> --}}
                  {{-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> --}}
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->





            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Payments</h3>

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
                      <th>Surname</th>
                      <th>First Name</th>
                      <th>Reg Number ID</th>
                      <th>Status</th>
                      <th>Program</th>
                    </tr>
                    </thead>
                    <tbody>
                      {{-- @foreach ($view_payments as $view_payment)
                      <tr>
                        <td><a href="viewsinglepayment/{{ $view_payment->id }}">View Payment of {{ $view_payment->student['surname'] }}</a></td>
                        <td><a href="viewstudents/{{ $view_payment->student['ref_no'] }}">{{ $view_payment->student['fname'] }}</a></td>
                        
                        <td>{{ $view_payment->student['regnumber'] }}</td>

                        <td>@if ($view_payment->status == null)
                          <span class="badge badge-secondary">In Progress</span>
                        @elseif($view_payment->status == 'Success')
                        <span class="badge badge-success">Success</span>
                        @elseif($view_payment->status == 'approved')
                        <span class="badge badge-danger">Approved</span>
                        @elseif($view_payment->status == 'confirm')
                        <span class="badge badge-info">Confirmed</span>
                        @endif
                      </td>
                      <td>{{ $view_payment->student['programname'] }}</td>

                      </tr>
                      @endforeach
                    </tbody> --}}
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{-- <a href="{{ route('admin.viewallpayment') }}" class="btn btn-sm btn-info float-left">View All Payment</a> --}}
                {{-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> --}}
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->


          
          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <!-- <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Inventory</span>
                <span class="info-box-number">5,200</span>
              </div>
            </div> -->
            <!-- /.info-box -->
            <!-- <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mentions</span>
                <span class="info-box-number">92,050</span>
              </div>
            </div> -->
            <!-- /.info-box -->
            <!-- <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
              </div>
            </div> -->
            <!-- /.info-box -->
            <!-- <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
              </div>
            </div> -->
            <!-- /.info-box -->

           

            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently Added Results</h3>

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
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  {{-- @foreach ($view_results as $view_result)
                  <li class="item">
                    <a href="viewresults/{{ $view_result->id }}" class="btn btn-info">View
                     </a>
                    <div class="product-info">
                      <a href="viewresults/{{ $view_result->id }}" class="product-title">{{ $view_result->course_title }}
                        <span class="badge badge-warning float-right">{{ $view_result->registercourse['programname']}}</span></a>
                      <span class="product-description">
                       By {{ $view_result->lecturer['fname'] }} {{ $view_result->lecturer['lname'] }}
                      </span>
                    </div>
                  </li>
                  @endforeach --}}
                </ul>
              </div>
            </div>
            <!-- /.card -->



            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">First TIme Payments</h3>

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
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  {{-- @foreach ($student_sums as $student_sum)
                  <li class="item">
                    <a href="viewstudents/{{ $student_sum->ref_no }}" class="btn btn-info">View 
                     </a>
                     <small><a href="viewsfees/{{ $student_sum->ref_no }}" class="btn btn-info">₦ {{ $student_sum->amount }}
                     </a></small>
                     
                    <div class="product-info">
                      <a href="viewstudents/{{ $student_sum->ref_no }}" class="product-title">{{ $student_sum->programname }}
                        <span class="badge badge-warning float-right">{{ $student_sum->registercourse['programname']}}</span></a>
                      <span class="product-description">
                       By {{ $student_sum->fname }} {{ $student_sum->surname }}
                      </span>
                    </div>
                  </li>
                  @endforeach
                </ul> --}}
              </div>
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
  </div>
  @include('dashboard.admin.footer')