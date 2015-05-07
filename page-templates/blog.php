<?php
/* Template name: Blog */

get_header();

$posts = get_posts(array(
    'post_type' => 'post',
    'numberposts'   => -1,
));


?>

<main>
<?php foreach($posts as $post) : setup_postdata($post);?>
<div>
<?php the_title(); ?>
<?php the_post_thumbnail();?>
<?php the_excerpt(); ?>
</div>
<?php endforeach;?>
</main>

<aside>

</aside>

<?php get_footer();?>
