<?php 
/**
 * Template Name: Registration (Model Test)
 */

 if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){
    echo 'Registared memeber logined from page-modeltest';
 }
else{
    get_header(); ?>

<div class="row">
    <div class="col-12 modeltestinfo">
        <section class="">
            <p>
                <?php 
                apply_filters('empty_registration_field_callable_hndler', 'error message will be show.');
                apply_filters('register_userPhone_field_callable_hndler', 'Registration page phone number error message will be show.');
                apply_filters('register_password_field_callable_hndler', 'Member Password is not match.');
                apply_filters('some_registration_field_is_empty_callable_hndler', 'Some filed is empty error message will be show.');
                ?>
            </p>
        </section>
    </div>
</div>


<div class="row">
    <div class="col-12 modeltestinfo">
        <section class="">
            <h3>Model Test:</h3>
            <p>
            মডেল টেস্ট প্রোগ্রামটি সম্পূর্ণ ফ্রি। নিজেকে যাচাই করতে এবং নিজের দুর্বলতাকে খুজে বের করতে নিয়মিত মডেল দেওয়া প্রয়োজন।
            তাই এখন-ই রেজিট্রেশন করে ফেলুন। আর রেজিট্রেশন করা থাকলে লগইন করে নিয়মিত পরীক্ষা দিন। জেনে নিন নিজের দুর্বলতা কোথায়।
            </p>
        </section>
    </div>
</div>

<div class="row mb-2">
    <div class="col-12">
        <div id="accordion">
        <div class="card">
            <div class="card-header text-left" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Login
                </button>
            </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                

                <section class="sign-in">
                    <div class="container">
                        <div class="signin-content">
                            <div class="signin-form">
                                <form method="POST" class="register-form" id="login-form">
                                    <div class="form-group">
                                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="email" name="user_email" id="user_email" placeholder="User Email"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="user_pass" id="user_pass" placeholder="Password"/>
                                    </div>
                                    <div class="form-group form-button">
                                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                                    </div>
                                </form>
                                <?php  // wp_login_form(); ?>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Registration
                </button>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">

            <section class="signup">
                    <div class="container">
                        <div class="signup-content">
                            <div class="signup-form">
                                <?php echo apply_filters('frontPage_member_registration', 'Registration Form');?>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            </div>
        </div>
        </div>
    </div>
</div>


<?php 
    get_footer(); 
}
?>