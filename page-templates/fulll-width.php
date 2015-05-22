<?php
/*
Template name: Fuld bredde
*/
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<section class="content full-width" role="directory" id="page">
    <main class="main-full">
        <article <?php post_class(); ?>>
            <h1 class="post-title"><?php the_title();?></h1>
            <?php the_content();?>
        </article>
    </main>
</section>
<?php endwhile; endif; ?>
<?php get_footer();?>
