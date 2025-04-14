@include('dashboard.admin.header')

  <!-- Main Sidebar Container -->
  @include('dashboard.admin.sidebar')

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

@foreach ($getyour_results as $getyour_result)
    @if ($getyour_result->type == 'Midterm')
       
   
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
    @if ($getyour_result->type == 'Midterm')
        
    @else
        
    @endif
@endforeach

<table class="table">

    <tr>
        <th style="text-align: center; width: 120px; height: 100px; padding: 0px">
            <img style="width: 100px; height: 30px;" src="{{ asset('images/sch14.jpg')}}">
        </th>

        <th style="text-align: center; width: 700px;"><h1>BRIXTONN HIGH SCHOOL</h1>
            <p style="font-weight: normal; margin-bottom: -8px;">@if ($getyour_result->centername == 'Uyo')
            Unit 8 B-Line Ewet Housing Estate, Uyo Akwa Ibom, Nigeria<br>
                Website: brixtonnschools.com.ng
                @else
                No. 4 Julius Nyerere Crescent, <br>  Abuja 
                Nigeria <br>
                Website: brixtonnschools.com.ng
                @endif
                </p>
           <h1  style="font-weight: normal; font-style:italic; color: red">MID TERMINAL REPORT</h1>
        </th>
            
        <th style="text-align: center">
            <img style="width: 100px; height: 100px;" src="{{ asset('public/../'.$getyour_result->images) }}">
        </th>
    </tr>
   

        <tr>
            <th colspan="2" style="text-align: center; text-transform: uppercase; color: red">{{ $getyour_result->entrylevel }}  FOR {{ $getyour_result->academic_session }} academic session <br>
                {{ $getyour_result->surname }}, {{ $getyour_result->fname }} {{ $getyour_result->middlename }}
            </th>
            <th>-</th>
        </tr>
</table>

    
    

    <table id="myTable">
        <tr>
          <th>SUBJECTS </th>
          <th>1<sup>ST</sup> CA (20%)</th>
         
        
          <th>-</th>
          <th>LETTER GRADE</th>
          <th>-</th>

          <th>REMARKS</th>
          
        </tr>
       
   
        @foreach ($getyour_results as $getyour_result)
            @if ($getyour_result->status == 'approved' || $getyour_result->status == null && $getyour_result->type == 'Midterm')
                @php
                $total_score +=$getyour_result->test_1 + $getyour_result->test_2;
            @endphp
        <tr>
            <td style="text-align: left;">{{ $getyour_result->subjectname }}</td>
            <td>{{ $getyour_result->test_1 + $getyour_result->test_2}}</td>
            
            
            
            <td>@if ($getyour_result->test_1 + $getyour_result->test_2 > 18)
                <td style="width: 250px;">A </td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 17)
                <td style="width: 250px;">A Excellent</td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 16)
                <td style="width: 250px;">A </td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 15)
                <td style="width: 250px;">B </td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 15)
                <td style="width: 250px;">B </td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 15)
                <td style="width: 250px;">B </td>

                 @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 12)
                <td style="width: 250px;">C </td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 12)
                <td style="width: 250px;">C</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 12)
                <td style="width: 250px;">C </td>

                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 10)
                <td style="width: 250px;">D </td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 10)
                <td style="width: 250px;">D  </td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 9)
                <td style="width: 250px;">D </td>

                @else
                <td style="width: 250px;">F</td>

            @endif</td>



            <td>@if ($getyour_result->test_1 + $getyour_result->test_2 > 18)
                <td style="width: 250px;">A <sup>+</sup> Outstanding</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 17)
                <td style="width: 250px;">A Excellent</td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 16)
                <td style="width: 250px;">A <sup>-</sup> Very Good</td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 15)
                <td style="width: 250px;">B <sup>+</sup> Good</td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 15)
                <td style="width: 250px;">B Good</td>


                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 15)
                <td style="width: 250px;">B <sup>+</sup> Good</td>

                 @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 13)
                <td style="width: 250px;">B <sup>-</sup> Good</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 11)
                <td style="width: 250px;">C <sup>+</sup> Fair</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 9)
                <td style="width: 250px;">C <sup>-</sup> Fair</td>

                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 8)
                <td style="width: 250px;">D  Weak</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 8)
                <td style="width: 250px;">D  Weak</td>
                @elseif ($getyour_result->test_1 + $getyour_result->test_2 > 8)
                <td style="width: 250px;">D Weak</td>

                @else
                <td style="width: 250px;">F</td>

            @endif</td>

        </tr>
            @else
                
            @endif
       
        @endforeach

    


      </table>


      <table>
            <tr>
                <th colspan="6">GRADING SCALE</th>
            </tr>
            <tr>
            
            <td style="width: 200px;">95 - 100% -A<sup>+</sup>Outstanding <br>90 - 94.9% -A Excellent <br>85 - 89.9% -A<sup>-</sup>Very Good </td>
            <td style="width: 200px;">80 - 84.9% -B<sup>+</sup>Good <br>75 - 79.9% -B Good <br>70 - 74.9% -B<sup>-</sup> Good </td>
            <td style="width: 200px;">65 - 69.9% -C<sup>+</sup>Satisfactory <br>60 - 64.9% -C Satisfactory <br>55 - 59.9% -C<sup>-</sup> Satisfactory </td>
            <td style="width: 200px;">50 - 54% -D<sup>+</sup>Fair <br>45 - 49.9% -D Fair <br>40 - 44% -D<sup>-</sup> Satisfactory </td>
            
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
                <td>Class Teacher's Comment</td>
                <td>{{ $view_results->headteacher_comment}}</td>
            <td>Signature: @if ($getyour_result->centername == 'Uyo')
                <img style="width: 100px; height: 50px;" src="{{ asset('assets/dist/img/signature.jpeg')}}">
            @else
            <img style="width: 100px; height: 50px;" src="{{ asset('assets/dist/img/abuja.jpg')}}">
                
            @endif</td>
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