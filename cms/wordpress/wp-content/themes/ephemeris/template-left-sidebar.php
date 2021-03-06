<?php
/**
 * Template Name: Left Sidebar Page
 * Template Post Type: page, post
 *
 * Description: Displays a page with a left hand sidebar.
 *
 * @package Ephemeris
 * @since Ephemeris 1.0
 */

get_header(); ?>

<div id="maincontentcontainer">
	<div id="content" class="grid-container site-content" role="main">

		<?php do_action( 'ephemeris_before_main_grid' ); ?>
		<div class="grid-75 tablet-grid-75 mobile-grid-100 push-25 tablet-push-25">

			<?php
			do_action( 'ephemeris_before_content' );
			if ( have_posts() ) {

				// Start the Loop
				while ( have_posts() ) {
					the_post();
					if ( is_singular( 'post' ) ) {
						get_template_part( 'template-parts/content', get_post_format() );
					}
					else {
						get_template_part( 'template-parts/content', 'page' );
					}

					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) {
						comments_template( '', true );
					}

				} // end of the loop

				if ( is_singular( 'post' ) ) {
					ephemeris_single_posts_pagination();
				}

			} else {

				get_template_part( 'template-parts/no', 'results' ); // Include the template that displays a message that posts cannot be found

			} // end have_posts()
			do_action( 'ephemeris_after_content' );
			?>

		</div>
		<?php get_sidebar( 'left' ); ?>
		<?php do_action( 'ephemeris_after_main_grid' ); ?>

	</div> <!-- /#content.grid-container.site-content -->
</div> <!-- /#maincontentcontainer -->

<?php get_footer(); ?>
