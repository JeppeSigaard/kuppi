<?php

get_header();

?>


<section class="blogroll" role="directory" id="blog">
    <main>
        <?php

        if(have_posts()) : while(have_posts()): the_post();

        $i++;
        if($i >= 2){$preview = 'medium';}
        if($i >= 3){$preview = 'small';}

        ?>
        <a role="article" class="preview preview-<?php echo $preview ?>" id="post-<?php echo $post->ID ?>" href="<?php echo the_permalink(); ?>">
           <div class="inner">
                <figure>
                    <?php the_post_thumbnail('preview-'.$preview); ?>
                </figure>
                <div class="desc">
                    <h3><?php the_title() ?></h3>
                    <span>Læs mere</span>
                </div>
            </div>
        </a>
        <?php endwhile; endif; ?>
    </main>
    <aside rel="alternate" role="complementary">
       <?php get_template_part('modules/blog','cats');?>
       <?php dynamic_sidebar('widget-2'); ?>
    </aside>
</section>
<?php get_footer();?>
