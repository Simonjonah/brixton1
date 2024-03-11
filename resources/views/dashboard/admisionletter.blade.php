
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
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
    <h1 style="text-align: center;">BRIXTONN SCHOOLS</h1>
    <h2 style="text-align: center;">Learning through creativity</h2>
    <p style="text-align: center;">@if (Auth::guard('web')->user()->centername == 'Uyo')
      Unit 13 F-Line, Ewet Housing Estate, Uyo Akwa Ibom State, Nigeria.
      @else
      Asokoro, Abuja
    @endif</p>
    
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">

      </div>

      <div class="col-sm-4 invoice-col text-center">
        <address>
          {{-- Centre for ICT Excellence<br>
          Corporate Menber, Computer Professionals<br>
          (Registration Council of Nigeria)<br>
          Enterprise Research & Development <br>
          Inspiring Technology University --}}
        </address>
        <img style="width: 200px; height: 100px; " src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}">

      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <address>
            {{-- <strong>John Doe</strong><br> --}}
            {{-- {{ Auth::guard('web')->user()->regnumber }}<br>
            
            {{ Auth::guard('web')->user()->surname }}, {{ Auth::guard('web')->user()->fname }} {{ Auth::guard('web')->user()->middlename }} <br> --}}
    
            Sir/Madam,
    
          </address>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
       <h2 style="text-align: center">OFFER OF PROVISIONAL ADMISSION</h2>
       <p style="text-align: justify">I am pleased to inform you that you have been offered provisional admission to undertake {{ Auth::guard('web')->user()->course_period }} 
        {{ Auth::guard('web')->user()->section }} Programme in <strong>{{ Auth::guard('web')->user()->classneme }}</strong> with immediate effect from {{ Auth::guard('web')->user()->updated_at->format('D d, M Y') }}
    </p>
    <p>
      This offer is subject to the verification of your qualifications as submitted by you. If at any time after admission (even after registration) it is discovered that you do not have the requisite qualifications on which your admission was based, you will be required to withdraw from the Academy.
    </p>
    <p>If you accept this offer, you should within two weeks of the date of this offer:

      <ol>
        <li>Report immediately to the administrator, @if (Auth::guard('web')->user()->centername == 'Uyo')
          Unit 13 F-Line, Ewet Housing Estate, Uyo Akwa Ibom State, Nigeria.
          @else
          Asokoro, Abuja
        @endif Nigeria accepting the offer.</li>
      </ol>
    </p>
    <p>Please note that registration begins with immediate effect.
      A copy of the Academy's rules/regulations for webs and the fee schedule are herewith attached for information and compliance.
    </p>

    <p>Yours faithfully, <br>
      <b><em>For:</em>Brixtonn Schools</b><br>
      <b>Mr Simon Udo</b><br>
      Ag. Admin
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
