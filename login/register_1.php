<?php
    $_GET['isShowNav'] = 0;
    require_once '../config.php';
    include_once '../includes/header.php';
?>
    
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content" style="max-width: none !important">
                <div class="login-logo">
                    <h1 class="text-light">ลงทะเบียน</h1>
                </div>
                <div class="login-form"> 
                    <div class="row mb-3">
                        <h3 class="col-lg-6">ข้อมูลส่วนตัว</h3>
                    </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="email" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Surename</label>
                                    <input type="email" class="form-control" placeholder="Surename">
                                </div>
                            </div>
                         </div>

                        <div class="form-group">
                            <label>Gender</label>
                                <div class="row" style="padding: 7px 0px 7px 0px;">
                                    <div class="col-md-2 col-lg-2">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="gMale" name="valGender" class="custom-control-input">
                                            <label class="custom-control-label d-block" for="gMale">ชาย</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="gFemale" name="valGender" class="custom-control-input">
                                            <label class="custom-control-label d-block" for="gFemale">หญิง</label>
                                        </div>
                                    </div>
                                 </div>
                        </div>

                        <div class="form-group">
                            <label>วันเกิด</label>
                            <input type="date" min="1900-01-02" max="2100-01-01" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>User Name</label>
                            <input type="email" class="form-control" placeholder="User Name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Re-assword</label>
                                    <input type="email" class="form-control" placeholder="Re-password">
                                </div>
                            </div>
                        </div> 
                                     
                        <div class="form-row justify-content-end mt-4">
                            <div class="col-lg-3">
                                <button type="reset" class="btn btn-block btn-danger">ล้างทั้งหมด</button>
                            </div>
                            <div class="col-lg-3">
                                 <button type="submit" class="btn btn-block btn-info">ตกลง</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


</body>

<?php
    include_once '../includes/footer.php';
?>
