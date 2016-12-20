<?php
/**
 * The main template file
 *
 * @package Backyard2015
 * @since 0.1.0
 */

$controller = new Controller();

get_header();
?>
    <main class="index">
        <div class="centered">
	        <?php if ( have_posts() ) : ?>
		        <?php while ( have_posts() ): the_post(); ?>
                    <article>
                    <h1><?php the_title(); ?></h1>
                        <time><?php the_time( get_option( 'date_format' ) ); ?></time>
                        <?php the_content(); ?>
                    </article>
		        <?php endwhile; ?>
	        <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>