<?php
    include '../config.php';
    include '../classes/DB.php';


    if(isset($_GET["A1"]) && isset($_GET["A2"]) && isset($_GET["A3"])&& isset($_GET["A4"])&& isset($_GET["A5"]) && isset($_GET["A6"])&& isset($_GET["A7"])&& isset($_GET["A8"])) {
      $A1 = $_GET["A1"]; //การออมการลงทุน
      $A2 = $_GET["A2"]; //สาธารณุประโภค
      $A3 = $_GET["A3"]; //ครอบครัว
      $A4 = $_GET["A4"]; //ส่วนตัว
      $A5 = $_GET["A5"]; //สันทนาการ
      $A6 = $_GET["A6"]; //หนี้สิน
      $A7 = $_GET["A7"]; //อื่นๆ
      $A8 = $_GET["A8"]; //เดือน
        $conn = DB::getInstance();
        $sql = "INSERT INTO planning (A1,A2,A3,A4,A5,A6,A7,A8)
                VALUES ('$A1' , '$A2' ,'$A3','$A4','$A5','$A6','$A7','$A8')
             ";
        //echo $sql; 
       // die;
        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $conn = null;
        //$result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        //print_r($result); เอาไว้ปริ้น ดูค่าที่ select มา

        if(isset($sql) != 0) {
        echo "<script>alert('[Insert สำเร็จ]')</script>";
        header("Refresh:0.5; url=http://localhost/zocute/index.php");
        } else {
            echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
        }
    }