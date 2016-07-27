<?php get_header(); the_post(); ?>

<div id="container">
    <div id="leftsidebar">
        <?php get_sidebar(); ?>
    </div>
    <div id="content">
        <div id="page-title"><?php the_title(); ?></div>
        <?php the_content(); ?>
    </div>
</div><!-- #container -->

<?php get_footer(); ?>
