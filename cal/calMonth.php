<?php
include '../config.php';
include '../classes/DB.php';
session_start();

if ( isset( $_SESSION['users'] ) ) {
	$user_id = $_SESSION['users']['user_id'];
	
	$sql = " SELECT ROW_NUMBER() OVER(ORDER BY year,month) AS num,
                saving_date,
				year(saving_date) year,
				month(saving_date) month,
				SUM(saving_value) as sumval , 
				saving.user_id ,
				saving.saving_value
			FROM saving
			WHERE user_id = '$user_id' AND typemoney_id BETWEEN 4 and 9
			GROUP BY year,month 
			ORDER BY year,month ASC";


	// create connection db
	$conn = DB::getInstance();
	// prepare sql ส่วนนี้สามารถตรวจสอบได้ว่า sql เรา syntax ผิดไหม
	$stmt = $conn->dbh->prepare( $sql );
	// run คำสั่ง sql ของเราใน database
	$stmt->execute();
	//get data from database
	$results = $stmt->fetchAll( PDO::FETCH_ASSOC );
	//close connection
	$conn = null;

	echo "<table border='1' align='center' width='auto'>";
	//หัวข้อตาราง
	echo "<tr align='center' bgcolor='#CCCCCC'>

	<td>ลำดับ</td>
	<td>user_id</td>
	<td>YEAR</td>
	<td>MONTH</td>
	<td>SumValue</td></tr>";


	foreach ($results as $key => $value) {
		echo "<tr>";
		echo "<td>" . $value["num"] . "</td> ";
		echo "<td>" . $value["user_id"] . "</td> ";
		echo "<td>" . $value["year"] . "</td> ";
		echo "<td>" . $value["month"] . "</td> ";
		echo "<td>" . $value["sumval"] . "</td> ";
	
	}
	echo "</table>";
	

}


?>