<?php get_header(); ?>

<?php
$query = new WP_Query( array( 
    'post_type' => 'post',
    'order' => 'ASC',
    ) );
?>





<!-- জাম্বোট্রন এর কাজ শুরু -->
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-5">এ পর্যন্ত প্রকাশিত সকল বিশ্ববিদ্যালয়ের ভর্তি সার্কুলার নিম্নরূপঃ</h1>
                        <hr class="my-2">
                    </div>
                </div>
            </div>
        </div>
    <!-- জাম্বোট্রন এর কাজ শেষ -->    




<?php 
    while ($query->have_posts()) : $query->the_post(); ?>
<a class="btn btn-primary mb-2" href="<?php echo the_permalink(); ?>" role="button"><?php echo get_the_title(); ?></a> <br>
<?php endwhile; ?>


<?php get_footer(); ?>