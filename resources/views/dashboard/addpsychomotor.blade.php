@include('dashboard.header')
@include('dashboard.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subjects </h1>
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
      
    
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Monthly Recap Report</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                {{-- <p class="text-center">
                  <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                </p> --}}

                <div class="table-responsive">
                  {{-- <p class="lead">Behaviour</p> --}}
    
                  <form action="{{ url('web/createpsychomotoro1') }}" method="post">
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
                    {{-- @method('PUT') --}}
                      <table class="table table-bordered">
                        
                        <td><input type="hidden" name="teacher_id" value="{{ Auth::guard('web')->user()->id }}" id=""></td>
                        <td><input type="hidden" name="user_id" value="{{ $add_psychomotor->id }}" id=""></td>
                        <td><input type="hidden" name="entrylevel" value="{{ $add_psychomotor->entrylevel }}" id=""></td>
                        <td><input type="hidden" name="academic_session" value="{{ $add_psychomotor->academic_session }}" id=""></td>
                        <td><input type="hidden" name="classname" value="{{ $add_psychomotor->classname }}" id=""></td>
                        <td><input type="hidden" name="regnumber" value="{{ $add_psychomotor->regnumber }}" id=""></td>
                        <td><input type="hidden" name="section" value="{{ $add_psychomotor->section }}" id=""></td>
    
                       
                        
                      
                      </table>
                      <div class="form-group">
                          <textarea class="form-control" name="headteacher_comment" id="" cols="20" rows="5" placeholder="Teacher's Comment"></textarea>
                      </div>

                      <div class="form-group">
                        <input class="form-control" name="nextterm"  placeholder="Next Term Begin"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="">Times School Opened</label>
                      <input class="form-control" name="schoolopen"  placeholder="Times School Opened">
                  </div>
                  <div class="form-group">
                    <label for="">Times Present</label>
                    <input class="form-control" name="timespresent"  placeholder="Times Present">
                </div>
                <div class="form-group">
                  <label for="">Times Absent</label>
                  <input class="form-control" name="timeabsent"  placeholder="Times Absent">
              </div>

               
              </div>
             
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> Submit
               
              </button>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->


    @elseif (Auth::guard('web')->user()->section == 'Primary')
          
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Monthly Recap Report</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                

                <div class="table-responsive">
    
                  <form action="{{ url('web/createpsychomotoro1') }}" method="post">
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
                    
                      <table class="table table-bordered">
                        <tr>
                          <th style="width:50%">BEHAVIOUR:</th>
                          <th style="width:50%">A</th>
                          <th style="width:50%">B</th>
                          <th style="width:50%">C</th>
                          <th style="width:50%">D</th>
                          <th style="width:50%">E</th>
                        </tr>
                        <td><input type="hidden" name="teacher_id" value="{{ Auth::guard('web')->user()->id }}" id=""></td>
                        <td><input type="hidden" name="user_id" value="{{ $add_psychomotor->id }}" id=""></td>
                        <td><input type="hidden" name="entrylevel" value="{{ $add_psychomotor->entrylevel }}" id=""></td>
                        <td><input type="hidden" name="academic_session" value="{{ $add_psychomotor->academic_session }}" id=""></td>
                        <td><input type="hidden" name="classname" value="{{ $add_psychomotor->classname }}" id=""></td>
                        <td><input type="hidden" name="regnumber" value="{{ $add_psychomotor->regnumber }}" id=""></td>
                        <td><input type="hidden" name="section" value="{{ $add_psychomotor->section }}" id=""></td>
    
                        <tr>
                          <th>Punctuality</th>
                          <td><input type="checkbox" name="punt1" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt3" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt4" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt5" value="Yes" id=""></td>
                          
                        </tr>
    
                        <tr>
                          <th>Mental Alertness</th>
                        
                          <td><input type="checkbox" value="Yes" name="mentalalert1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Respect</th>
                        
                          <td><input type="checkbox" value="Yes" name="respect1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Neatness</th>
                    
                          <td><input type="checkbox" value="Yes" name="neat1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Politeness</th>
                  
                          <td><input type="checkbox" value="Yes" name="polite1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite5" id=""></td>
                          
                        </tr>
    
                        <tr>
                          <th>Honesty</th>
                          
                          <td><input type="checkbox" value="Yes" name="honesty1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Relationship with peers</th>
                  
                          <td><input type="checkbox" value="Yes" name="relationship1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Willingness to learn</th>
                      
                          <td><input type="checkbox" value="Yes" name="williness1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Team Spirit</th>
                          
                          <td><input type="checkbox" value="Yes" name="teamspirit1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit5" id=""></td>
                          
                        </tr>
                      </table>
                      <div class="form-group">
                          <textarea class="form-control" name="headteacher_comment" id="" cols="20" rows="5" placeholder="Teacher's Comment"></textarea>
                      </div>

                      <div class="form-group">
                        <input class="form-control" name="nextterm"  placeholder="Next Term Begin"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="">Times School Opened</label>
                      <input class="form-control" name="schoolopen"  placeholder="Times School Opened">
                  </div>
                  <div class="form-group">
                    <label for="">Times Present</label>
                    <input class="form-control" name="timespresent"  placeholder="Times Present">
                </div>
                <div class="form-group">
                  <label for="">Times Absent</label>
                  <input class="form-control" name="timeabsent"  placeholder="Times Present">
              </div>



                </div>
               
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <p class="text-center">
                  <strong>Goal Completion</strong>
                </p>

                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">PSYCHOMOTOR SKILLS:</th>
                      <th style="width:50%">A</th>
                      <th style="width:50%">B</th>
                      <th style="width:50%">C</th>
                      <th style="width:50%">D</th>
                      <th style="width:50%">E</th>
                    </tr>
                    <tr>
                      <th>Verbal Skills</th>
                      <td><input type="checkbox" value="Yes" name="verbal1" id=""></td>
                      <td><input type="checkbox" value="Yes" name="verbal2" id=""></td>
                      <td><input type="checkbox" value="Yes" name="verbal3" id=""></td>
                      <td><input type="checkbox" value="Yes" name="verbal4" id=""></td>
                      <td><input type="checkbox" value="Yes" name="verbal5" id=""></td>
                    </tr>
                    <tr>
                      <th>Games and Sports</th>
                      <td><input type="checkbox" value="Yes" name="sports1" id=""></td>
                      <td><input type="checkbox" value="Yes" name="sports2" id=""></td>
                      <td><input type="checkbox" value="Yes" name="sports3" id=""></td>
                      <td><input type="checkbox" value="Yes" name="sports4" id=""></td>
                      <td><input type="checkbox" value="Yes" name="sports5" id=""></td>
                    </tr>
    
                    <tr>
                      <th>Arts and Craft</th>
                      <td><input type="checkbox" value="Yes" name="arts1" id=""></td>
                      <td><input type="checkbox" value="Yes" name="arts2" id=""></td>
                      <td><input type="checkbox" value="Yes" name="arts3" id=""></td>
                      <td><input type="checkbox" value="Yes" name="arts4" id=""></td>
                      <td><input type="checkbox" value="Yes" name="arts5" id=""></td>
                    </tr>
                    <tr>
                      <th>Creativity</th>
                      <td><input type="checkbox" value="Yes" name="creativity1" id=""></td>
                      <td><input type="checkbox" value="Yes" name="creativity2" id=""></td>
                      <td><input type="checkbox" value="Yes" name="creativity3" id=""></td>
                      <td><input type="checkbox" value="Yes" name="creativity4" id=""></td>
                      <td><input type="checkbox" value="Yes" name="creativity5" id=""></td>
                    </tr>
    
                    <tr>
                      <th>Music Skills</th>
                      <td><input type="checkbox" value="Yes" name="music1" id=""></td>
                      <td><input type="checkbox" value="Yes" name="music2" id=""></td>
                      <td><input type="checkbox" value="Yes" name="music3" id=""></td>
                      <td><input type="checkbox" value="Yes" name="music4" id=""></td>
                      <td><input type="checkbox" value="Yes" name="music5" id=""></td>
                    </tr>
    
                    <tr>
                      <th>Dance Skills</th>
                      <td><input type="checkbox" value="Yes" name="paint1" id=""></td>
                      <td><input type="checkbox" value="Yes" name="paint2" id=""></td>
                      <td><input type="checkbox" value="Yes" name="paint3" id=""></td>
                      <td><input type="checkbox" value="Yes" name="paint4" id=""></td>
                      <td><input type="checkbox" value="Yes" name="paint5" id=""></td>
                    </tr>
                  
                  </table>
    
                </div>
                <table class="table table-bordered">
                  <tr>
                    <th style="width:50%"></th>
                    <th style="width:50%">KEY</th>
                    
                  </tr>
                  <tr>
                    <th>A</th>
                    <td>Excellence</td>
                  </tr>
                  <tr>
                    <th>B</th>
                    <td>Very Good</td>
                  </tr>
  
                  <tr>
                    <th>C</th>
                    <td>Good</td>
                  </tr>
                  <tr>
                    <th>D</th>
                    <td>Needs Improvement</td>
                  </tr>
  
                  <tr>
                    <th>E</th>
                    <td>Unsatisfactory</td>
                  </tr>
                  
                </table>
              </div>
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> Submit
               
              </button>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    @else
      

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title" style="color: red; text-align: center">SOCIAL BEHAVIOURS AND MANIPULATIVE SKILLS</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              
              <div class="col-md-3">
               
                <div class="table-responsive">
                  <form action="{{ url('web/createpsychomotoro1') }}" method="post">
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
                    {{-- @method('PUT') --}}
                   
                      <table class="table table-bordered">
                        <tr>
                          <th style="width:50%">PERSONAL DEVELOPMENT</th>
                          <th style="width:50%" colspan="2">RATE</th>
                        </tr>
                        <td><input type="hidden" name="teacher_id" value="{{ Auth::guard('web')->user()->id }}" id=""></td>
                        <td><input type="hidden" name="user_id" value="{{ $add_psychomotor->id }}" id=""></td>
                        <td><input type="hidden" name="entrylevel" value="{{ $add_psychomotor->entrylevel }}" id=""></td>
                        <td><input type="hidden" name="academic_session" value="{{ $add_psychomotor->academic_session }}" id=""></td>
                        <td><input type="hidden" name="classname" value="{{ $add_psychomotor->classname }}" id=""></td>
                        <td><input type="hidden" name="regnumber" value="{{ $add_psychomotor->regnumber }}" id=""></td>
                        <td><input type="hidden" name="section" value="{{ $add_psychomotor->section }}" id=""></td>
    
                     
                        <tr>
                          <th>Obedience</th>
                          <td><select name="mentalalert1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="mentalalert2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th>Self-Control</th>
                          <td><select name="self1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="self2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th>Self-Reliance</th>
                    
                          <td><select name="rely1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="rely2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                          
                        </tr>
                       
    
                        <tr>
                          <th>Honesty</th>
                          <td><select name="honesty1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="honesty2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>

                        <tr>
                          <th>Use of Initiative</th>
                          <td><select name="init1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="init2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
                       
                       
                       
                      </table>
                      <div class="form-group">
                          <textarea class="form-control" name="headteacher_comment" id="" cols="20" rows="5" placeholder="Teacher's Comment"></textarea>
                      </div>

                      <div class="form-group">
                        <input class="form-control" name="nextterm"  placeholder="Next Term Begin"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="">Times School Opened</label>
                      <input class="form-control" name="schoolopen"  placeholder="Times School Opened">
                  </div>
                  <div class="form-group">
                    <label for="">Times Present</label>
                    <input class="form-control" name="timespresent"  placeholder="Times Present">
                </div>
                <div class="form-group">
                  <label for="">Times Absent</label>
                  <input class="form-control" name="timeabsent"  placeholder="Times Absent">
              </div>
              </div>
               
              </div>
              <!-- /.col -->
              <div class="col-md-3">
                

                <div class="table-responsive">
                  <table class="table">
                        <tr>
                          <th style="width:50%">SENSE OF RESPONSIBILITY</th>
                          <th style="width:50%" colspan="2">RATE</th>
                        </tr>
                        
                        <tr>
                          <th>Punctuality</th>
                          <td><select name="punt1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="punt2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
                    
                        <tr>
                          <th>General Neatness</th>
                          <td><select name="neat1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="neat2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>

                        <tr>
                          <th>Perseverance</th>
                          <td><select name="per1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="per2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>

                        <tr>
                          <th>Attendance in Class</th>
                          <td><select name="atten1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="atten2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th>Attentiveness</th>
                          <td><select name="attentiveness1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="attentiveness2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>

                        
                  </table>
                </div>
              </div>


              <div class="col-md-3">
               

                <div class="table-responsive">
                  <table class="table">
                  <tr>
                          <th style="width:50%">PSYCOMOTOR DEVELOPMENT</th>
                          <th style="width:50%" colspan="2">RATE</th>
                        </tr>
                        
                        <tr>
                          <th>Handwriter</th>
                          <td><select name="hand1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="hand2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
                    
                        <tr>
                          <th>Sports and Games</th>
                          <td><select name="sports1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="sports2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
    
                        <tr>
                          <th>Verbal Communication</th>
                          <td><select name="verbal1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="verbal2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th>Mannual Skills (in handling Tools and Equipment)</th>
                          <td><select name="tool1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="tool2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
    
                        <tr>
                          <th>Dexterity (in handling musical instruments and Arts materials)</th>
                          <td><select name="dex1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="dex2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
                    
                  
                  </table>
    
                </div>
                
              </div>


              <div class="col-md-3">
               
                <div class="table-responsive">
                  <table class="table">
                  <tr>
                          <th style="width:50%">SOCIAL DEVELOPMENT</th>
                          <th style="width:50%" colspan="2">RATE</th>
                        </tr>
                        
                    <tr>
                          <th>Courtesy</th>
                          <td><select name="court1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="court2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th>Consideration for Others</th>
                          <td><select name="consi1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="consi2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
    
                        <tr>
                          <th>Promptness in completing Work</th>
                          <td><select name="work1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="work2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>

                        <tr>
                          <th>Respect for Schools Property</th>
                          <td><select name="property1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="property2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>

                        
                        <tr>
                          <th>Sociability</th>
                          <td><select name="social1" id="">
                          <option value="Nil">Nil</option>
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            
                          </select></td>
                          <td><select name="social2" id="">
                            <option value="Nil">Nil</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select></td>
                        </tr>
    
    
                   
                  
                  </table>
    
                </div>
                
              </div>

              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> Submit
               
              </button>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    @endif
  















    

  </div>
  <!-- /.content-wrapper -->

  
 @include('dashboard.footer')