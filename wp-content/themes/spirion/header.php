<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark">
			<a href="#" class="nav_opener"><i class="fa fa-bars" aria-hidden="true"></i></a>
		<?php if ('container' == $container) : ?>
			<div class="container" >
		<?php endif; ?>
				<div class="row">
					<!-- Your site title as branding in the menu -->
					<h1 class="navbar-brand mb-0 pull-left"><a rel="home" href="#" itemprop="url"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a></h1>

				
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="header_holder pull-right text-right">
					<div class="top_area">
						<div class="top_search d-inline-block">
							<input type="search" placeholder="Search...">
						</div>
						<ul class="top_misc_links d-inline-block list-unstyled list-inline">
							<li><a href="#">Contact Sales</a></li>
							<li><a href="#">Try Now</a></li>
						</ul>
					</div>
					<nav id="nav">
						<ul class="list-unstyled list-inline">
							<li><a href="#">Platform</a></li>
							<li><a href="#">Solution</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Resources</a></li>
							<li><a href="#">Company</a></li>
						</ul>
					</nav>
				</div>
				
				<?php
				// wp_nav_menu(
				// 	array(
				// 		'theme_location'  => 'primary',
				// 		'container_class' => 'collapse navbar-collapse',
				// 		'container_id'    => 'navbarNavDropdown',
				// 		'menu_class'      => 'navbar-nav ml-auto',
				// 		'fallback_cb'     => '',
				// 		'menu_id'         => 'main-menu',
				// 		'depth'           => 2,
				// 		'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				// 	)
				// );
			?>
			</div>
			<?php if ('container' == $container) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
