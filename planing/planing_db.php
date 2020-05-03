<?php
    include 'config.php';
    include 'classes/DB.php';


    if(isset($_post"salary"]) && isset($_post["lastname"]) && isset($_post["tel"]) && isset($_post["username"]) && isset($_post["psw"])) {
        $name = $_post["name"];
        $lastname = $_post["lastname"];
        $tel = $_post["tel"];
        $username = $_post["username"];
        $psw = $_post["psw"];

        $conn = DB::getInstance();
        $sql = "INSERT INTO customer (c_id,password,c_tel,c_name,c_surname)
                VALUES ('$salary' , '$psw' ,$tel , '$name' , '$lastname')
                ";


        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $conn = null;
        //$result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        //print_r($result); เอาไว้ปริ้น ดูค่าที่ select มา

        if(isset($sql) != 0) {
        echo "<script>alert('[Insert สำเร็จ]')</script>";
        header("Refresh:0.5; url=index.php");
        } else {
            echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
        }
    }