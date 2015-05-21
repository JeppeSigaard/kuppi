<?php get_header();?>
<section class="content content-right content-kunstner">
    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <article itemscope itemtype="https://schema.org/Person" <?php post_class(); ?>>
            <span class="inner">
                <figure>
                    <?php the_post_thumbnail('kunstner-small');?>
                </figure>
                <div class="right">
                    <h1 class="post-title" itemscope="name"><?php the_title();?></h1>
                    <?php get_template_part('modules/artist','info'); ?>
                </div>
                <div class="description" itemscope="text">
                    <?php the_content();?>
                </div>
            </span>
        </article>
        <?php get_template_part('modules/artist','products-list'); ?>
        <?php endwhile; endif; ?>
    </main>
    <aside>
        <?php get_template_part('modules/artist','list'); ?>
    </aside>
</section>
<?php get_footer();?>
