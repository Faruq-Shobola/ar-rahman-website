<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package duromedia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="topbar w-full top-0 z-10 bg-white">
		<div>
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<!-- <h1><a href="<?//php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?//php bloginfo( 'name' ); ?></a></h1> -->
				<?php
			else :
				?>
				<!-- <p><a href="<?//php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?//php bloginfo( 'name' ); ?></a></p> -->
				<?php
			endif;
			$duromedia_description = get_bloginfo( 'description', 'display' );
			if ( $duromedia_description || is_customize_preview() ) :
				?>
				<!-- <p><?//php echo $duromedia_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p> -->
			<?php endif; ?>
		</div>
		<section class="flex flex-col lg:flex-row lg:justify-between relative justify-center items-between max-w-6xl gap-6 mx-auto p-4">
			<div class="flex justify-between items-center">
				<div class="logo h-auto w-40">
					<a href="<?php $uploads = wp_upload_dir();?>">
						<?php 
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
						?>
					</a>
				</div>
				
			</div>
            
			<!--------- FULL SIZE MENU --------->
			<?php
			wp_nav_menu(
				array(
				'theme_location' => 'menu-1',
				'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
				'menu_class'        => "flex flex-col lg:flex-row py-5 lg:py-0 lg:items-center gap-4 lg:gap-5 text-center md:max-w-lg lg:max-w-full mx-auto", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
				'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
				'container_class'   => "menu-container menu bg-white hidden lg:flex absolute fixed",
				'link_before'       => '<li class="font-semibold capitalize cursor-pointer">', // (string) Text before the link text.
				'link_after'        => '</li>', // (string) Text after the link text.
				'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
				// 'theme_location'    => "top-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
				'item_spacing'      => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
				)
			);
			?>
			<!-- #site-navigation -->
		</section>

		
	</header><!-- #masthead -->
