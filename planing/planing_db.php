<?php
include '../config.php';
include '../classes/DB.php';

session_start();

if ( isset( 
      $_GET["savings"],
      $_GET["bill"], 
      $_GET['fami_per'],
      // $_GET["fami"], 
      // $_GET["personal"], 
      $_GET["recreation"], 
      $_GET["debt"], 
      $_GET["other"], 
      $_GET["m"],
      $_SESSION['users']
    ) 
    ) {
    $plan_ids   = [
                    $_GET["savings_id"]     => $_GET["savings"],
                    $_GET["bill_id"]        => $_GET["bill"],
                    $_GET["fami_per_id"]        => $_GET["fami_per"],
                    // $_GET["fami_id"]        => $_GET["fami"],
                    // $_GET["personal_id"]    => $_GET["personal"],
                    $_GET["recreation_id"]  => $_GET["recreation"],
                    $_GET["debt_id"]        => $_GET["debt"],
                    $_GET["other_id"]       => $_GET["other"]
    ];

    $m          = $_GET["m"]; //เดือน
    $user_id    = $_SESSION['users']['user_id'];

    $conn = DB::getInstance();

    #wtf
    $sql  = " INSERT INTO `userplan` (`typemoney_id`, `uplan_value`, `month_id`, `user_id`)
              VALUES ";

    foreach ($plan_ids as $plan_id => $value) {
      $sql .= "('$plan_id', '$value', '$m', '$user_id'),";
    }

    $sql = rtrim($sql,",");

    // echo $sql;
    // die;

    $stmt = $conn->dbh->prepare( $sql );
    $stmt->execute();
    $conn = null;

    if ( isset( $sql ) != 0 ) {
        echo "<script>alert('[Insert สำเร็จ]')</script>";
        header( "Refresh:0.5; url=http://localhost/zocute/index.php" );
    } else {
        echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
    }

}
