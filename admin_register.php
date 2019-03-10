<?php
    include('action/db.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
	<section class="admin_signup_back fix">
		<div class="admin_signup_main main fix">
			<div class="admin_signup fix">
				<h1>CREATE NEW ACCOUNT</h1>
				<form action="action/admin_register.php" method="post" enctype="multipart/form-data">
						<input type="text" placeholder="First Name" name="firstname" />
						<input type="text" placeholder="Last Name" name="lastname"/>
						<input type="text" placeholder="User Name" name="username"/>
						<input type="email" placeholder="Email" name="email"/>
						<input type="text" placeholder="Contact" name="contact"/>
						<input type="password" placeholder="Password" name="password"/>
						<input type="password" placeholder="Confirm Password" name="rePassword" />
						<input type="submit" value="Sign Up" />
				</form>
			</div>
		</div>
	</section>
</body>
</html>