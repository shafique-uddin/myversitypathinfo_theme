<?php 
/**
* Template Name: Settings Page
*/

session_start();
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){
    echo 'this is user';
}
else {
    $url = site_url('/404');
    wp_redirect( $url );
}