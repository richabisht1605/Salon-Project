	<!--php ends  here-->
	<?php 
	Include('common/connection.php');
	if(!empty($_POST['save']))
	{
		$username= $_POST["name"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$query="insert into signup(fullname,email,password) values('$username','$email','$pass')";
		if (mysqli_query($connect, $query)) 
		{
			?>
				<script>
					alert("signup successfull ");
				</script>
			<?php ;
		} else 
		{
			?>
				<script>
					alert("signup unsuccessfull ");
				</script>
			<?php 
		}
	}
	if(!empty($_POST['submit']))
	{
		$fname=$_POST['username'];
		$ps=$_POST['password'];
		$query=" select * from signup where fullname='$fname' and password='$ps'";
		$result=mysqli_query($connect,$query);
		$res=mysqli_fetch_assoc($result);
		$count=mysqli_num_rows($result);
		if ($count>0)
		{
			
			?>
			<script> 
				alert("login successfull");
			</script> <?php
			header('location:home.php');
		}
		else
		{
			?>
			<script> 
					alert("Please sign up for login");
			</script> <?php
		}
	}
?>
<!--php ends  here-->
<!--html ends  here-->
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
		<body>
			<!--header starts here-->
			<div class="header">
				<!--innerheader starts here-->
				<div class="innerheader">
					The Divine Salon
				</div>
				<!--innerheader ends here-->
			</div>
			<!--header ends here-->
			<!--backgroundimg div starts here-->
			<div class="background">
				<!--main div starts here-->
				<div class="main">
					<!--center div starts here-->
					<form method="post" class="form">
						<!--signup div starts here-->
						<div class="center1">
							<!--table stats here-->
							<table class="table">
							<tr>
								<td colspan="2">SIGNUP</td>
							</tr>
							<td ><span>Full Name</span></td>
								<td><input type="text" name="name" ></td>
							</tr><br>
							<tr>
								<td ><span>Email</span></td>
								<td><input type="text" name="email" ></td>
							</tr>
							<tr>
								<td ><span>Password</span></td>
								<td><input type="password" name="pass" ></td>
							</tr>
							<tr>
								<td colspan="2"><input class="login" type="button" name="save" value="SIGNUP">
								</td>
							</tr>
							<tr>
								<td colspan="2"><a href="index.php"><input class="login" type="button" name="save" value="GO TO LOGIN ">
								</a></td>
							</tr>
						</table>
						<!--table ends here-->
					</form>
					<!--form ends here-->
					</div>
					<!--signup div ends here-->
				</div>
				<!--main div ends here-->
			</div>
			<!--background div ends here-->
			<!--footer goes here-->
			<?php 
				Include('common/footer.php');
			?>
		</body>
</html>
	