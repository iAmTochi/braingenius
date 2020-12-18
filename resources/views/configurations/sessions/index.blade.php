@extends('layouts.app')

@section('content')

    <!-- Row -->
    <div class="row justify-content-md-center">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <div class="text-right mb-2">
                        @if($createNewSection)
                            <a href="{{ route('academic-sessions.create') }}" type="button" class="btn waves-effect waves-light btn-rounded btn-primary" >Create Next Term/Session</a>
                        @else
                            <a href="{{ route('move') }}"  class="btn waves-effect waves-light btn-rounded btn-primary" >Move To Next Term/Session</a>
                        @endif
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
                                <th>State Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sessions as $session)
                                <tr>
                                    <td>{{ ++$count }}</td>
                                    <td>
                                        {{ $session->term.' Term: '.$session->session.' '}}
                                        @if($session->uuid == $activeSession)
                                            <span class="badge-info badge font-16">
                                                CURRENTLY ACTIVE
                                            </span>
                                        @endif
                                    </td>
                                    <td>{{ $session->session_start }}</td>
                                    <td>{{ $session->session_end }}</td>

                                    <td >
                                        <a href="{{ route('academic-sessions.edit', $session->uuid) }}"  class="btn btn-primary btn-circle"><i class="fa fa-edit"></i> </a>

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

