 <?php
       
		require 'header.php';
      $id='';
	   
	  $bus_no='';
	  $dep_from=''; 
		$dep_to='';
		$dep_date=''; 
		$dep_time='';
		$fair=''; 
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];



}
	  
    if($id>0){
           $query="SELECT * FROM schedule where s_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  	
     $id=$row['s_id'];
	$bus_no= $row['bus_no'];
		$dep_from=$row['dep_from']; 
		$dep_to=$row['dep_to'];
		$dep_date=$row['dep_date']; 
		$dep_time=$row['dep_time'];
		$fair=$row['fair']; 
		 
	}
	
	}else{
            		
     $id='';
	$bus_no= '';
		$dep_from=''; 
		$dep_to='';
		$dep_date=''; 
		$dep_time='';
		$fair=''; 
		 
            
        }

	

?>	

<?php
	$msg='';
	if(isset($_POST['submit'])){
		
    	
      
	$bus_no= $_POST['bus_no'];
		$dep_from=$_POST['dep_from']; 
		$dep_to=$_POST['dep_to'];
		$dep_date=$_POST['dep_date']; 
		$dep_time=$_POST['dep_time'];
		$fair=$_POST['fair']; 
		 
		if($id>0){

    
	
$query="update schedule set bus_no='$bus_no',dep_from='$dep_from',dep_to='$dep_to',dep_date='$dep_date',dep_time='$dep_time',fair='$fair' where s_id='$id'";
    
 $result= mysqli_query($link, $query);
  alert("Bus update successfuly.");
       
        redirect_to("route.php");
 
		   }else{
            	 
 $query="INSERT into schedule(bus_no,dep_from,dep_to,dep_date,dep_time,fair)VALUES";
    $query.="('$bus_no','$dep_from','$dep_to','$dep_date','$dep_time','$fair')";
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
    <label for="name">Bus No:</label>
 <select class="form-group" name="bus_no" id="subject_code" required>
			<option selected value="<?php echo $bus_no;?>"><?php if($id>0){ echo $bus_no;
			}else{
				echo "Select Bus";
			}?></option>		 
						
					<?php	$res=mysqli_query($link,"select * from buses  ");
			while($row=mysqli_fetch_assoc($res)){
				 	
				
	echo "<option  value=".$row['bus_no'].">".$row['bus_no']."</option>";
	
		 
}
										
?></select></div>
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
    <label for="name">Fair:</label>
    <input type="text" class="form-control" id="fair" name="fair" value="<?php echo $fair;?>"  >
  </div>  
   
  <input type="submit" class="btn btn-primary" value="Click to add" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
</div>
</form>
</div>
<a href="bus.php"  style="float:left;color:lightblue ">back</a>

</body>
