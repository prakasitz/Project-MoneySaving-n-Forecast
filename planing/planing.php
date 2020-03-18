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
</div>
<div class="content">
    <div class="row">
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
                    <form action="#" id="form-record-income" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-save"></i></div>
                                <label class="col col-form-label text-left">เงินออม</label>
                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-barcode"></i></div>
                                <label class="col col-form-label text-left">บิล&สาธารณูปโภค</label>
                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-cutlery"></i></div>
                                <label class="col col-form-label text-left">อาหาร&เครื่องดื่ม</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-road"></i></div>
                                <label class="col col-form-label text-left">การเดินทาง</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-shopping-cart"></i></div>
                                <label class="col col-form-label text-left">ช็อปปิ้ง</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-film"></i></div>
                                <label class="col col-form-label text-left">บันเทิง</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-plane"></i></div>
                                <label class="col col-form-label text-left">ท่องเที่ยว</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2"">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-medkit"></i></div>
                                <label class="col col-form-label text-left">สุขภาพ&ฟิตเนส</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-group (alias)"></i></div>
                                <label class="col col-form-label text-left">ครอบครัว</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-gift"></i></div>
                                <label class="col col-form-label text-left">การให้&การบริจาค</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                <label class="col col-form-label text-left">การศึกษา</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                <label class="col col-form-label text-left">การลงทุน</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa  fa-home"></i></div>
                                <label class="col col-form-label text-left">ธุรกิจ</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-heart"></i></div>
                                <label class="col col-form-label text-left">ประกันภัย</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                <label class="col col-form-label text-left">หนี้สิน</label>

                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-4 col-sm-5">
                                <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                                <label class="col col-form-label text-left">อื่นๆ</label>
                            </div>
                            <div class=" col-lg-3 col-sm-2">
                                <input type="text" id="input-note" name="note" class="form-control"
                                    placeholder="เปอร์เซ็นต์">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
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