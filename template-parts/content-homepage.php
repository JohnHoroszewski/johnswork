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
			<h2 class="accent">Work</h2>
			<div class="dev">
				<h3 class="accent light wide-left">Development</h3>
				<?php
					$args = array(
						'post_type' => 'page',
						'post_status' => 'publish',
						'meta_query' => array(
							array(
								'key' => '_wp_page_template',
								'value' => 'development.php', // template name as stored in the dB
								'posts_per_page' => 3
							)
						)
					);
				?>

				<ul class="work-blocks">

					<?php $devposts = new WP_Query( $args ); ?>
						<?php while($devposts->have_posts()) : $devposts->the_post(); ?>
							<li class="development-work work-block">
								<a href="<?php the_field('client_website_link'); ?>" target="_blank">
									<span class="view-info">View<i class="fa fa-plus-circle" aria-hidden="true"></i></span>
									<?php echo the_post_thumbnail(); ?>
									<div class="text-block">
										<span class="work-title md-text">
											<?php echo the_title(); ?>
											<?php echo the_excerpt(); ?>
										</span>
									</div>
								</a>
							</li>
						<?php endwhile; ?>

				</ul>

				<?php wp_reset_query(); ?>
			</div>
			<div class="design">
				<h3 class="accent light wide-left">Design</h3>

				<?php
				$args = array(
					'post_type' => 'page',
					'post_status' => 'publish',
					'meta_query' => array(
						array(
							'key' => '_wp_page_template',
							'value' => 'design.php', // template name as stored in the dB
							'posts_per_page' => 3
						)
					)
				);
				?>

				<ul class="work-blocks">

					<?php $devposts = new WP_Query( $args ); ?>
					<?php while($devposts->have_posts()) : $devposts->the_post(); ?>
						<li class="development-work work-block">
							<a href="<?php the_permalink(); ?>">
								<span class="view-info">View<i class="fa fa-plus-circle" aria-hidden="true"></i></span>
								<?php echo the_post_thumbnail(); ?>
								<div class="text-block">
										<span class="work-title md-text">
											<?php echo the_title(); ?>
											<?php echo the_excerpt(); ?>
										</span>
								</div>
							</a>
						</li>
					<?php endwhile; ?>

				</ul>

				<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>

</article>
