<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('') }}assets/images/favicon.png">
    <title>{{ $title }} | Brain Genius</title>
    <link rel="canonical" href="" />
    <!-- page CSS -->
    @yield('css')
    <!-- Custom CSS -->
    <link href="{{ asset('') }}css/style.min.css" rel="stylesheet">
    <style>
        .btn-warning,
        .badge-warning
        {
            color:#fff;
        }
    </style>



</head>

<body>
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
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
@include('partials.header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
@include('partials.side_bar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        @isset($title)
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-md-5 align-self-center">
                    <h3 class="page-title">{{ $title }}</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-md-7 align-self-center d-none d-md-block">
                    <button class="btn float-right btn-success"><i class="mdi mdi-check-circle"></i> {{ $active_session->term.' Term: '.$active_session->session.' '}}</button>

                </div>
            </div>
        </div>
    @endisset
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
           @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © {{ date('Y') }} <b>Brain Genius SMS</b> by ioSolutions.com
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script data-cfasync="false" src="{{ asset('') }}js/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('') }}assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('') }}assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="{{ asset('') }}assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="{{ asset('') }}js/app.min.js"></script>
<script src="{{ asset('') }}js/app.init.js"></script>
<script src="{{ asset('') }}js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('') }}assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{ asset('') }}assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--Wave Effects -->
<script src="{{ asset('') }}js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{ asset('') }}js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{ asset('') }}js/feather.min.js"></script>
<script src="{{ asset('') }}js/custom.min.js"></script>


<!-- ############################################################### -->
<!-- This Page Js Files Here -->
<!-- ############################################################### -->
@yield('scripts')
</body>
</html>
