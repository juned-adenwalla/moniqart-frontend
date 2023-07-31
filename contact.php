<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Moniqart is a Art studio, belonging to Mona Joy an Artist based in Kopar Khairane NaviMumbai India. School in koparkhairane and Art studio with classes for various art forms and also offers coaching for entrances like NIFT, NID, NATA as well as Elementary and Intermediate Art Exams.">
    <meta name="keywords" content="Moniqart, Art School In Koparkhairane, Art school , Art studio, moniqart drawing school, school in koparkhairane, NIFT, NID, NATA, Paintings, Calligraphy, Guitar Classes, Glass Painting, Canvas Painting">
    <title>Contact | <?php echo _siteconfig('_sitetitle') ?></title>

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">



    <!-- main css for template -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        emailNotification('contact', '','Contact Form Submitted','juned@adenwalla.in','',$name,$phone,$email,$message);
    }

?>
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
                <h2>Contact Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========cantact Section start Here========== -->
    <div class="conatct padding-top padding-bottom">
        <div class="container">
            <div class="contact__wrapper">
                <div class="row g-5">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                        <div class="cotact__details">
                            <div class="contact__header">
                                <h3>Always Here to Help you</h3>
                                <p>Welcome to Moniqart. Write to us and our executive will revert within 48 hours.</p>
                            </div>

                            <div class="contact__info">
                                <div class="contact__item">
                                    <div class="contact__item-thumb">
                                        <span><i class="fa-solid fa-location-dot"></i></span>
                                    </div>
                                    <div class="contact__item-content">
                                        <h5>Location</h5>
                                        <p class="mb-0">Row house No 1, Jitender co-op society, Plot no 91, Sector 3, Koparkhairne, Navi Mumbai</p>
                                    </div>
                                </div>
                                <div class="contact__item">
                                    <div class="contact__item-thumb">
                                        <span><i class="fa-solid fa-phone"></i></span>
                                    </div>
                                    <div class="contact__item-content">
                                        <h5>Contact</h5>
                                        <p class="mb-0"><?php echo _siteconfig('_sitephone'); ?></p>
                                    </div>
                                </div>
                                <div class="contact__item">
                                    <div class="contact__item-thumb">
                                        <span><i class="fa-solid fa-envelope"></i></span>
                                    </div>
                                    <div class="contact__item-content">
                                        <h5>Email</h5>
                                        <p class="mb-0"><?php echo _siteconfig('_siteemail'); ?></p>
                                    </div>
                                </div>
                                <div class="contact__item">
                                    <div class="contact__item-thumb">
                                        <span><i class="fa-solid fa-clock"></i></span>
                                    </div>
                                    <div class="contact__item-content">
                                        <h5>Hours of operation</h5>
                                        <p class="mb-0">Monday - Friday: 09.00 - 20.00</p>
                                        <p class="mb-0">Sunday & Saturday: 10.30 - 22..30</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                        <div class="contact__form">
                            <h3>Ready To Get Started?</h3>
                            <p>You email address will not be published. Required fields are marked.</p>
                            <!-- account form -->
                            <form action="#" method="post" class="account__form">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="account-name"
                                                placeholder="Name" name="name" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                            <div class="invalid-tooltip">
                                                Please enter a full name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control" id="account-email"
                                                placeholder="Email" required>
                                            <div class="valid-tooltip">
                                                This email is valid
                                            </div>
                                            <div class="invalid-tooltip">
                                                Please enter a valid email
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" name="phone" class="form-control" id="account-mobile"
                                                placeholder="Enter number" required>
                                            <div class="valid-tooltip">
                                                This mobile is valid
                                            </div>
                                            <div class="invalid-tooltip">
                                                Please enter a valid number
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <textarea id="account-desc" name="message" class="form-control" rows="4"
                                                placeholder="Write a message..." cols="50"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="account__form-passcheck">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="" id="terms-check">
                                        <label for="terms-check" class="form-check-label">Accept <a href="http://localhost/moniqart-frontend/terms-and-condition"> terms
                                            </a> and <a href="http://localhost/moniqart-frontend/privacy-policy"> privacy
                                                policy</a>.
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="trk-btn trk-btn--rounded trk-btn--secondary1">Send
                                    Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========cantact Section Ends Here========== -->




    <!-- ==========location map start Here========== -->
    <div class="contact padding-bottom">
        <div class="container" data-aos="fade-up" data-aos-duration="800">
            <div class="contact__map">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe id="gmap_canvas" class="map"
                            src="https://www.google.com/maps/embed/v1/place?q=Moniqart+-+Art+Therapy+online+/+offline,+Sector+3,+Kopar+Khairane,+Navi+Mumbai,+Maharashtra,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========location map end Here========== -->








    <!-- ===============>> newsletter start here <<================= -->
    <?php include('templates/_newsletter.php'); ?>
    <!-- ===============>> newsletter end here <<================= -->


    <!-- ===============>> footer start here <<================= -->
    <?php include('templates/_footer.php'); ?>
    <!-- ===============>> footer end here <<================= -->




    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop scrollToTop--home1"><i class="fa-solid fa-arrow-up"></i></a>
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