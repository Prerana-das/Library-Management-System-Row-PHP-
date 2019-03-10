<?php
    include('db.php');
	$name=$_POST['name'];
	
	$sql="INSERT INTO category(name) VALUES('".$name."')";
	$result=$conn->query($sql);
	if($result)
	{
		header('Location: http://localhost/Library/category.php');
	}
	else{
		echo "Error Something";
	}
?>