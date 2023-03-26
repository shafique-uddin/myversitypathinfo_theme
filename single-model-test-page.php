<?php 
/**
 * Template Name: Single Model Test Page
 * Page URL: member-single-model-test-page
 */


session_start();
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){ ?>

<!--MEMBER SECTION START-->
<?php get_header('member'); ?>



<?php 
$val1 = $_GET['modelTstNo'];


$single_modlTst_result = apply_filters('single_model_test_info', "$val1");
foreach ($single_modlTst_result as $key => $value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}

?>

<div class="row">
    <div class="question"><?php echo $value->question_title; ?></div>
    <div class="options">
        <input type="radio" name="" id="">
    </div>
</div>




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
?>