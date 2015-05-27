<?php

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    // Your boxes or requires here
    require(get_template_directory().'/assets/meta-box/artist.php');
    require(get_template_directory().'/assets/meta-box/product.php');
    require(get_template_directory().'/assets/meta-box/refs.php');


return $mb;

}




?>
