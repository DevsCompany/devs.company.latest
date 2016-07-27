<?php
/**
 * Template Name: Галерея!
 */
get_header();
?>

<div id="container">
    <div id="leftsidebar">
<?php get_sidebar(); ?>
    </div>
    <div id="content">
        <div id="main-page-content">
            <ul>
                <?php
                global $paged;

                $args = array('post_type' => 'gallery', 'paged' => $paged, 'posts_per_page' => 10);

                $query = new WP_Query($args);

                while ($query->have_posts()) :
                    $query->the_post();
                    ?> 

                    <li class="post-preview">
                        <div class="pp-img"><?php the_post_thumbnail('full'); ?></div>
                        <!--<a href="<?php echo get_permalink($post); ?>" class="pp-full-link">-->
                            <a href="<?php echo get_permalink($post); ?>" class="pp-title"><?php the_title(); ?></a>
                            <div class="pp-excerpt">
                                <?php //echo (get_post_meta($post->ID, 'gallery_excerpt', 1)); 
                                the_terms(get_the_ID(), 'gal-tax');
                                ?>
                            </div>
                            <a class="pp-link-img" href="<?php echo get_permalink($post); ?>"></a>
                        <!--</a>-->
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="clear"></div>
            <div id="pagination"><?php wp_pagenavi(array('query' => $query)); ?></div>
        </div>
    </div>
</div><!-- #container -->

<?php get_footer(); ?>
