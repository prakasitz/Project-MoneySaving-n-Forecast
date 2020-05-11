<?php
    include '../config.php';
    include '../classes/DB.php';


    if(isset($_GET["another"]) && isset($_GET["savings"]) && isset($_GET["utility"])&& isset($_GET["family"])&& isset($_GET["recreation"]) && isset($_GET["debt"])&& isset($_GET["month"])&& isset($_GET["private"])) {
      $another = $_GET["another"];
      $savings = $_GET["savings"];
      $utility = $_GET["utility"];  
      $family = $_GET["family"];
      $recreation = $_GET["recreation"];
      $debt = $_GET["debt"];
      $month = $_GET["month"];
      $private = $_GET["private"];
        $conn = DB::getInstance();
        $sql = "INSERT INTO planning (another,savings,utility,family,recreation,debt,month,private)
                VALUES ('$another' , '$savings' ,'utility','family','recreation','debt','month','private')
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
        header("Refresh:0.5; url=");
        } else {
            echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
        }
    }