<?php get_header();?>
<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="single-bg" style="background-image:url(<?php echo $image_url[0] ?>);"></div>
<?php while(have_posts()) : the_post(); ?>
<section class="product-heading">
    <div class="inner content content-right">
        <main class="main-heading">
            <div class="main-heading-bins">
                <div class="bin bin-small">
                    <div class="designs">
                        <div class="design design-<?php the_ID() ?>" style="background-image: url(<?php echo $image_url[0] ?>);"></div>
                    </div>
                </div>
                <div class="bin bin-large">
                    <div class="designs">
                        <div class="design design-<?php the_ID() ?>" style="background-image: url(<?php echo $image_url[0] ?>);"></div>
                    </div>
                </div>
            </div>
            <h1 class="main-heading-title"><?php the_title(); ?></h1>
            <div class="main-heading-buttons">
                <a href="#"></a>
            </div>
            <nav class="main-heading-nav">
                <?php previous_post_link('%link', '', FALSE, ' ', 'product_cat'); ?>
                <?php if(get_previous_post_link() == '') : ?>
                <a href="#" class="disabled" rel="prev"></a>
                <?php endif; ?>
                <?php next_post_link('%link', '', FALSE, ' ', 'product_cat');?>
                <?php if(get_next_post_link() == '') : ?>
                <a href="#" class="disabled" rel="next"></a>
                <?php endif; ?>
            </nav>
        </main>
    </div>
</section>

<section class="product-body">
    <div class="inner content content-right">
        <main <?php post_class(); ?>>
            <h2 class="main-content-title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php get_template_part('modules/products','list');?>
        </main>

        <aside>
            <?php echo get_template_part('modules/product','categories'); ?>
        </aside>
    </div>
</section>
<?php endwhile; ?>
<?php get_footer();?>
