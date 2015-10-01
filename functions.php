<?php
/**
 * blogalexey functions and definitions
 *
 * @package blogalexey
 */

if ( ! function_exists( 'blogalexey_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blogalexey_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on blogalexey, use a find and replace
	 * to change 'blogalexey' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'blogalexey', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'blogalexey' ),
	) );

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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'blogalexey_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // blogalexey_setup
add_action( 'after_setup_theme', 'blogalexey_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blogalexey_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blogalexey_content_width', 640 );
}
add_action( 'after_setup_theme', 'blogalexey_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function blogalexey_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blogalexey' ),
		'id'            => 'sidebar-1',
		'description'   => 'Боковой сайдбар',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$right_column = array(
			'name'          => __( 'right_sidebar', 'theme_text_domain' ),
			'id'            => 'unique-sidebar-id',
			'description'   => '',
			'class'         => '',
			'before_widget' => '<li id="%1" class="widget %2">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>'
		);
	
		register_sidebar( $right_column );
	

}
add_action( 'widgets_init', 'blogalexey_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blogalexey_scripts() {
	wp_enqueue_style( 'blogalexey-style', get_stylesheet_uri() );

	wp_enqueue_script( 'blogalexey-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'blogalexey-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blogalexey_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



# Breadcrumb
function the_breadcrumb() {
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home').'">';
		echo 'Главная';
		echo "</a> <span class='divider'>/</span></li> ";
		if (is_category() || is_single()) {
			echo "<li>";
			single_cat_title();
			echo "</li>";
			if (is_single()) {
			the_category(', ');
				echo " <span class='divider'>/</span><li> ";
				the_title();
				echo "</li>";
			}
		} elseif (is_page()) {
			echo "<li>";
			echo the_title();
			echo "</li>";
		}
		  elseif (is_tag()) {
			echo 'Записи с меткой"'; 
			single_tag_title();
			echo '"'; }
		elseif (is_day()) {echo "Архив за"; the_time('  jS F Y');}
		elseif (is_month()) {echo "Архив "; the_time(' F  Y');}
		elseif (is_year()) {echo "Архив за"; the_time(' Y');}
		elseif (is_author()) {echo "Архив автора";}
		elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "Àðõèâ áëîãà";}
		elseif (is_search()) {echo "Результаты поиска";}
			elseif (is_404()) {	echo '404 - Страница не найдена';}
	}
}

function getPostViews($postID){
	 $count_key = 'post_views_count';
	 $count = get_post_meta($postID, $count_key, true);
		 if($count==''){
			 delete_post_meta($postID, $count_key);
			 add_post_meta($postID, $count_key, '0');
			 return "0 просмотров";
	 	}
			 return ' Просмотров: '.$count;
	 }
	 
		 function setPostViews($postID) {
			 $count_key = 'post_views_count';
				 $count = get_post_meta($postID, $count_key, true);
					 if($count==''){
						 $count = 0;
						 delete_post_meta($postID, $count_key);
						 add_post_meta($postID, $count_key, '0');
					 }else{
				 $count++;
			 update_post_meta($postID, $count_key, $count);
	 }
 }

 wp_deregister_script('jquery');
wp_register_script('jquery', includes_url('/js/jquery/jquery-1.8.2.min.js', __FILE__), false, '1.8.2');


