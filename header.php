<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(true,' · ', 'right'); ?></title>
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



