<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educax - A Modern LMS and Kindergarten HTML Template for Online Learning and Personalized Education </title>

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
    <div class="pageheader" style="background-image:url(assets/images/bg/home1/7.png)">
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
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humor, or randomized words which don't
                                    look
                                    even slightly believable.</p>
                            </div>

                            <div class="contact__info">
                                <div class="contact__item">
                                    <div class="contact__item-thumb">
                                        <span><i class="fa-solid fa-location-dot"></i></span>
                                    </div>
                                    <div class="contact__item-content">
                                        <h5>Location</h5>
                                        <p class="mb-0">4517 Washington Ave. Manchester, Kentucky 39495</p>
                                    </div>
                                </div>
                                <div class="contact__item">
                                    <div class="contact__item-thumb">
                                        <span><i class="fa-solid fa-phone"></i></span>
                                    </div>
                                    <div class="contact__item-content">
                                        <h5>Contact</h5>
                                        <p class="mb-0">(405) 555-0128</p>
                                        <p class="mb-0">(603) 555-0123</p>
                                    </div>
                                </div>
                                <div class="contact__item">
                                    <div class="contact__item-thumb">
                                        <span><i class="fa-solid fa-envelope"></i></span>
                                    </div>
                                    <div class="contact__item-content">
                                        <h5>Email</h5>
                                        <p class="mb-0">nvt.isst.nute@gmail.com</p>
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
                            <form action="#" class="account__form">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="account-name"
                                                placeholder="Jhon Doe" required>
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
                                            <input type="email" class="form-control" id="account-email"
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
                                            <input type="text" class="form-control" id="account-mobile"
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
                                            <textarea id="account-desc" class="form-control" rows="4"
                                                placeholder="Write a message..." cols="50"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="account__form-passcheck">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="" id="terms-check">
                                        <label for="terms-check" class="form-check-label">Accept <a href="#"> terms
                                            </a> and <a href="#"> privacy
                                                policy</a>.
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="trk-btn trk-btn--rounded trk-btn--secondary1">Send
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
                            src="https://maps.google.com/maps?q=california&t=&z=10&ie=UTF8&iwloc=&output=embed"></iframe>
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
    <a href="#" class="scrollToTop scrollToTop--home1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
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