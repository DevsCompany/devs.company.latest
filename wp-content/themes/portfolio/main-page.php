<?php
/**
 * Template Name: Главная страница!
 */
get_header();
?>

<div id="slider-block">
    <div id="sb-inside">
        <div id="sb-i-left">
            <span id="sbil-top">Новые работы для вас >></span>
            <br />
            <span id="sbil-bottom">идеальные решения для вашего бизнеса</span>
            <div id="sbil-buttons">
                <a href="<?php echo get_bloginfo('home') ?>/portfolio" id="more-works">Больше работ</a>
                <a href="<?php echo get_bloginfo('home') ?>/firmennyj-stil" id="continiud">Подробнее</a>
            </div>
        </div>
        <div id="sb-i-right">
            <?php include 'slider.php'; ?>
        </div>
    </div>
</div>

<div id="container">
    <div id="content">
        <div id="main-page-content">
            <ul>
                <?php
                $args = array(
                    'orderby' => 'post_date',
                    'post_type' => 'gallery',
                    'post_status' => 'publish',
                    'orderby' => 'rand',
                    'posts_per_page' => 6);
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
                        <a href="<?php echo get_permalink(); ?>" class="pp-title"><?php the_title(); ?></a>
                        <div class="pp-excerpt">
                            <?php the_terms($post->ID, 'gal-tax'); ?>
                        </div>
                        <a class="pp-link-img" href="<?php echo get_permalink(); ?>"></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div><!-- #container -->

<?php get_footer(); ?>
