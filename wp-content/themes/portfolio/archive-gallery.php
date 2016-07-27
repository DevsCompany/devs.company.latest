<?php get_header(); ?>

<?php global $wp_query; ?>

    <div id="container">
        <div id="leftsidebar">
            <?php get_sidebar(); ?>
        </div>
        
        <div id="content" role="main">
            <h1 id="page-title">
                sdfghjk<?php printf( __( '%s', 'portfolio' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
            </h1>
            
            <?php print_r(print_image_function($category->term_id)); ?>
            
            <?php if ( $wp_query->queried_object->parent < 1 ) : ?><!-- если есть подкатегории 1-го уровня - то показывать их -->
                <ul class="cat-cat">
                <?php
                    $categories = get_categories('child_of=' . $wp_query->query_vars['cat'] . '&hide_empty=1');
                    
                    foreach ($categories as $childcat) {
                        if (cat_is_ancestor_of($ancestor, $childcat->cat_ID) == false) {
                            echo '<li class="category_preview"><a href="' . get_category_link($childcat->cat_ID) . '"><div class="cat-cat-image"><img src="';
                            //echo get_bloginfo('home') . '/wp-content/portfolio/images/cat-images/';
                            //echo $childcat->slug; 
                            //echo '.jpg" /></div>';
                            echo print_image_function($childcat->cat_ID);
                            echo '" /></div>';
                            echo '<div class="cat-cat-title">';
                            echo $childcat->name . '</div>';
                            echo '</a></li>';
                            $ancestor = $childcat->cat_ID;
                        }
                    }
                ?>
                </ul>
            <?php else: 
                // если нет подкатегорий но есть посты ----------->
                while (have_posts()) : the_post(); ?> 
                            <li class="post-preview">
                                <div class="pp-img"><?php the_post_thumbnail('full'); ?></div>
                                <a href="<?php echo get_permalink(get_the_ID()); ?>" class="pp-full-link">
                                    <div class="pp-title"><?php the_title(); ?></div>
                                    <div class="pp-excerpt"><?php echo (get_post_meta(get_the_ID(), 'gallery_excerpt', 1)); ?></div>
                                    <div class="pp-link-img"></div>
                                </a>
                            </li>
                        <?php endwhile;
                        endif;?>
            
            <div class="clear"></div>
            <div id="pagination"><?php wp_pagenavi(); ?></div>
            
        </div><!-- #content -->
        <div class="clear"></div>
    </div><!-- #container -->
<?php get_footer(); ?>
