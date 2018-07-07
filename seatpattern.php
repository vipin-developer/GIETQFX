<?php  session_start(); 
	if (isset($_SESSION['user_name'])) { ?>
<!DOCTYPE html>
<html lang="en">
<title>Seatlayout</title>
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<meta http-equiv = "Content-Type" content = "text/html; charset = iso-8859-1" />
			<title>Untitled Document</title>
			<script type = "text/javascript" src = "jquery-1.3.2.js"></script>
			<script type = "text/javascript" src = "jquery.livequery.js"></script>
			<link href = "css.css" rel = "stylesheet" />
			<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
</head>
<body>
<span id="seatvalue"></span>
 

<script type = "text/javascript">

$(document).ready(function() {
				var sum ;
				var check
				var sel;
				var m_name='<?php echo "$val1" ?> ';
				var m_date='<?php echo "$val2" ?> ';
				var m_time='<?php echo "$val3" ?> ';
				var filter = '<?php echo json_encode($Array); ?>';
				var w=JSON.parse(filter);
				var set = $('input[id="c1"]').map(function(_, el) {
        	return $(el).val();
   		 }).get();
				for (var i = 0; i < w.length; i++) {
			
					for (var j = 0; j < set.length; j++) {
								
								if (w[i]===set[j]) {
									 $(".dissable")
    .filter(function(){ return $(this).val() == set[j];}).prop("disabled",true);
       							//alert(set[j]);
								}
						
						

					}
				}
				//alert(w.length);
				
				
				
				//checkbox seat value.
   		
			//seat and price.
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
				if (sel === undefined || sel==0) {
					alert("Please select at least one.");
					   location.reload();
				} else {
					$.ajax({
								method:"POST",
								url:"jqueryprocess.php",
								data:{seat:sel, price:sum, movie_name:m_name,movie_date:m_date,movie_time:m_time},
								success:function(result){
										$('body').html(result);
										if(result === "no_errors") location.href = "process.php"
								}

						});
					
				}
				 
	 
			});
				
		
});
</script>
		<div class="container">
			<div class="jumbotron">Basic Well</div>	
		</div>
		<?php include 'SeatFrame.php'; ?>
<Style>

*
{
		margin:auto;
		padding:0;
}
#club{
	position: absolute;
		 left: 25%;
			top: 25%;
}
#Royal{
	position: absolute;
		 left: 25%;
			top: 0%;
}
#executive{
	position: absolute;
		 left: 25%;
			top: 47%;
}
#front{
	position: absolute;
		 left: 22%;
			top: 74%;
			background-color: #99e6e6;
			font-size: 40px;
			font-family: "Times New Roman", Times, serif;
}
#data{
padding-right:45px;
}
#data3{
padding-right:35px;
}
#data1{
padding-right:22px;
}
#data2{
	padding-bottom: 17px;
}
#table2{
 position: absolute;
			 left:60px;
			top: 7%;
}
#table3{
 position: absolute;
		 left: 61%;
			top: 9%;
}
#table4{
 position: absolute;
		 left: 1%;
			top: 14%;
}
#table5{
 position: absolute;
		 left: 1%;
			top: 35%;
}
#table6{
 position: absolute;
		 left: 1%;
			top: 55%;
}
#table {
		width: 30%;
		position: absolute;
		 right:  5%;
			top: 10%;

}
#table1 {
		width: 20%;
		position: absolute;
		 right : 15%;
			top: 50%;

}



html, body
{
		background-color:#ebfafa;
		margin: 0;
		padding: 0;
}
#col3{
	position: absolute;
		left:60px;

		top: 55%;
		
		
}
#col2{
	position: absolute;
		left:60px;

		top: 34%;
		
		
}
#col1{
position: absolute;
		left:60px;

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
<?php } else {
	header('location:login.php');
	}?>  