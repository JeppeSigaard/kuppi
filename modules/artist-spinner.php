
<?php

$artists = get_posts(array(
    'post_type' => 'kunstner',
    'numberposts'   => -1,
));

?>

<section class="artist-spinner">
    <div class="artists">
    <?php foreach ($artists as $artist) : ?>
    <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($artist->ID), 'full' );?>
    <a href="<?php echo get_the_permalink($artist->ID) ?>" class="artist" style="background-image:url(<?php echo $image_url[0] ?>);">
    </a>

    <?php endforeach; ?>
        <nav>
            <a href="#" class="left"></a>
            <a href="#" class="right"></a>
        </nav>
    </div>
    <div class="artists-heading">
        <h3>Mød dem der dekorerer skraldet</h3>
        <a href="<?php echo esc_url(get_bloginfo('url')) ?>/kunstnere/">Kunstnere</a>
        <span>Kulør der gør en forskel</span>
    </div>
</section>
