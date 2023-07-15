<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriptions | <?php echo _siteconfig('_sitetitle') ?></title>

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">



    <!-- main css for template -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    .pricing8 {
    font-family: "Montserrat", sans-serif;
    color: #8d97ad;
    font-weight: 300;
    }

    .pricing8 h1,
    .pricing8 h2,
    .pricing8 h3,
    .pricing8 h4,
    .pricing8 h5,
    .pricing8 h6 {
    color: #3e4555;
    }

    .pricing8 h5 {
        line-height: 22px;
        font-size: 18px;
    }

    .pricing8 .subtitle {
    color: #8d97ad;
    line-height: 24px;
    }

    .pricing8 .display-5 {
    font-size: 3rem;
    }

    .pricing8 .font-14 {
    font-size: 14px;
    }

    .pricing8 .pricing-box sup {
    top: -20px;
    font-size: 16px;
    }

    .pricing8 .btn-info-gradiant {
    background: #188ef4;
    background: -webkit-linear-gradient(legacy-direction(to right), #188ef4 0%, #316ce8 100%);
    background: -webkit-gradient(linear, left top, right top, from(#188ef4), to(#316ce8));
    background: -webkit-linear-gradient(left, #188ef4 0%, #316ce8 100%);
    background: -o-linear-gradient(left, #188ef4 0%, #316ce8 100%);
    background: linear-gradient(to right, #188ef4 0%, #316ce8 100%);
    }

    .pricing8 .btn-info-gradiant:hover {
    background: #316ce8;
    background: -webkit-linear-gradient(legacy-direction(to right), #316ce8 0%, #188ef4 100%);
    background: -webkit-gradient(linear, left top, right top, from(#316ce8), to(#188ef4));
    background: -webkit-linear-gradient(left, #316ce8 0%, #188ef4 100%);
    background: -o-linear-gradient(left, #316ce8 0%, #188ef4 100%);
    background: linear-gradient(to right, #316ce8 0%, #188ef4 100%);
    }

    .pricing8 .btn-danger-gradiant {
    background: #ff4d7e;
    background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
    background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
    background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
    background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
    background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
    }
</style>
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
                <h2>Subscriptions</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Subscription</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->





    <!-- ================> Subscription section start here <================== -->
    <div class="pricing8 py-5">
        <div class="container">
            <!-- row  -->
            <div class="row mt-4">
            <!-- column  -->
                <?php loadMemberships(); ?>
            <!-- column  -->
            </div>
        </div>
    </div>
    <!-- ================> Subscription section end here <================== -->





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