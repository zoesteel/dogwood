<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row">
			<div class="col-12">

				<div class="front-pg-slider">
				  <div>your content</div>
				  <div>your content</div>
				  <div>your content</div>
				</div>
			</div>
		</div>
			<main class="site-main" id="main">

					
					<?php
					// Display Size and Preference
					get_template_part( 'template-parts/content', 'call-to-actions' );

					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile; // End of the loop.
					?>	
					
					
			</main><!-- #main -->
		</div><!-- .row -->
	</div>
</div><!-- Container end -->

</div><!-- Wrapper end -->

<script>
jQuery(document).ready(function($){
  $('.front-pg-slider').slick({

  });
});
</script>
<?php get_footer(); ?>
