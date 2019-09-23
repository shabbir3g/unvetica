<?php
/**
 * Template name: Home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unvetica
 */

get_header(); ?>


<?php $about_section_background =  get_field('about_section_background'); ?>
<div class="about-section" style="background-image: url(<?php echo $about_section_background['url']; ?>);"> 
	<div class="banner-color"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-6"> 
					<div class="about-sec"> 
					
						<?php $about_left_content =  get_field('about_left_content'); 
						if($about_left_content): echo $about_left_content; ?>
						
						<?php endif; ?>

					</div>
				</div>
				<div class="col-md-6"> 
					<div class="about-sec bottoms-ab"> 
						<?php $about_right_content =  get_field('about_right_content'); 
						if($about_right_content): echo $about_right_content; ?>
						
						<?php endif; ?>
						

					</div>

				</div>


			</div>
		</div>
	</div>
	</div>


	<?php $service_section_background =  get_field('service_section_background'); ?>
	<div class="service-section" style="background-image: url(<?php echo $service_section_background['url']; ?>);"> 
	<div class="banner-color"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-lg-5 col-md-12"> 
					<div class="service-sec"> 
						<?php $ser_left_content =  get_field('ser_left_content'); 
						if($ser_left_content): echo $ser_left_content; ?>
						
						<?php endif; ?>
						
					</div>
				</div>
				<div class="col-lg-7 col-md-12"> 
					<div class="services-items">
						<?php $ser_right_content =  get_field('ser_right_content'); 
						if($ser_right_content): echo $ser_right_content; ?>
						
						<?php endif; ?>


					</div>
				</div>


			</div>
		</div>
	</div>
	</div>


	<?php $dmn_section_background =  get_field('dmn_section_background'); ?>
	<div class="domain-chekcer-section" style="background-image: url(<?php echo $dmn_section_background['url']; ?>);"> 
	<div class="banner-color"> 
		<div class="domain-checker-top"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-5"> 
						<!-- Button trigger modal  -->


					
					<?php $dm_video_thumbnail =  get_field('dm_video_thumbnail'); ?>
						<div class="domain-video" style="background-image: url(<?php echo $dm_video_thumbnail['url']; ?>);">
						<a data-toggle="modal" href="#exampleModalbottom">
						  <img src="<?php echo get_template_directory_uri();  ?>/images/video.png" alt="">
						  Play Now
						</a>

						<!-- Modal -->
						<div class="modal fade bd-example-modal-lg" id="exampleModalbottom" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
						    <div class="modal-content">
						        
						   
						      <div class="modal-body">
								
							<?php $dmn_video_url =  get_field('dmn_video_url'); 

								if($dmn_video_url):  echo $dmn_video_url; ?> 
				

							<?php endif; ?>



						      </div>
						      
						    </div>
						  </div>
						</div>
					 </div>



					</div>
					<div class="col-md-7"> 
						<div class="do-right-text"> 

						<?php $dmn_right_content =  get_field('dmn_right_content'); 

								if($dmn_right_content):  echo $dmn_right_content; ?> 
				

							<?php endif; ?>


							

						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="domain-checker-bottom">
			<div class="container"> 
				<div class="row checker-domain-row"> 
					<div class="col-md-4"> 

						<?php $dmn_left_content =  get_field('dmn_left_content'); 

								if($dmn_left_content):  echo $dmn_left_content; ?> 
				

							<?php endif; ?>


						
					</div>
					<div class="col-md-8"> 
						<form  action="" method="POST" class="domain-check"> 
							<input name="domain_name" type="text" placeholder="your blog name">
							<span>.unvetica.com</span>
							<input name="suffix" value=".unvetica.com" type="hidden">
							<input type="submit" name="check" value="check availability">
						</form>
						
						<?php

							if(isset($_POST['check'])) {
							 
							 if (!empty($_POST['domain_name'])){
							 $name_domain = trim($_POST['domain_name']).$_POST['suffix'];
							 $response = dns_get_record($name_domain, DNS_MX);  //@dns_get_record($name_domain, DNS_ALL);
							 if(empty($response)){
							 echo "<p style='color:green; background: white; padding: 10px;' >Domain $name_domain is available.</p>";
							 
							 }else{
							 echo "<p style='color:red; background: white; padding: 10px; '>Domain $name_domain has taken.</p>";
							 }
							 }
							 else {
							 echo "<p style='color:red; background: white; padding: 10px;'>Error: Domain name can not be left empty.</p>";
							 }
							} 





							?>


						
					</div>
				</div>
			</div>

		</div>
	</div>
	</div>
	<div class="single-blog-section"> 
	<div class="banner-color"> 
		<div class="container"> 
			<div class="row single-counter"> 
				

				<?php $counter_content =  get_field('counter_content'); 

					if($counter_content):  echo $counter_content; ?> 
		

				<?php endif; ?>

				


			</div>
			<div class="row single-blog-area"> 
				<div class="col-lg-7 col-md-12">
				<?php $single_blog_image =  get_field('single_blog_image'); 

					if($single_blog_image): ?> 
					<div class="single-image-blog">
					  
						<img src="<?php  echo $single_blog_image['url'];  ?>" alt="<?php  echo $single_blog_image['title'];  ?>">
						<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/read-more.png" alt=""></a>
					
					</div>
					<?php endif; ?>
				</div>
				<div class="col-lg-5 col-md-12"> 
					<div class="do-right-text"> 

						
				<?php $single_blog_content =  get_field('single_blog_content'); 

					if($single_blog_content):  echo $single_blog_content; ?> 
		

				<?php endif; ?>

							

						</div>
				</div>
			</div>
			



			<div class="blog-posts">

			 <?php $blog_slider_top_content =  get_field('blog_slider_top_content'); 

					if($blog_slider_top_content):  echo $blog_slider_top_content; ?> 
		

				
				
					
					<div class="owl-carousel owl-theme">


					<?php
						
					$homeblog = new WP_Query([
						'post_type'		=> 'POST',
					]);



						while($homeblog->have_posts()): $homeblog->the_post();  ?>
				    <div class="item"> 
						<div class="blog-cont"> 
							<div class="single-blog"> 
								<div class="blog-image"> 
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
								</div>
								<div class="image-button"> 
									<a href="#">Lorem Ipsum</a>
							<h2><?php echo wp_trim_words(get_the_title(), 5, false); ?></h2>
								</div>
							</div>
							<div class="meta-details"> 
								<div class="p-pic">

								<?php echo get_avatar( get_the_author_meta('user_email'), $size = '50'); ?>
							
								</div>
								<div class="author-name">
									<h2><?php the_author() ?></h2>
							<span><?php the_time('M j'); ?></span>
							<span><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
								</div>
								<div class="category-namesss"> 
							<?php the_category(' '); ?>
							
						</div>
								<div class="download-icon"> 
									<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/download.png" alt=""></a>
								</div>
							</div>
							<div class="blog-content"> 
								<p><?php echo wp_trim_words(get_the_content(), 25, '</p>
								<a href="'.get_the_permalink().'">Read More</a>'); ?>
							</div>
						</div>
				    </div>
				<?php endwhile; ?>


				   
					

					</div>

				<?php endif; ?>


				</div>


		</div>
	</div>
	</div>

	<?php 



	$page_id     = get_queried_object_id();

	$signup_section_background =  get_field('signup_section_background', $page_id); ?>
	<div class="signup-section" style="background-image: url(<?php echo $signup_section_background['url']; ?>);"> 
	<div class="banner-color"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-lg-6 col-md-12"> 
					<div class="signup-text"> 
					

					<?php $signup_left_content =  get_field('signup_left_content',$page_id); 

						if($signup_left_content):  echo $signup_left_content; ?> 
		

					<?php endif; ?>

					


					</div>
				</div>
				<div class="col-lg-6 col-md-12"> 
					<div class="signup-form"> 
						
					<?php $signup_form =  get_field('signup_form',$page_id); 

						if($signup_form):  echo $signup_form; ?> 
		

					<?php endif; ?>
							
							
					</div>

				</div>


			</div>
		</div>
	</div>
</div>

<?php get_footer();