@include('dashboard.admin.header')
@include('dashboard.admin.sidebar')
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
                       src="{{ URL::asset("/public/../$view_singlepersonel->images")}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $view_singlepersonel->firstname }}  {{ $view_singlepersonel->lastname }}</h3>

                <p class="text-muted text-center"> {{ $view_singlepersonel->email }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Publications</b> <a class="float-right">{{ $view_singlepersonel->phone }}</a>
                  </li>
                  {{-- <li class="list-group-item">
                    <b>Resources</b> <a class="float-right">{{ $resource_counts }}</a>
                  </li> --}}
                  {{-- <li class="list-group-item">
                    <b>Contacts</b> <a class="float-right">13,287</a>
                  </li> --}}
                </ul>

                <a href="{{ $view_singlepersonel->facebook }}" class="btn btn-primary btn-block"><b>Facebook</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
          
              
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
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Personal Information</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">About</a></li>
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
                          {{ $view_singlepersonel->created_at->format('D d, M Y, H:i')}}
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $view_singlepersonel->created_at->diffForHumans() }}</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> {{ $view_singlepersonel->email }}</h3>

                          <div class="timeline-body">
                            Whatsapp
                            <a href="{{ $view_singlepersonel->whatapp }}" target="_blank" rel="noopener noreferrer">{{ $view_singlepersonel->whatapp }}</a>
                          </div>
                          
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $view_singlepersonel->created_at->diffForHumans()}}</span>

                          <h3 class="timeline-header border-0"><a href="#">{{ $view_singlepersonel->phone }}</a> {{ $view_singlepersonel->phone }}
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i> 

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $view_singlepersonel->created_at->diffForHumans()}}</span>

                          <h3 class="timeline-header"><a href="{{ $view_singlepersonel->twitter }}">Twitter</a>{{$view_singlepersonel->twitter}}</h3>

                          <div class="timeline-body">
                            <a href="{{ $view_singlepersonel->linkedin }}" target="_blank" rel="noopener noreferrer">{{ $view_singlepersonel->linkedin }}</a>
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">{{ $view_singlepersonel->designation }}</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          {{ $view_singlepersonel->created_at->format('D d, M Y, H:i') }}
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
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                     {{ $view_singlepersonel->message }}
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
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
    @include('dashboard.admin.footer')