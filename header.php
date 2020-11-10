<?php
/**
 * Theme Header
 *
 * Header data.
 *
 * @since   1.0.0
 * @package WP
 */


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav id="desktop" class="d-none d-lg-block">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-2 logo align-items-start">
					<a href="<?php echo get_home_url(); ?>" class="logo-wrapper"><img
							src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" />
					</a>
				</div>
				<div class="col-lg-6 col-md-9 col-xl-7 d-flex align-items-center menu-col">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</div>
				<div class='nav-contact col-lg-4 col-md-1 col-xl-3'>
					<a href="<?php echo get_home_url(); ?>#contact" class="nav-phone">647.970.5275</a>
					<a href="<?php echo get_home_url(); ?>" class='noHover'>|</a>
					<a href="<?php echo get_home_url(); ?>#contact" class="nav-mail">Info@verifyair.com</a>
				</div>
			</div>
		</div>
	</nav>
	<nav id="mobile" class="d-flex d-lg-none justify-content-between align-items-center">
			<a href="<?php echo get_home_url(); ?>" class="logo-wrapper">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" /></a>
			<button class="hamburger hamburger--spring" type="button" aria-label="Menu" aria-controls="navigation">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<div id="mobile_menu">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div>
		</nav>