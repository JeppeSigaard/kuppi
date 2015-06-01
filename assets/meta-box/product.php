<?php

$mb[] = array(
    'id' => 'add_artist',
    'title' => __( 'Kunstner', 'rwmb' ),
    'pages' => array('product'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Tilføj en kunstner', 'rwmb' ),
            'id'    => "kunstner",
            'type' => 'post',
            'post_type' => 'kunstner',
            'std'     => __('(ingen)', 'smamo' ),
            'placeholder' => 'vælg en kunstner',
            'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
            ),
        ),
    ),
);


$mb[] = array(
    'id' => 'feature',
    'title' => __( 'Tilføj til forsiden', 'rwmb' ),
    'pages' => array('product'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'desc'  => __('Vis denne vare på forsiden','smamo'),
            'id'    => "show_on_front_page",
            'type' => 'checkbox',
            'std'   => '0',
            ),
    ),
);

?>
