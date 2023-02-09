<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title><?php bloginfo( 'name' ); ?></title>
<?php wp_head(); ?>
</head>
<body>


<div class="container-fluid">
<!-- Content here -->
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <?php bloginfo( 'name' ); ?>.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
<?php 
wp_nav_menu(
    array(
        'theme_location' => 'menu-one',
        'container' => '', 
        'menu_id' => '',
        'menu_class' => 'navbar-nav mr-auto',
    )
  );
?>
            </div>
            </nav>
        </div>
    </div>
    <!-- হেডারের কাজ শেষ -->



    <!-- Page Wrapper -->
    <div id="wrapper">

        <div class="row">
            <div class="col-4">
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li><a href="">Model Test</a></li>
                    <li><a href="">Result</a></li>
                    <li><a href="<?php echo site_url('settings'); ?>">Settings</a></li>
                </ul>
            </div>
            <div class="col-8">

            </div>
        </div>

    </div>
    <!-- End of Page Wrapper -->

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>