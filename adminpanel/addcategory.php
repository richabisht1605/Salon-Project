<?php 
	// session_start();
	Include('common/connection.php');
	if(!empty($_POST['save']))
	{
		$cname=$_POST['cname'];
		$sname=$_POST['sname'];
		$charges=$_POST['charges'];
	
		$query="insert into category(cname,service,charges) values('$cname','$sname','$charges')";	
		if(mysqli_query($connect,$query))
		{
			?>
			<script>
				alert("category inserted")
			</script>
			<?php 
		}
		else
		{
			?>
			<script>
				alert("category  not inserted")
			</script>
			<?php 
		}
 	}
	
	// if(!empty($_GET['eid']))
	// {
		// $id=$_GET['eid'];
		// $query="select * from category where id=$id";
		// $result=mysqli_query($connect,$query);
		// $r=mysqli_fetch_assoc($result);
		
		
	// }
	// if(empty($_SESSION['uname']))
	// {
		// header('location:login.php');		
	// }

?>

<html>
<head>
    <title>Salon Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
	<body>
	<?php Include('common/header.php');?>
	<!--right div  starts here--->
		<div class="right">			
			<h2>Category Manager</h2>
			<!--div starts here--->			    					 
				<div class="add">
					<div class="addpage"> Add category</div> 
						<form method="post">
						<!-- table starts -->
								
									<table class="table3" border="1px solid" >												
										<tr>						 
											<td> Category Name*
											</td>
											<td>
												<input type="text" name="cname" >
											</td>
										</tr>	
										<tr>						 
											<td>Service Name*
											</td>
											<td>
												<input type="text" name="sname" >
											</td>
										</tr>	
										<tr>						 
											<td> Charges
											</td>
											<td>
												<input type="text" name="charges" >
											</td>
										</tr>		
										<tr>						 
											<td>Registration date
											</td>
											<td>
												<?php echo date('d-m-y') ?>
											</td>
										</tr>		
														
									</table>
									
								<!-- table3 ends -->
								
							<input type="submit" value="save" class="save" name="save"/>
							
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