<?php
$art_q = new WP_query( array(
    'post_type' => 'kunstner',
));

?>

<div class="artist-list">
    <div class="inner">
        <h3>Kunstnere</h3>
        <ul>
       <?php while ($art_q->have_posts()) : $art_q->the_post(); ?>
            <li class="art-name arti-<?php echo the_ID() ?>">
                <a href="<?php the_permalink() ?>"><?php echo  the_title(); ?></a>
            </li>
        <?php endwhile; ?>
        </ul>
    </div>
</div>
