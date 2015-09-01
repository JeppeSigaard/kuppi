<?php 


// vi skal ikke bruger header, men WP's funktionsbibliotek
define('WP_USE_THEMES', false); 

// Vores retur encodes til json, så det er nemt at bruge i javascript.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: text/html');

// Hent wp-load, så vi får mulighed for at bruge wordpress' funktionsarkiv
require '../../../../wp-load.php';


header('location:'.get_bloginfo('url').'/checkout?add-to-cart=551');

?>