<!--php goes here-->
<?php 
	Include('common/connection.php');
	if(!empty($_POST['submit']))
	{
		$username= $_POST["uname"];
		$email = $_POST["email"];
		$query = $_POST["query"];
		$phone = $_POST["phone"];
		$query="insert into contactus(username,email,query,phone) values('$username','$email','$query','$phone')";
		if (mysqli_query($connect, $query))
		{
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
				<!--login goes here-->
				<table class="logintable" border="0px">
					<tr>
						<td>Name</td>
						<td><input type="text" name="uname" required ></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email"required ></td>
					</tr>
					<tr> 
						<td>Contact Number</td>
						<td><input type="text" name="phone" required></td>
					</tr>	
					<tr>
						<td>Review</td>
						<td><textarea name="query" required></textarea></td>
					</tr>
					<tr> 
						<td></td>
						<td><input type="submit" class="btn" name="submit" value="Submit"></td>
					</tr>							
					<tr><td></td>
						<td></td>
					</tr>
				</table>
				<!--table ends goes here-->
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
