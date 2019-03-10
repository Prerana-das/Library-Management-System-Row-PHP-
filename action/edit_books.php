<?php

    include('db.php');
	
	$addTitle=$_POST['addTitle'];
	$author=$_POST['description'];
	$name=$_POST['name'];
	$booksQty=$_POST['booksQty'];
	$id=$_POST['addID'];
	
	$sql = "UPDATE addbooks SET addTitle = '".$addTitle."', description = '".$author."', booksQty= '".$booksQty."' WHERE addID = " .$id;
	$result = $conn->query($sql);
	
	if($result){
        header('Location: http://localhost/Library/books_list.php');
    }
	else{
        echo "Error Somthong";
    }
?>
