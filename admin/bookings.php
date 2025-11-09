 <?php
       
		require 'header.php';
        $page="booking";
   



?>	

<div class="container" >
<h4><a style="color:lightblue" href="addbooking.php">ADD Booking</a></h4>
<table class="table" id="form1">
<thead>
								<tr>
									
									
									
								</tr>
							</thead>
						 <thead>
							<tr>
							<th class="serial">#</th>
							<th>Booking Id</th>
							<th> Passenger Id </th>
							<th>Bus NO</th>
							<th>Seat No</th>
							<th> From </th>
							<th>To</th>
							<th>Departure Date</th>
							<th> Time</th>
							<th>Bus NO</th>
							<th>Amount</th>
							<th>Status</th>
							 
							 </tr>
						</thead>
												

						<tbody>
<?php	


 $busSql = "Select * from bookings where status=1";
    $resultBusSql = mysqli_query($link, $busSql);
    $i=0;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		
		
		
       $id=$row['booking_id'];
		$username= $row['username'];
		$s_id=$row['s_id']; 
		$bus_no=$row['bus_no'];
		$seat_no= $row['seat_no'];
		$dep_from=$row['dep_from']; 
		$dep_to=$row['dep_to'];
		$dep_date= $row['dep_date'];
		$dep_time=$row['dep_time']; 
		$amount=$row['amount'];
         $status=$row['status'];
                                      

   ?>
	

<tr>
							<td class="serial"><?php echo $i++; ?></td>
							<td><?Php echo $id; ?></td>	 
							<td><?Php echo $username;?></td>
							<td><?Php echo $s_id ;?></td>
							<td><?Php echo $seat_no ;?></td>
							 <td><?Php echo $bus_no; ?></td>	 
							 
							<td><?Php echo $dep_from ;?></td>
							<td><?Php echo $dep_to;?></td>
							 <td><?Php echo $dep_date;?></td>
							<td><?Php echo $dep_time ;?></td>
							<td><?Php echo $amount;?></td>
							<td><?Php if($status==1){ echo 'Approve';}?></td>
	
	</tr>
		
						 </tbody>
	<?php
	}
	?>
	</div></div></div>
</body>
</html>