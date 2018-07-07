<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="giet qfx";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con) {
	die("connetion_failed:". mysqli_connect_error());
}
//else{
//	echo "connection created";
//}

	mysqli_select_db($con,'giet qfx') or die("Could not select database");
	
?>