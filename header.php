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
<!-- animsition.css -->
<link rel="stylesheet" href="../dist/css/animsition.min.css">
<!-- animsition.js -->
<script src="../dist/js/animsition.min.js"></script>
<title><?php wp_title();?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav id="desktop" class="d-none d-lg-block">
		<div class="container">
			<div class="row justify-content-between align-items-left">
				<div class="col-2 logo align-items-start">
					<a href="<?php echo get_home_url(); ?>" class="logo-wrapper"><img
							src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" />
					</a>
				</div>
				<div class="col-lg-6 col-md-7 col-xl-5 d-flex align-items-center menu-col">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</div>
				<div class='nav-contact d-flex justify-content-end text-right col-lg-4 col-md-3 col-xl-5 '>
					<a href="tel:6479705275" class="nav-phone">647.970.5275</a>
					<div class="line"></div>
					<a href="mailto:info@verifytab.ca" class="nav-mail">Info@verifyair.com</a>
				</div>
			</div>
		</div>
	</nav>
	<nav id="mobile" class="d-flex d-lg-none justify-content-between align-items-start">
			<a href="<?php echo get_home_url(); ?>" class="logo-wrapper">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" /></a>
			<button class="hamburger hamburger--spring" type="button" aria-label="Menu" aria-controls="navigation">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<div id="mobile_menu">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				<div class="ending_text">
				<ul>
					<li>
						<?php the_sub_field( 'text' ); ?>
					</li>
					<li>
					<a class='hamb_contact' href="tel:6479705275">647.970.5275</a>

					</li>
					<li>
						<a class='hamb_contact' href="mailto:info@verifytab.ca">Info@verifyair.com</a>
					</li>
				</ul>
					<!-- <div class='nav-contact d-flex justify-content-end text-right col-lg-4 col-md-3 col-xl-5 '> -->
				<!-- </div> -->
						</div>
						<!-- <div class="btn_green_hamb">
							<a class='btn green_hamb' href="#contact"> Get In Touch <img class='green_white_arrow' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/white_arrow.svg" /></a>
						</div> -->
					</div>
			</div>
	
		</nav>