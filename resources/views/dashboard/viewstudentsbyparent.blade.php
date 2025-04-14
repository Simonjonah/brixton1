@include('dashboard.header')
@include('dashboard.sidebar')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img style="width: 100%; height: 200px;" class="profile-user-img img-fluid"
                       src="{{ URL::asset("/public/../$view_student->images")}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $view_student->surname }}, {{ $view_student->fname }} {{ $view_student->middlename }}</h3>

                <p class="text-muted text-center"> {{ $view_student->email }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Center Name</b> <a href="" style="text-transform: uppercase" class="float-right">{{ $view_student->centername }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Class Name</b> <a class="float-right">{{ $view_student->classname }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>DOB</b> <a class="float-right">{{ $view_student->dob }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Section</b> <a class="float-right">{{ $view_student->section }}</a>
                  </li>

                  
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right">@if ($view_student->status == null)
                      <span class="badge badge-secondary">Admission In progress</span>
                    @elseif ($view_student->status == 'rejected')
                    <span class="badge badge-danger">Rejected</span>
                    @elseif ($view_student->status == 'suspend')
                    <span class="badge badge-warning">Suspended</span>
                    @elseif ($view_student->status == 'approved')
                    <span class="badge badge-info">Approved</span>
                    @else
                    <span class="badge badge-success">Admitted</span>
                    @endif</a>
                  </li>
                </ul>

                {{-- <a href="couse" class="btn btn-primary btn-block"><b>Register more Courses</b></a> --}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bio</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Student Education Level </strong>

                <p class="text-muted">
                  {{ $view_student->lastschool }}
                  <p>Near Contact</p>
                  {{ $view_student->landmark }} 
                  <p>School Address</p>
                  {{ $view_student->schooladdress }} 
                  <p>Other Siblings in Brixtonn</p>
                  {{ $view_student->brixtonsiblings }} 
                </p>
                

               

                <strong><i class="far fa-file-alt mr-1"></i> Note:</strong>

                <p class="text-muted">{{ $view_student->fname }} {{ $view_student->middlename }} {{ $view_student->surname }} hereby declare that the information given by me in this form is correct. I understand that if any piece of informatio is false i shall automatically be disqualified</p>
              </div> 
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  {{-- <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li> --}}
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Bio Data</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Father Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="#mother" data-toggle="tab">Mother Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="#olevels1" data-toggle="tab">Medical Reports</a></li>
                  {{-- <li class="nav-item"><a class="nav-link" href="#olevels2" data-toggle="tab">Olevels 2nd sitting</a></li> --}}

                  <li class="nav-item"><a class="nav-link" href="#quali" data-toggle="tab">Qualifications</a></li>


                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                
                  <!-- /.tab-pane -->
                  <div class="active tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          {{ $view_student->created_at->format('D d, M Y, H:i')}}
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $view_student->created_at->diffForHumans() }}</span>

                          <h3 class="timeline-header"><a href="mailTo:{{ $view_student->email }}">Email </a> {{ $view_student->email }}</h3>
                          <h3 class="timeline-header"><a href="mailTo:{{ $view_student->nationality }}">Nationality </a> {{ $view_student->nationality }}</h3>

                          <div class="timeline-body">
                            {{ $view_student->contactaddress }}
                          </div>
                          
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $view_student->created_at->diffForHumans()}}</span>

                          <h3 class="timeline-header border-0"><a href="#">{{ $view_student->phone }}</a>
                          </h3>

                          <h3 class="timeline-header border-0"><a href="#">{{ $view_student->logalgovt }}</a>
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                         <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $view_student->created_at->diffForHumans()}}</span>

                          <h3 class="timeline-header"><a href="#">State</a> {{ $view_student->state }}</h3>

                          
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          {{ $view_student->created_at->toFormattedDateString() }}
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">Gender</label>
                       <input type="text" class="form-control" value="{{ $view_student->gender }}" id="">
                    </div>

                    <div class="form-group">
                      <label for="">Propose Month of Entry</label>
                       <input type="text" class="form-control" value="{{ $view_student->monthofentry }}" id="">
                    </div>

                    <div class="form-group">
                      <label for="">Religion</label>
                       <input type="text" class="form-control" value="{{ $view_student->religion }}" id="">
                    </div>
                    <div class="form-group">
                      <label for="">Place of Birth</label>
                       <input type="text" class="form-control" value="{{ $view_student->placeofbirth }}" id="">
                    </div>

                    <div class="form-group">
                      <label for="">How You hear About Us</label>
                       <input type="text" class="form-control" value="{{ $view_student->aboutus }}" id="">
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  {{-- <div class="form-group">
                    <label for="">Take Action</label>
                    <a href="{{ url('admin/studentpdf/'.$view_student->ref_no)  }}" class="btn btn-primary">Print form</a>
                    
                    <th><a href="{{ url('admin/rejectstudent/'.$view_student->ref_no) }}" class="btn btn-sm bg-danger">
                      <i class="fas fa-user"></i>Reject
                    </a></th>
                   <th><a href="{{ url('admin/suspendstudent/'.$view_student->ref_no) }}" class="btn btn-sm bg-warning">
                      <i class="fas fa-comments"></i>Suspend
                    </a></th>

                    <th> <a href="{{ url('admin/studentsaddmit/'.$view_student->ref_no) }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Admit
                    </a></th>
                    <th><a href="{{ url('admin/medicalspdf/'.$view_student->ref_no) }}" class="btn btn-info"><i class="fas fa-print">Print Medicals</i></a></th>
                  </div> --}}
                  

              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
            
          </div>
          <!-- /.col -->
        </div>

        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      
    </section>
 </div>
    @include('dashboard.footer')

    

<script src="{{ asset('assets/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>

<script src="{{ asset('assets/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

