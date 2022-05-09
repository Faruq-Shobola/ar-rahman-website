<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package duromedia
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function duromedia_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'duromedia_pingback_header' );


/**
 * Add a Project Custom Post 
 */
function projects_post_type() {
	$args = array(
		'labels'      => array(
		  'name'          => 'Projects',
		  'singular_name' => 'Project',
		),
		'public'      => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'projects' ),
		'supports' =>  array('title', 'editor', 'tag', 'thumbnail', 'custom-fields'),
		
	  );
	  register_post_type('projects', $args );
}
add_action('init', 'projects_post_type');

/**
 * Project Taxonomies 
*/
function projects_taxonomy() {
	$labels = array(
		'name'              => 'Project Category', 
		'singular_name'     => 'category',
		'search_items'      => __( 'Search project' ),
		'all_items'         => __( 'All project' ),
		'parent_item'       => __( 'Parent project' ),
		'parent_item_colon' => __( 'Parent project:' ),
		'edit_item'         => __( 'Edit project' ),
		'update_item'       => __( 'Update project' ),
		'add_new_item'      => __( 'Add category' ),
		'new_item_name'     => __( 'project Name' ),
		'menu_name'         => __( 'Category' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'projects' ],
	);
	register_taxonomy( 'projects', [ 'projects' ], $args );
}
add_action( 'init', 'projects_taxonomy' );


/**
 * Add a Team Custom Post 
 */
function Teams_post_type() {
	$args = array(
		'labels'      => array(
		  'name'          => 'Teams',
		  'singular_name' => 'Team',
		),
		'public'      => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'teams' ),
		'supports' =>  array('title', 'editor', 'tag', 'thumbnail'),
		
	  );
	  register_post_type('teams', $args );
}
add_action('init', 'teams_post_type');

/**
 * Add a Event Custom Post 
 */
function events_post_type() {
	$args = array(
		'labels'      => array(
		  'name'          => 'Events',
		  'singular_name' => 'Event',
		),
		'public'      => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'events' ),
		'supports' =>  array('title', 'editor', 'tag', 'thumbnail', 'custom-fields'),
		
	  );
	  register_post_type('events', $args );
}
add_action('init', 'events_post_type');

/**
 * Event Taxonomies 
*/
function events_taxonomy() {
	$labels = array(
		'name'              => 'Event Category', 
		'singular_name'     => 'category',
		'search_items'      => __( 'Search event' ),
		'all_items'         => __( 'All event' ),
		'parent_item'       => __( 'Parent event' ),
		'parent_item_colon' => __( 'Parent event:' ),
		'edit_item'         => __( 'Edit event' ),
		'update_item'       => __( 'Update event' ),
		'add_new_item'      => __( 'Add category' ),
		'new_item_name'     => __( 'event Name' ),
		'menu_name'         => __( 'Category' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'events' ],
	);
	register_taxonomy( 'events', [ 'events' ], $args );
}
add_action( 'init', 'events_taxonomy' );

//Register Sidebars 
function my_sidebars() {

	register_sidebar(
		array(
		  'name' => 'Footer sidebar 1',
		  'id' => 'footer-sidebar-1',
		  'before_title' => '<h1 class="text-2xl font-medium uppercase py-2">',
		  'after_title' => '</h1><div class="h-1 rounded-sm w-14 bg-secondary mb-2"></div>',
		)
	);

   register_sidebar(
		array(
		  'name' => 'Footer sidebar 2',
		  'id' => 'footer-sidebar-2',
		  'before_title' => '<h5 class="capitalize font-bold pb-2">',
		  'after_title' => '</h5>',
		)
	);
  
	register_sidebar(
	  array(
		'name' => 'Footer sidebar 3',
		'id' => 'footer-sidebar-3',
		'before_title' => '<h5 class="capitalize font-bold pb-2">',
		'after_title' => '</h5>',
	  )
	);
  
	register_sidebar(
	  array(
		'name' => 'Address',
		'id' => 'address',
		'before_title' => '<h5 class="capitalize font-bold pb-2">',
		'after_title' => '</h5>',
	  )
	);

	register_sidebar(
		array(
		  'name' => 'Phone Number',
		  'id' => 'phone-number',
		  'before_title' => '<h5 class="capitalize font-bold pb-2">',
		  'after_title' => '</h5>',
		)
	  );

	  register_sidebar(
		array(
		  'name' => 'Mail',
		  'id' => 'mail',
		  'before_title' => '<h5 class="capitalize font-bold pb-2">',
		  'after_title' => '</h5>',
		)
	  );

	register_sidebar(
		array(
		  'name' => 'Blog sidebar',
		  'id' => 'blog-sidebar',
		  'before_title' => '<h5 class="capitalize font-bold pb-2">',
		  'after_title' => '</h5>',
		)
	  );

  
  }
  add_action('widgets_init','my_sidebars');