<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<?php 

    if(isset($_GET['id'])){
        $param = $_GET['id'];
    }else{
        echo "<script>window.location.href = '404';</script>";
    }

    $blogName = singleDetail('tblblog', '_parmalink', $param, '_blogtitle');
    $blogDesc = singleDetail('tblblog', '_parmalink', $param, '_blogdesc');
    $blogImg = singleDetail('tblblog', '_parmalink', $param, '_blogimg');
    $blogDate = date('d F Y',strtotime(singleDetail('tblblog', '_parmalink', $param, 'Creation_at_Date')));
    $blogAuthor = singleDetail('tblblog', '_parmalink', $param, '_userid');
    $blogCategory = singleDetail('tblblog', '_parmalink', $param, '_blogcategory');
    $blogSubCategory = singleDetail('tblblog', '_parmalink', $param, '_blogsubcategory');

    ?>  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $blogName; ?> | <?php echo _siteconfig('_sitetitle') ?></title>

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
    <div class="pageheader" style="background-image:url(assets/images/bg/home1/1.webp)">
        <div class="container">
            <div class="pageheader__content">
                <h2><?php echo $blogName; ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->




    <!-- ===============>> Blog-details section start here <<================= -->
    <div class="blog home blog--details padding-top padding-bottom">
        <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="section__wrapper">
                <div class="row g-5">
                    <div class="col-lg-12 col-12">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="blog__item">
                                    <div class="blog__inner">
                                        <div class="blog__thumb">
                                            <img src="<?php echo base_url('uploads/blogsPics/' . $blogImg); ?>" alt="blog-images">
                                        </div>
                                        <div class="blog__content">
                                            <div class="blog__meta">
                                                <ul>
                                                    <li><i class="fa-solid fa-user"></i>
                                                        <?php echo singleDetail('tblusers', '_id', $blogAuthor, '_username'); ?>
                                                    </li>
                                                    <li><i class="fa-solid fa-clock"></i>
                                                        <?php echo $blogDate; ?>
                                                    </li>
                                                    <li>
                                                        <span style="background-color: #FFE3EC;font-size: 0.75rem;padding: 0.15rem 1rem;border-radius: 50px;color: #081A28;font-weight: 500;text-transform: capitalize;">
                                                            <?php echo singleDetail('tblcategory', '_id', $blogCategory, '_categoryname'); ?>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span style="background-color: #99fc96;font-size: 0.75rem;padding: 0.15rem 1rem;border-radius: 50px;color: #081A28;font-weight: 500;text-transform: capitalize;">
                                                            <?php echo singleDetail('tblsubcategory', '_id', $blogSubCategory, '_subcategoryname'); ?>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h2><?php echo $blogName; ?></h2>
                                            <p><?php echo $blogDesc; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__tag">
                                    <ul class="social-link-list">
                                        <li><a href="#" class="facebook"><i
                                                    class="fa-brands fa-facebook-f"></i>Share</a>
                                        </li>
                                        <li><a href="#" class="twitter"><i class="fa-brands fa-twitter"></i>Tweet</a>
                                        </li>
                                        <li><a href="#" class="linkedin"><i
                                                    class="fa-brands fa-linkedin-in"></i>LinkedIn</a>
                                        </li>
                                    </ul>
                                    <!-- <ul class="tags">
                                        <li><a href="#">Advices</a></li>
                                        <li><a href="#">business</a></li>
                                        <li><a href="#">strategy</a></li>
                                    </ul> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-8  col-12">
                        <div class="sidebar">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="sidebar__search">
                                        <div class="body">
                                            <form class="" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <button type="submit" class="search-btn"><i
                                                            class="fa-solid fa-magnifying-glass"></i></button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="sidebar__recentpost">
                                        <div class="head">
                                            <h6>Recent Post</h6>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>
                                                    <div class="thumb">
                                                        <a href="blog-details.html"><img
                                                                src="assets/images/blog/home3/details/2.png"
                                                                alt="recentpost-image"></a>
                                                    </div>
                                                    <div class="content">
                                                        <p><a href="blog-details.html">How to create natural backlinks
                                                                that produce results</a></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <a href="blog-details.html"><img
                                                                src="assets/images/blog/home3/details/3.png"
                                                                alt="recentpost-image"></a>
                                                    </div>
                                                    <div class="content">
                                                        <p><a href="blog-details.html">How to create natural backlinks
                                                                that produce results</a></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <a href="blog-details.html"><img
                                                                src="assets/images/blog/home3/details/4.png"
                                                                alt="recentpost-image"></a>
                                                    </div>
                                                    <div class="content">
                                                        <p><a href="blog-details.html">How to create natural backlinks
                                                                that produce results</a></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="sidebar__categorie">
                                        <div class="head">
                                            <h6>Categories</h6>
                                        </div>
                                        <div class="body">
                                            <div class="content">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Advices</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Business</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Consulting</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Marketing</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Personal</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="sidebar__tags">
                                        <div class="head">
                                            <h6>Tags</h6>
                                        </div>
                                        <div class="body">
                                            <div class="content">
                                                <ul>
                                                    <li><a href="#" class="active">Web Design</a></li>
                                                    <li><a href="#">Education</a></li>
                                                    <li><a href="#">Marketing</a></li>
                                                    <li><a href="#">Seo</a></li>
                                                    <li><a href="#">Graphic Design</a></li>
                                                    <li><a href="#">Management</a></li>
                                                    <li><a href="#">Learning</a></li>
                                                    <li><a href="#">Development</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ===============>> Blog-details section end here <<================= -->



    <!-- ===============>> Blog section start here <<================= -->
    <section class="blog blog--style1  padding-bottom" data-aos="fade-up" data-aos-duration="800">
        <div class="container">
            <div class="section-header">
                <h2>Latest Article</h2>
            </div>
            <div class="blog__wrapper">
                <div class="row g-4">
                    <?php displayBlogPosts(null,null,1,3); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Blog section end here <<================= -->





    <!-- ===============>> Blog comment start here <<================= -->
    <!-- <div class="blog home blog--details padding-bottom">
        <div class="container" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <div class="section__wrapper">
                <div class="row g-5">
                    <div class="col-lg-8 col-12">
                        <div class="row g-4 justify-content-center">
                            <div class="sidebar">
                                <div class="row g-5">
                                    <div class="col-12">
                                        <div class="sidebar__comment">
                                            <div class="head">
                                                <h3 class="comment">2 Comment</h3>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li class="sidebar__comment-item">
                                                        <div class="comment">
                                                            <div class="thumb">
                                                                <img src="assets/images/blog/home3/details/5.png"
                                                                    alt="comment-author">
                                                            </div>
                                                            <div class="content">
                                                                <div class="content__top">
                                                                    <div class="name">
                                                                        <h6>Rassel Hossain</h6>
                                                                        <span>24 Marrch 2023 , at 02:00 pm</span>
                                                                    </div>
                                                                    <div class="reply reply--web">
                                                                        <a href="#post" class=""> <i
                                                                                class="fa-solid fa-reply"></i> reply</a>
                                                                    </div>
                                                                </div>
                                                                <div class="content__bottom">
                                                                    <p>believe that everyone should have the chance to
                                                                        advance technology and get new skills. For the
                                                                        first time, Sydney's price of luxury homes
                                                                        dropped. Our sports writers and arts critics
                                                                        from around the world.</p>

                                                                    <div class="reply reply--mobile">
                                                                        <a href="#post" class=""> <i
                                                                                class="fa-solid fa-reply"></i> reply</a>
                                                                    </div>
                                                                </div>

                                                                <ul>
                                                                    <li>
                                                                        <div class="comment comment--reply">
                                                                            <div class="thumb">
                                                                                <img src="assets/images/blog/home3/details/6.png"
                                                                                    alt="comment-author">
                                                                            </div>
                                                                            <div class="content">
                                                                                <div class="content__top">
                                                                                    <div class="name">
                                                                                        <p>Jacob Jones</p>
                                                                                        <span>26 April 2023 , at 02:00
                                                                                            pm</span>
                                                                                    </div>
                                                                                    <div class="reply reply--web">
                                                                                        <a href="#post"><i
                                                                                                class="fa-solid fa-reply"></i>
                                                                                            reply</a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="content__bottom">
                                                                                    <p class="reply">believe that
                                                                                        everyone should have
                                                                                        the chance to advance technology
                                                                                        and get new skills. For the
                                                                                        first time, Sydney's price of
                                                                                        luxury homes dropped. Our sports
                                                                                        writers and arts critics from
                                                                                        around the world.</p>
                                                                                    <div class="reply reply--mobile">
                                                                                        <a href="#post" class=""> <i
                                                                                                class="fa-solid fa-reply"></i>
                                                                                            reply</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <li class="sidebar__comment-item">
                                                        <div class="comment">
                                                            <div class="thumb">
                                                                <img src="assets/images/blog/home3/details/7.png"
                                                                    alt="comment-author">
                                                            </div>
                                                            <div class="content">
                                                                <div class="content__top">
                                                                    <div class="name">
                                                                        <h6>Johanna Erika</h6>
                                                                        <span>26 Marrch 2023 , at 02:00 pm</span>
                                                                    </div>
                                                                    <div class="reply reply--web">
                                                                        <a href="#post"> <i
                                                                                class="fa-solid fa-reply"></i>
                                                                            reply</a>
                                                                    </div>
                                                                </div>
                                                                <div class="content__bottom">
                                                                    <p>Sedut perspicati und omnis istesre natu error
                                                                        sitilei voluptatem accusantium doloremque
                                                                        laudantium totam rem aperiam eaque</p>

                                                                    <div class="reply reply--mobile">
                                                                        <a href="#post" class=""> <i
                                                                                class="fa-solid fa-reply"></i> reply</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="sidebar__commentForm" id="post">
                                            <div class="head">
                                                <h3>Post a Comment</h3>
                                            </div>
                                            <div class="body">

                                                <form action="/">
                                                    <div class="row g-4">
                                                        <div class="col-lg-6">
                                                            <div class="input-group">
                                                                <input class="form-control" type="text"
                                                                    placeholder="Full Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="input-group">
                                                                <input class="form-control" type="text"
                                                                    placeholder="Subject">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="input-group">
                                                                <input class="form-control" type="email"
                                                                    placeholder="Email here">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="input-group">
                                                                <textarea cols="30" rows="5" class="form-control"
                                                                    placeholder="Enter Your Message"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="trk-btn trk-btn--rounded trk-btn--secondary1 mt-5">Post
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ===============>> Blog comment end here <<================= -->




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