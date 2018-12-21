<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato|Raleway" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'dogwood' ); ?></a>

		
		<div class="container header-container">

			<div class="row">
				<div class="col-12 col-sm-6">
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img src="<?php echo get_template_directory_uri(); ?>/img/dogwood-logo.svg" alt="Dogwood Rescue Society logo"></a>
				</div><!-- end col -->

					<div class="social-donate d-flex flex-column col-12 col-sm-6 align-items-center align-items-sm-end">

						<div class="social d-flex flex-row justify-content-between">
							<a href="https://www.facebook.com/dogwoodrescuesociety" target="_new" alt="Link to Facebook"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.instagram.com/dogwoodrescue" target="_new" alt="Link to Instagram"><i class="fab fa-instagram"></i></a>
							<a href="https://twitter.com/dogwoodrescue" target="_new" alt="Link to Twitter"><i class="fab fa-twitter"></i></a>
						</div>

						<button class="btn donate-btn" alt="Donate to Dogwood Rescue Society">Donate</button>
					</div>
				</div><!-- end row -->

			</div><!-- end container -->


		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dogwood' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<!-- Responsive Nav -->
		<nav class="responsive-navigation" role="navigation">
			<button class="responsive-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'dogwood' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>

		<nav class="navbar navbar-light light-bg navbar-expand-md dogwood-main-menu p-0 ">
			<div class="container">
				<div class="row">
						<div class="col-12 d-flex justify-content-between">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
								<span class="navbar-toggler-icon"></span>
							</button>

							<!-- The WordPress Menu goes here -->
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => 'collapse navbar-collapse d-flex justify-content-center',
									'container_id'    => 'navbarNavDropdown ',
									'menu_class'      => 'navbar-nav ml-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 2,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							); ?> 

					<!-- Responsive Nav -->
					<!-- <nav class="responsive-navigation" role="navigation">
						<button class="responsive-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'dogwood' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav> -->
				</div>
			</div>
		
			</div><!-- .container -->
		
		</div>
		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
