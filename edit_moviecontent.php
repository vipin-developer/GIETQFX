
    <?php session_start();
      if (isset($_SESSION['admin'])) {  ?>


    
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  
  .backgroundImageCVR{
  position:relative;
  padding:85px;
}

.background-image{
  position:absolute;
  left:0;
  right:0;
  top:0;
  bottom:0;
 background:url('upload.jpg');
  background-size:cover ;
  z-index:1;
  -webkit-filter: blur(10px);
  -moz-filter: blur(20px);
  -o-filter: blur(20px);
  -ms-filter: blur(20px);
  filter: blur(10px); 
}
.content{
  position:relative;
  z-index:2;
  color:#fff;
}

#corners {
    border-radius: 25px;
    border: 6px solid #73AD21;
    padding: 50px; 
    width: 500px;
    height: 700px;     
}
</style>
</head>
<body >
<a href="index.php"><Strong>Home</Strong></a>
<div class="backgroundImageCVR">
<div class="background-image" ></div>
  <div class="content" >
  <h1 align="center"><u>Edit Movie Content</u></h1>

<div class="container" id="corners">

                  <div>
                     <?php if (isset($_SESSION['MovieImage'])) {
                      $var=$_SESSION['MovieImage'];
                      $_SESSION['MovieImage']="";
                      echo "$var";
                     }
                     include 'connection.php';
					$sql="select * from movies where m_id={$_GET['m_id']}";
	 				$result=mysqli_query($con,"$sql",MYSQLI_USE_RESULT);
					$row=mysqli_fetch_assoc($result);  
                     ?>
   <form  action="edit_movieprocess.php?m_id=<?=$row['m_id']; ?>"  method="post" enctype="multipart/form-data">
        <div class="form-group">
         Movie Name:<br><input type="text" name="Name" value="<?php echo $row['m_name'];?>" class="form-control" required="" ><br>
         Genre:<br> <input type='text' name="Genre" value="<?php echo $row['m_genres'];?>" class="form-control" required=""><br>
         Actor:<br><input type="text" name="Actor" value="<?php echo $row['m_director'];?>" class="form-control" required=""><br>
         Show Time:<br><input type="Time" name="Time" value="<?php echo $row['m_time'];?>" class="form-control" required=""><br>
         Date of Show:<br><input type="Date" name="Date" value="<?php echo $row['m_date'];?>" class="form-control" required=""><br>
         Movie Image:<br><input type="file" name="MovieImage" id="MovieImage" value="<?php echo $row['MovieImage'];?>" class="form-control" accept="Image/*" required=""><br>
         Description:<br> <textarea name="comment" rows="4" cols="50" class="form-control" required=""></textarea>
        <center>
        <button type="submit" class="btn btn-default" name="submit">Register</button></center>
  </form>
                                            </div>
                                            
                                      </div>

                                      </div>
                                      </div>
                                      </div>

    <script type="text/javascript">
        
        function validateForm() {
            var v1 = document.forms["cu_reg"]["Name"].value;
            if (v1 == "") {
                alert("Please Enter Name.")
                return false;
            }
            var V2 = document.forms["cu_reg"]["Roll"].value;
            if (V2 == "") {
                alert("Enter Roll NO.");
                return false;
            }
            var V4 = document.forms["cu_reg"]["Email"].value;
            if (V4 == "") {
                alert("Enter Email.");
                return false;
            }
            var V5 = document.forms["cu_reg"]["Mobile"].value;
            if (V5 == "") {
                alert("Enter Mobile.");
                return false;
            }
            var V6 = document.forms["cu_reg"]["Password"].value;
            if (V6 == "") {
                alert("Enter Password.");
                return false;
            }
        
        }   
        
        
    </script>

</body>
</html>
        
        
    </script>

</body>
</html>
<?php }

else{
  header("location:index.php");
}
?>