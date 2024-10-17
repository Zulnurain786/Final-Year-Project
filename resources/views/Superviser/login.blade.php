{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="{{URL::to('css/Login-style.css')}}" rel="stylesheet">
    <link href="{{URL::to('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>GIMS Login</title>
  </head>
  <body>
    <section class="form-02-main">
      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="row">
                  <div class="col-md-12 d-flex align-items-center justify-content-center">
                      <div class="">
                        <h1 class="ms-sm-4 ms-md-2" style="color: #2b3990;">Supervisor</h1>
                        <!-- <a href="#">Login</a> -->
                      </div>
                  </div>
                </div>
                <div class="logo">
                  <img src="{{URL::to('Images/user.png')}}">
                </div>
                <form action="{{route('Superviser.login')}}" method="POST">
                  @csrf
                  <div class="form-group">
                    <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true" style="border-radius: 20px;">
                  </div>

                  <div class="form-group">
                    <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true"  style="border-radius: 20px;">
                  </div>

                  <!-- <div class="checkbox form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="">
                      <label class="form-check-label" for="">
                        Remember me
                      </label>
                    </div>
                    <a href="#">Forgot Password</a>
                  </div> -->

                  <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                      <div class="form-groupp ms-md-4 ms-sm-0">
                        <div class="">
                          <button type="submit" class="btn btn-primary border border-rounded" style="border-color: #2b3990 !important;background-color: #2b3990;">Login</button>
                          <!-- <a href="#">Login</a> -->
                        </div>
                      </div>
                    </div>
                  </div>
              </form>

                <div class="form-group nm_lk"><p>----Or----</p></div>

                <div class="form-groupl">
                  <div class="_btn_04">
                    <a href="{{URL::to('student-login')}}">Login as Student</a>
                  </div>
                </div>
                <div class="form-groupl">
                  <div class="_btn_04">
                    <a href="{{URL::to('pmo-login')}}">Login as PMO</a>
                  </div>
                </div>

                <!-- <div class="form-group pt-0">
                  <div class="_social_04">
                    <ol>
                      <li><i class="fa fa-facebook"></i></li>
                      <li><i class="fa fa-twitter"></i></li>
                      <li><i class="fa fa-google-plus"></i></li>
                      <li><i class="fa fa-instagram"></i></li>
                      <li><i class="fa fa-linkedin"></i></li>
                    </ol>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="{{URL::to('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{URL::to('https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap')}}" rel="stylesheet">
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="{{URL::to('css/Login-style.css')}}" rel="stylesheet">
    <link href="{{URL::to('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{URL::to('fonts/icomoon/style.css')}}">
    <link rel="icon" href="../Images/nav-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{URL::to('css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::to('css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{URL::to('css/newstyle.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/alertstyle.css')}}">


    <title>GIMS</title>
  </head>
  <body>
  
    @include('alert.alert')

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url({{URL::to('../Images/cover_02.png')}});"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h3 style="color: #2a446c">Login In</h3>
              {{-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> --}}
            </div>
            <form action="{{route('Superviser.login')}}" method="POST">
              @csrf
              <div class="mb-3" style="color:#2a446c">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3" style="color:#2a446c">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                {{-- <label class="control control--checkbox mb-0"><span class="caption">Remember me</span> --}}
                  {{-- <input type="checkbox" checked="checked"/> --}}
                  {{-- <div class="control__indicator"></div> --}}
                </label>
                {{-- <span class="ml-auto"><a href="{{URL::to('PMO/forgetpassword')}}" class="forgot-pass" style="color:#2a446c">Forgot Password</a></span>  --}}
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

              <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>
              
              <div class="social-login">
                <a href="{{URL::to('/')}}" class="facebook btn d-flex justify-content-center align-items-center">
                  <span class="icon-facebook mr-3"></span> PMO
                </a>
                <a href="{{URL::to('student-login')}}" class="facebook btn d-flex justify-content-center align-items-center">
                  <span class="icon-twitter mr-3"></span> Student
                </a>
                {{-- <a href="#" class="google btn d-flex justify-content-center align-items-center">
                  <span class="icon-google mr-3"></span> Login as Supervisor
                </a> --}}
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <script src='{{URL::to('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js')}}'></script>
<script src="{{URL::to('https://code.jquery.com/jquery-3.6.0.min.js')}}" integrity="" crossorigin="anonymous"></script>
@if(session('success'))
    <script>
        $(document).ready(function(){
          $('#statusSuccessModal .modal-body h4').text('Success');
          $('#statusSuccessModal .modal-body p').text('{{ session('success') }}');
          $('#statusSuccessModal').modal('show');
        });
    </script>
@endif

@if(session('error'))
    <script>
        $(document).ready(function(){
          $('#statusErrorsModal .modal-body h4').text('Error');
            $('#statusErrorsModal .modal-body p').text('{{ session('error') }}');
            $('#statusErrorsModal').modal('show');
        });
    </script>
@endif
  <script src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{URL::to('js/popper.min.js')}}"></script>
  <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('js/main.js')}}"></script>
  </body>
</html>