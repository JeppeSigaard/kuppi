<?php

add_action( 'init', 'smamo_add_artists' );

function smamo_add_artists() {
	register_post_type( 'kunstner', array(

        'menu_icon' 		 => 'dashicons-businessman',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'kunstner' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(

            'name'               => _x( 'Kunstnere', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Kunstner', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Kunstnere', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Kunstnere', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'knustner', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny knustner', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se knustner', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find knustner', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny kunstner.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}

?>
