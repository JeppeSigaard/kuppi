<?php get_header();?>
<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="single-bg" style="background-image:url(<?php echo $image_url[0] ?>);"></div>
<section class="content content-right">
    <?php while(have_posts()) : the_post(); ?>
    <main <?php post_class(); ?>>
    </main>
    <?php endwhile; ?>
    <aside>
        <?php echo get_template_part('modules/product','categories'); ?>
    </aside>
</section>

<?php get_footer();?>
