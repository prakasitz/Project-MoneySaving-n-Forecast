<?php
    include '../config.php';
    include '../classes/DB.php';
    session_start();
    
        if(isset($_GET['saving_id'],$_SESSION['users'])) {
            $saveid = $_GET['saving_id'];
            $user_id = $_SESSION['users']['user_id'];

            $sql = "SELECT saving.user_id,
                           saving.saving_id,
                           saving.saving_date,
                           saving.typemoney_id,
                           saving.saving_detail, 
                           saving.saving_value,
                           typemoney.type_tran as 'type_trans'
                    FROM saving
                    INNER JOIN typemoney 
                    ON saving.typemoney_id = typemoney.typemoney_id 
                    WHERE saving.saving_id = '$saveid' AND saving.user_id = '$user_id' 
                ";
            
	        $conn = DB::getInstance();
            $stmt = $conn->dbh->prepare( $sql );
            $chk_stmt = $stmt->execute();
            
            if($chk_stmt) {
                $_SESSION['saving'] = $stmt->fetchAll( PDO::FETCH_ASSOC );
                //DB::printArray($_SESSION['saving']);
                header("Refresh:0.3; url=./edit_saving.php");
            } //else {
                //echo "Error<br>";
                //print_r ($stmt->errorInfo());
                //echo $sql;
           // }   
        }
        $conn = null;
    
        