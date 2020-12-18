@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-body">
            <h4 class="card-title">{{ $title }}</h4>
            <h5 class="card-subtitle"> Bootstrap Elements </h5>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="{{ route('staff.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="title">Title</label>
                                <input required value="{{ old('title') }}" type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title">
                                <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('title')}}</strong>
                                </span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="last_name">Last Name</label>
                                <input required value="{{ old('last_name') }}" type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="last_name">
                                <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('last_name')}}</strong>
                                </span>

                            </div>
                            <div class="form-group col-md-3">
                                <label for="first_name">First Name</label>
                                <input required value="{{ old('first_name') }}" type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name">
                                <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('first_name')}}</strong>
                                </span>

                            </div>
                            <div class="form-group col-md-3">
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
                            <div class="form-group col-md-3">
                                <label for="role">Staff Type</label>
                                <select  required id="role" name="role" class="select2 @error('role') is-invalid @enderror" style="width: 100%">
                                    <option value=""></option>
                                    <option value="1" {{ (old('type') == 1)?'selected':''  }}>Regular Staff</option>
                                    <option value="2" {{ (old('type') == 2)?'selected':''  }}>Bursar</option>
                                    <option value="3" {{ (old('type') == 3)?'selected':''  }}>Principal</option>
{{--                                    @foreach($types as $type)--}}

{{--                                    <option value="{{ $type->code }}"--}}
{{--                                        {{ ($type->code == 'admin 03') ? 'selected' : '' }}--}}
{{--                                    >--}}
{{--                                        {{ $type->type_name }}--}}
{{--                                    </option>--}}
{{--                                    @endforeach--}}
                                </select>
                                <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('role')}}</strong>
                                </span>

                            </div>
                            <div class="form-group col-md-3">
                                <label for="rank">Rank</label>
                                <input required value="{{ old('rank') }}" name="rank" type="text" class="form-control @error('rank') is-invalid @enderror" id="rank">
                                <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('rank')}}</strong>
                                </span>

                            </div>
                            <div class="form-group col-md-3">
                                <label for="academic_qualification">Academic Qualification</label>
                                <input required value="{{ old('academic_qualification') }}" name="academic_qualification" type="text" class="form-control @error('academic_qualification') is-invalid @enderror" id="academic_qualification">
                                <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('academic_qualification')}}</strong>
                                </span>

                            </div>
                            <div class="form-group col-md-3">
                                <label for="grade_level">Grade Level</label>
                                <input required value="{{ old('grade_level') }}" name="grade_level" type="text" class="form-control @error('grade_level') is-invalid @enderror" id="grade_level">
                                <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('grade_level')}}</strong>
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

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="sportHouse">Sport House(If any)</label>
                                <select id="sportHouse" name="sportHouse" class="select2 @error('sportHouse') is-invalid @enderror" style="width: 100%">
                                    <option value=""></option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </select>
                                <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('sportHouse')}}</strong>
                                </span>

                            </div>
                            <div class="form-group col-md-8">
                                <label for="department">Staff Department(s)</label>
                                <select required id="department" name="department[]" class="select2 form-control @error('department') is-invalid @enderror select2-hidden-accessible" multiple="" style="width: 100%;" data-select2-id="13" tabindex="-1" aria-hidden="true">
                                    @foreach($departments as $department)
                                        <option value="{{$department->uuid}}" data-select2-id="{{$department->uuid}}">{{ $department->dept_name }}</option>
                                    @endforeach
                                </select>
                                <span role="alert" class="invalid-feedback">
                                    <strong>{{$errors->first('department')}}</strong>
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
