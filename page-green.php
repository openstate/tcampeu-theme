<?php
/*
 * Template Name: Green Page
 * */
?>

<div class="page-green">
  <div class="container-fluid">
     <!-- sticky nav -->
     <nav class="sticky-nav navbar navbar-default visible-lg-block" role="navigation">
       <ul class="nav nav-pills">
         <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
         <li class="hidden active">
           <a class="page-scroll" href="#main-content"></a>
         </li>
          <li class="sticky-nav-item">
           <a class="page-scroll" href="#schedule">Schedule</a>
         </li>
         <li class="sticky-nav-item">
           <a class="page-scroll" href="#info">Info</a>
         </li>
          <li class="sticky-nav-item">
           <a class="page-scroll" href="#register">Register</a>
         </li>
       </ul>
     </nav>
     <nav class="sticky-nav navbar navbar-default hidden-lg" role="navigation">
       <ul class="nav nav-pills">
         <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
         <li class="hidden active">
           <a class="page-scroll" href="#main-content"></a>
         </li>
          <li class="sticky-nav-item">
           <a class="page-scroll" href="#schedule">Schedule</a>
         </li>
         <li class="sticky-nav-item">
           <a class="page-scroll" href="#info">Info</a>
         </li>
          <li class="sticky-nav-item">
           <a class="page-scroll" href="#register">Register</a>
         </li>
       </ul>
     </nav>
  </div>
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>
</div>
