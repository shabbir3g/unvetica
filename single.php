<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package unvetica
 */

get_header(); ?>

		<?php

			while(have_posts()): the_post();  ?>

	
			<div class="blog-cont-single-page"> 
					<div class="single-blog"> 
						<div class="blog-image"> 
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
						</div>
						<div class="blog-title">
							<h2><?php the_title(); ?></h2>
						</div>
					</div>
					<div class="meta-details"> 
							<span><?php the_time('M j'); ?></span>
							<span><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>

						</div>
						<div class="category-namesss"> 
							<?php the_category(' '); ?>
							
						</div>
					</div>
					<div class="blog-contentsss"> 
						<?php the_content(); ?>
					</div>
				</div>

	<?php endwhile; ?>

<?php get_footer();
