<?php 
	session_start();
	include 'connection.php';

	/* 
	

$val=$_SESSION['movies_id'];
$c=0;
$booked=mysqli_query($con,"SELECT * FROM booking WHERE movie_name='kabil '");
			while ($result1=mysqli_fetch_assoc($booked)) {
				$seatno=unserialize($result1['seat']);
			foreach ($seatno as $key) {
				 echo "$key";
				 $c++;

				 
			};
			}
echo "\n$c";
*/
if (!empty($_POST['Email'])) {
	$email=$_POST['Email'];;
	$result ="SELECT count(*) FROM customers WHERE cu_mail=?";
		$stmt = $con->prepare($result);
		$stmt->bind_param('s',$email);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo "<span style='color:red'> Email already exist .</span><br>";
}
}
			
?>