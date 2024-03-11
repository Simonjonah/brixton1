
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IMFI ICT admission letter</title>
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
    <h1 style="text-align: center;">IMFI ICT ACADEMY</h1>
    <h2 style="text-align: center;">The First Innovation Polytechnic</h2>
    <div class="row">
       <div class="col-lg-6">
        <h2 class="page-header">
          <img src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}">
        </h2>
      </div>

     
      
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>President:</strong><br>
          Sir Sunday U Akpan, KJW,<br>
          B.Sc (Lagos), M.Sc (Birmingham, UK), FCIA, FCPA<br>
          <strong>Vice President(Resarch & Development)</strong><br>
          Dr (Mrs) Edu Inam, M.Sc (Uniuyo); Ph.D, (L'brough, UK) Cert. Int'l Devt. (UNU, Japan)<br>
          <strong>Registrar</strong><br>
          Mr Ita Akpan<br>

        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <address>
          Centre for ICT Excellence<br>
          Corporate Menber, Computer Professionals<br>
          (Registration Council of Nigeria)<br>
          Enterprise Research & Development <br>
          Inspiring Technology University
        </address>
      </div>
      <div class="col-sm-4 invoice-col">
        <address>
          {{-- <strong>John Doe</strong><br> --}}
          54 Nsikak Eduok Avenue<br>
          P.O.Box 1723, Uyo,<br>
          Akwa Ibom State, Nigeria<br>
          <b>Email</b> imfinig@yahoo.com <br>
          <b>Website</b> imfiacademy.edu.ng <br>
          <b>GSM</b> 0802 823 7116<br>

        </address>
      </div>
      <hr>
    <!-- /.row -->

    <!-- Table row -->
    <div class="col-lg-12 invoice-col">
      <address>
        {{-- <strong>John Doe</strong><br> --}}
        {{ Auth::guard('student')->user()->regnumber }}<br>
        
        {{ Auth::guard('student')->user()->surname }}, {{ Auth::guard('student')->user()->fname }} {{ Auth::guard('student')->user()->middlename }} <br>

        Sir/Madam,

      </address>
    </div>

    <div class="col-lg-12 invoice-col">
      
    </div>

    <div class="col-lg-12 invoice-col">
      <address>
        <b>Date</b> {{ Auth::guard('student')->user()->created_at->format('D d, M Y') }}<br>
      </address>
    </div>
    <div class="row">
      <div class="col-12 table-responsive">
        <h1 class="text-center">LETTER OF PROFESSIONAL ADMIMISSION</h1>          
          <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
            I am pleased to inform you that you have been offered provisional admission to undertake a {{ Auth::guard('student')->user()->course_period }}
          </p>
      </div>
    </div>
  </section>
  <div>
    <img src="{{ asset('assets/dist/img/signature.png') }}" alt="">
  </div>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
