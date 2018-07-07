<!DOCTYPE html>
<html>

<head>

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
 background:url('admin.jpg');
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
.columns {
    -webkit-columns: 150px 3; /* Chrome, Safari, Opera */
    -moz-columns: 200px 3; /* Firefox */
    columns: 300px 2;
}


#corners {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 50px; 
    width: 500px;
    height: 318px;     
}
#corners2 {
    border-radius: 25px;
    border: 0px solid #73AD21;
    padding: 50px; 
    width: 500px;
    height: 500px;     
}
  </style>


</head>
<body>
<a href="index.php"><Strong>Home</Strong></a>
<div class="backgroundImageCVR">
<div class="background-image" ></div>
  <div class="content" >
   

    <u>
  <h1 align="center">GIET MOVIES</h1>
    </u>
                      </br></br>

      <div class="columns" >

        
        <h2>ADMIN</h2>
  <form action="admin_process.php" onsubmit="return validateForm()" name="cu_reg" method="post" id="corners" >
          <div class="col-xs-15"  >
              <div class="form-group" id="frm">
                  <label for="email">User Name:</label>
                  <input type="text" class="form-control"  name="email" placeholder="Enter user name.">
              </div>
              <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control"  name="password" placeholder="Enter password">
              </div>
                          <button type="submit" name="submit" class="btn btn-default">Submit</button>
          </div>
  </form>
  



                          </br></br>


            <img src="mov.png"  height="40%" width="40%" id="corners2">
           
                        </div>
      </div>
      
  
                 
                    </div>

</div>

</div>



    <script type="text/javascript">
        
        function validateForm() {
           
            var V1 = document.forms["cu_reg"]["email"].value;
            if (V1 == "") {
                alert("Enter Username.");
                return false;
            }
          
            var V2 = document.forms["cu_reg"]["password"].value;
            if (V2 == "") {
                alert("Enter Password.");
                return false;
            }
        
        }   
        
        
    </script>

</body> 
</html>
