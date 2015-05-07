
<section class="design-spinner">
    <div class="spin-left">
        <h3>Kulør på skraldet</h3>
        <a href="<?php echo esc_url(get_bloginfo('url')) ?>/shop/">Klik her</a>
        <span>Find alle designs til spand og container</span>
        <nav>
            <a href="#" class="left"></a>
            <a href="#" class="right"></a>
        </nav>
    </div>
    <div class="designs">
    <?php foreach ($products as $prod) : ?>
    <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($prod->ID), 'full' );?>
    <div class="design design-<?php echo $prod->ID ?>" style="background-image:url(<?php echo $image_url[0]; ?>);"></div>
    <?php endforeach; ?>
    </div>
</section>
