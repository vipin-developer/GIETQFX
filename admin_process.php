<?php
session_start();
	include 'connection.php';
	$email=$_POST['email'];
	$password=$_POST['password'];
	$email=stripslashes($email);
	$password=stripslashes($password);
	$username=mysql_real_escape_string($email);
	$password=mysql_real_escape_string($password); 
  	$hash = md5($password);

	if (isset($_POST['submit'])) {
		$sql="SELECT * FROM customers WHERE cu_name='$username'";
		$result=mysqli_query($con,$sql) or die ("error:".mysqli_errno($con));
		$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if (!empty($row)) {
			if( $num_row >=1 ) {
				$password=$row['cu_password'];
				if ( hash_equals($hash,$password)) {
					$_SESSION['admin']=$row['cu_name'];
					$_SESSION['hero']=$row['cu_name'];
					//echo ".{loged in successfully}.";
					header('Location:index.php');
				}
				else
				{
					echo 'Wrong password or email!! Try Again';
				}
			}
		}
			
			
		
		else{
				echo 'Wrong password or email!! Try Again';
			}
	}
	else{
		header('Location:admin.php');
	}

?>