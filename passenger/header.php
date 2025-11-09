    <?php
require_once "../connection.php";
require_once "../functions.php";
 
?>
<?php
require_once "../connection.php";
require_once "../functions.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title> Online Bus Reservation and Ticketing system</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/bootstrapcss/core.css">
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/bootstrap/font-awesome/js/all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
 
	<div class="container-fluid"  >
	<div class="container">
			<h2 style="color:lightblue;text-align:center;font-weight: bold;">Online Bus Reservation and Ticketing system </h2>
		 	  
		 </div> </div>
	<div class="container">
	<div class="sidebar">
	 <a href=" " style="color:#b8cfcd;border:none;text-transform:uppercase" ><?php echo $_SESSION['passenger']?> </a> 
		 
		<div class=" btn-group-sm">
		<table class="table table-bordered">
	 	<tr><a href="dashboard.php" class="btn btn-dark" role="button">Dashboard</a>	</tr>	
		<a href="route.php" class="btn btn-dark" role="button">Schedule</a>
		<a href="seats.php" class="btn btn-secondary" role="button">Reserve seat(s)</a>
		<a href="check_fair.php" class="btn btn-light" role="button"> Check fair</a>
	
	
	</table></div>
	<div><a href="../logout.php" style="float:center;text-align:center;margin-top:100px;font-size:16px">logout<i class="fa fa-power-off"> </i></a></div>
	</div>
	</div>
	
