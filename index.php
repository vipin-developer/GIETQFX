<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>GIETMOVIES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <!-- Insert to your webpage before the </head> -->
    <script src="http://uguru-realestate-us-jun202013.businesscatalyst.com/3d-slider/sliderengine/jquery.js"></script>
    <script src="http://uguru-realestate-us-jun202013.businesscatalyst.com/3d-slider/sliderengine/amazingslider.js"></script>
    <script src="http://uguru-realestate-us-jun202013.businesscatalyst.com/3d-slider/sliderengine/initslider-1.js"></script>
     <link href="1/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="1/thumbnail-slider.js" type="text/javascript"></script>
    <!-- End of head section HTML codes -->
  <style>
  #parallax {
    /* The image used */
    background-image: url('cu.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
@media only screen and (max-device-width: 1024px) {
    #parallax {
        background-attachment: scroll;
    }
}


  body {
      position: relative; 
      background: black;
      }
   .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 90%;
      margin: auto;
  }
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
}


.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


.container {
    padding: 2px 16px;
}
table{
                background-color: #2F4F4F;

            }
            th{
                font-family: "Arial Black", Gadget, sans-serif;
                font-size: 16pt;
                color: white;

            }
             td {

                cursor: pointer;
                color:white;
              font-size: 12pt;

                padding: 3px;
                text-align: left;

            }
            #corners {
    border-radius: 25px;
    border: 3px solid black;
    padding: 2px; 
    width: 500px;
    height: 318px;     
}
        


  #section1 {padding-top:50px;height:400px;color: #fff; background-color:  #262626;}
  #section2 {padding-top:50px;height:580px;color: #fff; background-color: #737373}
  #section3 {padding-top:50px;height:800px;color: #fff; background-image: white;}
  container-fluid{
    center;
  }
  h2{
    color: black;
     font-family: "Times New Roman", Times, serif;
  }
  h3{
     font-family: "Times New Roman", Times, serif;
  }
  
  </style>
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50" id="parallax">



<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand" href="#">GIETMOVIES</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Trailers</a></li>
         <li><a href="#"></a></li>   
          <li><a href="#section2">Movies</a></li>
         <!-- <li><a href="admin.php">Admin</a></li> -->
           <li><a href="#section3">ContactUs</a></li> 
        <?php if (isset($_SESSION["admin"])) { ?>
         <li><a href="logout.php">Logout</a></li>
         <li><a href="movies_upload.php">Upload Movie</a></li>
          <li><a href="https://www.facebook.com/binay.kushwaha.7">Welcome ADMIN</a></li>
        <?php } elseif (isset($_SESSION['user_name'])) { ?>
       <li><a href="logout.php">Logout</a></li>
       <li><a href="#">Welcome &nbsp;<?php echo $_SESSION["name"] ;?></a></li>
       <?php } else { ?>
       <li><a href="login.php">Login</a></li>   
       <?php } ?>
       
    
        </ul>
      </div>
    </div>
</nav>    
 <div class"container">
 </br>
        <div class"row topspace">
        <div class"col-md-12">
    <!-- Insert to your webpage where you want to display the slider -->
  
    <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 56px;">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img  src="Dangal.jpg"  /></li>
            <li><img src="Raees.jpg"  /></li>
            <li><img src="Kabil.jpg"  /></li>
           
        </ul>
    </div>
    <!-- End of body section HTML codes -->
    </div></div></div>

<div id="section1"  class="container-fluid">
</br>
</br>
</br>
</br>
<br>
      <br>
      <br>
     
<center><u><h1 >GIET MOVIES</h1></u></center>
</div>
<h1>TRAILERS</h1>


<iframe width="450" id="corners" height="315" controls; src="https://www.youtube.com/embed/nubDFeiUAsI"></iframe>
<iframe width="450" id="corners" height="315" controls; src="https://www.youtube.com/embed/8iv3ksZs0hk"></iframe>


  </div>
  
<div id="section2" class="container-fluid"  >
<u>

<h1 align="center">Movies</h1>
</u>
<marquee behaviour=alternate scrollamount=5>
<?php  include 'connection.php'; 
$sql="SELECT * FROM movies";
$query=mysqli_query($con,"$sql",MYSQLI_USE_RESULT);
 while ($row=mysqli_fetch_assoc($query)):
?>
<div class="col" >
<div class="col-xs-4" >
  <img src="<?php echo $row['MovieImage']?>" class="img-responsive" width="400" height="336">
  <div class="container" > 
    <p> <?php echo $row['m_director']?></p>
    <h4><b><?php echo $row['m_name']?></b></h4> 
    <?php if (isset($_SESSION['login'])) { ?>
     
     <table border="0">  
     <tr>
    <td> <form action="seatlayout.php?m_id=<?=$row['m_id']; ?>" method="post">
          <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
          <button type="submit"  class="btn btn-primary">BOOK NOW</button>
        </form> 
        </td>
   <?php }  ?>
    
        
       <td> <form action="details.php?m_id=<?=$row['m_id']; ?>" method="post">
          <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
          <button type="submit"  class="btn btn-primary">DETAILS</button>
        </form>
        </td>
                </tr>
        </table>
    </div>
  </div>
  </div>
  </div>
   <?php endwhile; ?>

  </marquee>
  </div>


<div id="section3" class="container-fluid">
<?php if (isset($_SESSION['feedback'])) {
                      $var=$_SESSION['feedback'];
                      $_SESSION['feedback']="";
                      echo "$var";
                     }  ?>

<h1>FEEDBACK</h1>
<form action="feedback.php" method="post" >
<div class="form-group">
<div class="col-xs-6">
  <label for="comment">FeedBack:</label>
  <textarea class="form-control" rows="10" cols="8" id="comment" name="FeedBack" ></textarea></br>
  <center>
  <input type="submit" class="btn btn-primary" name="submit" value="FEEDBACK" >
  </center>
  </div>
</div>
</form>
<div class="col-md-5 col-md-push-1 address">
          <address>
          <h3>Gandhi Instute of Engineering & Technology</h3>
          Gunupur, Rayagada 765022<br>
          Phone: 06857-250170,06857-2501110<br>
          E-mail: gietmovies@giet.edu<br>
          Fax No:0110200
          </address>

          <h3>Social Icons</h3>
          <li class="social"> 
          <a href="#"><i class#="fa fa-facebook-square fa-size" style="font-size:36px"> </i></a>
          <a href="#"><i class="fa  fa-twitter-square fa-size" style="font-size:36px"> </i> </a> 
                                         <a href="#"><i class="fa fa-instagram fa-size" style="font-size:36px"> </i> </a> 
                                         <a href="#"><i class="fa fa-youtube fa-size" style="font-size:36px"> </i> </a> 
          </li>
        </div>
        


  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
