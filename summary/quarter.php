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
                        <h1>สรุปรายรับรายจ่าย</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">สรุปรายรับรายจ่าย</a></li>
                            <li class="active">รายไตรมาส</li>
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
                        <strong class="card-title">รายไตรมาส</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10">
                                <div class="card-body">
                                    <canvas id="quarterBarChart"></canvas>
                                    <form id="formSummaryQuarter" action="" method="post">
                                        <div class="form-group row">
                                        <label class="col-2 col-form-label text-right" for="selectQuarter">ไตรมาส</label>
                                        <div class="col-10">
                                        <select class="selectpicker form-control" id="selectQuarter">
                                            <option>เลือกไตรมาส</option>
                                            <option value="1" selected>ไตรมาสที่ 1</option>
                                            <option value="2">ไตรมาสที่ 2</option>
                                            <option value="3">ไตรมาสที่ 3</option>
                                            <option value="4">ไตรมาสที่ 4</option>
                                        </select>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="stat-widget-five">
                                                <div class="stat-icon dib flat-color-1">
                                                    <i class="pe-7s-cash"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <div class="text-left dib">
                                                        <div class="stat-text"><span class="count">23569</span>
                                                        </div>
                                                        <h4 class="font-weight-bold">รายรับ</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="stat-widget-five">
                                                <div class="stat-icon dib flat-color-2">
                                                    <i class="pe-7s-cart"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <div class="text-left dib">
                                                        <div class="stat-text"><span class="count">3542</span></div>
                                                        <h4 class="font-weight-bold">รายจ่าย</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="stat-widget-five">
                                                <div class="stat-icon dib flat-color-3">
                                                    <i class="pe-7s-browser"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <div class="text-left dib">
                                                        <div class="stat-text"><span class="count">349</span></div>
                                                        <h4 class="font-weight-bold">เงินออม</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="stat-widget-four">
                                                 <div class="stat-icon dib">
                                                     <i class="ti-stats-up text-muted"></i>
                                                </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text">อาหาร & เครื่องดื่ม เยอะ</div>
                                                    <h4 class="font-weight-bold">คำแนะนำ</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
        var ctx = $("#quarterBarChart")[0];
        //    ctx.height = 200;
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["บิล", "เดินทาง", "การศึกษา", "หนี้สิน", "ช้อปปิ้ง", "บันเทิง", "อาหาร"],
                datasets: [{
                        label: "ค่าใช้จ่ายจริง",
                        data: [65, 59, 80, 81, 56, 55, 45],
                        borderColor: "rgba(0, 194, 146, 0.9)",
                        borderWidth: "0",
                        backgroundColor: "rgba(0, 194, 146, 0.5)"
                    },
                    {
                        label: "เป้าหมาย",
                        data: [28, 48, 40, 19, 86, 27, 76],
                        borderColor: "rgba(0,0,0,0.09)",
                        borderWidth: "0",
                        backgroundColor: "rgba(0,0,0,0.07)"
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    });
</script>
