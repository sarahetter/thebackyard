<?php
/*
Template Name: Page with Sections
*/

$controller = new Controller();
get_header();
?>
<main>
	<div class="centered">
		<?php
		echo $controller->pageWithSections();
		?>
	<i class="icon-chevron-thin-right"></i>
	</div>
</main>
<?php get_footer(); ?>