<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Johns_Work
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title wide-left">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title wide-left"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php johns_work_posted_on(); ?><br />
			Posted in <?php the_category(', '); ?>

		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<!-- If is Blog Page then display the Read More Link -->
		<?php if ( is_home()) : ?>

				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>

		<?php else : ?>

			<div class="share-it"> <!-- Social Shares -->
				Share this:
				<a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>"  class="facebook" target="_blank"></a>
				<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=pixel_visions" class="twitter" target="_blank"></a>
				<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>title=<?php the_title(); ?>"  class="google-plus" target="_blank"></a>
			</div>
		<?php the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'johns-work' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'johns-work' ),
				'after'  => '</div>',
			) ); ?>

		<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
