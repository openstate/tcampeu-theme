<header class="banner">
  <div class="container">
    <div class="row header-bg">
      <a href="<?= esc_url(home_url('/')); ?>">
      <img class="img-responsive display-inline" src="<?= get_template_directory_uri() . '/dist/images/logo-tceu.png'; ?>" alt="TransparencyCamp Europe logo"></img>
      </a>
      <h1 class="tceu-header"><a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>
    
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
