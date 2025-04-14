@include('dashboard.header')

  <!-- Main Sidebar Container -->
  @include('dashboard.sidebar')

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
/* .fterm{
    margin-top: -320px;
} */
</style>
<body>

   
        

        
             
   @php
   $total_score = 0;
@endphp
    
   



<table class="table table-responsive">

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

    <div class="container1">
        <div class="row1">
            <div class="col1">
                <div class="term3">
                    <table class="table table-responsive">
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



                        

                        <td>KNOWLEDGE TO UNDERSTAND THE WORLD (KUW)</td>
                        @foreach ($getyour_results as $getyour_result)
                            @if ($getyour_result->status == 'approved')
                            @if ($getyour_result->category == 'KNOWLEDGE TO UNDERSTAND THE WORLD (KUW)')    
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
                            @if ($getyour_result->category == 'MATH READINESS (NUMERACY)')    
                        <tr>
                           <td style="width: 200px; text-align: left;">{{ $getyour_result->subjectname }}</td>
                           <td style="width: 450px;">{{ $getyour_result->comment }}</td>
                        </tr>
                           @else
                           @endif 
                        
                        @else 
                        @endif
                        @endforeach



                        <td>LANGUAGE DEVELOPMENT(LITERACY)</td>
                        @foreach ($getyour_results as $getyour_result)
                            @if ($getyour_result->status == 'approved')
                            @if ($getyour_result->category == 'LANGUAGE DEVELOPMENT(LITERACY)')    
                        <tr>
                           <td style="width: 200px; text-align: left;">{{ $getyour_result->subjectname }}</td>
                           <td style="width: 450px;">{{ $getyour_result->comment }}</td>
                        </tr>
                           @else
                           @endif 
                        
                        @else 
                        @endif
                        @endforeach



                        
                        <!-- <td>EXPRESSIVE ARTS AND DESIGN</td> -->
                        @foreach ($getyour_results as $getyour_result)
                            @if ($getyour_result->status == 'approved')
                            @if ($getyour_result->category == 'None')    
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
                <td> Teacher's Comment</td>
                <td>{{ $view_results->headteacher_comment}} </td>
            <td>Signature: @if ($getyour_result->centername == 'Uyo')
                <img style="width: 100%; height: 2%;" src="{{ asset('assets/dist/img/signature.png')}}">
            @else
            <img style="width: 100%; height: 2%;" src="{{ asset('assets/dist/img/abuja.jpg')}}">
            @endif</td>
            </tr>
    
            <table style="margin-top: 2px;">
           
            <tr>
                <td>HOS Comment</td>
                <td>{{ $getyour_result->teacher_comment }}	</td>							
                
            <td>@if (Auth::guard('web')->user()->promotion == null)
                <span>teacher</span>
            @else
            <a class="btn btn-primary" href="{{ url('web/addcomment/'.$getyour_result->id) }}">Add Comment</a>
            @endif</td>
            </tr>

        </table>
        </table> 

{{-- 
        @else

        @endif
    @endforeach
   --}}
 <!-- /.content-wrapper -->
 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2023 <a href="https://brixtoonschool.com.ng">Brixtonn</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="../../assets/plugins/jquery/jquery.min.js"></script>

<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/jszip/jszip.min.js"></script>
<script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="../../assets/dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="../../assets/dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
