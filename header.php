<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<html xmlns:wb="http://open.weibo.com/wb">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="baidu_union_verify" content="f47b9127430c9511016d422a0c59d2c2">
<?php $the_title = wp_title(' - ', false); if ($the_title != '') : ?>
    <title><?php echo wp_title('',false); ?> | <?php bloginfo('name'); ?></title>
<?php else : ?>
    <title><?php bloginfo('name'); ?><?php if ( $paged > 1 ) echo ( ' - page '.$paged ); ?></title>
<?php endif; ?>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://twtww.public.pbcdn.com/js/jquery.lazyload.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){$("img").lazyload({placeholder:"http://twtww.public.pbcdn.com/images/grey.gif",effect: "fadeIn"});});</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9144829" charset="UTF-8"></script>
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=3496849073" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-25652577-6']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script');
ga.type = 'text/javascript';
ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);  })();
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//wepost.me/js/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</head>
<body>
<div id="header">
	<div class="header-inner" id="top_bar" style="z-index: 999;">
	<div class="menu-home-container">
	<?php wp_nav_menu( array('container' => 'false', 'theme_location' => 'primary' ) ); ?>
	<a href="#"><h1 id="logo">应用铺子</h1></a>
	</div>
	</div>
</div>
<div id="page">
<hr />