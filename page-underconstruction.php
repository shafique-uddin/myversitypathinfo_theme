<?php 
/**
 * Template name: Under Construction
 */


if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){
    get_header('member'); // LOGINED MEMBER HEADER
}
else{
    get_header(); // FRONT END USER HEADER
}

while(have_posts()): the_post(); ?>
 
    <div class="row display-full-height">
        <div class="col">
            <h3><?php echo the_content(); ?></h3>
        </div>
    </div>

<?php 
endwhile;

 get_footer();
?>