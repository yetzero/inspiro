<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package inspiro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Typekit -->
	<script src="//use.typekit.net/guc2erq.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
<!-- End Typekit -->
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'inspiro' ); ?></a>
<section id="masthead">
	<header class="site-header" role="banner">
		<div class="content">
			<div class="row" id="branding">
				<div class="col oneofthree" id="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="Ir al inicio">
						<img id="header-logo" src="<?php echo get_template_directory_uri(); ?>/header-logo.svg" alt="Inspiro" />
					</a>
				</div>

				<nav id="site-navigation" class="col twoofthree" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header>
</section>
<div class="page">