<?php

if(!isset($blogroll_posts)){
    $blogroll_posts = get_posts(array(
        'post_type' => 'post',
        'numberposts'   => get_option('posts_per_page'),
    ));
}
$i = 0;
$preview = 'large';
?>


<section class="blogroll" role="directory" id="blog">
    <main>
        <?php
        foreach($blogroll_posts as $post) : setup_postdata($post) ;

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
        <?php endforeach; ?>
    </main>
    <aside rel="alternate" role="complementary">
        <?php dynamic_sidebar('widget-2'); ?>
    </aside>
</section>
