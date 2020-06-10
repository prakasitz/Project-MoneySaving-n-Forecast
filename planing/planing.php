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
                        <h1>วางแผนเป้าหมาย</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">วางแผนเป้าหมาย</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body card-block">
        <div class="col">
            <div class="col-lg-12">
                <div class="card">
                    <form action="planing_db.php" id="form-record-income" method="GET" >
                    <!-- start form -->
                        <div class="card-header">
                            <div class="row">
                                <label class="col-sm-3 col-lg-3 col-form-label font-weight-bold">วางแผนเป้าหมายเดือน</label>
                                <div class="col-sm-5 col-lg-5">
                                    <select class="selectpicker form-control" name="m" id="selectMonthly">
                                        <option>เลือกเดือน</option>
                                        <option value="1" <?= (date('m') == '1')? "selected":"" ?>>มกราคม</option>
                                        <option value="2" <?= (date('m') == '2')? "selected":"" ?>>กุมภาพันธ์</option>
                                        <option value="3" <?= (date('m') == '3')? "selected":"" ?>>มีนาคม</option>
                                        <option value="4" <?= (date('m') == '4')? "selected":"" ?>>เมษายน</option>
                                        <option value="5" <?= (date('m') == '5')? "selected":"" ?>>พฤษภาคม</option>
                                        <option value="6" <?= (date('m') == '6')? "selected":"" ?>>มิถุนายน</option>
                                        <option value="7" <?= (date('m') == '7')? "selected":"" ?>>กรกฎาคม</option>
                                        <option value="8" <?= (date('m') == '8')? "selected":"" ?>>สิงหาคม</option>
                                        <option value="9" <?= (date('m') == '9')? "selected":"" ?>>กันยนยน</option>
                                        <option value="10 <?= (date('m') == '10')? "selected":"" ?>">ตุลาคม</option>
                                        <option value="11 <?= (date('m') == '11')? "selected":"" ?>">พฤศจิกายน</option>
                                        <option value="12 <?= (date('m') == '12')? "selected":"" ?>">ธันวาคม</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <div align="center">
                        <div class="card-body list-group">

                            <div class="row form-group">

                                <div class="input-group col-lg-6 col-sm-6">
                                    <div class="input-group-addon"><i class="fa fa-save"></i></div>
                                    <label class="col col-form-label text-left">การออม&การลงทุน</label>
                                </div>
                                <div class=" col-lg-2 col-sm-2">
                                    <input type="hidden" name="savings_id" value="4">
                                    <input type="number" id="input-note" name="savings" class="form-control" placeholder="" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="input-group col-lg-6 col-sm-6">
                                    <div class="input-group-addon"><i class="fa fa-barcode"></i></div>
                                    <label class="col col-form-label text-left">สาธารณูปโภค(ค่าน้ำ ค่าไฟ ค่าโทรศัพท์
                                        บิลอื่นๆ)</label>
                                </div>
                                <div class=" col-lg-2 col-sm-2">
                                    <input type="hidden" name="bill_id" value="5">
                                    <input type="number" id="input-note" name="bill" class="form-control" placeholder="" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="input-group col-lg-6 col-sm-6">
                                    <div class="input-group-addon"><i class="fa fa-group (alias)"></i></div>
                                    <label class="col col-form-label text-left">ครอบครัว&ส่วนตัว</label>
                                </div>
                            
                                <div class=" col-lg-2 col-sm-2">
                                    <input type="hidden" name="fami_per_id" value="6">
                                    <input type="number" id="input-note" name="fami_per" class="form-control" placeholder="" required>
                                </div>
                            </div>

                            <!-- <ul class="list">
                                <div class="row form-group">
                                    <div class="input-group col-lg-6 col-sm-6">
                                        <label class="col col-form-label text-left pl-5">ครอบครัว</label>
                                    </div>
                                    <div class=" col-lg-2 col-sm-2">
                                        <input type="hidden" name="fami_id" value="3">
                                        <input type="number" id="input-note" name="fami" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="input-group col-lg-6 col-sm-6">
                                        <label class="col col-form-label text-left pl-5">ส่วนตัว</label>
                                    </div>
                                    <div class=" col-lg-2 col-sm-2">
                                        <input type="hidden" name="personal_id" value="4">
                                        <input type="number" id="input-note" name="personal" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                            </ul> -->

                            <div class="row form-group">
                                <div class="input-group col-lg-6 col-sm-6">
                                    <div class="input-group-addon"><i class="fa fa-coffee"></i></div>
                                    <label class="col col-form-label text-left">สันทนาการ(ช้อปปิ้ง สังสรรค์ ท่องเที่ยว)</label>
                                </div>
                                <div class="col-lg-2 col-sm-2">
                                    <input type="hidden" name="recreation_id" value="7">
                                    <input type="number" id="input-note" name="recreation" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="input-group col-lg-6 col-sm-6">
                                    <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                    <label class="col col-form-label text-left">หนี้สิน</label>

                                </div>
                                <div class=" col-lg-2 col-sm-2">
                                    <input type="hidden" name="debt_id" value="8">                                
                                    <input type="number" id="input-note" name="debt" class="form-control" placeholder="" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="input-group col-lg-6 col-sm-6">
                                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                                    <label class="col col-form-label text-left">อื่นๆ</label>
                                </div>
                                <div class=" col-lg-2 col-sm-2">
                                    <input type="hidden" name="other_id" value="9">                                  
                                    <input type="number" id="input-note" name="other" class="form-control" placeholder="" required>
                                </div>
                            </div>
                    
                            
                            <div class="col-6">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                <input type="text" id=''  class="form-control font-weight-bold" 
                                    placeholder="รวม" disabled>
                            </div>
                           
                            </div>  
                        </div>
                            <div class="row form-group">
                                <div class="col-lg-8">
                                    <button class="btn btn-info btn-block" type="submit">บันทึก</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- end form -->
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
    include_once '../includes/footer.php';