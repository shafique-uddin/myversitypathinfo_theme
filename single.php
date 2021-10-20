<?php get_header(); ?>


<?php 
    while (have_posts()) : the_post(); ?>
        <?php 

the_content(  );
die();
            
        ?>
<?php endwhile; ?>

<?php get_footer(); ?>