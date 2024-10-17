<!doctype html>
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
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="row">
                  <div class="col-md-12 d-flex align-items-center justify-content-center">
                      <div class="">
                        <h1 class="ms-sm-4 ms-md-2" style="color: #2b3990;">Student</h1>
                        <!-- <a href="#">Login</a> -->
                      </div>
                  </div>
                </div>
                <div class="logo">
                  <img src="{{URL::to('Images/user.png')}}">
                </div>
                <form action="">
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
                        <button type="submit" class="btn btn-primary border border-rounded" style="border-color: #2b3990 !important;background-color: #2b3990;">Submit</button>
                        <!-- <a href="#">Login</a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </form>
                <div class="form-group nm_lk"><p>----Or----</p></div>
                <div class="form-groupl">
                  <div class="_btn_04">
                    <a href="{{url('/')}}">Login as PMO</a>
                  </div>
                </div>
                <div class="form-groupl">
                  <div class="_btn_04">
                    <a href="{{route('Superviser.login')}}">Login as Supervisor</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>