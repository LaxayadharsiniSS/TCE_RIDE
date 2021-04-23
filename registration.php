<?php
session_start();
?>
<!DOCTYPE Html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery/.min.js></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.js"></script>
<title>Registration</title>
<style>
<!--li
{
padding-left: 20px;
padding-right: 20px;
}-->
.backspace
{
margin-left: -434px;
}
</style>
</head>
<body>
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
				<li><a href="login.php"><span class="glyphicon glyphicon-home"> Home </span></a></li>
				<li><a href="registration.php"><span class="glyphicon glyphicon-user"> Owner </a></li>
				<li><a href="reservation.php"><span class="glyphicon glyphicon-user"> Customer </a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-log-out"> LogOut</span></a></li>
				</ul>
			</div>
	</nav>
</div>
<!--<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="#">fr</a></li>
</ul>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="#">Car</a>
</div>
</div>-->
<div class="row">
<div class="col-md-7" class="col-sm-7" class="col-lg-7" class="col-xs-7"><br><br><br>
<form action="registration.php" method="POST">
<div class="container">
<center><h4><label><span class="backspace"> Kindly fill your vehicle details</span></label></h4></center><br><br>
<div class="form-group row">
<label for="owner_email" class="col-sm-4 col-form-label" >Owner Email :</label>
<input type="email" id="owner_email" class="col-sm-4" name="owner_email" placeholder="Enter your email (Vehicle owner's registered email)">
</div>
<div class="form-group row">
<label for="vehicle" class="col-sm-4 col-form-label" name="vehicletype">Select Your Vehicle-type : </label>
<select id="vehicletype" name="vehicletype">
<option value="Car">Car </option>
<option value="Bike">Bike </option>
<option value="Van">Van </option> 
<option value="Auto">Auto </option>
</select>
</div>
<div class="form-group row">
<label for="vehicleNo" class="col-sm-4 col-form-label" >Vehicle Number ( in Number plate ): </label>
<input type="text" class="col-sm-4 " id="vehicleNo" name="vehicleNo" placeholder="Enter valid vehicle number">
</div>
<div class="form-group row">
<label for="fromPlace" class="col-sm-4 col-form-label" >From (Location):</label>
<input type="text" id="fromPlace" class="col-sm-4" name="fromPlace" placeholder="(use lowercase) Location where you start your travel">
</div>
<div class="form-group row">
<label for="toPlace" class="col-sm-4 col-form-label" >To (Location):</label>
<input type="text" id="toPlace" class="col-sm-4 " name="toPlace" placeholder="(use lowercase) Location where you end your travel">
</div>
<div class="form-group row">
<label for="StartTime" class="col-sm-4 col-form-label" >Starting time (in format => [hrs:mins:AM/PM] ):</label>
<input type="time" id="StartTime" class="col-sm-4 " name="StartTime">
</div>
<div class="form-group row">
<label for="gender" class="col-sm-4 col-form-label" name="gender">Select gender-type : </label>
<select id="gender" name="gender">
<option value="Any-type"> Any-type </option>
<option value="Only Males"> Only Males </option>
<option value="Only Females"> Only Females </option> 
</select>
</div>
<div class="form-group row">
<label for="additional_info" class="col-sm-4 col-form-label" >Additional info :</label>
<input type="textarea" id="additional_info" class="col-sm-4" name="additional_info" placeholder="Can mention the route">
</div>
<div class="form-group row">
<label for="Fare" class="col-sm-4 col-form-label" >Fare :</label>
<input type="textbox" id="Fare" class="col-sm-4" name="Fare" placeholder="mention the Fare">
</div>
<br>
<br>
<center><span class="backspace"><input type="submit" class="btn btn-success" name="upload" value="Upload details"></span></center>
</div>

<br>
</div></form>  <br><br>
<img class="img-responsive" width="500px" height="500px" src="https://cdn3.iconfinder.com/data/icons/traffic-jam/512/traffic-transport-transportation-car-jam-congestion-07-512.png">
</div>
<footer class="page-footer blue">
<div class="footer-copyright text-center ">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a>
  </div>

</footer>

<?php
require 'vendorPHP/autoload.php';

if(isset($_POST['upload']))
{
	$client = new MongoDB\Client(
		'mongodb+srv://tceusers:vehicledb@cluster0.e6red.mongodb.net/vehicle_pooling_DB?retryWrites=true&w=majority');
	
	$owner_email=$_POST["owner_email"];
	$VehicleType=$_POST["vehicletype"];
	$VehicleNo=$_POST["vehicleNo"];
	$fromPlace=$_POST["fromPlace"];
	$toPlace=$_POST["toPlace"];
	$StartTime=$_POST["StartTime"];
	$gender=$_POST['gender'];
	$remarks=$_POST["additional_info"];
	$Fare=$_POST['Fare'];
	
	$_SESSION['fromPlace']=$fromPlace;
	$_SESSION['toPlace']=$toPlace;
//.............Validation.....................
	 
	 ///$Err="";
	if(!preg_match("/tce.edu/",$owner_email))
	{
	echo "<script>alert('Please give tce.edu mail id');</script>";
	exit();
	}
		echo $_SESSION["user_email"];
	 if($_SESSION['user_email'] != $owner_email)
	 {
		 echo"<script>alert('Please do not try to perform anonymous vehicle registration');</script>";exit();
	 }	 
	 if(empty($VehicleNo))
	 {
		 echo"<script>alert('Vehicle Number is missing');</script>";
	 }
	 else if(empty($fromPlace))
	 {
		 echo"<script>alert('\'From\' location is missing!');</script>";
	 }
	 
	 else if(empty($toPlace))
	 {
		 echo"<script>alert('\'To\'  location is missing!');</script>";
	 }
	 
	 else if(empty($StartTime))
	 {
		 echo"<script>alert('Kindly mention the time !');</script>";
	 }
	 else
	 {
	if(empty($remarks))
	{
		$remarks="No info";
	}
	if(empty($Fare))
	{
		$Fare="free";
	}
	
	// select the database and the collection to perform insertion
	$db = $client->vehicle_pooling_DB;
	$collection = $db->vehicleRegistration;

	//store in document format
	$document = array(
				"email" => $owner_email,
				"VehicleType" => $VehicleType,
				"VehicleNo" => $VehicleNo,
				"from_place" => $fromPlace,
				"to_place" => $toPlace,
				"StartTime" => $StartTime,
				"gender" => $gender,
				"remarks" => $remarks,
				"Fare" => $Fare
	);
	 if($collection->insertOne($document))
	 {
		 echo"<script>alert('updated successfully');</script>";
	 }
	 else
	 {
		 echo "Error: " .$insert_vehicle. "<br>" .$collection->error;
	 }
	 }
}
?>
</body>
</html>