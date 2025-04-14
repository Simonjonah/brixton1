
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Registration </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="/"><b>Teacher's</b>Admin</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register</p>

      
      <form action="{{ route('createteacher') }}" method="post" enctype="multipart/form-data">
          @csrf

    @if (Session::get('success'))
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    @endif

    @if (Session::get('fail'))
    <div class="alert alert-danger">
      {{ Session::get('fail') }}
    </div>
  @endif
        <div class="input-group mb-3">
          <input name="fname" type="text" class="form-control" @error('fname') is-invalid @enderror"
          value="{{ old('fname') }}" placeholder="First Name">
           
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
         
        </div>

        @error('fname')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="input-group mb-3">
          <input name="middlename" type="text" class="form-control" @error('middlename') is-invalid @enderror"
          value="{{ old('middlename') }}" placeholder="Middle Name">
           
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        @error('middlename')
        <span class="text-danger">{{ $message }}</span>
        @enderror


        <div class="input-group mb-3">
          <input name="surname" type="text" class="form-control" @error('surname') is-invalid @enderror"
          value="{{ old('surname') }}" placeholder="SurName">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('surname')
        <span class="text-danger">{{ $message }}</span>
        @enderror


        <div class="input-group mb-3">
          <input name="phone" type="number" class="form-control" @error('phone') is-invalid @enderror"
          value="{{ old('phone') }}" placeholder="Phone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        @error('phone')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <label for="">Select Center Name</label>
        <div class="input-group mb-3">
          <select name="centername" id="" class="form-control">
            @foreach ($dsplay_studycenters as $dsplay_studycenter)
              <option value="{{ $dsplay_studycenter->centername }}">{{ $dsplay_studycenter->centername }}</option>
            @endforeach
            
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('centername')
        <span class="text-danger">{{ $message }}</span>
        @enderror


        <label for="">Select Class</label>
        <div class="input-group mb-3">
          <select name="classname" id="" class="form-control">
            @foreach ($dsplay_classes as $dsplay_classe)
              <option value="{{ $dsplay_classe->classname }}">{{ $dsplay_classe->classname }}</option>
            @endforeach
            
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('classname')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <label for="">Select Section</label>
        <div class="input-group mb-3">
          <select required class="form-control" type="text" name="section">
            <option value="Early Years Foundation Stage (EYFS)">Early Years (EYFS)</option>
            <option value="Primary">Primary</option>
						<option value="High School">High School</option>
                              
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('entrylevel')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <label for="">Select Gender</label>
        <div class="input-group mb-3">
          <select name="gender" id="" class="form-control">
              <option value="male">male</option>
              <option value="Female">Female</option>
              
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('gender')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <label for="">Select Term</label>
        <div class="input-group mb-3">
          <select name="entrylevel" id="" class="form-control">
              <option value="Pioneer Term">Pioneer Term</option>
              <option value="Penultimate Term">Penultimate Term</option>
              <option value="Premium Term">Premium Term</option>
            
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('entrylevel')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control"  @error('email') is-invalid @enderror"
          value="{{ old('email') }}" placeholder="email">
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror

          <div class="input-group mb-3">
            <input name="images" type="file" class="form-control" @error('images') is-invalid @enderror"
            value="{{ old('images') }}" placeholder="images">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          @error('images')
          <span class="text-danger">{{ $message }}</span>
          @enderror
    
        <div class="input-group mb-3">
          <input type="password" name="password" id="myInput" class="form-control"  @error('password') is-invalid @enderror"
          value="{{ old('password') }}" placeholder="password">
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror 
       
        
          <div class="col-8">
            <input type="checkbox" onclick="myFunction()">
              <label for="remember">
              Show Password
            </label>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      <a href="login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
</body>
</html>


<script>
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>