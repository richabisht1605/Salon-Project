<!--php goes here-->
<?php 
	Include('common/connection.php');
?>
<!--php ends here-->
<!--html goes here-->
<html>
	<head>
		<title>contactus</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
		<body>
			<?php Include('common/header.php');?>
				<!--right div goes here-->
				<div class="right">
					<!--form goes here-->
					<form method="get">
						<!--login table goes here-->
						<table class="logintable">
							<tr>
							<!--form goes here-->
							<form method="get">
								<td colspan="6">Search By client's Name:
									<input type="search"  name="search" value="Search by name "/>
									<input type="submit" name="s" value="Search"/>
								</td>
							</form>
							<!--form ends here-->
							</tr>
							<tr>
								<th>Booking_id</th>
								<th>Client's Name</th>
								<th>Booking Date</th>
								<th>Booking Time</th>
								<th>Phone Number</th>
								<th>Service </th>
							</tr>	
							<!--php goes here-->		
							<?php
								if(!empty($_GET['s']))
								{
									$personname=$_GET['search'];
									$query="select * from bookings where personname like '%$personname%' ";
								}
								else
								{
									$query="select * from bookings ";
								}
								
								// $query="select * from bookings";
								$result=mysqli_query($connect,$query);
								while($row=mysqli_fetch_assoc($result))
								{
							
								?>
									
								<tr> 
									<td><?php echo $row['bookingid']?></td>
									<td><?php echo $row['personname']?></td>
									<td><?php echo $row['bookingdate']?></td>
									<td><?php echo $row['bookingtime']?></td>
									<td><?php echo $row['email']?></td>
									<td><?php echo $row['service']?></td>
								</tr>
								<?php
									}						
								?>	
								<!--php ends  here-->
								</tr>										
						</table>
						<!--table ends here-->
					</form>
					<!--form ends here-->
				</div>
				<!--right div ends here-->
			</div>
			<!--main div ends here-->
		</div>
		<!--background div ends here-->
		</div>
		<!--footer starts here-->
			<?php Include('common/footer.php');?>
		<!--footer ends here-->	
		</body>
</html>
	