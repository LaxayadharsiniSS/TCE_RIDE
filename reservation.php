 <?php
session_start(); //maintaing session of the user
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body >
<div class="container-fluid">
  <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mytab">
			 </button>
		</div>
		<div class="collapse navbar-collapse" id="mytab">
		<div class="navbar-header">
      <a class="navbar-brand" href="#">TCE ride.com</a>
    </div>
			<ul class="nav navbar-nav navbar-right">
			<li class="active">
				<li><a href="login.php"><span class="glyphicon glyphicon-home"> Home&nbsp;&nbsp;</span></a></li>
				<li><a href="registration.php"><span class="glyphicon glyphicon-user"> Owner&nbsp;&nbsp;</a></li>
				<li><a href="reservation.php"><span class="glyphicon glyphicon-user"> Customer&nbsp;&nbsp;</a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-log-out"> LogOut&nbsp;&nbsp;&nbsp;</span></a></li>
				</ul>
			</div>
	</nav>
</div>
	<br><br><br><br>
	<div class="container">
	<center><label for="Td"><h1>Find your ride</h1></label></center>
		<form class="form-inline" action="reservation.php" method="POST">
		
	<div class="row">
	<div class= "col-md-7" class="col-sm-7" class="col-lg-7" class="col-xs-8"><br><br><br><br><br><br>
			<div class="form-group">
				<label for="fP">From : </label>
				<input type="text" id="fP" name="fP" placeholder="kindly use lower case" autocomplete="on">
			</div>
			&emsp;
			<div class="form-group">
				<label for="tP">To : </label>
				<input type="text" id="tP" name="tP" placeholder="kindly use lower case" autocomplete="on">
			</div>
			<div class="form-group">
				&emsp;&emsp;<input type="submit" name="filter" class="btn btn-md btn-info" value="Filter">
				<span class="glyphicon glyphicon-filter"></span>
			</div>
			<br><br><br><br>
			</div>
			
			</form>
			

<img class="img-responsive" width="250px" height="150px" src="https://www.pinclipart.com/picdir/big/495-4956265_servicing-car-registration-icon-clipart.png">
  
			</div>
	<table class="table table-bordered table-responsive" style="border-color:black;" id="Td">
	<thead>
	<tr style="border-color:black;"> 
		<th>S.No</th>
		<th>From</th>
		<th>To</th>
		<th>Type</th>
		<th>Gender type</th>
		<th>Vehicle number</th>
		<th>Starting Time</th>
		<th>Additional info</th>
		<th>Fare</th>
		<th>Reserve</th>
		</tr>
	</thead>
	
	<!--<tbody style="border-color:black;">
	<tr style="border-color:black;">
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tr>
	</tbody>-->
	<br><br><br>
	<footer class="page-footer blue">
	
	<!--..................Fetching................-->
	
<?php
require 'vendorPHP/autoload.php';

if(isset($_POST['filter'])){
		
	$client = new MongoDB\Client(
		'mongodb+srv://tceusers:vehicledb@cluster0.e6red.mongodb.net/vehicle_pooling_DB?retryWrites=true&w=majority');
		
	$fp=$_POST["fP"];
	$tp=$_POST["tP"];
	
	$db = $client->vehicle_pooling_DB;
	$collection = $db->vehicleRegistration;

	$cursor = $collection->find();
	$found=0;
	foreach($cursor as $document)
	{
		if($document["from_place"]==$fp || $document["to_place"]==$tp)
		{
			$found=true;
			break;
		}
	}
	if(!$found)
		echo "<h1>No results found !</h1>";
	else{
	$i=1;
	foreach($cursor as $document)
	{
	echo "<tr>";
	echo "<td>"; echo $i++; echo "</td>";
	echo "<td>" .$document["from_place"].  "</td>";
	echo "<td>" .$document["to_place"].  "</td>";
	echo "<td>" .$document["VehicleType"]. "</td>";
	echo "<td>" .$document["gender"]. "</td>";
	echo "<td>" .$document["VehicleNo"].  "</td>";
	echo "<td>" .$document["StartTime"]. "</td>";
	echo "<td>" .$document["remarks"]. "</td>";
	echo "<td>" .$document["Fare"]. "</td>";
	$_SESSION['vn']=$document['VehicleNo'];
	$_SESSION["fare"]=$document["Fare"];
	echo "<td><a href='book.php'>RESERVE</a></td>";
	}
	}
}
	?>
	
	</table>
	</div>
	<br><br>
<div class="footer-copyright text-center ">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a>
	
	</div>
</footer>
	</body>
	</html>