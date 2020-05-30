<?php
    include '../config.php';
    include '../classes/DB.php';

    session_start();
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";

    if(isset(   
        $_POST["user_fname"], 
        $_POST["user_sname"], 
        $_POST["user_gen"],
        $_POST["user_bd"],
        $_POST["user_name"], 
        $_POST["user_pass"], 
        $_POST["user_email"])
    ) {
        $user_email = $_POST["user_email"];
        $user_fname = $_POST["user_fname"];
        $user_sname = $_POST["user_sname"];
        $user_gen = $_POST["user_gen"];
        $user_bd = $_POST["user_bd"];

        $user_name = $_POST["user_name"];
        $user_pass = $_POST["user_pass"];
        $user_email = $_POST["user_email"];

        $conn = DB::getInstance();
        $sql = "INSERT INTO usersaccount (user_name, user_pass, user_fname, user_sname, user_email, user_gen, user_bd)
                VALUES (  '$user_name', '$user_pass', '$user_fname', '$user_sname', '$user_email', '$user_gen','$user_bd')
                ";
                
        //echo $sql;
        // print_r($_POST);
        // die;

        $stmt = $conn->dbh->prepare( $sql );
        $chk_stmt = $stmt->execute(); // ลองปริ้นค่า $chk_stmt เป็น 1 เท่ากับว่า คิวรี่สำเร็จ
        if($chk_stmt) {

            $_SESSION['user_registed'] = [
                'user_name' => $user_name,
                'user_pass' => $user_pass
            ];

            echo "<script>alert('[Insert สำเร็จ]')</script>";
            header("Refresh:0.5; url=http://localhost/zocute/login/login_1.php");
        } else {
            echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
            print_r ($stmt->errorInfo());
            echo $sql;
        }

        $conn = null;
    }