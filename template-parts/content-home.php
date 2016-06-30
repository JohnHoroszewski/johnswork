<?php
/**
 * Template part for displaying page content in home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Johns_Work
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="hero">
		<div class="container">
			<div class="hero-text">
				<?php the_field('hero_text'); ?>
			</div>
		</div>
	</section>

	<section class="about">
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
				<h3>Development</h3>
				<?php the_field('skills_dev'); ?>
			</div>
			<div class="design">
				<h3>Design</h3>
				<?php the_field('skills_design'); ?>
			</div>
		</div>
	</section>

	<section class="cta-one">
		<div class="container">
			<p class="lrg-text">
				<?php the_field('cta_text'); ?>
			</p>
			<a href="/contact" class="button cta-button">
				<?php the_field('cta_button_text'); ?>
			</a>
		</div>
	</section>

	<section class="work">
		<div class="container">
			<h2 class="accent">Work</h2>
			<div class="dev">
				<h3 class="accent light">Development</h3>
			</div>
			<div class="design">
				<h3 class="accent light">Design</h3>
			</div>
		</div>
	</section>

</article><!-- #post-## -->
