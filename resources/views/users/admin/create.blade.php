@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <h4 class="card-subtitle"> Enter the new Administrator Details </h4>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="username">Preferred Username</label>
                                    <input required value="{{ old('username') }}" type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username">
                                    <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('username')}}</strong>
                                    </span>

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="type">Admin Type</label>
                                    <select  required id="type" name="type" class="select2 @error('type') is-invalid @enderror" style="width: 100%">
                                        <option value=""></option>
                                        <option value="lvl04" {{ (old('type') == 'lvl04')?'selected':''  }}>Regular Admin</option>
                                        <option value="lvl05" {{ (old('type') == 'lvl05')?'selected':''  }}>Super Admin</option>
                                    </select>
                                    <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('type')}}</strong>
                                    </span>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="last_name">Last Name</label>
                                    <input required value="{{ old('last_name') }}" type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="last_name">
                                    <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('last_name')}}</strong>
                                </span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="first_name">First Name</label>
                                    <input required value="{{ old('first_name') }}" type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name">
                                    <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('first_name')}}</strong>
                                </span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="other_name">Other Name</label>
                                    <input  value="{{ old('other_name') }}" type="text" name="other_name" class="form-control @error('other_name') is-invalid @enderror" id="other_name">
                                    <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('other_name')}}</strong>
                                </span>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="gender">Gender</label>
                                    <select required id="gender" name="gender" class="select2 @error('gender') is-invalid @enderror" style="width: 100%">
                                        <option value=""></option>
                                        <option value="m" {{ (old('gender') == 'm')?'selected':''  }}>Male</option>
                                        <option value="f" {{ (old('gender') == 'f')?'selected':''  }}>Female</option>
                                    </select>
                                    <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('gender')}}</strong>
                                </span>

                                </div>
                                <div class="form-group col-md-3">
                                    <label for="dob">Date of birth</label>
                                    <input required value="{{ old('dob') }}" name="dob" type="text" class="form-control mdate @error('dob') is-invalid @enderror" id="dob">
                                    <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('dob')}}</strong>
                                </span>

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="address">Home Address</label>
                                    <input required value="{{ old('address') }}" name="address" type="text" class="form-control @error('address') is-invalid @enderror" id="address">
                                    <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('address')}}</strong>
                                </span>

                                </div>
                            </div>



                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="image">Upload Staff Passport</label>
                                    <input name="image" type="file" class="form-control @error('image') is-invalid @enderror" id="image">
                                    <div class="text-primary">(JPG, JPEG or PNG. Max size: 50kb)</div>
                                    <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('image')}}</strong>
                                    </span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">Email Address</label>
                                    <input required value="{{ old('email') }}" name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email">
                                    <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="phone">Phone number</label>
                                    <input required value="{{ old('phone') }}" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="phone">
                                    <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('phone')}}</strong>
                                </span>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-rounded mr-3"> <i class="fa fa-check"></i> Save</button>
                            <button type="button" onclick="window.history.back();" class="btn btn-dark btn-rounded">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
