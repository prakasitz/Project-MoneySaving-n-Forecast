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
                        <h1>สรุปธุรกรรมประจำวัน</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">บันทึกประจำวัน</a></li>
                            <li class="active">สรุปธุรกรรมประจำวัน</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">สรุปธุรกรรมประจำวัน<strong>
                </div>
                
                <div class="card-body card-block">
                    <div class="row justify-content-start">
                        <form action="#" id="form-record-income" method="post" class="col-sm-10">
                            <div class="form-row">
                                <div class="col-sm-12 col-md-8 col-lg-6 form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="date" id="input-date" name="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-6 form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                        <input type="text" id="input-note" name="note" class="form-control"
                                            placeholder="ยอดคงเหลือ">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <h3>รายรับ</h3>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>รายการ</th>
                                        <th>จำนวนเงิน</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>เงินเดือน</td>
                                        <td>15,000.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <h3>รายจ่าย</h3> 
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>รายการ</th>
                                        <th>จำนวนเงิน</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>การออม&การลงทุน</td>
                                        <td>15,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>สาธารณูปโภค</td>
                                        <td>4,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>ครอบครัว&ส่วนตัว</td>
                                        <td>3,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>สัทนาการ</td>
                                        <td>1,500.00</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>หนี้สิน</td>
                                        <td>1,500.00</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>อื่นๆ</td>
                                        <td>1,500.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="Total">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="Total">
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
    

    <script src="<?= ROOT ?>/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?= ROOT ?>/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/init/datatables-init.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {

            var tableShowOrder = $('#tableShowOrder').DataTable();


            $('#filter').change(function (e) {
                var searchTypeOrder = $('select[name=search-typeorder]').val();
                var typeOrderIndex = $('select[name=search-typeorder]').attr('for-col');

                // console.log(searchTypeOrder, typeOrderIndex);
                


                
                $('#tableOrder-wapper').fadeOut( 100,function() {
                    tableShowOrder.column(typeOrderIndex)
                     .search(searchTypeOrder).draw();
                }).fadeIn()

                e.preventDefault(100);

            });
        });
    </script>


</body>
</html>

