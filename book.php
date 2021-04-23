<!DOCTYPE html>
<html lang="en">

  <head>
	<title>TCE Ride</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TCE ride.com</a>
    </div>
	</div>
</nav><br>
	<div class="container">
		<h2><center><br>Happy TCE Ride!!</center></h2><br>
		<script>
function myFunc(){
var val = confirm('Are you sure?');
if(val != true){
	window.open("reservation.php","_self");
}
}
</script>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
Session_start();
echo "<script>myFunc();</script>";
require "vendorPHP/autoload.php";

$client = new MongoDB\Client(
    'mongodb+srv://tceusers:vehicledb@cluster0.e6red.mongodb.net/vehicle_pooling_DB?retryWrites=true&w=majority');
$booking = false;
echo "<center>";
echo "<h4>Successfully booked => Vehicle Number : ".$_SESSION['vn']."</h4>";

$db = $client->vehicle_pooling_DB;
$collection = $db->vehicleRegistration;

$cursor = $collection->find();
	
foreach($cursor as $document)
{
	if($document["VehicleNo"] == $_SESSION['vn'])
	{
		$owner_email = $document["email"];
		if($_SESSION['user_email'] == $owner_email){
			echo"<script>alert('You cannot book your own vehicle! Book for other vehicles');</script>";
			echo"<script>window.open('reservation.php', '_self');</script>";
			exit();
		}
		$owner_details = $db->users;
		$owner_cursor = $owner_details->find();
		foreach($owner_cursor as $owner_doc){
			if($owner_email == $owner_doc["email"]){
				$booking = true;
				$OwnerName = $owner_doc["Fullname"];
				$OwnerContact = $owner_doc["Phonenumber"];
				//echo "<h3>Owner Name : '$OwnerName' </h3>";
				//echo "<h3>Owner Contact : '$OwnerContact' </h3>";
				//echo "<h3>Owner EmailID : '$email' </h3>";
				echo "<h4><i>Check your mail for further information......Happy Pooling!</i></h4>";
				$collection->deleteOne(array("VehicleNo"=>$_SESSION['vn']));
				break;
			}
		}
		echo "<h3>Booking successful! </h4>";
		break;
	}
}
if(!$booking)
{
	echo"<script>alert('Something went wrong');</script>";
}

$content = "<b><br>Your booking is successful<br><br>Fare to be paid: ".$_SESSION["fare"]."<br>Vehicle Number: ".$_SESSION['vn']."<br>Vehicle Owner: ".$OwnerName."<br>Owner ContactNumber: ".$OwnerContact."<br>Owner EmailID: ".$owner_email."</b><br><br>Continue Pooling with TCE ride...<br><br>Thank you<br>";

echo "</center>";

if($booking) //if booking made, then send mail
{
require "vendor/autoload.php";
$robo = 'sender mail id';
$developmentMode = true;
$mailer = new PHPMailer($developmentMode);

try {
    $mailer->SMTPDebug = 0; //0=>off (for production use, no debug msg ; 1=>only client msg; 2=> client and server msg
    $mailer->isSMTP();

    if ($developmentMode) {
    $mailer->SMTPOptions = [
        'ssl'=> [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ]
    ];
    }

	

    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMTPAuth = true;  
	$mailer->Username = 'poolingvehicle2021@gmail.com';
    $mailer->Password = 'VP@tceride';
    $mailer->SMTPSecure = 'tls';
    $mailer->Port = 587;

    $mailer->setFrom('poolingvehicle2021@gmail.com', 'Vehicle Pooling');
/////////////    
	$mailer->addAddress($_SESSION["user_email"], $_SESSION["username"]); // (receiver email address, receiver name)

    $mailer->isHTML(true);
    $mailer->Subject = 'Booking Successful';
    $mailer->Body = $content;

    $mailer->send();
    $mailer->ClearAllRecipients();
///////////
    $mailer->addAddress($owner_email, $OwnerName); // (receiver email address, receiver name)

    $mailer->isHTML(true);
    $mailer->Subject = 'Vechile Booked from TceRide';
	$content_for_owner = "<b>Your Vechile has been successfully booked.<br><br>Booking made by: ".$_SESSION["Name"]."<br>Customer email: ".$_SESSION["user_email"]."</b><br><br>Continue Pooling with TCE ride...<br><br>Thank you<br>";
    $mailer->Body = $content_for_owner;

    $mailer->send();
    $mailer->ClearAllRecipients();
//////////
} catch (Exception $e) {
    echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
}
}
?>
	</div>
<form action="login.php" method="POST">
</form>

<div class="">
<center>
<blockquote class="blockquote-reverse">
    <p>A Journey is best measured in friends, rather than miles.</p>
    <footer>Tim Cahill</footer>
  </blockquote>
<img class="img-responsive" src="https://qph.fs.quoracdn.net/main-qimg-4eca26cdc9a0c363842d6856862d1484" > 
</center>
</div>
	</div>

	<footer class="page-footer blue">

  <div class="footer-copyright text-center ">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a>
  </div>
		</footer>
	
</div></body>
</html>
