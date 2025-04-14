<!DOCTYPE html>
<html>
    <head>
        <title>Brixtonn Schools Terminal Result</title>
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    </head>

@foreach ($getyour_results as $getyour_result)
    @if ($getyour_result->status == 'approved')
       
   
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

.container1 .row1 .col1 .term3{
    /* width: 230px; */
    display: inline-block;
}

.term3{
    margin-right: -5px;
}
.hide{
    display: none;
}
.fterm{
    margin-top: -320px;
}
</style>
<body>

   
        

        
             
   @php
   $total_score = 0;
@endphp
    
   



<table class="table">

    <tr>
        <th style="text-align: center; width: 120px; height: 100px; padding: 0px">
            <img style="width: 100px; height: 50px;" src="{{ asset('images/sch14.jpg')}}">
        </th>

        <th style="text-align: center; width: 450px;"><h1>BRIXTONN SCHOOLS</h1>
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
            <th colspan="2" style="text-align: center; text-transform: uppercase;">{{ $getyour_result->entrylevel }} REPORT FOR {{ $getyour_result->academic_session }} <br>
                {{ $getyour_result->surname }}, {{ $getyour_result->fname }} {{ $getyour_result->middlename }}
            </th>
            <th>-</th>
        </tr>
</table>

    
    <?php 
    $total_score = 0; ?>

    <div class="container1j">
        <div class="row1h">
            <div class="col1j">
                <div class="term3h">
                    <table id="myTable">
                        <tr>
                          <th>Subjects </th>
                          <th>comments</th>
                          
                        </tr>
                        <td>COMMUNICATION AND LANGUAGE</td>
                   
                        @foreach ($getyour_results as $getyour_result)
                            @if ($getyour_result->status == 'approved')
                            @if ($getyour_result->category == 'COMMUNICATION AND LANGUAGE')    
                        <tr>
                           <td style="width: 200px; text-align: left;">{{ $getyour_result->subjectname }}</td>
                           <td style="width: 450px;">{{ $getyour_result->comment }}</td>
                        </tr>
                           @else
                           @endif 
                        
                        @else 
                        @endif
                        @endforeach



                        <td>PHYSICAL DEVELOPMENT</td>
                        @foreach ($getyour_results as $getyour_result)
                            @if ($getyour_result->status == 'approved')
                            @if ($getyour_result->category == 'PHYSICAL DEVELOPMENT')    
                        <tr>
                           <td style="width: 200px; text-align: left;">{{ $getyour_result->subjectname }}</td>
                           <td style="width: 450px;">{{ $getyour_result->comment }}</td>
                        </tr>
                           @else
                           @endif 
                        
                        @else 
                        @endif
                        @endforeach



                        <td>PERSONAL, SOCIAL AND EMOTIONAL DEVELOPMENT</td>
                        @foreach ($getyour_results as $getyour_result)
                            @if ($getyour_result->status == 'approved')
                            @if ($getyour_result->category == 'PERSONAL, SOCIAL AND EMOTIONAL DEVELOPMENT')    
                        <tr>
                           <td style="width: 200px; text-align: left;">{{ $getyour_result->subjectname }}</td>
                           <td style="width: 450px;">{{ $getyour_result->comment }}</td>
                        </tr>
                           @else
                           @endif 
                        
                        @else 
                        @endif
                        @endforeach



                        

                        <td>KNOWLEDGE TO UNDERSTAND OF THE WORLD (KUW)</td>
                        @foreach ($getyour_results as $getyour_result)
                            @if ($getyour_result->status == 'approved')
                            @if ($getyour_result->category == 'KNOWLEDGE TO UNDERSTAND OF THE WORLD (KUW)')    
                        <tr>
                           <td style="width: 200px; text-align: left;">{{ $getyour_result->subjectname }}</td>
                           <td style="width: 450px;">{{ $getyour_result->comment }}</td>
                        </tr>
                           @else
                           @endif 
                        
                        @else 
                        @endif
                        @endforeach



                        <td>MATH READINESS (NUMERACY)</td>
                        @foreach ($getyour_results as $getyour_result)
                            @if ($getyour_result->status == 'approved')
                            @if ($getyour_result->category == 'MATH READINESS (MATHEMATICS)')    
                        <tr>
                           <td style="width: 200px; text-align: left;">{{ $getyour_result->subjectname }}</td>
                           <td style="width: 450px;">{{ $getyour_result->comment }}</td>
                        </tr>
                           @else
                           @endif 
                        
                        @else 
                        @endif
                        @endforeach



                        <td>LANGUAGE DEVELOPMENT/PHONICS(LITERACY)</td>
                        @foreach ($getyour_results as $getyour_result)
                            @if ($getyour_result->status == 'approved')
                            @if ($getyour_result->category == 'LANGUAGE DEVELOPMENT/PHONICS(LITERACY)')    
                        <tr>
                           <td style="width: 200px; text-align: left;">{{ $getyour_result->subjectname }}</td>
                           <td style="width: 450px;">{{ $getyour_result->comment }}</td>
                        </tr>
                           @else
                           @endif 
                        
                        @else 
                        @endif
                        @endforeach



                        
                        @foreach ($getyour_results as $getyour_result)
                            @if ($getyour_result->status == 'approved')
                            @if ($getyour_result->category == null)    
                        <tr>
                           <td style="width: 200px; text-align: left;">{{ $getyour_result->subjectname }}</td>
                           <td style="width: 450px;">{{ $getyour_result->comment }}</td>
                        </tr>
                           @else
                           @endif 
                        
                        @else 
                        @endif
                        @endforeach

          
                      </table>
                     
                    <span style="color: red"> Times School Opened: {{ $view_results->schoolopen }}</span> <br>
                  <span style="color: red">Times School Present:{{ $view_results->timespresent }}</span> <br>
                  <span style="color: red">Times School Absent: {{ $view_results->timeabsent }}</span> <br>
                </div>

             

            </div>


            
        </div>
    </div>

    




     

    


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
             
            <td>NEXT TERM BEGIN:</td>
           <td>{{ $view_results->nextterm }}</td>
        </tr>
        <tr>
            <td>DATE OF BIRTH:</td>
            <td>{{ $getyour_result->user['dob'] }}</td>
            
        </tr>
        
    

     </table>

      
      
 
        <table style="margin-top: 2px;">
          

            <tr>
                <td>Class Teacher's Comment</td>
                <td>{{ $view_results->headteacher_comment}} </td>

           
            </tr>
                
            <td>HOS's Comment</td>
                <td>{{ $getyour_result->teacher_comment }} </td>

                <td> @if ($getyour_result->centername == 'Uyo')
                <img style="width: 50px; height: 50px;" src="{{ asset('assets/dist/img/signature.jpeg')}}">
            @else
            <img style="width: 50px; height: 50px;" src="{{ asset('assets/dist/img/abuja.jpg')}}">
                
            @endif</td>
            <tr>

            </tr>
        </table> 

{{-- 
        @else

        @endif
    @endforeach
   --}}

         
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