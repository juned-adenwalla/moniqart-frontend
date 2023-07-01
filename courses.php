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
    <div class="pageheader" style="background-image:url(assets/images/bg/home1/2.png)">
        <div class="container">
            <div class="pageheader__content">
                <h2>Courses</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Courses</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->




    <!-- ==========Courses Section start Here========== -->
    <div class="course course--style1 padding-top padding-bottom">
        <div class="container">
            <div class="course__topbar">
                <div class="course__topbar-left" data-aos="fade-right" data-aos-duration="800">
                    <select name="cars" class="form-select">
                        <option value="filter">Filter By</option>
                        <option value="content">UI/UX </option>
                        <option value="web">Web Design</option>
                        <option value="graphic">Graphic</option>
                        <option value="seo">Social</option>
                    </select>
                </div>
                <div class="course__topbar-right" data-aos="fade-left" data-aos-duration="800">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <!-- <a class="tab-btn active" id="pills-english-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-english" type="button" role="tab" aria-controls="pills-english"
                                aria-selected="true">English</a> -->
                            <button class="tab-btn active" id="pills-english-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-english" role="tab" aria-controls="pills-english"
                                aria-selected="true">English</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="tab-btn" id="pills-data-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-data" role="tab" aria-controls="pills-data"
                                aria-selected="false">Data
                                Science</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="tab-btn" id="pills-content-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-content" role="tab" aria-controls="pills-content"
                                aria-selected="false">Content Writing</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="tab-btn" id="pills-development-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-development" role="tab" aria-controls="pills-development"
                                aria-selected="false">Development</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="tab-btn" id="pills-art-tab" data-bs-toggle="pill" data-bs-target="#pills-art"
                                role="tab" aria-controls="pills-art" aria-selected="false">Art &
                                Design</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="tab-btn" id="pills-management-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-management" role="tab" aria-controls="pills-management"
                                aria-selected="false">Management</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="course__wrapper" data-aos="fade-up" data-aos-duration="800">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-english" role="tabpanel" content
                        aria-labelledby="pills-english-tab" tabindex="0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
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
                                            <h6> <a href="course-details.html">How to Learning Basic English
                                                    Strategy for Research</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar"> Jenny
                                                </a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/1.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">The Ultimate Guide to Learning Full Stack
                                                    Web Design in 6
                                                    month.</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Jhon
                                                    Doe</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/3.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/5.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">The Data Science Course 2023: Complete
                                                    Data Science
                                                    Bootcamp</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Jhon
                                                    Doe</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $30.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/6.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/4.png" alt="course Images">
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
                                            <h6> <a href="course-details.html">How to Learning Basic English
                                                    Strategy for Research</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar">
                                                    Wilsone</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/7.png" alt="course Images">
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
                                            <h6> <a href="course-details.html">Management Skills - Team Leadership
                                                    Skills Masterclass
                                                    2023</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar"> Jenny</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $10.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/8.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Theresa
                                                </a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/9.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Investment Analysis & Portfolio
                                                    Management - Core
                                                    Finance</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-data" role="tabpanel" aria-labelledby="pills-data-tab"
                        tabindex="0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/5.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">The Data Science Course 2023: Complete
                                                    Data Science
                                                    Bootcamp</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Jhon
                                                    Doe</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $30.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/6.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/4.png" alt="course Images">
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
                                            <h6> <a href="course-details.html">How to Learning Basic English
                                                    Strategy for Research</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar">
                                                    Wilsone</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/7.png" alt="course Images">
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
                                            <h6> <a href="course-details.html">Management Skills - Team Leadership
                                                    Skills Masterclass
                                                    2023</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar"> Jenny</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $10.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/8.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Theresa
                                                </a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/9.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Investment Analysis & Portfolio
                                                    Management - Core
                                                    Finance</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-content" role="tabpanel" aria-labelledby="pills-content-tab"
                        tabindex="0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/7.png" alt="course Images">
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
                                            <h6> <a href="course-details.html">Management Skills - Team Leadership
                                                    Skills Masterclass
                                                    2023</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar"> Jenny</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $10.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/8.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Theresa
                                                </a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/9.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Investment Analysis & Portfolio
                                                    Management - Core
                                                    Finance</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/5.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">The Data Science Course 2023: Complete
                                                    Data Science
                                                    Bootcamp</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Jhon
                                                    Doe</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $30.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/6.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/4.png" alt="course Images">
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
                                            <h6> <a href="course-details.html">How to Learning Basic English
                                                    Strategy for Research</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar"> Jenny</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-development" role="tabpanel"
                        aria-labelledby="pills-development-tab" tabindex="0">
                        <div class="row g-4">

                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/3.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
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
                                            <h6> <a href="course-details.html">How to Learning Basic English
                                                    Strategy for Research</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar"> Jenny</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/1.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">The Ultimate Guide to Learning Full Stack
                                                    Web Design in 6
                                                    month.</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Jhon
                                                    Doe</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/5.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">The Data Science Course 2023: Complete
                                                    Data Science
                                                    Bootcamp</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Jhon
                                                    Doe</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $30.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/6.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/4.png" alt="course Images">
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
                                            <h6> <a href="course-details.html">How to Learning Basic English
                                                    Strategy for Research</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar">
                                                    Wilsone</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-art" role="tabpanel" aria-labelledby="pills-art-tab"
                        tabindex="0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
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
                                            <h6> <a href="course-details.html">How to Learning Basic English
                                                    Strategy for Research</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar"> Jenny</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/1.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">The Ultimate Guide to Learning Full Stack
                                                    Web Design in 6
                                                    month.</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Jhon
                                                    Doe</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/3.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/7.png" alt="course Images">
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
                                            <h6> <a href="course-details.html">Management Skills - Team Leadership
                                                    Skills Masterclass
                                                    2023</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar">
                                                    Wilsone</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $10.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/8.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Theresa
                                                </a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $60.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/9.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Investment Analysis & Portfolio
                                                    Management - Core
                                                    Finance</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-management" role="tabpanel"
                        aria-labelledby="pills-management-tab" tabindex="0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/3.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar">
                                                    Webb</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/5.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">The Data Science Course 2023: Complete
                                                    Data Science
                                                    Bootcamp</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Jhon
                                                    Doe</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $30.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/6.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>
                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat2">Content
                                                    Writing</span>
                                                <div class="course__focus-inner">
                                                    <span>4.5</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(326)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a>
                                            </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/3.png"
                                                        alt="avatar"> Theresa</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/4.png" alt="course Images">
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
                                            <h6> <a href="course-details.html">How to Learning Basic English
                                                    Strategy for Research</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar"> Jenny</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $50.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/7.png" alt="course Images">
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
                                            <h6> <a href="course-details.html">Management Skills - Team Leadership
                                                    Skills Masterclass
                                                    2023</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/2.png"
                                                        alt="avatar">
                                                    Wilsone</a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $10.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course__item">
                                    <div class="course__item-inner">
                                        <div class="course__thumb">
                                            <img src="assets/images/course/8.png" alt="course Images">
                                            <a href="#" class="course__btn course__btn--save"><i
                                                    class="fa-regular fa-bookmark"></i></a>
                                        </div>

                                        <div class="course__content">
                                            <div class="course__content-top">
                                                <span class="course__meta-tag course__meta-tag--cat1">Web
                                                    Development</span>
                                                <div class="course__focus-inner">
                                                    <span>4.9</span>
                                                    <img src="assets/images/course/star.png" alt="review-star">
                                                    <span>(526)</span>
                                                </div>
                                            </div>
                                            <h6> <a href="course-details.html">Content is King: Writing Killer Conte-nt
                                                    Web &
                                                    Marketing</a> </h6>
                                            <div class="course__content-bottom">
                                                <a href="mentor-details.html"><img src="assets/images/avatar/1.png"
                                                        alt="avatar"> Theresa
                                                </a>
                                                <div class="course-price">
                                                    <del>$100</del> <span> $60.00</span>
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
    <!-- ==========Courses Section Ends Here========== -->







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