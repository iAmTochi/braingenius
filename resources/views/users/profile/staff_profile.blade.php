@extends('layouts.app')


@section('content')
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="mt-4"> <img src="{{ (!empty($staff->image))? asset('storage/'.$staff->image) : Gravatar::src($staff->user->email) }}" alt="{{$staff->user->email}}" class="rounded-circle" width="150" />
                        <h4 class="card-title mt-2">{{ $staff->last_name.' '.$staff->first_name.' '.$staff->other_name }}</h4>
                        <h6 class="card-subtitle"><span class="badge badge-info font-14">Portal {{ ($staff->user->type=='lvl05')?'Super':'' }} Administrator</span></h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-weight-medium">254</font></a></div>
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-weight-medium">54</font></a></div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr> </div>
                <div class="card-body"> <small class="text-muted">Email address </small>
                    <h6><a >{{ $staff->user->email }}</a></h6>
                    <small class="text-muted pt-4 db">Phone</small>
                    <h6>{{ $staff->phone }}</h6>
                    <small class="text-muted pt-4 db">Address</small>
                    <h6>{{ $staff->address }}</h6>
                    <div class="map-box">
                        <iframe src="https://www.google.com/maps/embed?{{ $staff->address }}" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> <small class="text-muted pt-4 db">Social Profile</small>
                    <br/>
                    <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Tabs -->
                <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="pills-timeline" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#accountStatus" role="tab" aria-controls="pills-profile" aria-selected="false">Account Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#activityLog" role="tab" aria-controls="pills-setting" aria-selected="false">Activity Log</a>
                    </li>
                </ul>
                <!-- Tabs -->
                <div class="tab-content" id="pills-tabContent">
                    @include('partials.notify')
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('staff.update',$staff->uuid) }}" method="POST" enctype="multipart/form-data">
                                @csrf @method('PUT')
                                <div class="form-group row">
                                    <label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $staff->title }}">
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('title')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="last_name" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="last_name" value="{{ $staff->last_name }}">
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('last_name')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="first_name" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                    <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('address')}}</strong>
                                        </span>
                                    <div class="col-sm-9">
                                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name" value="{{ $staff->first_name }}">
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('first_name')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="other_name" class="col-sm-3 text-right control-label col-form-label">Other Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="other_name" class="form-control @error('other_name') is-invalid @enderror" id="other_name" value="{{ $staff->other_name }}">
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('other_name')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select required id="gender" name="gender" class="select2 @error('gender') is-invalid @enderror" style="width: 100%">

                                            <option value=""></option>
                                            <option value="m" {{ ($staff->gender == 'M') ? 'selected' : '' }} >Male</option>
                                            <option value="f" {{ ($staff->gender == 'F') ? 'selected' : '' }} >Female</option>
                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('gender')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" value="{{ $staff->user->email }}" name="email">
                                        <input disabled type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $staff->user->email }}">
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('email')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-3 text-right control-label col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ $staff->phone }}">
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('phone')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dob" class="col-sm-3 text-right control-label col-form-label">DOB</label>
                                    <div class="col-sm-9">
                                        <input required value="{{$staff->dob }}" name="dob" type="text" class="form-control mdate @error('dob') is-invalid @enderror" id="dob">
                                        <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('dob')}}</strong>
                                </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 text-right control-label col-form-label">House Address</label>
                                    <div class="col-sm-9">
                                        <textarea name="address" class="form-control @error('address') is-invalid @enderror" id="address" rows="2">{{ $staff->address }}</textarea>
                                    </div>
                                    <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('address')}}</strong>
                                        </span>
                                </div>

                                <hr>
                                <h4 class="card-title">Change Profile Passport</h4>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Select Image</label>

                                    <div class="col-sm-9">
                                        <input name="image" type="file" class="form-control @error('image') is-invalid @enderror" id="image">
                                        <div class="text-primary">(JPG, JPEG or PNG. Max size: 50kb)</div>
                                        <span role="alert" class="invalid-feedback">
                                                <strong>{{$errors->first('image')}}</strong>
                                            </span>
                                    </div>
                                </div>


                                <hr>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="accountStatus" role="tabpanel" aria-labelledby="pills-timeline-tab">
                        <div class="card-body">
                            <div class="profiletimeline mt-0">
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" /> </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                            <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 mb-3"><img src="../assets/images/big/img1.jpg" class="img-fluid rounded" /></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img src="../assets/images/big/img2.jpg" class="img-fluid rounded" /></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img src="../assets/images/big/img3.jpg" class="img-fluid rounded" /></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img src="../assets/images/big/img4.jpg" class="img-fluid rounded" /></div>
                                            </div>
                                            <div class="like-comm"> <a href="javascript:void(0)" class="link mr-2">2 comment</a> <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle" /> </div>
                                    <div class="sl-right">
                                        <div> <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                            <div class="mt-3 row">
                                                <div class="col-md-3 col-xs-12"><img src="../assets/images/big/img1.jpg" alt="user" class="img-fluid rounded" /></div>
                                                <div class="col-md-9 col-xs-12">
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="javascript:void(0)" class="btn btn-success"> Design weblayout</a></div>
                                            </div>
                                            <div class="like-comm mt-3"> <a href="javascript:void(0)" class="link mr-2">2 comment</a> <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle" /> </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                            <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                        </div>
                                        <div class="like-comm mt-3"> <a href="javascript:void(0)" class="link mr-2">2 comment</a> <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle" /> </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                            <blockquote class="mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="activityLog" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                    <br>
                                    <p class="text-muted">Johnathan Deo</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                    <br>
                                    <p class="text-muted">(123) 456 7890</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                    <br>
                                    <p class="text-muted"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="157f7a7d7b74617d747b557471787c7b3b767a78">[email&#160;protected]</a></p>
                                </div>
                                <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                    <br>
                                    <p class="text-muted">London</p>
                                </div>
                            </div>
                            <hr>
                            <p class="mt-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h4 class="font-weight-medium mt-4">Skill Set</h4>
                            <hr>
                            <h5 class="mt-4">Wordpress <span class="pull-right">80%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                            </div>
                            <h5 class="mt-4">HTML 5 <span class="pull-right">90%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                            </div>
                            <h5 class="mt-4">jQuery <span class="pull-right">50%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                            </div>
                            <h5 class="mt-4">Photoshop <span class="pull-right">70%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

@endsection


@section('css')
    <!-- page CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/libs/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">

@endsection

@section('scripts')
    <script src="{{ asset('') }}assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="{{ asset('') }}assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="{{ asset('') }}js/pages/forms/select2/select2.init.js"></script>

    <script src="{{ asset('') }}assets/libs/moment/moment.js"></script>
    <script src="{{ asset('') }}assets/libs/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker-custom.js"></script>
    <script>
        // MAterial Date picker
        $('.mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false }); // for date of birth
    </script>
@endsection

