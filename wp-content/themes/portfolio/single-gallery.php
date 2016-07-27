<?php
get_header();
the_post();
?>

<div id="container">
    <div id="content">
        <div id="page-title"><?php the_title(); ?></div>
        <?php the_content(); ?>
        <div class="clear"></div>

        <div class="social_buttons">
            <div id="sb-like-vk">
                <!-- Put this div tag to the place, where the Like block will be -->
                <div id="vk_like"></div>
                <script type="text/javascript">
                    VK.Widgets.Like("vk_like", {type: "button", height: 18});
                </script>
            </div>
            <div id="sb-like-fb">
                <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdevs-crew.com.ua&amp;send=false&amp;layout=button_count&amp;width=130&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:130px; height:21px;" allowTransparency="true"></iframe>
            </div>
            <div id="sb-like-tw">
                <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ru">Твитнуть</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            <div id="sb-like-g">
                <!-- Place this tag where you want the +1 button to render. -->
                <div class="g-plusone" data-size="tall" data-annotation="inline" data-width="120"></div>

                <!-- Place this tag after the last +1 button tag. -->
                <script type="text/javascript">
                    window.___gcfg = {lang: 'ru'};

                    (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script>
            </div>
        </div>


        <div class="clear"></div>
        <script>
            jQuery(document).ready(function() {
                jQuery(".way-to-comment-title").click(function(){
                    jQuery(".way-to-comment-block").hide();
                    jQuery(".way-to-comment-title").removeClass("wtcb_active");
                    jQuery(this).addClass("wtcb_active").next().show();
                });
        
            });
        </script>
        <ul id="way-to-comment">
            <li>
                <span class="way-to-comment-title wtcb_active" id="wtc-tab1">Комментарии Vkontakte</span>
                <div class="way-to-comment-block wtcb_active_block">
                    <!-- Put this div tag to the place, where the Comments block will be -->
                    <div id="vk_comments"></div>
                    <script type="text/javascript">
                        VK.Widgets.Comments("vk_comments", {limit: 10, width: "625", attach: "*"});
                    </script>
                </div>
            </li>
            <li>
                <span class="way-to-comment-title" id="wtc-tab2">Комментарии Facebook</span>
                <div class="way-to-comment-block ">
                    <div class="fb-comments" data-href="http://devs-crew.com.ua" data-num-posts="10" data-width="625"></div>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    
                </div>
            </li>
        </ul>

    </div>
</div><!-- #container -->

<?php get_footer(); ?>
