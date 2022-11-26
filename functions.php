<?php


//require_once get_template_directory() . '/inc/class-tgm-plugin-activation';
require_once get_template_directory() . '/inc/plugin_activator.php';



if ( ! function_exists( 'myversitypathinfo_function' ) ) :
	
	function myversitypathinfo_function() {
	
		load_theme_textdomain( 'myversitypathinfo', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'search-form' ) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-one' => esc_html__( 'Primary', 'myversitypathinfo' ),
			)
		);

        wp_enqueue_style( 'root_theme_custom_css', get_template_directory_uri() . '/css/custom_theme.css',false, time(),'all');
	
	}
endif;
add_action( 'after_setup_theme', 'myversitypathinfo_function' );

function custom_menu_list_class($classes, $items){
    $classes[] = "nav-item";
    return $classes;
}
add_filter( 'nav_menu_css_class', 'custom_menu_list_class', 10, 2 );

function add_class_to_all_menu_anchors( $atts ) {
    $atts['class'] = 'nav-link';
 
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );






function wpdocs_my_search_formone( $form ) {
    $form = '<form role="search" method="GET" id="searchform" class="searchform" action="' . home_url( 'search' ) . '" >
    <div class="row">
                <div class="col-md-3">
                        <div class="">
                            <label for="sscgpalevel" class="form-label">SSC GPA</label>
                            <input type="text" name="sscgpa" placeholder="5" class="form-control" id="sscgpalevel" aria-describedby="emailHelp">
                        </div>
                </div>
                <div class="col-md-3">
                        <div class="">
                            <label for="sscdivisionlevel" class="form-label">SSC Group</label>
                            <select name="sscgrp" class="form-select form-control" aria-label="Default select example" id="sscdivisionlevel">
                                <option selected disabled>Select One</option>
                                <option value="scienceHB">Science</option>
                                <option value="arts">Arts</option>
                                <option value="commerce">Commerce</option>
                            </select>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label for="hscgpalevel" class="form-label">এইচএসসি জিপিএ</label>
                        <input type="text" name="hscgpa" placeholder="5" class="form-control" id="hscgpalevel">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label for="hscdivisionlevel" class="form-label">এইচএসসি বিভাগ</label>
                            <select name="hscgrp" class="form-select form-control" aria-label="Default select example" id="hscdivisionlevel">
                                <option selected disabled>Select One</option>
                                <option value="scienceHB">Science</option>
                                <option value="arts">Arts</option>
                                <option value="commerce">Commerce</option>
                            </select>
                    </div>
                
                    <button type="submit" value="submit" name="submit" class="btn btn-primary mt-3 float-right">বিশ্ববিদ্যালয়গুলো খুঁজুন</button>
                </form>
                </div>
            </div>
            </div>
            </div>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_formone', 10, 1 );






// function cptui_register_my_cpts_varsityunitewithgpa() {

//     /**
//      * Post Type: Varsity unites by gpa.
//      */

//     $labels = [
//         "name" => __( "Varsity unites by gpa", "custom-post-type-ui" ),
//         "singular_name" => __( "Varsity unite by gpa", "custom-post-type-ui" ),
//         "menu_name" => __( "Versity, Unite & GPA", "custom-post-type-ui" ),
//         "all_items" => __( "All University Info", "custom-post-type-ui" ),
//         "add_new" => __( "Add New Varsity Info", "custom-post-type-ui" ),
//         "add_new_item" => __( "Add new post", "custom-post-type-ui" ),
//         "edit_item" => __( "Edit this post", "custom-post-type-ui" ),
//         "new_item" => __( "Varsity info", "custom-post-type-ui" ),
//         "view_item" => __( "View Post", "custom-post-type-ui" ),
//         "view_items" => __( "View this Post", "custom-post-type-ui" ),
//         "items_list" => __( "Varsity Gpa by Unite List", "custom-post-type-ui" ),
//     ];

//     $args = [
//         "label" => __( "Varsity unites by gpa", "custom-post-type-ui" ),
//         "labels" => $labels,
//         "description" => "All university unite according to GPA",
//         "public" => true,
//         "publicly_queryable" => true,
//         "show_ui" => true,
//         "show_in_rest" => true,
//         "rest_base" => "",
//         "rest_controller_class" => "WP_REST_Posts_Controller",
//         "has_archive" => false,
//         "show_in_menu" => true,
//         "show_in_nav_menus" => true,
//         "delete_with_user" => false,
//         "exclude_from_search" => false,
//         "capability_type" => "post",
//         "map_meta_cap" => true,
//         "hierarchical" => false,
//         "rewrite" => [ "slug" => "varsityunitewithgpa", "with_front" => true ],
//         "query_var" => true,
//         "supports" => [ "title", "custom-fields", "post-formats" ],
//     ];

//     register_post_type( "varsityunitewithgpa", $args );
// }

// add_action( 'init', 'cptui_register_my_cpts_varsityunitewithgpa' );



// add_filter('acf/settings/show_admin', '__return_false');






function form_validation_sty($request){


    if (!empty($_GET['sscgpa']) && !empty($_GET['sscgrp']) && !empty($_GET['hscgpa']) && !empty($_GET['hscgrp']) && !empty($_GET['submit'])) { 
        
        $sscgpa_for_total_val = floatval($_GET['sscgpa']);
        $sscgpa = $_GET['sscgpa'];
        $sscgrp = $_GET['sscgrp'];
        
        $hscgpa_for_total_val = floatval($_GET['hscgpa']);        
        $hscgpa = $_GET['hscgpa'];
        $hscgrp = $_GET['hscgrp'];
        $total_GPA = round($sscgpa_for_total_val + $hscgpa_for_total_val, 2);

        $request = array();

        $request[] = $sscgpa;
        $request[] = $sscgrp;
        $request[] = $hscgpa;
        $request[] = $hscgrp;
        $request[] = $total_GPA;

        return $request;



        /* Query

            $text = '<div class="jumbotron jumbotron-fluid text-white bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>আপনার মোট জিপিএ = '.$total_GPA .'</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>যোগ্যতা অনুযায়ী যে সকল বিশ্ববিদ্যালয়ের বিভিন্ন ইউনিটে আপনি পরীক্ষা দিতে পারবেন তা নিম্নরূপ -</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-success table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">বিশ্ববিদ্যালয়ের নাম</th>
                                    <th scope="col">ইউনিটের নাম/ বিস্তারিত</th>
                                    <th scope="col">বিস্তারিত তথ্যসমূহ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="col">'.the_field('university_name').'</th>
                                    <td scope="col">'.the_field('unite_name').'</td>
                                    <td scope="col">ক্লিক করুন</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>';
        return $text;
        */

    }
    else {
        $text = '<div class="container-fluid">
        <!-- Start Content area Jumbotron -->
        <div class="jumbotron jumbotron-fluid text-white bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="fs-3 text-center mb-4">দুঃখিত! <br> আপনার কাঙ্ক্ষিত তথ্য খুজে পাওয়া যায়নি।<br> নিশ্চয়ই আপনার ভুল হয়েছে।</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content area -->
    </div>';
    return $text;
    }
}
add_filter('taking_rq_from_src','form_validation_sty', 10, 1);




 // REGISTRATION FORM
 function frontPage_member_registrationForm($request){
    $form = '<form method="POST" class="register-form" id="register-form">
        <div class="form-group">
            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
            <input type="text" name="register_userName" id="name" placeholder="Your Name"/>
        </div>
        <div class="form-group">
            <label for="email"><i class="zmdi zmdi-email"></i></label>
            <input type="email" name="register_userEmail" id="email" placeholder="Your Email"/>
        </div>
        <div class="form-group">
            <label for="phone"><i class="zmdi zmdi-phone"></i></label>
            <input type="phone" name="register_userPhone" id="phone" placeholder="Your Phone Number"/>
        </div>
        <div class="form-group">
            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
            <input type="password" name="register_userPass" id="pass" placeholder="Password"/>
        </div>
        <div class="form-group">
            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
            <input type="password" name="register_userRe_pass" id="re_pass" placeholder="Repeat your password"/>
        </div>
        <div class="form-group form-button">
            <input type="submit" name="userModeTestSignup" id="signup" class="form-submit" value="Registration"/>
        </div>
    </form>';
 
    return $form;
 }
 add_filter('frontPage_member_registration', 'frontPage_member_registrationForm', 10, 1);



 if(isset($_REQUEST['userModeTestSignup'])){
    if(empty($_POST['register_userName']) && empty($_POST['register_userEmail']) && empty($_POST['register_userPhone']) && empty($_POST['register_userPass']) && empty($_POST['register_userRe_pass'])){
        add_filter('empty_registration_field_callable_hndler', 'empty_registration_field_callable_func');
    }
    elseif((mb_strlen($_POST['register_userPhone'])<11) || (mb_strlen($_POST['register_userPhone'])>11)){
        add_filter('register_userPhone_field_callable_hndler', 'register_userPhone_field_callable_func');
    }
    elseif(sanitize_text_field($_POST['register_userPass']) != sanitize_text_field($_POST['register_userRe_pass'])){
        add_filter('register_password_field_callable_hndler', 'register_password_field_callable_func');
    }
    elseif(empty($_POST['register_userName']) || empty($_POST['register_userEmail']) || empty($_POST['register_userPhone']) || empty($_POST['register_userPass']) || empty($_POST['register_userRe_pass'])){
        add_filter('some_registration_field_is_empty_callable_hndler', 'some_registration_field_is_empty_callable_func');
    }
    else{
        $registerUserName = sanitize_text_field($_POST['register_userName']);
        $registerUserEmail = sanitize_text_field($_POST['register_userEmail']);
        $registerUserPhone = sanitize_text_field($_POST['register_userPhone']);
        $registerUserPass = sanitize_text_field($_POST['register_userPass']);
        $registerUserRPass = sanitize_text_field($_POST['register_userRe_pass']);

        $wpdb;
        $registration_mbr_tbl_name = $wpdb->prefix.'Ruinfo_db';
        $query = $wpdb->insert(
            $registration_mbr_tbl_name,
            array(
                'userName' => $registerUserName,
                'userEmail' => $registerUserEmail,
                'userPhone' => $registerUserPhone,
                'userPass' => wp_hash_password($registerUserRPass)
            )
        );
        if($query){
            echo 'your registration is complete. Please login';
        }
        else{
            echo 'something is wrong';
        }

        
    } 
 }

/**
 * LOGIN VALIDATION
 */
// if(isset($_REQUEST['wp-submit'])){
//     $userEmail = sanitize_text_field($_POST['log']);
//     $userPass = sanitize_text_field(trim($_POST['pwd']));

    
//     $user = get_user_by('user_email', "$userEmail");
// if($user)
// {
//    echo $user->ID;
// }

//     echo '<pre>';
//     // print_r(wp_authenticate(wp_authenticate_user($userEmail,$userPass)));
//     // print_r(wp_authenticate($userEmail, wp_check_password($userPass)));
//     var_dump(get_user_by('user_email', $userEmail));
//     echo '</pre>';
//     echo $userEmail; exit;
// }


 /**
 * Registration Pages Notice
 */
 ################################### EMPTY FIELD NOTICE ###################################
function empty_registration_field_callable_func(){ ?>
    <div class="registration notice notice-error is-dismissible">
        <p>
            <?php _e("All Field is Empty. Please Check Again."); ?>
        </p>
    </div>
<?php 
}

function register_userPhone_field_callable_func(){ ?>
    <div class="registration notice notice-error is-dismissible">
        <p>
            <?php _e("Please check your phone number. Give your solid/real phone number"); ?>
        </p>
    </div>
<?php 
}

function register_password_field_callable_func(){ ?>
    <div class="registration notice notice-error is-dismissible">
        <p>
            <?php _e("Please check your Password. Comfirmation password is not matching."); ?>
        </p>
    </div>
<?php 
}

function some_registration_field_is_empty_callable_func(){ ?>
    <div class="registration notice notice-error is-dismissible">
        <p>
            <?php _e("Please check all field. Some field is empty!"); ?>
        </p>
    </div>
<?php 
}









 // add_action( 'admin_notices', 'my_theme_dependencies' );

 function my_theme_dependencies() {
   if( ! function_exists('plugin_function') )
     echo '<div class="error"><p>' . __( 'Warning: The theme needs Plugin X to function', 'my-theme' ) . '</p></div>';
 }

 