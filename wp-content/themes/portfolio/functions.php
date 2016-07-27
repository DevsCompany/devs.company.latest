<?php
wp_enqueue_script('jquery');

add_theme_support('post-thumbnails');

add_image_size('main-preview', 700, 569, false);
add_image_size('post-preview', 240, 119, true);
add_image_size('slider', 480, 230, true);

register_nav_menu('main-menu', 'Main menu');

register_nav_menu('left-menu', 'Left menu');


//* custom post type 

add_action('init', 'theme_init');

function theme_init() {

    register_post_type('partners', array(
        'labels' => array(
            'name' => __('Partners'),
            'singular_name' => __('Partner')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
            )
    );

    add_image_size('partners-img', full, false);


    $args = array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'description' => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>');
    register_sidebar($args);

    $args2 = array(
        'name' => 'Sand Mail',
        'id' => 'sand-mail-form-widget',
        'description' => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>');
    register_sidebar($args2);
}

function get_partners() {

    $args = array(
        'numberposts' => 0,
        'orderby' => 'post_date',
        'post_type' => 'partners',
        'post_status' => 'publish');

    $partners_array = get_posts($args);

    $html = '';

    foreach ($partners_array as $key => $partner) {

        ob_start();

        echo '<li class="partner"><a target="blank_" href="';
        echo get_post_meta($partner->ID, 'partners-link', 1);
        echo '">' . get_the_post_thumbnail($partner->ID, 'partners-img', '') . '</a></li>';

        $html .= ob_get_contents();
        ob_clean();
    }

    echo $html;
}

//* end of custom post type



function ajax_get_media() {
    $args = array(
        'post_type' => 'gallery',
        'posts_per_page' => 60,
        'tax_query' => array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'gal-tax',
                'field' => 'slug',
                'terms' => $_POST['tax_slug'])
        )
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            global $post;
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            ?>
            <!-- Post Starts -->
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
            <!-- /.post -->
            <?php
        } die(); // End WHILE Loop
    } else {
        ?>
        <div <?php post_class(); ?>>
            <h1><?php _e('В данном разделе пока нет записей.'); ?></h1>
        </div><!-- /.post -->

        <?php
    }
}

add_action('wp_ajax_nopriv_get_media', 'ajax_get_media');
add_action('wp_ajax_get_media', 'ajax_get_media');
?>