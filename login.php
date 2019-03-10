<?php

	session_start();  

	include('shared/header.php');
    
?>
	<!-- =========================Banner=================== -->
	<section class="banner-section fix">
		<div class="banner_item3 fix">
			<p class="animated wow slideInLeft">Now Sign in Our</p>
			<h2 class="animated wow slideInRight">Biggest Library</h2>
			<a href="">SEE MORE</a>
		</div>
	</section>
	
	<!-- ===========Login================ -->
	<section class="login_back fix">
		<div class="login_main main fix">
			<div class="login fix">
				<h1>SIGN IN</h1>
				<form action="action/login.php" method="post" enctype="multipart/form-data">
					<input type="email" placeholder="Enter your email" name="email"/>
					<input type="password" placeholder="Enter your password" name="password"/>
					<input type="submit" value="LOGIN" />
				</form>	
			</div>
			<p>You don't have an account yet?</p>
			<a href="register.php">Sign Up</a>
		</div>
	</section>
<?php
	include('shared/footer.php');
?>