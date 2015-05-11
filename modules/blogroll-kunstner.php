<?php

if(!isset($blogroll_posts)){
    $blogroll_posts = get_posts(array(
        'post_type' => 'kunstner',
        'numberposts'   => -1,
    ));
}
$i = 0;
$preview = 'small';
?>


<section class="blogroll" role="directory" id="blog">
    <main>
        <?php
        foreach($blogroll_posts as $post) : setup_postdata($post) ;

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
        <?php dynamic_sidebar('main-widgets'); ?>
    </aside>
</section>
