<?php
include "connection.php";
$name=$_POST['Name'];
$rollno=$_POST['Roll'];
$email=$_POST['Email'];
$mobile=$_POST['Mobile'];
$password=md5($_POST['Password']);

	if (isset($_POST['submit'])) {
		$sql1="SELECT * FROM customers WHERE cu_mail='$email'";
		$result=mysqli_query($con,$sql1) or die ("error:".mysqli_errno($con));
		$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if (isset($row)) {
			//$_SESSION['exist']="customer email already exist.";
			echo "customer email already exist.";
			
			//header('Location:signup.php');
			
		}
		else{
				$sql="Insert into customers(cu_name,cu_mail,cu_number,cu_roll,cu_password) 
				values('$name','$email','$mobile','$rollno','$password')";
				if ($con->query($sql) === TRUE) 
				{
					$_SESSION['register']="Registered successfully";
    				header("Location: login.php");
    			//echo "$_SESSION['MovieImage']";
    			//header("Location: index.php");
				} else
				{
    				echo "Error: " . $sql . "<br>" . $con->error;
				}
		}

	
	mysqli_close($con);
	}
	
 ?>
