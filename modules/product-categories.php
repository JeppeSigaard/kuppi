<?php

$queried_object = get_queried_object();
if((isset($queried_object->term_id))){
    $current_category_id = $queried_object->term_id;
}
else{
    $categories = get_the_terms(get_the_ID(),'product_cat');
    $current_category_id = ($queried_object->post_type !== 'page') ? $categories[0]->term_id : 0;
}


$args = array(
    'taxonomy'     => 'product_cat',
    'orderby'      => 'name',
    'show_count'   => 0,
    'pad_counts'   => 0,
    'hierarchical' => 1,
    'title_li'     => '',
    'hide_empty'   => 1
);

$all_categories = get_categories( $args );
?>
<div class="product-categories">
    <div class="inner">
        <h3>Designs</h3>
        <ul>
            <?php foreach ($all_categories as $cat) : $category_id = $cat->term_id; $current = ($category_id == $current_category_id) ? ' current': '';?>
            <li class="product-cat cat-<?php echo $cat->term_id . $current; ?>">
                <a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>"><?php echo  $cat->name; ?></a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>
