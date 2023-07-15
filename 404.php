<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Found | <?php echo _siteconfig('_sitetitle') ?></title>

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">



    <!-- main css for template -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <!-- ===============>> Preloader start here <<================= -->
   <?php include('templates/_preloader.php'); ?>
    <!-- ===============>> Preloader end here <<================= -->


    <!-- ===============>> Header section start here <<================= -->
    <?php include('templates/_header.php'); ?>
    <!-- ===============>> Header section end here <<================= -->



    <!-- ==========Page Header Section Starts Here========== -->
    <div class="pageheader" style="background-image:url(assets/images/bg/home1/8.jpg)">
        <div class="container">
            <div class="pageheader__content">
                <h2>404 Page</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">404 Page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->





    <!-- ================> 404 section start here <================== -->
    <section class="error padding-top padding-bottom">
        <div class="container" data-aos="zoom-in" data-aos-duration="800">
            <div class="section-header text-center ">
                <h2>OOPS!</h2>
                <p class="style2">Page not found</p>
            </div>
        </div>
        <div class="error__inner" data-aos="fade-up" data-aos-duration="800">
            <div class="error__content text-center">
                <img class=" mb-4" src="assets/images/others/404.png" alt="404 image">
                <div class="text-center mt-5">
                    <a href="index.html" class="trk-btn trk-btn--rounded trk-btn--secondary1">Go To Home</a>
                </div>
            </div>
            <!-- <div class="error__thumb">
                <a href="index.html"><img src="assets/images/error/01.jpg" alt="Event Image"> </a>
            </div> -->
        </div>

    </section>
    <!-- ================> 404 section end here <================== -->





    <!-- ===============>> newsletter start here <<================= -->
    <?php include('templates/_newsletter.php'); ?>
    <!-- ===============>> newsletter end here <<================= -->


    <!-- ===============>> footer start here <<================= -->
    <?php include('templates/_footer.php'); ?>
    <!-- ===============>> footer end here <<================= -->





    <!-- scrollToTop start here -->
    <!-- <a href="#" class="scrollToTop"><i class="fa-solid fa-arrow-up-from-bracket"></i></a> -->
    <!-- scrollToTop ending here -->



    <!-- vendor plugins -->

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/fslightbox.js"></script>
    <script src="assets/js/purecounter_vanilla.js"></script>



    <script src="assets/js/custom.js"></script>


</body>

</html>