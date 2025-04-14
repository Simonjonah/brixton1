<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light"><br>BRIXTONN  SCHOOLS </span>
    </a>
    
      <?php
        use App\Models\Classname;
        use App\Models\Club1;
          $view_clesses = Classname::all();
          $view_clubs = Club1::all();
      ?>
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/public/../'.Auth::guard('admin')->user()->images)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.profile') }}" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.profile') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Classes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ route('admin.addclass') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Class</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('admin.viewclassestables') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Classes</p>
                  </a>
                </li>
              </li>
            </ul>
          </li>


          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Center
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ route('admin.studycenter1') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Study Center</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('admin.studycentertables') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Study Center</p>
                  </a>
                </li>
              </li>
            </ul>
          </li>

          @php
            use App\Models\Studycenter;
            $view_centers = Studycenter::all();
          @endphp

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Parents
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ route('admin.addparent') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Parents</p>
                  </a>
                </li>
                @foreach ($view_centers as $view_center)
                <li class="nav-item">
                  <a href="{{ url('admin/viewparents/'.$view_center->centername) }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ $view_center->centername }} Parents</p>
                  </a>
                </li>
                @endforeach
               
              </li>
            </ul>
          </li>


         


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Assets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ route('admin.addgallery') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Gallery</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('admin.viewgallery') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Galleries</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ route('admin.addfacility') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Facility</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ route('admin.viewfacility') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Facilities</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ route('admin.addmainslider') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Main Slider</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ route('admin.viewmainslider') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Main Slider</p>
                  </a>
                </li>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Students
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.adminprogress') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student in Progress</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.rejectedstudent') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Students</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('admin.suspendstudents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suspeneded Students</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('admin.admittedstudents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admitted Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.allstudents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Students</p>
                </a>
              </li>


              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Uyo Center 
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/viewalluyo/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View {{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach
                  
                  {{-- <li class="nav-item">
                    <a href="{{ route('admin.viewpreparatory') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Uyo Preperatory</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewpreschool') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Uyo Pre-School</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewnursery') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Uyo Nursery</p>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a href="{{ route('admin.viewprimary') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Uyo Primary</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewhighschool') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Uyo High School</p>
                    </a>
                  </li> --}}
                </ul>
              </li> 


              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Abuja Center 
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">

                  @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/viewallabuja1/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View {{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach
                  
                  {{-- <li class="nav-item">
                    <a href="{{ route('admin.viewallabuja') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View All Abuja</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.viewabujapreparatory') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Abj Preperatory</p>
                    </a>
                  </li> --}}


                  {{-- <li class="nav-item">
                    <a href="{{ route('admin.abujapreschool') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Abj Pre-School</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewabujanursery') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Abj Nursery</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewabujaprimary') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Abj Primary</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewabjhighschool') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Abj High School</p>
                    </a>
                  </li> --}}
                </ul>
              </li> 
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Classes Manage
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Classes
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classrooms/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach
                  
                 
                </ul>
              </li>
              
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                     Clubs Section
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/addclubs1') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Club</p>
                    </a>

                  </li>

                  <li class="nav-item">
                    <a href="{{ url('admin/addclubs') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Student to Club</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('admin/viewclubs') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Clubs</p>
                    </a>
                  </li>


                  @foreach ($view_clubs as $view_club)
                  <li class="nav-item">
                    <a href="{{ url('admin/studentclubs/'.$view_club->clubname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_club->clubname }} Clubs</p>
                    </a>
                  </li>
                  @endforeach
                  
                </ul>
              </li>
              
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                     Clubs
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Centers Club
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('admin/uyoclubstudents') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>All Uyo Club students</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('admin/abujaclubstudents') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>All Abuja Club students</p>

                        </a>
                      </li>

                    </ul>
                  </li>

                  {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        NID in Hardware
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('admin/addnidhardcourses100') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Hardware Courses 100L</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('admin/addnidhardcourses200') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Hardware Courses 200L</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{ url('admin/viewardwarecourses') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p> Hardware Courses </p>
                        </a>
                      </li>
                    </ul>
                  </li> --}}
{{-- 
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        NID Bus Manag
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('admin/addnidmanagecourses100') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Bus Manag Courses 100L</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('admin/addnidmanagecourses200') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Bus Manag Courses 200L</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{ url('admin/viewnidmanagecourses') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Bus Manag Courses</p>
                        </a>
                      </li>
                    </ul>
                  </li> --}}
                  
                </ul>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Subjects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.addpresubject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add EYFS. Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.addsubject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Prim. Subject</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{ route('admin.addhighscsubject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add High Sc. Subject</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.preschoolsubjects') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign EYFS Sub</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.nurserysubjects') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign Prim & Nursery Sub</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.viewsubject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign High School Sub</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{ route('admin.teachertosubjects') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teacher to Subject</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.allsubjects') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Subject</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Session
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.addsession') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Session</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.viewsession') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Session</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Teachers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.viewteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.approveteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Approve Teachers </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.suspendedteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Suspended Teachers </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.sackedteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Sacked Teachers </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.queriedteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Queried Teachers </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.queriedteachersreply') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Query Replied </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.allteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Teachers </p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="{{ route('admin.uyoteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Uyo Teachers </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.abujateachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Abuja Teachers </p>
                </a>
              </li>
              
            </ul>

          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Payments 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.addpayment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Payment</p>
                </a>
              </li>

              @foreach ($view_clesses as $view_clesse)
              <li class="nav-item">
                <a href="{{ url('admin/viewclasspayment/'.$view_clesse->classname) }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View {{ $view_clesse->classname }} Payment</p>
                </a>
              </li>
              @endforeach
             
              <li class="nav-item">
                <a href="{{ route('admin.viewallpayments') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Payment</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Questions 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                {{-- addquestions --}}
                <a href="{{ route('admin.setsubjectquestions') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Questions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/questionbyadmin') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Myadmin  Questions</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/uyoquestions') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Uyo Centre  Questions</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/abujaquestions') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Abuja Centre  Questions</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Transactions 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.viewuyopayment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Uyo Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/abujapayment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Abuja Payment</p>
                </a>
              </li>

             
            </ul>
          </li>



          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Student Reg. Courses 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.certregcourses') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cert. Data Processing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.certregcourssd1') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diploma Data Processing</p>
                </a>
              </li>

            </ul>
          </li> --}}
          
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                End of Term Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classresults/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

                
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Abuja Result Center
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classresultsabuja/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

                      
                    </ul>
                  </li> 

              <li class="nav-item">
                <a href="{{ url('admin/allresult') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Results</p>
                </a>
              </li>
            </ul>
          </li> -->
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Midterm Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classresultsmidterm/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

                
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Abuja Result Center
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classresultsabuja/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

                      
                    </ul>
                  </li> 

              <!-- <li class="nav-item">
                <a href="{{ url('admin/allresult') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Results</p>
                </a>
              </li> -->
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                End of Term Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classresults/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

                
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Abuja Result Center
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classresultsabuja/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

                      
                    </ul>
                  </li> 

              <li class="nav-item">
                <a href="{{ url('admin/allresult') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Results</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Administrations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('admin.addblog') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Press Releasse</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.viewblog') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Press Releasse</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.addtestimony') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Testimony</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.viewtestimony') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Testimony</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.addevent') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.viewevents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Event</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.addteam') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.viewteam') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Team</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Contact Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
                <li class="nav-item">
                  <a href="{{ route('admin.viewbookings') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Bookings</p>
                  </a>
                </li>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.viewcontact') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact</p>
                </a>
              </li>
            </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Roles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               
                <li class="nav-item">
                  <a href="{{ route('admin.viewroles') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Role</p>
                  </a>
                </li>
              </li>
            </ul>
          </li>


         


          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Logout
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
           
            </ul>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
