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

    <div class="col">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header row">
                                <label class="col-sm-3 col-lg-3 col-form-label font-weight-bold">วางแผนเป้าหมายเดือน</label>
                                <div class="col-sm-5 col-lg-5">
                                    <select class="selectpicker form-control" id="selectMonthly">
                                        <option>เลือกเดือน</option>
                                        <option value="1" selected>มกราคม</option>
                            <option value="2">กุมภาพันธ์</option>
                            <option value="3">มีนาคม</option>
                            <option value="4">เมษายน</option>
                            <option value="5">พฤษภาคม</option>
                            <option value="6">มิถุนายน</option>
                            <option value="7">กรกฎาคม</option>
                            <option value="8">สิงหาคม</option>
                            <option value="9">กันยนยน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤศจิกายน</option>
                            <option value="12">ธันวาคม</option>
                        </select>
                    </div>
                </div>
                <div class="card-body card-block">
                    <form action="planing_db.php" id="form-record-income" method="GET" class="form-horizontal">
                    <div class="list-group">
                        <div class="row form-group">
                            
                            <div class="input-group col-lg-6 col-sm-6">
                                <div class="input-group-addon"><i class="fa fa-save"></i></div>
                                <label class="col col-form-label text-left">การออม&การลงทุน</label>
                            </div>
                            <div class=" col-lg-2 col-sm-2">
                                <input type="text" id="input-note" name="การออม&การลงทุน" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                       
                        <div class="row form-group">
                            <div class="input-group col-lg-6 col-sm-6">
                                <div class="input-group-addon"><i class="fa fa-barcode"></i></div>
                                <label class="col col-form-label text-left">สาธารณูปโภค(ค่าน้ำ ค่าไฟ ค่าโทรศัพท์ บิลอื่นๆ)</label>
                            </div>
                            <div class=" col-lg-2 col-sm-2">
                                <input type="text" id="input-note" name="สาธารณูปโภค(ค่าน้ำ ค่าไฟ ค่าโทรศัพท์ บิลอื่นๆ)" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-6 col-sm-6">
                                <div class="input-group-addon"><i class="fa fa-group (alias)"></i></div>
                                <label class="col col-form-label text-left">ครอบครัว&ส่วนตัว</label>

                            </div>
                            </div>
                        <ul class="list">
                        <div class="row form-group">
                            <div class="input-group col-lg-6 col-sm-6">
                                <label class="col col-form-label text-left pl-5">ครอบครัว</label>

                            </div>
                            <div class=" col-lg-2 col-sm-2">
                                <input type="text" id="input-note" name="ครอบครัว" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                            </div>
                            <div class="row form-group">
                            <div class="input-group col-lg-6 col-sm-6">
                                <label class="col col-form-label text-left pl-5">ส่วนตัว</label>

                            </div>
                            <div class=" col-lg-2 col-sm-2">
                                <input type="text" id="input-note" name="ส่วนตัว" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                            </div>
                        </ul>
                        <div class="row form-group">
                            <div class="input-group col-lg-6 col-sm-6">
                                <div class="input-group-addon"><i class="fa fa-coffee"></i></div>
                                <label class="col col-form-label text-left">สันทนาการ(ช้อปปิ้ง สังสรรค์ ท่องเที่ยว)</label>
                            </div>
                            <div class=" col-lg-2 col-sm-2">
                                <input type="text" id="input-note" name="สันทนาการ(ช้อปปิ้ง สังสรรค์ ท่องเที่ยว)" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>     
                        <div class="row form-group">
                            <div class="input-group col-lg-6 col-sm-6">
                                <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                <label class="col col-form-label text-left">หนี้สิน</label>

                            </div>
                            <div class=" col-lg-2 col-sm-2">
                                <input type="text" id="input-note" name="หนี้สิน" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-6 col-sm-6">
                                <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                                <label class="col col-form-label text-left">อื่นๆ</label>
                            </div>
                            <div class=" col-lg-2 col-sm-2">
                                <input type="text" id="input-note" name="อื่นๆ" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <button class="btn btn-info btn-block" type="submit">บันทึก</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
</div>

<?php
    include_once '../includes/footer.php';