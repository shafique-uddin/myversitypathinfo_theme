<?php 
/**
* Template Name: User Results Page
*/

session_start();
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){ ?>

<!--MEMBER SECTION START-->
<?php get_header('member'); ?>



    <!-- Page Wrapper -->
    <div id="wrapper">

        <div class="row">
            <div class="col-12">
                <?php if(isset($_GET['result'])){ ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Model Test Name: </p>
                        <p>Your Score is: <?php echo $_GET['result']; ?></p>
                        <hr>
                        <p class="mb-0">Stay with us.</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                <?php
                }
                ?>
            </div>
        </div>


        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Date</th>
                <th scope="col">Model Test Name</th>
                <th scope="col">Your Result</th>
                <th scope="col">Total Number</th>
                <th scope="col">Max Number</th>
                <th scope="col">Time Taken</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th>12/12/2023</th>
                <td>Bangla</td>
                <td>8</td>
                <td>10</td>
                <td>09</td>
                <td>5 Minutes</td>
                </tr>

                <tr>
                <th>12/12/2023</th>
                <td>Bangla</td>
                <td>8</td>
                <td>10</td>
                <td>09</td>
                <td>5 Minutes</td>
                </tr>
            </tbody>
        </table>




    </div>
    <!-- End of Page Wrapper -->


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