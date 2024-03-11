
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Brixtonn Schools</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

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
          <img style="width: 300px; height: 50px;" src="{{ asset('images/sch14.jpg') }}" alt=""> <br>
          <small class="float-right">{{ $print_admissionform->created_at->format('D d, M Y, H:i')}}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
       
        <address>
          <strong>BRIXTONN SCHOOLS</strong><br>
          @if ($print_admissionform->centername = 'Uyo')
          30 Ewet Housing, Uyo <br>
          Akwa Ibom State, Nigeria
          @else
          30 Asokoro, Abuja <br>
          Nigeria 
          @endif
          <br>
          {{-- San Francisco, CA 94107<br>
          Phone: (804) 123-5432<br>
          Email: info@almasaeedstudio.com --}}
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          Name: <strong>{{ $print_admissionform->surname }}, {{ $print_admissionform->fname }} {{ $print_admissionform->middlename }}</strong><br>
          Gender: {{ $print_admissionform->gender }}<br>
          Dob: {{ $print_admissionform->dob }}<br>
          Phone: {{ $print_admissionform->phone }}<br>
          Email: {{ $print_admissionform->email }}<br>
          Form No: {{ $print_admissionform->ref_no }}<br>
          Student ID: {{ $print_admissionform->ref_no }}<br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <img style="width: 70%; height: 200px;" src="{{ URL::asset("/public/../$print_admissionform->images")}}" alt="">
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-6">
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Surname:</th>
              <td>{{ $print_admissionform->surname }}</td>
            </tr>
            <tr>
                <th style="width:50%">First Name:</th>
              <td>{{ $print_admissionform->fname }}</td>
            </tr>
            <tr>
              <th>Midlename:</th>
              <td>{{ $print_admissionform->middlename }}</td>
            </tr>
            <tr>
              <th>Phone:</th>
              <td>{{ $print_admissionform->phone }}</td>
            </tr>

            <tr>
                <th>Date of Birth:</th>
                <td>{{ $print_admissionform->dob }}</td>
              </tr>

              <tr>
                <th>Entry Level:</th>
                <td>{{ $print_admissionform->entrylevel }}</td>
              </tr>
              <tr>
                <th>Place of Birth:</th>
                <td>{{ $print_admissionform->placeofbirth }}</td>
              </tr>

              <tr>
                <th>Religion:</th>
                <td>{{ $print_admissionform->religion }}</td>
              </tr>

              <tr>
                <th>Section:</th>
                <td>{{ $print_admissionform->section }}</td>
              </tr>
              <tr>
                <th>Month of Entry:</th>
                <td>{{ $print_admissionform->monthofentry }}</td>
              </tr>
              <tr>
                <th>Mother Name:</th>
                <td>{{ $print_admissionform->mothertitle }}, {{ $print_admissionform->mothername }} {{ $print_admissionform->mothermiddlename }} {{ $print_admissionform->mothersurname }}</td>
              </tr>
              <tr>
                <th>Mother email:</th>
                <td>{{ $print_admissionform->motheremail }}</td>
              </tr>
              <tr>
                <th>Mother Phone:</th>
                <td>{{ $print_admissionform->motherphone }}</td>
              </tr>

              <tr>
                <th>Mother Nationality:</th>
                <td>{{ $print_admissionform->mothernationality }}</td>
              </tr>
              <tr>
                <th>Mother Employer:</th>
                <td>{{ $print_admissionform->motheremployer }}</td>
              </tr>

              <tr>
                <th>Mother Address:</th>
                <td>{{ $print_admissionform->motheraddress }}</td>
              </tr>
          </table>
        </div>
        
      </div>
      <!-- /.col -->

      <div class="col-6">
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Email:</th>
              <td>{{ $print_admissionform->email }}</td>
            </tr>
            <tr>
              <th>Gender</th>
              <td>{{ $print_admissionform->gender }}</td>
            </tr>
            <tr>
              <th>Centername:</th>
              <td>{{ $print_admissionform->centername }}</td>
            </tr>
            <tr>
              <th>Class:</th>
              <td>{{ $print_admissionform->classname }}</td>
            </tr>

            <tr>
                <th>Last School Attended:</th>
                <td>{{ $print_admissionform->lastschool }}</td>
            </tr>

            <tr>
                <th>One contact near the School:</th>
                <td>{{ $print_admissionform->landmark }}</td>
            </tr>

            <tr>
                <th>Relationship:</th>
                <td>{{ $print_admissionform->relationship }}</td>
            </tr>

            <tr>
                <th>School Address:</th>
                <td>{{ $print_admissionform->schooladdress }}</td>
            </tr>

            <tr>
                <th>Father Name:</th>
                <td>{{ $print_admissionform->title }}{{ $print_admissionform->fathername }} {{ $print_admissionform->fathermiddlename }} {{ $print_admissionform->fathersurname }}</td>
              </tr>

              <tr>
                <th>Nationality:</th>
                <td>{{ $print_admissionform->nationality }}</td>
              </tr>

              <tr>
                <th>State:</th>
                <td>{{ $print_admissionform->state }}</td>
              </tr>


              <tr>
                <th>Father email:</th>
                <td>{{ $print_admissionform->fatheremail }}</td>
              </tr>

              <tr>
                <th>Father Phone:</th>
                <td>{{ $print_admissionform->fatherphone }}</td>
              </tr>

              <tr>
                <th>Father email:</th>
                <td>{{ $print_admissionform->fatheremail }}</td>
              </tr>

              <tr>
                <th>Father Address:</th>
                <td>{{ $print_admissionform->fatheraddress }}</td>
              </tr>
              <tr>
                <th>Father Employer:</th>
                <td>{{ $print_admissionform->fatheremployer }}</td>
              </tr>
              
          </table>
        </div>
        <p>Note that this form does not require singnature</p>
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
