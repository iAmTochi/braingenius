@extends('layouts.app')

@section('content')


    <!-- Row -->
    <div class="row justify-content-md-center">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        @include('partials.notify')
                        <table id="scroll_hor" class="table table-hover table-striped table-bordered display no-wrap"
                               style="width:100%">
                            <thead class="bg-primary text-white">
                            <tr>
                                <th>S/N</th>
                                <th>Class Arm</th>
                                <th>Students</th>
                                <th>Male</th>
                                <th>Female</th>
                                <th>Class Teacher</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($classArms as $class)
                                <tr>
                                    <td>{{ ++$classArmCount }}</td>
                                    <td>{{$class->name.$class->arm  }}</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
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
@endsection



@section('scripts')
    <!--This page plugins -->>
    <script src="{{ asset('') }}js/pages/forms/select2/select2.init.js"></script>
    <script src="{{ asset('') }}assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/custom-datatable.js"></script>
    <script src="{{ asset('') }}js/pages/datatable/datatable-basic.init.js"></script>

@endsection
