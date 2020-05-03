<?php
    include '../config.php';
    include '../classes/DB.php';


    if(isset($_GET["name"]) && isset($_GET["surename"]) && isset($_GET["date"]) && isset($_GET["email"])&& isset($_GET["username"]) && isset($_GET["pws"])) {
        $name = $_GET["name"];
        $surename = $_GET["surename"];
        $username = $_GET["username"];
        $psw = $_GET["pws"];
        $date = $_GET["date"];
        $email = $_GET["email"];
        

        $conn = DB::getInstance();
        $sql = "INSERT INTO useraccount (user_name,user_pass,user_email,user_fname,user_sname,user_bd)
                VALUES ('$username' , '$psw' ,'$email', '$name' , '$surename', '$date')
                ";
        

        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $conn = null;
        // $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        // print_r($result); 

        if(isset($sql) != 0) {
        echo "<script>alert('[Insert สำเร็จ]')</script>";
        header("Refresh:0.5; url=login.php");
        } else {
            echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
        }
    }