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
              <!--  <img src="{{ asset('') }}assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
            
                <img src="{{ asset('') }}assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
           --> </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
     
                             <!-- dark Logo text -->
                       <!--      <img src="{{ asset('') }}assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                Light Logo text 
                             <img src="{{ asset('') }}assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        -->
                        
                        </span>
                        <span style="font-color:#000">BrainGenius</span>
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
                                    <span class="user-img position-relative d-inline-block"> <img src="{{ asset('') }}assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </span>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                    <span class="user-img position-relative d-inline-block"> <img src="{{ asset('') }}assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </span>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                    <span class="user-img position-relative d-inline-block"> <img src="{{ asset('') }}assets/images/users/3.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle away"></span> </span>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I am a singer!</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                    <span class="user-img position-relative d-inline-block"> <img src="{{ asset('') }}assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
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
                                        <div class="container p-0"> <img class="d-block img-fluid" src="{{ asset('') }}assets/images/big/img1.jpg" alt="First slide"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container p-0"><img class="d-block img-fluid" src="{{ asset('') }}assets/images/big/img2.jpg" alt="Second slide"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container p-0"><img class="d-block img-fluid" src="{{ asset('') }}assets/images/big/img3.jpg" alt="Third slide"></div>
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
                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(auth()->user()->type == 'lvl05' || auth()->user()->type == 'lvl04')
                        <img src="{{ (!empty(auth()->user()->admin->image)) ? asset('storage/'.auth()->user()->admin->image) :
                            Gravatar::src(auth()->user()->email) }}" alt="user" class="rounded-circle" width="31">
                    @elseif(auth()->user()->type == 'lvl03')
                        <img src="{{ (!empty(auth()->user()->staff->image)) ? asset('storage/'.auth()->user()->staff->image) :
                            Gravatar::src(auth()->user()->email) }}" alt="user" class="rounded-circle" width="31">
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                    <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                        <div class="">
                            @if(auth()->user()->type == 'lvl05' || auth()->user()->type == 'lvl04')
                                <img src="{{(!empty(auth()->user()->admin->image)) ? asset('storage/'.auth()->user()->admin->image) :
                                    Gravatar::src(auth()->user()->email) }}" alt="user" class="rounded" width="80">
                            @elseif(auth()->user()->type == 'lvl03')
                                <img src="{{(!empty(auth()->user()->staff->image)) ?   asset('storage/'.auth()->user()->staff->image) :
                                    Gravatar::src(auth()->user()->email) }}" alt="user" class="rounded" width="80">
                            @endif
                        </div>
                        <div class="ml-2">
                            <h4 class="mb-0">
                            @if(auth()->user()->type == 'lvl05' || auth()->user()->type == 'lvl04' )
                                <!-- Super Admin  or Regular Admin-->
                                {{ auth()->user()->admin->first_name.' '.auth()->user()->admin->last_name }}

                            @elseif(auth()->user()->type == 'lvl03')
                                <!-- Staff-->
                                {{ auth()->user()->staff->first_name.' '.auth()->user()->staff->last_name }}

                            @elseif(auth()->user()->type == 'lvl02')
                                <!-- Parent -->
                                {{ auth()->user()->staff->first_name.' '.auth()->user()->staff->last_name }}
                            @else
                                <!-- Student -->
                                    {{ auth()->user()->staff->first_name.' '.auth()->user()->staff->last_name }}

                                @endif
                            </h4>
                            <p class=" mb-0"><small><small>{{ auth()->user()->admin->email }}</small></small></p>
                        @if(auth()->user()->type == 'lvl05' || auth()->user()->type == 'lvl04' )
                            <!-- Super Admin  or Regular Admin-->
                                <a href="{{ route("admin.profile") }}" class="btn btn-rounded btn-danger btn-sm">View Profile</a>

                        @elseif(auth()->user()->type == 'lvl03')
                            <!-- Staff-->
                                <a href="{{ route("staff.profile") }}" class="btn btn-rounded btn-danger btn-sm">View Profile</a>

                        @elseif(auth()->user()->type == 'lvl02')
                            <!-- Parent -->
                                <a href="{{ route("parent.profile") }}" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                        @else
                            <!-- Student -->
                                <a href="{{ route("student.profile") }}" class="btn btn-rounded btn-danger btn-sm">View Profile</a>

                            @endif
                        </div>
                    </div>


                        @if(auth()->user()->type == 'lvl05' || auth()->user()->type == 'lvl04' )
                            <!-- Super Admin  or Regular Admin-->
                                <a class="dropdown-item" href="{{ route("admin.profile") }}"><i class="ti-user mr-1 ml-1"></i> My Profile</a>

                        @elseif(auth()->user()->type == 'lvl03')
                            <!-- Staff-->
                                <a class="dropdown-item" href="{{ route("staff.profile") }}"><i class="ti-user mr-1 ml-1"></i> My Profile</a>

                        @elseif(auth()->user()->type == 'lvl02')
                            <!-- Parent -->
                                <a class="dropdown-item" href="{{ route("admin.profile") }}"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                        @else
                            <!-- Student -->
                                <a class="dropdown-item" href="{{ route("admin.profile") }}"><i class="ti-user mr-1 ml-1"></i> My Profile</a>

                        @endif

                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet mr-1 ml-1"></i> My Balance</a>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Inbox</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"
                       href="{{ route('logout') }}"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
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
                    <i class="flag-icon flag-icon-ng"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right  animated bounceInDown" aria-labelledby="navbarDropdown2">
                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ng"></i> Nigeria</a>
                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a>
                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
