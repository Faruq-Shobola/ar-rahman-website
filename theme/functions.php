<?php
/**
 * duromedia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package duromedia
 */

if ( ! defined( 'duromedia_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'duromedia_VERSION', '1.0.0' );
}

if ( ! function_exists( 'duromedia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function duromedia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on duromedia, use a find and replace
		 * to change 'duromedia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'duromedia', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'duromedia' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'duromedia_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);


		/**
		 * Add responsive embeds and block editor styles.
		 */
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style-editor.css' );
	}
endif;
add_action( 'after_setup_theme', 'duromedia_setup' );

// ********* //
function customizer_setting($wp_customize) {
	// add a setting 
		$wp_customize->add_setting('second_logo');
	// Add a control to upload the hover logo
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'second_logo', 
		array(
			'label' => 'Upload Second Logo',
			'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
			'settings' => 'second_logo',
			'priority' => 8 // show it just below the custom-logo
		)
	));
}
	
add_action('customize_register', 'customizer_setting');
// ********* //

// ********* //
if (!function_exists('themeprefix_excerpt_length')) {
    function themeprefix_excerpt_length($length) {
        return 25; // change the number here according to your requirement
    }
}
add_filter('excerpt_length', 'themeprefix_excerpt_length');
// ********* //



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function duromedia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'duromedia_content_width', 640 );
}
add_action( 'after_setup_theme', 'duromedia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function duromedia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'duromedia' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'duromedia' ),
			'before_widget' => '<section id="%1$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'duromedia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function duromedia_scripts() {
	wp_enqueue_style( 'duromedia-style', get_stylesheet_uri(), array(), duromedia_VERSION );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
	wp_enqueue_script( 'duromedia-js2', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), false, 'all');
	wp_enqueue_script( 'duromedia-js', get_template_directory_uri() . '/js/main.js', array(), false, 'all');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'duromedia_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
