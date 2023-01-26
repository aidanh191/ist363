<h2 class='employees'>Employees</h2>
    <?php 

      $args = array('post_type' => 'employees',);

      // the query
      $the_query = new WP_Query( $args ); ?>
  
    <?php if ( $the_query->have_posts() ) : ?>
  
      <!-- pagination here -->
  
      <!-- the loop -->
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
        <?php include 'item.php';?>

      <?php endwhile; ?>
      <!-- end of the loop -->
  
      <!-- pagination here -->
  
      <?php wp_reset_postdata(); ?>
  
  <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>