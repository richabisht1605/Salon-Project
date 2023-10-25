<?php session_start();
	Include('common/connection.php');
	if(!empty($_POST['save']))
	{
		$pimage=$_FILES['pimage']['name'];
		$imagepath=$_FILES['pimage']['tmp_name'];
		$currentime=round(microtime(true)*1000);
		$extarr=explode (".",$pimage);
		$ext=$extarr[1];
		$fullfilename=$currentime.".".$ext;
		$query="insert into nails (pimage) values ('$fullfilename')";
		if(mysqli_query($connect,$query))
		{
			move_uploaded_file($imagepath,"uploadimages/".$fullfilename);
			?>
			<script>
				alert("img inserted")
			</script>
			<?php 
		}
		else
		{
			?>
			<script>
				alert("img  not inserted")
			</script>
			<?php 
		}
 	}
	?>

<html>
<head>
    <title>Salon Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
	<?php Include('common/header.php');?>
	
				<div class="right">			
					<h2>Category Manager</h2>
					<!--div starts here--->			    					 
						<div class="add">
							<div class="addpage"> Add nails category</div> 
							<form method="post" enctype="multipart/form-data">
								<!-- table starts -->
								
									<table class="table3" border="1px solid" >												
										<tr>						 
											<td>hair images
											</td>
											<td>
												<input type="file" name="pimage" >
											
														
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