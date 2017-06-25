n<!DOCTYPE html>
<html>
<head>
	<title>Login And Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #7f8c8d">
		
		<div id="main-wrapper">
			<center>
				<h1>SignUp</h1>
				<img src="img/gravatar.jpg" class="avatar" />
			</center>
		

			<div id="form">
					<form class="myform" action="index.php" method="post">
						<label>Username</label>
						<input type="text" name="" class="inputvalues"><br/>
						<label>Password</label>
						<input type="Password" name="Password" class="inputvalues"><br>
						<label>ConfirmPassword</label>
						<input type="Password" name="Password" class="inputvalues"><br>
						<label>Phone</label>
						<input type="number" name="Password" class="inputvalues"><br>
						<input type="button" name="" id="register" value="SignUp">
						<input type="button" name="" id="back_btn" value="BackToLogin">

					</form>
				
			</div>
		</div>
</body>
</html>