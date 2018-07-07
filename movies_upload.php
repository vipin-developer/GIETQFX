<?php session_start();
if (isset($_SESSION['admin'])) { ?>

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
    height: 750px;     
}
#label{
  font-family: serif;
  font-size: 20px;
}
</style>
</head>
<body >
<a href="index.php"><Strong>Home</Strong></a>
<div class="backgroundImageCVR">
<div class="background-image" ></div>
  <div class="content" >
  <h1 align="center"><u>Upload Movie Content</u></h1>

<div class="container" id="corners">

                  <div>
                     <?php if (isset($_SESSION['MovieImage'])) {
                      $var=$_SESSION['MovieImage'];
                      $_SESSION['MovieImage']="";
                      echo "$var";
                     }  ?>
   <form  action="Movie_Register.php"  method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label id="label">Movie Name:</label> <br><input type="text" name="Name" placeholder="Enter Movie Name" class="form-control" required="" ><br>
         <label id='label'>Genre:</label><br> <input type='text' name="Genre" placeholder="Enter Movie Genre type." class="form-control" required=""><br>
         <label id="label">Actor:</label> <br><input type="text" name="Actor" placeholder="Enter Movie Actor." class="form-control" required=""><br>
         <label id="label">Show Time:</label> <br><input type="Time" name="Time" placeholder="Enter Movie Show Time." class="form-control" required=""><br>
         <label id="label">Date of Show:</label> <br><input type="Date" name="Date" placeholder="Enter Movie Date." class="form-control" required=""><br>
        <label id="label">Movie Image:</label> <br><input type="file" name="MovieImage" id="MovieImage" placeholder="Enter Movie Image." class="form-control" accept="Image/*" required=""><br>
        <label id="label"> Description:</label><br> <textarea name="comment" rows="4" cols="50" class="form-control" required=""></textarea>
        <center>
        <button type="submit"  class="btn btn-primary" name="submit">Register</button></center>
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
<?php } else {
    header('Location:index.php');
    }
?>