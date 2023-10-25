<!--php goes here-->
<?php 
	Include('common/connection.php');
	?>
<!--php ends here-->
<!--html goes here-->
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/style.css">
	</head>
		<body>
			<?php
				Include('common/header.php');
			?>
			<!--right div starts here-->
			<div class="right">
				<?php
					$query="select * from nails order by rand () limit 0,10";
					$result=mysqli_query($connect,$query);
					while($row=mysqli_fetch_assoc($result))
					{
				?>
				<!--pics div starts here-->
					<img src="uploadimages/<?php echo $row['pimage']?>"/>
				<!--pics div ends here-->
				<?php }?>
			</div>
			<!--right div ends here-->
		</div>
		<!--main div ends here-->
		
		</div>	
		<!--footer goes here-->
			<?php Include('common/footer.php');?>
		</body>
</html>
		