<?php
add_action( 'init', 'my_new_default_post_type', 1 );
function my_new_default_post_type() {

    register_post_type( 'post', array(
        'rewrite' => array( 'slug' => 'blog/post' ),
        'query_var' => false,

    ) );
}


?>
