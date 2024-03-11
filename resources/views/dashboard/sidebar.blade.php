<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('web/home') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}" alt="webLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light"> Brixtonn</span>
    </a>

    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/public/../'.Auth::guard('web')->user()->images)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('web/profile/'.Auth::guard('web')->user()->ref_no) }}" class="d-block">{{ Auth::guard('web')->user()->fname }}</a>
        </div>
      </div>
      @php
          
          use App\Models\Classname;
          use App\Models\Club1;
          $classnames = Classname::all();
          $clubs = Club1::all();
      @endphp
      <!-- Sidebar Menu -->
      @if (Auth::guard('web')->user()->status == null)
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
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
                <a href="{{ url('web/home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="{{ url('web/profile/'.Auth::guard('web')->user()->ref_no) }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pay Fees {{ Auth::guard('web')->user()->classname }}
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('web/studentpayment/'.Auth::guard('web')->user()->classname) }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Class {{ Auth::guard('web')->user()->classname }}</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ url('studentpayment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pensulate Term</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('studentpayment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Premium Term</p>
                </a>
              </li> --}}

              <li class="nav-item">
                <a href="{{ url('paymenthistory') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pay All Term</p>
                </a>
              </li>
             
            </ul>
          </li>

          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Payments History
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('web.paymenthistory') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payments History</p>
                </a>
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
                <a href="{{ route('web.logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
           
            </ul>
          </li>
         
        </ul>
      </nav>
      @elseif (Auth::guard('web')->user()->status == 'reject')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
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
                <a href="{{ route('web.logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
           
            </ul>
          </li>
         
        </ul>
      </nav>
        {{-- <h1>Dear {{ Auth::guard('web')->user()->fname }}, You have been rejected</h1> --}}
      @elseif (Auth::guard('web')->user()->status == 'suspend')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
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
                <a href="{{ route('web.logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
           
            </ul>
          </li>
         
        </ul>
      </nav>
      {{-- <h1>Dear {{ Auth::guard('web')->user()->fname }}, You have been suspended</h1> --}} 
      @elseif (Auth::guard('web')->user()->status == 'admitted')
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
                <a href="{{ url('web/home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('web/profile/'.Auth::guard('web')->user()->ref_no) }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pay Fees {{ Auth::guard('web')->user()->classname }}
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('web/payment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pioneer Term</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('web/payment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penultimate Term</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('payment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Premium Term</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('payment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pay All Term</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Payments History
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('web.paymenthistory') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payments History</p>
                </a>
              </li>
            
            </ul>
          </li>
          
          
          <li class="nav-header">ADMIMISSION</li>
          <li class="nav-item">
            <a href="{{ url('web/admisionletter') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Admission Letter</p>
            </a>
          </li>



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Check Result
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('web/checkresult') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pioneer Term Result</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('web/checkresultpenultimate') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penultimate Term Results</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('web/checkresultpremium') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Premium Term Results</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                My Child/Children 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ url('web/mychild') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>My Child/Children</p>
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
                <a href="{{ route('web.logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
           
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
     
   

      @elseif (Auth::guard('web')->user()->status == 'teacher' && Auth::guard('web')->user()->role == 'approved')
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard Teacher
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/web/home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('web/profile/'.Auth::guard('web')->user()->ref_no) }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Classes
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/web/pioneerterm') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pioneer Term</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/web/penultimateterm') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penultimate Term</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/web/premiumterm') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Premium Term</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Results Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('web/pioneertermresults') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pioneer Term Result</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('web/pioneertermresultsapproved') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PioneerTerm Result Appr</p>
                </a>
              </li>

              

              <li class="nav-item">
                <a href="{{ url('web/pensulatermresults') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pensultimate Term Result</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('web/penultimatetermresultsapproved') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pensultimate Result Appr</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('web/premiumtermresults') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Premium Term Result</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="{{ url('web/tpremiumprimarytermresults') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Premium Term Result Appr</p>
                </a>
              </li>
            
            </ul>
          </li>
          
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Query
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('web/checkyourquery') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Query</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('web/queryrepliedview') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Query Replied</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Club Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('web/addstudentoclub') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Student/Pupils</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('web/viewstudentsclubytacher') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> View Your Club Students</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                My Assigned Subjects 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ url('web/mysubjects') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>My Subjects</p>
                  </a>
                </li>
                @if (Auth::guard('web')->user()->promotion == 'Center Head')

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                      Results Section
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      @foreach ($classnames as $classname)
                      <a href="{{ url('web/classresultsheads/'.$classname->classname) }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Center Results {{ $classname->classname }}</p>
                      </a>
                      @endforeach
                      
                    </li>
      
                    <li class="nav-item">
                      <a href="{{ url('web/queryrepliedview') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Query Replied</p>
                      </a>
                    </li>
                    
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="{{ url('web/promotions') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Center Heads</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('web/crechpupils') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Creche Pupils</p>
                  </a>
                </li>
                

                <li class="nav-item">
                  <a href="{{ url('web/preschoolpupils') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pre-School pupils</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('web/preparatorypupils') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Preparatory pupils</p>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a href="{{ url('web/nurseryschoolpupils') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nursery Pupils</p>
                  </a>
                </li>

                

                <li class="nav-item">
                  <a href="{{ url('web/highschoolstudents') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>High Schools</p>
                  </a>
                </li>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Club Section
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    @foreach ($clubs as $club)
                    <a href="{{ url('web/viewclubteacher/'.$club->clubname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> View {{ $club->clubname }} Club</p>
                    </a>
                    @endforeach
                   
                  </li>
    
                  <li class="nav-item">
                    <a href="{{ url('web/viewscentertudentsclubytacher') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> View Your Club Students</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
                @elseif (Auth::guard('web')->user()->promotion == 'Creche Head')
                <li class="nav-item">
                  <a href="{{ url('web/crecheheads') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Creche Heads</p>
                  </a>
                </li>
                @elseif (Auth::guard('web')->user()->promotion == 'Pre-School Head')
                <li class="nav-item">
                  <a href="{{ url('web/preschoolheads') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pre-School Head</p>
                  </a>
                </li>
                @elseif (Auth::guard('web')->user()->promotion == 'Nursery Head')
                <li class="nav-item">
                  <a href="{{ url('web/nurseryschoolheads') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nursery School Head</p>
                  </a>
                </li>

                @elseif (Auth::guard('web')->user()->promotion == 'Primary Head')
                <li class="nav-item">
                  <a href="{{ url('web/primaryheads') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Primary Head</p>
                  </a>
                </li>
                
                @elseif (Auth::guard('web')->user()->promotion == 'High Head')

                <li class="nav-item">
                  <a href="{{ url('web/highschools') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>High Schools</p>
                  </a>
                </li>
                @elseif (Auth::guard('web')->user()->promotion == 'Preparatory Head')

                <li class="nav-item">
                  <a href="{{ url('web/preparatoryheads') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Preparatory Schools</p>
                  </a>
                </li>
                @else
                
                @endif
               
            

            </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Set Questions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('web.mysubjectsguestion') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Set Questions</p>
                </a>
              </li>
              

              <li class="nav-item">
                <a href="{{ url('web/mysquestions') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Questions</p>
                </a>
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
                <a href="{{ route('web.logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
           
            </ul>
          </li>
         
        </ul>
      </nav> 
      @else

      <h1>no</h1>
      @endif
    </div>
    <!-- /.sidebar -->
  </aside>
