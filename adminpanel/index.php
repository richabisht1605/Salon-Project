<?php 	session_start();
	Include('common/connection.php');
	if(!empty($_POST['save']))
	{
		$Username=$_POST['un'];
		$Password=$_POST['pa'];
		$query="select * from logintable where username='$Username' and password='$Password'";
		$result=mysqli_query($connect,$query);
		$count=mysqli_num_rows($result);
		if($count>0)
		{
			if(!empty($_POST['c']))
			
			$_SESSION['uname']="set";
			header ('location:addcategory.php');
		}
		else
		{
			echo "Login unsuccessful";
		}
	}
	if(!empty($_GET['log']))
	{
		session_destroy();
	}
?>
<html>
   <head>
		<title>admin-index</title>	
		<link rel="stylesheet" href="css/style.css" />
   </head>
    <body>
		<!---maincontainer starts--->
			<div class="header">
				<div class="inhead">
			
				<img   src="images/m1.jpg"/>
				<img   src="images/bangs.jpg"/>
				<img   src="images/therapy.jpg"/>
				<img   src="images/a1.jpg"/>
				<img   src="images/a2.jpg"/>
				<img   src="images/b4.jpg"/>
				<img   src="images/t1.jpg"/>
				
				
				</div>
			</div>		  
			<!--innercontainer ends-->
        <!---maincontainer ends--->           			
		<!--middlecontainer starts-->
			<div class="inner2">
				<form method="post">
					<table class="logintable">
						<tr>
						<th colspan="2" class="login">Login Here</th>
						</tr>
						<hr></hr>
						<tr>
						<td>Username</td>
						<td><input type="text" name="un"  value="<?php if(!empty($_COOKIE['usercookie'])) echo $_COOKIE['usercookie'] ?>"  required  /></td>
						</tr> 
						<tr>
						<td>Password</td>
						<td><input type="password" name="pa" value="<?php if(!empty($_COOKIE['userpassword'])) echo $_COOKIE['userpassword'] ?>" required  /></td>
						</tr>
						
						<tr>
						<td></td>
						<td><input type="submit" value="Login" class="button" name="save"/></td>
						</tr>
						<tr>
						<td></td>
						</tr>
					</table>
				</form>
			</div>
			<hr></hr>
		<!--middlecontainer ends-->
      <?php  Include('common/footer.php');?>
    </body>
</html>