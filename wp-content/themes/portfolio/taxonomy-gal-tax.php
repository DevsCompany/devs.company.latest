<?php get_header(); ?>

<div id="container">
    <div id="content">
        <div id="page-title"><?php printf(__('Категория: %s'), '<span>' . single_cat_title('', false) . '</span>'); ?></div>
        <div id="main-page-content">
            <ul>
                <?php
                while (have_posts()) : the_post();
                    global $post;
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    ?> 
                    <li class="post-preview">
                        <div class="pp-img">
                            <a href="<?php echo $url; ?>" rel="fancybox">
                                <?php echo get_the_post_thumbnail($post->ID, 'post-preview'); ?>
                            </a>
                        </div>
                        <a href="<?php echo get_permalink($post->ID); ?>" class="pp-title"><?php the_title(); ?></a>
                        <div class="pp-excerpt">
                            <?php the_terms($post->ID, 'gal-tax'); ?>
                        </div>
                        <a class="pp-link-img" href="<?php echo get_permalink($post->ID); ?>"></a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="clear"></div>
            <div id="pagination"><?php wp_pagenavi(); ?></div>
        </div>
    </div>
</div><!-- #container -->

<?php get_footer(); ?>
