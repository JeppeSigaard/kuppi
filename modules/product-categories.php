<?php

$args = array(
    'taxonomy'     => 'product_cat',
    'orderby'      => 'name',
    'show_count'   => 0,
    'pad_counts'   => 0,
    'hierarchical' => 1,
    'title_li'     => '',
    'hide_empty'   => 0
);

$all_categories = get_categories( $args );
?>
<div class="product-categories">
    <div class="inner">
        <h3>Designs</h3>
        <ul>
        <?php foreach ($all_categories as $cat) : $category_id = $cat->term_id; ?>
            <li class="product-cat cat-<?php echo $cat->name ?>">
                <a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>"><?php echo  $cat->name; ?></a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>
