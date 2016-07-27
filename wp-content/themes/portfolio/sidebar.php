<script>
    jQuery(document).ready(function(){
        jQuery('#lsb-menu ul li').mouseover(
        function (r) {
            if(!jQuery(this).hasClass('active')) {
                jQuery('#lsb-menu ul li').addClass('empty-lsb-menu-item');
                jQuery('#lsb-menu ul li.active').addClass('empty-active-lsb-menu-item');
                jQuery('#lsb-menu ul li.active a').css({'color': '#1784DA'});
                jQuery(this).addClass('active-lsb-menu-item');
                //jQuery(this).css({'background': 'url(./images/lsb-item-hover.png) no-repeat'});
            }
        }
    ).mouseout(
        function () {
            jQuery('#lsb-menu ul li').addClass('empty-lsb-menu-item');
            jQuery('#lsb-menu ul li.active').removeClass('empty-active-lsb-menu-item');
            jQuery('#lsb-menu ul li.active').addClass('active-lsb-menu-item');
            jQuery('#lsb-menu ul li.active a').css({'color': '#FFFFFF'});
            //jQuery('#lsb-menu ul li.active').css({'background': 'url(./images/lsb-item-hover.png) no-repeat'});
        }
    );
    });
</script>


<div id="leftsidebar-title">НАШИ УСЛУГИ</div>
<div id="lsb-top"></div>
<div id="lsb-center">
    <div id="lsb-menu">
        <ul>
            <li id="lsbm-1item" class="<?php echo is_page('Создание и разработка сайтов') ? 'active' : ''; ?>">
                <div></div><a href="<?php echo get_bloginfo('home'); ?>/?page_id=186">РАЗРАБОТКА</a>
            </li>
            <li id="lsbm-2item" class="<?php echo is_page('Разработка дизайна сайтов') ? 'active' : ''; ?>">
                <div></div><a href="<?php echo get_bloginfo('home'); ?>/?page_id=184">ДИЗАЙН</a>
            </li>
            <li id="lsbm-3item" class="<?php echo is_page('Фирменный стиль') ? 'active' : ''; ?>">
                <div></div><a href="<?php echo get_bloginfo('home'); ?>/?page_id=188">ФИРМЕННЫЙ<br />СТИЛЬ</a>
            </li>
            <li id="lsbm-4item" class="<?php echo is_page('Поддержка') ? 'active' : ''; ?>">
                <div></div><a href="<?php echo get_bloginfo('home'); ?>/?page_id=190">ПОДДЕРЖКА</a>
            </li>
            <li id="lsbm-5item" class="<?php echo is_page('Продвижение') ? 'active' : ''; ?>">
                <div></div><a href="<?php echo get_bloginfo('home'); ?>/?page_id=194">ПРОДВИЖЕНИЕ</a>
            </li>
        </ul>
    </div>
</div>
<div id="lsb-bottom"></div>

<div class="clear"></div>

<a id="lsb-contact_b" class="inline cboxElement" href="#inline_content">Написать<br />письмо</a>

<div style="display:none">
    <div id="inline_content" style="padding:10px 10px 50px 10px; height: 350px; background:#fff;">
        <?php dynamic_sidebar( 'sidebar' ); ?>
    </div>
</div>