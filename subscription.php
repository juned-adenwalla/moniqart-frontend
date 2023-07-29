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
    <div class="pageheader" style="background-image:url(assets/images/bg/home1/1.webp)">
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



    <!-- ===============>> footer start here <<================= -->
    <footer class="footer brand-1" style="background-image:url(assets/images/footer/1.png)">
        <div class="container">
            <div class="footer__wrapper">
                <div class="padding-bottom" style="padding-top: 70px;">
                    <div class="row g-5">
                        <div class="col-xl-4 col-md-6">
                            <div class="footer__about">
                                <a href="index.html" class="footer__about-logo"><img style="width: 120px;" src="<?php echo base_url('uploads/images/' . _siteconfig('_sitelogo')); ?>"
                                        alt="Logo"></a>
                                <p class="footer__about-moto">At MONIQART, we cover a full-range of courses across all levels of creativity and education. We aim to inspire you no matter where you are with our online presence. Take a look at what we offer.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6">
                            <div class="footer__links">
                                <div class="footer__links-item">
                                    <div class="footer__links-tittle">
                                        <h6>Get In Touch</h6>
                                    </div>
                                    <ul class="footer__about-info">
                                        <li class="footer__about-item">
                                            <div class="footer__about-inner">
                                                <img src="assets/images/footer/1.svg" alt="icon">
                                                <div class="info">
                                                    <p class="m-0">Row house No 1, Jitender co-op society, Plot no 91, Sector 3, Koparkhairne, Navi Mumbai</p>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="footer__about-item">
                                            <div class="footer__about-inner">
                                                <img src="assets/images/footer/2.svg" alt="icon">
                                                <div class="info"> <a
                                                        href="mailto:<?php echo _siteconfig('_siteemail'); ?>"><?php echo _siteconfig('_siteemail'); ?></a>
                                                    <br>
                                                    <!-- <a href="mailto:debra.holt@example.com">debra.holt@example.com</a> -->
                                                </div>
                                            </div>
                                        </li>

                                        <li class="footer__about-item">
                                            <div class="footer__about-inner">
                                                <img src="assets/images/footer/3.svg" alt="icon">
                                                <div class="info"> <a href="tel:<?php echo _siteconfig('_sitephone'); ?>"><?php echo _siteconfig('_sitephone'); ?></a>
                                                    <br>
                                                    <!-- <a href="tel:+7025550122">(702) 555-0122</a> -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-2 col-md-6 col-sm-6">
                            <div class="footer__links">
                                <div class="footer__links-tittle">
                                    <h6>Explore Links</h6>
                                </div>
                                <div class="footer__links-content">
                                    <ul class="footer__linklist">
                                        <li class="footer__linklist-item"> <a href="courses">Courses</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="about-us">About Us</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="blogs">Blog Posts</a> </li>
                                        <!-- <li class="footer__linklist-item"> <a href="course-details.html">Management</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="course-details.html">Web
                                                Development</a>
                                        <li class="footer__linklist-item"> <a href="course-details.html">Art &
                                                Design</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="footer__links">
                                <div class="footer__links-tittle">
                                    <h6>Office Time</h6>
                                </div>
                                <div class="footer__links-content">
                                    <ul class="footer__linklist">
                                        <li class="footer__linklist-item">
                                            <p class="m-0">Mon-Sat: 10:00AM - 4.00PM</p>
                                        </li>
                                        <li class="footer__linklist-item">
                                            <p class="m-0">Sunday: 10:00AM - 4.00PM</p>
                                        </li>
                                        <li class="footer__linklist-item">
                                            <p class="m-0">Friday: Close</p>
                                        </li>
                                    </ul>
                                    <ul class="social mt-4">
                                        <li class="social__item">
                                            <a href="https://www.facebook.com/Moniqart.in/" class="social__link social__link--rounded1"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://www.instagram.com/moniqart.in/" class="social__link social__link--rounded1"><i
                                                    class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://www.youtube.com/@moniqart-artastherapy1929" class="social__link social__link--rounded1"><i
                                                    class="fab fa-youtube"></i></a>
                                        </li>
                                        <!-- <li class="social__item">
                                            <a href="signin.html" class="social__link social__link--rounded1"><i
                                                    class="fab fa-twitter"></i></a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer__end">
                                <div class="footer__end-copyright">
                                    <p class=" mb-0"><?php echo _siteconfig('_customfooter'); ?></p>
                                </div>
                                <div>
                                    <ul class="footer__end-links">
                                        <li class="footer__end-item">
                                            <a href="terms-and-condition"> Terms & Conditions </a>
                                        </li>
                                        <li class="footer__end-item">
                                            <a href="privacy-policy"> Privacy Policy </a>
                                        </li>
                                        <li class="footer__end-item">
                                            <a href="refund-cancellation-policy"> Refund & Cancellation Policy </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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