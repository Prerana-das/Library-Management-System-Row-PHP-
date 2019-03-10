<?php
	session_start();
	include('db.php');
	
	$CategoryID = $_POST['categoryID'];
	$AddTitle = $_POST['addTitle'];
	$Description = $_POST['description'];
	$price = $_POST['price'];
	$booksQty = $_POST['booksQty'];
	$fileToUpload=$_POST['fileToUpload'];
	
	 $sql = "INSERT INTO addbooks(categoryID, addTitle, description, booksQty, adminID, price) VALUES(
    ".$CategoryID.",
    '".$AddTitle."',
    '".$Description."',
    ".$booksQty.",
	".$_SESSION["id"].",
	 ".$price."
	)";
		
	$result= $conn->query($sql);
   
		
		$addID = $conn->insert_id;

	if($result){
	   
       
    $target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    $filname = $target_dir.md5(date('Y-m-d H:i:s')).'.'.$imageFileType;
    
    
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filname)) {
			
            $sql = "INSERT INTO addimage(addID, imageName) VALUES(
                ".$addID.",
                '".$filname."')";
                
            $result= $conn->query($sql);
            
}
		 header('Location: http://localhost/Library/books.php');
	}
	else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>