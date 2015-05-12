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
?>
