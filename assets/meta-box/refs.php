<?php 

$mb[] = array(
    'id' => 'link',
    'title' => __( 'Link', 'rwmb' ),
    'pages' => array('reference'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Link til anden side', 'rwmb' ),
            'id'    => "url",
            'type' => 'text',
            ),
    ),
);


?>