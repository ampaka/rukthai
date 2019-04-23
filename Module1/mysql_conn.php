<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname ="rukthai";

$mysqli = new mysqli($servername,$username,$password) or die ("Could not Connect..");

//select database
$mysqli->select_db($dbname)or die ("Could not Connect Database..");

?>