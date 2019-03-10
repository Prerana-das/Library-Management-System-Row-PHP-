<?php
    include('action/db.php');
	$id = $_GET['id'];

	$sql = "DELETE FROM category WHERE categoryID = ".$id;
    
    $result = $conn->query($sql);
    
	   if ($result === TRUE) {
		echo "Record deleted successfully";
		 header('Location: http://localhost/Library/category.php');
	} else {
		echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
?>