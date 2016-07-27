<?php
/**
 * Template Name: Галерея!
 */
get_header();
?>

<div id="container">
    <div id="content">

        <div class="filters">
            <?php
            $taxonomies = array('gal-tax');
            $argss = array(
                'hide_empty' => 0
            );
            $terms = get_terms($taxonomies, $argss);

            foreach ($terms as $term) {
                $slug = "'" . $term->slug . "'";
                echo '<a href="javascript:getNewMedia(' . $slug . ')" name = "' . $term->slug . '">' . $term->name . '</a>';
            }
            ?>
        </div>
        <script>
            jQuery(document).ready(function() {
                jQuery(".filters > a").click(function() {
                    jQuery(".filters > a").removeClass("active");
                    jQuery(this).addClass("active");
                });
            });
            function getNewMedia(tax_slug) {
                jQuery.ajax({
                    type: "POST",
                    url: "/wp-admin/admin-ajax.php",
                    data: {'action': 'get_media', 'tax_slug': tax_slug},
                    async: false,
                    success: function(data) {
                        jQuery("#main-page-content ul").html(data);
                        var select = jQuery('a[href$=".bmp"],a[href$=".gif"],a[href$=".jpg"],a[href$=".jpeg"],a[href$=".png"],a[href$=".BMP"],a[href$=".GIF"],a[href$=".JPG"],a[href$=".JPEG"],a[href$=".PNG"]');
                        select.attr('rel', 'fancybox');
                        select.fancybox();
                    },
                    error: function(e) {

                    }
                });
            }
        </script>

        <div id="main-page-content">
            <ul>
                <?php
                $args = array(
                    'post_type' => 'gallery',
                    'posts_per_page' => 60
                );
                $query = new WP_Query($args);

                while ($query->have_posts()) :
                    $query->the_post();
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
                            <?php
                            $post_terms = get_the_terms($post->ID, 'gal-tax');
                            foreach ($post_terms as $post_term) {
                                $post_term_slug = "'" . $post_term->slug . "'";
                                echo '<a href="javascript:getNewMedia(' . $post_term_slug . ')" name="' . $post_term->slug . '">' . $post_term->name . '</a>';
                            }
                            ?>
                        </div>
                        <a class="pp-link-img" href="<?php echo get_permalink($post->ID); ?>"></a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div><!-- #container -->

<?php get_footer(); ?>
