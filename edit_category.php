<?php
 
    include('action/db.php');
	include('shared/sideber.php');
	
	$id = $_GET['id'];
    
    $sql = "SELECT * FROM category WHERE categoryID = ".$id;
	 $result = $conn->query($sql);
	  if ($result->num_rows > 0) {
                    
    while($row = $result->fetch_assoc()){
        $name = $row['name'];
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
			
			<form action="action/edit_category.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="categoryID" value="<?= $id ?>" />
				<input type="text" name="name" placeholder="Category Name" value="<?= $name ?>"/>
				<input type="submit" value="Submit"/>
			</form>
		</div>
	</body>
</html>
