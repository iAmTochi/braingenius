@extends('layouts.app')

@section('content')

    <!-- Row -->
    <div class="row justify-content-md-center">
             <div class="col-12">

                <div class="card">
                    <div class="card-body">

                        <div class="text-right mb-2">
                            <a href="{{ route('staff.create') }}" type="button" class="btn waves-effect waves-light btn-rounded btn-primary" >Add New Staff</a>
                        </div>
{{--                        <div class="text-left">--}}

{{--                        </div>--}}
                        <div class="table-responsive">

                            <table id="scroll_hor" class="table table-hover table-striped table-bordered display no-wrap"
                                   style="width:100%">
                                <thead class="bg-primary text-white">
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email Address</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($staffs as $staff)
                                    <tr>
                                        <td>{{ ++$count }}</td>
                                        <td>
                                            <a href="{{ route('staff.show', $staff->uuid) }}">
                                                {{ $staff->last_name.' '.$staff->first_name.' '.$staff->other_name }}
                                            </a>
                                        </td>
                                        <td>{{ $staff->username }}</td>
                                        <td>{{ $staff->email }}</td>
                                        <td>{{ $staff->phone }}</td>

                                        <td >
                                            <form action="{{ route('staff.destroy', $staff->uuid) }}" method="POST" class="deleteUser">
                                                @csrf @method('DELETE')
                                                <button type="button"  class="btn btn-danger btn-circle deleteBtn"><i class="fa fa-times"></i> </button>
                                            </form>
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
    <link href="{{ asset('') }}assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
@endsection



@section('scripts')
    <!--This page plugins -->>
    <script src="{{ asset('') }}js/pages/forms/select2/select2.init.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/custom-datatable.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/datatable-basic.init.js"></script>

    <script src="{{ asset('') }}assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('') }}assets/extra-libs/sweetalert2/sweet-alert.init.js"></script>
    <script src="{{ asset('') }}js/main.js"></script>
    @include('partials.sweet_alert')


@endsection
