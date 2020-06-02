<?php 
    $_GET["isShowNav"] = 1;
    require_once '../config.php';
    include_once '../includes/header.php';
?>
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>การพยากรณ์รายจ่าย</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">การพยากรณ์รายจ่าย</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">การพยากรณ์</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10">
                                <div class="card-body">
                                    <canvas id="forecastLineChart"></canvas>
                                    <form id="formSummaryMonthly" action="" method="post">
                                    </form>
                                </div>
                                <h5 align = 'center' >***ข้อมูลในการพยากรณ์อย่างน้อย 3 เดือน***</h5>
                                <h5 align = 'center' >***กรุณากรอกข้อมูลทุกเดือนเพื่อ***</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once '../includes/footer.php';
?>
<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/google-palette@1.1.0/palette.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
<!--Chartist Chart-->
<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

<!--Local Stuff-->
<script>
    jQuery(document).ready(function ($) {
        "use strict";
        //bar chart
        var ctx = $("#forecastLineChart")[0];
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [ "2012", "2013", "2014", "2015", "2016", "2017", "2018" ],
                type: 'line',
                datasets: [{
                        label: "Expense",
                        data: [ 0, 30, 15, 110, 50, 63, 120 ],
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(220,53,69,0.75)',
                        borderWidth: 3,
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointBorderColor: 'transparent',
                        pointBackgroundColor: 'rgba(220,53,69,0.75)',
                    },
                    {
                        label: "Focecast",
                        data: [ 0, 50, 40, 80, 35, 99, 80 ],
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(40,167,69,0.75)',
                        borderWidth: 3,
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointBorderColor: 'transparent',
                        pointBackgroundColor: 'rgba(40,167,69,0.75)',
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,

                legend: {
                    display: true,
                    labels: {
                        usePointStyle: true,
                        fontFamily: 'Montserrat',
                    },
                },

                tooltips: {
                    mode: 'index',
                    titleFontSize: 12,
                    titleFontColor: '#000',
                    bodyFontColor: '#000',
                    backgroundColor: '#fff',
                    titleFontFamily: 'Montserrat',
                    bodyFontFamily: 'Montserrat',
                    cornerRadius: 3,
                    intersect: false,
                },

                scales: {
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: false,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }],
                },

                title: {
                    display: false,
                    text: 'Normal Legend'
                }
            }
        });

    });
</script>