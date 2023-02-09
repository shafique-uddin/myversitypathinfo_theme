<?php 
/**
* Template Name: Member Page
*/

session_start();
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){

    // HEADER PAGE SECTION 
    // END OF HEADER SECTION
    include ("page-registration.php");
}
else{
    // REDIRECT USER TO FRONT PAGE DHASHBOARD
    $url = site_url('/404');
    wp_redirect( $url );
}