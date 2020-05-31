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
                    <h1 class="text-light"> Forgot your password? </h1>
                </div>
                <div class="login-form">
                    <form action="forget_db.php" method="POST">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" >
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="pass" class="form-control" placeholder="Password" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Re-password</label>
                                            <input type="password" class="form-control" placeholder="Re-password">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-4">
                                        <button class="btn btn-info btn-block" type="submit">ยืนยัน</button>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

<?php
    include_once '../includes/footer.php';
?>
