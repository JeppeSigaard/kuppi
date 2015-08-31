<?php get_header();?>
<section class="blogroll content content-right">
    <main>
        <ul class="products-list">
        <?php while(have_posts()): the_post(); if ($post->ID !== 518) : ?>
           <li <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('shop_catalog') ?>
                    <h3><?php the_title(); ?></h3>
                </a>
           </li>
        <?php endif; endwhile; ?>
        </ul>
    </main>
    <aside>
        <?php get_template_part('modules/product','categories'); ?>
    </aside>
</section>

<?php get_footer();?>
