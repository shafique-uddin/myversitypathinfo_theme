<!--MEMBER SECTION START-->
<?php // include('member-header.php'); ?>
    <?php get_header('member.php'); ?>

        <!-- Page Wrapper -->
        <div id="wrapper">
    
            <div class="row">
                <div class="col-2">
                    <?php // include_once('member-menu.php'); ?>
                </div>
                <div class="col-10">
                    <?php include_once('member-content-page.php'); ?>
                </div>
            </div>

        </div>
        <!-- End of Page Wrapper -->
<?php // include_once('member-footer.php'); ?>
    <?php get_footer(); ?>
    <!--MEMBER SECTION END-->