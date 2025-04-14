@include('dashboard.header')
@include('dashboard.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1>Subjects </h1> --}}
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

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            @foreach ($view_myresult_results as $view_myresult_result)
              
            @endforeach
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        {{-- <small class="float-right">{{ $view_student->created_at->format('D d, M Y, H:i')}}</small> --}}
                    </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-2 invoice-col">
                    <img style="width: 250px; height: 50px;" src="{{ asset('images/sch14.jpg') }}" alt=""> <br>

                  {{-- <address>
                    <strong>BRIXTONN SCHOOLS</strong><br>
                    @if ($view_myresult_result->centername == 'Uyo')
                    13 F-Line Ewet Housing Estate, Uyo <br>
                    Akwa Ibom State, Nigeria <br>
                    Website: brixtonnschools.com.ng
                    @else
                    No. 4 Julius Nyerere Crescent, <br>  Abuja 
                    Nigeria 
                    @endif
                    <br>
                  </address> --}}
                </div> 
                <!-- /.col -->
               <div class="col-sm-8 invoice-col" style="text-align: center">
                <h1>BRIXTONN SCHOOLS</h1><br>
                    @if ($view_myresult_result->centername == 'Uyo')
                    13 F-Line Ewet Housing Estate, Uyo
                    Akwa Ibom State, Nigeria <br>
                    Website: brixtonnschools.com.ng

                    
                    <h4 style="text-transform: uppercase"> REPORT FOR {{ $view_myresult_result->entrylevel }}, {{ $view_myresult_result->academic_session }} SESSION</h4>
                    @else
                    No. 4 Julius Nyerere Crescent, <br>  Abuja 
                    Nigeria 
                    @endif
                   {{-- To --}}
                   {{-- <address>
                    Name: <strong><br>
                    Gender: {{ $view_myresult_result->user['gender'] }}<br>
                    Phone: {{ $view_myresult_result->user['phone'] }}<br>
                    Email: {{ $view_myresult_result->user['email'] }}<br>
                    Admission ID: {{ $view_myresult_result->user['regnumber'] }}<br>
                    Session: {{ $view_myresult_result->user['academic_session'] }}<br>
                    Entry Level: {{ $view_myresult_result->user['entrylevel'] }}<br>
                    Center Name: {{ $view_myresult_result->user['centername'] }}<br>

                  </address> --}}
                </div>
                <!-- /.col -->
               <div class="col-sm-2 invoice-col">
                    <img  style="width: 150px; height:90px;" src="{{ URL::asset("/public/../$view_myresult_result->images")}}" alt="">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <table class="table table-bordered">
                    
                    <tbody>
                        <tr>
                            <td>Name: {{ $view_myresult_result->user['surname'] }}, {{ $view_myresult_result->user['fname'] }} {{ $view_myresult_result->user['middlename'] }}</td>
                        </tr>
                        <tr>
                            <td>Class: {{ $view_myresult_result->classname }}</td>
                        </tr>
                        <tr>
                            {{-- <td>Date: </td> --}}
                        {{-- </tr>{{ $view_myresult_result->updated_at->format('D d, M Y, H:i')}}  --}}
                    </tbody>
                </table>
                <div class="col-12 table-responsive">
                    
              
                  <table class="table table-striped">
                      <thead>
                      <tr>
                        <th>Firstname</th>
                        <th>Middlename</th>
                        <th>Surname</th>
                        <th>Subjects</th>
                        <th>Ca 1</th>
                        <th>Ca 2</th>
                        <th>Ca 3</th>
                        <th>Exams</th>
                        <th>Total</th>
                        <th>Grade</th>
                        <th>Remarks</th>
                        
                      </tr>
                      </thead>
                      <tbody>
                          @foreach ($view_myresult_results as $view_myresult_result)
                          <tr>
                              <td>{{ $view_myresult_result->user['fname'] }}</td>
                              <td>{{ $view_myresult_result->user['middlename'] }}</td>
                              <td>{{ $view_myresult_result->user['surname'] }}</td>
                              <td>{{ $view_myresult_result->subjectname }}</td>
                              <td>{{ $view_myresult_result->test_1 }}</td>
                              <td>{{ $view_myresult_result->test_2 }}</td>
                              <td>{{ $view_myresult_result->test_3 }}</td>
                              <td>{{ $view_myresult_result->exams }}</td>
                              <td>{{ $view_myresult_result->test_1  + $view_myresult_result->test_2  + $view_myresult_result->test_3  + $view_myresult_result->exams }}</td>
                              <td>@if ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 69)
                                <p>A</p>
                               
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 59)
                                <p>B</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 49)
                                <p>C</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 44)
                                <p>D</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 40)
                                <p>E</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 39)
                                <p>F</p>
                                @else
                                <p>F</p>
                              @endif</td>
        
                              <td>@if ($view_myresult_result->test + $view_myresult_result->exams > 69)
                                <p>An Excellent Performance </p>
                               
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 59)
                                <p>A good Performance</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 49)
                                <p>A fair performance</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 44)
                                <p>A Poor performance.</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 40)
                                <p>A Poor performance.</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 39)
                                <p>A Poor performance.</p>
                                @else
                                <p>A Poor performance.</p>
                              @endif</td>
                            </tr>
                          @endforeach
                      

                      </tbody>
                    </table>
                
                  {{-- @else
                      
                @endif --}}
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          
        
          {{-- @endif --}}
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  {{-- <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> Submit
                    Submit 
                  </button>
                 --}}
                  {{-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button> --}}

                </form>
                  {{-- <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> --}}
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>



















    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <!-- accepted payments column -->
          <div class="col-6">
            <div class="table-responsive">
              {{-- <p class="lead">Behaviour</p> --}}

              {{-- <form action="{{ url('web/createpsychomotor/'.$view_student->ref_no) }}" method="post">
                @csrf --}}
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:50%">BEHAVIOUR:</th>
                      <th style="width:50%">A</th>
                      <th style="width:50%">B</th>
                      <th style="width:50%">C</th>
                      <th style="width:50%">D</th>
                      <th style="width:50%">E</th>
                    </tr>
                    {{-- <td><input type="hidden" name="user_id" value="{{ $view_student->id }}" id=""></td> --}}

                    <tr>
                      <th>Punctuality</th>
                      
                       @if ($view_myresult_result->punt1 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="punt1" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->punt2 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->punt3 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="punt3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->punt4 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="punt3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->punt5 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="punt5" value="Yes" id=""></td>
                      @endif
                    
                    </tr>

                    <tr>
                      <th>Mental Alertness</th>

                      @if ($view_myresult_result->mentalalert1 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="mentalalert1" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->mentalalert2 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="mentalalert2" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->mentalalert3 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="mentalalert3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->mentalalert4 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="mentalalert3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->mentalalert5 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="mentalalert5" value="Yes" id=""></td>
                      @endif
                    
                    
                    </tr>
                    <tr>
                      <th>Respect</th>
                      
                      @if ($view_myresult_result->respect1 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="respect1" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->respect2 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="respect2" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->respect3 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="respect3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->respect4 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="respect3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->respect5 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="respect5" value="Yes" id=""></td>
                      @endif

                    </tr>
                    <tr>
                      <th>Neatness</th>
                      
                      @if ($view_myresult_result->neat1 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="neat1" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->neat2 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="neat2" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->neat3 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="neat3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->neat4 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="neat3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->neat5 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="neat5" value="Yes" id=""></td>
                      @endif


                     
                    </tr>
                    <tr>
                      <th>Politeness</th>


                      @if ($view_myresult_result->polite1 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="polite1" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->polite2 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="polite2" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->polite3 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="polite3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->polite4 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="polite3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->polite5 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="polite5" value="Yes" id=""></td>
                      @endif
              
                     
                    </tr>

                    <tr>
                      <th>Honesty</th>

                      @if ($view_myresult_result->honesty1 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="honesty1" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->honesty2 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="honesty2" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->honesty3 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="honesty3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->honesty4 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="honesty3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->honesty5 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="honesty5" value="Yes" id=""></td>
                      @endif
                      
                    
                    </tr>
                    <tr>
                      <th>Relationship with peers</th>

                      
                      @if ($view_myresult_result->relationship1 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->relationship2 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="relationship2" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->relationship3 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="relationship3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->relationship4 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="relationship3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->relationship5 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="relationship5" value="Yes" id=""></td>
                      @endif
              
                      
                    </tr>
                    <tr>
                      <th>Willingness to learn</th>
                      @if ($view_myresult_result->williness1 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="relationship1" value="Yes" id=""></td>
                      @endif
                      

                      @if ($view_myresult_result->williness2 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="williness2" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->williness3 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="williness3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->williness4 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="williness4" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->williness5 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="williness5" value="Yes" id=""></td>
                      @endif
                    </tr>
                    <tr>
                      <th>Team Spirit</th>
                      @if ($view_myresult_result->teamspirit1 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="teamspirit1" value="Yes" id=""></td>
                      @endif
                      

                      @if ($view_myresult_result->teamspirit2 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="teamspirit2" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->teamspirit3 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="teamspirit3" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->teamspirit4 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="teamspirit4" value="Yes" id=""></td>
                      @endif

                      @if ($view_myresult_result->teamspirit5 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="teamspirit5" value="Yes" id=""></td>
                      @endif
                    </tr>

                  </table>
                  <div class="form-group">
                      <textarea class="form-control" name="teacher_comment" id="" cols="20" rows="5" placeholder="Teacher's Comment">{{ $view_myresult_result->teacher_comment }}</textarea>
                  </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-6">
            {{-- <p class="lead">PSYCHOMOTOR SKILLS</p> --}}

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
                  @if ($view_myresult_result->verbal1 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="verbal1" value="Yes" id=""></td>
                  @endif
                  @if ($view_myresult_result->verbal2 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="verbal2" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->verbal3 == 'Yes')
                      <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                        @else
                      <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->verbal4 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
              @endif
              @if ($view_myresult_result->verbal5 == 'Yes')
              <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                @else
              <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
            @endif
                 
                </tr>
                <tr>
                  <th>Games and Sports</th>
                  @if ($view_myresult_result->sports1 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
                  @endif
                  @if ($view_myresult_result->sports2 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->sports3 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
                  @endif
                  @if ($view_myresult_result->sports4 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->sports5 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="verbal3" value="Yes" id=""></td>
                  @endif


                </tr>

                <tr>
                  <th>Arts and Craft</th>

                  @if ($view_myresult_result->arts1 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                  @endif
                  @if ($view_myresult_result->arts2 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->arts3 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->arts4 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->arts5 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                  @endif
                </tr>
                <tr>
                  <th>Creativity</th>
                  @if ($view_myresult_result->creativity1 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                  @endif
                  @if ($view_myresult_result->creativity2 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                  @endif
                  @if ($view_myresult_result->creativity3 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                  @endif
                  @if ($view_myresult_result->creativity4 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->creativity5 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="arts1" value="Yes" id=""></td>
                  @endif
                </tr>

                <tr>
                  <th>Music Skills</th>
                  @if ($view_myresult_result->music1 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="music1" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->music2 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="music2" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->music3 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="music3" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->music4 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="music4" value="Yes" id=""></td>
                  @endif
                  @if ($view_myresult_result->music5 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="music5" value="Yes" id=""></td>
                  @endif
                 
                </tr>

                <tr>
                  <th>Dance Skills</th>
                  @if ($view_myresult_result->dance1 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="dance1" value="Yes" id=""></td>
                  @endif
                  @if ($view_myresult_result->dance2 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="dance2" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->dance3 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="dance3" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->dance4 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="dance4" value="Yes" id=""></td>
                  @endif

                  @if ($view_myresult_result->dance5 == 'Yes')
                  <td><h5><i style="color: green" class="icon fas fa-check"></i> </h5> </td>
                    @else
                  <td><input type="checkbox" name="dance5" value="Yes" id=""></td>
                  @endif
                </tr>
              
              </table>


           
            </div>



            <div class="table-responsive">
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

      
          </div>
          <!-- /.col -->         
     
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> Submit
                     
                  </button>

                </form>
                  @if (Auth::guard('web')->user()->promotion == null )
                    
                  @else
                  <a href="{{ url('web/addcomment/'.$view_myresult_result->id) }}" class="btn btn-primary">Add Comment</a>
                    
                  @endif

                  @if ($view_myresult_result->user['centername'] == 'Uyo')
                  <img style="width: 250px; height: 50px;" src="{{ asset('assets/dist/img/signature.png') }}" alt=""> <br>
                  @else
                  <img style="width: 250px; height: 50px;" src="{{ asset('assets/dist/img/abuja.jpg') }}" alt=""> <br>
                    
                  @endif
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
 @include('dashboard.footer')