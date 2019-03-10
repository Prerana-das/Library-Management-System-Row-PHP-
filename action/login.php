<?php
	session_start();
	include('db.php');
	
	$Email=$_POST['email'];
	$Password= $_POST['password'];
	
	if(strlen($Password) > 4){
		$sql = "SELECT * FROM users WHERE email ='".$Email."' AND password ='".$Password."'";
		
		$result =$conn ->query($sql);
		
		if($result->num_rows > 0){
			while($row= $result->fetch_assoc())
			{
				$id=$row['id'];
				$firstName=$row['firstname'];
				$lastName=$row['lastname'];
				$userName=$row['username'];
				$Email=$row['email'];
				$Password=$row['password'];
				$contact=$row['contact'];
			}
			
			$_SESSION["id"]= $id;
			$_SESSION["firstname"] = $firstName;
			$_SESSION["lastname"] = $lastName;
			$_SESSION["username"] = $userName;
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION["contact"] = $contact;
		
			 header('Location: http://localhost/Library/index.php');
        }
		else{
            echo "Error Somthong";
        }
        }
	
	else{
		echo "password notmatch";
	}
?>