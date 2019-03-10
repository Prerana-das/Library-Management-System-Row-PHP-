<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<section class="order_book_back fix">
			<div class="order_book main fix">
			<form  action="action/order_list.php" method="post" enctype="multipart/form-data">
				<p>Are you cofirm for order this book?</p>
				Yes<input type="radio" value="yes" name="vote"/>
				No<input type="radio" value="no" name="vote"/>
				<input type="submit" value="send"/>
			</form>	
			</div>
		</section>
	</body>
</html>