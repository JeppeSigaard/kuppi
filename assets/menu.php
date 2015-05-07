<?php

function register_menu() {
  register_nav_menu('header-menu',__( 'Hovedmenu' ));
}
add_action( 'init', 'register_menu' );

?>
