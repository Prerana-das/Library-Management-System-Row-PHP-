<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
	<section class="admin_log_back">
	<div class="admin_login_main main fix">
			<h1>LIBRARIA</h1>
			<div class="admin_login fix">
				<h2>ADMIN LOGIN</h2>
				<form action="action/admin_login.php" method="post" enctype="multipart/form-data">
					<input type="email" placeholder="Enter your email" name="email"/>
					<input type="password" placeholder="Enter your password" name="password"/>
					<input type="submit" value="LOGIN" />
				</form>	
			</div>
			<p>You don't have an account yet?</p>
			<a href="admin_register.php">Create an new account</a>
	</div>
	</section>
</body>
</html>