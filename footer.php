<hr />
<div id="footer">
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way, it's our only promotion or advertising. -->
	<p>_______________________________________
	<br />
		<?php bloginfo('name'); ?> | <a href="http://wepost.me/" title="©2011-2012 wepot">©2011-2012 wepost</a>
		| RSS: <a href="<?php bloginfo('rss2_url'); ?>">entries</a> &amp; <a href="<?php bloginfo('comments_rss2_url'); ?>">comments</a>.
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>

</div>
</div>


		<?php wp_footer(); ?>


<!-- 将此呈现调用放在适当的位置 -->
<script type="text/javascript">
  window.___gcfg = {lang: 'zh-CN'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<style type="text/css">
 
 
#w2b-StoTop {-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px; width:100px;background-color: #EEEEEE;background-color: rgba(238, 238, 238, 0.6);filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#99EEEEEE',EndColorStr='#99EEEEEE');text-align:center;padding:5px;position:fixed;bottom:10px;right:100px;cursor:pointer;color:#444;text-decoration:none;}
</style>

<script type='text/javascript'>
    jQuery(document).ready(function($){
        $.fn.scrollToTop = function() {
            $(this).hide().removeAttr("href");
            if ($(window).scrollTop() != "0") {
                $(this).fadeIn("slow");
            };
            var scrollDiv = $(this);
            $(window).scroll(function() {
                if ($(window).scrollTop() == "0") {
                    $(scrollDiv).fadeOut("slow");
                } else {
                    $(scrollDiv).fadeIn("slow");
                }
            });
            $(this).click(function() {
                $("html, body").animate({scrollTop: 0}, "slow");
            });
        };
        $("#w2b-StoTop").scrollToTop();
    });
</script>
<!--
<a href='#' id='w2b-StoTop' style='display:none;'> ↑↑UPUP↑↑ </a>	
-->
<script type='text/javascript'>
jQuery(function($){
    $.fn.scrollToTop = function() {
        $(this).click(function() {
            $("html, body").animate({scrollTop: 0}, "1000");
        });
    };
    $("#top_bar").scrollToTop();
});
</script>
<!--audio src="http://radio.pbcdn.com/1.mp3" autoplay="autoplay" /-->
</body>
</html>