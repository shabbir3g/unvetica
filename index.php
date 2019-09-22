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

	

		
		<div class="about-section"> 
			<div class="banner-color"> 
				<div class="container"> 
					<div class="row"> 
						<div class="col-md-6"> 
							<div class="about-sec"> 
								<p>By thinking globally, we’re able to curate a powerful team without compromise or regard for borders. This has allowed us to hire the top designers, developers, engineers, and managers to deliver the very best human solutions.</p>

								<a href="#">more about us</a>
							</div>
						</div>
						<div class="col-md-6"> 
							<div class="about-sec bottoms-ab"> 
								<h5>lorem ipsum dolor sit</h5>
								<h2>INTELLIGENCE <br>
								WITHOUT BORDERS</h2>
							</div>

						</div>


					</div>
				</div>
			</div>
		</div>
		

		<div class="service-section"> 
			<div class="banner-color"> 
				<div class="container"> 
					<div class="row"> 
						<div class="col-lg-5 col-md-12"> 
							<div class="service-sec"> 
								<h5>lorem ipsum dolor sit</h5>
								<h2>WE DEVELOP <br>
								HUMAN SOLUTIONS</h2>
								<h4>From idea to implementation  We’re here to help</h4>
								<p>We are born problem solvers – From Branding and Logistics to Web Development, and Design – launching human-friendly solutions is in our DNA</p>
							</div>
						</div>
						<div class="col-lg-7 col-md-12"> 
							<div class="services-items">
								<div class="row"> 
									<div class="col-md-6"> 
										<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/advanced-business-strategy.png" alt=""></a>
										<a href="#"><h2>ADVANCED BUSINESS STRATEGY </h2></a>
										<p>We have over 12 years of experience and the expertise to help you plan and develop a winning strategy for your next project. We’ve successfully implemented shipping & logistics for online product purchases, aided in coordinating large events, and developed workflow strategies for Fortune 500 companies.  </p>
									</div>
									<div class="col-md-6"> 
										<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/focused-marketing.png" alt=""></a>
										<a href="#"><h2>FOCUSED MARKETING  </h2></a>
										<p>We have over 12 years of experience and the expertise to help you plan and develop a winning strategy for your next project. We’ve successfully implemented shipping & logistics for online product purchases, aided in coordinating large events, and developed workflow strategies for Fortune 500 companies.  </p>
									</div>
								</div>
								<div class="row"> 
									<div class="col-md-6"> 
										<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/technologically.png" alt=""></a>
										<a href="#"><h2>TECHNOLOGICALLY ADVANCED  </h2></a>
										<p>We have over 12 years of experience and the expertise to help you plan and develop a winning strategy for your next project. We’ve successfully implemented shipping & logistics for online product purchases, aided in coordinating large events, and developed workflow strategies for Fortune 500 companies.  </p>
									</div>
									<div class="col-md-6"> 
										<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/totally-human.png" alt=""></a>
										<a href="#"><h2>TOTALLY HUMAN</h2></a>
										<p>We have over 12 years of experience and the expertise to help you plan and develop a winning strategy for your next project. We’ve successfully implemented shipping & logistics for online product purchases, aided in coordinating large events, and developed workflow strategies for Fortune 500 companies.  </p>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
		<div class="domain-chekcer-section"> 
			<div class="banner-color"> 
				<div class="domain-checker-top"> 
					<div class="container"> 
						<div class="row"> 
							<div class="col-md-5"> 
								<!-- Button trigger modal  -->
								<div class="domain-video">
								<a data-toggle="modal" href="#exampleModalbottom">
								  <img src="<?php echo get_template_directory_uri();  ?>/images/video.png" alt="">
								  Play Now
								</a>

								<!-- Modal -->
								<div class="modal fade bd-example-modal-lg" id="exampleModalbottom" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
							</div>
							<div class="col-md-7"> 
								<div class="do-right-text"> 
									<h5>lorem ipsum dolor sit</h5>
									<h2>lorem ipsum</h2>
									<h4>From mess to happiness – take a peek into what we’re up to and how</h4>
								<p>We love to share our findings when working with clients or when solving problems. Our opinion is that knowledge should be shared, so we do. We don’t believe in ‘tribal knowledge’; as we learn new practices we share them immediately. Even if you’re not our client – we believe in helping others gain knowledge. Think of it as our way of paying-it-forward.  </p>
								<a href="#">LEARN MORE</a>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="domain-checker-bottom">
					<div class="container"> 
						<div class="row checker-domain-row"> 
							<div class="col-md-4"> 
								<h5>lorem ipsum dolor sit</h5>
								<h2>Check For <br> Available Domain</h2>
							</div>
							<div class="col-md-8"> 
								<form action="" class="domain-check"> 
									<input type="text" placeholder="your blog name">
									<span>.unvetica.com</span>
									<input type="submit" value="check availability">
								</form>
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
						<div class="col-md-3"> 
							<img src="<?php echo get_template_directory_uri();  ?>/images/1308.png" alt="">
							<h2>cups of coffee</h2>
						</div>
						<div class="col-md-3"> 
							<img src="<?php echo get_template_directory_uri();  ?>/images/128k.png" alt="">
							<h2>lines of code</h2>
						</div>
						<div class="col-md-3"> 
							<img src="<?php echo get_template_directory_uri();  ?>/images/998.png" alt="">
							<h2>system uptime</h2>
						</div>
						<div class="col-md-3"> 
							<img src="<?php echo get_template_directory_uri();  ?>/images/12.png" alt="">
							<h2>years of experience</h2>
						</div>

					</div>
					<div class="row single-blog-area"> 
						<div class="col-lg-7 col-md-12"> 
							<div class="single-image-blog"> 
								<img src="<?php echo get_template_directory_uri();  ?>/images/blog-single.png" alt="">
								<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/read-more.png" alt=""></a>
							</div>
						</div>
						<div class="col-lg-5 col-md-12"> 
							<div class="do-right-text"> 
									<h5>lorem ipsum dolor sit</h5>
									<h2>READ OUR MINDS</h2>
									<h4>From mess to happiness – <br>take a peek into what we’re up to and how</h4>
								<p>We love to share our findings when working with clients or when solving problems. Our opinion is that knowledge should be shared, so we do. We don’t believe in ‘tribal knowledge’; as we learn new practices we share them immediately. Even if you’re not our client – we believe in helping others gain knowledge. Think of it as our way of paying-it-forward.  </p>

								</div>
						</div>
					</div>
					



					<div class="blog-posts"> 
						<h1>blog posts</h1>
						<div class="top-blog-part"> 
							<div class="recent-blog"> 
								<h2>recent posts</h2>
							</div>
							<div class="show-all"> 
								<a href="#">show all</a>
							</div>
						</div>
							
							<div class="owl-carousel owl-theme">
						    <div class="item"> 
								<div class="blog-cont"> 
									<div class="single-blog"> 
										<div class="blog-image"> 
											<img src="<?php echo get_template_directory_uri();  ?>/images/blog-01.png" alt="">
										</div>
										<div class="image-button"> 
											<a href="#">Lorem Ipsum</a>
											<h2>lorem ipsum dolor sit amet</h2>
										</div>
									</div>
									<div class="meta-details"> 
										<div class="p-pic">
											<img src="<?php echo get_template_directory_uri();  ?>/images/picture.jpg" alt="">
										</div>
										<div class="author-name">
											<h2>Darius jameson </h2>
											<span>Jul 20 </span>
											<span>3 Days Ago</span>
										</div>
										<div class="category"> 
											<a href="#">Category</a>
										</div>
										<div class="download-icon"> 
											<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/download.png" alt=""></a>
										</div>
									</div>
									<div class="blog-content"> 
										<p>Beginning to learn Puppet Enterprise What exactly is Puppet Enterprise, and how can I use it? One Beginning to learn Puppet Beginning to learn Puppet Enterprise What exactly is  </p>
										<a href="#">Read More</a>
									</div>
								</div>
						    </div>
						   <div class="item"> 
								<div class="blog-cont"> 
									<div class="single-blog"> 
										<div class="blog-image"> 
											<img src="<?php echo get_template_directory_uri();  ?>/images/blog-01.png" alt="">
										</div>
										<div class="image-button"> 
											<a href="#">Lorem Ipsum</a>
											<h2>lorem ipsum dolor sit amet</h2>
										</div>
									</div>
									<div class="meta-details"> 
										<div class="p-pic">
											<img src="<?php echo get_template_directory_uri();  ?>/images/picture.jpg" alt="">
										</div>
										<div class="author-name">
											<h2>Darius jameson </h2>
											<span>Jul 20 </span>
											<span>3 Days Ago</span>
										</div>
										<div class="category"> 
											<a href="#">Category</a>
										</div>
										<div class="download-icon"> 
											<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/download.png" alt=""></a>
										</div>
									</div>
									<div class="blog-content"> 
										<p>Beginning to learn Puppet Enterprise What exactly is Puppet Enterprise, and how can I use it? One Beginning to learn Puppet Beginning to learn Puppet Enterprise What exactly is  </p>
										<a href="#">Read More</a>
									</div>
								</div>
						    </div>
						    <div class="item"> 
								<div class="blog-cont"> 
									<div class="single-blog"> 
										<div class="blog-image"> 
											<img src="<?php echo get_template_directory_uri();  ?>/images/blog-01.png" alt="">
										</div>
										<div class="image-button"> 
											<a href="#">Lorem Ipsum</a>
											<h2>lorem ipsum dolor sit amet</h2>
										</div>
									</div>
									<div class="meta-details"> 
										<div class="p-pic">
											<img src="<?php echo get_template_directory_uri();  ?>/images/picture.jpg" alt="">
										</div>
										<div class="author-name">
											<h2>Darius jameson </h2>
											<span>Jul 20 </span>
											<span>3 Days Ago</span>
										</div>
										<div class="category"> 
											<a href="#">Category</a>
										</div>
										<div class="download-icon"> 
											<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/download.png" alt=""></a>
										</div>
									</div>
									<div class="blog-content"> 
										<p>Beginning to learn Puppet Enterprise What exactly is Puppet Enterprise, and how can I use it? One Beginning to learn Puppet Beginning to learn Puppet Enterprise What exactly is  </p>
										<a href="#">Read More</a>
									</div>
								</div>
						    </div>
						   <<div class="item"> 
								<div class="blog-cont"> 
									<div class="single-blog"> 
										<div class="blog-image"> 
											<img src="<?php echo get_template_directory_uri();  ?>/images/blog-01.png" alt="">
										</div>
										<div class="image-button"> 
											<a href="#">Lorem Ipsum</a>
											<h2>lorem ipsum dolor sit amet</h2>
										</div>
									</div>
									<div class="meta-details"> 
										<div class="p-pic">
											<img src="<?php echo get_template_directory_uri();  ?>/images/picture.jpg" alt="">
										</div>
										<div class="author-name">
											<h2>Darius jameson </h2>
											<span>Jul 20 </span>
											<span>3 Days Ago</span>
										</div>
										<div class="category"> 
											<a href="#">Category</a>
										</div>
										<div class="download-icon"> 
											<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/download.png" alt=""></a>
										</div>
									</div>
									<div class="blog-content"> 
										<p>Beginning to learn Puppet Enterprise What exactly is Puppet Enterprise, and how can I use it? One Beginning to learn Puppet Beginning to learn Puppet Enterprise What exactly is  </p>
										<a href="#">Read More</a>
									</div>
								</div>
						    </div>
							

							</div>
						</div>


				</div>
			</div>
		</div>
		<div class="signup-section"> 
			<div class="banner-color"> 
				<div class="container"> 
					<div class="row"> 
						<div class="col-lg-6 col-md-12"> 
							<div class="signup-text"> 
								<h5>SIGN UP </h5>
								<h2>TAKE YOUR COMPANY <br>TO THE NEXT LEVEL</h2>
								<p>Our main goal is to help educate business owners and individuals on how to have the best business strategy or commit to best business practices. Enter your E-Mail address for a monthly newsletter. We provide simple tips, tricks, and strategies to help guide your business to greater success.  </p>
							</div>
						</div>
						<div class="col-lg-6 col-md-12"> 
							<div class="signup-form"> 
								<form action=""> 
									<input type="text" placeholder="Name">
									<input type="email" placeholder="Email Address">
									<input type="submit" value="submit">
									
								</form>
							</div>

						</div>


					</div>
				</div>
			</div>
		</div>
	

<?php get_footer();
