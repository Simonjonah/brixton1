@include('dashboard.header')

  <!-- Main Sidebar Container -->
  @include('dashboard.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

@php
  
$totalresultforavsonliteracy = 0;
  $totalclassavgscorefornumercy = 0;
  $total_classaveragefornone = 0;
  $total_classaverageforcca = 0;
  $total_score1 = 0;
  
@endphp

@foreach ($getyour_results as $getyour_result)
    @if ($getyour_result->status == 'approved' ||$getyour_result->status == null)
       
   
    @else
   
    @endif
@endforeach




@foreach ($results_forcats as $results_forcat)
    @if ($results_forcat->status == 'LITERACY')
       
    @else
    @endif
@endforeach


<!-- @foreach ($results_totalforliteracyonavgs as $results_totalforliteracyonavg)
    @if ($results_totalforliteracyonavg->status == 'approved' && $results_totalforliteracyonavg->status == 'LITERACY')
       
    @else
    @endif
@endforeach -->



@foreach ($results_fornums as $results_fornum)
    @if ($results_fornum->status == 'NUMERACY')
       
    @else
    @endif
@endforeach


@foreach ($totalclassavgfornumercys as $totalclassavgfornumercy)
    @if ($totalclassavgfornumercy->status == 'NUMERACY')
       
    @else
    @endif
@endforeach




@foreach ($results_fornones as $results_fornone)
    @if ($results_fornone->status == 'None')
      
    @else
    @endif
@endforeach

@foreach ($totalresults_noneonavges as $totalresults_noneonavge)
    @if ($totalresults_noneonavge->status == 'None')

    @else
    @endif
@endforeach


@foreach ($results_forccas as $results_forcca)
    @if ($results_forcca->status == 'CCA')
       
    @else
    @endif
@endforeach


@foreach ($results_classaverageforccas as $results_classaverageforcca)
    @if ($results_classaverageforcca->status == 'CCA')
       
    @else
    @endif
@endforeach



@foreach ($firstterm_results as $firstterm_result)
  @if ($firstterm_result->status == 'approved' ||$firstterm_result->status == null)
      @php
      $total_score1 +=$firstterm_result->test_1 + $firstterm_result->test_2 + $firstterm_result->test_3 + $firstterm_result->exams;
  @endphp
  @endif
@endforeach


<style>

.result .colsfor{
  display: inline-block;

}
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
   $total_scoreforliteracy = 0;
   $total_scorefornumeracy = 0;
   $total_fornone = 0;
   $total_forcca = 0;

@endphp
    
   



<table class="table">

    <tr>
        <th style="text-align: center; width: 200px; height: 100px; padding-bottom: 10px">
            <img style="width: 100%; height: 50px;" src="{{ asset('images/sch14.jpg')}}">
        </th>

        <th style="text-align: center; width: 650px;"><h1>BRIXTONN SCHOOLS</h1>
            <p style="font-weight: normal; margin-bottom: -8px;">@if (Auth::guard('web')->user()->centername == 'Uyo')
                13 F-Line Ewet Housing Estate, Uyo 
                Akwa Ibom State, Nigeria <br>
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
            <th colspan="2" style="text-align: center; text-transform: uppercase; color: red;">MID-TERM REPORT FOR {{ $getyour_result->entrylevel }}, {{ $getyour_result->academic_session }} <br>
                {{ $getyour_result->surname }}, {{ $getyour_result->fname }} {{ $getyour_result->middlename }}
            </th>
            <th>-</th>
        </tr>
</table>

    
    <?php 
    $total_score = 0;

    ?>
    <div class="result1">
      <div class="row2">
        <div class="colsfor1">
              
    <table>
        <tr>
          <th>Subjects </th>
          <th colspan= "3">Grade </th>
         
        </tr>
       
        <td>LITERACY</td>
        <td>Exp</td>
        <td>App</td>
        <td>Pra</td>
        <td>Comment</td>
        
        @foreach ($results_forcats as $results_forcat)
            @if ($results_forcat->status == 'approved' || $results_forcat->status == null)
                @php
                $total_score +=$getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams;
                $total_scoreforliteracy +=$results_forcat->test_1 + $results_forcat->test_2 + $results_forcat->exams;
                
                $totalresultforavsonliteracy +=$results_totalforliteracyonavg->test_1 + $results_totalforliteracyonavg->test_2 + $results_totalforliteracyonavg->exams;
                
                @endphp
        
           @if ($results_forcat->category == 'LITERACY')
           <tr>
              <td style="text-align: left; width: 145px;">{{ $results_forcat->subjectname }}</td>
              <td style="width: 45px;">@if ($results_forcat->exp == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>
              <td style="width: 45px;">@if ($results_forcat->app == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>
              <td style="width: 45px;">@if ($results_forcat->pra == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>

            <td>{{ $results_forcat->comment}}</td>
             
            </tr>
          @else
          @endif 
          
    @endif
    
    @endforeach
   
     
    </table>




      
    <table>
        <td>NUMERACY</td>
        @foreach ($results_fornums as $results_fornum)
            @if ($results_fornum->status == 'approved' ||$results_fornum->status == null)
                @php
                $total_scorefornumeracy +=$results_fornum->test_1 + $results_fornum->test_2 + $results_fornum->exams;
                $totalclassavgscorefornumercy +=$totalclassavgfornumercy->test_1 + $totalclassavgfornumercy->test_2 + $totalclassavgfornumercy->exams;
                
                
                @endphp
           @if ($results_fornum->category == 'NUMERACY')
           <tr>
              <td style="text-align: left; width: 145px;">{{ $results_fornum->subjectname }}</td>
              <td style="width: 45px;">@if ($results_fornum->exp == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>
              <td style="width: 45px;">@if ($results_fornum->app == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>
              <td style="width: 45px;">@if ($results_fornum->pra == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>

            <td>{{ $results_fornum->comment}}</td>
             
            </tr>
          @else
          @endif 
          
    @endif
    
    @endforeach
   
    </table>




    <table>
        <td>NONE</td>
        @foreach ($results_fornones as $results_fornone)
            @if ($results_fornone->status == 'approved' ||$results_fornone->status == null)
                @php
                $total_fornone +=$results_fornone->test_1 + $results_fornone->test_2 + $results_fornone->exams;
                
                $total_classaveragefornone +=$totalresults_noneonavge->test_1 + $totalresults_noneonavge->test_2 + $totalresults_noneonavge->exams;
                
                @endphp
                @if ($results_fornone->category == 'None')
                <tr>
              <td style="text-align: left; width: 145px;">{{ $results_fornone->subjectname }}</td>
              <td style="width: 45px;">@if ($results_fornone->exp == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>
              <td style="width: 45px;">@if ($results_fornone->app == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>
              <td style="width: 45px;">@if ($results_fornone->pra == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>

            <td>{{ $results_fornone->comment}}</td>
             
            </tr>
          @else
          @endif 
          
    @endif
    
    @endforeach
    
    </table>


    <table>
        <td>CCA</td>
        @foreach ($results_forccas as $results_forcca)
            @if ($results_forcca->status == 'approved' ||$results_forcca->status == null)
                @php
                $total_forcca +=$results_forcca->test_1 + $results_forcca->test_2 + $results_forcca->exams;
                
                $total_classaverageforcca +=$results_classaverageforcca->test_1 + $results_classaverageforcca->test_2 + $results_classaverageforcca->exams;
                
                @endphp
                @if ($results_forcca->category == 'CCA')
                <tr>
              <td style="text-align: left; width: 145px;">{{ $results_forcca->subjectname }}</td>
              <td style="width: 45px;">@if ($results_forcca->exp == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>
              <td style="width: 45px;">@if ($results_forcca->app == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>
              <td style="width: 45px;">@if ($results_forcca->pra == 'Yes')
                <i class="fas fa-check"></i> 
              @else
                  
              @endif</td>

            <td>{{ $results_forcca->comment}}</td>
             
            </tr>
          @else
          @endif 
          
    @endif
    
    @endforeach
    
    </table>


    
        </div>
      </div>
    </div>

      
    <table style="margin-top: 10px;">
        <tr>
            <td>SCALE</td>
            <td style="text-align: left">Reading your child's report</td>
        </tr>

        <tr>
            <td>EXPERT:</td>
            <td style="text-align: left">Works independently on this learning area in class;
rarely feels the need to seek support and guidance 
and is able to offer same to others</td>
        
        </tr>
        <tr>
        <td>PRACTITIONER:</td>
            <td style="text-align: left">Is able to work independently on this area of 
learning in class, but sometimes feels the need to 
seek support to attend to the related tasks. </td>
        </tr>
        <tr>
            <td>APPRENTICE:</td>
            <td style="text-align: left">Is working to develop this area of learning in class. 
Requires some support and guidance to attend to 
the related tasks.</td>
            
        </tr>

     </table>

      <style>
        
        .container .row .col .psy{
            width: 300px;
            display: inline-block;
        }

      </style>
      
      <div class="container" style="margin-top: 0px;">
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
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->mentalalert2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->mentalalert3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->mentalalert4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                                @if ($view_results->mentalalert5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                                
                          </tr>
        
                          <td>Punctuality</td>
                                @if ($view_results->punt1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->punt2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->punt3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->punt4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->punt5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
                          <tr>
                              <td>Respect</td>
                              @if ($view_results->respect1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->respect2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->respect3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->respect4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->respect5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          <tr>
                              <td>Neatness</td>
                              @if ($view_results->neat1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->neat2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->neat3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->neat4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->neat5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
              
                          </tr>
                              <td>Politeness</td>
                              @if ($view_results->polite1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->polite2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->polite3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->polite4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->polite5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
              
                            
                          </tr>
              
                          <tr>
                              <td>Honesty</td>
                              @if ($view_results->honesty1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->honesty2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->honesty3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->honesty4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->honesty5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
                          <tr>
                              <td>Relationship with Peers</td>
                              @if ($view_results->relationship1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->relationship2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->relationship3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->relationship4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->relationship5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          <tr>
                              <td>Williness</td>
                              @if ($view_results->williness1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->williness2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->williness3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->williness4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->williness5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          <tr>
                              <td>Team Spirit</td>
                              @if ($view_results->teamspirit1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->teamspirit2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->teamspirit3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->teamspirit4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->teamspirit5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
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
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->verbal2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->verbal3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->verbal4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->verbal5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
        
                          <td>Games & Sports</td>
                                @if ($view_results->sports1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sports2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sports3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sports4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->sports5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                               
                          </tr>
                          <tr>
                              <td>Arts & Craft</td>
                              @if ($view_results->arts1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->arts2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->arts3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->arts4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                 @if ($view_results->arts5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
              
                              
                          </tr>
                        <tr>
                          <td>Creativity</td>
                                @if ($view_results->creativity1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->creativity2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->creativity3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->creativity4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td> </td>

                                @endif
                                @if ($view_results->creativity5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td> </td>

                                @endif
                          </tr>
                              
                          <tr>
                              <td>Musical Skills</td>
                              @if ($view_results->music1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->music2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->music3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->music4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->music5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          


                          

                          <tr>
                              <td>Dance Skills</td>
                              @if ($view_results->paint1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->paint2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->paint3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->paint4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->paint5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
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
           
        </tr>

        <tr>
            <td>CLASS:</td>
            <td>{{ $getyour_result->classname }}</td>
            <td>TERM:</td>
            <td>{{ $getyour_result->entrylevel }} </td>
            
        </tr>
        <tr>
            <td>AGE:</td>
            <td>{{ $getyour_result->user['dob'] }}</td>
            
        </tr>
        
    

     </table>

      
        <table style="margin-top: 2px;">
          

            <tr>
              <td> Teacher's Comment</td>
                <td>{{ $view_results->teacher_comment}}								
                </td>

                <td>Head of School Comment</td>
                <td>{{ $view_results->headteacher_comment}}								
                </td>

               
            <td>Head of School: @if ($getyour_result->centername == 'Uyo')
                <img style="width: 30px; height: 30px;" src="{{ asset('assets/dist/img/signature.jpeg')}}">
            @else
            <img style="width: 50px; height: 50px;" src="{{ asset('assets/dist/img/abuja.jpg')}}">
                
            @endif</td>
            </tr>
    
    
        </table> 



   @include('dashboard.footer')
