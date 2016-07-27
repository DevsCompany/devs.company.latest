<?php
/*
 * Template Name: Контакты
 */
get_header(); the_post(); ?>

<div id="container">
    <div id="content">
        <div id="page-title"><?php the_title(); ?></div>
        <div class="contacts-page-text">
            <?php the_content(); ?>
        </div>
        
        <div class="contacts-page-form">
            <h3><span style="color: #1683d9;"><strong>Обратная связь:</strong></span></h3>
            <?php echo do_shortcode('[contact-form-7 id="207" title="Форма для контакта 1"]'); ?>
        </div>
        <div class="clear"></div>
    </div>
</div><!-- #container -->

<?php get_footer(); ?>
