<!--php goes here-->
<?php 
	Include('common/connection.php');
	?>
<!--php goes here-->
<!--html goes here-->
<html>
	<head>
		<title>contactus</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
		<body>
			<?php Include('common/header.php');?>
			<!--right div starts here-->
				<div class="right">
					<!--form goes here-->
					<form method="post">
						<!--login table starts here-->
							<table class="logintable" >
								<tr>
									<th>Categories</th>
									<th>Services</th>
									<th>Charges</th>
								</tr>
								<!--php goes here-->
								<?php 
									$query ="select * from category";
									$result=mysqli_query($connect,$query);
									while ($cat=mysqli_fetch_assoc($result))
									{
								?>
								<!--php ends here-->
								<tr>
									<td><?php echo $cat['cname']?></td>
									<td><?php echo $cat['service']?></td>
									<td><?php echo $cat['charges']?></td>
								</tr>
								<!--php goes here-->
								<?php 
										}
								?>
								<!--php ends here-->
								<tr> 
									<td colspan="3"><a href="booknow.php"><input type="button" value="Book Now" class="btn" name="save"/></a></td>
								</tr>		
							</table>
							<!--table ends here-->
					</form>
					<!--form  ends here-->
				</div>
				<!--right starts here-->
			</div>
			<!--main ends  here-->
		</div>
		<!--background ends here-->
		<!--footer starts here-->
		<?php Include('common/footer.php');?>
		<!--footer ends here-->	
	</body>
</html>
