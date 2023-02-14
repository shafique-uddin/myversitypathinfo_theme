<?php 
/**
* Template Name: Member Dashboard
*/
session_start();
if($_COOKIE['vspo']){
    echo $_COOKIE['vspo'];
    // CHECK THE COOKIE IS VALID OR NOT
    // IF COOKIE IS VALID CHECK COOKIE EXPIRED TIME AND UPDATE IT WITH NEW EXPIRED TIME
    // IF IT IS INVALID THEN REDIRECT USER TO 404 PAGE
} exit;
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){ ?>
<!--MEMBER SECTION START-->
<?php // include('member-header.php'); ?>
<?php get_header(); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <div class="row">
            <?php include_once('member-menu.php'); ?>
            <div class="col-8">
                <h2>This is dashboard page.</h2>
                <p>Tumi jodi settings page theke tomar sokol totho diye thako tobe ai dashboar page e aslei tomar joggota onujayi sokol bissobiddaloyer circle, abedoner date abong abodoner link er notification akhane paye jabe auto.</p>
            </div>
        </div>

    </div>
    <!-- End of Page Wrapper -->
<?php // include_once('member-footer.php'); ?>
<?php get_footer(); ?>
<!--MEMBER SECTION END-->
<?php
}
else{
    // REDIRECT USER TO FRONT PAGE DHASHBOARD
    $url = site_url('/404');
    wp_redirect( $url );
}