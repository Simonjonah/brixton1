
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Invoice Print</title>
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
    <!-- title row -->
    <div class="row">
      <div class="col-12">
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

      <div class="col-sm-4 invoice-col">
        <address>
          Centre for ICT Excellence<br>
          Corporate Menber, Computer Professionals<br>
          (Registration Council of Nigeria)<br>
          Enterprise Research & Development <br>
          Inspiring Technology University
        </address>
      </div>
      <!-- /.col -->
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
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <address>
            {{-- <strong>John Doe</strong><br> --}}
            {{ Auth::guard('student')->user()->regnumber }}<br>
            
            {{ Auth::guard('student')->user()->surname }}, {{ Auth::guard('student')->user()->fname }} {{ Auth::guard('student')->user()->middlename }} <br>
    
            Sir/Madam,
          </address>

      </div>
      <!-- /.col -->

    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
    <p style="float: right">{{ Auth::guard('student')->user()->created_at->format('D d, M Y') }}</p>

      <div class="col-12 table-responsive">
       <h2 style="text-align: center">REQUEST FOR INDUSTRIAL ATTACHMENT</h2>
       <p style="text-align: justify">We write to confirm that <strong>{{ Auth::guard('student')->user()->surname }}, {{ Auth::guard('student')->user()->fname }} {{ Auth::guard('student')->user()->middlename }}</strong>
        with Registration Number <b>{{ Auth::guard('student')->user()->regnumber }}</b> is a student of IMFI ICT Academy, The First Innovation Polytechnic. He/She was admitted to read <b>{{ Auth::guard('student')->user()->course['category'] }}</b> in <strong>{{ Auth::guard('student')->user()->programname }}</strong> in  {{ Auth::guard('student')->user()->updated_at->format('M, Y') }} and has completed his/her <strong>{{ Auth::guard('student')->user()->course_period }}</strong>. 
        He/She applying to your Organisation to carry out a <b>THREE - MONTH INDUSTRIAL ATTACHMENT to apply the knowlede He/She acquired during the course of his/her training.</b>
    </p>
    <p>
      We shall be grateful if you can offer him/her such opportunity.
    </p>
    <p>If you accept this offer, you should within two weeks of the date of this offer:

      Thank you for the anticipated Cooperation.
    </p>
  

    <p>Yours faithfully, <br>
      <b><em>For:</em>IMFI Academy</b><br>
      <b>Mr Ita Akpan</b><br>
      Ag. Registrar
    </p>
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
