<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<<title>TCE Rides</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {
   font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
   background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)),url(bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;


  background-size: cover;
}
* {
   box-sizing: border-box;
}
h1 {
   text-align: center;
}
form {
   border: 1px solid rgb(182, 180, 180);
   padding: 20px;
   width: 800px;
   margin-left: 20%;
}
input {
   width: 100%;
   border: 1px solid #ddd;
   padding: 5px 10px;
   height: 45px;
   margin: 0px 0px 20px;
   border-radius: 4px;
   box-sizing: border-box;
   font-size: 17px;
}
button {
   margin: 10px auto 30px;
   display: table;
   font-size: 20px;
   padding: 10px 30px;
   background-color: #4caf50;
   border: none;
   color: #fff;
   border-radius: 4px;
   cursor: pointer;
}
button:hover {
   opacity: 0.8;
}
input[type="checkbox"] {
   height: 16px;
   width: 16px;
   margin-right: 5px;
   float: left;
}
.Social button.twitter-btn,
.Social button.facebook-btn {
   width: 100%;
   font-size: 18px;
   margin: 0px 0px 10px;
}
.Social button.twitter-btn {
   background-color: #26abfd;
}
.Social button.facebook-btn {
   background-color: #3f68be;
}
.Social {
   border-top: 1px solid #ddd;
   padding-top: 30px;
   margin-top: 30px;
}
.Social button i {
   margin-right: 5px;
   font-size: 20px;
}
@media (max-width: 1000px) {
   form {
      width: 100%;
      margin-left: 0px;
   }
}
</style>
</head>
<body><center>
   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TCE Rides</a>
    </div>
  </div>
</nav>
<div class="container">
  <div>
    <br>
    <br>
    <h1 style="font:cursive; color: white; text-shadow: 3px 3px darkslategrey;">Welcome to TCE Rides </h1> 
    <center><img class="img-responsive" src="https://qph.fs.quoracdn.net/main-qimg-4eca26cdc9a0c363842d6856862d1484" style="width: 200px; height: 200px;" > 
    </center>


</div>
<br>
<br>

<div>  
<form action="login.php" method="POST" style="background-color: white; opacity:100%; border-radius: 50px; 
  padding: 30px;
  box-shadow: 3px 3px 3px black;">
<center>
<div>
<center><h3 class="form-title"><span class="glyphicon glyphicon-user"></span>       User Login</h3></center>
  <br>
  <div>
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username">
    </div>
  </div>
  <div >
    <label for="Password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="Password">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
  <br>
      <center><input type="submit" class="btn btn-success" name="signin" value="Sign in" style="margin-left: 100px;"></center>
    </div>
  </div>
 
  <a href="create.php">Don't have an account? Sign up!</a>
  </div>
   </center>
<div class="Social">
<button type="submit" class="twitter-btn">
<i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter
</button>
<button type="submit" class="facebook-btn">
<i class="fa fa-facebook" aria-hidden="true"></i> Login with Facebook
</button>
</div>
</form>
</div>
</div>
<br>
<div class="container">
  <center>
<blockquote class="blockquote">
    <p style="font-family: cursive; text-align: center; margin-left: 20px; color: white; text-shadow: 2px 2px darkslategrey;">A Journey is best measured in friends, rather than miles.</p>
    <footer style="font-family: cursive; text-align: center; margin-left: 20px; color: white;text-shadow: 2px 2px darkslategrey;">Tim Cahill</footer>
  </blockquote>
</div>
<footer class="page-footer blue">

  <div class="footer-copyright text-center "><b>© 2021 Copyright:</b>
    <a href="https://www.tce.edu/" style="color:black"> <b>Thiagarajar College of Engineering, Madurai</b></a>
  </div>

</footer>
</center>
</center>
</body>


<?php
require "vendorPHP/autoload.php";

if(isset($_POST['signin']))
{
  $client = new MongoDB\Client(
    'mongodb+srv://tceusers:vehicledb@cluster0.e6red.mongodb.net/vehicle_pooling_DB?retryWrites=true&w=majority');

	$Username=$_POST['username'];
	$Password=$_POST['Password'];

  $db = $client->vehicle_pooling_DB;
  $collection = $db->users;
  //Find the 
  $login=false;
  $cursor = $collection->find();
  foreach($cursor as $document)
  {
    if($document["username"]==$Username && $document["password"]==$Password)
    {
      $login=true;break;
    };
  }
  if($login)
  {   
	  $_SESSION['user_email']=$document["email"];
	  $_SESSION["Name"] = $document["Fullname"];
    echo "<script>window.open('choose.php','_self')</script>";  
  }
	else
	{
 	  echo"<script>alert('login failed');</script>";
	}
}
	?>
</html>
