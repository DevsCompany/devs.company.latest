<?php get_header(); the_post(); ?>

<div id="container">
    <div id="leftsidebar">
        <?php get_sidebar(); ?>
    </div>
    <div id="content">
        <div id="page-news">
            <div class="news-item-top">
                <div class="news-title"><?php the_title(); ?></div>
                <div class="news-date"><?php the_time(get_option('date_format')); ?></div>
            </div>
            <div class="news-content"><?php the_content(); ?></div>
        </div>
    </div>
</div><!-- #container -->

<?php get_footer(); ?>
