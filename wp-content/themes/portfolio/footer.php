</div><!-- #main -->

<div id="footer">
    <div id="lang-bg">
        <div id="lang">
            <ul>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/wordpress-icon.png"></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/php-icon.png"></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/css-icon.png"></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/java-icon.png"></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/mysql-icon.png"></li>
            </ul>

<!--        <div id="social-text">МЫ В СОЦ. СЕТЯХ</div>
            <div id="social-buttons">
                <a href="http://www.facebook.com/" class="soc-fb"></a>
                <a href="https://twitter.com/" class="soc-tw"></a>
                <a href="https://plus.google.com/" class="soc-g"></a>
                <a href="http://www.youtube.com/" class="soc-yt"></a>
                <a href="http://feeds.feedburner.com/DewsCrew" class="soc-rss"></a>
            </div>-->
        </div>
    </div><!-- social-bg -->

    <div class="clear"></div>
    <script type="text/javascript">
        jQuery(function() {
            jQuery("#ps-center").jCarouselLite({
                btnNext: "#ps-next",
                btnPrev: "#ps-prev",
                horisontal: true,
                visible: 1,
                speed:1000
            });
        });
    </script>
    <div id="footer-widgets">
        <div id="partners-slide">
            <div id="ps-title">НАШИ ПАРТНЕРЫ</div>
            <div class="clear"></div>
            <div id="ps-prev"></div>
            <div id="ps-center">
                <ul>
                    <?php get_partners(); ?>
                </ul>
            </div>
            <div id="ps-next"></div>
        </div>
        <div id="footer-counts">
            <!--LiveInternet counter-->
            <script type="text/javascript"><!--
            document.write("<a href='http://www.liveinternet.ru/click' "+
            "target=_blank><img src='//counter.yadro.ru/hit?t14.1;r"+
            escape(document.referrer)+((typeof(screen)=="undefined")?"":
            ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
            screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
            ";"+Math.random()+
            "' alt='' title='LiveInternet: показано число просмотров за 24"+
            " часа, посетителей за 24 часа и за сегодня' "+
            "border='0' width='88' height='31'><\/a>")
            //--></script>
            <!--/LiveInternet-->
        </div>
        <div id="contact-us">
            <div id="contact-us-title">СВЯЖИТЕСЬ С НАМИ</div>
            <div id="cu-skype">so_seductive_aka_dizel</div>
            <div class="cu-telephone">(+38) 093 766-57-81</div>
        </div>  
    </div><!-- footer-widgets -->
    

</div><!-- #footer -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>
</body>
</html>
