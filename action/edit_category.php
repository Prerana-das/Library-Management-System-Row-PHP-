<?php

    include('db.php');
	
	$name=$_POST['name'];
	$id=$_POST['categoryID'];
	
	$sql = "UPDATE category SET name = '".$name."' WHERE categoryID = ".$id;
	$result = $conn->query($sql);
	
	if($result){
        header('Location: http://localhost/Library/category.php');
    }
	else{
        echo "Error Somthong";
    }
?>
