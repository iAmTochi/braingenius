@extends('layouts.app')

@section('content')

    <!-- Row -->
    <div class="row justify-content-md-center">
        @isset($subject)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Subject</h4>
                        <h6 class="card-subtitle"><small>Subject Name</small></h6>
                        <form action="{{ route('subject.update', $subject->uuid) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="arm">Subject Name</label>
                                        <input id="arm" value="{{ $subject->dept_name }}" name="dept_name" type="text" class="form-control @error('dept_name') is-invalid @enderror">
                                        @error('dept_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="arm">Subject Name</label>
                                        <input id="arm" value="{{ $subject->dept_name }}" name="dept_name" type="text" class="form-control @error('dept_name') is-invalid @enderror">
                                        @error('dept_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="arm">Subject Name</label>
                                        <input id="arm" value="{{ $subject->dept_name }}" name="dept_name" type="text" class="form-control @error('dept_name') is-invalid @enderror">
                                        @error('dept_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-rounded btn-primary">Update Subject</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        @else

            <div class="col-12">

                <div class="card">
                    <div class="card-body">

{{--                        <div class="d-flex justify-content-between mb-3">--}}
                        <div class="text-right">
                            <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary" data-toggle="modal" data-target="#addSubjectModal">New Subject</button>
                        </div>
                            <div class="text-left">
                                <h class="subtitle">List of existing school subjects below</h>
{{--                                <h6 class="card-subtitle">List of existing school subjects below</h6>--}}
                            </div>

{{--                        </div>--}}
                        <div class="table-responsive">
                            @include('partials.notify')
                            <table id="scroll_hor" class="table table-hover table-striped table-bordered display no-wrap"
                                   style="width:100%">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>S/N</th>
                                    <th>Subject Name</th>
                                    <th>Short Name</th>
                                    <th>Subject Department</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subjects as $subject)
                                    <tr>
                                        <td>{{ ++$subjectCount }}</td>
                                        <td>{{ $subject->full_name }}</td>
                                        <td>{{ $subject->short_name }}</td>
                                        <td>{{ $subject->dept_name }} </td>

                                        <td >
                                            <a href="{{ route('subject.edit', $subject->uuid) }}" class="btn btn-info btn-circle mr-2"><i class="fa py-0 px fa-edit"></i> </a>
                                            <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i> </button>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        @endisset
    </div>
    <!-- ./Row -->
    <!-- Row -->

    <!-- ./Row -->

    <div class="modal fade" id="addSubjectModal" tabindex="-1" role="dialog" aria-labelledby="subjectModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="subjectModalLabel">Create A New Subject</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="addSubject" action="{{ route('subject.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="control-label">Subject Name</label>
                            <input type="text"  class="form-control" id="name" name="name" placeholder="Mathematics">
                        </div>
                        <div class="form-group">
                            <label for="short" class="control-label">Subject Short Name</label>
                            <input type="text"  class="form-control" id="short" name="short" placeholder="e.g. MATHS">
                        </div>
                        <div class="form-group">
                            <select name="dept_id" class="select2" style="width: 100%">
                                <option value="">Select Department</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->uuid }}">{{ $department->dept_name }}</option>
                                @endforeach
                            </select>

                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-rounded" data-dismiss="modal">Close</button>
                    <button type="submit" onclick="document.getElementById('addSubject').submit();" class="btn btn-primary btn-rounded"><i
                            class="fas fa-check"></i> Save</button>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('css')
    <!-- page CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/libs/select2/dist/css/select2.min.css">
    <link href="{{ asset('') }}assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
@endsection



@section('scripts')
    <!--This page plugins -->
    <script src="{{ asset('') }}assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="{{ asset('') }}assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="{{ asset('') }}js/pages/forms/select2/select2.init.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/custom-datatable.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/datatable-basic.init.js"></script>

@endsection
