<?php

$i = 0;
$preview = 'large';
?>


<section class="blogroll" role="directory" id="blog">
    <main>
        <?php
        while(have_posts()) : the_post;
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
        <?php endwhile; ?>
    </main>
    <aside rel="alternate" role="complementary">
        <?php dynamic_sidebar('main-widgets'); ?>
    </aside>
</section>
