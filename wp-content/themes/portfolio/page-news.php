<?php
/**
 * Template Name: Новости!
 */
get_header();
?>

<div id="container">
    <div id="leftsidebar">
<?php get_sidebar(); ?>
    </div>
    <div id="content">
        <div id="main-page-content">
            <h2><?php the_title(); ?></h2>
            <ul>

                <?php
                global $paged;

                $args = array('post_type' => 'news', 'paged' => $paged, 'posts_per_page' => 10);

                $query = new WP_Query($args);

                while ($query->have_posts()) :
                    $query->the_post();
                    ?> 

                    <li class="post-news">
                        <div class="news-item-top">
                            <div class="news-title"><?php the_title(); ?></div>
                            <div class="news-date"><?php the_time(get_option('date_format')); ?></div>
                        </div>
                        <div class="clear"></div>
                        <div class="news-img"><?php the_post_thumbnail('full'); ?></div>
                        <div class="news-content"><?php the_excerpt(); ?></div>
                        <div class="clear"></div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="clear"></div>
            <div id="pagination"><?php wp_pagenavi(array('query' => $query)); ?></div>
        </div>
    </div>
</div><!-- #container -->

<?php get_footer(); ?>