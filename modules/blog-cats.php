<ul class="blog-cat-list">

<?php $categories = get_categories(  array(
	'type'                     => 'post',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'menu_order',
	'order'                    => 'ASC',
	'hide_empty'               => 0,
	'hierarchical'             => 1,
	'exclude'                  => '1',
	'include'                  => '',
	'number'                   => '',
	'taxonomy'                 => 'category',
	'pad_counts'               => false 
    ) 
); 

foreach($categories as $cat) : 

$catbg = get_tax_meta($cat->term_id,'tax_color'); 

if($catbg !== ''){
    
    $catbg = ' style="background-color:'. $catbg .';color:white;"';
    
}
else{
    $catbg = '';
}

?>

<li>
   <a<?php echo $catbg ?> href="<?php echo get_category_link($cat->term_id) ?>">
        <?php echo $cat->name ?>
    </a>
</li>

<?php endforeach; ?>

</ul>