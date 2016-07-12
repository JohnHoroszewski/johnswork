<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Johns_Work
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:type" content="post" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:image" content="" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="https://use.fontawesome.com/945c7b9534.js"></script>
<?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
<script type="text/javascript">
	if( navigator.userAgent.match(/iP(hone|od|ad)/i) ) {
		jQuery('body').addClass('ios');
	}
</script>
<a href="#top" class="backtotop">
</a>
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'johns-work' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="mobile-nav">
					<a href="#">Menu</a>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
