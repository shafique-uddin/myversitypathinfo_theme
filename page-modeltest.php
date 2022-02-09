<?php 
/**
 * Template Name: Model Test
 */

get_header(); ?>


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
                                        <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                                    </div>
                                    <div class="form-group form-button">
                                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                                    </div>
                                </form>
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
                                <form method="POST" class="register-form" id="register-form">
                                    <div class="form-group">
                                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text" name="name" id="name" placeholder="Your Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                        <input type="phone" name="phone" id="phone" placeholder="Your Phone Number"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="pass" id="pass" placeholder="Password"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                                    </div>
                                    <div class="form-group form-button">
                                        <input type="submit" name="signup" id="signup" class="form-submit" value="Registration"/>
                                    </div>
                                </form>
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


<?php get_footer(); ?>