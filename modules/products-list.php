<?php
$prod_q = new WP_query( array(
    'post_type' => 'product',
    'post__not_in'   => array($post->ID),

));

?>

<ul class="products">
<?php while ($prod_q->have_posts()) : $prod_q->the_post(); ?>
    <li <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('shop_catalog'); ?>
            <h3><?php the_title(); ?></h3>
        </a>
    </li>
<?php endwhile; ?>
</ul>
