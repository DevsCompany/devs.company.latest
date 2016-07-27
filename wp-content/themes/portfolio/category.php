<?php get_header(); ?>

<div id="container">

    <?php include(TEMPLATEPATH . '/sidebar-left.php'); ?>

    <div id="content">
        <h1 class="page-title">
            <?php printf(__('Раздел: %s'), '<span>' . single_cat_title('', false) . '</span>'); ?>
        </h1>
        <ul>
            <?php
            $args = array(
                'numberposts' => 0,
                'paged' => $paged,
                'posts_per_page' => 10,
                'orderby' => 'post_date',
                'post_type' => 'specialist',
                'post_status' => 'publish');
            $query = new WP_Query($args);

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    ?>
                    <li class="while-post">
                        <a class="wpost-title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                        <div class="wpost-excerpt"><?php the_excerpt(); ?></div>
                        <a href="<?php echo get_permalink(); ?>" class="wpost-more">Читать далее...</a>
                    </li>
                    <?php
                endwhile;
            else :
                ?>
                <li class="while-post">
                    <a class="wpost-title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                    <div class="wpost-excerpt"><?php the_excerpt(); ?></div>
                    <a href="<?php echo get_permalink(); ?>" class="wpost-more">Читать далее...</a>
                </li>
<?php endif;
?>
        </ul>
        <div class="paginate">
            <?php
            if ($query->have_posts()) :
                wp_pagenavi(array('query' => $query));
            else :
                wp_pagenavi();
            endif;
            ?>
        </div>
    </div><!-- #content -->
</div><!-- #container -->


<?php get_footer(); ?>

