<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php if(is_front_page()){ ?>

<script>function utmx_section(){}function utmx(){}(function(){var
k='92459690-0',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>

<?php } ?>
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