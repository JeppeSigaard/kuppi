<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
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
<header role="directory">
    <?php if (is_front_page()) : ?>
    <section class="front-banner" role="banner">
        <div class="inner">
            <h1 class="front-logo">
                <?php echo esc_attr(get_bloginfo('name')); ?>
            </h1>
            <h2 class="front-tag">
                <?php echo esc_attr(get_bloginfo('description')); ?>
            </h2>
            <div class="front-bins">

            </div>
        </div>
    </section>
    <?php endif; ?>

    <nav>
       <ul>
           <li id="menu-item-home" class="menu-item">
              <a class="home" href="<?php echo esc_url(get_bloginfo('url')); ?>">
                <?php echo esc_attr(get_bloginfo('name')); ?>
            </a>
           </li>
           <?php wp_nav_menu($nav_args); ?>
       </ul>
    </nav>
</header>
