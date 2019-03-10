<?php
 
    include('action/db.php');
	include('shared/sideber.php');
	
	$id = $_GET['id'];
    
   $sql = "SELECT * FROM addbooks INNER JOIN category on category.categoryID=addbooks.categoryID AND addID = ".$id;
	 $result = $conn->query($sql);
	  if ($result->num_rows > 0) {
                    
    while($row = $result->fetch_assoc()){
        $addTitle = $row['addTitle'];
        $description = $row['description'];
        $name = $row['name'];
        $booksQty = $row['booksQty'];
    }
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
		<div>
			
			<form action="action/edit_books.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="addID" value="<?= $id ?>" />
				<input type="text" name="addTitle" placeholder="Books Name" value="<?= $addTitle ?>"/>
				<input type="text" name="description" placeholder="Author" value="<?= $description ?>"/>
				<input type="text" name="name" placeholder="Category Name" value="<?= $name ?>"/>
				<input type="text" name="booksQty" placeholder="Books Quantity" value="<?= $booksQty ?>"/>
				<input type="submit" value="Submit"/>
			</form>
		</div>
	</body>
</html>
