<?php 


$old_cookie = $_COOKIE['vspo'];
$mbr_meta_tbl = $wpdb->prefix.'ruinfo_user_meta';
global $wpdb;
$query = $wpdb->get_results("SELECT * FROM $mbr_meta_tbl WHERE userSessionKey = '$old_cookie' ");


if(count($query)>0){
    $currentUserId = $query[0]->userSessionId;
}


if(session_status() == PHP_SESSION_ACTIVE){
    // echo 'already session start';
    session_unset();
    session_destroy();
    session_write_close();
}

session_start();

$_SESSION['usid'] = time();
$_SESSION['usuid'] = $currentUserId;
session_write_close();
$cookie_value = rand(0,20).md5($_SESSION['usid']).rand(0,9);
$cookie_exp = time()+30*24;

// START WORK WITH COOKIE AND LOG OUT DATA REMOVAL WORK IN BELOW......
setcookie('vspo',$cookie_value,$cookie_exp,'/');


// STORE THE SESSION DATA INTO DB
global $wpdb;
$Ruinfo_user_meta_tbl = $wpdb->prefix.'Ruinfo_user_meta';
$wpdb->update(
    $Ruinfo_user_meta_tbl,
    array(    
        'userSessionId' => $_SESSION['usuid'],
        'userSessionValue' => $_SESSION['usid'],
        'userSessionKey' => $cookie_value,
        'userSessionExpiry' => $cookie_exp
    ),
    array(
        'userSessionKey' => $old_cookie
    )
);

?>