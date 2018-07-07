<!DOCTYPE html>
<html lang="en">
    <head>
	   <title>movie list</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php 
include"head.php" ;
include"nav.php";
?>
            <?php
                include 'connection.php';
                $sql="SELECT * FROM movies";
                $result=mysqli_query($con,"$sql",MYSQLI_USE_RESULT);
            ?>

            <?php 
                while ($row=mysqli_fetch_assoc($result)):
            ?>

        <style >
            body{
                background-color:grey;  
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
        </style>
            <table  class="table-responsive" id="Movie list" border="0" style="width:100%"  align="center" >
             
                    
                    <tr align="center">
                        <th rowspan="5"><img src="MovieImage/<?php echo $row['MovieImage']?>" class="img-responsive" alt="Cinque Terre" width="700" height="336" ></th>
                    </tr>
                    <tr>    
                            <th>
                            <?php echo $row['m_name'] ?>
                            
                                
                            </th>
                    </tr>
                    <tr>
                        <td>

                        <strong> Genre &emsp;</strong><?php echo $row['m_genres'] ?></td>
                    </tr>
                    <tr >
                        <td>
                        <strong>Director&emsp;</strong><?php echo $row['m_director']?></td>
                    </tr>
                     <tr >
                        <td>
                        <strong>Show Time&emsp;</strong><?php echo $row['m_time']?></td>
                    </tr>
                    <tr align="center">
                        <td>
                            <form action="edit_moviecontent.php?m_id=<?=$row['m_id']; ?>" method="post">
                                <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
                               <button type="submit" class="btn btn-default">UPDATE</button>
                            </form>
                            &nbsp;
                            <form action="delete.php?m_id=<?=$row['m_id']; ?>" method="post">
                                <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
                                <button type="submit" class="btn btn-default">DELETE</button>
                            </form>
                            
                
                        </td>
                    </tr>
                    
            </table>
            <br> 
        <?php endwhile; ?>
        </div> 
     </body>

</html>