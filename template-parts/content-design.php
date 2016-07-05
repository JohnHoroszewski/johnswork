<?php
/**
 * Template part for displaying page content in design.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Johns_Work
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container">
		<section class="default-content">
			<?php
				the_content();
			?>
		</section>
	</div>

</article>
