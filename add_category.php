<?php
	include('shared/sideber.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
	<div>
		<form action="action/add_category.php" method="post" enctype="multipart/form-data">
			Name:<input type="text" placeholder="Category name" name="name"/><br/>
			<input type="submit" value="submit"/>
		</form>
	</div>
	</body>
</html>