<?php
	session_start();
	if ($_SESSION['login']) {
		
		include 'connection.php';
	$feedback=$_POST['FeedBack'] ;
	$login=$_SESSION['login'];
	$sql="update customers set feedback='$feedback' WHERE cu_mail='$login'";
	if ($con->query($sql) === TRUE) 
		{
			$_SESSION['feedback']="Thank you for your feedback.";
    		//header("Location: index.php");
    		//echo $_SESSION['feedback'];
    		header("Location: index.php");
	} else {
    	echo "Error: " . $sql . "<br>" . $con->error;
	}
	mysqli_close($con);
	
	}
	else
	{
		header("Location: login.php");
	}

?>