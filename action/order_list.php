<?php
	session_start();
	include('db.php');
	
	$addID = $_POST['addID'];

	
	 $sql = "INSERT INTO orderbooks(addID,userID) VALUES(
    ".$addID.",
	".$_SESSION["id"]."
	)";
		
	$result= $conn->query($sql);
    
	
	if($result){
		 header('Location: http://localhost/Library/order_list.php');
	}
	else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>