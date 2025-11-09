<?php
require_once "../connection.php";
require_once "../functions.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
 <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
 
 
    <div style="color:lightblue" >
    <h2   align="middle" >Online Bus Reservation and Ticketing system </h2></div>
    
   
	<?php
	if(isset($_POST['login'])){
    
    $aid=$_POST['name'];
    $password=$_POST['password'];
      
    $query="SELECT * FROM passenger WHERE username='$aid' and password='$password' ";
    $result= mysqli_query($link, $query);
    if(mysqli_num_rows($result)){
        $row= mysqli_fetch_array($result);
       
        $_SESSION['passenger']=$row['username']; 
        alert("You have been logged-in successfuly.");
        //redirecting
        redirect_to("dashboard.php");
    }else{
        alert("please provide correct login detail: ". mysqli_error($link));
    }
}
?>
<div  >
	
	<div>
		
<h3 class="container"></h3>

<h3 style="color:lightblue"> Passenger/Traveler</h3>
	</div>
	<div class="container" id="form">
	<form action="" method="POST" >

    
  <div class="form-group">
    <label for="id">Username:</label>
    <input type="text" class="form-control" id="name" name="name" required="">
  </div>
  <div class="form-group">
    <label for="name">Password:</label>
    <input type="password" class="form-control" id="password" name="password" required="">
  </div>

  <input type="submit" class="btn btn-success" value="Login" name="login" id="Login"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="Reset"/> 
   <a style="color:lightblue "  href="register.php">Register?</a
</form>
</div>

</div>
<div>	<a href="../index.php"  style="float:left;color:lightblue ">back</a>
</div>



 