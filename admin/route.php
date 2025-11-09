 <?php
       
		require 'header.php';
        $page="Schedule";
    if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];


    $query="delete from schedule where s_id='$id'";
    
 $result= mysqli_query($link, $query);
  alert("Bus Delete successfuly.");
       
        redirect_to("route.php");
 

}



?>	

<div class="container" >
<h4><a style="color:lightblue" href="addschd.php">Add Schedule</a></h4>


<table class="table" id="form1">
<thead>
								<tr>
									
									
									
								</tr>
							</thead>
						 <thead>
							<tr>
							<th class="serial">#</th>
							<th>Bus Id</th>
							<th> Bus No</th>
							<th>From</th>
							<th>To</th>
							<th>Date</th>
							<th>Time</th>
							<th>Fair</th>
							<th>Update</th>
							<th>Delete</th>
							 </tr>
						</thead>
												

						<tbody>
<?php	


 $busSql = "Select * from schedule";
    $resultBusSql = mysqli_query($link, $busSql);
    $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		
		
		
     $id=$row['s_id'];
	$bus_no= $row['bus_no'];
		$dep_from=$row['dep_from']; 
		$dep_to=$row['dep_to'];
		$dep_date=$row['dep_date']; 
		$dep_time=$row['dep_time'];
		$fair=$row['fair']; 
		 
                                    

   ?>
	

<tr>
							<td class="serial"><?php echo $i++; ?></td>
							<td><?Php echo $id; ?></td>	 
							<td><?Php echo $bus_no;?></td>
							<td><?Php echo $dep_from ;?></td>
							<td><?Php echo $dep_to ;?></td>
							<td><?Php echo $dep_date;?></td>
							<td><?Php echo$dep_time ;?></td>
							<td><?Php echo $fair;?></td>
							
							
				<td><a href="addschd.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a></td>
				<td><a href="route.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a></td>
		 
							 
	
	</tr>
		
						 </tbody>
	<?php
	}
	?>
	</div></div></div>
</body>
</html>