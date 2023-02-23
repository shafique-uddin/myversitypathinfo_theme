<?php 
/**
* Template Name: User Settings Page
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
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>User Name</td>
                            <td><input type="text" name="" id="username"></td>
                            <td><button>Edit</button></td>
                        </tr>
                        <tr>
                            <td>User Phone Number</td>
                            <td><input type="tel" name="" id=""></td>
                            <td><button>Edit</button></td>
                        </tr>
                        <tr>
                            <td>User Email</td>
                            <td><input type="email" name="" id=""></td>
                            <td><button>Edit</button></td>
                        </tr>
                        <tr>
                            <td><button>Change Password</button></td>
                            <td><button>Save</button></td>
                        </tr>
                    </table>
                </form>
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