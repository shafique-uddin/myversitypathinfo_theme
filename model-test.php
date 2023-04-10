<?php 
/**
* Template Name: User ModelTest Page
*/

session_start();
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){ ?>

<!--MEMBER SECTION START-->
<?php get_header('member'); ?>

    <!-- Page Wrapper -->
    <div id="wrapper" class="display-full-height">

    <!-- MODEL TEST SECTION IS START -->
        <div class="row mt-3">


        <?php
        $modelTest_dt = apply_filters('all_model_test_data_is_here', 'No Model Test has been created yet.');
        if(count($modelTest_dt)>0){

        foreach ($modelTest_dt as $key => $modelTest_dtails) {
            ?>

            <div class="col-sm-4">
                <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title model-test-title">Model Test - <?php echo $modelTest_dtails->subjectName; ?></h5>
                    <p class="card-text">
                        Paper No: <?php echo $modelTest_dtails->paperNo; ?> <br>
                        Topic/Chapter: <?php echo $modelTest_dtails->topicOrChapter; ?>
                    </p>
                    <a href="<?php echo add_query_arg(array('model_test_title'=> $modelTest_dtails->subjectName, 'modelTstNo' => $modelTest_dtails->subject_id), site_url('member-single-model-test-page')); ?>" class="btn btn-success">START</a>
                </div>
                </div>
            </div>
        <?php } 
        } else{
            $query = new WP_Query( array( 'page_id' => '176' ) );   // PLEASE CHECK YOUR UNDER CONSTRUCTION PAGE URL, AND COLLECT PAGE ID FROM URL THEN PUT IT IN HERE.
            while($query->have_posts()): $query->the_post(); ?>
            
                <div class="container">
                <div class="row display-full-height">
                    <div class="col text-center">
                        <h3><?php echo the_content(); ?></h3>
                    </div>
                </div>
                </div>
            
<?php
            endwhile;

        }
        ?>
            
        </div>
    <!-- MODEL TEST SECTION IS START -->

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