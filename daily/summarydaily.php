<?php 
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

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="search-typeorder" class="">เลือกรายการ</label>
                            <select name="search-typeorder" id="filter" class="form-control" for-col="4">
                                <option value="รายรับ">รายรับ</option>
                                <option value="รายจ่าย">รายจ่าย</option>
                                <option value="" selected>ทั้งหมด</option>
                            </select>
                        </div>
                    </div>

                    <div class="row" id="tableOrder-wapper">
                        <div class="col-sm-12">
                            <table id="tableShowOrder" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>รายการ</th>
                                        <th>จำนวนเงิน</th>
                                        <th>คงเหลือ</th>
                                        <th>ชนิด</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>เงินเดือน</td>
                                        <td>15,000.00</td>
                                        <td>15,000.00฿</td>
                                        <td>รายรับ</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>บิล & สาธารณูปโภค</td>
                                        <td>4,000.00</td>
                                        <td>11,000.00฿</td>
                                        <td>รายจ่าย</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>อาหาร & เครื่องดื่ม</td>
                                        <td>3,000.00</td>
                                        <td>8,000.00฿</td>
                                        <td>รายจ่าย</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>เดินทาง</td>
                                        <td>1,500.00</td>
                                        <td>6,500.00฿</td>
                                        <td>รายจ่าย</td>
                                    </tr>
                                </tbody>
                            </table>
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

