<?php 
/*
 * Template Name: Создание дизайнов
 */
get_header(); the_post(); ?>

<div id="container">
    <div id="leftsidebar">
        <?php get_sidebar(); ?>
    </div>
    <div id="content">
        <div id="page-title"><?php the_title(); ?></div>
        <div id="design-content">
            <?php the_content(); ?>
        </div>
    </div>
</div><!-- #container -->

<?php get_footer(); ?>
