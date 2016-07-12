<?php
/**
 * Template part for displaying page content in design-portfolio-page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Johns_Work
 */

?>

<?php include_once('inc/classes.php'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container">
		<section class="default-content">
			<h1 class="wide-left"><?php the_title(); ?></h1>
			<?php
				$dev = new workLoop();
				$dev->loop('des', 5); // 6-1 | 0 Based for counter
			?>
		</section>
	</div>

</article>
