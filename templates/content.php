<article <?php post_class(); ?>>
  <header>
    <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php
      if (in_category('news')) {
        echo '<span class="post-type bg-green">News</span>';
      }
      elseif (in_category('datablog')) {
        echo '<span class="post-type bg-blue">Datablog</span>';
      }
    ?>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
