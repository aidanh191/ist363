<?php get_header(); ?>

<?php 
        if ( $the_query->have_posts() ) : 
        ?>

        <!-- the loop -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php include 'item.php';?>
            
        <?php endwhile; ?>

<?php get_header(); ?>