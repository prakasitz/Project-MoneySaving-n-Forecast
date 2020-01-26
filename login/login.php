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
    <h2 align="center"> เข้าสู่ระบบ </h2>
     <form  name="formlogin" action="" method="POST" id="login">
              <div class="row">
              <label class="col-md-4" style="text-align:right"> Email Address </label>
                <div class="col-md-4">
                <input type="text"  name="Email Address" class="form-control" required placeholder="Email Address" />
                </div>
                </div>


              <div class="row">
              <br>
              <label class="col-md-4" style="text-align:right"> Password </label>
                <div class="col-md-4">
                     <input type="password" name="Password" class="form-control" required placeholder="Password" />
            </div>
              </div>



              <div class="row">
              <div class="col-md-4"> </div>
              <div class="col-md-4">
              <br /><input name="remember" type="checkbox" value="Remember me" autocomplete="off" /> Remember Me

                </div>
                <div class="col-md-4"> </div>
              &nbsp; &nbsp; &nbsp; <br /> 
              <div class="col-md-12">
              <p align="center">
              
              <button type="button" class="btn btn-secondary">SIGN IN</button>
              <button type="button" class="btn btn-secondary">REGISTER</button>
              </p>
              </div>
              <br>
              
            </form>
      </div>
    </div>
  </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>