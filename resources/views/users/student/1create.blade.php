
<!DOCTYPE html>
<html dir="ltr" lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/monster-bootstrap-latest/monster/src/main/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 03:08:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Monster admin Template - The Ultimate Multipurpose admin template</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/" />
    <!-- This page CSS -->
    <link href="{{ asset('') }}assets/extra-libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/extra-libs/jquery-steps/steps.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('') }}css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                             <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="icon-arrow-left-circle"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox animated bounceInDown">
                            <ul class="list-style-none">
                                <li>
                                    <div class="font-weight-medium border-bottom rounded-top py-3 px-4">
                                        Notifications
                                    </div>
                                </li>
                                <li>
                                    <div class="message-center notifications position-relative" style="height:250px;">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="btn btn-danger rounded-circle btn-circle"><i class="fa fa-link"></i></span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Luanch Admin</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my new admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="btn btn-success rounded-circle btn-circle"><i class="ti-calendar"></i></span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Event today</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just a reminder that you have event</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="btn btn-info rounded-circle btn-circle"><i class="ti-settings"></i></span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Settings</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">You can customize this template as you want</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="btn btn-primary rounded-circle btn-circle"><i class="ti-user"></i></span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                            <ul class="list-style-none">
                                <li>
                                    <div class="font-weight-medium border-bottom rounded-top py-3 px-4">
                                        Messages
                                    </div>
                                </li>
                                <li>
                                    <div class="message-center message-body position-relative" style="height:250px;">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle away"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I am a singer!</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);"> <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class=""><i class="mdi mdi-view-grid"></i></span>
                        </a>
                        <div class="dropdown-menu animated bounceInDown">
                            <div class="mega-dropdown-menu row">
                                <div class="col-lg-3 col-xlg-2 mb-4">
                                    <h4 class="mb-3">CAROUSEL</h4>
                                    <!-- CAROUSEL -->
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="container p-0"> <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container p-0"><img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container p-0"><img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <h4 class="mb-3">ACCORDION</h4>
                                    <!-- Accordian -->
                                    <div id="accordion">
                                        <div class="card mb-1">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Collapsible Group Item #1
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Collapsible Group Item #2
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Collapsible Group Item #3
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3  mb-4">
                                    <h4 class="mb-3">CONTACT US</h4>
                                    <!-- Contact -->
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter email"> </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-xlg-4 mb-4">
                                    <h4 class="mb-3">List style</h4>
                                    <!-- List style -->
                                    <ul class="list-style-none">
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box d-none d-md-block">
                        <form class="app-search mt-3 mr-2">
                            <input type="text" class="form-control rounded-pill border-0" placeholder="Search for...">
                            <a class="srh-btn"><i class="ti-search"></i></a>
                        </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                <div class=""><img src="../assets/images/users/1.jpg" alt="user" class="rounded" width="80"></div>
                                <div class="ml-2">
                                    <h4 class="mb-0">Steave Jobs</h4>
                                    <p class=" mb-0"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe889f8c8b90be99939f9792d09d9193">[email&#160;protected]</a></p>
                                    <a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet mr-1 ml-1"></i> My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right  animated bounceInDown" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a>
                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
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
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-md-5 align-self-center">
                    <h4 class="page-title">Form Wizard</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-md-7 align-self-center d-none d-md-block">
                    <button class="btn float-right btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
                    <div class="dropdown float-right mr-2 hidden-sm-down">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> January 2020 </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">February 2020</a> <a class="dropdown-item" href="#">March 2020</a> <a class="dropdown-item" href="#">April 2020</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body wizard-content">
                            <h4 class="card-title">Step wizard with validation</h4>
                            <h6 class="card-subtitle">You can us the validation like what we did</h6>
                            <form action="#" class="validation-wizard wizard-circle mt-5">
                                <!-- Step 1 -->
                                <h6>Step 1</h6>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2"> First Name : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlastName2"> Last Name : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wlastName2" name="lastName"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wemailAddress2"> Email Address : <span class="danger">*</span> </label>
                                                <input type="email" class="form-control required" id="wemailAddress2" name="emailAddress"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wphoneNumber2">Phone Number :</label>
                                                <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2"> Select City : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control required" id="wlocation2" name="location">
                                                    <option value="">Select City</option>
                                                    <option value="India">India</option>
                                                    <option value="USA">USA</option>
                                                    <option value="Dubai">Dubai</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wdate2">Date of Birth :</label>
                                                <input type="date" class="form-control" id="wdate2"> </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 2 -->
                                <h6>Step 2</h6>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jobTitle2">Company Name :</label>
                                                <input type="text" class="form-control required" id="jobTitle2">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="webUrl3">Company URL :</label>
                                                <input type="url" class="form-control required" id="webUrl3" name="webUrl3"> </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="shortDescription3">Short Description :</label>
                                                <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 3 -->
                                <h6>Step 3</h6>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wint1">Interview For :</label>
                                                <input type="text" class="form-control required" id="wint1"> </div>
                                            <div class="form-group">
                                                <label for="wintType1">Interview Type :</label>
                                                <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                    <option value="Banquet">Normal</option>
                                                    <option value="Fund Raiser">Difficult</option>
                                                    <option value="Dinner Party">Hard</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="wLocation1">Location :</label>
                                                <select class="custom-select form-control required" id="wLocation1" name="wlocation">
                                                    <option value="">Select City</option>
                                                    <option value="India">India</option>
                                                    <option value="USA">USA</option>
                                                    <option value="Dubai">Dubai</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wjobTitle2">Interview Date :</label>
                                                <input type="date" class="form-control required" id="wjobTitle2">
                                            </div>
                                            <div class="form-group">
                                                <label>Requirements :</label>
                                                <div class="c-inputs-stacked">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio16" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio16">Employee</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio17" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio17">Contract</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 4 -->
                                <h6>Step 4</h6>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="behName1">Behaviour :</label>
                                                <input type="text" class="form-control required" id="behName1">
                                            </div>
                                            <div class="form-group">
                                                <label for="participants1">Confidance</label>
                                                <input type="text" class="form-control required" id="participants1">
                                            </div>
                                            <div class="form-group">
                                                <label for="participants1">Result</label>
                                                <select class="custom-select form-control required" id="participants1" name="location">
                                                    <option value="">Select Result</option>
                                                    <option value="Selected">Selected</option>
                                                    <option value="Rejected">Rejected</option>
                                                    <option value="Call Second-time">Call Second-time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="decisions1">Comments</label>
                                                <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Rate Interviwer :</label>
                                                <div class="c-inputs-stacked">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio11" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio11">1 star</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio12" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio12">2 star</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio13" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio13">3 star</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio14" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio14">4 star</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio15" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio15">5 star</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2020 Monster Admin by wrappixel.com
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
<aside class="customizer">
    <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
    <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle font-20"></i></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="p-3 border-bottom">
                    <!-- Sidebar -->
                    <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
                    <div class="checkbox checkbox-info mt-2">
                        <input type="checkbox" name="theme-view" id="theme-view">
                        <label for="theme-view"> <span>Dark Theme</span> </label>
                    </div>
                    <div class="checkbox checkbox-info mt-2">
                        <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                        <label for="collapssidebar"> <span>Collapse Sidebar</span> </label>
                    </div>
                    <div class="checkbox checkbox-info mt-2">
                        <input type="checkbox" name="sidebar-position" id="sidebar-position">
                        <label for="sidebar-position"> <span>Fixed Sidebar</span> </label>
                    </div>
                    <div class="checkbox checkbox-info mt-2">
                        <input type="checkbox" name="header-position" id="header-position">
                        <label for="header-position"> <span>Fixed Header</span> </label>
                    </div>
                    <div class="checkbox checkbox-info mt-2">
                        <input type="checkbox" name="boxed-layout" id="boxed-layout">
                        <label for="boxed-layout"> <span>Boxed Layout</span> </label>
                    </div>
                </div>
                <div class="p-3 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin1"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin2"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin3"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin4"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin5"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin6"></a></li>
                    </ul>
                    <!-- Logo BG -->
                </div>
                <div class="p-3 border-bottom">
                    <!-- Navbar BG -->
                    <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin1"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin2"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin3"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin4"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin5"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin6"></a></li>
                    </ul>
                    <!-- Navbar BG -->
                </div>
                <div class="p-3 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin1"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin2"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin3"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin4"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin5"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin6"></a></li>
                    </ul>
                    <!-- Logo BG -->
                </div>
            </div>
            <!-- End Tab 1 -->
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                <ul class="mailbox list-style-none mt-3">
                    <li>
                        <div class="message-center chat-scroll position-relative">
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_1' data-user-id='1'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_2' data-user-id='2'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_3' data-user-id='3'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle away"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I am a singer!</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_4' data-user-id='4'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_5' data-user-id='5'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_6' data-user-id='6'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_7' data-user-id='7'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/7.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_8' data-user-id='8'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/8.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End Tab 2 -->
            <!-- Tab 3 -->
            <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h6 class="mt-3 mb-3">Activity Timeline</h6>
                <div class="steamline">
                    <div class="sl-item">
                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                        <div class="sl-right">
                            <div class="font-weight-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                            <div class="desc">you can write anything </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                        <div class="sl-right">
                            <div class="font-weight-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../assets/images/users/2.jpg"> </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../assets/images/users/1.jpg"> </div>
                        <div class="sl-right">
                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-primary"> <i class="ti-user"></i></div>
                        <div class="sl-right">
                            <div class="font-weight-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                            <div class="desc">you can write anything </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                        <div class="sl-right">
                            <div class="font-weight-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../assets/images/users/4.jpg"> </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="../assets/images/users/6.jpg"> </div>
                        <div class="sl-right">
                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab 3 -->
        </div>
    </div>
</aside>
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
<script src="{{ asset('') }}assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
<script src="{{ asset('') }}assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script>

    var form = $(".validation-wizard").show();

    $(".validation-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit"
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
        },
        onFinishing: function(event, currentIndex) {
            return form.validate().settings.ignore = ":disabled", form.valid()
        },
        onFinished: function(event, currentIndex) {
            swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    }),
        $(".validation-wizard").validate({
        ignore: "input[type=hidden]",
        errorClass: "text-danger",
        successClass: "text-success",
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass)
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass)
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element)
        },
        rules: {
            email: {
                email: !0
            }
        }
    })
</script>
</body>

</html>
