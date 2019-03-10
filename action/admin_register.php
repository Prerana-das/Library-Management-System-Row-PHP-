<?php
	include('db.php');
	
	$firstName=$_POST['firstname'];
	$lastName=$_POST['lastname'];
	$userName=$_POST['username'];
	$Email=$_POST['email'];
	$Password=$_POST['password'];
	$rePassword=$_POST['rePassword'];
	$contact=$_POST['contact'];
	
	
	if($Password == $rePassword && strlen($Password)>4){
		$sql = "INSERT INTO admin(firstname,lastname,username, email,password,contact) VALUES('".$firstName."','".$lastName."','".$userName."','".$Email."','".$Password."','".$contact."')";
		
		$result= $conn->query($sql);
		
		if($result){
			header('Location: http://localhost/Library/admin_login.php');
		}
		else{
			echo "something wrong";
		}
	}
		
		else{
			echo "Passwords notmatch";
		}
	
?>