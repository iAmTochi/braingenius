@extends('layouts.app')

@section('content')
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daily Sales</h4>
                    <div class="text-right">
                        <h2 class="font-weight-light mb-0"><i class="ti-arrow-up text-success"></i> $120</h2>
                        <span class="text-muted">Todays Income</span>
                    </div>
                    <span class="text-success">80%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Weekly Sales</h4>
                    <div class="text-right">
                        <h2 class="font-weight-light mb-0"><i class="ti-arrow-up text-info"></i> $5,000</h2>
                        <span class="text-muted">Todays Income</span>
                    </div>
                    <span class="text-info">30%</span>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Monthly Sales</h4>
                    <div class="text-right">
                        <h2 class="font-weight-light mb-0"><i class="ti-arrow-up text-purple"></i> $8,000</h2>
                        <span class="text-muted">Todays Income</span>
                    </div>
                    <span class="text-purple">60%</span>
                    <div class="progress">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Yearly Sales</h4>
                    <div class="text-right">
                        <h2 class="font-weight-light mb-0"><i class="ti-arrow-down text-danger"></i> $12,000</h2>
                        <span class="text-muted">Todays Income</span>
                    </div>
                    <span class="text-danger">80%</span>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h3>Revenue Statistics</h3>
                                    <h6 class="card-subtitle">January 2020</h6> </div>
                                <div class="ml-auto ">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6 class="text-muted"><i class="fa fa-circle mr-1 text-success"></i>Product A</h6> </li>
                                        <li class="list-inline-item">
                                            <h6 class="text-muted"><i class="fa fa-circle mr-1 text-info"></i>Product B</h6> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="revenue" style="height: 350px;"></div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                            <h1 class="mb-0 font-weight-light">$54578</h1>
                            <h6 class="text-muted">Total Revenue</h6></div>
                        <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                            <h1 class="mb-0 font-weight-light">$43451</h1>
                            <h6 class="text-muted">Online Revenue</h6></div>
                        <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                            <h1 class="mb-0 font-weight-light">$44578</h1>
                            <h6 class="text-muted">Product A</h6></div>
                        <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                            <h1 class="mb-0 font-weight-light">$12578</h1>
                            <h6 class="text-muted">Product B</h6></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sales of the Month</h4>
                    <div id="visitor" class="mt-3 m-auto" style="height:300px; width:300px;"></div>
                    <div class="round-overlap mt-2"><i class="mdi mdi-cart"></i></div>
                    <ul class="list-inline mt-4 text-center pt-1">
                        <li class="list-inline-item"><i class="fa fa-circle text-purple"></i> Item A</li>
                        <li class="list-inline-item"><i class="fa fa-circle text-success"></i> Item B</li>
                        <li class="list-inline-item"><i class="fa fa-circle text-info"></i> Item C</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sales Prediction</h4>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">$3528</span>
                                    <h6 class="text-muted">(150-165 Sales)</h6>
                                </div>
                                <div class="ml-auto">
                                    <div id="sales-prediction" style=" width:150px; height:150px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sales Difference</h4>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">$4316</span>
                                    <h6 class="text-muted">(150-165 Sales)</h6>
                                </div>
                                <div class="ml-auto">
                                    <div class="sales-diff" style="width:120px; height: 120px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class=""><img src="{{ asset('') }}assets/images/users/1.jpg" alt="user" class="rounded-circle" width="100"></div>
                        <div class="pl-3">
                            <h3 class="font-weight-medium">Daniel Kristeen</h3>
                            <h6>UIUX Designer</h6>
                            <button class="btn btn-success"><i class="ti-plus"></i> Follow</button>
                        </div>
                    </div>
                    <div class="row mt-4 pt-2">
                        <div class="col border-right">
                            <h2 class="font-weight-light">14</h2>
                            <h6>Photos</h6></div>
                        <div class="col border-right">
                            <h2 class="font-weight-light">54</h2>
                            <h6>Videos</h6></div>
                        <div class="col">
                            <h2 class="font-weight-light">145</h2>
                            <h6>Tasks</h6></div>
                    </div>
                </div>
                <div class="card-body border-top">
                    <p class="text-center scrollable" style="overflow: hidden; width: auto; height: 105px;">
                        Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunLorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididuntt
                    </p>
                    <ul class="list-icons d-flex flex-item text-center list-style-none">
                        <li class="col my-1"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Website"><i class="fa fa-globe pl-2"></i></a></li>
                        <li class="col my-1"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="twitter"><i class="fab fa-twitter pl-2"></i></a></li>
                        <li class="col my-1"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fab fa-facebook-square pl-2"></i></a></li>
                        <li class="col my-1"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Youtube"><i class="fab fa-youtube pl-2"></i></a></li>
                        <li class="col my-1"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Linkd-in"><i class="fab fa-linkedin pl-2"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Chats</h4>
                    <div class="chat-box scrollable" style="height: 375px;">
                        <!--chat Row -->
                        <ul class="chat-list m-0 p-0">
                            <!--chat Row -->
                            <li class="mt-4">
                                <div class="chat-img d-inline-block align-top"><img src="{{ asset('') }}assets/images/users/1.jpg" alt="user" class="rounded-circle" /></div>
                                <div class="chat-content pl-3 d-inline-block">
                                    <h5 class="text-muted text-nowrap">James Anderson</h5>
                                    <div class="box mb-2 d-inline-block text-dark rounded p-2 bg-light-info">Lorem Ipsum is simply dummy text of the printing & type setting industry.</div>
                                </div>
                                <div class="chat-time d-inline-block text-right text-muted">10:56 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="mt-4">
                                <div class="chat-img d-inline-block align-top"><img src="{{ asset('') }}assets/images/users/2.jpg" alt="user" class="rounded-circle" /></div>
                                <div class="chat-content pl-3 d-inline-block">
                                    <h5 class="text-muted text-nowrap">Bianca Doe</h5>
                                    <div class="box mb-2 d-inline-block text-dark rounded p-2 bg-light-success">It’s Great opportunity to work.</div>
                                </div>
                                <div class="chat-time d-inline-block text-right text-muted">10:57 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="odd mt-4">
                                <div class="chat-content pl-3 d-inline-block text-right">
                                    <div class="box mb-2 d-inline-block text-dark rounded p-2 bg-light-inverse">I would love to join the team.</div>
                                    <br/>
                                </div>
                                <div class="chat-time d-inline-block text-right text-muted">10:58 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="odd mt-4">
                                <div class="chat-content pl-3 d-inline-block text-right">
                                    <div class="box mb-2 d-inline-block text-dark rounded p-2 bg-light-inverse">Whats budget of the new project.</div>
                                    <br/>
                                </div>
                                <div class="chat-time d-inline-block text-right text-muted">10:59 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="mt-4">
                                <div class="chat-img d-inline-block align-top"><img src="{{ asset('') }}assets/images/users/3.jpg" alt="user" class="rounded-circle" /></div>
                                <div class="chat-content pl-3 d-inline-block">
                                    <h5 class="text-muted text-nowrap">Angelina Rhodes</h5>
                                    <div class="box mb-2 d-inline-block text-dark rounded p-2 bg-light-primary">Well we have good budget for the project</div>
                                </div>
                                <div class="chat-time d-inline-block text-right text-muted">11:00 am</div>
                            </li>
                            <!--chat Row -->
                        </ul>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row">
                        <div class="col-8">
                            <textarea placeholder="Type your message here" class="form-control border-0"></textarea>
                        </div>
                        <div class="col-4 text-right">
                            <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fas fa-paper-plane"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Messages</h4>
                    <div class="message-box scrollable" style="height: 476px;">
                        <div class="message-widget message-scroll">
                            <!-- Message -->
                            <a href="#" class="d-flex align-items-center border-bottom py-2 px-3">
                                <div class="user-img position-relative d-inline-block mb-2 mr-0 mr-md-3"> <img src="{{ asset('') }}assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </div>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-truncate mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="font-12 text-nowrap d-block time">9:30 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="#" class="d-flex align-items-center border-bottom py-2 px-3">
                                <div class="user-img position-relative d-inline-block mb-2 mr-0 mr-md-3"> <img src="{{ asset('') }}assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </div>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-truncate mail-desc">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block time">9:10 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="#" class="d-flex align-items-center border-bottom py-2 px-3">
                                <div class="user-img position-relative d-inline-block mb-2 mr-0 mr-md-3"> <span class="round bg-info d-inline-block text-white text-center rounded-circle">A</span> <span class="profile-status rounded-circle away"></span> </div>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-truncate mail-desc">Simply dummy text of the printing and typesetting industry.</span> <span class="font-12 text-nowrap d-block time">9:08 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="#" class="d-flex align-items-center border-bottom py-2 px-3">
                                <div class="user-img position-relative d-inline-block mb-2 mr-0 mr-md-3"> <img src="{{ asset('') }}assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </div>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-truncate mail-desc">Just see the my admin!</span> <span class="font-12 text-nowrap d-block time">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="#" class="d-flex align-items-center border-bottom py-2 px-3">
                                <div class="user-img position-relative d-inline-block mb-2 mr-0 mr-md-3"> <img src="{{ asset('') }}assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </div>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-truncate mail-desc">Welcome to the Elite Admin</span> <span class="font-12 text-nowrap d-block time">9:30 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="#" class="d-flex align-items-center border-bottom py-2 px-3">
                                <div class="user-img position-relative d-inline-block mb-2 mr-0 mr-md-3"> <img src="{{ asset('') }}assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </div>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-truncate mail-desc">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block time">9:10 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="#" class="d-flex align-items-center border-bottom py-2 px-3">
                                <div class="user-img position-relative d-inline-block mb-2 mr-0 mr-md-3"> <img src="{{ asset('') }}assets/images/users/3.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle away"></span> </div>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-truncate mail-desc">I am a singer!</span> <span class="font-12 text-nowrap d-block time">9:08 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="#" class="d-flex align-items-center py-2 px-3">
                                <div class="user-img position-relative d-inline-block mb-2 mr-0 mr-md-3"> <img src="{{ asset('') }}assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </div>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-truncate mail-desc">Just see the my admin!</span> <span class="font-12 text-nowrap d-block time">9:02 AM</span> </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex no-block">
                        <h4 class="card-title">Projects of the Month</h4>
                        <div class="ml-auto">
                            <select class="custom-select">
                                <option selected>January</option>
                                <option value="1">February</option>
                                <option value="2">March</option>
                                <option value="3">April</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table stylish-table mb-0 mt-2 no-wrap v-middle">
                            <thead>
                            <tr>
                                <th class="font-weight-normal text-muted border-0 border-bottom" colspan="2">Assigned</th>
                                <th class="font-weight-normal text-muted border-0 border-bottom">Name</th>
                                <th class="font-weight-normal text-muted border-0 border-bottom">Priority</th>
                                <th class="font-weight-normal text-muted border-0 border-bottom">Budget</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="width:50px;"><span class="round rounded-circle text-white d-inline-block text-center bg-info">S</span></td>
                                <td>
                                    <h6 class="font-weight-medium mb-0 nowrap">Sunil Joshi</h6><small class="text-muted no-wrap">Web Designer</small></td>
                                <td>Elite Admin</td>
                                <td><span class="badge badge-light-success text-success">Low</span></td>
                                <td>$3.9K</td>
                            </tr>
                            <tr class="active">
                                <td><span class="round text-white d-inline-block text-center"><img src="{{ asset('') }}assets/images/users/2.jpg" alt="user" class="rounded-circle" width="50" /></span></td>
                                <td>
                                    <h6 class="font-weight-medium mb-0 nowrap">Andrew</h6><small class="text-muted no-wrap">Project Manager</small></td>
                                <td>Real Homes</td>
                                <td><span class="badge badge-light-info text-info">Medium</span></td>
                                <td>$23.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round rounded-circle text-white d-inline-block text-center bg-success">B</span></td>
                                <td>
                                    <h6 class="font-weight-medium mb-0 nowrap">Bhavesh patel</h6><small class="text-muted no-wrap">Developer</small></td>
                                <td>MedicalPro Theme</td>
                                <td><span class="badge badge-light-danger text-danger">High</span></td>
                                <td>$12.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round rounded-circle text-white d-inline-block text-center bg-primary">N</span></td>
                                <td>
                                    <h6 class="font-weight-medium mb-0 nowrap">Nirav Joshi</h6><small class="text-muted no-wrap">Frontend Eng</small></td>
                                <td>Elite Admin</td>
                                <td><span class="badge badge-light-success text-success">Low</span></td>
                                <td>$10.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round rounded-circle text-white d-inline-block text-center bg-warning">M</span></td>
                                <td>
                                    <h6 class="font-weight-medium mb-0 nowrap">Micheal Doe</h6><small class="text-muted no-wrap">Content Writer</small></td>
                                <td>Helping Hands</td>
                                <td><span class="badge badge-light-danger text-danger">High</span></td>
                                <td>$12.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round rounded-circle text-white d-inline-block text-center bg-danger">N</span></td>
                                <td>
                                    <h6 class="font-weight-medium mb-0 nowrap">Johnathan</h6><small class="text-muted no-wrap">Graphic</small></td>
                                <td>Digital Agency</td>
                                <td><span class="badge badge-light-danger text-danger">High</span></td>
                                <td>$2.6K</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex no-block">
                        <h4 class="card-title">Weather Report</h4>
                        <div class="ml-auto">
                            <select class="custom-select">
                                <option selected>Today</option>
                                <option value="1">Weekly</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-row mt-4">
                        <div class="p-2 display-5 text-info"><i class="wi wi-day-showers"></i> <span>73<sup>°</sup></span></div>
                        <div class="p-2">
                            <h3 class="mb-0">Saturday</h3><small>Ahmedabad, India</small></div>
                    </div>
                    <table class="table table-borderless">
                        <tr>
                            <td>Wind</td>
                            <td class="font-weight-medium">ESE 17 mph</td>
                        </tr>
                        <tr>
                            <td>Humidity</td>
                            <td class="font-weight-medium">83%</td>
                        </tr>
                        <tr>
                            <td>Pressure</td>
                            <td class="font-weight-medium">28.56 in</td>
                        </tr>
                        <tr>
                            <td>Cloud Cover</td>
                            <td class="font-weight-medium">78%</td>
                        </tr>
                        <tr>
                            <td>Ceiling</td>
                            <td class="font-weight-medium">25760 ft</td>
                        </tr>
                    </table>
                    <ul class="list-unstyled row text-center city-weather-days border-top m-0 pt-3">
                        <li class="col col-6 col-md-3 text-center mt-2 pt-1"><i class="d-block font-20 text-info wi wi-day-sunny"></i><span class="d-block tetxt-muted text-nowrap pt-2">09:30</span>
                            <h3 class="font-weight-light mt-1">70<sup>°</sup></h3></li>
                        <li class="col col-6 col-md-3 text-center mt-2 pt-1"><i class="d-block font-20 text-info wi wi-day-cloudy"></i><span class="d-block tetxt-muted text-nowrap pt-2">11:30</span>
                            <h3 class="font-weight-light mt-1">72<sup>°</sup></h3></li>
                        <li class="col col-6 col-md-3 text-center mt-2 pt-1"><i class="d-block font-20 text-info wi wi-day-hail"></i><span class="d-block tetxt-muted text-nowrap pt-2">13:30</span>
                            <h3 class="font-weight-light mt-1">75<sup>°</sup></h3></li>
                        <li class="col col-6 col-md-3 text-center mt-2 pt-1"><i class="d-block font-20 text-info wi wi-day-sprinkle"></i><span class="d-block tetxt-muted text-nowrap pt-2">15:30</span>
                            <h3 class="font-weight-light mt-1">76<sup>°</sup></h3></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-responsive" src="{{ asset('') }}assets/images/big/img1.jpg" alt="Card">
                <div class="card-body">
                    <ul class="list-inline font-14">
                        <li class="list-inline-item">20 May 2016</li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="link">3 Comment</a></li>
                    </ul>
                    <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-responsive" src="{{ asset('') }}assets/images/big/img2.jpg" alt="Card">
                <div class="card-body">
                    <ul class="list-inline font-14">
                        <li class="list-inline-item">20 May 2016</li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="link">3 Comment</a></li>
                    </ul>
                    <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-responsive" src="{{ asset('') }}assets/images/big/img4.jpg" alt="Card">
                <div class="card-body">
                    <ul class="list-inline font-14">
                        <li class="list-inline-item">20 May 2016</li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="link">3 Comment</a></li>
                    </ul>
                    <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Comments</h4>
                </div>
                <!-- ============================================================== -->
                <!-- Comment widgets -->
                <!-- ============================================================== -->
                <div class="comment-widgets scrollable position-relative mb-2" style="height: 450px;">
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row p-3">
                        <div class="p-2"><span class="round text-white d-inline-block text-center"><img src="{{ asset('') }}assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></span></div>
                        <div class="comment-text w-100 py-1 py-md-3 pr-md-3 pl-md-4 px-2">
                            <h5>James Anderson</h5>
                            <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                            <div class="comment-footer">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="badge badge-light-info text-info">Pending</span>
                                <span class="action-icons">
                                                    <a href="javascript:void(0)" class="pl-3 align-middle"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)" class="pl-3 align-middle"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)" class="pl-3 align-middle"><i class="ti-heart"></i></a>
                                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row p-3 active">
                        <div class="p-2"><span class="round text-white d-inline-block text-center"><img src="{{ asset('') }}assets/images/users/2.jpg" alt="user" width="50" class="rounded-circle"></span></div>
                        <div class="comment-text active w-100 py-1 py-md-3 pr-md-3 pl-md-4 px-2">
                            <h5>Michael Jorden</h5>
                            <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                            <div class="comment-footer ">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="badge badge-light-success text-success">Approved</span>
                                <span class="action-icons active">
                                                    <a href="javascript:void(0)" class="pl-3 align-middle"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)" class="pl-3 align-middle"><i class="icon-close"></i></a>
                                                    <a href="javascript:void(0)" class="pl-3 align-middle"><i class="ti-heart text-danger"></i></a>
                                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row p-3">
                        <div class="p-2"><span class="round text-white d-inline-block text-center"><img src="{{ asset('') }}assets/images/users/3.jpg" alt="user" width="50" class="rounded-circle"></span></div>
                        <div class="comment-text w-100 py-1 py-md-3 pr-md-3 pl-md-4 px-2">
                            <h5>Johnathan Doeting</h5>
                            <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                            <div class="comment-footer">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="badge badge-light-danger text-danger">Rejected</span>
                                <span class="action-icons">
                                                    <a href="javascript:void(0)" class="pl-3 align-middle"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)" class="pl-3 align-middle"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)" class="pl-3 align-middle"><i class="ti-heart"></i></a>
                                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row p-3">
                        <div class="p-2"><span class="round text-white d-inline-block text-center"><img src="{{ asset('') }}assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle"></span></div>
                        <div class="comment-text w-100 py-1 py-md-3 pr-md-3 pl-md-4 px-2">
                            <h5>James Anderson</h5>
                            <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                            <div class="comment-footer">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="badge badge-light-info text-info">Pending</span>
                                <span class="action-icons">
                                                        <a href="javascript:void(0)" class="pl-3 align-middle"><i class="ti-pencil-alt"></i></a>
                                                        <a href="javascript:void(0)" class="pl-3 align-middle"><i class="ti-check"></i></a>
                                                        <a href="javascript:void(0)" class="pl-3 align-middle"><i class="ti-heart"></i></a>
                                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">To Do list</h4>
                        <div class="ml-auto">
                            <button class="btn btn-sm btn-rounded btn-success" data-toggle="modal" data-target="#myModal">Add Task</button>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- To do list widgets -->
                    <!-- ============================================================== -->
                    <div class="to-do-widget mt-3 scrollable"  style="height: 444px;">
                        <!-- .modal for add task -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Task</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" class="form-control" placeholder="Enter email">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                            <li class="list-group-item border-0 mb-0 py-3 pr-3 pl-0" data-role="task">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                    <label for="inputSchedule" class="font-weight-normal"> <span>Schedule meeting with</span> </label>
                                </div>
                                <ul class="assignedto list-inline m-0 pl-4 ml-1">
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('') }}assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('') }}assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('') }}assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('') }}assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                </ul>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pr-3 pl-0" data-role="task">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                    <label for="inputCall" class="font-weight-normal"> <span>Give Purchase report to</span> <span class="badge badge-light-danger text-danger">Today</span> </label>
                                </div>
                                <ul class="assignedto m-0 pl-4 ml-1 list-inline">
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('') }}assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('') }}assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                </ul>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pr-3 pl-0" data-role="task">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                    <label for="inputBook" class="font-weight-normal"> <span>Book flight for holiday</span> </label>
                                </div>
                                <div class="item-date font-12 pl-4 ml-1 d-inline-block"> 26 jun 2020</div>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pr-3 pl-0" data-role="task">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                    <label for="inputForward" class="font-weight-normal"> <span>Forward all tasks</span> <span class="badge badge-light-warning text-warning">2 weeks</span> </label>
                                </div>
                                <div class="item-date font-12 pl-4 ml-1 d-inline-block"> 26 jun 2020</div>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pr-3 pl-0" data-role="task">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                    <label for="inputRecieve" class="font-weight-normal"> <span>Recieve shipment</span> </label>
                                </div>
                                <div class="item-date font-12 pl-4 ml-1 d-inline-block"> 26 jun 2020</div>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pr-3 pl-0" data-role="task">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputpayment" name="inputCheckboxespayment">
                                    <label for="inputpayment" class="font-weight-normal"> <span>Send payment today</span> </label>
                                </div>
                                <div class="item-date font-12 pl-4 ml-1 d-inline-block"> 26 jun 2020</div>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pr-3 pl-0" data-role="task">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                    <label for="inputForward2" class="font-weight-normal"> <span>Important tasks</span> <span class="badge badge-light-success text-success">2 weeks</span> </label>
                                </div>
                                <ul class="assignedto m-0 pl-4 ml-1 list-inline">
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('') }}assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Steave"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('') }}assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Jessica"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('') }}assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Selina"></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
@endsection



@section('css')

    <link href="{{ asset('') }}assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/extra-libs/c3/c3.min.css" rel="stylesheet">
{{--    <link href="{{ asset('') }}assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">--}}

@endsection



@section('scripts')

    <script src="{{ asset('') }}assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="{{ asset('') }}assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="{{ asset('') }}assets/libs/echarts/dist/echarts.min.js"></script>
    <!--c3 charts -->
    <script src="{{ asset('') }}assets/libs/d3/dist/d3.min.js"></script>
    <script src="{{ asset('') }}assets/libs/c3/c3.min.js"></script>
    <script src="{{ asset('') }}js/pages/dashboards/dashboard1.js"></script>

{{--    <script src="{{ asset('') }}assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>--}}
{{--    <script src="{{ asset('') }}assets/extra-libs/sweetalert2/sweet-alert.init.js"></script>--}}

{{--    <script>--}}

{{--        const Toast = Swal.mixin({--}}
{{--            toast: true,--}}
{{--            position: 'top-end',--}}
{{--            showConfirmButton: false,--}}
{{--            timer: 10000,--}}
{{--            timerProgressBar: true,--}}
{{--            onOpen: (toast) => {--}}
{{--                toast.addEventListener('mouseenter', Swal.stopTimer)--}}
{{--                toast.addEventListener('mouseleave', Swal.resumeTimer)--}}
{{--            }--}}
{{--        });--}}

{{--        Toast.fire({--}}
{{--            icon: 'success',--}}
{{--            title: 'Signed in successfully',--}}
{{--        })--}}
{{--    </script>--}}
@endsection
