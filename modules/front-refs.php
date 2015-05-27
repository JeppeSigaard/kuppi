
<?php 

$referencer = new WP_query(array(

    'post_type' => 'reference',
    'posts_per_page'    => -1,

));

?>

   <section class="referencer" id="referencer">
   <div class="inner">
        <ul>



            <?php if($referencer->have_posts()) : while($referencer->have_posts()) : $referencer->the_post(); ?>
            <li>
                <a href="<?php echo esc_url(get_post_meta(get_the_ID(),'url',true)); ?>" target="blank">
                    <?php the_post_thumbnail(); ?>
                </a>
            </li>
            <?php endwhile; endif; ?>
        </ul>
    </div>
</section>