<?php

$mb[] = array(
    'id' => 'internet',
    'title' => __( 'Webadresser', 'rwmb' ),
    'pages' => array('kunstner'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Hjemmeside', 'rwmb' ),
            'id'    => "web",
            'type' => 'text',
            ),

        array(
            'name'  => __( 'Facebook', 'rwmb' ),
            'id'    => "facebook",
            'type' => 'text',
            ),

        array(
            'name'  => __( 'Twitter', 'rwmb' ),
            'id'    => "twitter",
            'type' => 'text',
            ),

        array(
            'name'  => __( 'Instagram', 'rwmb' ),
            'id'    => "instagram",
            'type' => 'text',
            ),

        array(
            'name'  => __( 'Pinterest', 'rwmb' ),
            'id'    => "pinterest",
            'type' => 'text',
            ),
    ),
);

$mb[] = array(
    'id' => 'kontaktoplysninger',
    'title' => __( 'Kontaktoplysninger', 'rwmb' ),
    'pages' => array('kunstner'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(


        array(
            'name'  => __( 'Fornavn', 'rwmb' ),
            'id'    => "fname",
            'type' => 'text',
        ),

        array(
            'name'  => __( 'Efternavn', 'rwmb' ),
            'id'    => "lname",
            'type' => 'text',
        ),

        array(
            'name'  => __( 'By', 'rwmb' ),
            'id'    => "by",
            'type' => 'text',
        ),
    )

);

?>
