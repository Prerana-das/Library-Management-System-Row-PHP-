<?php
    include('action/db.php');
	$id = $_GET['id'];

	$sql = "DELETE FROM addbooks WHERE addID = ".$id;
	$sql = "DELETE FROM addimage WHERE addID = ".$id;
    
    $result = $conn->query($sql);
    
	   if ($result === TRUE) {
		echo "Record deleted successfully";
		 header('Location: http://localhost/Library/books_list.php');
	} else {
		echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
?>