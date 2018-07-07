<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>BookingDetails</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<script type="text/javascript">
function myFunction() {
    window.print();
}

</script>
<?php
	include 'connection.php';
  $var=$_SESSION["login"];
	$result=mysqli_query($con,"SELECT * FROM customers WHERE cu_mail='$var'");
  ?>
<div class="container" id="maindiv" >
  <h2>Booking Details</h2>                            
  <table class="table table-hover">
  
    <tbody>
    <?php while ($row=mysqli_fetch_array($result)): ?>
      <tr>
        <td> Customer Name</td>
        
        <td><?php echo $row['cu_name']; ?></td>
        
      </tr>
      <tr>
        <td>Customer Number</td>
       
        <td><?php $Number=$row['cu_number'];  
        echo $row['cu_number']; ?></td>
      
      </tr>
      <tr>
        <td>Customer E-mail </td>
       
        <td><?php echo $row['cu_mail']; ?></td>
   
      </tr>
       <?php endwhile; ?>
       <?php $var=$_SESSION["price"];
              $var1=$_SESSION["seat"];
      $result=mysqli_query($con,"SELECT * FROM booking WHERE seat='$var1' AND price='$var'");
       while ($row=mysqli_fetch_array($result)):
      ?>
      <tr>
        <td>Amount to pay</td>
        <td><img src="Rupee_symbol.png"> <?php echo $row['price']; ?></td>
      </tr>
      <tr>
        <td>Seat are</td>
        <td>
          <?php
          $val1=$row['seat'];
          $val=unserialize($val1);
         // echo "$val";

        foreach ($val as $key) {
            echo "$key";
          }
           ?>
        </td>
      </tr>
      <tr>
        <td>BookedMovie</td>
        <td><?php $m_name= $row['movie_name'];
        echo $row['movie_name']; ?></td>
      </tr>
      
      <tr>
        <td>Date</td>
        <td><?php $date= $row['movie_date'];
        echo $row['movie_date']; ?></td>
      </tr>
      <tr>
        <td>Show Time</td>
        <td><?php $Time=$row['movie_time'];
        echo $row['movie_time']; ?></td>
      </tr>
       <?php endwhile; ?>
       <tr>
         <td><input id="button1" type="button"  class="btn btn-primary" value="Print your ticket" onclick="myFunction();"/></td>
       </tr>
    </tbody>
  </table>
                <span id="loading" style="visibility: hidden; text-align: center;">
                <img src="loading_create.gif" id="Img5" data-transition="slide" />
</span>
          
</div>
<style type="text/css">
  #button1{
    top: 110%;
  }
  html,body{
    background-color:  #f2f7ff;
  }
</style>
<?php
  
  echo "$Number"; 
  echo "$m_name";
  echo "$date";
$cars = array($val[0], $val[0], $val[0]); 
echo "I like " . $val[0] . ", " . $val[1] . " , " . $val[2] . ".";
print_r($val[1]);print_r($val[2]);

  $ch = curl_init();
 $user="gietasian@gmail.com:nexpo@sms";
  $receipientno=$Number; 
  $senderID="TEST SMS";
  $msgtxt = '';
  $st='BookedMovie:'; 

      curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$st+$m_name+on+$date+at+$Time+seat:+$val[0]+$val[1]+$val[2]+$val[3]+$val[4]");
      $buffer = curl_exec($ch);
    if(empty ($buffer))
      { 
        echo " buffer is empty "; 
      }
    else
      { 
        echo $buffer;
        echo "message send";
      } 

      curl_close($ch);

 
?>

</body>
</html>