<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<?php
    if(isset($_GET['id']) && isset($_GET['lesson'])){
        $param = $_GET['id'];
        $lesson = $_GET['lesson'];
    }else{
        echo "<script>window.location.href = 'courses';</script>";
    }
    $courseName = singleDetail('tblcourse', '_parmalink', $param, '_coursename');
    $courseID = singleDetail('tblcourse', '_parmalink', $param, '_id');
    $courseBanner = singleDetail('tblcourse', '_parmalink', $param, '_banner');
    $courseThumbnail = singleDetail('tblcourse', '_parmalink', $param, '_thumbnail');
    $courseCategory = singleDetail('tblcourse', '_parmalink', $param, '_categoryid');
    $courseSubCategory = singleDetail('tblcourse', '_parmalink', $param, '_subcategoryid');
    $courseCourseChannel = singleDetail('tblcourse', '_parmalink', $param, '_coursechannel');
    $lessonType = singleDetail('tbllessons', '_id', $lesson, '_lessontype');
    $lessonVideo = singleDetail('tbllessons', '_id', $lesson, '_recordedfilename');
    $lessonTitle = singleDetail('tbllessons', '_id', $lesson, '_lessonname');
    $lessonDetail = singleDetail('tbllessons', '_id', $lesson, '_lessondescription');
    $lessomURL = singleDetail('tbllessons', '_id', $lesson, '_lessonurl');
    $lessonDate = singleDetail('tbllessons', '_id', $lesson, '_lessondate');
    $lessonTime = singleDetail('tbllessons', '_id', $lesson, '_lessontime');
    date_default_timezone_set(_siteconfig('_timezone'));
    $currentDate = date("Y-m-d");
    $currentTime = date("H:i:s");
    
    // Combine the given date and time into a single string
    $givenDateTime = $lessonDate . ' ' . $lessonTime . ':00';

    // Calculate the difference in seconds between the given date/time and the current date/time
    $timeDiff = strtotime($givenDateTime) - strtotime($currentDate . ' ' . $currentTime);

    // Convert the time difference to minutes and seconds
    $timeDiffMinutes = floor($timeDiff / 60);
    $timeDiffSeconds = $timeDiff % 60;
    // if(getCourseStatus($_SESSION['userid'], $courseID ) == 'in-active'){
    //     echo "<script>window.location.href = 'my-account?access=false';</script>";
    // }
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
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />


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
    <div class="pageheader" style="background-image:url(<?php echo base_url('uploads/coursebanner/' . $courseBanner); ?>)">
        <div class="container">
            <div class="pageheader__content">
                <h2><?php echo $courseName; ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Course</li>
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
                    <div class="coursedetails__curriculum">
                        <div class="accordion" id="faqAccordion2">
                            <div class="row g-4">
                                <?php viewLessonPlan($courseID,$param); ?>
                            </div>
                        </div>
                    </div>
                    <a href="my-account" style="width:105%;border-radius:8px;margin-top:50px;margin-left:-10px" class="trk-btn trk-btn--rounded trk-btn--primary1">
                        <span>Get Certificate</span>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="coursedetails__content">
                        <div class="coursedetails__header">
                            <?php 
                                if($lessonType == 'live'){ ?>
                                    <div class="coursedetails__coursereviews" style="margin-bottom: 20px;">
                                        <div class="coursedetails__coursereviews-author">
                                            <div class="coursedetails__coursereviews-designation"><?php
                                                if ($timeDiffMinutes > 15) { ?>
                                                    <h3>Lecture Has Not Started Yet</h3>
                                                    <p>Start Date : <?php echo date("F d, Y", strtotime($lessonDate));?>, <?php echo date("g:i A", strtotime($lessonTime));?> IST</p>
                                                    <a class="trk-btn trk-btn--rounded trk-btn--primary1">
                                                        <?php echo $timeDiffMinutes;?> Minutes Remaining
                                                    </a>
                                                <?php }else{ ?>
                                                    <h3>Lecture Started</h3>
                                                    <p>Start Date : <?php echo date("F d, Y", strtotime($lessonDate));?>, <?php echo date("g:i A", strtotime($lessonTime));?> IST</p>
                                                    <a href="<?php echo $lessomURL; ?>" target="_blank" class="trk-btn trk-btn--rounded trk-btn--primary1">
                                                        Join Live Course
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php }else{ ?>
                                    <video style="width: 100%;border-radius:10px;margin-bottom:20px" id="player" playsinline controls data-poster="<?php echo base_url('uploads/coursethumbnail/' . $courseThumbnail); ?>">
                                        <source src="<?php echo base_url('uploads/recordedlesson/' . $lessonVideo); ?>" type="video/mp4" />
                                        <!-- <source src="/path/to/video.webm" type="video/webm" /> -->

                                        <!-- Captions are optional -->
                                        <!-- <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default /> -->
                                    </video>
                                <?php } ?>
                                <span style="background-color: #FFE3EC;font-size: 0.75rem;padding: 0.60rem 1rem;border-radius: 50px;color: #081A28;font-weight: 500;text-transform: capitalize;">
                                    <?php echo singleDetail('tblcategory', '_id', $courseCategory, '_categoryname'); ?>
                                </span>&nbsp;
                                <span style="background-color: #99fc96;font-size: 0.75rem;padding: 0.60rem 1rem;border-radius: 50px;color: #081A28;font-weight: 500;text-transform: capitalize;">
                                    <?php echo singleDetail('tblsubcategory', '_id', $courseSubCategory, '_subcategoryname'); ?>
                                </span>&nbsp;
                                <span style="background-color: #F2E9FF;font-size: 0.75rem;padding: 0.60rem 1rem;border-radius: 50px;color: #081A28;font-weight: 500;text-transform: capitalize;">
                                    <?php echo $courseCourseChannel; ?>
                                </span>
                        </div>
                        <div class="coursedetails__info">
                            <ul class="nav nav-pills " id="pills-tab" role="tablist">
                                <li class="nav-item active" role="presentation">
                                    <button class="trk-btn active" id="pills-overview-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-overview" role="tab" aria-controls="pills-overview"
                                        aria-selected="true"><i class="fa-solid fa-grip-vertical"></i> Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="trk-btn" id="pills-help-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-help" role="tab" aria-controls="pills-help"
                                        aria-selected="false"> <i class="fa-solid fa-phone"></i> Customer Support</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" content
                                    aria-labelledby="pills-overview-tab" tabindex="0">
                                    <div class="coursedetails__overview">
                                        <h5><?php echo $lessonTitle; ?></h5>
                                        <p><?php echo $lessonDetail; ?></p>
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
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>


    <script src="assets/js/custom.js"></script>


</body>

</html>