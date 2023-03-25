<?php 
if((isset($_SESSION['usid']) && !empty($_SESSION['usuid']))){
    get_header('member'); // LOGINED MEMBER HEADER
}
else{
    get_header(); // FRONT END USER HEADER
}
?>





<?php // get_header(); ?>

<?php
$query = new WP_Query( array( 
    'post_type' => 'post',
    'order' => 'ASC',
    'category__not_in' => '4'
    ) );
?>


<?php 
    while ($query->have_posts()) : $query->the_post(); ?>
    <div class="row">
        <div class="col-12">
            <article class="mb-5 blogPostContentClass border-bottom">
                <div class="blogPostContentClassTitle">
                <a class="h2 mb-2" href="<?php echo the_permalink(); ?>" role="button"><?php echo get_the_title(); ?></a>
                </div>
            <?php the_excerpt(); ?>
            </article>
        </div>
    </div>
<?php endwhile; ?>


<?php get_footer(); ?>