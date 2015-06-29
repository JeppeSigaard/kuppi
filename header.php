<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(' · ', true, 'right'); ?></title>
    <?php wp_head();?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('url') ?>/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('url') ?>/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('url') ?>/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('url') ?>/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('url') ?>/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('url') ?>/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('url') ?>/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('url') ?>/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="<?php bloginfo('url') ?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo('url') ?>/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php bloginfo('url') ?>/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php bloginfo('url') ?>/manifest.json">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-TileImage" content="<?php bloginfo('url') ?>/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script async>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-64249784-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body <?php body_class(); ?>>
<script>kuppiLoadPage = setTimeout(function(){document.getElementsByTagName('body')[0].className+=" loading-screen";},400);</script>
<?php
$nav_args = array(
	'theme_location'  => 'header-menu',
	'container'       => false,
	'menu_class'      => false,
	'echo'            => true,
	'fallback_cb'     => '',
	'items_wrap'      => '%3$s',
	'depth'           => 0,

);
?>
<header role="navigation">
    <?php if (is_front_page()){get_template_part('modules/front','top');}?>
    <nav>
        <a id="home-btn" href="<?php bloginfo('url') ?>"></a>
        <ul>
            <?php wp_nav_menu($nav_args); ?>
        </ul>
        <a href="#" class="menu-toggle">
            <?php include get_template_directory().'/statics/menu.svg'; ?>
        </a>
        <?php global $woocommerce; $with_hearts = ( sizeof( $woocommerce->cart->cart_contents) > 0 ) ? ' has-items': ' empty'; ?>
        <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="menu-basket<?php echo $with_hearts ?>">
            
        </a>
    </nav>
</header>



