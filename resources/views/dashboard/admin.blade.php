@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card card-body">
                <!-- Row -->
                <div class="row pt-2 pb-2">
                    <!-- Column -->
                    <div class="col pr-0">
                        <h1 class="font-weight-light">{{ $total_students }}</h1>
                        <h6 class="text-muted">Total Students</h6>
                    </div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="20%" class="css-bar mb-0 css-bar-primary css-bar-20"><i class="fas fa-users"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card card-body">
                <!-- Row -->
                <div class="row pt-2 pb-2">
                    <!-- Column -->
                    <div class="col pr-0">
                        <h1 class="font-weight-light">{{ $male_students }}</h1>
                        <h6 class="text-muted">Male Students</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="30%" class="css-bar mb-0 css-bar-danger css-bar-20"><i class="fas fa-male"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card card-body">
                <!-- Row -->
                <div class="row pt-2 pb-2">
                    <!-- Column -->
                    <div class="col pr-0">
                        <h1 class="font-weight-light">{{ $female_students }}</h1>
                        <h6 class="text-muted">Female Students</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="40%" class="css-bar mb-0 css-bar-warning css-bar-40"><i class="fas fa-female"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card card-body">
                <!-- Row -->
                <div class="row pt-2 pb-2">
                    <!-- Column -->
                    <div class="col pr-0">
                        <h1 class="font-weight-light">{{ $total_staff }}</h1>
                        <h6 class="text-muted">Total Staffs</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="60%" class="css-bar mb-0 css-bar-info css-bar-60"><i class="fas fa-users"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center no-block">
                        <h4 class="card-title font-weight-bold">Class Statistics</h4>
{{--                        <div class="ml-auto">--}}
{{--                            <select class="custom-select">--}}
{{--                                <option selected>January</option>--}}
{{--                                <option value="1">February</option>--}}
{{--                                <option value="2">March</option>--}}
{{--                                <option value="3">April</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table stylish-table mb-0 no-wrap v-middle table-bordered table-condensedbold">
                            <thead class="bg-info">
                            <tr>
                                <th class="font-weight-normal text-white border-0 border-bottom">Class</th>
                                <th class="font-weight-normal text-white border-0 border-bottom">Students</th>
                                <th class="font-weight-normal text-white border-0 border-bottom">Bio Data Completion Rate</th>
                                <th class="font-weight-normal text-white border-0 border-bottom"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($classes as  $class)
                            <tr>
                                <td style="width:50px;"><span class="round rounded-circle   text-white d-inline-block text-center bg-info">{{ $class->name }}</span></td>
                                <td>
                                    89
                                </td>
                                <td>
                                    <div class="progress" style="height: 15px;">
                                        <div class="progress-bar progress-xl progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">60%</div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-rounded btn-primary" >See details</button>
                                </td>


                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2" style="width:50px;" class="text-center"><span class="text-muted d-inline-block font-weight-bold">OVERALL</span></td>
                                <td>
                                    <div class="progress" style="height: 15px;">
                                        <div class="progress-bar progress-xl progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">60%</div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-rounded btn-primary" >See details</button>
                                </td>


                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex no-block">
                        <h3 class="card-title">SMS Users</h3>
{{--                        <div class="ml-auto">--}}
{{--                            <select class="custom-select">--}}
{{--                                <option selected="">January</option>--}}
{{--                                <option value="1">February</option>--}}
{{--                                <option value="2">March</option>--}}
{{--                                <option value="3">April</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
                    </div>
                    <div id="m-piechart" style="width:100%; height:272px;"></div>
                    <hr>
                    <div class="text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6 class="text-muted"><i class="fa fa-circle mr-1 text-primary"></i>Students</h6> </li>
                            <li class="list-inline-item">
                                <h6 class="text-muted"><i class="fa fa-circle mr-1 text-danger"></i>Guardians</h6> </li>
                            <li class="list-inline-item">
                                <h6 class="text-muted"><i class="fa fa-circle mr-1 text-megna"></i>Staffs</h6> </li>
                            <li class="list-inline-item">
                                <h6 class="text-muted"><i class="fa fa-circle mr-1 text-muted"></i>Administrators</h6> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->

@endsection



@section('css')

    <!-- Custom CSS -->
    <link href="{{ asset('') }}assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="{{ asset('') }}js/pages/chartist/chartist-init.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/extra-libs/css-chart/css-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
   

    <link href="{{ asset('') }}assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/extra-libs/c3/c3.min.css" rel="stylesheet">
{{--    <link href="{{ asset('') }}assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">--}}

@endsection



@section('scripts')


<!--This page JavaScript -->
<!--Morris JavaScript -->
<!--c3 charts -->
    <script src="{{ asset('') }}assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="{{ asset('') }}assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="{{ asset('') }}assets/libs/echarts/dist/echarts.min.js"></script>
    <script src="{{ asset('') }}assets/libs/d3/dist/d3.min.js"></script>

    <script src="{{ asset('') }}assets/libs/c3/c3.min.js"></script>
    <script src="{{ asset('') }}js/pages/dashboards/dashboard5.js"></script>

{{--    <script src="{{ asset('') }}assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>--}}
{{--    <script src="{{ asset('') }}assets/extra-libs/sweetalert2/sweet-alert.init.js"></script>--}}

{{--    <script>--}}

{{--        const Toast = Swal.mixin({--}}
{{--            toast: true,--}}
{{--            position: 'top-end',--}}
{{--            showConfirmButton: false,--}}
{{--            timer: 10000,--}}
{{--            timerProgressBar: true,--}}
{{--            onOpen: (toast) => {--}}
{{--                toast.addEventListener('mouseenter', Swal.stopTimer)--}}
{{--                toast.addEventListener('mouseleave', Swal.resumeTimer)--}}
{{--            }--}}
{{--        });--}}

{{--        Toast.fire({--}}
{{--            icon: 'success',--}}
{{--            title: 'Signed in successfully',--}}
{{--        })--}}
{{--    </script>--}}

<script>
    /*
Template Name: Monster Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: js
*/
    $(function () {
        "use strict";

        // ==============================================================
// doughnut chart option
// ==============================================================
        var chart = c3.generate({
            bindto: '#m-piechart',
            data: {
                columns: [
                    ['Students',        {{ $total_students }}],
                    ['Guardians',       {{ $total_guardians }}],
                    ['Staffs',          {{ $total_staff }}],
                    ['Administrators',  {{ $total_admin }}],
                ],
                type: 'donut',
                tooltip: {
                    show: true
                }
            },
            donut: {
                label: {
                    show: false
                },
                title: "",
                width: 25,
            },
            legend: {
                hide: true
            },
            color: {
                pattern: ['#745af2', '#f62d51', '#26c6da', '#dadada']
            }
        });


    });

    // var doughnutChart = echarts.init(document.getElementById('m-piechart'));
    // // specify chart configuration item and data
    // option = {
    //     tooltip: {
    //         trigger: 'item'
    //         , formatter: "{a} <br/>{b} : {c} ({d}%)"
    //     }
    //     , legend: {
    //         orient: 'horizontal'
    //         , x: 'center'
    //         , show: false
    //         , y: 'bottom'
    //         , data: ['80', '60', '20', '140']
    //     }
    //     , toolbox: {
    //         show: false
    //         , feature: {
    //             dataView: {
    //                 show: true
    //                 , readOnly: false
    //             }
    //             , magicType: {
    //                 show: false
    //                 , type: ['pie', 'funnel']
    //                 , option: {
    //                     funnel: {
    //                         x: '25%'
    //                         , width: '50%'
    //                         , funnelAlign: 'center'
    //                         , max: 1548
    //                     }
    //                 }
    //             }
    //             , restore: {
    //                 show: true
    //             }
    //             , saveAsImage: {
    //                 show: true
    //             }
    //         }
    //     }
    //     , color: ["#745af2", "#f62d51", "#26c6da", "#dadada"]
    //     , calculable: true
    //     , series: [
    //         {
    //             name: 'Source'
    //             , type: 'pie'
    //             , radius: ['80%', '90%']
    //             , itemStyle: {
    //                 normal: {
    //                     label: {
    //                         show: false
    //                     }
    //                     , labelLine: {
    //                         show: false
    //                     }
    //                 }
    //                 , emphasis: {
    //                     label: {
    //                         show: true
    //                         , position: 'center'
    //                         , textStyle: {
    //                             fontSize: '30'
    //                             , fontWeight: 'bold'
    //                         }
    //                     }
    //                 }
    //             }
    //             , data: [
    //                 {
    //                     value: 335
    //                     , name: '80%'
    //                 }
    //                 , {
    //                     value: 110
    //                     , name: '60%'
    //                 }
    //                 , {
    //                     value: 234
    //                     , name: '20%'
    //                 }
    //                 , {
    //                     value: 300
    //                     , name: '140%'
    //                 }
    //                 ]
    //             }
    //         ]
    // };
    // // use configuration item and data specified to show chart
    // doughnutChart.setOption(option, true), $(function () {
    //     function resize() {
    //         setTimeout(function () {
    //             doughnutChart.resize()
    //         }, 100)
    //     }
    //     $(window).on("resize", resize), $(".sidebartoggler").on("click", resize)
    // });
</script>
@endsection
