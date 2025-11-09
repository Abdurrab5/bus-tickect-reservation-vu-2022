 <?php
       
		require 'header.php';
      $id='';
	  $seat_capacity=0;
	  $bus_no='';
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];



}
	  
    if($id>0){
           $query="SELECT * FROM buses where bus_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $bus_id=$row['bus_id'];
				
				
				 $bus_no=$row['bus_no'];
				$seat_capacity=$row['seat_capacity'];
		   }
        }else{
            	$bus_id='';
				$bus_no='';
				$seat_capacity='';
            
        }



?>	

<?php
	$msg='';
	if(isset($_POST['submit'])){
		
    $bus_no=$_POST['bus_no'];
    $seat_capacity=$_POST['seat_capacity'];
		if($id>0){

    
	
    $query="update buses set bus_no='$bus_no',seat_capacity ='$seat_capacity' where bus_id='$id'";
    
 $result= mysqli_query($link, $query);
  alert("Bus update successfuly.");
       
        redirect_to("bus.php");
 
		   }else{
            	 
	
   
	
    $query="INSERT into buses(bus_no,seat_capacity)VALUES";
    $query.="('$bus_no','$seat_capacity')";
 $result= mysqli_query($link, $query);
 
	for( $i = 1; $i <= $seat_capacity; $i++){
               $bus=$bus_no;       
             $seat=$i;
		
		$query1="INSERT into seats(bus_no,seat_no,status)VALUES";
    $query1.="('$bus','$seat','0')";
	$result= mysqli_query($link, $query1);
		}
    if( mysqli_insert_id($link)){
		
       alert("Bus Add successfuly.");
       
        redirect_to("bus.php");
    }else{
			$msg="bus already exist";
        
    }
}            
        }
	
?>


  <div class="container">
		<h3 style="color:lightblue"> Buses Adding Form</h3>
	</div>
	<div class="container" id="form">
	<form action="" method="POST" >
 
 <div class="form-group">
    <label for="name">Bus No:</label>
    <input type="text" class="form-control" id="bus_no" name="bus_no" required="" value="<?php echo $bus_no;?>" >
  </div>
   <div class="form-group">
    <label for="name">Set Capacity:</label>
    <input type="text" class="form-control" id="seat_capacity" name="seat_capacity" value="<?php echo $seat_capacity;?>" Placeholder="<?php echo $seat_capacity; ?>">
  </div> 
   
  <input type="submit" class="btn btn-primary" value="Click to add" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
</div>
</form>
</div>
<a href="bus.php"  style="float:left;color:lightblue ">back</a>

</body>
