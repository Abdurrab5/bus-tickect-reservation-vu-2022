<?php
require_once "../connection.php";
require_once "../functions.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
 <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
 <body>
 
    <div style="color:lightblue" >
    <h2   align="middle" ><a href="../index.php" class="btn btn-primary" role="button" style="float:left; ">Home</a>Online Bus Reservation and Ticketing system </h2></div>
    


	<?php
	$msg='';
	if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
	$email=$_POST['email'];
    $password=$_POST['password'];
	$cnic=$_POST['cnic'];
    $phone=$_POST['phone']; 
    $address=$_POST['address']; 	
    $gender=$_POST['gender'];
   
    $query="INSERT into passenger(username, password ,email,phone,address,gender) VALUES";
    $query.="('$username ','$password','$email','$phone','$address','$gender')";
    $result= mysqli_query($link, $query);
    if( mysqli_insert_id($link)){
       alert("Register successfuly.");
       
        redirect_to("index.php");
    }else{
			$msg="passenger already exist";
        
    }
}
?>


  <div class="container">
		<h3 style="color:lightblue"> Passenger/Traveler Registeration Form</h3>
	</div>
	<div class="container" id="form">
	<form action="" method="POST" >
 
 <div class="form-group">
    <label for="name">User Name:</label>
    <input type="text" class="form-control" id="username" name="username" required="" Placeholder="username:" >
  </div>
   <div class="form-group">
    <label for="name">e-Mail:</label>
    <input type="email" class="form-control" id="email" name="email" required="" Placeholder="Enter e-Mail add:">
  </div> 
    <div class="form-group">
    <label for="name">Password:</label>
    <input type="password" class="form-control" id="password" name="password" required="" Placeholder="Enter password:">
  </div>
  
  <div class="form-group">
    <label for="phone">phone:</label>
    <input type="text" class="form-control" id="phone" name="phone" required="" Placeholder="03001234567:" pattern="[0-9]{4}[0-9]{7}">
  </div>
  <div class="form-group">
    <label for="name">address:</label>
    <input type="text" class="form-control" id="address" name="address" required="" Placeholder="Enter city:">
  </div>
  <div class="form-group">
    <label for="gender">Gender:</label>
    <div class="form-check">
      
        <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>Male
     
        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female
     
    </div>
  </div>
  <input type="submit" class="btn btn-primary" value="Click to Register" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
</div>
</form>
</div>
<a href="index.php"  style="float:left;color:lightblue ">back</a>

</body>




</html>
