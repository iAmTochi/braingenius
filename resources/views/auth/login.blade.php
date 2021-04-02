<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('') }}assets/images/favicon.png">
    <title>Login | Brain Genius</title>
    <link rel="canonical" href="" />
    <!-- Custom CSS -->
    <link href="{{ asset('') }}css/style.min.css" rel="stylesheet">

</head>

<body>
<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('') }}assets/images/background/login-register.jpg) no-repeat top center;">
        <div class="auth-box on-sidebar p-4 bg-white m-0">

                <div id="loginform">
                    @if(session()->has('error'))
                        <div>
                            <span class="text-danger">{{ session()->get('error') }}</span>
                        </div>
                    @endif
                <div class="logo text-center">
                        <span class="db"><img src="{{ asset('') }}assets/images/logo-icon.png" alt="logo" /><br/>
                            <img src="{{ asset('') }}assets/images/logo-text.png" alt="Home" /></span>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal mt-3 form-material" id="loginform" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="col-xs-12">
                                    <input name="username" class="form-control @error('username') is-invalid @enderror" type="text" placeholder="{{ __('Username') }}" value="{{ old('username') }}" autofocus>
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
{{--                            <div class="form-group mb-3">--}}
{{--                                <div class="col-xs-12">--}}
{{--                                    <input name="email" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="{{ __('Email') }}" value="{{ old('email') }}" autofocus>--}}
{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="form-group mb-3">
                                <div class="col-xs-12">
                                    <input class="form-control  @error('password') is-invalid @enderror" name="password" type="password"  autocomplete="current-password" placeholder="{{ __('Password') }}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox checkbox-info float-left pt-0 pl-1 ml-3 mb-3">
                                    <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember"> Remember me </label>
                                </div>
                                <a href="javascript:void(0)" id="to-recover" class="text-dark float-right mb-3"><i class="fa fa-lock mr-1"></i> Forgot pwd?</a>
                            </div>
                            <div class="form-group text-center mt-3">
                                <div class="col-xs-12">
                                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">--}}
{{--                                    <div class="social mb-3">--}}
{{--                                        <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </a>--}}
{{--                                        <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus"></i> </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group mb-0">--}}
{{--                                <div class="col-sm-12 text-center">--}}
{{--                                    <p>Don't have an account? <a href="{{ route('register') }}" class="text-info font-weight-normal ml-1">Sign Up</a></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </form>
                    </div>
                </div>
            </div>
            <div id="recoverform">
                <div class="logo">
                    <h3 class="font-weight-medium mb-3">Recover Password</h3>
                    <span>Enter your Email and instructions will be sent to you!</span>
                </div>
                <div class="row mt-3">
                    <!-- Form -->
                    <form class="col-12" action="">
                        <!-- email -->
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="email" required="" placeholder="Username">
                            </div>
                        </div>
                        <!-- pwd -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <button class="btn btn-block btn-lg btn-primary text-uppercase" type="submit" name="action">Reset</button>
                                <button id="go-back" class="btn btn-block btn-outline-secondary text-uppercase" type="button" name="action">Go, Back</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="{{ asset('') }}assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('') }}assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="{{ asset('') }}assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#go-back').on("click", function() {
        $("#loginform").slideDown();
        $("#recoverform").fadeOut();

    });
</script>
</body>
</html>
