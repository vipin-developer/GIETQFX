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
 <?php 
		 include 'connection.php';
		
			$result=mysqli_query($con,"SELECT * FROM movies WHERE m_id='{$_GET['m_id']}'");
			$_SESSION['movies_id']="{$_GET['m_id']}";
			 $row=mysqli_fetch_array($result);
				 $val1=$row['m_name'];
			 $val2=$row['m_date'];
			 $val3=$row['m_time'];
			// echo "$val1";

		 ?>
		 <?php
			include 'connection.php'; 
			$booked=mysqli_query($con,"SELECT * FROM booking WHERE movie_name='$val1'");
			while ($result1=mysqli_fetch_assoc($booked)) {
				$seatno=unserialize($result1['seat']);
			foreach ($seatno as $key) {
				 $Array[]=$key;
			};
			}
			
			
				
			?>

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
			
<div id="chart">
<div id="col1">
<table>
	<tr>
	 <td id="data1">
	 
	 <input type="checkbox" title="A1" id="c1" value="A1"  class="dissable" name="ck[]" rel="300"></td>
		 <td id="data1"><input type="checkbox" title="A2" id="c1" value="A2"   class="dissable" name="ck[]" rel="300"></td>
			<td id="data1"><input type="checkbox" title="A3" id="c1" value="A3"  class="dissable" name="ck[]" rel="300"></td>
			 <td id="data1"><input type="checkbox" title="A4" id="c1" value="A4"   class="dissable" name="ck[]"  rel="300"></td>
				<td id="data1"><input type="checkbox" title="A5" id="c1" value="A5"   class="dissable" name="ck[]" rel="300"></td>
				 <td id="data1"><input type="checkbox" title="A6" id="c1" value="A6"  name="ck[]" rel="300"></td>
					<td id="data1"><input type="checkbox" title="A7" id="c1" value="A7"  name="ck[]" rel="300"></td>
					 <td id="data1"><input type="checkbox" title="A8" id="c1" value="A8"   class="dissable" name="ck[]" rel="300"></td>
						<td id="data1"><input type="checkbox" title="A9" id="c1" value="A9"   class="dissable" name="ck[]" rel="300"></td>
						 <td id="data1"><input type="checkbox" title="A10" id="c1" value="A10"    class="dissable" name="ck[]" rel="300"></td>
							<td id="data1"><input type="checkbox" title="A11" id="c1" value="A11"  class="dissable" name="ck[]" rel="300"></td>
							<td id="data1"><input type="checkbox" title="A12" id="c1" value="A12"  class="dissable" name="ck[]" rel="300"></td>
							 <td id="data1"><input type="checkbox" title="A13" id="c1" value="A13"   class="dissable" name="ck[]" rel="300"></td>
								<td id="data1"><input type="checkbox" title="A14" id="c1" value="A14"   class="dissable" name="ck[]" rel="300"></td>
									<td id="data1"><input type="checkbox" title="A15" id="c1" value="A15"   class="dissable" name="ck[]" rel="300"></td>
							

	</tr>
	<tr>
		<td id="data1"><input type="checkbox" title="B1" id="c1" value="B1"  class="dissable" rel="300"></td>
		 <td id="data1"><input type="checkbox" title="B12" id="c1" value="B12"  class="dissable" rel="300"></td>
			<td id="data1"><input type="checkbox" title="B3" id="c1" value="B3"  class="dissable" rel="300"></td>
			 <td id="data1"><input type="checkbox" title="B4" id="c1" value="B4"  class="dissable" rel="300"></td>
				<td id="data1"><input type="checkbox" title="B5" id="c1" value="B5"  class="dissable" rel="300" ></td>
				 <td id="data1"><input type="checkbox" title="B6" id="c1" value="B6"  class="dissable" rel="300" ></td>
					<td id="data1"><input type="checkbox" title="B7" id="c1" value="B7"  class="dissable" rel="300"></td>
					 <td id="data1"><input type="checkbox" title="B8" id="c1" value="B8"  class="dissable" rel="300"></td>
						<td id="data1"><input type="checkbox" title="B9" id="c1" value="B9"  class="dissable" rel="300"></td>
						 <td id="data1"><input type="checkbox" title="B10" id="c1" value="B10"  class="dissable" rel="300"></td>
							<td id="data1"><input type="checkbox" title="B11" id="c1" value="B11"  class="dissable" rel="300"></td>
							<td id="data1"><input type="checkbox" title="B12" id="c1" value="B12"  class="dissable" rel="300"></td>
							 <td id="data1"><input type="checkbox" title="B13" id="c1" value="B13"  class="dissable" rel="300"></td>
								<td id="data1"><input type="checkbox" title="B14" id="c1" value="B14"  class="dissable" rel="300"></td>
									<td id="data1"><input type="checkbox" title="B15" id="c1" value="B15"  class="dissable" rel="300"></td>
							

	</tr>
	<tr>
		<td id="data1"><input type="checkbox" title="C1" id="c1" value="C1"  class="dissable" rel="300"></td>
		 <td id="data1"><input type="checkbox" title="C2" id="c1" value="C2"  class="dissable" rel="300"></td>
			<td id="data1"><input type="checkbox" title="C3" id="c1" value="C3"  class="dissable" rel="300"></td>
			 <td id="data1"><input type="checkbox" title="C4" id="c1" value="C4"  class="dissable" rel="300"></td>
				<td id="data1"><input type="checkbox" title="C5" id="c1" value="C5"  class="dissable" rel="300"></td>
				 <td id="data1"><input type="checkbox" title="C6" id="c1" value="C6"  class="dissable" rel="300"></td>
					<td id="data1"><input type="checkbox" title="C7" id="c1" value="C7"  class="dissable" rel="300"></td>
					 <td id="data1"><input type="checkbox" title="C8" id="c1" value="C8"  class="dissable" rel="300"></td>
						<td id="data1"><input type="checkbox" title="C9" id="c1" value="C9"  class="dissable" rel="300"></td>
						 <td id="data1"><input type="checkbox" title="C10" id="c1" value="C10"  class="dissable" rel="300"></td>
							<td id="data1"><input type="checkbox" title="C11" id="c1" value="C11"  class="dissable" rel="300"></td>
							<td id="data1"><input type="checkbox" title="C12" id="c1" value="C12"  class="dissable" rel="300"></td>
							 <td id="data1"><input type="checkbox" title="C13" id="c1" value="C13"  class="dissable" rel="300"></td>
								<td id="data1"><input type="checkbox" title="C14" id="c1" value="C14"  class="dissable" rel="300"></td>
									<td id="data1"><input type="checkbox" title="C15" id="c1" value="C15"  class="dissable" rel="300"></td>

	</tr>
</table>
</div>
<div id="col3">
<table>
	<tr>
		<td id="data1"><input type="checkbox" title="D1" id="c1" value="G1"  class="dissable" rel="100"></td>
		 <td id="data1"><input type="checkbox" title="D2" id="c1" value="G2"  class="dissable" rel="100"></td>
			<td id="data1"><input type="checkbox" title="D3" id="c1" value="G3"  class="dissable" rel="100"></td>
			 <td id="data1"><input type="checkbox" title="D4" id="c1" value="G4"  class="dissable" rel="100"></td>
				<td id="data1"><input type="checkbox" title="D5" id="c1" value="G5"  class="dissable" rel="100"></td>
				 <td id="data1"><input type="checkbox" title="D6" id="c1" value="G6"  class="dissable" rel="100"></td>
					<td id="data1"><input type="checkbox" title="D7" id="c1" value="G7"  class="dissable" rel="100"></td>
					 <td id="data1"><input type="checkbox" title="D8" id="c1" value="G8"  class="dissable" rel="100"></td>
						<td id="data1"><input type="checkbox" title="D9" id="c1" value="G9"  class="dissable" rel="100"></td>
						 <td id="data1"><input type="checkbox" title="D10" id="c1" value="10"  class="dissable" rel="100"></td>
							<td id="data1"><input type="checkbox" title="D11" id="c1" value="G11"  class="dissable" rel="100"></td>
							<td id="data1"><input type="checkbox" title="D12" id="c1" value="G12"  class="dissable" rel="100"></td>
							 <td id="data1"><input type="checkbox" title="D13" id="c1" value="G13"  class="dissable" rel="100"></td>
								<td id="data1"><input type="checkbox" title="D14" id="c1" value="G14"  class="dissable" rel="100"></td>
									<td id="data1"><input type="checkbox" title="D15" id="c1" value="G15"  class="dissable" rel="100"></td>

	</tr>
	<tr>
		<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H1"  class="dissable" rel="100"></td>
		 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H2"  class="dissable" rel="100"></td>
			<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H3"  class="dissable" rel="100"></td>
			 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H4"  class="dissable" rel="100"></td>
				<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H5"  class="dissable" rel="100"></td>
				 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H6"  class="dissable" rel="100"></td>
					<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H7"  class="dissable" rel="100"></td>
					 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H8"  class="dissable" rel="100"></td>
						<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H9"  class="dissable" rel="100"></td>
						 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H10"  class="dissable" rel="100"></td>
							<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H11"  class="dissable" rel="100"></td>
							<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H12"  class="dissable" rel="100"></td>
							 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H13"  class="dissable" rel="100"></td>
								<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H14" class="dissable"  rel="100"></td>
									<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="H15"  class="dissable" rel="100"></td>
							
	</tr>
	<tr>
		<td id="data1"><input type="checkbox" title="F1" id="c1" value="I1"  class="dissable" rel="100"></td>
		 <td id="data1"><input type="checkbox" title="F2" id="c1" value="I2"  class="dissable" rel="100"></td>
			<td id="data1"><input type="checkbox" title="F3" id="c1" value="I3"  class="dissable" rel="100"></td>
			 <td id="data1"><input type="checkbox" title="F4" id="c1" value="I4"  class="dissable" rel="100"></td>
				<td id="data1"><input type="checkbox" title="F5" id="c1" value="I5"  class="dissable" rel="100"></td>
				 <td id="data1"><input type="checkbox" title="F6" id="c1" value="I6"  class="dissable" rel="100" ></td>
					<td id="data1"><input type="checkbox" title="F7" id="c1" value="I7"  class="dissable" rel="100"></td>
					 <td id="data1"><input type="checkbox" title="F8" id="c1" value="I8"  class="dissable" rel="100"></td>
						<td id="data1"><input type="checkbox" title="F9" id="c1" value="I9"  class="dissable" rel="100"></td>
						 <td id="data1"><input type="checkbox" title="F10" id="c1" value="I10"  class="dissable" rel="100"></td>
							<td id="data1"><input type="checkbox" title="F11" id="c1" value="I11"  class="dissable" rel="100"></td>
							<td id="data1"><input type="checkbox" title="F12" id="c1" value="I12"  class="dissable" rel="100"></td>
							 <td id="data1"><input type="checkbox" title="F13" id="c1" value="I13"  class="dissable" rel="100"></td>
								<td id="data1"><input type="checkbox" title="F14" id="c1" value="I14"  class="dissable" rel="100"></td>
									<td id="data1"><input type="checkbox" title="F15" id="c1" value="I15"  class="dissable" rel="100"></td>
							
	</tr>
</table>
</div>
<div id="col2">
<table>
	<table>
	<tr>
		<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D1"  class="dissable" rel="200"></td>
		 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D2"  class="dissable" rel="200"></td>
			<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D3"  class="dissable" rel="200"></td>
			 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D4"  class="dissable" rel="200"></td>
				<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D5"  class="dissable" rel="200"></td>
				 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D6"  class="dissable" rel="200"></td>
					<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D7"  class="dissable" rel="200" ></td>
					 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D8"  class="dissable" rel="200"></td>
						<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D9"   class="dissable" rel="200"></td>
						 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D10"  class="dissable" rel="200"></td>
							<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D11"  class="dissable" rel="200"></td>
							<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D12"   class="dissable" rel="200"></td>
							 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D13"  class="dissable" rel="200"></td>
								<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D14"   class="dissable"rel="200"></td>
									<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="D15"  class="dissable" rel="200"></td>

	</tr>
	<tr>
		<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E1"  class="dissable" rel="200"></td>
		 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E2"  class="dissable" rel="200"></td>
			<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E3"  class="dissable" rel="200"></td>
			 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E4"  class="dissable" rel="200"></td>
				<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E5"  class="dissable" rel="200"></td>
				 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E6"  class="dissable" rel="200"></td>
					<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E7"  class="dissable" rel="200"></td>
					 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E8"  class="dissable" rel="200"></td>
						<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E9"  class="dissable" rel="200"></td>
						 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E10"  class="dissable" rel="200"></td>
							<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E11"  class="dissable" rel="200"></td>
							<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E12"  class="dissable" rel="200"></td>
							 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E13"  class="dissable" rel="200"></td>
								<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E14"  class="dissable" rel="200"></td>
									<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="E15"  class="dissable" rel="200"></td>
							
	</tr>
	<tr>
		<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F1"  class="dissable" rel="200"></td>
		 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F2"   class="dissable" rel="200"></td>
			<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F3"  class="dissable" rel="200"></td>
			 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F4"  class="dissable" rel="200"></td>
				<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F5"  class="dissable" rel="200"></td>
				 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F6"  class="dissable" rel="200"></td>
					<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F7"  class="dissable" rel="200"></td>
					 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F8"  class="dissable" rel="200"></td>
						<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F9"  class="dissable" rel="200"></td>
						 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F10"  class="dissable" rel="200"></td>
							<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F11"  class="dissable"rel="200"></td>
							<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F12"  class="dissable"rel="200"></td>
							 <td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F13"  class="dissable" rel="200"></td>
								<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F14"   class="dissable" rel="200"></td>
									<td id="data1"><input type="checkbox" title="tooltip text" id="c1" value="F15"  class="dissable" rel="200"></td>
							
	</tr>
</table>
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
				<td> <button type = "button"  class="btn btn-primary" id = "Submit">CheckOut</button></td>
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
<table id="Royal">
	<tr>
		<td id="data2"><h3>Royal Rs-300</h3></td>
	</tr>
</table>
<table id="club">
	<tr>
		<td id="data2"><h3>Club Rs-200</h3></td>
	</tr>
</table>
<table id="executive">
	<tr>
		<td id="data2"><h3>Executive Rs-100</h3></td>
	</tr>
</table>
<table id="front" border="2">
	<tr>
		<td id="data2"><h3>ALL EYES THIS WAY PLEASE</h3></td>
	</tr>
</table>


<table id="table2">
	<tr>
		<td id="data"><strong>1</strong></td>
		<td id="data"><strong>2</strong></td>
		<td id="data"><strong>3</strong></td>
		<td id="data"><strong>4</strong></td>
		<td id="data"><strong>5</strong></td>
		<td id="data"><strong>6</strong></td>
		<td id="data"><strong>7</strong></td>
		<td id="data"><strong>8</strong></td>
		<td id="data"><strong>9</strong></td>
		<td id="data"><strong>10</strong></td>
		<td id="data3"><strong>11</strong></td>
		<td id="data3"><strong>12</strong></td>
		<td id="data3"><strong>13</strong></td>
		<td id="data3"><strong>14</strong></td>
		<td id="data3"><strong>15</strong></td>
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
	</table>
	<table id="table5">
	
	<tr>
		<td id="data2"><strong>D</strong></td>
	</tr>
	<tr>
		<th id="data2"><strong>E</strong></td>
</tr>
<tr>
		<td id="data2"><strong>F</strong></td>
	</tr>
	</table>
	<table id="table6">
	
	<tr>
		<td id="data2"><strong>G</strong></td>
	</tr>
	<tr>
		<td id="data2"><strong>H</strong></td>
	</tr>
	<tr>
		<td id="data2"><strong>J</strong></td>
	</tr>
</table>


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