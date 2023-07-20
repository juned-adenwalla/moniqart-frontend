<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<?php
    if(isset($_GET['id'])){
        $param = $_GET['id'];
    }else{
        echo "<script>window.location.href = 'courses';</script>";
    }

    // Single Course Data 
    $courseName = singleDetail('tblcourse', '_parmalink', $param, '_coursename');
    $courseDesc = singleDetail('tblcourse', '_parmalink', $param, '_coursedescription');
    $courseDetailDesc = singleDetail('tblcourse', '_parmalink', $param, '_detaileddescription');
    $courseWhatLearn = singleDetail('tblcourse', '_parmalink', $param, '_whatlearn');
    $courseRequirment = singleDetail('tblcourse', '_parmalink', $param, '_requirements');
    $courseEligibility = singleDetail('tblcourse', '_parmalink', $param, '_eligibilitycriteria');
    $courseThumbnail = singleDetail('tblcourse', '_parmalink', $param, '_thumbnail');
    $courseBanner = singleDetail('tblcourse', '_parmalink', $param, '_banner');
    $coursePrice = singleDetail('tblcourse', '_parmalink', $param, '_pricing');
    $courseDiscountedPrice = singleDetail('tblcourse', '_parmalink', $param, '_discountprice');
    $courseTeacher = singleDetail('tblcourse', '_parmalink', $param, '_teacheremailid');
    $courseCategory = singleDetail('tblcourse', '_parmalink', $param, '_categoryid');
    $courseSubCategory = singleDetail('tblcourse', '_parmalink', $param, '_subcategoryid');
    $courseCourseType = singleDetail('tblcourse', '_parmalink', $param, '_coursetype');
    $courseCourseChannel = singleDetail('tblcourse', '_parmalink', $param, '_coursechannel');
    $courseStartDate = strtotime(singleDetail('tblcourse', '_parmalink', $param, '_startdate'));
    $courseEndDate = strtotime(singleDetail('tblcourse', '_parmalink', $param, '_enddate'));
    $coursePreviewURL = singleDetail('tblcourse', '_parmalink', $param, '_previewurl');
    $courseEnrollStatus = singleDetail('tblcourse', '_parmalink', $param, '_enrollstatus');
    $courseid = singleDetail('tblcourse', '_parmalink', $param, '_id');
    // Get the current date
    date_default_timezone_set(_siteconfig('_timezone'));
    $currentDate = date("Y-m-d");

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $courseName; ?> | <?php echo _siteconfig('_sitetitle') ?></title>

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
    <div class="pageheader" style="background-image:url(<?php echo base_url('uploads/coursebanner/' . $courseBanner); ?>">
        <div class="container">
            <div class="pageheader__content">
                <h2><?php echo $courseName; ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Course Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========course details Section start Here========== -->
    <div class="coursedetails coursedetails--style1 padding-top padding-bottom">
        <div class="container" data-aos="fade-up" data-aos-duration="800">
            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-4">
                    <div class="coursedetails__package">
                        <div class="coursedetails__thumb">
                            <img src="<?php echo base_url('uploads/coursethumbnail/' . $courseThumbnail); ?>" alt="packgae-image">
                            <div class="coursedetails__thumb-playbtn">
                                <a href="<?php echo $coursePreviewURL; ?>" data-fslightbox><img
                                        src="assets/images/course/home1/2.png" alt="ply-btn"></a>
                            </div>
                        </div>
                        <div class="coursedetails__offer">
                            <div class="coursedetails__offer-price">
                                <h3><?php echo currency_symbol($_SESSION['baseCurrency']);echo _conversion($courseDiscountedPrice,$_SESSION['baseCurrency']); ?></h3> <span><?php echo currency_symbol($_SESSION['baseCurrency']);echo _conversion($coursePrice,$_SESSION['baseCurrency']); ?></span>
                            </div>
                            <div class="coursedetails__offer-time">
                                <p><i class="fa-solid fa-chart-simple"></i> <span><?php echo $courseCourseType;?></span> Level</p>
                            </div>
                            <?php 
                            if($courseEnrollStatus == 'false'){ ?>
                                <button disabled class="trk-btn trk-btn--border trk-btn--secondary1 d-block">Booking Closed</button>
                            <?php }else if (strtotime($currentDate) < $courseStartDate) { ?>
                                    <button disabled class="trk-btn trk-btn--border trk-btn--secondary1 d-block">Booking Closed</button>
                                    <p style="margin-top: 10px;">Booking Starts at <?php echo date("F d, Y", $courseStartDate); ?></p>
                                <?php }else if(strtotime($currentDate) > $courseEndDate){ ?>
                                    <button disabled class="trk-btn trk-btn--border trk-btn--secondary1 d-block">Booking Closed</button>
                                    <p style="margin-top: 10px;">Booking Closed at <?php echo date("F d, Y", $currentDate); ?></p>
                                <?php }
                                else{ ?>
                                <a href="checkout?id=<?php echo $param; ?>&type=course" class="trk-btn trk-btn--border trk-btn--secondary1 d-block">Buy
                                Now</a>
                            <?php } ?>

                            <div class="coursedetails__offer-social">
                                <ul class="social">
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--rounded5"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--rounded5"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="signin.html" class="social__link social__link--rounded5"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="coursedetails__footer">
                            <p>For details</p>
                            <a href="tel:<?php echo _siteconfig('_sitephone'); ?>"> <i class="fa-solid fa-phone"></i> Call <?php echo _siteconfig('_sitephone'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="coursedetails__content">
                        <div class="coursedetails__header">
                            <h3><?php echo $courseName; ?></h3>
                            <p><?php echo $courseDesc; ?></p>
                            <div class="coursedetails__focus">
                                <span style="background-color: #FFE3EC;font-size: 0.75rem;padding: 0.15rem 1rem;border-radius: 50px;color: #081A28;font-weight: 500;text-transform: capitalize;">
                                    <?php echo singleDetail('tblcategory', '_id', $courseCategory, '_categoryname'); ?>
                                </span>
                                <span style="background-color: #99fc96;font-size: 0.75rem;padding: 0.15rem 1rem;border-radius: 50px;color: #081A28;font-weight: 500;text-transform: capitalize;">
                                    <?php echo singleDetail('tblsubcategory', '_id', $courseSubCategory, '_subcategoryname'); ?>
                                </span>
                                <span style="background-color: #F2E9FF;font-size: 0.75rem;padding: 0.15rem 1rem;border-radius: 50px;color: #081A28;font-weight: 500;text-transform: capitalize;">
                                    <?php echo $courseCourseChannel; ?>
                                </span>
                                <!-- <div class="coursedetails__focus-rating">
                                    <span>4.5</span>
                                </div>
                                <div class="coursedetails__focus-star">
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="coursedetails__focus-count">
                                    <span>(237,732 ratings)</span>
                                </div> -->
                                <!-- <div class="coursedetails__focus-students">
                                    <span>10+ Student</span>
                                </div> -->
                            </div>

                        </div>
                        <div class="coursedetails__info">
                            <ul class="nav nav-pills " id="pills-tab" role="tablist">
                                <li class="nav-item active" role="presentation">
                                    <button class="trk-btn active" id="pills-overview-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-overview" role="tab" aria-controls="pills-overview"
                                        aria-selected="true"><i class="fa-solid fa-grip-vertical"></i> Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="trk-btn" id="pills-curriculum-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-curriculum" role="tab" aria-controls="pills-curriculum"
                                        aria-selected="false"><i class="fa-solid fa-file"></i> What you will Learn?</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="trk-btn" id="pills-requirment-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-requirment" role="tab" aria-controls="pills-requirment"
                                        aria-selected="false"><i class="fa-solid fa-paperclip"></i> Requirment</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="trk-btn" id="pills-eligibility-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-eligibility" role="tab" aria-controls="pills-eligibility"
                                        aria-selected="false"><i class="fa-solid fa-wrench"></i> Eligibility</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="trk-btn" id="pills-help-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-help" role="tab" aria-controls="pills-help"
                                        aria-selected="false"> <i class="fa-solid fa-phone"></i> Help</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" content
                                    aria-labelledby="pills-overview-tab" tabindex="0">
                                    <div class="coursedetails__overview" style="margin-top: 20px;">
                                        <?php echo $courseDetailDesc; ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-curriculum" role="tabpanel"
                                    aria-labelledby="pills-curriculum-tab" tabindex="0">
                                    <div class="coursedetails__curriculum">
                                        <div class="coursedetails__overview" style="margin-top: 20px;">
                                            <?php echo $courseWhatLearn; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-requirment" role="tabpanel"
                                    aria-labelledby="pills-requirment-tab" tabindex="0">
                                    <div class="coursedetails__requirment">
                                        <div class="coursedetails__requirment" style="margin-top: 20px;">
                                            <?php echo $courseRequirment; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-eligibility" role="tabpanel"
                                    aria-labelledby="pills-eligibility-tab" tabindex="0">
                                    <div class="coursedetails__eligibility" style="margin-top: 20px;">
                                        <div class="coursedetails__eligibility">
                                            <?php echo $courseEligibility; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-help" role="tabpanel"
                                    aria-labelledby="pills-help-tab" tabindex="0">
                                    <div class="coursedetails__help">
                                        <div class="coursedetails__overview">
                                            <h5>Welcome to the Course Help Section! </h5>
                                            <p> If you're experiencing any difficulties or have questions regarding your course, we're here to assist you. Our dedicated team of experts is committed to providing you with the support you need to succeed.</p>
                                            <div class="coursedetails__overview-helpline">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="thumb">
                                                            <img src="assets/images/course/home1/1.png"
                                                                alt="packgae-image">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="info ps-3">
                                                            <h6>Our Hotline</h6>
                                                            <a href="tel:<?php echo _siteconfig('_sitephone'); ?>"> <i class="fa-solid fa-phone"></i> Call
                                                            <?php echo _siteconfig('_sitephone'); ?></a>
                                                        </div>
                                                        <div class="info ps-3 mt-4">
                                                            <h6>Email</h6>
                                                            <a href="mailto:<?php echo _siteconfig('_siteemail'); ?>"> <i
                                                                    class="fa-solid fa-envelope"></i>
                                                                <?php echo _siteconfig('_siteemail'); ?></a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ==========course details Section Ends Here========== -->


    <!-- ==========Course Curriculum Section start Here========== -->
    <div class="coursedetails coursedetails--style2 padding-top padding-bottom brand1-bg-1">
        <div class="container" data-aos="fade-up" data-aos-duration="800">
            <div class="coursedetails__wrapper">
                <div class="coursedetails__header">
                    <h3>Course Curriculum</h3>
                    <div class="coursedetails__info">
                        <div class="coursedetails__info-item">
                            <h6><?php echo str_pad(recordCount('tbllessons', '_courseid', $courseid), 2, '0', STR_PAD_LEFT); ?></h6>
                            <span>Lesson Plans</span>
                        </div>
                    </div>
                </div>
                <div class="coursedetails__curriculum">
                    <div class="accordion" id="faqAccordion2">
                        <div class="row g-4">
                            <?php displayLessonPlans($courseid); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Course Curriculum Section Ends Here========== -->



    <!-- ===============>> Mentor details section start here <<================= -->
    <!-- <section class="team team--details padding-top">
        <div class="container" data-aos="fade-up" data-aos-duration="600">
            <div class="section-header">
                <h3>Instructor</h3>
            </div>
            <div class="team__wrapper">
                <div class="row g-5 align-items-center">
                    <div class="col-md-4">
                        <div class="team__thumb">
                            <img src="assets/images/team/home3/3.png" alt="Team Image">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="team__content">
                            <h4 class="mb-0">Marvin McKinney</h4>
                            <p class="designation">Web Designer, Researcher, Instructor at Tork</p>
                            <p class="info">A Zend-certified PHP developer and an active community person who loves to
                                lead and
                                engage with other developers. A full-stack developer with a strong programming
                                background and experience in Alpine.js, Vue.js, React.js, Laravel, Headless/Server less
                                applications, API development, RDBMS, WordPress, and System Architecture.</p>

                            <ul class="social mt-4">
                                <li class="social__item">
                                    <a href="#" class="social__link social__link--rounded5"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social__item">
                                    <a href="#" class="social__link social__link--rounded5"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                                <li class="social__item">
                                    <a href="signin.html" class="social__link social__link--rounded5"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ===============>> Mentor details section end here <<================= -->


    <!-- ===============>>Student Reviews section start here <<================= -->
    <!-- <section class="studentreview padding-top">
        <div class="container" data-aos="fade-up" data-aos-duration="600">
            <div class="section-header">
                <h3>Real Review</h3>
                <p class="mute">Here's what our students have to say about their experience with Designership.</p>
            </div>
            <div class="studentreview__wrapper">
                <div class="studentreview__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="studentreview__item">
                                <div class="studentreview__item-inner">
                                    <div class="studentreview__thumb">
                                        <img class="studentreview__thumb-image"
                                            src="assets/images/testimonial/home1/review/1.png" alt="review Images">
                                        <div class="studentreview__thumb-top">
                                            <img src="assets/images/testimonial/home1/review/Logo.png" alt="icon">
                                            <p>Murphy Kesti...</p>
                                        </div>
                                        <div class="studentreview__thumb-playbtn">
                                            <a href="https://www.youtube.com/watch?v=Hh1UCOizzMc" data-fslightbox><img
                                                    src="assets/images/testimonial/home1/review/Youtube.png"
                                                    alt="ply-btn"></a>
                                        </div>
                                    </div>

                                    <div class="studentreview__item-author">
                                        <h6>Kathryn Murphy</h6>
                                        <span>Graphic Desinger</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="studentreview__item">
                                <div class="studentreview__item-inner">
                                    <div class="studentreview__thumb">
                                        <img class="studentreview__thumb-image"
                                            src="assets/images/testimonial/home1/review/2.png" alt="review Images">
                                        <div class="studentreview__thumb-top">
                                            <img src="assets/images/testimonial/home1/review/Logo.png" alt="icon">
                                            <p>Ralph Testi...</p>
                                        </div>
                                        <div class="studentreview__thumb-playbtn">
                                            <a href="https://www.youtube.com/watch?v=Hh1UCOizzMc" data-fslightbox><img
                                                    src="assets/images/testimonial/home1/review/Youtube.png"
                                                    alt="ply-btn"></a>
                                        </div>
                                    </div>

                                    <div class="studentreview__item-author">
                                        <h6>Jenny Wilson</h6>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="studentreview__item">
                                <div class="studentreview__item-inner">
                                    <div class="studentreview__thumb">
                                        <img class="studentreview__thumb-image"
                                            src="assets/images/testimonial/home1/review/3.png" alt="review Images">
                                        <div class="studentreview__thumb-top">
                                            <img src="assets/images/testimonial/home1/review/Logo.png" alt="icon">
                                            <p>Wilson ley...</p>
                                        </div>
                                        <div class="studentreview__thumb-playbtn">
                                            <a href="https://www.youtube.com/watch?v=Hh1UCOizzMc" data-fslightbox><img
                                                    src="assets/images/testimonial/home1/review/Youtube.png"
                                                    alt="ply-btn"></a>
                                        </div>
                                    </div>

                                    <div class="studentreview__item-author">
                                        <h6>Ralph Edwards</h6>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="studentreview__item">
                                <div class="studentreview__item-inner">
                                    <div class="studentreview__thumb">
                                        <img class="studentreview__thumb-image"
                                            src="assets/images/testimonial/home1/review/4.png" alt="review Images">
                                        <div class="studentreview__thumb-top">
                                            <img src="assets/images/testimonial/home1/review/Logo.png" alt="icon">
                                            <p>Julian Testi...</p>
                                        </div>
                                        <div class="studentreview__thumb-playbtn">
                                            <a href="https://www.youtube.com/watch?v=Hh1UCOizzMc" data-fslightbox><img
                                                    src="assets/images/testimonial/home1/review/Youtube.png"
                                                    alt="ply-btn"></a>
                                        </div>
                                    </div>

                                    <div class="studentreview__item-author">
                                        <h6>Jenny Murphy</h6>
                                        <span>UX Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ===============>>Student Reviews section end here <<================= -->


    <!-- ===============>> Popular course section start here <<================= -->
    <section class="course course--style1 padding-top">
        <div class="container" data-aos="fade-up" data-aos-duration="500">
            <div class="section-header">
                <h2>Some More Courses For You</h2>
            </div>
            <div class="course__wrapper">
                <div class="course__sliderpopular swiper">
                    <div class="swiper-wrapper">
                        <!-- <div class="swiper-slide">
                            <div class="course__item">
                                <div class="course__item-inner">
                                    <div class="course__thumb">
                                        <img src="assets/images/course/1.png" alt="course Images">
                                        <a href="#" class="course__btn course__btn--save"><i
                                                class="fa-regular fa-bookmark"></i></a>
                                    </div>

                                    <div class="course__content">
                                        <div class="course__content-top">
                                            <span class="course__meta-tag course__meta-tag--cat1">Web Development</span>
                                            <div class="course__focus-inner">
                                                <span>4.9</span>
                                                <img src="assets/images/course/star.png" alt="review-star">
                                                <span>(526)</span>
                                            </div>
                                        </div>
                                        <h6> <a href="#">Contrar to popuar belieif loreme Ipsum is an not
                                                consectetur cites of the word in...</a> </h6>
                                        <div class="course__content-bottom">
                                            <a href="#"><img src="assets/images/avatar/1.png" alt="avatar"> Jhon
                                                Doe</a>
                                            <div class="course-price">
                                                <del>$100</del> <span> $50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course__item">
                                <div class="course__item-inner">
                                    <div class="course__thumb">
                                        <img src="assets/images/course/2.png" alt="course Images">
                                        <a href="#" class="course__btn course__btn--save course__btn--active"><i
                                                class="fa-regular fa-bookmark"></i></a>
                                    </div>

                                    <div class="course__content">
                                        <div class="course__content-top">
                                            <span class="course__meta-tag course__meta-tag--cat1">English</span>
                                            <div class="course__focus-inner">
                                                <span>4.5</span>
                                                <img src="assets/images/course/star.png" alt="review-star">
                                                <span>(1326)</span>
                                            </div>
                                        </div>
                                        <h6> <a href="#">How to Learning Basic English
                                                Strategy for Research</a> </h6>
                                        <div class="course__content-bottom">
                                            <a href="#"><img src="assets/images/avatar/2.png" alt="avatar"> Jenny</a>
                                            <div class="course-price">
                                                <del>$100</del> <span> $50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course__item">
                                <div class="course__item-inner">
                                    <div class="course__thumb">
                                        <img src="assets/images/course/3.png" alt="course Images">
                                        <a href="#" class="course__btn course__btn--save"><i
                                                class="fa-regular fa-bookmark"></i></a>
                                    </div>

                                    <div class="course__content">
                                        <div class="course__content-top">
                                            <span class="course__meta-tag course__meta-tag--cat2">Content Writing</span>
                                            <div class="course__focus-inner">
                                                <span>4.5</span>
                                                <img src="assets/images/course/star.png" alt="review-star">
                                                <span>(326)</span>
                                            </div>
                                        </div>
                                        <h6> <a href="#">Content is King: Writing Killer Conte-nt Web & Marketing</a>
                                        </h6>
                                        <div class="course__content-bottom">
                                            <a href="#"><img src="assets/images/avatar/3.png" alt="avatar"> Theresa</a>
                                            <div class="course-price">
                                                <del>$100</del> <span> $50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course__item">
                                <div class="course__item-inner">
                                    <div class="course__thumb">
                                        <img src="assets/images/course/4.png" alt="course Images">
                                        <a href="#" class="course__btn course__btn--save course__btn--active"><i
                                                class="fa-regular fa-bookmark"></i></a>
                                    </div>

                                    <div class="course__content">
                                        <div class="course__content-top">
                                            <span class="course__meta-tag course__meta-tag--cat3">Art & Design</span>
                                            <div class="course__focus-inner">
                                                <span>4.5</span>
                                                <img src="assets/images/course/star.png" alt="review-star">
                                                <span>(2326)</span>
                                            </div>
                                        </div>
                                        <h6> <a href="#">How to Learning Basic design
                                                Strategy for Research.</a> </h6>
                                        <div class="course__content-bottom">
                                            <a href="#"><img src="assets/images/avatar/4.png" alt="avatar">
                                                Rani</a>
                                            <div class="course-price">
                                                <del>$100</del> <span> $50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <?php displayCourses(null, null, 'slider', 5); ?>
                    </div>
                    <div class="slider__pagination-1"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Popular course section end here <<================= -->






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