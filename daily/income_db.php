<?php
    include '../config.php';
    include '../classes/DB.php';
    session_start();

    if(isset($_GET["date"]) && isset($_GET["typeIncome"]) && isset($_GET["note"]) && isset($_GET["moneyIncome"])) {
        $date = $_GET["date"];
        $typeIncome = $_GET["typeIncome"];
        $note = $_GET["note"];
        $moneyIncome = $_GET["moneyIncome"];

       

        $conn = DB::getInstance();
        $sql = "INSERT INTO income (in_date,in_amount,in_type,in_note)
                VALUES ('$date' , '$moneyIncome', '$typeIncome' ,'$note')
                ";
        // print_r($sql);
        // die;
        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $conn = null;

        // $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        // print_r($result); 
        $_SESSION["typeIncome"] = $_GET["typeIncome"];
        $_SESSION["moneyIncome"] = $_GET["moneyIncome"];
    
        if(isset($sql) != 0) {
        echo "<script>alert('[Insert สำเร็จ]')</script>";
        header("Refresh:0.5; url=http://localhost/zocute/index.php");
        } else {
            echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
        }

    }