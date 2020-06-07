<?php

    include '../config.php';
    include '../classes/DB.php';
    session_start();
    if(isset($_POST["user"]) && isset($_POST["pass"])) {
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $conn = DB::getInstance();
        $sql = "SELECT *
                FROM usersaccount
                WHERE user_name = '$user' AND user_pass = '$pass';
             ";
            //echo $sql;
            //die;
        
            $stmt = $conn->dbh->prepare( $sql );
            $stmt->execute();
            $results_user = $stmt->fetchAll( PDO::FETCH_ASSOC );
            $conn = null;

            if(sizeof($results_user) != 0) {
                echo "เข้าสู่ระบบสำเร็จ";
                $user_id = ($results_user[0]['user_id']);
                $sql1 = "SELECT 
                                saving.user_id,
                                SUM(saving_value) as sumvalIn 
                        FROM saving
                        WHERE  saving.user_id = '$user_id' AND saving.typemoney_id BETWEEN 1 and 3
                        ";
                        $conn = DB::getInstance();
                        $stmt = $conn->dbh->prepare( $sql1);
                        $chk_stmt = $stmt->execute();
    
                        if($chk_stmt) {
                            $_SESSION['sumvalIn'] = $stmt->fetchAll( PDO::FETCH_ASSOC );
                            //DB::printArray($_SESSION['sumvalIn']);
                            //header("Refresh:0.3; url=./edit_saving.php");
                        } 

                $sql2 = "SELECT 
                                saving.user_id,
                                SUM(saving_value) as sumvalEx 
                        FROM saving
                        WHERE  saving.user_id = '$user_id' AND saving.typemoney_id BETWEEN 4 and 9
                        ";
                        $conn = DB::getInstance();
                        $stmt = $conn->dbh->prepare( $sql2);
                        $chk_stmt = $stmt->execute();
    
                        if($chk_stmt) {
                            $_SESSION['sumvalEx'] = $stmt->fetchAll( PDO::FETCH_ASSOC );
                            //DB::printArray($_SESSION['sumvalEx']);
                            //header("Refresh:0.3; url=./edit_saving.php");
                        } 
                header("Refresh:0.5; url=http://localhost/zocute/index.php");
                $_SESSION['users'] = $results_user[0];
               // echo "<pre>";
            } else {
                echo "เข้าสู่ระบบไม่สำเร็จ ลองอีกครั้ง";
                header("Refresh:0.5; url=login_1.php");
            }

           
            
            
    }
       
            
        
       