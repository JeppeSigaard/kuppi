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



/*--------------------------------*/
/* ERROR: returner fejlmeddelelse */
/*--------------------------------*/

// Indtast navn
if(!$name){$response['error'] = 'Angiv et navn';}

// Indtast korrekt email
else if(!$email || !is_email($email)){$response['error'] = 'Angiv en gyldig emailadresse';}

// Indtast et password
else if(!$password){$response['error'] = 'Password <strong>skal</strong> angives og bruges til at oprette en support-ticket.';}

// produktid mangler (systemfejl)
else if(!$product_id){$response['error'] = 'Noget gik galt, prøv venligst igen.';}

// Indtast beskrivelse
else if(!$description){$response['error'] = 'Beskriv dine ønsker. Du kan bruge så få eller så mange ord du har lyst til.';}

/*------------------------------------*/
/* SUCCESS: opret bruger og send mail */
/*------------------------------------*/
else{
    
    
    $user = wp_insert_user(array(
        
        'role' => 'Customer',
        'user_pass' => $password,
        'user_login' => $name,
        'user_email' => $email,
    
    ));
    
    // Hvis fejl, returner og exit.
    if(is_wp_error($user)){
        
        $response['error'] = $user->get_error_message();
        echo json_encode($response);
        exit;
    
    }
    
    
    
    
    
   
    $response['success'] = 'Meddelelsen er sendt<br/><br/> Du vil modtage en bekræftelsesemail på den indtastede mailadresse.';

}




/*----------------------*/
/* RETURNER SVAR OG LUK */
/*----------------------*/

echo json_encode($response);
exit;

?>
