<?php
/**
* Template Name: Le_Karizma_Page
*;Template Post Type: post, page, event
**/
$sidebar_layout = blossom_feminine_sidebar_layout();

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

		/**
                 * Comment Template
                 * 
                 * @hooked blossome_feminine_comment
                */
                do_action( 'blossom_feminine_after_page_content' );
		// End of the loop.

			endwhile; 
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
if( $sidebar_layout != 'full-width' )
get_sidebar();
get_footer();