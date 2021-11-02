<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
		<div class="top-header-holder">
			<div class="container">
				<div class="row">
				<div class="col-4">
					<div class="logo-holder">
						<div class="logo animate__animated animate__fadeInDown" >
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-6 d-flex align-items-end">
					<div class="reservation-holder animate__animated animate__fadeInDown animate__delay_025s">
						<div class="contact-holder">
							<a class="phone"><i class="fas fa-phone px-1"></i> +18129094210</a>
							<a class="address"><i class="fas fa-map-marker-alt px-1"></i> 520 N First Ave EVANSVILLE, IN 47710</a>
						</div>
						<div class="reservation-btn py-3">
							<button class='btn'>
								Make a reservation
							</button>
						</div>
					</div>
				</div>
				<div class="col d-flex align-items-end animate__animated animate__fadeInDown animate__delay_05s">
					<div class="social-media-holder">
						<i class="fab fa-facebook"></i>
						<i class="fa fa-instagram"></i>
					</div>
				</div>
			</div>
			</div>
		</div>
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-sm navbar-dark bg-primary animate__animated animate__fadeIn animate__duration_1_05s" aria-labelledby="main-nav-label">
			<h2 id="main-nav-label " class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

			<div class="container d-flex justify-content-xl-end justify-content-between">
				<div class="responsive-phone">
					<a class="phone"><i class="fas fa-phone px-1"></i> +18129094210</a>	
				</div>
			
				<div class="menu-btn">
					<span class="menu">MENU</span>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
							<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div><!-- .container -->
			
		</nav><!-- .site-navigation -->
		<div class="responsive-holder">
			<div class="responsive-content">
				<div class="logo">
					<img class='logo-img'src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
				</div>
				<div class="info-holder">
					<div class="restaurantName">
						Lin's Asian Express
					</div>
					<div class="location">
						<a class="address">
							<i class="fas fa-map-marker-alt"></i> 
							<span>
								520 N First Ave <br> EVANSVILLE, IN 47710
							</span>
						</a>
					</div>
					<div class="reservation-btn">
						<button class='btn'>
							Make a reservation
						</button>
					</div>
				</div>
				<div class="social-media-responsive">
					<i class="fab fa-facebook"></i>
					<i class="fa fa-instagram"></i>
				</div>
			</div>
		
		</div>
	</div><!-- #wrapper-navbar end -->
