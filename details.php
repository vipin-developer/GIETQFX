<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>MovieDetails</title>
    <?php  include 'connection.php';
    $val=$_GET['m_id']; 
    $sql="SELECT * FROM movies where m_id='$val'";
    $query=mysqli_query($con,"$sql",MYSQLI_USE_RESULT);
    $row=mysqli_fetch_assoc($query);
?>
    <style>
    .backgroundImageCVR{
    position:relative;
    padding:80px;
}
.background-image{
    position:absolute;
    left:0;
    right:0;
    top:0;
    bottom:0;
 background:url("<?php echo $row['MovieImage']?>");
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
    color:#000;
    top: 10%;
}

 #columns {
    top: 30%;

}
#head{
    left: 30%;
}
#image{
   
    height: 400px;
    width: 70%;
    left: 30%;
}
#data{
    padding-right:22px;
}


 h3 {color:black;  font-family: "Times New Roman", Times, serif;}
  p2 {color:black;}
</style>
</head>
<body bgcolor=#737373 >
<a href="index.php"><Strong>Home</Strong></a>
<div class="backgroundImageCVR">
<div class="background-image" ></div>
<div class="content" id="corners">


           <table  class="table-responsive" id="Movie list" border="0" style="width:100%"  align="center" >
             
                    
                    <tr id="columns" align="center">
                        <th  id="head" rowspan="4"><img src="<?php echo $row['MovieImage']?>" id="image" class="img-responsive" alt="Cinque Terre"  ></th>
                    </tr>
                    <tr>    
                            <th>
                           <h1 > <?php echo $row['m_name'] ?></h1>
                            
                                
                            </th>
                    </tr>
                    <tr>
                        <td>

                        <strong > Genre &emsp;</strong><h1><?php echo $row['m_genres'] ?></h1></td>
                    </tr>
                    <tr >
                        <td>
                        <strong>Director&emsp;</strong><h1><?php echo $row['m_director']?></h1></td>
                    </tr>
                     <tr >
                        <td>
                        <strong>Show Time&emsp;</strong><h1><?php echo $row['m_time']?></h1></td>
                        <td>
                             <?php if (isset($_SESSION['login'])) { ?>
                            <form action="seatlayout.php?m_id=<?=$row['m_id']; ?>" method="post">
                                <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
                                <button type="submit" class="btn btn-primary">BOOK NOW</button>
                            </form> 
                        <?php }  ?>
                        </td>

                    </tr>
                    <tr >
                        <td>
                        <strong>On Date&emsp;</strong><h1><?php echo $row['m_date']?></h1>
                        </td>
                        <td id="data">
                             <?php if (isset($_SESSION['admin'])) { ?>
                            <form action="edit_moviecontent.php?m_id=<?=$row['m_id']; ?>" method="post">
                                <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form> 
                        <?php }  ?>
                        </td>
                        <td id="data">
                             <?php if (isset($_SESSION['admin'])) { ?>
                            <form action="delete.php?m_id=<?=$row['m_id']; ?>" method="post">
                                <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
                                <button type="submit" class="btn btn-primary">DELETE</button>
                            </form> 
                        <?php }  ?>
                        </td>
                    </tr>
                    </table>
                   
                    <h3><?php echo $row['comment']?></h3>
                    </div>
                    </div>
                    
</body>
</html>