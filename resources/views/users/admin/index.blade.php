@extends('layouts.app')

@section('content')

    <!-- Row -->
    <div class="row justify-content-md-center">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <div class="text-left mb-3">
                        <a href="{{ route('admin.create') }}" type="button" class="btn waves-effect waves-light btn-rounded btn-primary" >Add New Administrator</a>
                    </div>

                    <div class="table-responsive">

                        <table id="scroll_hor" class="table table-hover table-striped table-bordered display no-wrap"
                               style="width:100%">
                            <thead class="bg-primary text-white">
                            <tr>
                                <th>S/N</th>
                                <th>Administrator Name</th>
                                <th>Username</th>
                                <th>Email Address</th>
                                <th>Phone</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{ ++$count }}</td>
                                    <td><a href="{{ route('admin.show',$admin->uuid) }}">{{ $admin->last_name.' '.$admin->first_name.' '.$admin->other_name }}</a></td>
                                    <td>{{ $admin->username }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->phone }}</td>
                                    <td>
                                        <span class="badge-info badge font-16">
                                            {{ $admin->type }}
                                        </span>
                                    <td >
                                        @if(auth()->user()->admin->uuid == $admin->uuid )
                                        {{ '' }}
                                            @else
                                            <form action="{{ route('admin.destroy', $admin->uuid) }}" method="POST" class="deleteUser">
                                                @csrf @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-circle deleteBtn"><i class="fa fa-times"></i> </button>
                                            </form>
                                         @endif

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
