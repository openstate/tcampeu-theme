<?php
/*
 *  * Template Name: Overview Page
 *   * */
?>

<div class="col-md-10 col-md-offset-1">
  <div class="row bg-white">
    <div class="col-md-10 col-md-offset-1">
      <div class="row">
        <div class="col-md-6">
          <h2 class="text-green text-center">News</h2>
          <?php
            $args = array( 'posts_per_page' => 100, 'category_name' => 'News' );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post );
          ?>
            <?php get_template_part('templates/content', 'post'); ?>
          <?php endforeach; 
            wp_reset_postdata();
          ?>
        </div>
        
        <div class="col-md-6">
          <h2 class="text-blue text-center">Datablogs</h2>
          <?php
            $args = array( 'posts_per_page' => 100, 'category_name' => 'Datablog' );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post );
          ?>
            <?php get_template_part('templates/content', 'post'); ?>
          <?php endforeach; 
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
