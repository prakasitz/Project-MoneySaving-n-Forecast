<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php

    ?>
        require('db.php');
        session_start();

        if(isset($_post['username'])) { 
            //remove backslashes
            $username = stripslashes($_REQUEST['username']);
            // escape special character in string
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST[password']);
            $password = mysqli_real_escape_string($con, $password);

            //Checing is user existing in the database or not
            $query = "select * form user where username= '$username'and password='".md5($password)."'";

            $result = mysqli_query($con, $qury) or dir(mysql_error());
            $row = mysql_num_rows($result);
            if($rows == 1){
                $session['username']= $username;
                //redirect user to index.php
                header("Location: index.php");
            } else{
                echo "
                <div class= 'from'>
                    <h3>username/password is incorrec.</h3>
                    <br>Click hear to <a hraf = 'login.php'>Login</a>
                </div> ";
            }
        } else {

        }   
    ?>
            <div class= "from">
                 <h1>:Log in</h1>
                 <from action= "" method= "post"name="login">
                     <input type= "text" name="username" placehoder="username" require>
                     <input type= "password" name="password" placehoder="password" require>
                     <input type= "submit" name="submit"  value="Login">
                 </from>
                 <p>Not registered yeyt? <a href="registration.php">register Here</a></p>
            </div>

    <?php } ?>
</body>
</html>