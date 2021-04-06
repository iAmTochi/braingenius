@extends('layouts.app')

@section('content')

    <!-- Row -->
    <div class="row justify-content-md-center">
        <div class="col-12">

            <div class="card">
                <div class="card-body">



                    <div class="table-responsive">

                        <table id="scroll_hor" class="table table-hover table-striped table-bordered display no-wrap"
                               style="width:100%">
                            <thead class="bg-primary text-white">
                            <tr>
                                <th>S/N</th>
                                <th>Guardian Name</th>
                                <th>Username</th>
                                <th>Email Address</th>
                                <th>Phone</th>
                                <th>Wards</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($guardians as $guardian)
                                <tr>
                                    <td>{{ ++$count }}</td>
                                    {{--                                    <td><img src="{{ asset('storage/'.$student->image)  }}" alt="user" class="rounded-circle" width="31"></td>--}}
                                    <td>
                                        <img src="{{ asset('storage/'.$guardian->image)  }}" alt="user" class="rounded-circle" width="31">
                                        <a href="{{ route('guardian.show', $guardian->user_uuid) }}">
                                            {{ $guardian->last_name.' '.$guardian->first_name.' '.$guardian->other_name }}
                                        </a>
                                    </td>
                                    <td>{{ $guardian->user->username }}</td>
                                    <td>{{ $guardian->email }}</td>
                                    <td>{{ $guardian->phone }}</td>


                                    <td >
                                        {{ $guardian->students()->count() }}
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
    <!--This page plugins -->
    <script src="{{ asset('') }}js/pages/forms/select2/select2.init.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/custom-datatable.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/datatable-basic.init.js"></script>

    <script src="{{ asset('') }}assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('') }}assets/extra-libs/sweetalert2/sweet-alert.init.js"></script>
    <script src="{{ asset('') }}js/main.js"></script>
    @include('partials.sweet_alert')


@endsection
