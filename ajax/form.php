<?php

// vi skal ikke bruger header, men WP's funktionsbibliotek
define('WP_USE_THEMES', false);
//define('WP_DEBUG', false);

// Vores retur encodes til json, så det er nemt at bruge i javascript.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: application/json');

// Hent wp-load, så vi får mulighed for at bruge wordpress' funktionsarkiv
require '../../../../wp-load.php';

// Klargør response array til senere json_encode();
$response = array();

// Superescapet vars [ternaries, yay!]
$name = (isset($_POST['name']) && !empty($_POST['name'])) 
    ? wp_strip_all_tags($_POST['name']) 
    : false ;

$email = (isset($_POST['email']) && !empty($_POST['email'])) 
    ? wp_strip_all_tags($_POST['email']) 
    : false ;

$password = (isset($_POST['password']) && !empty($_POST['password'])) 
    ? wp_strip_all_tags($_POST['password']) 
    : false ;

$product_id = (isset($_POST['productId']) && !empty($_POST['productId'])) 
    ? wp_strip_all_tags($_POST['productId']) 
    : false ;

$description = (isset($_POST['description']) && !empty($_POST['description'])) 
    ? wp_strip_all_tags($_POST['description']) 
    : false ;


/*----------------------*/
/* Eksisterende brugerr */
/*----------------------*/

if(is_user_logged_in()){
    $existing_user = wp_get_current_user();
    
    $name = $existing_user->display_name;
    $email = $existing_user->email;
    $user = $existing_user->ID;
    
    if(!$product_id){
        $response['error'] = 'Noget gik galt, prøv venligst igen.';
        echo json_encode($response);
        exit;
    }
    
    if(!$description){
        $response['error'] = 'Beskriv dine ønsker. Du kan bruge så få eller så mange ord du har lyst til.';
        echo json_encode($response);
        exit;
    }
    
    
}

/*-----------*/
/* Ny bruger */
/*-----------*/

// Indtast navn
elseif(!$name){$response['error'] = 'Angiv et navn';}

// Indtast korrekt email
elseif(!$email || !is_email($email)){$response['error'] = 'Angiv en gyldig emailadresse';}

// Indtast et password
elseif(!$password){$response['error'] = 'Password <strong>skal</strong> angives og bruges til at oprette en support-ticket.';}

// produktid mangler (systemfejl)
elseif(!$product_id){$response['error'] = 'Noget gik galt, prøv venligst igen.';}

// Indtast beskrivelse
elseif(!$description){$response['error'] = 'Beskriv dine ønsker. Du kan bruge så få eller så mange ord du har lyst til.';}

/*------------------------------------*/
/* SUCCESS: opret bruger og send mail */
/*------------------------------------*/
else{
    
    
    $user = wp_create_user($name, $password, $email);
    
    // Hvis fejl, returner og exit.
    if(is_wp_error($user)){
        
        $response['error'] = $user->get_error_message();
        echo json_encode($response);
        exit;
    
    }
    
    // opdater rolle
    $u = new WP_User( $user );
    $u->add_role('customer');
    
    $login = wp_signon(array(
        'user_login' => $name,
        'user_password' => $password,
    ));
    
    // Hvis fejl, returner og exit.
    if(is_wp_error($login)){
        
        $response['error'] = $login->get_error_message();
        echo json_encode($response);
        exit;
    
    }
}
    
// OPret ny ordre   
$new_order = wp_insert_post(array(

    'post_type' => 'shop_order',
    'post_status' => 'wc-processing',
    'post_author' => $user,


),true);


// Hvis fejl, returner og exit.
if(is_wp_error($new_order)){

    $response['error'] = $new_order->get_error_message();
    echo json_encode($response);
    exit;

}

// Indstil kunde
update_post_meta($new_order,'_customer_user',$user);

// Tilføj produkt
$order = new WC_order($new_order);
$product = new WC_product($product_id);

$order->add_product($product,1,array());

// Tilføj ordrenote
$order->add_order_note($description,'1');





/*----------------------*/
/* RETURNER SVAR OG LUK */
/*----------------------*/
$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
$link = get_permalink($myaccount_page_id);
$link_html = '<a class="show" href="'.$link.'">Din kundeside</a>';
$response['success'] = 'Meddelelsen er sendt<br/><br/> Du vil modtage en ordreopdatering på den indtastede emailadresse. Følg din ordre på '.$link_html;
echo json_encode($response);
exit;

?>
