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
                            <li class="active">รายเดือน</li>
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
                        <strong class="card-title">โปรดเลือก</strong>
                        <form id="formSummaryMonthly" action="./monthly_db.php" method="post">
                            <div class="row form-group">
                                <div class="input-group col-lg-4">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="month" id="input-month_start" name="month_start" class="form-control" required>
                                </div>
                                 <strong class="card-title">ถึง</strong>
                                <div class="input-group col-lg-4">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="month" id="input-month_end" name="month_end" class="form-control" required>
                                </div>
                                <div class="col-lg-1">
                                    <button class="btn btn-primary" type="submit">เรียกดู</button>
                                 </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body card-block">
                    <div class="row justify-content-center">
                        <h4></h4>
                        <div class="col-lg-8 col-md-10">
                            <div class="card-body">
                                <canvas id="monthlyBarChart"></canvas>
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

        function callServices(type, typeData, url, async, data, callBack) {
            $.ajax({
                type: type,
                dataType: typeData,
                beforeSend: function (jqXHR, settings) {
                    //ใส่ Effect loading
                },
                url: url,
                data: data,
                contentType: "application/json; charset=utf-8",
                async: async,
                success: function (msg) {
                    return callBack(msg);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(errorThrown);
                    //fix bug error not set false

                },
                complete: function (jqXHR, textStatus) {
                    // console.log("complete",textStatus,jqXHR);
                }
            });
        }

        $('#input-month_start').change(function (e) {
            const input_month_end = $("#input-month_end");
            if(input_month_end.val() != "") {
                input_month_end.val("")
            }
            let month_val = parseInt($(this).val().split('-')[1])
            input_month_end.attr('min', $(this).val());
        });

        var chart = createChart()

        $('#formSummaryMonthly').submit(function (e) {
            let form_values = $(this).serializeArray();
            let data = { 
                month_start: form_values[0]['value'], 
                month_end: form_values[1]['value'] 
            }

            callServices('GET', "JSON", './monthly_db.php', false, data, function (results) {
                let labelTypeMoney = [];
                let data = {"exp_real": [], "exp_target": []};
                results.forEach(element => {
                    labelTypeMoney.push(element['typemoney_name']);
                    data['exp_real'].push(element['exp_real']);
                    data['exp_target'].push(element['exp_target']);
                });
                removeData(chart);
                addData(chart, labelTypeMoney, data);
            });
            e.preventDefault();

        });

        function removeData(chart) {
            chart.data.labels = [];
            chart.data.datasets.forEach((dataset) => {
                dataset.data = [];
            });
            chart.update();
        }

        function addData(chart, labels, data) {
            chart.data.labels = labels;
            chart.data.datasets.forEach((dataset, ind) => {
                if(ind == 0) {
                    dataset.data = data['exp_real'];
                } else if(ind == 1) {
                    dataset.data = data['exp_target'];
                }
            });
            chart.update();
        }

        //bar chart
        function createChart() {
            var ctx = $("#monthlyBarChart")[0];
            //    ctx.height = 200;
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [],
                    datasets: [{
                            data: [],
                            label: "เป้าหมาย",
                            borderColor: "rgba(0, 194, 146, 0.9)",
                            borderWidth: "0",
                            backgroundColor: "rgba(0, 194, 146, 0.5)"
                        },
                        {
                            data: [],
                            label: "ค่าใช้จ่ายจริง",
                            borderColor: "rgba(0,0,0,0.09)",
                            borderWidth: "0",
                            backgroundColor: "rgba(0,0,0,0.07)"
                        }
                    ]
                },
                options: {
                    title: {
                        display: true,
                        text: 'กราฟแสดงการเปรียบเทียบระหว่างค่าใช้จ่ายจริงกับเป้าหมาย'
                    },
                    responsive: true,
                    legend: {
                        position: "top"
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    }
                }
            });
            return myChart
        }
            

    });
</script>