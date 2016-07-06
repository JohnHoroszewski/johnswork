<?php
/**
 * Template part for displaying page content in home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Johns_Work
 */

?>

<?php include_once('inc/classes.php'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="hero">
		<div class="container">
			<div class="hero-text">
				<?php the_field('hero_text'); ?>
			</div>
		</div>
	</section>

	<section class="intro">
		<div class="container">
			<span class="md-text">
				<?php the_field('bio_excerpt'); ?>
			</span>
		</div>
	</section><!-- .entry-content -->
	<section class="skills">
		<div class="container">
			<h2>Skills and Specialities</h2>
			<div class="dev">
				<h3 class="wide-left">Development</h3>
				<?php the_field('skills_dev'); ?>
			</div>
			<div class="design">
				<h3 class="wide-left">Design</h3>
				<?php the_field('skills_design'); ?>
			</div>
		</div>
	</section>

	<section class="cta-one">
		<div class="container">
			<div class="lrg-text">
				<?php the_field('cta_text'); ?>
			</div>
			<span class="arrow"><i class="fa fa-long-arrow-right fa-3x" aria-hidden="true"></i></span>
			<a href="/contact" class="button cta-button">
				<?php the_field('cta_button_text'); ?>
			</a>
		</div>
	</section>

	<section class="work">
		<div class="container">
			<h2 class="accent">Recent Work</h2>
			<div class="dev">
				<h3 class="accent light wide-left">Development</h3>
				<?php
					$dev = new workLoop();
					$dev->loop('dev', 2);
				?>
			</div>

			<div class="design">
				<h3 class="accent light wide-left">Design</h3>
				<?php
					$des = new workLoop();
					$des->loop('des', 2);
				?>
			</div>
		</div>
	</section>

</article>
