<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage | <?php echo _siteconfig('_sitetitle') ?></title>

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
    .menu--style1 li a {
        color: black;
    }
</style>
<body>


    <!-- ===============>> Preloader start here <<================= -->
    <?php include('templates/_preloader.php'); ?>
    <!-- ===============>> Preloader end here <<================= -->


    <!-- ===============>> Header section start here <<================= -->
    <?php include('templates/_header.php'); ?>
    <!-- ===============>> Header section end here <<================= -->



    <!-- ===============>> Banner section start here <<================= -->
    <section class="banner brand-1" style="background-color:#e7e8e8">
        <div class="container">
            <div class="banner__wrapper">

                <!-- banner content -->
                <div class="banner__content banner__content--style1" data-aos="zoom-in" data-aos-duration="1000">
                    <h1 style="color: black;">Transform Your Imagination Into Reality</h1>
                    <p style="color: black;">Creating art and forming artists since 2006</p>
                    <div class="btn-group justify-content-center">
                        <a href="signup" class="trk-btn trk-btn--rounded trk-btn--primary1">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=Hh1UCOizzMc" class="play-btn" data-fslightbox style="color: black;">
                            <img src="assets/images/icon/svg/4.png" alt="play-btn">
                            Watch Video</a>
                    </div>
                </div>

                <!-- banner images -->
                <div class="banner-image">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="banner-image__item" data-aos="fade-right" data-aos-duration="1000">
                                <div class="banner-image__item-inner ">
                                    <img src="assets/images/banner/1.jpeg" style="border-radius: 15px;" alt="banner-image-banner">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="banner-image__item" data-aos="fade-up" data-aos-duration="1000">
                                <div class="banner-image__item-inner banner-image__item-inner--style2">
                                    <img src="assets/images/banner/2.jpeg" style="border-radius: 15px;" alt="banner-image-banner">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="banner-image__item" data-aos="fade-left" data-aos-duration="1000">
                                <div class="banner-image__item-inner">
                                    <img src="assets/images/banner/3.jpeg" style="border-radius: 15px;" alt="banner-image-banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__shape banner__shape--style1">
            <span class="banner__shape-item banner__shape-item--animation"><img src="assets/images/shape/home1/1.webp"
                    alt="roket"></span>
            <span class="banner__shape-item banner__shpae-item--animation"><img src="assets/images/shape/home1/2.webp"
                    alt="book"></span>
            <span class="banner__shape-item banner__shpae-item--animation"><img src="assets/images/shape/home1/3.webp"
                    alt="belon"></span>
            <span class="banner__shape-item banner__shpae-item--animation"><img src="assets/images/shape/home1/4.webp"
                    alt="triangle"></span>
            <span class="banner__shape-item banner__shpae-item--animation"><img src="assets/images/shape/home1/5.webp"
                    alt="circle"></span>
            <div class="banner__shape-item">
                <div class="reviews">
                    <div class="reviews__content">
                        <p style="color: black;"><span class="purecounter" data-purecounter-start="3000" data-purecounter-end="5000"
                                data-purecounter-once="false">5000</span>+ enrolled students</p>
                    </div>
                    <div class="reviews__thumb">
                        <ul>
                            <li><img style="width: 32px;height:32px" src="assets/images/community/avator/home1/1.jpg" alt="user image"></li>
                            <li><img style="width: 32px;height:32px" src="assets/images/community/avator/home1/2.jpg" alt="user image"></li>
                            <li><img style="width: 32px;height:32px" src="assets/images/community/avator/home1/3.jpg" alt="user image"></li>
                            <li><img style="width: 32px;height:32px" src="assets/images/community/avator/home1/4.jpg" alt="user image"></li>
                            <li><img style="width: 32px;height:32px" src="assets/images/community/avator/home1/5.jpg" alt="user image"></li>
                            <li><img style="width: 32px;height:32px" src="assets/images/community/avator/home1/6.jpg" alt="user image"></li>
                            <li><img style="width: 32px;height:32px" src="assets/images/community/avator/home1/7.jpg" alt="user image"></li>
                            <li>
                                <div class="count">
                                    <p class="mb-0"><span class="purecounter" data-purecounter-start="0"
                                            data-purecounter-end="50" data-purecounter-once="false">50</span> <span
                                            class="plus" style="color: black;">+</span></p>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ===============>> Banner section end here <<================= -->




    <!-- ===============>> Course categories section start here <<================= -->
    <section class="categories categories--style1  padding-bottom brand1-bg-1">
        <div class="container">
            <div class="categories__wrapper">
                <div class="row g-4">
                    <div class="col-lg-4" data-aos="fade-right" data-aos-duration="800">
                        <div class="section-header pe-3">
                            <h2>GET <br> INSPIRED</h2>
                            <p>At MONIQART, we cover a full range of courses across all levels of creativity and education.</p>
                            <a href="courses" class="trk-btn trk-btn--rounded trk-btn--secondary1">Explore
                                Categories</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row g-4" data-aos="fade-left" data-aos-duration="800">
                            <?php category_list(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Course categories section end here <<================= -->




    <!-- ===============>> About section start here <<================= -->
    <section class="about about--style1 padding-top padding-bottom">
        <div class="container">
            <div class="about__wrapper">
                <div class="row gx-4 gy-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about__thumb" data-aos="fade-right" data-aos-duration="800">
                            <div class="about__thumb-inner">
                                <div class="about__thumb-image">
                                    <img src="assets/images/about/1.jpg" alt="about-image">
                                    <div class="about__thumb-video">
                                        <img src="assets/images/about/2.png" alt="intro-thumbil">
                                        <div class="about__thumb-plybtn">
                                            <a href="https://www.youtube.com/watch?v=Hh1UCOizzMc" data-fslightbox><img
                                                    src="assets/images/about/play-icon.png" alt="ply-btn"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content" data-aos="fade-left" data-aos-duration="800">
                            <div class="about__content-inner">
                                <span class="subtitle">About Us</span>
                                <h2>Studio Background</h2>
                                <p>Moniqart strives to foster imagination and creativity in our studio by helping students create beautiful art. Whether you’re coming in to spend the day or to truly exploit your talent, you’ll find a blank canvas awaiting you where the world is your oyster. We opened our doors in 2006 and have been creating art and forming artists since.</p>
                                <ul class="about-list">
                                    <li> <img src="assets/images/icon/svg/1.svg" alt="list-icon"> Skill Development</li>
                                    <li> <img src="assets/images/icon/svg/1.svg" alt="list-icon"> Creative Exploration</li>
                                    <li> <img src="assets/images/icon/svg/1.svg" alt="list-icon"> Exam Preparation</li>
                                    <li> <img src="assets/images/icon/svg/1.svg" alt="list-icon"> Exhibition and Showcase Opportunities</li>
                                    <li> <img src="assets/images/icon/svg/1.svg" alt="list-icon"> Art Therapy and Emotional Well-being</li>
                                    <li> <img src="assets/images/icon/svg/1.svg" alt="list-icon"> Access to Resources and Materials</li>
                                </ul>
                                <a href="about-us" class="trk-btn trk-btn--rounded trk-btn--secondary1">Explore More
                                    +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> About section start here <<================= -->



    <!-- ===============>> Popular course section start here <<================= -->

    <section class="course course--style1 padding-top padding-bottom brand-1">
        <div class="container-fluid px-lg-0" data-aos="fade-up" data-aos-duration="800">
            <div class="section-header text-center section-header--dark">
                <h2>Our Most Popular Courses</h2>
                <p class="style4">Learn from a class of professional artists. Get unique insights and perspectives combined with access to effective resources.</p>
            </div>
            <div class="course__wrapper">
                <div class="course__slider swiper">
                    <div class="swiper-wrapper">
                        <?php displayCourses(null, null, 'slider', 5); ?>
                    </div>
                    <div class="slider__pagination-1"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===============>> Popular course section end here <<================= -->



    <!-- ===============>> Story section start here <<================= -->
    <section class="story padding-top padding-bottom">
        <div class="container" data-aos="fade-up" data-aos-duration="800">
            <div class="section-header text-center">
                <h2>Our Success Story</h2>
                <p class="style2">We believe that art has the ability to heal. Our therapy sessions are led by trained and certified art therapist Mona Joy who guides patients in the creative process, encourages them to express themselves through art, and provides support and guidance throughout the process.</p>
            </div>
            <div class="story__wrapper">
                <div class="story__thumb">
                    <div class="story__thumb-inner">
                        <img src="assets/images/story/1.jpg" alt="story-image">
                        <div class="story__thumb-playbtn">
                            <a href="https://youtu.be/BQQS1guufeQ" data-fslightbox><img
                                    src="assets/images/story/2.png" alt="ply-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Story section end here <<================= -->


    <!-- ===============>> Team section start here <<================= -->
    <section class="team  team--style1 padding-bottom" style="display: none;">
        <div class="container" data-aos="fade-up" data-aos-duration="800">
            <div class="team__wrapper">
                <div class="row g-4">
                    <div class="col-md-6 col-sm-12">
                        <div class="team__header" data-aos="fade-right" data-aos-duration="1000">
                            <h2>Meet Our Expert</h2>
                            <p class="style3">Clarity gives you the blocks & components you needto create a truly
                                professional website, landing page or admin panel for your saas
                                components you needto create a truly </p>
                            <a href="mentors.html" class="trk-btn trk-btn--rounded trk-btn--secondary1">All
                                Memebers</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team__item">
                            <div class="team__item-inner">
                                <div class="team__item-thumb">
                                    <img src="assets/images/team/home1/1.png" alt="Team Image">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author">
                                        <h6><a href="mentor-details.html">Jenny Wilson</a> </h6>
                                        <p>UI Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team__item">
                            <div class="team__item-inner">
                                <div class="team__item-thumb">
                                    <img src="assets/images/team/home1/2.png" alt="Team Image">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author">
                                        <h6><a href="mentor-details.html">Robert Fox</a> </h6>
                                        <p>Product Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="team__item">
                            <div class="team__item-inner">
                                <div class="team__item-thumb">
                                    <img src="assets/images/team/home1/3.png" alt="Team Image">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author">
                                        <h6><a href="mentor-details.html">Devon Lane</a> </h6>
                                        <p>Web developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team__item">
                            <div class="team__item-inner">
                                <div class="team__item-thumb">
                                    <img src="assets/images/team/home1/4.png" alt="Team Image">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author">
                                        <h6><a href="mentor-details.html">Jerome Bell</a> </h6>
                                        <p>Marketer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team__item">
                            <div class="team__item-inner">
                                <div class="team__item-thumb">
                                    <img src="assets/images/team/home1/5.png" alt="Team Image">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author">
                                        <h6><a href="mentor-details.html">Marvin McKi</a> </h6>
                                        <p>UX Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team__item">
                            <div class="team__item-inner">
                                <div class="team__item-thumb">
                                    <img src="assets/images/team/home1/6.png" alt="Team Image">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author">
                                        <h6><a href="mentor-details.html">Darrell Bell</a> </h6>
                                        <p>Graphic Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Team section end here <<================= -->


    <!-- ===============>> Community section start here <<================= -->
    <section class="community community--style1 padding-top padding-bottom brand1-bg-1">
        <div class="container" data-aos="fade-up" data-aos-duration="800">
            <div class="section-header text-center">
                <h2>Join the biggest <br>
                    Community of learning</h2>
                <p class="style2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam, quis malesuada sed
                    tristique sed
                    vulputate eleifend urna potenti. Amet non sed eget</p>
            </div>
            <div class="community__wrapper">
                <div class="community__map">
                    <div class="community__map-inner">
                        <div class="community__reviews" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                            <p> <i class="fa-solid fa-heart"></i> Happy Strudents</p>
                            <div class="community__reviews-content">
                                <ul>
                                    <li><img src="assets/images/community/avator/1.png" alt="user image"></li>
                                    <li><img src="assets/images/community/avator/2.png" alt="user image"></li>
                                    <li><img src="assets/images/community/avator/3.png" alt="user image"></li>
                                    <li><img src="assets/images/community/avator/4.png" alt="user image"></li>
                                    <li><img src="assets/images/community/avator/5.png" alt="user image"></li>
                                </ul>
                                <p class="count mb-0">+<span class="purecounter" data-purecounter-start="10"
                                        data-purecounter-end="25" data-purecounter-once="false">25</span>K</p>

                            </div>
                        </div>
                        <img src="assets/images/community/1.png" alt="community image" data-aos="fade-up"
                            data-aos-duration="800">
                        <a href="signup.html" class="trk-btn trk-btn--rounded trk-btn--secondary1">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Community section end here <<================= -->



    <!-- ===============>> Testimonial section start here <<================= -->
    <section class="testimonial testimonial--style1 padding-top padding-bottom brand-1">
        <div class="container" data-aos="fade-up" data-aos-duration="800">
            <div class="section-header text-center section-header--dark">
                <h2>What Clients Have to Say About Us</h2>
                <p class="style2">Our clients rave about our exceptional service and transformative results!</p>
            </div>
            <div class="testimonial__wrapper">
                <div class="testimonial__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <span><i class="fa-solid fa-quote-left"></i></span>
                                        <blockquote class="blockquote">
                                            <p>“My daughter has been a student of Moniqart and the progress that she has been showing is impressive, great teaching and personal attention has been provided to her, anytime the best place and will definitely recommend to my fellow parents.”</p>
                                        </blockquote>
                                        <blockquote class="blockquote">
                                            <p></p>
                                        </blockquote>
                                        <div class="testimonial__item-author">
                                            <p>Verghese Joseph</p>
                                            <span>Parent</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <span><i class="fa-solid fa-quote-left"></i></span>
                                        <blockquote class="blockquote">
                                            <p>“One of thee Best art teacher who has taught me so much. great place for working officials and teens to learn and explore 😙😙”</p>
                                        </blockquote>
                                        <div class="testimonial__item-author">
                                            <p>Stefs Aloor</p>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <span><i class="fa-solid fa-quote-left"></i></span>
                                        <blockquote class="blockquote">
                                            <p>“Quiet an impressive art and detailed work  and service.
                                            Excellent place for kids and especially adults to get their inspiration & skills get perfected..👌”</p>
                                        </blockquote>
                                        <div class="testimonial__item-author">
                                            <p>The Juliusantony</p>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <span><i class="fa-solid fa-quote-left"></i></span>
                                        <blockquote class="blockquote">
                                            <p>“Awesome place for kids and adults also ... excellent teaching ... specially Mona Mam thanks for giving me adorable knowledge ...!!!”</p>
                                        </blockquote>
                                        <div class="testimonial__item-author">
                                            <p>Sarita Visave</p>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <span><i class="fa-solid fa-quote-left"></i></span>
                                        <blockquote class="blockquote">
                                            <p>“I have been always referred to this place for art
                                            Great piece of works ,must try place.”</p>
                                        </blockquote>
                                        <div class="testimonial__item-author">
                                            <p>Pritam Waithi</p>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="testimonial__pagination"></div> -->
                </div>
                <div class="testimonial__author swiper mt-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__author-thumb">
                                <img src="assets/images/testimonial/home1/1.png" alt="author-image">
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__author-thumb">
                                <img src="assets/images/testimonial/home1/2.png" alt="author-image">
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__author-thumb">
                                <img src="assets/images/testimonial/home1/3.png" alt="author-image">
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__author-thumb">
                                <img src="assets/images/testimonial/home1/4.png" alt="author-image">
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__author-thumb">
                                <img src="assets/images/testimonial/home1/5.png" alt="author-image">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Testimonial section end here <<================= -->


    <!-- ===============>> Blog section start here <<================= -->
    <section class="blog blog--style1 padding-top padding-bottom">
        <div class="container">
            <div class="blog__header">
                <h2 class="style2-h2--max20">Latest News, Blog & Articles</h2>
                <a href="blogs" class="trk-btn trk-btn--rounded trk-btn--secondary1">View More</a>
            </div>
            <div class="blog__wrapper">
                <div class="row g-4">
                    <?php displayBlogPosts(null,null,1,3); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Blog section end here <<================= -->

    <!-- ===============>> partner section start here <<================= -->
    <section class="partner padding-bottom" data-aos="fade-up" data-aos-duration="800" style="display: none;">
        <div class="container">
            <div class="section-header text-center">
                <h6>Trusted by 4,000+ companies</h6>
            </div>
            <div class="partner__wrapper">
                <div class="partner__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="partner__item">
                                <div class="partner__item-inner">
                                    <img src="assets/images/partner/1.png" alt="partner logo">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__item">
                                <div class="partner__item-inner">
                                    <img src="assets/images/partner/2.png" alt="partner logo">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__item">
                                <div class="partner__item-inner">
                                    <img src="assets/images/partner/3.png" alt="partner logo">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__item">
                                <div class="partner__item-inner">
                                    <img src="assets/images/partner/4.png" alt="partner logo">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__item">
                                <div class="partner__item-inner">
                                    <img src="assets/images/partner/5.png" alt="partner logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> partner section end here <<================= -->


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