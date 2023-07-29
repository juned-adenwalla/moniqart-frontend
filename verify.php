<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Account | <?php echo _siteconfig('_sitetitle') ?></title>

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
        if(isset($_GET['phone'])){
            $phone = $_GET['phone'];
        }else{
            echo "<script>window.location.href = 'signin';</script>";
        }
        if(isset($_POST['verify'])){
            $otp = $_POST['otp'];
            if(verifyOTP($phone,$otp)){
                echo "<script>window.location.href = 'signin?status=true';</script>";
            }else{
                require('includes/_alert.php');
                $alert = new PHPAlert();
                $alert->warn("OTP Validation Failed");
            }
        }

    ?>

    <!-- ==========Page Header Section Starts Here========== -->
    <div class="pageheader" style="background-image:url(assets/images/bg/home1/1.webp)">
        <div class="container">
            <div class="pageheader__content">
                <h2>Verify OTP</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Verify OTP</li>
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
                                <h3>Verify OTP</h3>
                                <p>No worries, we’ll send you reset instructions.</p>
                            </div>
                            <!-- account form -->
                            <form action="#" method="post" class="account__form">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="number" name="otp" class="form-control" id="account-email"
                                                placeholder="Enter OTP" required>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="verify"
                                    class="trk-btn trk-btn--border trk-btn--secondary1 d-block mt-4">Submit</button>
                            </form>
                            <!-- account social -->

                            <div class="account__switch">
                                <p>Didn't recieved OTP yet? <a href="signup.html">Resend OTP</a></p>
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