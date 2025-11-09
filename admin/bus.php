 <?php
      require 'header.php';
       $page="bus";
   if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];


    $query="delete from buses where bus_id='$id'";
    
 $result= mysqli_query($link, $query);
  alert("Bus Delete successfuly.");
       
        redirect_to("bus.php");
 

}
 ?>	


<div class="container" >
<h4><a style="color:lightblue" href="addbus.php">ADD BUS</a></h4>
<table class="table" id="form1">
  
<thead>
	<tr>
		<th class="serial">#</th>
		<th>Bus Id</th>
		<th> Bus No</th>
		<th>Seating capacity</th>
		<th>Update</th>
		<th>Delete</th>			
	</tr>
</thead>
												
<tbody>
<?php	


 $busSql = "Select * from buses";
    $resultBusSql = mysqli_query($link, $busSql);
    $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
	    $id=$row['bus_id'];
		$bus_no= $row['bus_no'];
		$capacity=$row['seat_capacity']; 
	
?>
	   <tr>
		<td class="serial"><?php echo $i++; ?></td>
		<td><?Php echo $id; ?></td>	 
		<td><?Php echo $bus_no;?></td>
		<td><?Php echo $capacity ;?></td>
		<td><a href="addbus.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a></td>
				<td><a href="bus.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a></td>
				
		</tr>
		
</tbody>
	<?php
	}
	?>
	</div>
	</div>
	</div>
</body>
</html>