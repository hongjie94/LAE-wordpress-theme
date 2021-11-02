<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
	<footer class="site-footer" id="colophon">
		<div class="site-info">
			<p>© Lin Asian Express - All Rights Reserved</p> 
			<div class="footer-social-media-holder">
				<i class="fas fa-mail-bulk"></i>
				<i class="fab fa-facebook"></i>
				<i class="fa fa-instagram"></i>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- wrapper end -->

<?php wp_footer(); ?>

</body>

</html>

