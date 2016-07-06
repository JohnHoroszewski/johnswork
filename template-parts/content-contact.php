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
						<p class="md-text">
							<?php the_field('contact_text'); ?>
						</p>
					</div>
					<div class="find-me">
						<h2>Connect with me @</h2>
						<ul class="social-links-contact">
							<?php if (get_field('twitter_link')) : ?>
								<li ><a class="twitter social-contact" href="<?php the_field('twitter_link'); ?>"></a></li>
							<?php endif; ?>
							<?php if (get_field('behance_link')) : ?>
								<li><a class="behance social-contact" href="<?php the_field('behance_link'); ?>"></a></li>
							<?php endif; ?>
							<?php if (get_field('dribbble_link')) : ?>
								<li><a class="dribbble social-contact" href="<?php the_field('dribbble_link'); ?>"></a></li>
							<?php endif; ?>
							<?php if (get_field('google_plus_link')) : ?>
								<li><a class="google-plus social-contact" href="<?php the_field('google_plus_link'); ?>"></a></li>
							<?php endif; ?>
							<?php if (get_field('facebook_link')) : ?>
								<li><a class="facebook social-contact" href="<?php the_field('facebook_link'); ?>"></a></li>
							<?php endif; ?>
							<?php if (get_field('pinterest_link')) : ?>
								<li><a class="pinterest social-contact" href="<?php the_field('pinterest_link'); ?>"></a></li>
							<?php endif; ?>
							<?php if (get_field('linkedin_link')) : ?>
								<li><a class="linkedin social-contact" href="<?php the_field('linkedin_link'); ?>"></a></li>
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
