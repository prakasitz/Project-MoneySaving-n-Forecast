<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  </head>
  <body>
<div class="container">
  <div class="row"style="margin-left:150px">
    <div class="col-md-10" style="background-color: #EEE9E9;">
    <h2 align-content-center ="center"> เข้าสู่ระบบ </h2>
     <form  name="formlogin" action="login_db.php" method="POST" id="login">
              <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>ชื่อผู้ใช้งาน</label>
                            <input type="text"name= "user" class="form-control" placeholder="ชื่อผู้ใช้งาน">
                        </div>
                        <div class="form-group">
                            <label>รหัสผ่าน</label>
                            <input type="password"name= "pass" class="form-control" placeholder="รหัสผ่าน">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>
                        </div>
                        <button class="btn btn-info btn-block" type="submit">บันทึก</button>
                        
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="http://localhost/zocute/login/register_1.php"> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            </form>
      </div>
    </div>
  </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>