<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title>
            <?php
            global $page, $paged;
            wp_title('|', true, 'right');
            bloginfo('name');
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";
            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf(__('Page %s'), max($paged, $page));
            ?>
        </title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic-ext,greek-ext,latin-ext,cyrillic,greek' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic&subset=latin,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese,cyrillic' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Marck+Script&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css' />

        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jcarousellite.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
        <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap.css" rel='stylesheet' type='text/css' />
        
        <!-- Put this script tag to the <head> of your page -->
        <script type="text/javascript" src="//vk.com/js/api/openapi.js?59"></script>

        <script type="text/javascript">
            VK.init({apiId: 3182451, onlyWidgets: true});
        </script>
        <script>
            jQuery('.carousel').carousel({
                interval: 2000
            });
            jQuery(document).ready(function() {
                setTimeout(function() {
                    jQuery(".carousel-control.right").click();
                }, 3000);
            });
        </script>

    </head>

    <body <?php body_class(); ?>>
        <script>
            jQuery(document).ready(function(){
                jQuery('.menu-main-menu-container > ul > li').mouseover(
                function (e) {
                    jQuery('.menu-main-menu-container > ul > li').css({'border-bottom': 'none', 'opacity': '0.4'});
                    jQuery(this).css({'border-bottom': '5px solid #0091FF', 'opacity': '1'});
                }
            ).mouseout(
                function () {
                    jQuery('.menu-main-menu-container > ul > li').css({'border-bottom': 'none', 'opacity': '0.4'});
                    jQuery('.menu-main-menu-container > ul > li.current-menu-item').css({'border-bottom': '5px solid #0091FF', 'opacity': '1'});
                }
            );
            });
        </script>
        <div id="header">
            <div id="top">
                <a href="<?php echo get_bloginfo('home'); ?>" id="logotype"></a>
                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            </div><!-- top -->
        </div>