<?php 
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){
    get_header('member'); // LOGINED MEMBER HEADER
}
else{
    get_header(); // FRONT END USER HEADER
}


$text = '<div class="container-fluid">
<!-- Start Content area Jumbotron -->
<div class="jumbotron jumbotron-fluid text-white bg-dark">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-md-center align-items-center vh-100">
                <h1 class="fs-3 text-center mb-4 align-middle">দুঃখিত! (404) <br> আপনার কাঙ্ক্ষিত তথ্য খুজে পাওয়া যায়নি।<br> নিশ্চয়ই আপনার ভুল হয়েছে।</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Content area -->
</div>';
echo $text;

get_footer();
?>