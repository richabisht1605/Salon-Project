<!--php goes here-->
<?php 
	Include('common/connection.php');
	if(!empty($_POST['save']))
	{
		$username= $_POST["uname"];
		$date = $_POST["date"];
		$time = $_POST["time"];
		$catid = $_POST["email"];
		$ser = $_POST["service"];
		$query="insert into bookings(personname,bookingdate,bookingtime,email,service) values('$username','$date','$time','$catid','$ser')";
		if (mysqli_query($connect, $query)) {
		?>
			<script>
				alert("Your have successfully booked your appointment ");
			</script>
			<?php ;
		} else 
		{
		?>
			<script>
				alert("Your are failed to book your appointment ");
			</script>
		<?php ;
		}
	}
?>
<!--php ends here-->
<!--html goes  here-->
<html>
	<head>
		<title>booknow</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
		<body>
		<?php Include('common/header.php')?>
		<!--right div goes here-->
			<div class="right">
			<!--form goes here-->
			<form method="post">
				<!--login table div goes here-->
				<table class="logintable" >
					<tr>
						<td colspan="2"><h1>Book Your Appointment</h1></td>
					</tr>
					<tr>
						<td>Client's Name</td>
						<td><input type="text"  name="uname"  required></td>
					</tr>
					<tr> 
						<td>Booking Date</td>
						<td><input type="date" name="date" required></td>
					</tr>
					<tr> 
						<td>Booking time</td>
						<td><input type="time"  name="time" required ></td>
					</tr>	
					<tr> 
						<td>Email </td>
						<td><input type="email"  name="email" required ></td>
					</tr>
					<tr>
						<td>Service Service</td>
						<td><select name="service">
							<option> </option>
							<?php 
								$query ="select * from category";
								$result=mysqli_query($connect,$query);
								while ($cat=mysqli_fetch_assoc($result))
								{
							?>
								<option value="<?php echo $cat['id']?>"> <?php echo $cat['service']?></option>
							<?php 
								}
							?>
							</select>
						</td>
					</tr>
					<tr> 
						<td></td>
						<td><input type="submit" value="Save" class="btn" name="save"/></td>
					</tr>		
				</table>
				<!--login table ends goes here-->
			</form>
			<!--form ends goes here-->
			</div>
			<!--right table ends goes here-->
		</div>
		<!--main ends goes here-->
	</div>
	<!--background table ends goes here-->
	</div>
	<!--footer starts here-->
	<?php Include('common/footer.php'); ?>
	</body>
</html>
	