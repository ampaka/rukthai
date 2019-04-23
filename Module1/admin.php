<?php
$servername="localhost";
$username="root";
$password="";
$dbname="rukthai";

//Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if(!$conn){
	die("Connection failed :".mysqli_connect_error());
}

//create the SQL statement
$admin_no = $_POST["admin_no"];
$admin_position = $_POST["admin_position"];
$admin_name = $_POST["admin_name"];
$admin_fname = $_POST["admin_fname"];
$admin_lname = $_POST["admin_lname"];
$admin_email = $_POST["admin_email"];
$admin_address = $_POST["admin_address"];
$admin_number = $_POST["admin_number"];
$admin_username = $_POST["admin_username"];
$admin_password = $_POST["admin_password"];
$sql="INSERT INTO admin(admin_no,admin_position,admin_name,admin_fname,admin_lname,admin_email,admin_address,admin_number,admin_username,admin_password) values('$admin_no','$admin_position','$admin_name','$admin_fname','$admin_lname','$admin_email','$admin_address','$admin_number','$admin_username','$admin_password')";
echo $sql;

//execute the SQL statement
if (mysqli_query($conn,$sql)) {
	echo "$sql <br>";
	echo "record added!";
}else{
	echo "$sql<br>";
	echo "Error insert record:".mysqli_error($conn);
}

mysqli_close($conn);
?>