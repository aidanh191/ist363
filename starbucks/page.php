<?php get_header(); ?>

<main>
    <h2>Menu</h2>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

    <?php endwhile; else : ?>
	    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>