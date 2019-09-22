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
		
	
	
		<?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
      <div class="header-top"> 
      	 <div class="container"> 
			<ul class="top-left-menu">
			  <li><img src="<?php echo get_template_directory_uri();  ?>/images/phone.png" alt=""><a href="#">(920-268-8471)</a></li>
			  <li><img src="<?php echo get_template_directory_uri();  ?>/images/career.png" alt=""><a href="#">CAREERS</a></li>
			  <li><img src="<?php echo get_template_directory_uri();  ?>/images/write.png" alt=""><a href="#">WRITE FOR US</a></li>
			</ul>
			<ul class="top-right-menu">
			  <li><img src="<?php echo get_template_directory_uri();  ?>/images/account.png" alt=""><a href="#">MY ACCOUNT</a></li>
			  <li><img src="<?php echo get_template_directory_uri();  ?>/images/register.png" alt=""><a href="#">REGISTER</a></li>
			  <li><img src="<?php echo get_template_directory_uri();  ?>/images/upload.png" alt=""><a href="#">UPLOAD</a></li>
			</ul>
      	</div>
      </div>
      <header>  
		<nav class="navbar navbar-expand-lg navbar-light bg-light header-top-fixed">
		  <div class="container"> 
			<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/logo.png" alt="" /></a>
		  
			<div class="toogle-button"> 
				<a class="navbar-toggler" href="#navbarSupportedContent" id="toggle" data-toggle="collapse" ><span></span></a>
			</div>
			
			
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
			  <li class="current-menu-item"><a href="#">Home</a></li>
			  <li><a href="#">Services</a></li>
			  <li><a href="#">Themes</a></li>
			  <li><a href="#">News</a></li>
			  <li><a href="#">Avout Unvetica</a></li>
			  <li><a href="#">Contact Us</a></li>
			</ul>
			
			
			<div class="right-contact"> 
				<a href="tel:+6494461709">
				<img src="<?php echo get_template_directory_uri();  ?>/images/contact-us.png" alt="">
				<div class="text-number"> 
					<span class="contact-text">CONTACT US</span>
					<span class="contact-number">8-100-234-45-67</span>
				</div>
				</a>
			</div>
		  </div>
		  </div>
		</nav>
	   </header>
	

	 <div class="side-space">
		<div class="banner-area"> 
		  	<div class="banner-color"> 
				<div class="container"> 
					<div class="unvetica-logo"> 
						<img src="<?php echo get_template_directory_uri();  ?>/images/unvetica-logo.png" alt="">
					</div>
					<div class="row banner-content"> 
						<div class="col-lg-6 col-md-12"> 
							<div class="banner-text"> 
								<h2><span>un/vet’/i/ke | </span>verb, noun</h2>
								<h3>/ THE ACT OF DEVELOPING <br>
	  							 HUMAN SOLUTION</h3>
	  							 <h3>/ NOT HELVETICA</h3>

	  							 <a href="#">get started</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-12"> 
							<div class="banner-video">
									
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
									  src="<?php echo get_template_directory_uri();  ?>/http://www.youtube.com/embed/_6IO62oQfaU?enablejsapi=1"
									  frameborder="0"></iframe>
							      </div>
							      
							    </div>
							  </div>
							</div>
							</div>

							<div class="banner-indicator"> 
								<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/next1.png" alt=""></a>
								<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/next2.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
		   </div>
		</div>