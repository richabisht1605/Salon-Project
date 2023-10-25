<!--php goes here-->
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
	Include('vendor/autoload.php');
	//access Google API
	$client = new Google_Client();
	$client->setClientId('716798615669-u9hkavcp9anvesuj2uc9070225m6o54p.apps.googleusercontent.com');
	$client->setClientSecret('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');
	$client->setRedirectUri('http://localhost/salonproject/home.php');
	$client->addScope("email");
	$client->addScope("profile");
	// access facebook API
	$fb = new Facebook\Facebook([
	 'app_id' => '228855353017782',
	 'app_secret' => '9f3662505b5e10d2b9120ee05cd3dcf9',
	 'default_graph_version' => 'v2.10',
	]);	
	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email']; 
	$loginUrl = $helper->getLoginUrl('http://localhost/salonproject/home.php', $permissions);
?>
<!--php ends here-->
<!--html goes here-->
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
					The Divine Salon !!
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
					<div class="center">
						<!--logintable starts here-->							
						<table class="table"><br><br>
							<tr>							
								<td colspan="2">LOGIN</td>
							</tr>
							<tr>
								<td>Username</td>
								<td><input type="text" name="username" required></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password" required></td>
							</tr>
							<tr>
								<td colspan="2"><a href="home.php"><input class="login" type="submit" name="submit" value="LOGIN"></a></td>
							</tr>
							<tr>
								<td colspan="2"><a href="<?php echo $client->createAuthUrl(); ?>"><input class="login" type="button" name="submit" value="LOGIN WITH GOOGLE"></a></td>
							</tr>
							<tr>
								<td colspan="2"><a href="<?php echo $loginUrl ?> "><input class="login" type="button" name="submit" value="LOGIN WITH FACEBOOK"></a></td>
							</tr>
							<tr>
								<td colspan="2">OR</td>
							</tr>
							<tr>
								<td colspan="2"><a href="index2.php"><input class="login" type="button" name="submit" value="SIGNUP"></a></td>
							</tr>
						</table>
					
					</div></br>
					<!--signup div ends here-->
				</div>
				<!--main div ends here-->
			</div>
			<!--background div ends here-->
			<!--footer goes here-->
			<?php 
				Include('common/footer.php');
			?>
			<!--footer ends  here-->
		</body>
</html>
	