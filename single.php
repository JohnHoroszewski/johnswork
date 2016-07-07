<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Johns_Work
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container posts-container">
				<div class="posts-wrapper">
				<?php
				while ( have_posts() ) : the_post();
	
					get_template_part( 'template-parts/content', get_post_format() );
	
	
					// If comments are open or we have at least one comment, load up the comment template.
	
	
				endwhile; // End of the loop. ?>
				</div>
			<?php get_sidebar(); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
