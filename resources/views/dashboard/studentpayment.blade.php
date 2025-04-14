@include('dashboard.header')

  @include('dashboard.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Upload </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload  </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">{{ Auth::guard('web')->user()->fname }} </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if ($view_paymentss->centername == 'Uyo')

                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3>Pioneer Term</h3>
                    <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                        {{ csrf_field() }}

                        @foreach ($view_payments as $view_payment)
                          <div class="form-group">
                            <label for="">Select Term</label>
                            <select name="" class="form-control" id="">
                              @if ($view_payment->entrylevel == 'Pioneer Term')
                              <option value="Pioneer Term">Pioneer Term</option>
                              <option value="{{ $view_payment->amount }}"> Pioneer Term {{ $view_payment->amount }}</option>
                              @elseif($view_payment->entrylevel == 'Penultimate Term')
                              <option value=""></option>
                              <option value="{{ $view_payment->amount }}">{{ $view_payment->amount }}</option>
                              @elseif($view_payment->entrylevel == 'Premium Term')
                              <option value=""></option>
                              <option value="{{ $view_payment->amount }}">{{ $view_payment->amount }}</option>
                              @endif
                            </select>
                          </div>

                          <div class="form-group">
                            <input type="text" value="{{ Auth::guard('web')->user()->email  }}" name="email" class="form-control">
                            <input type="text" value="{{ Auth::guard('web')->user()->phone  }}" name="phone" class="form-control">
                            <input type="text" value="{{ Auth::guard('web')->user()->id }}" name="user_id" class="form-control">
                            <input type="text" value="{{  $view_payment->entrylevel  }}" name="entrylevel" class="form-control">
                            <input type="text" value="{{  $view_payment->classname  }}" name="classname" class="form-control">
                            <input type="text" value="{{  $view_payment->centername }}" name="centername" class="form-control">
                            
                            <input type="text" value="{{  $selectstudent->fname }}" name="fname" class="form-control">
                            <input type="text" value="{{  $selectstudent->middlename }}" name="middlename" class="form-control">
                            <input type="text" value="{{  $selectstudent->surname }}" name="surname" class="form-control">
                            
                            <input type="text" value="{{  $view_payment->centername }}" name="centername" class="form-control">
                            <input type="text" value="{{  $view_payment->centername }}" name="centername" class="form-control">
                          </div>


                        
                         
                        @endforeach

                        <input type="submit" value="Buy" />
                    </form>
                  </div>

                   
                @endif
               
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
    @include('dashboard.footer')