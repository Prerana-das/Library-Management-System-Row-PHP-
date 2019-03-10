<?php
	session_start();
	
	session_unset();
	
	session_destroy();
	header('Location: http://localhost/Library/admin_login.php');

?>