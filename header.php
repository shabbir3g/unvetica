<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unvetica
 */

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		
		<?php $favicon_upload =  get_field('favicon_upload','options'); 
		if($favicon_upload):  ?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon_upload['url']; ?>" />
		<?php endif; ?>
	
		<?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
      <div class="header-top"> 
      	 <div class="container"> 
			<?php 

		  	wp_nav_menu([
		  		'theme_location'	=> 'left-menu',
		  		'menu_class'		=> 'top-left-menu',
		  		'fallback_cb'		=> 'left_menu',
		  		'container'			=> false,
		  	]);



		  	wp_nav_menu([
		  		'theme_location'	=> 'right-menu',
		  		'menu_class'		=> 'top-right-menu',
		  		'fallback_cb'		=> 'right_menu',
		  		'container'			=> false,
		  	]);

		  	 ?>

      	</div>
      </div>
      <header>  
		<nav class="navbar navbar-expand-lg navbar-light bg-light header-top-fixed">
		  <div class="container"> 

		  	<?php $header_logo =  get_field('header_logo','options'); 
			if($header_logo):  ?>
			<a class="navbar-brand" href="<?php echo bloginfo('home'); ?>"><img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['title']; ?>" /></a>
		  	<?php endif; ?>
			<div class="toogle-button"> 
				<a class="navbar-toggler" href="#navbarSupportedContent" id="toggle" data-toggle="collapse" ><span></span></a>
			</div>
			
			
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  	<?php 

		  	wp_nav_menu([
		  		'theme_location'	=> 'main-menu',
		  		'menu_class'		=> 'navbar-nav',
		  		'fallback_cb'		=> 'default_menu',
		  	]);

		  	 ?>
			
			
			<div class="right-contact"> 

				<?php $contact_number =  get_field('contact_number','options'); 
				if($contact_number):  ?>
				<a href="tel:+<?php echo $contact_number ?>">
				<img src="<?php echo get_template_directory_uri();  ?>/images/contact-us.png" alt="">
				<div class="text-number"> 
					<span class="contact-text">CONTACT US</span>
					<span class="contact-number"><?php echo $contact_number ?></span>
				</div>
				</a>
				<?php endif; ?>

			</div>
		  </div>
		  </div>
		</nav>
	   </header>
	
	<?php $website_layout =  get_field('website_layout','options'); 




	if($website_layout == 'full'): 	  ?>
	 <div>
	 <?php endif; 

	 	if($website_layout == 'box'): 
	 	?>
	 <div class="side-space">
	 <?php endif; ?>
	 <?php $banner_background =  get_field('banner_background','options'); ?>
		<div class="banner-area" style="background-image: url(<?php echo $banner_background['url']; ?>);"> 
		  	<div class="banner-color"> 
				<div class="container"> 
					<div class="unvetica-logo"> 
						<?php $banner_logo =  get_field('banner_logo','options'); 
						if($banner_logo): ?>
						<img src="<?php echo $banner_logo['url']; ?>" alt="<?php echo $banner_logo['title']; ?>">
						 <?php endif; ?>
					</div>
					<div class="row banner-content"> 
						<div class="col-lg-6 col-md-12"> 
							<div class="banner-text"> 
								<?php $banner_left_content =  get_field('banner_left_content','options'); 
								if($banner_left_content): echo $banner_left_content; ?>


							
	  							<?php endif; ?>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
						<?php $video_thumbnail =  get_field('video_thumbnail','options'); 
							if($video_thumbnail): ?> 
							<div class="banner-video" style="background-image: url(<?php echo $video_thumbnail['url']; ?>);">
									
							<!-- Button trigger modal  -->
							<a data-toggle="modal" href="#exampleModalCenter">
							  <img src="<?php echo get_template_directory_uri();  ?>/images/video.png" alt="">
							  Play Now
							</a>

							<!-- Modal -->
							<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
							    <div class="modal-content">
							        
							   
							      <div class="modal-body">



									
							       <iframe id="player" type="text/html" width="100%" height="390"
									  src="http://www.youtube.com/embed/_6IO62oQfaU?enablejsapi=1"
									  frameborder="0"></iframe>
							      </div>
							      
							    </div>
							  </div>
							</div>
							</div>
							<?php endif; ?>
							<div class="banner-indicator"> 
								<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/next1.png" alt=""></a>
								<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/next2.png" alt=""></a>

								<?php $video_banner =  get_field('video_banner','options'); 
										 ?> 

										 <h2>hello<?php echo wp_oembed_get($video_banner);  ?></h2>
							</div>
						</div>
					</div>
				</div>
		   </div>
		</div>