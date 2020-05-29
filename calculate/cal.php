<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('calconnect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM saving ORDER BY user_id asc" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 

echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>ค่าใช้จ่าย</td><td>ประเภทค่าใช้จ่าย</td>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["user_id"] .  "</td> "; 
  echo "<td>" .$row["saving_value"] .  "</td> ";  
 echo "<td>" .$row["typemoney_id"] .  "</td> ";
 //$query = 3;
 //if ($query >= 4) {
  //echo "<td>" .$row["typemoney_id"] .  "</td> ";
  
  //} else {
      //echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
 // }

  //echo "<td>" .$row["member_lname"] .  "</td> ";
  //echo "<td>" .$row["email"] .  "</td> ";
  
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>