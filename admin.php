<?php
	session_start();
	   if(!isset($_SESSION["type"])){
    header('Location: http://localhost/Library/admin_login.php');
    }
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
		<?php
			include('shared/sideber.php');
			
		?>
		<div class="profile_back fix">
			<h2>Admin</h2>
			<p>Sylhet</p>
		</div>
	</section>
</body>
</html>