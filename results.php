<?php 
/**
* Template Name: User Results Page
*/

session_start();
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){ ?>

<!--MEMBER SECTION START-->
<?php get_header('member'); ?>



    <!-- Page Wrapper -->
    <div id="wrapper" class="display-full-height">

        <div class="row">
            <div class="col-12">
                <?php if(isset($_GET['result'])){ ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Model Test Name: <?php echo $_GET['model_test_name']; ?></p>
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
    

        <?php     $userID = $_SESSION['usuid']; 
    $modelTestInfo = apply_filters('Ruinfo_get_model_test_info_for_per_user', $userID);
    if(count($modelTestInfo) < 1){

        $query = new WP_Query( array( 'page_id' => '149' ) );   // PLEASE CHECK YOUR UNDER CONSTRUCTION PAGE URL, AND COLLECT PAGE ID FROM URL THEN PUT IT IN HERE.
            while($query->have_posts()): $query->the_post();
    ?>






            
                <div class="container mt-3">
                    <div class="row display-full-height">
                        <div class="col text-center">
                            <h3><?php echo the_content(); ?></h3>
                        </div>
                    </div>
                </div>
            
<?php
            endwhile;




        } else {
        
        ?>

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Date</th>
                <th scope="col">Model Test Name</th>
                <th scope="col" class="text-center">Your Result</th>
                <th scope="col" class = "text-center">Total Number</th>
                <th scope="col">Max Number</th>
                <th scope="col">Time Taken</th>
                <th scope="col">View</th>
                </tr>
            </thead>
            <tbody>



            <?php 
foreach ($modelTestInfo as $key => $value) {?>
            
                <tr>
                <th><?= $value->dateIs; ?></th>
                <td><?= $value->modelTestName; ?></td>
                <td class="text-center"><?= $value->obtainedMarks; ?></td>
                <td class="text-center"><?= $value->TotalMarks; ?></td>
                <td><?= 'Under Construction'; ?></td>
                <td><?= 'Under Construction'; ?></td>
                <td><a href="<?php ?>">Details</a></td>
                </tr>

 <?php } ?>

            </tbody>
        </table>

<?php } ?>


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