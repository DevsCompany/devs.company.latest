<?php

$args = array(
    'post_type' => 'slider',
    'posts_per_page' => 24,
    'orderby' => 'rand'
);
$slider_images = get_posts($args);
$i = 0;
$j = 'active';

echo '<div id="myCarousel" class="carousel slide">';

echo '<ol class="carousel-indicators">';
foreach ($slider_images as $key => $slider_image) {
    echo '<li data-target="#myCarousel" data-slide-to="' . $i++ . '" class="' . $j . '"></li>';
    $j = '';
}
echo '</ol><!-- Carousel items -->';

echo '<div class="carousel-inner">';
$jj = 'active';

foreach ($slider_images as $key => $slider_image) {
    echo '<div class="' . $jj . ' item">' . get_the_post_thumbnail($slider_image->ID, 'slider') . '</div>';
    $jj = '';
}
echo '</div><!-- Carousel nav -->';
echo '<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>';
echo '<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>';

echo '</div>';

?>
