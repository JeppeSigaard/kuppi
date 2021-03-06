<?php

add_action( 'after_setup_theme', 'smamo_image_setup' );
function smamo_image_setup() {

    add_image_size( 'sixteen-nine', 1600, 900, true );
    add_image_size( 'preview-large', 640, 315, true );
    add_image_size( 'preview-medium', 320, 200, true );
    add_image_size( 'preview-small', 200, 125, true );
    add_image_size( 'kunstner-small', 180, 200, true );
    
    add_image_size( 'preview-narrow', 70, 120,true);
    add_image_size( 'preview-wider', 140, 120,true);

}

?>
