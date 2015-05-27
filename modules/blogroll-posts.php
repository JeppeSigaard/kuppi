<?php 

$custom_query_args = array(
    'post_type' => 'post',
    'posts_per_page'   => get_option('posts_per_page'), 
);

$i = 0;
$preview = 'large';

$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;


$custom_query = new WP_Query( $custom_query_args );


$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $custom_query;
?>
<section class="blogroll" role="directory" id="blog">
    <main>

<?php 
if ( $custom_query->have_posts() ) :
    while ( $custom_query->have_posts() ) :
        $custom_query->the_post();
        
        $i++;
        if($i >= 2){$preview = 'medium';}
        if($i >= 3){$preview = 'small';}

        ?>
        <a role="article" class="preview preview-<?php echo $preview ?>" id="post-<?php the_ID() ?>" href="<?php the_permalink(); ?>">
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
   <?php endwhile; endif;?>
<div class="blog-next-prev-link">
    <div class="inner"><?php previous_posts_link('<span class="dashicons dashicons-arrow-left-alt2"></span>'); ?></div>
    <div class="inner"><?php next_posts_link('<span class="dashicons dashicons-arrow-right-alt2"></span>'); ?></div>
</div>

<?php wp_reset_postdata(); ?>
</main>
    <aside rel="alternate" role="complementary">
        <?php get_template_part('modules/blog','cats');?>
        <?php dynamic_sidebar('widget-2'); ?>
    </aside>
</section>
<?php 
$wp_query = NULL;
$wp_query = $temp_query; 
?>
