<!DOCTYPE html>
<html>
<head>
    <title>Brixtonn Schools Terminal Result</title>
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
</head>

@foreach ($getyour_results as $getyour_result)
    @if ($getyour_result->status == 'approved' && $getyour_result->type == null)
       
   
    @else
   
    @endif
@endforeach
<style>


    /* table{
    width:200px;
    height:auto;
    table-layout:fixed;
} */
td {
  height: 3px; /* Adjust the height as per your requirements */
}
tr {
  height: 3px; /* Adjust the height as per your requirements */
}

td {
    margin: 0px;
  padding-top: 0px;
  padding-bottom: 0px;
}
table, th {
    border: 1px solid black;
  border-collapse: collapse;
}
table, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-size: 12px;
  text-align: center;
  /* height:10px;
  padding: 0px;
  margin: 0px; */
}
table .b{
    border-style: none;
}
/* .dayopen, .von{
    font-size: 15px;
} */
table, tr, td{
    margin: 0;
    padding: 0;
}

</style>
<body>

   
        

        
             
   @php
   $total_score = 0;
@endphp
    
   

@foreach ($getyour_results as $getyour_result)
    @if ($getyour_result->status == 'approved')
        
    @else
        
    @endif
@endforeach

<table class="table">

    <tr>
        <th style="text-align: center; width: 120px; height: 100px; padding: 0px">
            <img style="width: 100px; height: 30px;" src="{{ asset('images/sch14.jpg')}}">
        </th>

        <th style="text-align: center; width: 450px;"><h1>BRIXTONN HIGH SCHOOL</h1>
            <p style="font-weight: normal; margin-bottom: -8px;">@if ($getyour_result->centername == 'Uyo')
            Unit 8 B-Line Ewet Housing Estate, Uyo Akwa Ibom, Nigeria<br>
                Website: brixtonnschools.com.ng
                @else
                No. 4 Julius Nyerere Crescent, <br>  Abuja 
                Nigeria <br>
                Website: brixtonnschools.com.ng
                @endif
                </p>
            {{-- <p  style="font-weight: normal; font-style:italic">Motor: Fostering Creativity and Development</p>  --}}
        </th>
            
        <th style="text-align: center">
            <img style="width: 100px; height: 100px;" src="{{ asset('public/../'.$getyour_result->images) }}">
        </th>
    </tr>
   

        <tr>
            <th colspan="2" style="text-align: center; text-transform: uppercase; color: red">{{ $getyour_result->entrylevel }} REPORT FOR {{ $getyour_result->academic_session }} academic session <br>
                {{ $getyour_result->surname }}, {{ $getyour_result->fname }} {{ $getyour_result->middlename }}
            </th>
            <th>-</th>
        </tr>
</table>

    
    

    <table id="myTable">
        <tr>
          <th>SUBJECTS </th>
          <th>1<sup>ST</sup> CA (20%)</th>
          <th>2<sup>ND</sup> CA (20%)</th>
          
          <th>EXAM SCORE (60%)</th>
          <th>TOTAL SCORE <br> (100%)</th>
          <th>AVERAGE</th>
          <th>-</th>

          <th>LETTER GRADE</th>
          
        </tr>
       
   
        @foreach ($getyour_results as $getyour_result)
            @if ($getyour_result->status == 'approved')
                @php
                $total_score +=$getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams;
            @endphp
        <tr>
            <td style="text-align: left;">{{ $getyour_result->subjectname }}</td>
            <td>{{ $getyour_result->test_1 }}</td>
            <td>{{  $getyour_result->test_2  }}</td>
            <td>{{ $getyour_result->exams }}</td>
            <td>{{ $getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams}}</td>
            
            <td>{{ $getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams / 2}}</td>
            
            
            <td>@if ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 94)
                <td>A <sup>+</sup> Outstanding</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 89)
                <td>A Excellent</td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 84)
                <td>A <sup>-</sup> Very Good</td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 79)
                <td>B <sup>+</sup> Good</td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 74)
                <td>B Good</td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 69)
                <td>B <sup>-</sup> Good</td>

                 @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 64)
                <td>C <sup>+</sup> Satisfactory</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 59)
                <td>C  Satisfactory</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 54)
                <td>C <sup>-</sup> Satisfactory</td>

                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 49)
                <td>D <sup>+</sup> Fair</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 44)
                <td>D  Fair</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 39)
                <td>D <sup>-</sup> Fair</td>

                @else
                <td>F</td>

            @endif</td>

            
            {{-- <td>{{ $totalaverage / 2 }}</td> --}}
            {{-- <td>{{ round($getyour_result['test_1'] + $getyour_result['test_2'] + $getyour_result['test_3'] + $getyour_result['exams'] / 2)  }}</td> --}}
            {{-- round( ($row['result1'] + $row['result2']) /2) ; --}}
        </tr>
            @else
                
            @endif
       
        @endforeach

    

          {{-- <tr>
            <td>Total</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td><b>{{ $total_score }}</b></td>
            <td><b>687.9</b></td>
            <td>-</td>
            <td>Grade</td>
            <td>Subject Average</td>

          </tr> --}}

      </table>



      <style>
        .container .row .col .psy{
          width: 170px;
            display: inline-block;
        }

      </style>
      <h2>Social Behaviours and Manipulative Skills</h2>
      <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col">
                <div class="psy">
                    <table class="table">
                        <tr>
                            <th colspan="2">PERSONAL DEVELOPMENT</th>
                            <th colspan="2"> RATINGS </th>
                        </tr>
                         
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        
                        
                          <tr>
                            <td style="width: 10px;">1</td>
                            <td style="width: 40px;">Obedience</td>
                            @if ($view_results->mentalalert1 != 'Nil')
                                <td>{{$view_results->mentalalert1}}</td>
                                @else
                                <td></td>
                            @endif

                            @if ($view_results->mentalalert2 != 'Nil')
                                <td>{{$view_results->mentalalert2}}</td>
                                @else
                                <td></td>
                            @endif
                            <!-- <td>{{$view_results->mentalalert1}} </td> -->
                            <!-- <td>{{$view_results->mentalalert2}} </td> -->
                            
                          </tr>
                        <tr>
                          <td>2</td>
                          <td>Honesty</td>
                          @if ($view_results->punt1 != 'Nil')
                                <td>{{$view_results->punt1 }}</td>
                                @else
                                <td></td>
                            @endif

                            @if ($view_results->punt2 != 'Nil')
                                <td>{{$view_results->punt2 }}</td>
                                @else
                                <td></td>
                            @endif
                            
                          </tr>

                          <tr>
                              <td>3</td>
                              <td>Self-Reliance</td>
                              @if ($view_results->self1 != 'Nil')
                                <td>{{$view_results->self1 }}</td>
                                @else
                                <td></td>
                            @endif

                            @if ($view_results->self2 != 'Nil')
                                <td>{{$view_results->self2 }}</td>
                                @else
                                <td></td>
                            @endif
                              
        
                          </tr>
              
                          <tr>
                              <td>4</td>
                              <td>Self-Control</td>
                              @if ($view_results->rely1 != 'Nil')
                                <td>{{$view_results->rely1 }}</td>
                                @else
                                <td></td>
                            @endif
                            @if ($view_results->rely2 != 'Nil')
                                <td>{{$view_results->rely2 }}</td>
                                @else
                                <td></td>
                            @endif

        
        
                          </tr>
                              <td>5</td>
                              <td>Use of Initiative</td>
                              @if ($view_results->init1 != 'Nil')
                                <td>{{$view_results->init1 }}</td>
                                @else
                                <td></td>
                            @endif

                            @if ($view_results->init2 != 'Nil')
                                <td>{{$view_results->init2 }}</td>
                                @else
                                <td></td>
                            @endif
                              
                             
                               
                          </tr>
              
                          <!-- <tr>
                              <td colspan="1">Total Average</td>
                              <td colspan="3"></td>
                          </tr> -->
                      </table>
                </div>

                <div class="psy">
                    <table class="table">
                        <tr>
                            <th colspan="2">SENSE OF RESPONSIBILITY</th>
                            <th colspan="2"> RATINGS </th>
                        </tr>
                         
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                          <tr>
                            <td style="width: 30px;">1</td>
                            <td>Punctuality</td>
                            @if ($view_results->punt1 != 'Nil')
                                <td>{{$view_results->punt1 }}</td>
                                @else
                                <td></td>
                            @endif

                            @if ($view_results->punt2 != 'Nil')
                                <td>{{$view_results->punt2 }}</td>
                                @else
                                <td></td>
                            @endif
                           
                          </tr>
        
                          <td>2</td>
                          <td>General Neatness</td>
                          @if ($view_results->neat1 != 'Nil')
                                <td>{{$view_results->neat1 }}</td>
                                @else
                                <td></td>
                            @endif

                            @if ($view_results->neat2 != 'Nil')
                                <td>{{$view_results->neat2 }}</td>
                                @else
                                <td></td>
                            @endif
                          
                            

                          </tr>
                          <tr>
                              <td>3</td>
                              <td>Perseverance</td>
                              @if ($view_results->per1 != 'Nil')
                                <td>{{$view_results->per1 }}</td>
                                @else
                                <td></td>
                            @endif

                            @if ($view_results->per2 != 'Nil')
                                <td>{{$view_results->per2 }}</td>
                                @else
                                <td></td>
                            @endif
                              
                           
        
                          </tr>
              
                          <tr>
                              <td>4</td>
                              <td>Attendance in Class</td>
                              @if ($view_results->atten1 != 'Nil')
                                <td>{{$view_results->atten1 }}</td>
                                @else
                                <td></td>
                            @endif

                            @if ($view_results->atten2 != 'Nil')
                                <td>{{$view_results->atten2 }}</td>
                                @else
                                <td></td>
                            @endif
                              
                          </tr>
                              <td>5</td>
                              <td>Attentiveness</td>
                              @if ($view_results->attentiveness1 != 'Nil')
                                <td>{{$view_results->attentiveness1 }}</td>
                                @else
                                <td></td>
                            @endif
                            @if ($view_results->attentivenes2 != 'Nil')
                                <td>{{$view_results->attentiveness2 }}</td>
                                @else
                                <td></td>
                            @endif
        
                          </tr>
              
                          <!-- <tr>
                              <td colspan="1">Total Average</td>
                              <td colspan="3"></td>
                          </tr> -->
                      </table>
                </div>

                <div class="psy">
                    <table class="table">
                        <tr>
                            <th colspan="2">PSYCOMOTOR DEVELOPMENT</th>
                            <th colspan="2"> RATINGS </th>
                        </tr>
                         
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                          <tr>
                            <td style="width: 30px;">1</td>
                            <td>Handwriting</td>
                            @if ($view_results->hand1 != 'Nil')
                                <td>{{$view_results->hand1 }}</td>
                                @else
                                <td></td>
                            @endif
                            @if ($view_results->hand2 != 'Nil')
                                <td>{{$view_results->hand2 }}</td>
                                @else
                                <td></td>
                            @endif
        
                          </tr>
        
                          <td>2</td>
                          <td>Sports and Games</td>
                          @if ($view_results->sports1 != 'Nil')
                                <td>{{$view_results->sports1 }}</td>
                                @else
                                <td></td>
                            @endif
        
                            @if ($view_results->sports2 != 'Nil')
                                <td>{{$view_results->sports2 }}</td>
                                @else
                                <td></td>
                            @endif
     
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>Verbal Communication</td>
                              @if ($view_results->verbal1 != 'Nil')
                                <td>{{$view_results->verbal1 }}</td>
                                @else
                                <td></td>
                            @endif
        
                            @if ($view_results->verbal2 != 'Nil')
                                <td>{{$view_results->verbal2 }}</td>
                                @else
                                <td></td>
                            @endif
        
                          </tr>
              
                          <tr>
                              <td>4</td>
                              <td>Mannual Skills <br> (in handling Tools and Equipments)</td>
                              @if ($view_results->tool1 != 'Nil')
                                <td>{{$view_results->tool1 }}</td>
                                @else
                                <td></td>
                            @endif
                            @if ($view_results->tool2 != 'Nil')
                                <td>{{$view_results->tool2 }}</td>
                                @else
                                <td></td>
                            @endif
        
                          </tr>
                              <td>5</td>
                              <td>Dexterity <br> (in handling Musical intruments and arts and Materials)</td>
                              @if ($view_results->dex1 != 'Nil')
                                <td>{{$view_results->dex1 }}</td>
                                @else
                                <td></td>
                            @endif
        
                            @if ($view_results->dex2 != 'Nil')
                                <td>{{$view_results->dex2 }}</td>
                                @else
                                <td></td>
                            @endif
        
                          </tr>
              
                          <!-- <tr>
                              <td colspan="1">Total Average</td>
                              <td colspan="3"></td>
                          </tr> -->
                      </table>
                </div>

                
                <div class="psy">
                    <table class="table">
                        <tr>
                            <th colspan="2">SOCIAL DEVELOPMENT</th>
                            <th colspan="2"> RATINGS </th>
                        </tr>
                         
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                          <tr>
                            <td style="width: 30px;">1</td>
                            <td>Courtesy</td>
                            @if ($view_results->court1 != 'Nil')
                                <td>{{$view_results->court1 }}</td>
                                @else
                                <td></td>
                            @endif

                            @if ($view_results->court2 != 'Nil')
                                <td>{{$view_results->court2 }}</td>
                                @else
                                <td></td>
                            @endif
        
                              
        
                          </tr>
        
                          <td>2</td>
                          <td>Consideration for Others</td>
                          @if ($view_results->consi1 != 'Nil')
                                <td>{{$view_results->consi1 }}</td>
                                @else
                                <td></td>
                            @endif

                            @if ($view_results->consi2 != 'Nil')
                                <td>{{$view_results->consi2 }}</td>
                                @else
                                <td></td>
                            @endif
     
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>Sociability</td>
                              @if ($view_results->social1 != 'Nil')
                                <td>{{$view_results->social1 }}</td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->social2 != 'Nil')
                                <td>{{$view_results->social2 }}</td>
                                @else
                                <td></td>
                                @endif
        
                          </tr>
              
                          <tr>
                              <td>4</td>
                              <td>Promtness in Completing Work</td>
                              @if ($view_results->work1 != 'Nil')
                                <td>{{$view_results->work1 }}</td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->work2 != 'Nil')
                                <td>{{$view_results->work2 }}</td>
                                @else
                                <td></td>
                                @endif
        
                          </tr>
                              <td>5</td>
                              <td>Respect for School Property</td>
                              @if ($view_results->property2 != 'Nil')
                                <td>{{$view_results->property2 }}</td>
                                @else
                                <td></td>
                                @endif
                                @if ($view_results->property1 != 'Nil')
                                <td>{{$view_results->property1 }}</td>
                                @else
                                <td></td>
                                @endif
        
                          </tr>
              
                          <!-- <tr>
                              <td colspan="1">Total Average</td>
                              <td colspan="3"></td>
                          </tr> -->
                      </table>
                </div>



            </div>
        </div>
      </div>
      

      </table>

     

    
        <table>
            <tr>
                <th colspan="6">GRADING SCALE</th>
            </tr>
            <tr>
            
            <td style="width: 171px;">95 - 100% -A<sup>+</sup>Outstanding <br>90 - 94.9% -A Excellent <br>85 - 89.9% -A<sup>-</sup>Very Good </td>
            <td style="width: 171px;">80 - 84.9% -B<sup>+</sup>Good <br>75 - 79.9% -B Good <br>70 - 74.9% -B<sup>-</sup> Good </td>
            <td style="width: 171px;">65 - 69.9% -C<sup>+</sup>Satisfactory <br>60 - 64.9% -C Satisfactory <br>55 - 59.9% -C<sup>-</sup> Satisfactory </td>
            <td style="width: 171px;">50 - 54% -D<sup>+</sup>Fair <br>45 - 49.9% -D Fair <br>40 - 44% -D<sup>-</sup> Satisfactory </td>
            
            </tr>
        </table>
        <table style="margin-top: 20px; margin-bottom: 20px;">
            <tr>
                <th>Psychomotor </th>
                <th>Grade Scale</th>
            </tr>
        <tr>
            <td>5</td>
            <td>Excellent</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Very Good</td>
        </tr>

        <tr>
            <td>3</td>
            <td> Good</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Satisfactory</td>
        </tr>

        <tr>
            <td>1</td>
            <td>Fair</td>
        </tr>
        
     </table>

      <table>
        <tr>
            <td>REG CODE:</td>
            <td>{{ $getyour_result->regnumber }}</td>
            <td>SEX:</td>
            <td>{{ $getyour_result->user['gender'] }}</td>
            <td>TEACHER NAME</td> 
            <td>{{ $getyour_result->tname }} {{ $getyour_result->tsurname }}</td> 
            <!-- <td>NO. OF DISTINGTIONS (A-B):</td>
            <td>7A's, 3B's</td>  -->
        </tr>

        <tr>
            <td>CLASS:</td>
            <td>{{ $getyour_result->classname }}</td>
            <td>TERM:</td>
            <td>{{ $getyour_result->entrylevel }} </td>
            <td>SCORE OBTAINED:</td>
            <td>{{ $total_score }}</td>
            {{-- <td colspan="4"></td> --}}

            <td>NEXT TERM BEGIN:</td>
            <td>{{ $view_results->nextterm }}</td>
        </tr>
        <tr>
            <td>AGE:</td>
            <td>{{ $getyour_result->user['dob'] }}</td>
            {{-- <td colspan="2"></td> --}}
           
            <td>AVERAGE:</td>
           <td>{{ $total_score/2 }}</td>
            {{-- <td>PUPIL'S GRADE IN CLASS:</td>
            <td>B</td> --}}
        </tr>
        
    

     </table>

      
      
    {{-- <table class="dayopen" style="margin-top: 10px; " >
        <tr>
            <td class="von">Days School Opens:</td>
            <td class="von">{{ $getyour_result->dayschopen }}</td>
            <td class="von">No of Days Present:</td>
            <td class="von">{{ $getyour_result->dayspresent }}</td>
            <td class="von">Next Term Begins:</td>
            <td class="von">{{ $getyour_result->next_term }}</td>
        </tr>

       
        </table> --}}

        <table style="margin-top: 2px;">
            <tr>
                <td>Class Teacher's Comment</td>
                <td>{{ $view_results->headteacher_comment}}</td>
            </tr>
            
        </table> 
        <h3>
        @if ($getyour_result->centername == 'Uyo')
            <img style="width: 50px; height: 50px;" src="{{ asset('assets/dist/img/signature.jpeg')}}">

            <span style="text-align: left;">Mrs Jane Ekanem</span>
        </h3>
            @else
            <img style="width: 50px; height: 50px;" src="{{ asset('assets/dist/img/abuja.jpg')}}">
                
        @endif</td>


   


   <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

<script type="text/javascript"> 
    window.addEventListener("load", window.print());
  </script>
  
</body>
</html>
