<?php

add_theme_support('widgets');

add_action( 'widgets_init', 'smartmonkey_widgets_init' );
function smartmonkey_widgets_init(){

    // Main Widgets
    register_sidebar( array (
    'name' => __( 'Standard widgetområde for sider', 'smamo' ),
    'id' => 'widget-1',
    'before_widget' => '<div class="sidebar-container">',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="sidebar-title">',
    'after_title' => '</h3>',
    ) );
    
    // Sekundær Widgets
    register_sidebar( array (
    'name' => __( 'Widgetområde til blog', 'smamo' ),
    'id' => 'widget-2',
    'before_widget' => '<div class="sidebar-container">',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="sidebar-title">',
    'after_title' => '</h3>',
    ) );
    
    // Tertiær Widgets
    register_sidebar( array (
    'name' => __( 'Widgetområde til shop', 'smamo' ),
    'id' => 'widget-3',
    'before_widget' => '<div class="sidebar-container">',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="sidebar-title">',
    'after_title' => '</h3>',
    ) );
    
    
    // Footer Widgets
    register_sidebar( array (
    'name' => __( 'Footerens widgetområde', 'smamo' ),
    'id' => 'widget-footer',
    'before_widget' => '<div class="sidebar-container">',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="sidebar-title">',
    'after_title' => '</h3>',
    ) );
    

}



// Fjern standardwidgets
function unregister_default_widgets() {
     unregister_widget('WP_Widget_Pages');
     unregister_widget('WP_Widget_Calendar');
     unregister_widget('WP_Widget_Archives');
     unregister_widget('WP_Widget_Links');
     unregister_widget('WP_Widget_Meta');
     unregister_widget('WP_Widget_Search');
     // unregister_widget('WP_Widget_Text');
     unregister_widget('WP_Widget_Categories');
     unregister_widget('WP_Widget_Recent_Posts');
     unregister_widget('WP_Widget_Recent_Comments');
     unregister_widget('WP_Widget_RSS');
     unregister_widget('WP_Widget_Tag_Cloud');
     //unregister_widget('WP_Nav_Menu_Widget');
     unregister_widget('Twenty_Eleven_Ephemera_Widget');
 }
 add_action('widgets_init', 'unregister_default_widgets', 11);

?>
