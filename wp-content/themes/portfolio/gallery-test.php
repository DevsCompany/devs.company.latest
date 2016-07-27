<?php
/**
 * Template Name: Галерея ТЕСТ!
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
                    
                $categories = get_categories( $args ); 
                
                $args = array(
                    'type'                     => 'post',
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => 0,
                    'taxonomy'                 => 'category',
                    'pad_counts'               => false );
                 
                    foreach ($categories as $category) {
                            echo '<li><a href="' . get_permalink($category->cat_ID) . '">';
                            echo $category->cat_name;
                            echo '</a><div class="cat-img">';
                            echo print_image_function();
                            echo '</div></li>';
                      }
                    ?>
                    <?php print_r(print_image_function()); ?>

            </ul>
            <div class="clear"></div>
            <div id="pagination"><?php wp_pagenavi(); ?></div>
        </div>
    </div>
</div><!-- #container -->

<?php get_footer(); ?>
