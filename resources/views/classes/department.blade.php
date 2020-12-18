@extends('layouts.app')

@section('content')

    <!-- Row -->
    <div class="row justify-content-md-center">
        @isset($department)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Department</h4>
                        <h6 class="card-subtitle"><small>Department Name</small></h6>
                        <form action="{{ route('department.update', $department->uuid) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group">
{{--                                        <label for="arm">Department Name</label>--}}
                                        <input id="arm" value="{{ $department->dept_name }}" name="dept_name" type="text" class="form-control @error('dept_name') is-invalid @enderror">
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
                                <button type="submit" class="btn btn-rounded btn-primary">Update Department</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        @else
            <!-- scroll horizontal -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
{{--                        <h5 class="card-title">{{ $title }}</h5>--}}
                        <div class="text-right mb-3">
                            <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary" data-toggle="modal" data-target="#addDepartmentModal">New Department</button>
                        </div>
                        <div class="table-responsive">
                            <table id="scroll_hor" class="table table-hover table-striped table-bordered display no-wrap"
                                   style="width:100%">
                                <thead class="bg-primary text-white">
                                <tr>
                                    <th>#</th>
                                    <th>Name of Department</th>
                                    <th>Head of Department</th>
                                    <th>Date Created</th>
                                    <th></th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($departments as $dept)
                                    <tr>
                                        <td>{{ ++$deptCount }}</td>
                                        <td>{{ $dept->dept_name }}</td>
                                        <td>{!!  (!empty($dept->hod)) ?'':'<small class="badge badge-danger badge-pill ">unassigned</small>' !!} </td>
                                        <td>{{ $dept->created_at->isoFormat('MMMM D, YYYY [at] h:mm A') }}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-info btn-circle mr-2"><i class="fa fa-users"></i> </button>


                                            <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-book"></i> </button>

                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('department.edit', $dept->uuid) }}" class=" btn btn-warning btn-circle mr-2"><i class="fa fa-edit"></i> </a>


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

    <div class="modal fade" id="addDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="departmentModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="departmentModalLabel">Create A New Department</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="addDepartment" action="{{ route('department.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="control-label">Name of Department</label>
                            <input type="text"  class="form-control" id="name" name="dept_name">
                        </div>
                        <div class="form-group">
                            <small class="text-info">
                                After creating this department, ensure to go the profile of the appropriate staff and make him/her the H.O.D of this department.
                            </small>
                        </div>
                   </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-rounded" data-dismiss="modal">Close</button>
                    <button type="submit" onclick="document.getElementById('addDepartment').submit();" class="btn btn-primary btn-rounded"><i
                            class="fas fa-check"></i> Save</button>
                </div>
            </div>
        </div>
    </div>



@endsection




@section('css')
    <link href="{{ asset('') }}assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
@endsection



@section('scripts')
    <!--This page plugins -->
    <script src="{{ asset('') }}assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/custom-datatable.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/datatable-basic.init.js"></script>

@endsection
