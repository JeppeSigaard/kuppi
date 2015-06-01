<?php

$products = get_posts(array(
    'post_type' => 'product',
    'numberposts'   => 24,
    'orderby'   => 'RAND',
    'meta_key'  => '_featured',
    'meta_value'    => 'yes',
));


?>

<section class="design-spinner">
    <div class="spin-left">
        <h3>Kulør på skraldet</h3>
        <a class="click-here" href="<?php echo esc_url(get_bloginfo('url')) ?>/shop/">Klik her</a>
        <span>Find alle designs til spand og container</span>
        <nav>
            <a href="#" class="left"></a>
            <a href="#" class="right"></a>
        </nav>
    </div>
    <div class="designs">
    <?php $i = 0; foreach ($products as $prod) : ?>
    <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($prod->ID), 'sixteen-nine' );?>
    <?php $i++; if($i == 1) : ?> 
    <div data-title="<?php $prod->post_title ?>" data-url="<?php echo get_the_permalink($prod->ID); ?>" class="design design-<?php echo $prod->ID ?>" style="background-image:url(<?php echo $image_url[0]; ?>);"></div>
    <?php else : ?>
    <div data-title="<?php echo $prod->post_title ?>" data-url="<?php echo get_the_permalink($prod->ID); ?>" class="design design-<?php echo $prod->ID ?> lazy" data-bg-image="<?php echo $image_url[0]; ?>"></div>
    <?php endif; endforeach; ?>
    </div>
</section>
