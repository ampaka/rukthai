<?php
require('mysql_conn.php');

$admin_no = $_REQUEST['admin_no'];

$sql = "DELETE from admin WHERE admin_no ='$admin_no'";

//excute sql
if($mysqli->query($sql)){
	echo "Record deleted!";
}else{
	echo "Error :",mysql_error();
}
$mysqli->close();
?>