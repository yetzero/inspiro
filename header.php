<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
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
				<a id="menu-toggle" class="icon-menu" href="#"></a>
				<nav id="mobile-navigation">
					<a id="menu-close" class="icon-cancel" href="#"></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
				</nav>
				<a id="main-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="Ir al inicio">
					<img id="header-logo" src="<?php echo get_template_directory_uri(); ?>/header-logo.png" alt="Inspiro" />
				</a>

				<nav id="site-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header>
</section>
<div class="main-page-container">