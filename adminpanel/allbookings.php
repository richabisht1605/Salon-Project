<?php 
	// session_start();
	Include('common/connection.php');
	?>
<html>
<head>
    <title>Salon Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<?php Include('common/header.php');?>
	
				<div class="right">			
					
					<!--div starts here--->			    					 
						
							 
								<form method="post">
								<!-- table starts -->
								<table class="logintable" border="2px">
							<tr>
								<td colspan="6">Search By client's Name:
								
								<input type="search"  name="search" value="Search by name "/>
								<input type="submit" name="search" value="Search"/>
								</td>
							</tr>
							<tr>
								<th>Booking_id</th>
								<th>Client's Name</th>
								<th>Booking Date</th>
								<th>Booking Time</th>
								<th>Phone No.</th>
								<th>Service </th>
								
							</tr>
							<?php
						if(!empty($_GET['search']))
						{
							$searchname=$_GET['search'];
							$query="select * from bookings where personname like '%$searchpersonname%' ";
						}
						else
						{
							$query="select * from bookings";
						}
						$result=mysqli_query($connect,$query);
						while($row=mysqli_fetch_assoc($result))
						{
					
						?>
							
							<tr> 
								<td><?php echo $row['bookingid']?></td>
								<td><?php echo $row['personname']?></td>
								<td><?php echo $row['bookingdate']?></td>
								<td><?php echo $row['bookingtime']?></td>
								<td><?php echo $row['phone']?></td>
								<td><?php echo $row['service']?></td>
								<td><?php echo $row['charges']?></td>
								
							</tr>
						<?php
							}						
						?>								
							</table>
																				
										
									
									
								<!-- table3 ends -->
								
							
							
							</form>
					 	</div>
					<!-- div ends here -->
				</div>
            <!--right div ends--->
			</div>
        <!----middlecontainer ends -->
        		
		<!--- last container starts-->
		
			<div class="last"></div>
        <!--- last container ends-->
    </body>
</html>