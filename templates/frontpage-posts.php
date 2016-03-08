<div class="container bg-grey-light">
  <div class="row">
    <div class="col-lg-5 col-md-6 col-sm-7 col-xs-8">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-xs-12">
          <h2>News &amp; Datablogs</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <br>
    <div class="col-md-10 col-md-offset-1">
      <div class="row bg-white">
          <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-md-6">
                <?php
                  $args = array( 'posts_per_page' => 2, 'category_name' => 'News' );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post );
                ?>
                  <?php get_template_part('templates/content', 'post'); ?>
                <?php endforeach; 
                  wp_reset_postdata();
                ?>
              </div>
                    
              <div class="col-md-6">
                <?php
                  $args = array( 'posts_per_page' => 2, 'category_name' => 'Datablog' );
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
  </div>
  <br>
</div>
