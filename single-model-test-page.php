<?php 
/**
 * Template Name: Single Model Test Page
 * Page URL: member-single-model-test-page
 */


session_start();
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){ ?>

<!--MEMBER SECTION START-->
<?php get_header('member'); ?>

<div class="row">
    <h2>Model Test : </h2>
    
</div>


<form action="">
<?php 
$val1 = $_GET['modelTstNo'];

$single_modlTst_result = apply_filters('single_model_test_info', "$val1");
foreach ($single_modlTst_result as $key => $value) {
    $options = explode("/",$value->question_options);
    // echo "<pre>";
    // print_r($options);
    // echo "</pre>";
?>

    <div class="row member_question_section">
        <div class="question">
            <?php echo $value->question_title; ?>
        </div> 
        <div class="options">
            <?php 
                foreach ($options as $key => $Option_list) {
                    if(strlen($Option_list > 0)){ ?>
                        <input type="radio" name="<?php echo $value->id; ?>" id="<?php echo $Option_list; ?>" value="<?php echo $Option_list; ?>">
                        <label for="<?php echo $Option_list; ?>"><?php echo $Option_list; ?></label><br>
            <?php   }
                }
            ?>
        </div>
    </div>

<?php } ?>

    <div class="row">
        <input type="submit" class="member-model-test-form-submit" value="Submit">
    </div>
</form>




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