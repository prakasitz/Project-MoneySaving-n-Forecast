<?php
    include '../config.php';
    include '../classes/DB.php';


    if(isset($_GET["savings"]) && isset($_GET["bill"]) && isset($_GET["fami"])&& isset($_GET["personal"])&& isset($_GET["recreation"]) && isset($_GET["debt"])&& isset($_GET["other"])&& isset($_GET["m"])) {
      $savings = $_GET["savings"]; //การออมการลงทุน
      $bill = $_GET["bill"]; //สาธารณุประโภค
      $fami = $_GET["fami"]; //ครอบครัว
      $personal = $_GET["personal"]; //ส่วนตัว
      $recreation = $_GET["recreation"]; //สันทนาการ
      $debt = $_GET["debt"]; //หนี้สิน
      $other = $_GET["other"]; //อื่นๆ
      $m = $_GET["m"]; //เดือน
        $conn = DB::getInstance();
        $sql = "INSERT INTO planning (savings,bill,fami,personal,recreation,debt,other,m)
                VALUES ('$savings' , '$bill' ,'$fami','$personal','$recreation','$debt','$other','$m')
             ";
       // echo $sql; 
        //echo $_GET["fami"]; 
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