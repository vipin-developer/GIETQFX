<?php  session_start();?>
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
 background:url('Powe.jpg');
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
    height: 480px;     
}
</style>
</head>
<body >
<a href="index.php">HOME</a>
<div class="backgroundImageCVR">
<div class="background-image" ></div>
  <div class="content" >
  
  <h1 align="center"><u>SIGN UP PAGE</u></h1>

<div class="container" id="corners">
                  <div>
                     
                             <form name="cu_reg" action="customer_process.php" onsubmit="return validateForm()" method="post">
                                                <div class="form-group">
                                  Name:<br><input type="text" name="Name" placeholder="Enter Your Name" class="form-control" ><br>
                                     Roll NO:<br> <input type='text' name="Roll" placeholder="Enter Your Roll NO." class="form-control" ><br>
                                         Mobile:<br><input type="Number" name="Mobile" placeholder="Enter Your Mobile NO" class="form-control" ><br>
                                                Email:<br><input type="Email" name="Email" placeholder="Enter Your Email" class="form-control"  onblur="checkemail()"><br>
                                                <span id="useravailability" style="font-size: 12px">
                                                  
                                                </span>
                                Password:<br><input type="Password" name="Password" placeholder="Enter Your Password" class="form-control" ><br> 
                                                <center>
                                                <button type="submit" class="btn btn-default" name="submit">Register</button></center>
                                                </form>
                                            </div>
                                            
                                      </div>

                                      </div>
                                      </div>
                                      </div>

    <script type="text/javascript">
    function checkemail() {
      var val=document.forms["cu_reg"]["Email"].value;
      $.ajax(
      {
        method:'post',
        url:"check_availability.php",
        data:{Email:val},
        success:function(data)
        {
          $(useravailability).html(data);
        }
        ,
        error:function(){
          event.preventDefault();
          alert("error")  
        }
      }
        )
    }
        
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