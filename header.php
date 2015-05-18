<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(true,' · ', 'right'); ?></title>
</head>
<body <?php body_class(); ?>>
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
    </nav>
</header>
