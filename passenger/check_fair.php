 <?php
       
		require 'header.php';
        $page="bus";
   $sid=6;
		$dep_from=''; 
		$dep_to='';
$result='';

if(isset($_GET['submit'])){
		
    	
      
	 
		$dep_from=$_GET['dep_from']; 
		$dep_to=$_GET['dep_to'];
}
 

?>	<?php

?>
<div id="search">
	<form action="" method="GET" >
	
     <label for="name">Select From:</label>
	<select class="form-group" name="dep_from" id="dep_from"  required>
		<option selected value=""> Select From </option>		 
						
		<?php	$sh_id=0;
			$res=mysqli_query($link,"select * from schedule  ");
				while($row=mysqli_fetch_assoc($res)){
					$sh_id=$row['s_id'];
	echo "<option  value=".$row['dep_from'].">".$row['dep_from']."</option>";
				}
		?>
	</select>
  

    <label for="name">Select To:</label>
 <select class="form-group" name="dep_to" id="dep_to"   required >
	<option selected value="">Select To </option>		 
			<?php	
				 	$res=mysqli_query($link,"select * from schedule  ");
			while($row=mysqli_fetch_assoc($res)){
	echo "<option  value=".$row['dep_to'].">".$row['dep_to']."</option>";
	}
	?>
	</select>
   <input type="submit" class="btn btn-primary" value="Search" name="submit" id="submit"/>
	</form>
	</div>
	<div class="container">
	
<table class="table" id="form1">
<thead>
								<tr>
									
									
									
								</tr>
							</thead>
						 <thead>
							<tr>
							 <th> Bus No</th>
							<th>From</th>
							<th>To</th>
						<th>Fair</th>
							 </tr>
						</thead>
												

						<tbody>
<?php	


if($dep_from!='' && $dep_to!=''){	
	 	
 $query="SELECT * FROM schedule where dep_from='$dep_from' and dep_to='$dep_to' ";
 $result= mysqli_query($link,$query);
 
 }else{
		$query="SELECT * FROM schedule ";
		$result= mysqli_query($link,$query);
  } $i=1;
    while($row = mysqli_fetch_assoc($result)){
		
		
		
     $id=$row['s_id'];
	$bus_no= $row['bus_no'];
		$dep_from=$row['dep_from']; 
		$dep_to=$row['dep_to'];
		$dep_date=$row['dep_date']; 
		$dep_time=$row['dep_time'];
		$fair=$row['fair']; 
		 
                                    

   ?>
	

<tr>
							
							<td><?Php echo $bus_no;?></td>
							<td><?Php echo $dep_from ;?></td>
							<td><?Php echo $dep_to ;?></td>
							<td><?Php echo $fair;?></td>
							
							
				
	
	</tr>
		
						 </tbody>
	<?php
	}
	?>
	</div></div></div>
</body>
</html>