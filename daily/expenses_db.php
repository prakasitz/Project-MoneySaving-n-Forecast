<?php
    include '../config.php';
    include '../classes/DB.php';
    session_start();

    if(isset($_GET["date"]) && isset($_GET["typeExpenses"]) && isset($_GET["note"]) && isset($_GET["moneyExpenses"])) {
        $date = $_GET["date"];
        $typeExpenses = $_GET["typeExpenses"];
        $note = $_GET["note"];
        $moneyExpenses = $_GET["moneyExpenses"];


        $conn = DB::getInstance();
        $sql = "INSERT INTO expenses (ex_date,ex_amount,ex_type,ex_note)
                VALUES ('$date' , '$moneyExpenses', '$typeExpenses' ,'$note')
                ";
         // print_r($sql);
        // die;
        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $conn = null;
        // $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        // print_r($result); 
        $_SESSION["typeExpenses"] = $_GET["typeExpenses"];
        $_SESSION["moneyExpenses"] = $_GET["moneyExpenses"];
    
        if(isset($sql) != 0) {
        echo "<script>alert('[Insert สำเร็จ]')</script>";
        header("Refresh:0.5; url=http://localhost/zocute/daily/expenses.php");
        } else {
            echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
        }
    }