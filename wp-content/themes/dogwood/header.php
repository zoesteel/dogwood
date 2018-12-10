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

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class=" d-flex justify-content-between flex-row col-12 navbar navbar-expand-md">

		<!-- <?php if ( 'container' == $container ) : ?> -->
			<div class="container">
		<!-- <?php endif; ?> -->
			<div class="row">
				<div class="col-12 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/dogwood-logo.png" alt="Dogwood Rescue Society logo">
				</div><!-- end col -->

					<!-- Your site title as branding in the menu -->
					<!-- <?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?> -->

							<!-- <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1> -->

						<!-- <?php else : ?> -->

							<!-- <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a> -->

						<!-- <?php endif; ?> -->


					<!-- <?php } else {
						the_custom_logo();
					} ?> --><!-- end custom logo -->


					<div class="social-donate d-flex flex-row"

						<div class="social flex-end">
							<a href="https://www.facebook.com/dogwoodrescuesociety" target="_new"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.instagram.com/dogwoodrescue" target="_new"><i class="fab fa-instagram"></i></a>
							<a href="https://twitter.com/dogwoodrescue" target="_new"><i class="fab fa-twitter"></i></a>
						</div>

						<a href="<?php echo site_url(); ?>#give-form-100-wrap"><img src="<?php bloginfo("template_url"); ?>/images/donate.jpg" alt="" class="donate"></a>
						<button class="btn donate-btn">Donate</button>
					</div>
				</div><!-- end row -->

			</div><!-- end container -->
		</nav>
		<nav class="navbar navbar-expand-md dogwood-main-menu p-0 d-flex justify-content-center">
						<div class="d-flex justify-content-between">
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
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
