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
                    <form action="#" id="form-record-income" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="input-group col-sm-12 col-md-6">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <input type="date" id="input-date" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-sm-12 col-md-6">
                                <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                <input type="text" id="input-note" name="note" class="form-control"placeholder="ยอดคงเหลือ">
                            </div>
                        </div>
                
    <div class="card-body">
        <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="bootstrap-data-table_length">
                        <label>เลือกรายการ
                            <select name="bootstrap-data-table_length" aria-controls="bootstrap-data-table" class="form-control form-control-sm">
                                <option value="1">รายรับ</option>
                                <option value="2">รายจ่าย</option>
                                <option value="3">ทั้งหมด</option>
                            </select> 
                        </label>
                    </div>
                </div>
    <div class="row">
        <div class="col-sm-12">
            <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                <thead>
                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 100px;">ลำดับ</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 306px;" aria-sort="ascending">รายการ</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 138px;">จำนวนเงิน</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110px;">คงเหลือ</th>
                    </tr>
                </thead>                
                <tbody>
                    <tr role="row" class="odd">
                        <td class="">1</td>
                        <td class="sorting_1">เงินเดือน</td>
                        <td>15,000.00</td>
                        <td>15,000.00฿</td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="">2</td>
                        <td class="sorting_1">บิล & สาธารณูปโภค</td>
                        <td>4,000.00</td>
                        <td>11,000.00฿</td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="">3</td>
                        <td class="sorting_1">อาหาร & เครื่องดื่ม</td>
                        <td>3,000.00</td>
                        <td>8,000.00฿</td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="">4</td>
                        <td class="sorting_1">เดินทาง</td>
                        <td>1,500.00</td>
                        <td>6,500.00฿</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">   
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="bootstrap-data-table_info" role="status" aria-live="polite">Showing 21 to 30 of 57 entries
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="bootstrap-data-table_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous" id="bootstrap-data-table_previous">
                        <a href="#" aria-controls="bootstrap-data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a href="#" aria-controls="bootstrap-data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a href="#" aria-controls="bootstrap-data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                    </li>
                    <li class="paginate_button page-item active">
                        <a href="#" aria-controls="bootstrap-data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a href="#" aria-controls="bootstrap-data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a href="#" aria-controls="bootstrap-data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a href="#" aria-controls="bootstrap-data-table" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                    </li>
                    <li class="paginate_button page-item next" id="bootstrap-data-table_next">
                    <a href="#" aria-controls="bootstrap-data-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
    include_once '../includes/footer.php';
