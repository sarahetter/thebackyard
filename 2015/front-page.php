<?php
$controller = new Controller();

get_header();
?>
	<main class="index">
		<div class="centered">
			<img src="<?php echo bloginfo('template_directory'); ?>/images/logo.png" class="logo">
			<h2 class="subhead">From Farm To Table</h2>
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					the_content();
				}
			}
			?>
		</div>
	</main>
<?php get_footer(); ?>