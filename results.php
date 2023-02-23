<?php 
/**
* Template Name: User Results Page
*/

session_start();
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){ ?>

<!--MEMBER SECTION START-->
<?php //include('member-header.php'); ?>
<?php get_header(); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <div class="row">
            <?php include_once('member-menu.php'); ?>
            <div class="col-8">
                <h2>This is Result page</h2>
            </div>
        </div>

    </div>
    <!-- End of Page Wrapper -->
<?php // include_once('member-footer.php'); ?>
<?php get_footer(); ?>
<!--MEMBER SECTION END-->
<?php
}
elseif(!empty($_COOKIE['vspo'])){
    include_once('member-cookie-session-update.php');
    include_once('member-dashboard.php');
} 
else{
    // REDIRECT USER TO FRONT PAGE DHASHBOARD
    $url = site_url('/404');
    wp_redirect( $url );
}