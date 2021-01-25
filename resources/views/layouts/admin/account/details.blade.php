@extends('layouts.admin.master')
@section('content')



<div class="container-fluid">


    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">
                    <small>Charts and graphs<br>UI Elements<br> <span class="c-white">ChartJS</span></small>
                </div>
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-graph3"></i>
                </div>
                <div class="header-title">
                    <h3>ChartJS</h3>
                    <small>
                        Simple HTML5 Charts using the canvas element
                    </small>
                </div>
            </div>
            <hr>
        </div>
    </div>


    <div class="row">

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                        <a class="panel-close"><i class="fa fa-times"></i></a>
                    </div>
                    Bar type chart
                </div>
                <div class="panel-body">
                    <div><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                        <canvas id="barOptions" height="460" width="768" style="display: block; width: 768px; height: 460px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                        <a class="panel-close"><i class="fa fa-times"></i></a>
                    </div>
                    Line type chart
                </div>
                <div class="panel-body">
                    <div><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                        <canvas id="lineOptions" height="460" width="768" style="display: block; width: 768px; height: 460px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                        <a class="panel-close"><i class="fa fa-times"></i></a>
                    </div>
                    Single Bar type chart
                </div>
                <div class="panel-body">
                    <div><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                        <canvas id="singleBarOptions" height="358" width="768" style="display: block; width: 768px; height: 358px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                        <a class="panel-close"><i class="fa fa-times"></i></a>
                    </div>
                    Line type chart without curve
                </div>
                <div class="panel-body">
                    <div><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                        <canvas id="sharpLineOptions" height="358" width="768" style="display: block; width: 768px; height: 358px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                        <a class="panel-close"><i class="fa fa-times"></i></a>
                    </div>
                    Polar type chart
                </div>
                <div class="panel-body">
                    <div><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                        <canvas id="polarOptions" height="460" width="768" style="display: block; width: 768px; height: 460px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                        <a class="panel-close"><i class="fa fa-times"></i></a>
                    </div>
                    Doughnut bar chart
                </div>
                <div class="panel-body">
                    <div><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                        <canvas id="doughnutChart" height="460" width="768" style="display: block; width: 768px; height: 460px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>





@stop

@section('custom-scripts')


<!-- Vendor scripts -->
<script src="/luna/vendor/pacejs/pace.min.js"></script>
<script src="/luna/vendor/jquery/dist/jquery.min.js"></script>
<script src="/luna/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/luna/vendor/chart.js/dist/Chart.min.js"></script>

<!-- App scripts -->
<script src="/luna/scripts/luna.js"></script>

<script>
    $(document).ready(function () {


        /**
         * Options for Line chart
         */

        var globalOptions = {
            responsive: true,
            legend: {
                labels:{
                    fontColor:"#90969D"
                }
            },
            scales: {
                xAxes: [{
                    ticks: {
                        fontColor: "#90969D"
                    },
                    gridLines: {
                        color: "#37393F"
                    }
                }],
                yAxes: [{
                    ticks: {
                        fontColor: "#90969D"
                    },
                    gridLines: {
                        color: "#37393F"
                    }
                }]
            }
        };

        var lineData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [

                {
                    label: "Data 1",
                    backgroundColor: 'transparent',
                    borderColor: "#f6a821",
                    pointBorderWidth: 0,
                    pointRadius: 2,
                    pointBorderColor: '#f6a821',
                    borderWidth: 1,
                    data: [16, 32, 18, 26, 42, 33, 44]
                },
                {
                    label: "Data 2",
                    backgroundColor: 'transparent',
                    borderColor: "#676B73",
                    pointBorderWidth: 0,
                    pointRadius: 2,
                    pointBorderColor: '#676B73',
                    borderWidth: 1,
                    data: [22, 44, 67, 43, 76, 45, 12]
                }
            ]
        };

        var c1 = document.getElementById("lineOptions").getContext("2d");
        new Chart(c1, {type: 'line', data: lineData, options: globalOptions});

        /**
         * Options for Sharp Line chart
         */
        var sharpLineData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Example dataset",
                    backgroundColor: 'rgba(246,168,33, 0.1)',
                    borderColor: "#f6a821",
                    pointBorderWidth: 0,
                    pointRadius: 2,
                    pointBorderColor: '#f6a821',
                    borderWidth: 1,
                    data: [33, 48, 40, 19, 54, 27, 54],
                    lineTension: 0
                }
            ]
        };

        var c2 = document.getElementById("sharpLineOptions").getContext("2d");
        new Chart(c2, {type: 'line', data: sharpLineData, options: globalOptions});


        /**
         * Data for Bar chart
         */
        var barData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Data 1",
                    backgroundColor: 'transparent',
                    borderColor: "#f6a821",
                    borderWidth: 1,
                    data: [9, 8, 5, 6, 3, 2, 16]
                },
                {
                    label: "Data 2",
                    backgroundColor: 'transparent',
                    borderColor: "#676B73",
                    borderWidth: 1,
                    data: [5, 5, 5, 4, 5, 2, 23]
                }
            ]
        };

        var c3 = document.getElementById("barOptions").getContext("2d");
        new Chart(c3, {type: 'bar', data: barData, options: globalOptions});

        /**
         * Options for Bar chart
         */

        /**
         * Data for Bar chart
         */
        var singleBarData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Data 0",
                    backgroundColor: 'transparent',
                    borderColor: "#f6a821",
                    borderWidth: 1,
                    data: [15, 20, 30, 40, 30, 50, 60]
                }
            ]
        };

        var c4 = document.getElementById("singleBarOptions").getContext("2d");
        new Chart(c4, {type: 'bar', data: singleBarData, options: globalOptions});


        var polarData = {
            datasets: [{
                data: [
                    120,
                    130,
                    100
                ],
                borderWidth: 0,
                backgroundColor: [
                    "rgba(246,168,33, 0.1)",
                    "rgba(246,168,33, 0.4)",
                    "rgba(246,168,33, 0.8)"
                ],
                label: 'My dataset' // for legend
            }],
            labels: [
                "Homer",
                "Inspinia",
                "Luna"
            ]
        };

        var c5 = document.getElementById("polarOptions").getContext("2d");
        new Chart(c5, {type: 'polarArea', data: polarData, options: globalOptions});


        var doughnutData = {
            labels: [
                "App",
                "Software",
                "Laptop"
            ],
            datasets: [
                {
                    data: [20, 120, 100],
                    borderWidth: 0,
                    backgroundColor: [
                        "rgba(246,168,33, 0.1)",
                        "rgba(246,168,33, 0.4)",
                        "rgba(246,168,33, 0.8)"
                    ],
                    hoverBackgroundColor: [
                        "#F6A821",
                        "#F6A821",
                        "#F6A821"
                    ]
                }]
        };


        var c6 = document.getElementById("doughnutChart").getContext("2d");
        new Chart(c6, {type: 'doughnut', data: doughnutData, options: globalOptions});

    });
</script>

</script>
@stop

