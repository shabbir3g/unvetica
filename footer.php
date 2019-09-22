<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unvetica
 */

?>


	
		<div class="footer-section">
			<div class="banner-color"> 
				<div class="container">
					<div class="footer-top"> 
						<a href="#">LOREM IPSUM</a>
						<a href="#">LOREM IPSUM</a>
						<a href="#">LOREM IPSUM</a>
						<a href="#">LOREM IPSUM</a>
						<a href="#">LOREM IPSUM</a>
						<a href="#">LOREM IPSUM</a>
						<a href="#">LOREM IPSUM</a>
					</div>
					<div class="row footer-middle"> 
						<div class="col-md-7"> 
							<div class="row"> 
								<div class="col-md-3"> 
									<ul class="social-icons"> 
										<li><a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/facebook.png" alt=""></a></li>
										<li><a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/instagram.png" alt=""></a></li>
										<li><a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/twitter.png" alt=""></a></li>
										<li><a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/pinterest.png" alt=""></a></li>
									</ul>
								</div>
								<div class="col-md-3"> 
									<ul class="footer-menus"> 
										<li><a href="#">LOREM IPSUM DOLOR</a></li>
										<li><a href="#">LOREM IPSUM</a></li>
										<li><a href="#">LOREM IPSUM DOLOR</a></li>
										<li><a href="#">LOREM IPSUM</a></li>
									</ul>
								</div>
								<div class="col-md-3"> 
									<ul class="footer-menus"> 
										<li><a href="#">LOREM IPSUM DOLOR</a></li>
										<li><a href="#">LOREM IPSUM</a></li>
										<li><a href="#">LOREM IPSUM DOLOR</a></li>
										<li><a href="#">LOREM IPSUM</a></li>
									</ul>
								</div>
								<div class="col-md-3"> 
									<ul class="footer-menus"> 
										<li><a href="#">LOREM IPSUM DOLOR</a></li>
										<li><a href="#">LOREM IPSUM</a></li>
										<li><a href="#">LOREM IPSUM DOLOR</a></li>
										<li><a href="#">LOREM IPSUM</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-5"> 
							<div class="contact-footer"> 
								<h4>Contact Us Directly At:</h4>
								<span><img src="<?php echo get_template_directory_uri();  ?>/images/phone-footer.png" alt=""></span>
								<span>+1 (920) 268-8471</span>
							</div>
						</div>
					</div>
					<div class="row footer-bottom"> 
						<div class="col-md-7"> 
							<div class="row"> 
								<div class="col-lg-3 col-md-12"> 

								<?php $footer_logo =  get_field('footer_logo','options'); 
								if($footer_logo):  ?>
								<a href="<?php echo bloginfo('home'); ?>"><img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['title']; ?>" /></a>
							  	<?php endif; ?>
								</div>
								<div class="col-lg-3 col-md-12"> 
									<h2>Designed Ethically</h2>
								</div>
								<div class="col-lg-3 col-md-12"> 
									<h2>Developed For The Future</h2>
								</div>
								<div class="col-lg-3 col-md-12"> 
									<h2>Built To Be Human</h2>
								</div>
							</div>
						</div>
						<div class="col-md-5"> 
							<div class="footer-bottom-logo"> 
								<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/f-logo-01.png" alt=""></a>
								<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/f-logo-02.png" alt=""></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>




	<?php 

	$website_layout =  get_field('website_layout','options'); 

		if($website_layout == 'box'): ?>
		<div class="left-sidebar"> 

			<?php $left_area_text =  get_field('left_area_text','options'); 
			if($left_area_text):  ?>
				<p><?php echo $left_area_text; ?></p>
			<?php endif; ?>
		</div>
		<div class="right-sidebar">
			<?php 

		  	wp_nav_menu([
		  		'theme_location'	=> 'right-social-menu',
		  	]);

		  	 ?>
			
		</div>

	<?php endif; ?>

	
	 </div>
	 <div class="copyright-section"> 

		<p>21987 N. John Wayne Pkwy. STE #217 Maricopa, AZ 85139</p>
	 </div>


   
	
	<?php wp_footer(); ?>
		

      
    </body>
</html>
