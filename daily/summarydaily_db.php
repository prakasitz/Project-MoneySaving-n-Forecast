<?php
    include '../config.php';
    include '../classes/DB.php';
    
     session_start();
    
    
        $conn = DB::getInstance();
        $sql = "SELECT in_type,in_amount
                FROM income 
                ";
        
        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        $conn = null;
        print_r($result);
        // echo "<script>alert('สำเร็จ')</script>";
        //         header("Refresh:0.5; url=../daily/income.php");
        //$admin = mysqli_query($user,$pass)     
    
        //$row = mysqli_fetch_array($admin);
        // echo print_r($user,true);
        // echo print_r($pass,true); //เอาไว้ปริ้น ดูค่าที่ select มา
        //count($result);
        if (sizeof($result) != 0) {
            $_SESSION["type"] = $result["in_type"];
            $_SESSION["amount"] = $result["in_amount"];
            print_r($_SESSION["type"]);
            print_r($_SESSION["amount"]);
            die;
           
                // echo "<script>alert('สำเร็จ')</script>";
                // header("Refresh:0.5; url=register_1.php");
            
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