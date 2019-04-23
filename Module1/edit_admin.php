<?php
//รับค่ารหัสแผนกจากฟอร์ม
$admin_no =$_REQUEST['admin_no'];

require('mysql_conn.php');

//สร้างคำสั่ง sql
$query = "SELECT * FROM admin WHERE admin_no = '$admin_no'";
// สั้งให้คำสั่ง sql ทำงาน
$result =$mysqli->query($query) or die ("Query Failed");

//ดึงข้อมูลมาใส่ในตัวแปล
$row = $result->fetch_array();
$admin_no = $row['admin_no'];
$admin_fname = $row['admin_fname'];
echo "<b>แก้ไขข้อมูลของรหัสแผนก $admin_no</b>";

//สร้าง ฟอร์มสำหรับข้อมูลใหม่
echo "<form action =\"update_admin.php\" methos=\"post\">";
echo "<input type=\"hidden\" name=\"admin_no\" value=\"$admin_no\">";
echo "ชื่อ : <input type=\"text\" name=\"admin_fname\" value=\"$admin_fname\">";
echo "<br><input type=\"submit\" name=\"update\" value=\"Update\">";
echo "</form>";

$result->free();
$mysqli->close();
?>