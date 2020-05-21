<?php
    include '../config.php';
    include '../classes/DB.php';
    session_start();

    if(isset($_GET["date"], $_GET["typeIncome"], $_GET["note"], $_GET["moneyIncome"], $_SESSION['users'])) {
        $date = $_GET["date"];
        $typeIncome = $_GET["typeIncome"];
        $note = $_GET["note"];
        $moneyIncome = $_GET["moneyIncome"];
        $user_id = $_SESSION['users']['user_id'];
        $month = intval(explode("-", $date)[1]);

        $conn = DB::getInstance();
        $sql = "INSERT INTO `saving` (`user_id`, `typemoney_id`, `saving_detail`, `saving_value`, `saving_date`, `month_id`) 
                VALUES ('$user_id', '$typeIncome', '$note', '$moneyIncome', '$date', '$month')
                ";
        // print_r($sql);
        // die;
        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $conn = null;

        if(isset($sql) != 0) {
        echo "<script>alert('[Insert สำเร็จ]')</script>";
        header("Refresh:0.5; url=http://localhost/zocute/index.php");
        } else {
            echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
        }

    }