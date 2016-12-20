<?php
/**
 * The template for displaying the header.
 *
 * @package Backyard2015
 * @since 0.1.0
 */

$backgroundImage = get_field('background_image',4)['url'];
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<title>The Backyard</title>
		<?php wp_head(); ?>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-60695904-1', 'auto');
			ga('send', 'pageview');

		</script>
	</head>
	<body style="background-image: url(<?php echo $backgroundImage?>)">
	<header>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false ) ); ?>
		<ul class="contact">
			<li><a href="mailto:thebackyardregina@gmail.com" class="mail"><img src="<?php echo BACKYARD_TEMPLATE_URL; ?>/images/social/mail-lg.png" alt="Mail"></a></li>
			<li><a href="https://www.facebook.com/thebackyardregina" class="facebook" target="_blank"><img src="<?php echo BACKYARD_TEMPLATE_URL; ?>/images/social/facebook-lg.png" alt="Facebook"></a></li>
			<li><a href="https://instagram.com/thebackyardyqr/" class="instagram" target="_blank"><img src="<?php echo BACKYARD_TEMPLATE_URL; ?>/images/social/insta-lg.png" alt="Instagram"></a></li>
		</ul>
	</header>