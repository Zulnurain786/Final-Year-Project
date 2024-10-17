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

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="icon" href="../Images/nav-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/newstyle.css">

    <title>GIMS</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url(../Images/cover_02.png);"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4 d-flex align-items-center" style="flex-direction: column">
                <img src="{{URL::to('../Images/recover-pass.png')}}" alt="" height="120px" width="120px" class="mb-3">
              <h3 style="color: #2a446c">Forget Password</h3>
              {{-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> --}}
            </div>
            <form action="{{route('Student.login')}}" method="POST">
              @csrf
              <div class="mb-3" style="color:#2a446c">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" name="projectid" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">Enter your email address to receive a password reset link..</div>
              </div>
              {{-- <div class="mb-3" style="color:#2a446c">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
              </div> --}}
              
              <div class="d-flex mb-5 align-items-center">
                {{-- <label class="control control--checkbox mb-0"><span class="caption">Remember me</span> --}}
                  {{-- <input type="checkbox" checked="checked"/> --}}
                  {{-- <div class="control__indicator"></div> --}}
                </label>
                {{-- <span class="ml-auto"><a href="{{URL::to('PMO/forgetpassword')}}" class="forgot-pass" style="color:#2a446c">Forgot Password</a></span>  --}}
              </div>

              <input type="submit" value="Send" class="btn btn-block btn-primary">

              {{-- <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>
              
              <div class="social-login">
                <a href="{{URL::to('pmo-login')}}" class="facebook btn d-flex justify-content-center align-items-center">
                  <span class="icon-facebook mr-3"></span> PMO
                </a>
                <a href="{{URL::to('supervisor-login')}}" class="facebook btn d-flex justify-content-center align-items-center">
                  <span class="icon-twitter mr-3"></span> Supervisor
                </a> --}}
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>