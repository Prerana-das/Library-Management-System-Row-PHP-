<?php
	session_start(); 
	include('shared/header.php');
    
     if(isset($_SESSION["id"])){
    header('Location: http://localhost/Library/index.php');
}
?>
				
	<!-- =========================Banner=================== -->
	<section class="banner-section fix">
		<div class="banner_item3 fix">
			<p class="animated wow slideInLeft">Now Sign in Our</p>
			<h2 class="animated wow slideInRight">Biggest Library</h2>
			<a href="">SEE MORE</a>
		</div>
	</section>
	
	<!-- ===========Create account================ -->
	<section class="signup_back fix">
		<div class="signup_main main fix">
			<div class="signup fix">
				<h1>CREATE NEW ACCOUNT</h1>
				<form action="action/register.php" method="post" enctype="multipart/form-data">
						<input type="text" placeholder="First Name" name="firstname" />
						<input type="text" placeholder="Last Name" name="lastname"/>
						<input type="text" placeholder="User Name" name="username"/>
						<input type="email" placeholder="Email" name="email"/>
						<input type="text" placeholder="Contact" name="contact"/>
						<input type="password" placeholder="Password" name="password"/>
						<input type="password" placeholder="Confirm Password" name="rePassword" />
						<input type="submit" value="Sign Up" />
				</form>
			</div>
		</div>
	</section>
<?php
	include('shared/footer.php');
?>