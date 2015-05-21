<?php
$prod_q = new WP_query( array(
    'post_type' => 'product',
    'post__not_in'   => array($post->ID),
    'meta_key'  => 'kunstner',
    'meta_value'    => get_the_ID(),

));

$artist_name = get_post_meta(get_the_ID(),'fname',true);
if($artist_name == ''){
    $artist_name = get_the_title();
}

?>
<?php if ($prod_q->have_posts()) : ?>
<h3 class="artist-products"><?php echo $artist_name ?>'s designs til spand og container</h3>
<ul class="products-list">
<?php while ($prod_q->have_posts()) : $prod_q->the_post(); ?>
    <li <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('shop_catalog'); ?>
            <h3><?php the_title(); ?></h3>
        </a>
    </li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
