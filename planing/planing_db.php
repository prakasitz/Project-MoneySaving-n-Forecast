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
   
    if ( isset( $_SESSION['users'],$_GET["m"]) ) {
         $m1         = $_GET["m"]; //เดือน
        $user_id = $_SESSION['users']['user_id'];
        $sql1 ="SELECT u1.typemoney_id,  
                TRUNCATE(( sum(u1.uplan_value)*100/(SELECT sum(u2.uplan_value) FROM userplan as u2 
                WHERE u2.month_id = '$m1'   AND u2.user_id = '$user_id')), 2) as pv_percent,
                sum(u1.uplan_value) as sumplan,
                (SELECT sum(u3.uplan_value) FROM userplan as u3  WHERE u3.month_id = 6 AND u3.user_id = '$user_id') as sumplan,
                 u1.month_id
                 FROM userplan as u1
                 WHERE u1.month_id = '$m1'   AND u1.user_id = '$user_id'
                GROUP BY u1.typemoney_id

                ";
                //print_r($user_id) ;
                //echo $sql1;
                $conn = DB::getInstance();
                $stmt = $conn->dbh->prepare( $sql1);
                $chk_stmt = $stmt->execute();

                if($chk_stmt) {
                $_SESSION['sumplan'] = $stmt->fetchAll( PDO::FETCH_ASSOC );
                DB::printArray($_SESSION['sumplan']);
                //header("Refresh:0.3; url=./.php");
            }          
    }
    //if ( isset( $sql ) != 0 ) {
      // echo "<script>alert('[Insert สำเร็จ]')</script>";
      //header( "Refresh:0.5; url=http://localhost/zocute/planing/planing.php" );
      //}
        
    // else {
    //echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
    //}
}

 