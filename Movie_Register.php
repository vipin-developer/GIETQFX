<?php 
session_start();
include('connection.php');

	$M_Name=$_POST["Name"];
	$M_Genre=$_POST["Genre"];
	$M_Director=$_POST["Actor"];
    $M_time=$_POST["Time"];
    $M_Date=$_POST["Date"];
    $M_Comment=$_POST["comment"];
    //$MovieImage=$_POST['MovieImage'];

	
    $path = "MovieImage/";
if (isset($_POST["submit"])) {
   if(move_uploaded_file($_FILES['MovieImage']['tmp_name'] ,"$path".$_FILES['MovieImage']['name'])) 
        {
        $patha=$_FILES['MovieImage']['name'];
        $_SESSION['MovieImage']="The file ".( $_FILES['MovieImage']['name'])." is uploaded successfully.";
         //header("Location:index.php");
        } 
        else
        {
        $patha="0";
        $_SESSION['MovieImage']="The file could not be uploaded this time! Please try again later.";
         //header("Location:index.php");
        }

	$sql="INSERT into movies(m_name,m_director,m_genres,m_time,m_date,comment,MovieImage) values('$M_Name','$M_Director','$M_Genre','$M_time','$M_Date','$M_Comment','  $patha')";
	if ($con->query($sql) === TRUE) {
		$_SESSION['MovieImage']="Record uploaded successfully";
     header('Location:movies_upload.php');
        //echo "Record uploaded successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $con->error;
	}
	mysqli_close($con);
	
}
else{
    header('Location:movies_upload.php');
}

?>