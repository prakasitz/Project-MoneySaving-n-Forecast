<?php session_start();?>
<?php
    $_GET["isShowNav"] = 1;
    require_once './config.php';
    require_once 'classes/DB.php';  
    include_once './includes/header.php';
    $sumIn = $_SESSION['sumvalIn'];
    $sumEx = $_SESSION['sumvalEx'];
    $balance = ($sumIn[0]['sumvalIn'])-($sumEx[0]['sumvalEx']);
    //print_r ($sumIn);
    //print_r ($sumEx);
    //print_r ($balance);
    
?>

<style>
    #weatherWidget .currentDesc {
        color: #ffffff !important;
    }

    .traffic-chart {
        min-height: 335px;
    }

    #flotPie1 {
        height: 150px;
    }

    #flotPie1 td {
        padding: 3px;
    }

    #flotPie1 table {
        top: 20px !important;
        right: -10px !important;
    }

    .chart-container {
        display: table;
        min-width: 270px;
        text-align: left;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    #flotLine5 {
        height: 105px;
    }

    #flotBarChart {
        height: 150px;
    }

    #cellPaiChart {
        height: 160px;
    }
</style>
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-cash"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">฿<span class="count"><?php echo $sumIn[0]['sumvalIn'] ?> </span></div>
                                    <h4 class="font-weight-bold">รายรับ</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-cart"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">฿<span class="count"><?php echo $sumEx[0]['sumvalEx'] ?></span></div>
                                    <h4 class="font-weight-bold">รายจ่าย</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">฿<span class="stat-text"><?php echo $balance ?></span></div>
                                    <h4 class="font-weight-bold">ยอดคงเหลือ</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Widgets -->
        <!--  Traffic  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">สัดส่วนการใช้เงิน</h4>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card-body">
                                <canvas id="TrafficChart"></canvas>  
                            </div>
                        </div>
                    </div> <!-- /.row -->
                    <div class="card-body"></div>
                </div>
            </div><!-- /# column -->
        </div>
        <!--  /Traffic -->
        <div class="clearfix"></div>

    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
    <?php
        include_once './includes/footer.php';
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
        jQuery(document).ready(function($) {
            "use strict";

            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                let ctx = $('#TrafficChart')[0];
                let dataForPieChart = {
                    data: [150, 400, 250],
                    label: [
                            'รายรับ',
                            'รายจ่าย',
                            'ยอดคงเหลือ'
                        ]
                };
                ctx.height = 150;
                let chart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: dataForPieChart.data,
                            backgroundColor: palette('tol', dataForPieChart.data.length).map(function(hex) {
                                return '#' + hex; 
                            })
                        }],
                        labels: dataForPieChart.label
                    },
                    options: {
                        responsive: true,
                        legend: {
                            position: 'right'
                        },
                        tooltips: {
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    let label = data.labels[tooltipItem.index]
                                    let val = data.datasets[0].data[tooltipItem.index];
                                    
                                    return label + ": ฿" + val;
                                }
                            }
                        }
                    }
                });
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>