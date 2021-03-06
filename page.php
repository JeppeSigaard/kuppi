<?php get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<section class="content" role="directory" id="page">
    <main>
        <article <?php post_class(); ?>>
            <h1 class="post-title"><?php the_title();?></h1>
            <?php the_content();?>
        </article>
    </main>
    <aside>
        <?php dynamic_sidebar('widget-1'); ?>
    </aside>
</section>
<?php endwhile; endif; ?>
<?php get_footer();?>
