<?php

// Tilføj woo
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Fjern sortering, oversigt
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30);

// Fjern antal viste tekst
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

// Fjern Føj til kurv knap
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

// Fjern pris
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );


// Opdater loader
add_filter('woocommerce_ajax_loader_url', 'woo_custom_cart_loader');
function woo_custom_cart_loader() {
  return __(get_template_directory_uri().'/statics/spand.gif', 'woocommerce');
}

// Fjern yderligere information
add_filter('woocommerce_enable_order_notes_field', '__return_false');


// Funktion til at hente knapper til hurtigkøb
function smamo_do_quick_buy($product){
 
    ob_start();
    
    $variations = $product->get_available_variations();
    $attributes = $product->get_variation_attributes();
    
    
    foreach($variations as $var):

    $link = get_the_permalink();
    $link .= '?add-to-cart='.get_the_ID();
    $link .= '&variation_id='.$var['variation_id'];
    foreach ($attributes as $key => $val){
        $link .= '&attribute_'.$key.'='.$var['attributes']['attribute_'.$key];
        $term_tax = $key;
        $term_slug = $var['attributes']['attribute_'.$key];
    }
    $term = get_term_by('slug',$term_slug,$term_tax);
    ?>
    
    <a href="<?php echo $link ?>">
        <span class="name"><?php echo $term->name ?></span>
        <div>
            <span class="description"><?php echo $term->description ?></span>
            <?php echo $var['price_html']; ?>
        </div>
    </a>
    
    <?php 
    endforeach; 
    return ob_get_clean();
    ob_end_clean();

}



?>
