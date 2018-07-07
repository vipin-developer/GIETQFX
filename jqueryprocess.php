<?php
session_start();
include 'connection.php'; 
$seat=$_POST["seat"];
$moviename=$_POST["movie_name"];
$moviedate=$_POST["movie_date"];
$movietime=$_POST["movie_time"];
$_SESSION['seat'] = serialize($seat);
$dataString=$_SESSION['seat'];
//$de=unserialize($dataString);
$_SESSION['price'] = $_POST["price"];
$price=$_SESSION['price'];
//echo ".{$_SESSION['seat']}.";
//echo "$price";

//foreach ($_SESSION['seat'] as $key => $value) {
//	echo "$value";

 $sql="INSERT INTO booking(seat,price,movie_name,movie_date,movie_time) 
 VALUES('$dataString','$price','$moviename','$moviedate','$movietime')";
if ($con->query($sql) === TRUE) 
{
		//$_SESSION['MovieImage']="Record uploaded successfully";

   header('Location:process.php');
    echo "record inserted.";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
	}
	mysqli_close($con);

?>