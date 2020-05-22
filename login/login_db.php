<?php
    include '../config.php';
    include '../classes/DB.php';
    // session_start();
    if(isset($_POST["user"]) && isset($_POST["pass"])) {
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $conn = DB::getInstance();
        $sql = "SELECT *
                FROM usersaccount
                WHERE user_name = '$user' AND user_pass = '$pass';
             ";
            // echo $sql;
            //die;
        
        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $results_user = $stmt->fetchAll( PDO::FETCH_ASSOC );
        $conn = null;
        if(sizeof($results_user) != 0) {
            echo "เข้าสู่ระบบสำเร็จ";
            $_SESSION['user'] = $results_user[0];
            echo "<pre>";
            print_r($_SESSION['user']);
            echo "</pre>";
        } else {
            echo "เข้าสู่ระบบไม่สำเร็จ ลองอีกครั้ง";
            header("Refresh:0.5; url=login.php");
        }
        //$admin = mysqli_query($user,$pass)     
    
        //$row = mysqli_fetch_array($admin);
        // echo print_r($user,true);
        // echo print_r($pass,true); //เอาไว้ปริ้น ดูค่าที่ select มา
//count($result);
        // if (sizeof($result) != 0) {
        //     // $_SESSION["email"] = $result["0"]["user_email"];
        //     // $_SESSION["surname"] = $result["0"]["user_sname"];
        //     // $_SESSION["name"] = $result["0"]["user_fname"];
            
           
        //         echo "<script>alert('สำเร็จ')</script>";
        //         header("Refresh:0.5; url=register_1.php");
            
        // }
    }
       
            
        
        /*else {
            $result = mysqli_query($user,$pass);
        ($user = 'admin' && $pass = '1234')
        
        }

       

        }
         else echo '....';
            

            
    /*if(sizeof($result) != 0) {
        $userad = $_GET["uname"];
        $passad = $_GET["psw"];

        $userad = 'admin';
        $passad = '1234';

        header("Refresh:0.5; url=Insert.php");
    }*/
    
        //DB::checkResult($result);
       /* if(isset($result) && sizeof($result) != 0) {
                $_SESSION["name"] = $result["0"]["sup_Name"];
                $_SESSION["email"] = $result["0"]["sup_Email"];
                $_SESSION["phone"] = $result["0"]["sup_Phone"];
                $_SESSION["id"] = $result["0"]["sup_ID"];
                $_SESSION["address"] = $result["0"]["sup_Address"];
        }*/
       // echo json_encode($result);