 <?php
       
		require 'header.php';
       
		$id='';
		$username='';
		$s_id=''; 
		$bus_no='';
		$seat_no= '';
		$dep_from=''; 
		$dep_to='';
		$dep_date= '';
		$dep_time=''; 
		$amount='';
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];



}
	  
    if($id>0){
           $query="SELECT * FROM bookings where booking_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  	
    $id=$row['booking_id'];
		$username= $row['username'];
		$s_id=$row['s_id']; 
		$bus_no=$row['bus_id'];
		$seat_no= $row['seat_no'];
		$dep_from=$row['dep_from']; 
		$dep_to=$row['dep_to'];
		$dep_date= $row['dep_date'];
		$dep_time=$row['dep_time']; 
		$amount=$row['amount'];
		 
	}
	
	}else{
            		
    $username='';
		$s_id=''; 
		$bus_no='';
		$seat_no= '';
		$dep_from=''; 
		$dep_to='';
		$dep_date= '';
		$dep_time=''; 
		$amount='';
            
        }

	

?>	

<?php
	$msg='';
	if(isset($_POST['submit'])){
		
    
		$username= $_POST['username'];
		$s_id=$_POST['s_id']; 
		$bus_no=$_POST['bus_no'];
		$seat_no= $_POST['seat_no'];
		$dep_from=$_POST['dep_from']; 
		$dep_to=$_POST['dep_to'];
		$dep_date= $_POST['dep_date'];
		$dep_time=$_POST['dep_time']; 
		$amount=$_POST['amount'];
		 
		if($id>0){

    
	
$query="update bookings set username='$username',s_id='$s_id',bus_no='$bus_no',seat_no='seat_no'$.dep_from='$dep_from',dep_to='$dep_to',dep_date='$dep_date',dep_time='$dep_time',amount='$amount' where booking_id='$id'";
    
 $result= mysqli_query($link, $query);
  alert("Booking update successfuly.");
       
        redirect_to("route.php");
 
		   }else{
            	 
 $query="INSERT into schedule(username,s_id,bus_no,seat_no,dep_from,dep_to,amount,dep_date,dep_time,status)VALUES";
    $query.="('$username','$s_id','$bus_no','$seat_no','$dep_from','$dep_to','$amount','$dep_date','$dep_time','pending')";
 $result= mysqli_query($link, $query);
 
	 
    if( mysqli_insert_id($link)){
		
       alert("Schedule Add successfuly.");
       
        redirect_to("route.php");
    }else{
			$msg="Schedule already exist";
        
    }
}            
        }
	
?>


  <div class="container">
		<h3 style="color:lightblue"> Schedule Adding Form</h3>
	</div>
	<div class="container" id="form">
	<form action="" method="POST" >
 
 <div class="form-group">
    <label for="name">Passenger Name:</label>
 <select class="form-group" name="username" id="username" required>
			<option selected value="<?php echo $username;?>"><?php if($id>0){ echo $username;
			}else{
				echo "Select passenger";
			}?></option>		 
						
					<?php	$res=mysqli_query($link,"select * from passenger  ");
			while($row=mysqli_fetch_assoc($res)){
				 	
				
	echo "<option  value=".$row['username'].">".$row['username']."</option>";
	
		 
}
										
?></select></div>
<div class="form-group">
    <label for="name">Schedule Id:</label>
 <select class="form-group" name="s_id" id="s_id" required  >
			<option selected value="<?php echo $username;?>"><?php if($id>0){ echo $username;
			}else{
				echo "Select passenger";
			}?></option>		 
						
					<?php	
		 
			
					
			$res=mysqli_query($link,"select * from schedule  ");
			while($row=mysqli_fetch_assoc($res)){
				
if($id>0){				
			 			  	
     $id=$row['s_id'];
	$bus_no= $row['bus_no'];
		$dep_from=$row['dep_from']; 
		$dep_to=$row['dep_to'];
		$dep_date=$row['dep_date']; 
		$dep_time=$row['dep_time'];
$amount=$row['fair'];  }else{
	 $username='';
		$s_id=''; 
		$bus_no='';
		$seat_no= '';
		$dep_from=''; 
		$dep_to='';
		$dep_date= '';
		$dep_time=''; 
		$amount='';
}
		 
	echo "<option  value=".$row['s_id'].">".$row['s_id']."</option>";
	
		 
}
										
?></select></div>


<?php
  



?>
<div class="form-group">
    <label for="name">bus_no:</label>
    <input type="text" class="form-control" id="bus_no" name="bus_no" value="<?php echo $bus_no;?>"  >
  </div>
  
  <div class="form-group">
    <label for="name">Seat_no:</label>
    <input type="text" class="form-control" id="seat_no" name="seat_no" value="<?php echo $seat_no;?>"  >
  </div>
   <div class="form-group">
    <label for="name">Departure From:</label>
    <input type="text" class="form-control" id="dep_from" name="dep_from" value="<?php echo $dep_from;?>"  >
  </div>
<div class="form-group">
    <label for="name">Departure To:</label>
    <input type="text" class="form-control" id="dep_to" name="dep_to" required="" value="<?php echo $dep_to;?>" >
  </div>
   <div class="form-group">
    <label for="name">Departure Date:</label>
    <input type="text" class="form-control" id="dep_date" name="dep_date" value="<?php echo $dep_date;?>"  >
  </div>
<div class="form-group">
    <label for="name">Departure Time:</label>
    <input type="text" class="form-control" id="dep_time" name="dep_time" required="" value="<?php echo $dep_time;?>" >
  </div>
   <div class="form-group">
    <label for="name">amount:</label>
    <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $amount;?>"  >
  </div>  
   
  <input type="submit" class="btn btn-primary" value="Click to add" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
</div>
</form>
</div>
<a href="bus.php"  style="float:left;color:lightblue ">back</a>
<script>  



</script>
</body>
