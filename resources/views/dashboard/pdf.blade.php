<!DOCTYPE html>
<html>
<head>
    <title>Brixtonn Schools Terminal Result</title>
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
    
   



<table class="table">

    <tr>
        <th style="text-align: center; width: 120px; height: 100px; padding: 0px">
            <img style="width: 100%; height: 10%;" src="{{ public_path('images/sch14.jpg')}}">
        </th>

        <th style="text-align: center; width: 450px;"><h1>BRIXTONN HIGH SCHOOL</h1>
            <p style="font-weight: normal; margin-bottom: -8px;">@if (Auth::guard('web')->user()->centername == 'Uyo')
                13 F-Line Ewet Housing Estate, Uyo 
                Akwa Ibom State, Nigeria <br>
                Website: brixtonnschools.com.ng
                @else
                No. 4 Julius Nyerere Crescent, <br>  Abuja 
                Nigeria 
                @endif
                </p>
            {{-- <p  style="font-weight: normal; font-style:italic">Motor: Fostering Creativity and Development</p>  --}}
        </th>
            
        <th style="text-align: center">
            <img style="width: 100%; height: 10%;" src="{{ public_path('public/../'.$getyour_result->images) }}">
        </th>
    </tr>
   

        <tr>
            <th colspan="2" style="text-align: center; text-transform: uppercase;">{{ $getyour_result->entrylevel }} REPORT FOR {{ $getyour_result->academic_session }} <br>
                {{ Auth::guard('web')->user()->surname }}, {{ Auth::guard('web')->user()->fname }} {{ Auth::guard('web')->user()->middlename }}
            </th>
            <th>-</th>
        </tr>
</table>

    
    

    <table id="myTable">
        <tr>
          <th>SUBJECTS </th>
          <th>CONTINOUS ASSESSMENT 1 (20)</th>
          
          <th>EXAMS</th>
          <th>TOTAL</th>
          <th>-</th>
          <th>GRADE</th>
          <th>-</th>
          <th>REMARKS</th>
          
        </tr>
       
   
        @foreach ($getyour_results as $getyour_result)
            @if ($getyour_result->status == 'approved' && $getyour_result->type == null)
                @php
                $total_score +=$getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams;
            @endphp
        <tr>
            <td>{{ $getyour_result->subjectname }}</td>
            <td>{{ $getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 }}</td>


            <td>{{ $getyour_result->exams }}</td>
            <td>{{ $getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams}}</td>
            <td>@if ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 79)
                <td>A</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 69)
                <td>B</td>

                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 59)
                <td>C</td>

                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 49)
                <td>D</td>

                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 49)
                <td>E</td>

                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 39)
                <td>F</td>

                @else
                <td>F</td>

            @endif</td>

            <td>@if ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 79)
               
                <td>An Excellent Performance. Keep it up
                    {{ $getyour_result->fname }}!
                    </td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 69)
                <td>A wonderful Performance</td>

                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 59)
                <td>You need to study harder.</td>

                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 49)
                <td>A Poor performance.
                </td>

                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 49)
                <td>Unsatisfactory performance.</td>

                @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->test_3 + $getyour_result->exams > 39)
                <td>Unsatisfactory performance.</td>

                @else
                <td>Unsatisfactory performance.</td>

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
            width: 230px;
            display: inline-block;
        }

      </style>
      
      <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col">
                <div class="psy">
                    <table class="table">
                        <tr>
                            <th>AFFECTIVE DOMAIN</th>
                            <th colspan="5">GRADE</th>
                        </tr>
                         
                        <tr>
                            <td>-</td>
                            <td>A</td>
                            <td>B</td>
                            <td>C</td>
                            <td>D</td>
                            <td>E</td>
                        </tr>
                          <tr>
                            <td>Mental Alertness</td>
                                @if ($view_results->mentalalert1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->mentalalert2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->mentalalert3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->mentalalert4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                                @if ($view_results->mentalalert5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                                
                          </tr>
        
                          <td>Punctuality</td>
                                @if ($view_results->punt1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->punt2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->punt3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->punt4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->punt5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
                          <tr>
                              <td>Respect</td>
                              @if ($view_results->respect1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->respect2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->respect3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->respect4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->respect5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          <tr>
                              <td>Neatness</td>
                              @if ($view_results->neat1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->neat2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->neat3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->neat4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->neat5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
              
                          </tr>
                              <td>Politeness</td>
                              @if ($view_results->polite1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->polite2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->polite3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->polite4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->polite5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
              
                            
                          </tr>
              
                          <tr>
                              <td>Honesty</td>
                              @if ($view_results->honesty1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->honesty2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->honesty3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->honesty4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->honesty5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
                          <tr>
                              <td>Relationship with Peers</td>
                              @if ($view_results->relationship1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->relationship2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->relationship3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->relationship4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->relationship5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          <tr>
                              <td>Williness</td>
                              @if ($view_results->williness1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->williness2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->williness3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->williness4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->williness5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          <tr>
                              <td>Team Spirit</td>
                              @if ($view_results->teamspirit1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->teamspirit2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->teamspirit3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->teamspirit4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->teamspirit5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                         
                        
                       
                      </table>
                </div>

                <div class="psy">
                    <table class="table"  style="margin-top: 50px;">
                        <tr>
                            <th>PSYCOMOTIVE DOMAIN</th>
                            <th colspan="5">GRADE</th>
                          </tr>
                         
                          <tr>
                            <td>-</td>
                            <td>A</td>
                            <td>B</td>
                            <td>C</td>
                            <td>D</td>
                            <td>E</td>
                          </tr>
                          <tr>
                            <td>Verbal Skill</td>
                                @if ($view_results->verbal1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->verbal2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->verbal3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->verbal4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->verbal5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
        
                          <td>Games & Sports</td>
                                @if ($view_results->sports1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sports2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sports3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sports4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->sports5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                               
                          </tr>
                          <tr>
                              <td>Arts & Craft</td>
                              @if ($view_results->arts1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->arts2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->arts3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->arts4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                 @if ($view_results->arts5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
              
                              
                          </tr>
                        <tr>
                          <td>Creativity</td>
                                @if ($view_results->creativity1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->creativity2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->creativity3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->creativity4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td> </td>

                                @endif
                                @if ($view_results->creativity5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td> </td>

                                @endif
                          </tr>
                          <tr>
                              <td>Practical Works</td>
                              @if ($view_results->pract1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->pract2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->pract3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->pract4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td> </td>

                                @endif

                                @if ($view_results->pract5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td> </td>

                                @endif
              
                              
                          </tr>
              
                          <tr>
                              <td>Craftmanship</td>
                              @if ($view_results->craft1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->craft2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->craft3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->craft4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->craft5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
              
              
                          </tr>
                              <td>Music</td>
                              @if ($view_results->music1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->music2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->music3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->music4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->music5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
              
                            
                          </tr>
              
                          <tr>
                              <td>Computer</td>
                              @if ($view_results->comp1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->comp2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->comp3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->comp4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->comp5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
                          <tr>
                              <td>Sports</td>
                              @if ($view_results->sport1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sport2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sport3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sport4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->sport5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          <tr>
                              <td>Drawing/Painting</td>
                              @if ($view_results->paint1 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->paint2 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->paint3 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->paint4 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->paint5 == 'Yes')
                                <td>Yes </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          
                       
                      </table>
                </div>


                <div class="psy">
                    <table class="table">
                        <tr>
                
                          <th colspan="5">KEY:</th>
                        </tr>
                        <tr>

                          <td>A</td>
                          <td>B</td>
                          <td>C</td>
                          <td>D</td>
                          <td>E</td>
            
                        </tr> 

                        <tr>
                            <td> Exellence</td>
                            <td> Very Good</td>
                            <td> Good</td>
                            <td> Need Improvement</td>
                            <td> Unsatisfactory</td>
                        </tr>
                       
                      </table>
                </div>
            </div>
        </div>
      </div>
      

      </table>

     

    


      <table>
        <tr>
            <td>REG CODE:</td>
            <td>{{ $getyour_result->regnumber }}</td>
            <td>SEX:</td>
            <td>{{ $getyour_result->user['gender'] }}</td>
            {{-- <td>TOTAL SCORE OBTAINABLE:</td> --}}
            {{-- <td>{{ $total_subject * 100 }}</td> --}}
            {{-- <td>NO. OF DISTINGTIONS (A-B):</td>
            <td>7A's, 3B's</td> --}}
        </tr>

        <tr>
            <td>CLASS:</td>
            <td>{{ $getyour_result->classname }}</td>
            <td>TERM:</td>
            <td>{{ $getyour_result->entrylevel }} </td>
            {{-- <td>SCORE OBTAINED:</td>
            <td>{{ $total_score }}</td> --}}
            {{-- <td colspan="4"></td> --}}

            <td>NEXT TERM BEGIN:</td>
            <td>23{{ $getyour_result->next_term }}</td>
        </tr>
        <tr>
            <td>AGE:</td>
            <td>{{ $getyour_result->user['dob'] }}</td>
            {{-- <td colspan="2"></td> --}}
           
            {{-- <td>PERCENTAGE:</td> --}}
            {{-- <td>{{ $total_score/100 }}</td> --}}
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
                <td>Head Teacher's Comment</td>
                <td>{{ $getyour_result->headteach_comment}}								
                </td>
            <td>Signature: @if ($getyour_result->centername == 'Uyo')
                <img style="width: 100%; height: 2%;" src="{{ public_path('assets/dist/img/signature.png')}}">
            @else
            <img style="width: 100%; height: 2%;" src="{{ public_path('assets/dist/img/abuja.jpg')}}">
                
            @endif</td>
            </tr>
    
    
        </table> 

{{-- 
        @else

        @endif
    @endforeach
   --}}

         
  
</body>
</html>
