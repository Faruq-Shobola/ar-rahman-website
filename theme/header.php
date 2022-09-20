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

<body <?php body_class(); ?> class="">
<?php wp_body_open(); ?>
	<div class="min-h-screen flex flex-col">

	<section class="header topbar absolute z-10 w-full px-4">

		<header class="max-w-6xl mx-auto flex items-center h-20 justify-center">
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
			<section class="w-full flex items-center justify-between">
				<div class="w-full lg:w-1/12 h-20 flex items-center justify-between">
					<div class="logo h-auto w-14">
						<a href="<?php $uploads = wp_upload_dir();?>">
							<?php 
							if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							}
							?>
						</a>
					</div>
					
					<div class="flex lg:hidden" onclick="toggleNav()">
						<span class="flex justify-center items-center h-10 w-10 rounded-full ">
							<i id="hamburger" class="fas fa-bars text-white text-2xl "></i>
						</span>
					</div>
				</div>
				
				<!--------- FULL SIZE MENU --------->
				<div class="menu hidden gap-y-20 lg:flex lg:flex-row lg:justify-end px-5 lg:px-0 bg-green-light lg:bg-transparent absolute lg:static top-0 left-0 bottom-0 h-screen lg:h-0 w-4/5 sm:w-80 lg:w-11/12">
					<span class="lg:hidden flex justify-end items-center h-10 w-full"  onclick="closeNav()">
						<i id="hamburger" class="fas fa-arrow-left text-green-dark text-2xl "></i>
					</span>
					<?php
					wp_nav_menu(
						array(
						'theme_location' => 'menu-1',
						'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
						'menu_class'        => "menu flex flex-col lg:flex-row py-5 lg:py-0 lg:items-center lg:gap-4  md:max-w-lg lg:max-w-full", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
						'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
						'container_class'   => "flex flex-col justify-center lg:flex lg:flex-row lg:justify-end lg:items-center ",
						'after'				=> "<i class='fas fa-angle-down down-arrow'></i>", // (string) Text after the link markup.
						// 'link_before'       => '<li class="font-semibold capitalize cursor-pointer text-white">', // (string) Text before the link text.
						// 'link_after'				=> "<i class='fas fa-angle-down drop-arrow md:hidden'></i>", // (string) Text after the link text.
						'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
						// 'theme_location'    => "top-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
						'item_spacing'      => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
						)
					);
					?>
				</div>
				<!-- #site-navigation -->

				<!-- relative flex flex-col lg:flex-row lg:justify-between justify-center lg:items-center max-w-6xl gap-6 mx-auto px-4 lg:p-0 -->
				<!-- menu-container menu bg-transparent text-green-dark lg:text-white hidden lg:flex lg:items-center lg:justify-end absolute lg:static fixed top-20 lg:top-0 w-full sm:w-80 lg:w-4/5 right-0 -->
			</section>

			
		</header>
	</section>
<!-- #masthead -->
