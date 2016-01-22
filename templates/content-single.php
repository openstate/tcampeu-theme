<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
          <header>
            <h3 class="entry-title"><?php the_title(); ?></h3>
            <?php get_template_part('templates/entry-meta'); ?>
          </header>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <footer>
            <?php $category = get_the_category(); ?>
            <div class="row">
              <?php
                $args = array( 'posts_per_page' => 4, 'post__not_in' => array(get_the_ID()), 'category_name' => $category[0]->name );
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post );
              ?>
                <div class="col-md-6">
                  <?php get_template_part('templates/content', 'post'); ?>
                </div>
              <?php endforeach;
                wp_reset_postdata();
              ?>
            </div>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
          </footer>
          <?php comments_template('/templates/comments.php'); ?>
        </article>
      <?php endwhile; ?>
    </div>
  </div>
</div>
