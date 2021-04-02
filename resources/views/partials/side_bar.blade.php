{{--<aside class="left-sidebar">--}}
{{--    <!-- Sidebar scroll-->--}}
{{--    <div class="scroll-sidebar">--}}
{{--        <!-- User profile -->--}}
{{--        <div class="user-profile">--}}
{{--            <!-- User profile image -->--}}
{{--            <div class="profile-img"> <img src="  {{ Gravatar::src(auth()->user()->email) }}" alt="user" /> </div>--}}
{{--            <!-- User profile text-->--}}
{{--            <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe <span class="caret"></span></a>--}}
{{--                <div class="dropdown-menu animated flipInY">--}}
{{--                    <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>--}}
{{--                    <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>--}}
{{--                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>--}}
{{--                    <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>--}}
{{--                    <div class="dropdown-divider"></div> <a href="{{ route('logout') }}" class="dropdown-item"--}}
{{--                                                            onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- End User profile text-->--}}
{{--        <!-- Sidebar navigation-->--}}
{{--        <nav class="sidebar-nav">--}}
{{--            <ul id="sidebarnav">--}}
{{--                <li class="nav-small-cap">PERSONAL</li>--}}
{{--                <li class="{{ Request::is('home') ? 'active' : ''  }}" >--}}
{{--                    <a class="has-arrow" href="{{ route('home') }}" aria-expanded="false"><i class=" mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>--}}
{{--                </li>--}}

{{--                <li class="nav-devider"></li>--}}
{{--                <li class="nav-small-cap">ACADEMICS</li>--}}
{{--                <li class="">--}}
{{--                    <a class="has-arrow" href="" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Students</span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="form-basic.html">Register Student</a></li>--}}
{{--                        <li><a href="form-basic.html">Students List</a></li>--}}
{{--                        <li><a href="form-basic.html">Withdrawn Students</a></li>--}}
{{--                        <li><a href="form-basic.html">Graduated Students</a></li>--}}
{{--                        <li><a href="form-basic.html">Manage Parents</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a class="has-arrow" href="" aria-expanded="false"><i class="fa fa-university"></i><span class="hide-menu">Class</span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a target="_blank" href="{{ route('class-arm.index') }}">Manage Class Arm</a></li>--}}
{{--                        <li><a target="_blank" href="{{ route('arm.index') }}">Classes and Arms</a></li>--}}
{{--                        <li><a target="_blank" href="form-basic.html">Class Teachers</a></li>--}}
{{--                        <li><a target="_blank" href="form-basic.html">Class Assignments</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a class="" href="" aria-expanded="false"><i class="mdi mdi-folder"></i><span class="hide-menu">Past Records</span></a>--}}

{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a class="has-arrow" href="" aria-expanded="false"><i class="mdi mdi-timetable"></i><span class="hide-menu">Time Table</span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">w--}}
{{--                        <li><a href="form-basic.html">Class Time Table</a></li>--}}
{{--                        <li><a href="form-basic.html">School Time Table</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a class="has-arrow" href="" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Subject</span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a target="_blank" href="{{ route('subject.index') }}">School Subjects</a></li>--}}
{{--                        <li><a target="_blank" href="form-basic.html">Subject Teachers</a></li>--}}
{{--                        <li><a target="_blank" href="{{ route('department.index') }}">Departments</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-devider"></li>--}}
{{--                <li class="nav-small-cap">LEARNING & COMMUNICATION</li>--}}
{{--                <li class="">--}}
{{--                    <a class="" href="" aria-expanded="false"><i class="mdi mdi-comment-multiple-outline"></i><span class="hide-menu">Forum</span></a>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a class="has-arrow " href="" aria-expanded="false"><i class="mdi mdi-message-text"></i><span class="hide-menu">Messaging <span class="label label-rounded label-danger">5</span></span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="layout-single-column.html">Send Email</a></li>--}}
{{--                        <li><a href="layout-single-column.html">Send Text Message</a></li>--}}
{{--                        <li><a href="layout-single-column.html">Generater Letter</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-devider"></li>--}}
{{--                <li class="nav-small-cap">ADMINISTRATION</li>--}}
{{--                <li class="">--}}
{{--                    <a class="has-arrow " href="" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Payments/Bills</span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="layout-single-column.html">1 Column</a></li>--}}
{{--                        <li><a href="layout-fix-header.html">Fix header</a></li>--}}
{{--                        <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>--}}
{{--                        <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>--}}
{{--                        <li><a href="layout-boxed.html">Boxed Layout</a></li>--}}
{{--                        <li><a href="layout-logo-center.html">Logo in Center</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a class="has-arrow " href="" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Staff and Admin</span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="layout-single-column.html">1 Column</a></li>--}}
{{--                        <li><a href="layout-fix-header.html">Fix header</a></li>--}}
{{--                        <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>--}}
{{--                        <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>--}}
{{--                        <li><a href="layout-boxed.html">Boxed Layout</a></li>--}}
{{--                        <li><a href="layout-logo-center.html">Logo in Center</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a class="has-arrow " href="" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Sport House</span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="layout-single-column.html">1 Column</a></li>--}}
{{--                        <li><a href="layout-fix-header.html">Fix header</a></li>--}}
{{--                        <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>--}}
{{--                        <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>--}}
{{--                        <li><a href="layout-boxed.html">Boxed Layout</a></li>--}}
{{--                        <li><a href="layout-logo-center.html">Logo in Center</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a class="has-arrow " href="" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Resources</span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="layout-single-column.html">1 Column</a></li>--}}
{{--                        <li><a href="layout-fix-header.html">Fix header</a></li>--}}
{{--                        <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>--}}
{{--                        <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>--}}
{{--                        <li><a href="layout-boxed.html">Boxed Layout</a></li>--}}
{{--                        <li><a href="layout-logo-center.html">Logo in Center</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a class="has-arrow " href="" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Configuration</span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="layout-single-column.html">1 Column</a></li>--}}
{{--                        <li><a href="layout-fix-header.html">Fix header</a></li>--}}
{{--                        <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>--}}
{{--                        <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>--}}
{{--                        <li><a href="layout-boxed.html">Boxed Layout</a></li>--}}
{{--                        <li><a href="layout-logo-center.html">Logo in Center</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}


{{--            </ul>--}}
{{--        </nav>--}}
{{--        <!-- End Sidebar navigation -->--}}
{{--    </div>--}}
{{--    <!-- End Sidebar scroll-->--}}
{{--    <!-- Bottom points-->--}}
{{--    <div class="sidebar-footer">--}}
{{--        <!-- item-->--}}
{{--        <a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>--}}
{{--        <!-- item-->--}}
{{--        <a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>--}}
{{--        <!-- item-->--}}
{{--        <a href="#" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>--}}
{{--    </div>--}}
{{--    <!-- End Bottom points-->--}}
{{--</aside>--}}

{{--new--}}
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User profile -->
                    <div class="user-profile text-center position-relative pt-4 mt-1">
                        <!-- User profile image -->
                        <div class="profile-img m-auto">
                            @if(auth()->user()->isAdmin()  || auth()->user()->isSuperAdmin())
                            <img src="{{ (!empty(auth()->user()->admin->image))? asset('storage/'.auth()->user()->admin->image) : Gravatar::src(auth()->user()->admin->email) }}" alt="user" class="w-100 rounded-circle" />
                            @elseif(auth()->user()->type == 'lvl03')
                            <img src="{{ (!empty(auth()->user()->staff->image))? asset('storage/'.auth()->user()->staff->image) : Gravatar::src(auth()->user()->staff->email) }}" alt="user" class="w-100 rounded-circle" />
                            @endif
                        </div>
                        <!-- User profile text-->
                        <div class="profile-text py-1"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                @if(auth()->user()->isAdmin()  || auth()->user()->isSuperAdmin())
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
                                <span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">

                                    @if(auth()->user()->isAdmin()  || auth()->user()->isSuperAdmin())
                                        <!-- Super Admin  or Regular Admin-->
                                            <a href="{{ route("admin.profile") }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>

                                    @elseif(auth()->user()->isStaff())
                                        <!-- Staff-->
                                            <a href="{{ route("staff.profile") }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>

                                    @elseif(auth()->user()->isParent())
                                        <!-- Parent -->
                                            <a href="{{ route("admin.profile") }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                    @else
                                        <!-- Student -->
                                            <a href="{{ route("admin.profile") }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                    @endif

                                <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                                <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                                <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <div class="dropdown-divider"></div> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                                            class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End User profile text-->
                </li>
                <!-- User Profile-->
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Personal</span></li>
                <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="{{ route('home') }}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard <span class="badge badge-pill badge-success">5</span></span></a>

                </li>
                <li class="nav-devider"></li>
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">ACADEMICS</span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i  data-feather="users" class="feather-icon"></i><span class="hide-menu">Students </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a target="_blank" href="{{ route("student.create") }}" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Register Student </span></a></li>
                        <li class="sidebar-item"><a target="_blank" href="inbox-email-detail.html" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> Students List</span></a></li>
                        <li class="sidebar-item"><a target="_blank" href="inbox-email-compose.html" class="sidebar-link"><i class="mdi mdi-email-secure"></i><span class="hide-menu">Withdrawn Students </span></a></li>
                        <li class="sidebar-item"><a target="_blank" href="inbox-email-compose.html" class="sidebar-link"><i class="mdi mdi-email-secure"></i><span class="hide-menu">Graduated Students </span></a></li>
                        <li class="sidebar-item"><a target="_blank" href="inbox-email-compose.html" class="sidebar-link"><i class="mdi mdi-email-secure"></i><span class="hide-menu">Manage Parents </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-university"></i><span class="hide-menu">Class </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('class-arm.index') }}" class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu"> Manage Class Arm </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('arm.index') }}" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Classes and Arms </span></a></li>
                        <li class="sidebar-item"><a href="ticket-detail.html" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Class Teachers </span></a></li>
                        <li class="sidebar-item"><a href="ticket-detail.html" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Class Assignments </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span class="hide-menu">Past Records</span></a></li>


                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-timetable"></i><span class="hide-menu">Time Table </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Class Time Table </span></a></li>
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> School Time Table</span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i  class="mdi mdi-book-multiple"></i><span class="hide-menu">Subject </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('subject.index') }}" class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu"> School Subjects</span></a></li>
                        <li class="sidebar-item"><a href="ticket-detail.html" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu">Subject Teachers</span></a></li>
                        <li class="sidebar-item"><a href="{{ route('department.index') }}" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Departments</span></a></li>
                    </ul>
                </li>

                <li class="nav-devider"></li>
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">LEARNING & COMMUNICATION</span></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><i data-feather="disc" class="feather-icon"></i><span class="hide-menu">Forum</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="cpu" class="feather-icon"></i><span class="hide-menu">Messaging <span class="badge badge-pill badge-success">3</span></span></a>

                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu">Send Email</span></a></li>
                        <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Send Text Message</span></a></li>
                        <li class="sidebar-item"><a href="ui-tab.html" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Generater Letter</span></a></li>
                    </ul>
                </li>
                @if(auth()->user()->isAdmin()  || auth()->user()->isSuperAdmin())
                <li class="nav-devider"></li>
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">ADMINISTRATION</span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="layers" class="feather-icon"></i><span class="hide-menu">Payments/Bills</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> Forms Input</span></a></li>
                        <li class="sidebar-item"><a href="form-input-groups.html" class="sidebar-link"><i class="mdi mdi-rounded-corner"></i><span class="hide-menu"> Input Groups</span></a></li>
                        <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><i class="mdi mdi-select-all"></i><span class="hide-menu"> Input Grid</span></a></li>
                        <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><i class="mdi mdi-shape-plus"></i><span class="hide-menu"> Checkboxes &amp; Radios</span></a></li>
                        <li class="sidebar-item"><a href="form-bootstrap-touchspin.html" class="sidebar-link"><i class="mdi mdi-switch"></i><span class="hide-menu"> Bootstrap Touchspin</span></a></li>
                        <li class="sidebar-item"><a href="form-bootstrap-switch.html" class="sidebar-link"><i class="mdi mdi-toggle-switch-off"></i><span class="hide-menu"> Bootstrap Switch</span></a></li>
                        <li class="sidebar-item"><a href="form-select2.html" class="sidebar-link"><i class="mdi mdi-relative-scale"></i><span class="hide-menu"> Select2</span></a></li>
                        <li class="sidebar-item"><a href="form-dual-listbox.html" class="sidebar-link"><i class="mdi mdi-tab-unselected"></i><span class="hide-menu"> Dual Listbox</span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Staff and Admin</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('staff.index') }}" target="_blank" class="sidebar-link"><i class="mdi mdi-vector-difference-ba"></i><span class="hide-menu"> Manage Staff</span></a></li>
                        <li class="sidebar-item"><a href="{{ route('admin.index') }}" target="_blank" class="sidebar-link"><i class="mdi mdi-vector-difference-ba"></i><span class="hide-menu"> Manage Admin</span></a></li>

                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="package" class="feather-icon"></i><span class="hide-menu">Sport House</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="form-paginator.html" class="sidebar-link"><i class="mdi mdi-export"></i><span class="hide-menu"> Paginator</span></a></li>
                        <li class="sidebar-item"><a href="form-img-cropper.html" class="sidebar-link"><i class="mdi mdi-crop"></i><span class="hide-menu"> Image Cropper</span></a></li>
                        <li class="sidebar-item"><a href="form-dropzone.html" class="sidebar-link"><i class="mdi mdi-crosshairs-gps"></i><span class="hide-menu"> Dropzone</span></a></li>
                        <li class="sidebar-item"><a href="form-mask.html" class="sidebar-link"><i class="mdi mdi-box-shadow"></i><span class="hide-menu"> Form Mask</span></a></li>
                        <li class="sidebar-item"><a href="form-typeahead.html" class="sidebar-link"><i class="mdi mdi-cards-variant"></i><span class="hide-menu"> Form Typehead</span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="check-square" class="feather-icon"></i><span class="hide-menu">Resource</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="form-bootstrap-validation.html" class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span class="hide-menu"> Bootstrap Validation</span></a></li>
                        <li class="sidebar-item"><a href="form-custom-validation.html" class="sidebar-link"><i class="mdi mdi-credit-card-plus"></i><span class="hide-menu"> Custom Validation</span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="droplet" class="feather-icon"></i><span class="hide-menu">Configuration</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('academic-sessions.index') }}" class="sidebar-link"><i class="mdi mdi-calendar-plus"></i><span class="hide-menu"> Academic Sessions</span></a></li>
                        <li class="sidebar-item"><a href="form-picker-datetimepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-clock"></i><span class="hide-menu"> Form Datetimepicker</span></a></li>
                        <li class="sidebar-item"><a href="form-picker-bootstrap-rangepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-range"></i><span class="hide-menu"> Form Bootstrap Rangepicker</span></a></li>
                        <li class="sidebar-item"><a href="form-picker-bootstrap-datepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Form Bootstrap Datepicker</span></a></li>
                        <li class="sidebar-item"><a href="form-picker-material-datepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-text"></i><span class="hide-menu"> Form Material Datepicker</span></a></li>
                    </ul>
                </li>
                <li class="nav-devider"></li>
                @endif


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
