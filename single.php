<?php get_header();?>
<section class="content">
    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <article <?php post_class(); ?>>
            <span class="inner">
                <h1 class="post-title"><?php the_title();?></h1>
                <div class="post-meta">
                    <span class="by"><?php the_author();?></span>
                    <span class="date"><?php the_date(); ?></span>
                    <!--<span class="time"><?php the_time(); ?></span>-->
                </div>
                <?php the_content();?>
            </span>
        </article>
        <?php endwhile; endif; ?>
    </main>
    <aside>
        <?php dynamic_sidebar('widget-2'); ?>
    </aside>
</section>
<?php get_footer();?>
