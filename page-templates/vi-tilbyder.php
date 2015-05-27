<?php 

/*
Template name: Saml undersider til afsnit
*/

get_header();

$subpages = new WP_Query(array(
    'post_type' => 'page',
    'posts_per_page'    => -1,
    'post_parent'   => get_the_ID(),
));

?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<section class="content" role="directory" id="page">
    <main>
        <article <?php post_class(); ?>>
        <?php while ($subpages->have_posts()) : $subpages->the_post();  ?>
            <div class="subsection-anchor" id="<?php echo $post->post_name; ?>"></div>
            <section class="subsection" >
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </section>
        <?php endwhile; wp_reset_postdata();?>
        </article>
    </main>
    <aside>
        <?php dynamic_sidebar('widget-1'); ?>
    </aside>
</section>
<?php endwhile; endif; ?>
<?php get_footer();?>
