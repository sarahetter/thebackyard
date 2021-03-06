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
            <h1>Blog</h1>
	        <?php if ( have_posts() ) : ?>
		        <?php while ( have_posts() ): the_post(); ?>
                    <article>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <time><?php the_time( get_option( 'date_format' ) ); ?></time>
			        <?php the_excerpt(); ?>
                    </article>
		        <?php endwhile; ?>
	        <?php endif; ?>
	        <?php echo paginate_links(  ); ?>
        </div>
    </main>
<?php get_footer(); ?>