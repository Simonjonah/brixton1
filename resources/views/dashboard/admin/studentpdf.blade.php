
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
          <small class="float-right">{{ $print_students->created_at->format('D d, M Y, H:i')}}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
       
        <address>
          <strong>BRIXTONN SCHOOLS</strong><br>
          @if ($print_students->centername = 'Uyo')
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
          Name: <strong>{{ $print_students->surname }}, {{ $print_students->fname }} {{ $print_students->middlename }}</strong><br>
          Gender: {{ $print_students->gender }}<br>
          Dob: {{ $print_students->dob }}<br>
          Phone: {{ $print_students->phone }}<br>
          Email: {{ $print_students->email }}<br>
          Form No: {{ $print_students->ref_no }}<br>
          Student ID: {{ $print_students->ref_no }}<br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <img style="width: 70%; height: 200px;" src="{{ URL::asset("/public/../$print_students->images")}}" alt="">
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
              <td>{{ $print_students->surname }}</td>
            </tr>
            <tr>
                <th style="width:50%">First Name:</th>
              <td>{{ $print_students->fname }}</td>
            </tr>
            <tr>
              <th>Midlename:</th>
              <td>{{ $print_students->middlename }}</td>
            </tr>
            <tr>
              <th>Phone:</th>
              <td>{{ $print_students->phone }}</td>
            </tr>

            <tr>
                <th>Date of Birth:</th>
                <td>{{ $print_students->dob }}</td>
              </tr>

              <tr>
                <th>Entry Level:</th>
                <td>{{ $print_students->entrylevel }}</td>
              </tr>
              <tr>
                <th>Place of Birth:</th>
                <td>{{ $print_students->placeofbirth }}</td>
              </tr>

              <tr>
                <th>Religion:</th>
                <td>{{ $print_students->religion }}</td>
              </tr>

              <tr>
                <th>Section:</th>
                <td>{{ $print_students->section }}</td>
              </tr>
              <tr>
                <th>Month of Entry:</th>
                <td>{{ $print_students->monthofentry }}</td>
              </tr>
              <tr>
                <th>Mother Name:</th>
                <td>{{ $print_students->mothertitle }}, {{ $print_students->mothername }} {{ $print_students->mothermiddlename }} {{ $print_students->mothersurname }}</td>
              </tr>
              <tr>
                <th>Mother email:</th>
                <td>{{ $print_students->motheremail }}</td>
              </tr>
              <tr>
                <th>Mother Phone:</th>
                <td>{{ $print_students->motherphone }}</td>
              </tr>

              <tr>
                <th>Mother Nationality:</th>
                <td>{{ $print_students->mothernationality }}</td>
              </tr>
              <tr>
                <th>Mother Employer:</th>
                <td>{{ $print_students->motheremployer }}</td>
              </tr>

              <tr>
                <th>Mother Address:</th>
                <td>{{ $print_students->motheraddress }}</td>
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
              <td>{{ $print_students->email }}</td>
            </tr>
            <tr>
              <th>Gender</th>
              <td>{{ $print_students->gender }}</td>
            </tr>
            <tr>
              <th>Centername:</th>
              <td>{{ $print_students->centername }}</td>
            </tr>
            <tr>
              <th>Class:</th>
              <td>{{ $print_students->classname }}</td>
            </tr>

            <tr>
                <th>Last School Attended:</th>
                <td>{{ $print_students->lastschool }}</td>
            </tr>

            <tr>
                <th>One contact near the School:</th>
                <td>{{ $print_students->landmark }}</td>
            </tr>

            <tr>
                <th>Relationship:</th>
                <td>{{ $print_students->relationship }}</td>
            </tr>

            <tr>
                <th>School Address:</th>
                <td>{{ $print_students->schooladdress }}</td>
            </tr>

            <tr>
                <th>Father Name:</th>
                <td>{{ $print_students->title }}{{ $print_students->fathername }} {{ $print_students->fathermiddlename }} {{ $print_students->fathersurname }}</td>
              </tr>

              <tr>
                <th>Nationality:</th>
                <td>{{ $print_students->nationality }}</td>
              </tr>

              <tr>
                <th>State:</th>
                <td>{{ $print_students->state }}</td>
              </tr>


              <tr>
                <th>Father email:</th>
                <td>{{ $print_students->fatheremail }}</td>
              </tr>

              <tr>
                <th>Father Phone:</th>
                <td>{{ $print_students->fatherphone }}</td>
              </tr>

              <tr>
                <th>Father email:</th>
                <td>{{ $print_students->fatheremail }}</td>
              </tr>

              <tr>
                <th>Father Address:</th>
                <td>{{ $print_students->fatheraddress }}</td>
              </tr>
              <tr>
                <th>Father Employer:</th>
                <td>{{ $print_students->fatheremployer }}</td>
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
