<?php

add_action('wp_enqueue_scripts','smamo_do_scripts');
function smamo_do_scripts(){


    if( !is_admin()){
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"), false, null, true);
        wp_enqueue_script('jquery');

        wp_enqueue_script('kuppi',get_template_directory_uri().'/js/main.min.js',array('jquery'),null,true);
        
        wp_register_script('vores-skole',get_template_directory_uri().'/js/pages/vores-skole.min.js',array('jquery'),null,true);
    
    if(is_page_template('page-templates/vores-skole.php')){
        wp_enqueue_script('vores-skole');
    }
    }


}

?>
