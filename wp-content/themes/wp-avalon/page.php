<?php
/**
 * Page template file
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
get_header();
?>

<div class="container">

  <?php if (is_active_sidebar('sidebar-left') || is_active_sidebar('sidebar-right') || isset($post->property_type) && is_active_sidebar("wpp_sidebar_" . $post->property_type)) : ?>
    <div class="content col-md-8">
    <?php else : ?>
      <div class="content col-md-12">
      <?php
      endif;

      if (get_theme_mod('header_image_post_disable', '1') != 1) :
        echo the_title('<h1 class="page-title">', '</h1>');
      endif;

      if (have_posts()) :

        while (have_posts()) : the_post();

          get_template_part('template-parts/content/content', 'page');

        endwhile;

      else :
        
        get_template_part('template-parts/content/content', 'none');
      
      endif;
      ?>
    </div>

    <?php get_sidebar(); ?>

  </div>

  <?php get_footer(); ?>