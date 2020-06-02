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
	
	// DB::printArray($results); สำปรับปริ้นดูค่า array $results

	$forecast=[];

	function forecast(int $a, int $b,int $c) {
		return  ($a*0.17)+($b*0.33)+($c*0.50);
  	}

	
	for ($i = 0; $i < count($results)-2 ; $i++) {
		//สร้าง array เปล่าสำหรับเก็บค่า month และ forecastval
		$arr = [];
		//สร้าง key month และเก็บ value เป็นเดือนที่ทำนาย
		$arr['month'] = $results[$i+2]["month"]+1;
		//สร้าง key forecastval และเก็บค่า ทำนาย
		$arr['forecastval'] = forecast(($results[$i]["sumval"]),($results[$i+1]["sumval"]),($results[$i+2]["sumval"]));
		// push เข้า array forecast ที่สร้างไว้นอก loop
		array_push($forecast,$arr);
	}
	      
	// ตอนนี้ array forecast เก็บข้อมูลลักษณะ array 2d โดยมี key คือ month และ forecast เป็น key ย่อย
	// DB::printArray($forecast); สำปรับปริ้นดูค่า array $forecast

	//loop นี้สำหรับ add ค่า forecastval ใน array forecast เข้าไป array results โดยเช็กจาก key month ว่าเท่ากันไหม
	foreach ($results as $indRes => $res) {
		foreach ($forecast as $indFrct => $frct) {
			if($res['month'] == $frct['month']) {
				echo $results[$indRes]['month'];
				$results[$indRes]['forecastval'] = $frct['forecastval'];
			}
		}
	}

	//เหมือนเสร็จ loop จะเหลือข้อมูล forecast ตัวสุดท้าย เพราะเดือนมันจะมากกว่าเดือนใน result 
	//เลยต้องใช้คำสั่ง array_pop เพื่อส่งออกข้อมูลสุดท้ายจาก array forecast แล้ว push เข้าไปใน result อีกครั้ง
	array_push($results, array_pop($forecast));


	// DB::printArray($results); สำปรับปริ้นดูค่า array $results



	echo "<table border='1' align='center' width='auto'>";
	//หัวข้อตาราง
	echo "<tr align='center' bgcolor='#CCCCCC'>

	<td>ลำดับ</td>
	<td>user_id</td>
	<td>YEAR</td>
	<td>MONTH</td>
	<td>SumValue</td>
	<td>ทำนาย</td>
	
	</tr>";

	$count = 0;
	foreach ($results as $key => $value) {
		echo "<tr>";
		echo "<td>" . strval($count += 1) . "</td> ";
		echo (isset($value["user_id"]))? "<td>" . $value["user_id"] . "</td> "			:"<td></td>";
		echo (isset($value["year"]))? "<td>" . $value["year"] . "</td> "				:"<td></td>";
		echo (isset($value["month"]))? "<td>" . $value["month"] . "</td> "				:"<td></td>";
		echo (isset($value["sumval"]))? "<td>" . $value["sumval"] . "</td> "			:"<td></td>";
		echo (isset($value["forecastval"]))? "<td>" . $value["forecastval"] . "</td> "	:"<td></td>";
		echo "</tr>";
	}
	echo "</table>";

	//ปล.
	// คำสั่ง isset ใช้ check ว่ามีค่านั้นๆจริงไหม ไม่งั้นจะ error ได้ เพราะข้อมูลจาก results ไม่มี key forecastval หรือข้อมูลจาก forecast ไม่มี user_id year sumval
	// คำสั่ง isset จะส่งคืนค่าเป็น 0 ถ้าไม่มีค่านั้น เป็น 1 ถ้ามีค่านั้น
	// คำสั่งที่เรียกว่า short-if จะมี syntax คือ (condition)? true : false;
	// จากข้างบน จะเห็นว่า เมื่อ true จะปริ้น <td>value</td> แต่ถ้า false จะเป็น <td></td> เปล่าๆ
	
}


?>