<?php
/**
 * The main template file
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

<div class="blog-page">
<div class="banner-color"> 
	<div class="container"> 
		<div class="row">


			<?php

			if(have_posts()): 
			while(have_posts()): the_post();  ?>

			<div class="col-lg-4 col-md-6 col-sm-12">
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
			<?php  endwhile; ?>

		<?php else: ?>

		<h2 style="color: #fff; ">No Posts Found</h2>

		<?php	endif; ?>


			

		</div>
	</div>	
</div>
</div>

<?php get_footer();
