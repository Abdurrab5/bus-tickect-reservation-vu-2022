 <?php
       
		require 'header.php';
        $page="bus";
		$bus_no='';
		$dep_from=''; 
		$dep_to='';
		$dep_date=''; 
		$dep_time='';
		$fair='';
		$result='';
 
 ?>	

 

		<div class="container" >

		 
	
<div class="card" >
<div class="card-body">
		
<table class="table" id="form1">
<thead>
	<tr></tr>
</thead>
 <thead>
	<tr>
	<th class="serial">#</th>
	<th>Bus Id</th>
	<th>Bus No</th>
	<th>From</th>
	<th>To</th>
	<th>Date</th>
	<th>Time</th>
	<th>Fair</th>
	<th>view Seats</th>
	<th>Delete</th>
	</tr>
</thead>
	<tbody>
<?php	
 
		$query="SELECT * FROM schedule ";
		$result= mysqli_query($link,$query);
   
	 
		$i=1;
		   while( $row=mysqli_fetch_assoc($result)){
		
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
	<td><a href="viewseat.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">View Seats</a></td>
</tr>
		
 </tbody>
	<?php
	
}
	?>
</div>
</div>
</div>
</script>
</body>
</html>