<?php
    $_GET['isShowNav'] = 0;
    require_once '../config.php';
    include_once '../includes/header.php';
    
    $savings = $_SESSION['saving'];
?>

<body class="bg-dark small-device">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h1 class="text-light">แก้ไขรายการ </h1>
                </div>
                <div class="login-form">
                    <div class="row form-group">
                            <div class="input-group col-lg-12">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <?php
                                     $getdate = date("Y-m-d", strtotime($savings[0]['saving_date']));                                        
                                    ?>
                                     <input type="date"  min="1900-01-02" max="2100-01-01" section='sec-edit' name="date" class="form-control" value='<?= $getdate ?>' >
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-12">
                                <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                                <select name="typeIncome" id="select-type-income" class="form-control selectpicker" value='<?= $savings[0]['typemoney_id']?>' >
                                    <option>เลือกประเภท</option>

                                    <option value="1" data-icon="fa fa-credit-card">เงินเดือน</option>
                                    <option value="2" data-icon="fa fa-money">ดอกเบี้ย</option>
                                    <option value="3" data-icon="fa fa-question">อื่นๆ</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-12">
                                <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                <input type="text" id="input-note" name="note" class="form-control" placeholder="จดบันทึก" value='<?= $savings[0]['saving_detail'] ?>' >
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-12">
                                <div class="input-group-addon"><strong>THB</strong></div>
                                <input type="text" step="0.01" min="" id="input-money-income" name="moneyIncome"  onkeyup="this.value=Comma(this.value);"  maxlength="14"  class="form-control" placeholder="จำนวนเงิน" value='<?= $savings[0]['saving_value'] ?>' > 
                                    <script LANGUAGE="JavaScript">
                                        function Comma(Num)
                                        {
                                            Num += '';
                                            Num = Num.replace(/,/g, '');

                                            x = Num.split('.');
                                            x1 = x[0];
                                            x2 = x.length > 1 ? '.' + x[1] : '';
                                            var rgx = /(\d+)(\d{3})/;
                                            while (rgx.test(x1))
                                            x1 = x1.replace(rgx, '$1' + ',' + '$2');
                                            return x1 + x2;
                                        } 
                                    </script>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <button class="btn btn-success btn-block" name ="update" type="submit">ยืนยันการแก้ไข</button>
                            </div>
                        </div>
                        
</body>    
<?php
    include_once '../includes/footer.php';
?>