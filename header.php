<?php
/**
 * The template for displaying the header.
 *
 * @package Backyard2015
 * @since 0.1.0
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body>
	<header>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false ) ); ?>
		<ul class="contact">
			<li><a href="tel:306-450-4604">1 (306) 450-4604</a></li>
			<li><a href="mailto:thebackyardregina@gmail.com" class="mail">Mail</a></li>
			<li><a href="https://www.facebook.com/thebackyardregina" class="facebook" target="_blank">Facebook</a></li>
			<li><a href="https://instagram.com/thebackyard_/" class="instagram" target="_blank">Instagram</a></li>
		</ul>
	</header>