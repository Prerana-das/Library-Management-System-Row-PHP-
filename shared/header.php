<!DOCTYPE html>
	<html>
	<head>
	  <title>LIBRARIA</title>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet">
	  <link rel="stylesheet" href="css/owl.carousel.min.css">
	  <link rel="stylesheet" href="css/owl.theme.default.min.css">
	  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
	  <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
	  <link rel="stylesheet" type="text/css" href="css/style.css"/>
	
	</head>
	<body>
	<!-- ====================Header=======================  -->
	<header class="header-background">
		<div class="header main fix">
			<figure class="logo fix">
				<img src="img/logo.png"/>
			</figure>
				<h2>LIBRARIA</h2>
			<nav class="navbar fix">
				<ul>
					<li><a href="index.php">Home</a><li>
					<li><a href="about.php">About</a><li>
					<li><a href="books.php">Books</a><li>
					<li><a href="blog.php">Blog</a><li>
					<li><a href="portfolio.php">Portfolio</a><li>
					<li><a href="contact.php">Conatct</a><li>
				</ul>
			</nav>
			<?php
                 if(!isset($_SESSION["id"])){
             ?>
			<a href="login.php"><i class="fa fa-lock" aria-hidden="true"></i>Login</a>
			<?php
                 }else{
             ?>
			 <a href="logout.php"><i class="fa fa-lock" aria-hidden="true"></i>Logout</a>
			 <?php
                  }
              ?>
		</div>
	</header>
	<!-- ===========Scroll button================ -->
				<a href="#" class="scrollToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>