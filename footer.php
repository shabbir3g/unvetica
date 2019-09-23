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
					<?php $footer_top_text  = get_field('footer_top_text','options'); 
					if($footer_top_text): echo $footer_top_text; ?>
					
					<?php endif; ?>
					<div class="row footer-middle"> 
						<div class="col-md-7"> 
							<div class="row"> 
								<div class="col-md-3"> 
									<ul class="social-icons"> 
									<?php $social_icons  = get_field('social_icons','options');  ?>

									<?php $facebook = $social_icons['facebook']; 
									if($facebook): ?>
										<li><a href="<?php echo esc_url($facebook); ?>"><img src="<?php echo get_template_directory_uri();  ?>/images/facebook.png" alt=""></a></li>
									<?php endif; ?>

									<?php $instagram = $social_icons['instagram']; 
									if($instagram): ?>
										<li><a href="<?php echo esc_url($instagram); ?>"><img src="<?php echo get_template_directory_uri();  ?>/images/instagram.png" alt=""></a></li>
									<?php endif; ?>

									<?php $twitter = $social_icons['twitter']; 
									if($twitter): ?>
										<li><a href="<?php echo esc_url($twitter); ?>"><img src="<?php echo get_template_directory_uri();  ?>/images/twitter.png" alt=""></a></li>
									<?php endif; ?>

									<?php $pinterest = $social_icons['pinterest']; 
									if($pinterest): ?>
										<li><a href="<?php echo esc_url($pinterest); ?>"><img src="<?php echo get_template_directory_uri();  ?>/images/pinterest.png" alt=""></a></li>
									<?php endif; ?>
									</ul>
								</div>

								<?php $footer_middle_menu  = get_field('footer_middle_menu','options'); 
								if($footer_middle_menu): echo $footer_middle_menu; ?>
								
								<?php endif; ?>


							</div>
						</div>
						<div class="col-md-5">
							<?php $footer_contact  = get_field('footer_contact','options'); 
								if($footer_contact): ?>
							<div class="contact-footer"> 
								<h4>Contact Us Directly At:</h4>
								<span><img src="<?php echo get_template_directory_uri();  ?>/images/phone-footer.png" alt=""></span>
								<span><?php  echo $footer_contact; ?></span>
							</div>
							<?php endif; ?>
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
								

								<?php $footer_bottom_text  = get_field('footer_bottom_text','options'); 
								if($footer_bottom_text): echo $footer_bottom_text; ?>
								
								<?php endif; ?>
								
								


							</div>
						</div>
						<div class="col-md-5"> 
							<div class="footer-bottom-logo"> 

								<?php $two_logo  = get_field('two_logo','options'); 
								if($two_logo): echo $two_logo; ?>
								
								<?php endif; ?>
								
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
	 <?php $copy_right_text  = get_field('copy_right_text','options'); 
		if($copy_right_text):?>
								
								
	 <div class="copyright-section"> 

		<p><?php  echo $copy_right_text;  ?></p>
	 </div>
<?php endif; ?>

   
	
	<?php wp_footer(); ?>
		

      
    </body>
</html>
