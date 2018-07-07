<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<meta http-equiv = "Content-Type" content = "text/html; charset = iso-8859-1" />
      <title>Untitled Document</title>
      <script type = "text/javascript" src = "jquery-1.3.2.js"></script>
      <script type = "text/javascript" src = "jquery.livequery.js"></script>
      <link href = "css.css" rel = "stylesheet" />
</head>
<body>
 <?php 
     include 'connection.php';
     $id=$_GET['m_id'];
      $result=mysqli_query($con,"SELECT * FROM movies WHERE m_id='$id'");
       while ($row=mysqli_fetch_array($result)):
         $val1=$row['m_name'];
       //echo "$val1";
     ?>
<script type = "text/javascript">

       $(document).ready(function() {
        var sum ;
        var sel;
        var m_name='<?php echo "$val1" ?> ';
    function recalculate() {
      
      sum=0;
        $("input[type=checkbox]:checked").each(function() {
            sum += parseInt($(this).attr("rel"));
        });

        $("#output").html(sum);
    }

  $("input[type=checkbox]").change(function() {
        recalculate();
        seat();
    });
    function seat(){
        sel = $('input[type=checkbox]:checked').map(function(_, el) {
        return $(el).val();
        }).get();
   
        $("#got").html(sel);
    }
    $('#Submit').click(function() {
     //document.write(sel+"<br>"+sum);
    
         $.ajax({
                method:"POST",
                url:"jqueryprocess.php",
                data:{seat:sel, price:sum, movie_name:m_name},
                success:function(result){
                    $('body').html(result);
                    if(result === "no_errors") location.href = "process.php"
                }

            });
   
      });
    
});

      </script>
      <?php endwhile; ?>

<div id="chart">
<div id="col1">
<ul class="chk">
 <div class="seat1">
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>

   <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100" disabled=""></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>

    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>

    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li> 
  </div>
</ul>
 <ul class="chk"> 
  <div class="seat2">
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>

    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>

    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>

    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
  </div>
</ul>
</div>
<div id="col2">
<ul class="chk">
 <div class="seat1">
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" value="a2" rel="100"></li>
    <li id="chk"><input type="checkbox" value="a3" rel="100"></li>
    <li id="chk"><input type="checkbox" value="a4" rel="100"></li>

   <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100" disabled=""></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>

    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>

    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li> 
  </div>
</ul>
 <ul class="chk"> 
  <div class="seat2">
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>

    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>

    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>

    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
    <li id="chk"><input type="checkbox" title="tooltip text" id="c1" value="a1" rel="100"></li>
  </div>
</ul>
</div>
</div>
<div id="table" class="container">
<h2>Booking Details</h2> 
<table  class="table table-hover">
    <tbody>
      <tr>
        <td><strong>Selected Seat</strong> </td>
        <td><strong> <span id='got'></strong></span></td>
      </tr>
      <tr>
        <td><strong>Amout to pay</strong> </td>
        <td><img src="Rupee_symbol.png"><strong><span id='output'></span></td></strong> 
      </tr>
      <tr>
        <td> <button type = "button" id = "Submit">CheckOut</button></td>
      </tr>
    </tbody>
  </table> 
</div>
<div id="table1" class="container">
<h2>Seat Legend </h2> 
<table  class="table table-hover">
    <tbody>
      <tr>
        <td><strong>Available Seat</strong> </td>
        <td><img src="unchecked.png"></span></td>
      </tr>
      <tr>
        <td><strong>Selected seat</strong> </td>
        <td><strong><img src="checked.png"></td></strong> 
      </tr>
      <tr>
        <td><strong>Unavilable seat</strong> </td>
        <td><strong><img src="booked.png"></td></strong>
      </tr>
    </tbody>
  </table> 
</div>

<table id="table2">
  <tr>
    <td id="data"><strong>1</strong></td>
    <td id="data"><strong>2</strong></td>
    <td id="data"><strong>3</strong></td>
    <td id="data"><strong>4</strong></td>
  </tr>
</table>
<table id="table3">
  <tr>
    <td id="data1"><strong>5</strong></td>
    <td id="data1"><strong>6</strong></td>
    <td id="data1"><strong>7</strong></td>
    <td id="data1"><strong>8</strong></td>
  </tr>
</table>
<table id="table4">
  
<tr>
    <th id="data2"><strong>A</strong></td>
</tr>
<tr>
    <td id="data2"><strong>B</strong></td>
  </tr>
  <tr>
    <td id="data2"><strong>C</strong></td>
  </tr>
  <tr>
    <td id="data2"><strong>D</strong></td>
  </tr>
</table>
<table id="table5">
  
<tr>
    <th id="data2"><strong>E</strong></td>
</tr>
<tr>
    <td id="data2"><strong>F</strong></td>
  </tr>
  <tr>
    <td id="data2"><strong>G</strong></td>
  </tr>
  <tr>
    <td id="data2"><strong>H</strong></td>
  </tr>
</table>

<Style>

*
{
    margin:auto;
    padding:0;
}

#data{
padding-right:30px;
}
#data1{
padding-right:22px;
}
#data2{
  padding-bottom: 17px;
}
#table2{
 position: absolute;
     left: 48%;
      top: 10%;
}
#table3{
 position: absolute;
     left: 61%;
      top: 9%;
}
#table4{
 position: absolute;
     left: 45%;
      top: 14%;
}
#table5{
 position: absolute;
     left: 45%;
      top: 41%;
}
#table {
    width: 30%;
    position: absolute;
     left: 5%;
      top: 10%;

}
#table1 {
    width: 20%;
    position: absolute;
     right : 5%;
      top: 10%;

}



html, body
{
    
    margin: 0;
    padding: 0;
}
#col2{
  position: absolute;
    right: -30px;

    top: 10%;
    left: 20%;
    
}
#col1{
 
}
#chart{
  padding-top: 70px;
}
.seat2{
  padding-left:100px;
}
.seat1{
  margin-left: 100px; 
}
.chk 
{
  width:20%;
  padding-top: 10px;
}


.chk li
{
   display:inline-block;
   width:20%;
}
input[type=checkbox] {
    display: block;
    width: 30px;
    height: 30px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: contain;
    -webkit-appearance: none;
    outline: 0;
}
input[type=checkbox]:checked {
    background-image: url('checked.png');
}
input[type=checkbox]:not(:checked) {
    background-image: url('unchecked.png');
}
input[type=checkbox]:disabled {
    background-image: url('booked.png');
}
</Style>
</body>
</html>