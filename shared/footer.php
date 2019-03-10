
	<!-- ===================Footer================ -->
		<section class="footer_back fix">
			<div class="footer main fix">
					<article class="footer_col">
						<h3>ABOUT LIBRARIA</h3>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking.</p>
					</article>
					<article class="footer_col">
						<h3>QUICK LINKS</h3>
						<ul>
							<li><a href="">Home</a><li>
							<li><a href="">About</a><li>
							<li><a href="">Books</a><li>
							<li><a href="">Features</a><li>
							<li><a href="">Blog</a><li>
							<li><a href="">Portfolio</a><li>
						</ul>
					</article>
					<article class="footer_col">
						<h3>WEEKLY NEWSLETTER</h3>
						<p>Get our awesome releases and latest updates with exclusive news and offers in your inbox.</p>
						<form action="">
							<input type="text" placeholder="Join our newsletter">						
							<input type="submit" value="Sign up">
						</form>
					</article>
					<article class="footer_col">
						<h3>SOCIAL NETWORK</h3>
						<ul>
							<li><a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i> facebook</a><li>
							<li><a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i> twitter</a><li>
							<li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i> email</a><li>
							<li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i> linkedin</a><li>
							<li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i> youtube</a><li>
						</ul>
					</article>
				</div>
			<div class="footer_copyrt main fix">
					<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-github" aria-hidden="true"></i></a>
					<p> &copy; 2017. All Right Reserved. </p>
			</div>
		</section>
	<!-- ==============================Script============================== -->
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>	
		<script>
			$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
			items:1,
			loop:true,
			nav:true,
			navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			autoplay:true,
			});
		});
	
			var wow = new WOW(
					{
			boxClass:     'wow',      
			animateClass: 'animated',
			offset:       0,         
			mobile:       true,   
			live:         true,    
			callback:     function(box) {
			},
			scrollContainer: null 
		  }
		);
		wow.init();
		$(document).ready(function(){
				$(window).scroll(function(){
					if ($(this).scrollTop() > 300) {
						$('.scrollToTop').fadeIn();
					} else {
						$('.scrollToTop').fadeOut();
					}
				});
				$('.scrollToTop').click(function(){
					$('html, body').animate({scrollTop : 0},800);
					return false;
				});
				
			});
			
			jQuery(document).ready(function( $ ) {
				$('.counter').counterUp({
					delay: 10,
					time: 1000
				});
			});
		</script>
	</body>
</html>