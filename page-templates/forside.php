<?php
/* Template name: Forside */
get_header();

$products = get_posts(array(
    'post_type' => 'product',
    'numberposts'   => -1,
));

$artists = get_posts(array(
    'post_type' => 'kunstner',
    'numberposts'   => -1,
));

// Design spinner
include get_template_directory().'/modules/design-spinner.php';
?>

<section class="bucket-calc"></section>

<?php

// Kunstnere
include get_template_directory().'/modules/artist-spinner.php';


get_footer();

?>

