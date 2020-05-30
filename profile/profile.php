<?php
    $_GET['isShowNav'] = 0;
    require_once '../config.php';
    include_once '../includes/header.php';
?>
<body class="bg-dark small-device">

<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <h1 class="text-light">My Profile</h1>
            </div>
            <div class="login-form">
                <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="user_fname">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Surename</label>
                            <input type="text" class="form-control" placeholder="Surename" name="user_sname">
                        </div>
                    </div>
                </div>            

                <div class="form-group">
                    <label>Gender</label>
                    <div class="row" style="padding: 7px 0px 7px 0px;">
                        <div class="col-md-6 col-lg-6">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="gMale" name="user_gen" class="custom-control-input" value="ชาย">
                                <label class="custom-control-label d-block" for="gMale">ชาย</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="gFemale" name="user_gen" class="custom-control-input">
                                <label class="custom-control-label d-block" for="gFemale" value="หญิง">หญิง</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>วันเกิด</label>
                    <input type="date" min="1900-01-02" max="2100-01-01" class="form-control" name="user_bd">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="user_email">
                </div>

                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" placeholder="User Name" name="user_name">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="user_pass">
                </div>   
            
                <div class="row form-group">
                    <div class="col-lg-4">
                        <button class="btn btn-info btn-block" type="submit">แก้ไขข้อมูล</button>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-info btn-block" type="submit">ย้อนกลับ</button>
                    </div>
                </div>               
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>



</body>    

<?php
    include_once '../includes/footer.php';
?>