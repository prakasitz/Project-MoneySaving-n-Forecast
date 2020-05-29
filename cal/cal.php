<?php
//1. เชื่อมต่อ database: 
include('connection.php'); 

session_start();
    if(isset($_SESSION['users'])) {
        $user_id = $_SESSION['users']['user_id'];
	}	
    $query = " SELECT saving_date , SUM(saving_value) as sumval , saving.user_id ,saving.typemoney_id,
                saving.saving_id,saving.saving_value
            FROM saving
            WHERE user_id = '$user_id'AND typemoney_id BETWEEN 4 and 9
            GROUP BY saving_date
            ORDER BY saving_date ASC";
//2. query ข้อมูลจากตาราง 
//$query = "SELECT * FROM saving ORDER BY user_id asc" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo "<table border='1' align='center' width='auto'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'>
      <td>user_id</td>
      <td>DATE</td>
      <td>SumValue</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["user_id"] .  "</td> "; 
  echo "<td>" .$row["saving_date"] .  "</td> ";
  //echo "<td>" .$row["typemoney_id"] .  "</td> ";  
  //echo "<td>" .$row["saving_id"] .  "</td> ";
  //echo "<td>" .$row["saving_value"] .  "</td> ";
  echo "<td>" .$row["sumval"] .  "</td> ";
}
echo "</table>";
//5. close connection
mysqli_close($con);

?>