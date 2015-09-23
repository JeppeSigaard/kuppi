<?php

// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
    //unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
    //unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
    //unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
    return $enqueue_styles;
}

add_action('wp_enqueue_scripts','smamo_do_styles');
function smamo_do_styles(){


    wp_enqueue_style( 'oswald', '//fonts.googleapis.com/css?family=Oswald:400,300', false, null, 'all' );
    wp_enqueue_style( 'covered-by-your-grace', '//fonts.googleapis.com/css?family=Covered+By+Your+Grace', false, null, 'all' );
    wp_enqueue_style('dashicons');
    wp_enqueue_style( 'main', get_template_directory_uri().'/style/style.css?v=2', false, null, 'all' );
    wp_register_style( 'vores-skole', get_template_directory_uri().'/style/pages/vores-skole/main.css?v=2', false, null, 'all' );
    wp_register_style( 'vores-skole-lato', '//fonts.googleapis.com/css?family=Lato:300,400,700', false, null, 'all' );
    
    
    if(is_page_template('page-templates/vores-skole.php')){
        wp_enqueue_style('vores-skole');
        wp_enqueue_style('vores-skole-lato');
    }


}
?>