<?php
if (is_admin()){
  
    $smamo_cat_color_meta =  new Tax_Meta_Class(array(
        'id' => 'cat_color_meta_box',       
        'title' => 'Kategoriens farve',         
        'pages' => array('category'), 
        'context' => 'normal',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => false
    ));
  

  $smamo_cat_color_meta->addColor('tax_color',array('name'=> __('Kategoriens farve','tax-meta')));
    
  $smamo_cat_color_meta->Finish();
}

?>