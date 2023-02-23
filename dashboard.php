<?php 
/**
* Template Name: Member Dashboard
*/
session_start();
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){ 
    
    include_once('member-dashboard.php');

}
elseif(!empty($_COOKIE['vspo'])){
    echo $_COOKIE['vspo'];
    // CHECK THE COOKIE IS VALID OR NOT
    // IF COOKIE IS VALID CHECK COOKIE EXPIRED TIME AND UPDATE IT WITH NEW EXPIRED TIME
    // IF IT IS INVALID THEN REDIRECT USER TO 404 PAGE

    include_once('member-cookie-session-update.php');
    include_once('member-dashboard.php');
} 
else{
    // REDIRECT USER TO FRONT PAGE DHASHBOARD
    $url = site_url('/404');
    wp_redirect( $url );
}