<?php
    include '../config.php';
    include '../classes/DB.php';


    if(isset($_POST["user_name"]) && isset($_POST["user_pass"]) && isset($_POST["user_email"])&& isset($_POST["user_fname"]) && isset($_GET["user_sname"])&& isset($_GET["user_gen"])&& isset($_GET["user_bd"])) {
        $user_name = $_POST["user_name"];
        $user_pass = $_POST["user_pass"];
        $user_email = $_POST["user_email"];
        $user_fname = $_POST["user_fname"];
        $user_sname = $_POST["user_sname"];
        $user_gen = $_POST["user_gen"];
        $user_bd = $_POST["user_bd"];
        

        $conn = DB::getInstance();
        $sql = "INSERT INTO usersaccount (user_name,user_pass,user_fname,user_sname,user_gen,user_bd)
                VALUES (  '$user_name' ,'$user_pass', '$user_fname' , '$user_sname', '$user_gen','$user_bd')
                ";
        //echo $sql;
        print_r($_POST);
        die;

        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $conn = null;
        // $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        // print_r($result); 

        if(isset($sql) != 0) {
        echo "<script>alert('[Insert สำเร็จ]')</script>";
        header("Refresh:0.5; url=http://localhost/zocute/login/login.php");
        } else {
            echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
        }
    }