<?php
/*
Template Name: Gallery Page
*/
$controller = new Controller();
get_header();
?>
<main class="gallery">
	<?php
	echo $controller->galleryPage();
	?>
</main>
	<i class="icon-next"></i>

<?php get_footer(); ?>