<?php get_header();?>
<section class="content">
    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <article <?php post_class(); ?>>
            <figure>
                <?php the_post_thumbnail();?>
            </figure>
            <span class="inner">
                <h1 class="post-title"><?php the_title();?></h1>
                <span class="post-meta"><?php the_author();?></span>
                <?php the_content();?>
            </span>
        </article>
        <?php endwhile; endif; ?>
    </main>
</section>
<?php get_footer();?>
