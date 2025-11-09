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

 

		

		<div id="search">
	<form action="" method="GET" is="form" >
	
     <label for="name">Select Date:</label>
	<select class="form-group" name="dep_date" id="dep_date" required>
		<option selected value=""> Select Date </option>		 
						
		<?php	$sh_id=0;
			$res=mysqli_query($link,"select * from schedule  ");
				while($row=mysqli_fetch_assoc($res)){
					$sh_id=$row['s_id'];
	echo "<option  value=".$row['dep_date'].">".$row['dep_date']."</option>";
				}
		?>
	</select>
  

   <input type="submit" class="btn btn-primary text-white" value="Search" name="submit" id="submit"/>
	</form>
	</div>
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
	 
	</tr>
</thead>
	<tbody>
<?php
if(isset($_GET['submit'])){
		
    	
      
	 
		$dep_date=$_GET['dep_date']; 
		//$dep_time=$_GET['dep_time'];
}	
if($dep_date!=''){	
	 	
 $query="SELECT * FROM schedule where dep_date='$dep_date'   ";
 $result= mysqli_query($link,$query);
 
 }else{
		$query="SELECT * FROM schedule ";
		$result= mysqli_query($link,$query);
  }
	 
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
<script>

function populate(s1,s2){
	
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML='';
	
}


</script>
</body>
</html>