@include('dashboard.student.header')
@include('dashboard.student.sidebar')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course</h1>
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
            
            <div class="col-lg-12">
                <div class="card">
                <div class="card-header p-2">
                    
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                    
                    <!-- /.tab-pane -->
                    <div class="active tab-pane" id="timeline">
                        
                        
                        @if ($viewyour_courses)
                        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{ $viewyour_courses->course_programs }}</h3>
                    <div class="col-12">
                    <img src="{{ asset('assets/dist/img/imfi56.jpg')}}" class="product-image" alt="Product Image">
                    </div>
                    
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3">Program Information</h3>
                    <p>Date Registered {{ $viewyour_courses->created_at->format('D d, M Y, H:i') }}</p>
    
                    <hr>
                    
                    {{-- <h4 class="mt-3">Size <small>Please select one</small></h4> --}}
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                        <span class="text-xl">Period</span>
                        <br>
                        {{ $viewyour_courses->course_period }}
                    </label>
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                        <span class="text-xl">Course Programs</span>
                        <br>
                        {{ $viewyour_courses->course_programs }}
                    </label>

                    </div>
               <div class="card-header">
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                 <div id="accordion">
                   <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                   <div class="card card-primary">
                     <div class="card-header">
                       <h4 class="card-title">
                         <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                          ₦ {{ $viewyour_courses->course_amount }} Pay All
                         </a>
                       </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in">
                       <div class="card-body">
                        <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                          {{ csrf_field() }}
                      
                          <input type="hidden" name="name" value="{{ Auth::guard('student')->user()->fname }}" placeholder="Name" />
                          {{-- <input type="text" name="course_amount" value="{{ $viewyour_courses->course_amount }}" placeholder="Amount" /> --}}
                          <select class="form-control" name="course_amount" id="">
                            <label for="">Select Amount</label>
                            @if ($viewyour_courses->course_programs == 'Certificate in Data Processing')
                            <option value="{{ $viewyour_courses->course_amount }}">{{ $viewyour_courses->course_amount }} Pay All</option>
                              
                            @elseif($viewyour_courses->course_programs == 'Diploma in Data Processing')
                            <option value="{{ $viewyour_courses->course_amount }}">{{ $viewyour_courses->course_amount }} Pay All</option>
                              
                            <option value="{{ $viewyour_courses->course_amount }}">{{ $viewyour_courses->course_amount }} Pay All</option>
                            <option value="{{ $viewyour_courses->firstsemester_fee }}">{{ $viewyour_courses->firstsemester_fee }} First Semester </option>
                            <option value="{{ $viewyour_courses->secondsemester_fee }}">{{ $viewyour_courses->secondsemester_fee }} Second Semester</option>
                            <option value="{{ $viewyour_courses->thirddsemester_fee }}">{{ $viewyour_courses->thirddsemester_fee }} Third Semester</option>
                            @elseif($viewyour_courses->course_programs == 'Hardware Maintenance and Repairs')
                              <option value="{{ $viewyour_courses->course_amount }}">{{ $viewyour_courses->course_amount }} Pay All</option>
                                
                              <option value="{{ $viewyour_courses->course_amount }}">{{ $viewyour_courses->course_amount }} Pay All</option>
                              <option value="{{ $viewyour_courses->firstsemester_fee }}">{{ $viewyour_courses->firstsemester_fee }} First Semester </option>
                              <option value="{{ $viewyour_courses->secondsemester_fee }}">{{ $viewyour_courses->secondsemester_fee }} Second Semester</option>
                              <option value="{{ $viewyour_courses->thirddsemester_fee }}">{{ $viewyour_courses->thirddsemester_fee }} Third Semester</option>
                            @endif
    
                          </select><br>
                          <select class="form-control" name="semester" id="">
                          <label for="">Select Semester</label>
                          @if ($viewyour_courses->course_programs == 'Certificate in Data Processing')
                          <option value="First Semester">First Semester</option>
                            
                          @elseif($viewyour_courses->course_programs == 'Diploma in Data Processing')
                          
                          <option value="First Semester">First Semester </option>
                          <option value="Second Semester"> Second Semester</option>
                          {{-- <option value="Third Semester"> Third Semester</option> --}}
                          @elseif($viewyour_courses->course_programs == 'Hardware Maintenance and Repairs')
                          <option value="First Semester">First Semester </option>
                          <option value="Second Semester"> Second Semester</option>
                          <option value="Third Semester"> Third Semester</option>
                          @endif
  
                        </select><br>

                          <input type="hidden" name="course_id" value="{{ $viewyour_courses->id }}" placeholder="" />
                          <input type="hidden" name="student_id" value="{{ Auth::guard('student')->user()->id }}" placeholder="" />
                          <input type="hidden" name="course_programs" value="{{ $viewyour_courses->course_programs }}" placeholder="Amount" />
                          <input type="hidden" name="course_period" value="{{ $viewyour_courses->course_period }}" placeholder="course_period" />
                          <input type="hidden" name="course_contents" value="{{ $viewyour_courses->course_contents }}" placeholder="course_period" />
                          <input type="hidden" name="course_code" value="{{ $viewyour_courses->course_code }}" placeholder="course_period" />
                          <input type="hidden" name="slug" value="{{ $viewyour_courses->slug }}" placeholder="course_period" />
                          <input type="hidden" name="student_surname" value="{{ Auth::guard('student')->user()->surname }}" placeholder="course_period" />
                          
                          <input type="hidden" name="courseimages" value="{{ $viewyour_courses->courseimages }}" placeholder="course_period" />
  
                          <input type="hidden" name="email" value="{{ Auth::guard('student')->user()->email }}"  type="email" placeholder="Your Email" />
                          <input type="hidden" name="phone" value="{{ Auth::guard('student')->user()->phone }}" type="tel" placeholder="Phone number" />
                          {{-- <input type="hidden" name="student_surname" value="{{ Auth::guard('student')->user()->surname }}" placeholder="Amount" /> --}}
                          
                          <input class="btn btn-success" type="submit" value="Pay Now!" />
                      </form>

                       </div>
                     </div>
                   </div>
                  
                   </div>
             


                    <div class="mt-4">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            View All
                        </button>
                     
                    </div>
                    
                </div>
                </div>
                <div class="row mt-4">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                   
                    </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> {!! $viewyour_courses->courses['course_contents'] !!}</div>
                    {{-- <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
                    <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div> --}}
                </div>
                </div>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
    
        </section>

      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">₦ {{ $viewyour_courses->course_amount }} {{ $viewyour_courses->course_programs }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <form action="{{ url('student/registeranotherprograme') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                              <p>Course period</p>
                              <input type="text" class="form-control" value="{{ $viewyour_courses->course_period }}" name="course_period" id="" placeholder="Course Title">
                          </div>
                          
                          <div class="form-group">
                            <p>Course Program</p>
                            <input type="text" class="form-control" value="{{ $viewyour_courses->course_programs }}" name="course_programs" id="" placeholder="Course Title">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <p>Course Title</p>
                            <input type="text" class="form-control" value="{{ $viewyour_courses->course_programs }}" name="course_programs" id="" placeholder="Course Title">
                        </div>
                      
                        <div class="form-group">
                          <p>Course Amount</p>
                          <input type="text" class="form-control" value="{{ $viewyour_courses->course_amount }}" name="course_amount" id="" placeholder="Course Title">
                      </div>
                        <div class="modal-footer justify-content-between">
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
     @else
                         
    @endif
                      
                                            <!-- /.post -->
                  </div>
                  </div>
               
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
    @include('dashboard.student.footer')