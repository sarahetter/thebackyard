<?php
/*
Template Name: Gallery Page
*/
$controller = new Controller();
get_header();
?>
<main>
	<?php
	echo $controller->galleryPage();
	?>
	<div class="centered">
		<i class="icon-chevron-thin-left"></i>

		<i class="icon-chevron-thin-right"></i>
	</div>
</main>
<?php get_footer(); ?>