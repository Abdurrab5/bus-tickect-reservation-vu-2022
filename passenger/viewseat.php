 <?php
       
		require 'header.php';
        $page="bus";
		$id='';
   $bus_no='';
   $seat_no=0;
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];



}
 $query="SELECT * FROM schedule where s_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  	
     $id=$row['s_id'];
	$bus_no= $row['bus_no'];
	     $dep_from=$row['dep_from'];
	$dep_to= $row['dep_to'];
	$dep_time= $row['dep_time'];
	$dep_date= $row['dep_date'];
		   
		   
?>	<div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3" id="form1">
<tr>
<th>Bus</th>

<th>From</th> 

<th>To</th>

<th>Date</th> 

<th>Time</th>

</tr>


<tr>
<td><?Php echo $bus_no; ?></td>
<td><?Php echo $dep_from; ?>
<td><?Php echo $dep_to; ?></td>
<td><?Php echo $dep_date; ?>
<td><?Php echo $dep_time; ?>
</td></tr>
<?php } ?>
</table>
 </div>
<div class="container" >
<div class="card" >
<div class="card-body">
	<table class="table table-borderless table-data3" id="form1">	 
												
 
<?php	


 $busSql = "Select * from seats where bus_no='$bus_no'";
    $resultBusSql = mysqli_query($link, $busSql);
    $i=0;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		
		
		
       $id=$row['seat_id'];
		$bus_no= $row['bus_no'];
		$seat_no=$row['seat_no']; 
		$status=$row['status'];
		
		
                                    

   ?>
	

  <tr>
 <?Php  
							 if($status==1){ ?>
<td rowspan="2"><a href="" role="button" class="btn btn-block btn-danger">

Seat No:<?Php echo $seat_no;?></a></td>
    
                           
					<?Php	}else{     ?>
	<td rowspan="2"><a href="addseat.php?id=<?php echo $id;?>" role="button" class="btn btn-block btn-success">
    
 Seat No:<?Php echo $seat_no;?></a></td>
							 
	
	</tr>
		
						
	<?php
	}
	}
	?>
	</div></div></div>
</body>
</html>