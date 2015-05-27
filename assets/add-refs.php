<?php 

add_action( 'init', 'smamo_add_refs' );

function smamo_add_refs() {
	register_post_type( 'reference', array(
		
        'menu_icon' 		 => 'dashicons-format-chat',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'reference' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Referencer', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Reference', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Referencer', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Referencer', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'reference', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny reference', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se reference', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find reference', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny reference.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}


?>