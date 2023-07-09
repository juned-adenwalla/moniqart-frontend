<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin | <?php echo _siteconfig('_sitetitle') ?></title>

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

    <?php

    if(isset($_GET['status'])){
        if($_GET['status'] == false){
            require('includes/_alert.php');
            $alert = new PHPAlert();
            $alert->warn("OTP Sent Failed");
        }else{
            require('includes/_alert.php');
            $alert = new PHPAlert();
            $alert->success("Signup Success");
        }
    }

    if(isset($_POST['login'])){
        $emailOrPhone = $_POST['emailorphone'];
        $password = $_POST['password'];

        if (userLogin($emailOrPhone, $password)) {
            // User login successful, redirect to the dashboard or desired page
            echo "<script>window.location.href = 'my-account';</script>";
            // Store user information in session variables
        }
    }

    ?>


    <!-- ==========Page Header Section Starts Here========== -->
    <div class="pageheader" style="background-image:url(assets/images/bg/home1/9.png)">
        <div class="container">
            <div class="pageheader__content">
                <h2>Login</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->



    <!-- ===============>> account start here <<================= -->
    <section class="account padding-top padding-bottom">
        <div class="container-fluid">
            <div class="account__wrapper" data-aos="fade-up" data-aos-duration="800">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="account__content">
                            <!-- account tittle -->
                            <div class="account__header">
                                <h3>Log in to your account</h3>
                                <p>Welcome back! Please enter your details.</p>
                            </div>
                            <!-- account form -->
                            <form action="#" method="post" class="account__form needs-validation" novalidate>
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" name="emailorphone" class="form-control" id="account-email"
                                                placeholder="Enter your email or phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control showhide-pass" id="account-pass"
                                                placeholder="Password" required>

                                            <button type="button" id="btnToggle" class="toggle"><i id="eyeIcon"
                                                    class="fa fa-eye"></i></button>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                            <div class="invalid-tooltip">
                                                Enter a strong password
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="account__form-passcheck">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="" id="terms-check">
                                        <label for="terms-check" class="form-check-label">
                                            Remember for 30 days
                                        </label>
                                    </div>
                                    <div class="account__form-forgotpass">
                                        <a href="forgot-pass">Forgot Password?</a>
                                    </div>
                                </div>

                                <button type="submit" name="login"
                                    class="trk-btn trk-btn--border trk-btn--secondary1 d-block mt-4">Sign in</button>
                            </form>
                            <!-- account social -->
                            <!-- <div class="account__social">
                                <a href="#" class="account__social-btn"><span><img src="assets/images/others/google.svg"
                                            alt="google icon"></span>
                                    Sign in with google
                                </a>
                            </div> -->

                            <div class="account__switch">
                                <p>Don't have an account? <a href="signup">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> account end here <<================= -->





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