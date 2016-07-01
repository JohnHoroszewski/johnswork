<?php
/**
 * Template part for displaying page content in contact.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Johns_Work
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">
			<section class="contact-wrapper">
				<div class="links">
					<div class="contact-intro">
						<h1>Contact Me</h1>
						<p>
							<?php the_field('contact_text'); ?>
						</p>
					</div>
					<div class="find-me">
						<h2>Connect with me @</h2>
						<ul class="social-links-contact">
							<?php if (get_field('twitter_link')) : ?>
								<li class="twitter social-contact"><a href="<?php the_field('twitter_link'); ?>">Twitter</a></li>
							<?php endif; ?>
							<?php if (get_field('behance_link')) : ?>
								<li class="behance social-contact"><a href="<?php the_field('behance_link'); ?>">Behance</a></li>
							<?php endif; ?>
							<?php if (get_field('dribbble_link')) : ?>
								<li class="dribbble social-contact"><a href="<?php the_field('dribbble_link'); ?>">Dribbble</a></li>
							<?php endif; ?>
							<?php if (get_field('google_plus_link')) : ?>
								<li class="google-plus social-contact"><a href="<?php the_field('google_plus_link'); ?>">Google Plus</a></li>
							<?php endif; ?>
							<?php if (get_field('facebook_link')) : ?>
								<li class="facebook social-contact"><a href="<?php the_field('facebook_link'); ?>">Facebook</a></li>
							<?php endif; ?>
							<?php if (get_field('pinterest_link')) : ?>
								<li class="pinterest social-contact"><a href="<?php the_field('pinterest_link'); ?>">Pintrest</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<div class="contact-form">
					<?php $contact = get_field('contact_form');
							echo do_shortcode($contact);
					?>
				</div>
			</section>
		</div>

</article>
