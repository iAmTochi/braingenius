@extends('layouts.app')

@section('content')

    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @include('partials.notify')
                    <h4 class="card-title">Create Class Arm</h4>
                    <h6 class="card-subtitle"> <small>Add a new class arm to the system (e.g. JSS1A)</small></h6>
                    <form action="{{ route('class-arm.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="class_id" class="select2" style="width: 100%">
                                        <option value="">Select Class</option>
                                        @foreach($classes as $class)
                                            <option value="{{ $class->uuid }}">{{ $class->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <!--/span-->
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="arm_id" class="select2" style="width: 100%">
                                        <option value="">Select Arm</option>
                                        @foreach($arms as $arm)
                                            <option value="{{ $arm->uuid }}">{{ $arm->arm }}</option>
                                        @endforeach
                                        {{--                        <optgroup label="Alaskan/Hawaiian Time Zone">--}}
                                        {{--                            <option value="AK">Alaska</option>--}}
                                        {{--                            <option value="HI">Hawaii</option>--}}
                                        {{--                        </optgroup>--}}
                                    </select>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-rounded btn-primary">Create Class Arm</button>
                        </div>
                    </form>
                    </div>
            </div>

        </div>
    </div>
    <!-- ./Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Current Classes</h4>
                    <h6 class="card-subtitle"><small>Classes in the system</small></h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="bg-primary text-white">
                            <tr>
                                <th>S/N</th>
                                <th>Class Name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($classes as $class)
                            <tr>
                                <td>{{ ++$armCount }}</td>
                                <td>{{ $class->name }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

{{--            Create arm--}}
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Arm</h4>
                    <h6 class="card-subtitle"><small>Add a new arm into the system</small></h6>
                    <form action="{{ route('arm.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!--/span-->
                            <div class="col-md-12">
                                @include('partials.notify')
                                <div class="form-group">
                                    <label for="arm">Arm Name</label>
                                    <input id="arm" name="arm" type="text" class="form-control @error('arm') is-invalid @enderror" placeholder="e.g A">
                                    @error('arm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-rounded btn-primary">Create New Arm</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

{{--        Current Arm--}}
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Current Arms</h4>
                    <h6 class="card-subtitle"><small>Arms in the system</small></h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="bg-primary text-white">
                            <tr>
                                <th>S/N</th>
                                <th>Arm Name</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($arms as $arm)
                            <tr>
                                <td>{{++$classCount}}</td>
                                <td class="">{{ $arm->arm }}</td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-info btn-circle "><i class="fa fa-edit fa-1x"></i> </button>
                                    <button type="button" class="btn btn-danger btn-circle "><i class="fa fa-times fa-1x"></i> </button>

                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Row -->


@endsection


@section('css')
    <!-- page CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/libs/select2/dist/css/select2.min.css">
@endsection

@section('scripts')
    <script src="{{ asset('') }}assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="{{ asset('') }}assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="{{ asset('') }}js/pages/forms/select2/select2.init.js"></script>
@endsection
