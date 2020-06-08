<?php

class TypeSaving {

    private $results;

    public function __construct($conn, $cond) {
        $sql  = "SELECT * FROM typemoney
                 WHERE type_tran = '" . $cond . "';";
        $stmt = $conn->dbh->prepare( $sql );
        $conn = null;
        $this->checkExcute($stmt, $sql);
    }

    private function checkExcute($stmt, $sql) {
        $chk_stmt = $stmt->execute();
	    //get data from database
        if($chk_stmt) { 
            $this->fetchTypeSaving($stmt);
        } else {
            echo json_encode( $stmt->errorInfo(), "query"->$sql);
        }
    }

    private function fetchTypeSaving($stmt) {
        $this->results = $stmt->fetchAll( PDO::FETCH_ASSOC );
    }

    public function getTypeSaving() {
        return $this->results;
    }

    public function getOptionHTML($selected = 0) {
        $str = "";
        foreach ($this->results as $key => $value) {
            $str .= "<option value=". $value['typemoney_id'] ." ".(($selected == $value['typemoney_id']) ? "selected":"").">". $value['typemoney_name'] ."</option>";
        }
        echo $str;
    }

}