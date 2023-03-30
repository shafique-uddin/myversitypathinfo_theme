<?php 
/**
 * Template Name: Single Model Test Page
 * Page URL: member-single-model-test-page
 */


session_start();
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){
    if(isset($_GET['modelTstNo'])){
?>

<!--MEMBER SECTION START-->
<?php get_header('member'); ?>

<div class="row model-test-title">
    <h2>Model Test : <?php if(isset($_GET['model_test_title'])){ echo $_GET['model_test_title']; } ?></h2>
</div>


<form action="" method="POST">
<?php 

$model_test_no = $_GET['modelTstNo'];   // MODEL TEST NUMBER FROM DB

$single_modlTst_result = apply_filters('single_model_test_info', "$model_test_no");
$total_number_of_question = count($single_modlTst_result); // FIND OUT TOTAL NUMBER OF QUESTIONS

$question_counter = 1;  // COUNTING TOTAL QUESTION
foreach ($single_modlTst_result as $key => $value) {
    $options = explode("/",$value->question_options);
    // echo "<pre>";
    // print_r($value);
    // echo "</pre>";
?>

    <div class="row member_question_section">
        <div class="question">
            <?php echo $value->question_title; ?>
        </div> 
        <div class="options">
            <?php 
                $option_counter = 0; // FOR OPTION LABEL
                foreach ($options as $key => $Option_list) {
                    if(strlen($Option_list > 0)){
                        $option_counter++;
            ?>
                        <input type="radio" name="answer_for_question_<?php echo $question_counter; ?>" id="<?php echo $Option_list.$value->id; ?>" value="<?php echo $Option_list; ?>" onclick="checker(this)" class="list-only">
                        <label for="<?php echo $Option_list.$value->id; ?>"><?php echo $Option_list; ?></label><br>
            <?php
                    }
                }
                if($option_counter == 4){
            ?>
                    <input type="hidden" name="id_of_question_no_<?php echo $question_counter; ?>_is" value="<?php echo $value->id; ?>">
        <?php   } ?>
        </div>
    </div>

<?php 
    $question_counter++;
} 
?>
    <div class="row">
        <input type="hidden" name="total_number_of_question_is" value="<?php echo $total_number_of_question; ?>">
    </div>

    <div class="row">
        <input type="submit" name="user_model_test_submit" class="member-model-test-form-submit" value="Submit">
    </div>
</form>




<?php get_footer(); ?>
<!--MEMBER SECTION END-->
<?php
}
// IF MODEL TEST ID NOT FOUND, THEN IT WILL REDIRECT TO DASHBOARD
else {
    $url = site_url('dashboard');
    wp_redirect( $url );
}
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