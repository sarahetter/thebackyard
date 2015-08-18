<?php
$controller = new Controller();

get_header();
?>
	<main class="index">
		<div class="centered">
			<img src="<?php echo bloginfo('template_directory'); ?>/images/logo.png">
			<h2>From Farm To Table</h2>
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
				}
			}
			?>
		</div>
	</main>
<?php get_footer(); ?>