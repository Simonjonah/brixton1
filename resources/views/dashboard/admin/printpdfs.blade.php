
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Invoice Print</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{  asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{  asset('assets/dist/css/adminlte.min.css') }}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> BRIXTONN SCHOOLS
          <small class="float-right">Date: </small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>BRIXTONN SCHOOLS.</strong><br>
          Unit 13 F-Line Ewet Housing Estate, <br> Uyo
        Akwa Ibom, Nigeria<br>
          Phone: (+234) +234 912 439 8085<br>
          Email: info@brixtonnschools.com.ng
        
        </address>
      </div>
   
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Amount</th>
            <th>Class</th>
            <th>Center</th>
            <th>Term</th>
          </tr>
          </thead>
          <tbody>
          
            @foreach ($print_payments as $print_payment)
                <tr>
                <td>₦ {{ $print_payment->amount }}</td> 

                <td>{{ $print_payment->classname}}</td>
                <td>{{ $print_payment->centername }}</td>
                <td>{{ $print_payment->entrylevel }}</td>
            </tr>
              
            @endforeach
            
          
          
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
       
        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
          This online Receipt does not reguire signature
        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        {{-- <p class="lead">Amount Due 2/22/2014</p> --}}

        <div class="table-responsive">
          {{-- <table class="table">
            <tr>
              <th style="width:50%">Course Period:</th>
              <td>	{{ $print_payments->course_period}}</td>
            </tr>
            <tr>
              <th>Program</th>
              <td>{{ $print_payments->course_programs}}</td>
            </tr>
            
    
          </table> --}}
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
