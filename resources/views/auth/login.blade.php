<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Login</title>

    <!--web fonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--icon font-->
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/dashlab-icon/dashlab-icon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/themify-icons/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/weather-icons/css/weather-icons.min.css')}}" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="{{ asset('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="{{ asset('assets/vendor/jquery-dropdown-master/jquery.dropdown.css')}}" rel="stylesheet">

    <!--jquery ui-->
    <link href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">

    <!--iCheck-->
    <link href="{{ asset('assets/vendor/icheck/skins/all.css')}}" rel="stylesheet">

    <!--custom styles-->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-bg">

    <div class="container">
        <div class="row">
            <div class="col-xl-12 d-lg-flex align-items-center">
                <!--login form-->
                <div class="login-form">
                    <h4 class="text-uppercase text-purple text-center mb-5">Login</h4>
                    <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif


                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                        </div>

                        <div class="form-group clearfix">
                            <a href="#" class="float-left forgot-link my-2">Forgot Password ?</a>
                            <button type="submit" class="btn btn-purple float-right">LOGIN</button>
                        </div>

                        <div class="form-divider"></div>

                        <a href="#" class="btn btn-facebook text-uppercase"><i class="fa fa-facebook-square"></i> Login with facebook</a>
                        <div class="text-center mt-4">
                            <a href="registration.html" class="btn-link text-capitalize f12">Create New Account</a>
                        </div>
                    </form>
                </div>
                <!--/login form-->

                <!--login promo-->
                <div class="login-promo basic-gradient  text-white position-relative">
                    <div class="login-promo-content text-center">
                        <a href="#" class="mb-4 d-block">
                            <img class="pr-3" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x" alt="">
                            <span class="text-uppercase weight800 text-white f18">dashlab</span>
                        </a>
                        <h1 class="text-white">Let’s Start The Journey</h1>
                        <p>Enter the most beautiful admin ever</p>
                        <a href="#" class="play-btn mt-4"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <!--/login promo-->

            </div>
        </div>
    </div>

    <!--basic scripts-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/popper.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/jquery-dropdown-master/jquery.dropdown.js')}}"></script>
    <script src="{{ asset('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/icheck/skins/icheck.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
</body>
</html>

