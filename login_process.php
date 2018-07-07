<?php
session_start();
	include 'connection.php';
	$email=$_POST['email'];
	$password=$_POST['password'];
	$email=stripslashes($email);
	$password=stripslashes($password);
	$email=mysql_real_escape_string($email);
	$password=mysql_real_escape_string($password); 
  	$hash = md5($password);

	if (isset($_POST['submit'])) {
		$sql="SELECT * FROM customers WHERE cu_mail='$email'";
		$result=mysqli_query($con,$sql) or die ("error:".mysqli_errno($con));
		$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if (isset($row)) {
			if( $num_row >=1 ) {
				$password=$row['cu_password'];
				if ( hash_equals($hash,$password)) {
				//echo "$row['cu_mail']";
					$_SESSION['user_name']=$row['cu_mail'];
					$_SESSION['login']=$row['cu_mail'];
					$_SESSION['name']=$row['cu_name'];
					//echo ".{loged in successfully}.";
					header('Location:index.php');
				}
				else
				{
					$_SESSION['login_erorr']= '';
					echo'Wrong password or email!! Try Again';
					//header("Location:login.php");
				}
			}
		}
		else
				{
					echo 'Wrong password or email!! Try Again';
				}
		
	}
	else{
		header('Location:login.php');
	}

?>