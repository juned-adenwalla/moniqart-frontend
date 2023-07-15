<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts | <?php echo _siteconfig('_sitetitle') ?></title>

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
    <div class="pageheader" style="background-image:url(assets/images/bg/home1/4.jpg)">
        <div class="container">
            <div class="pageheader__content">
                <h2>Blogs</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->



    <!-- ===============>> Blog section start here <<================= -->
    <section class="blog blog--style1 padding-top padding-bottom" data-aos="fade-up" data-aos-duration="800">
        <div class="container">
            <div class="section-header text-center">
                <h2>Latest News, Blog & Articles</h2>
            </div>
            <div class="blog__wrapper">
                <div class="row g-4">
                    <?php 
                        $limit = 10;
                        $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number from the query string
                        $offset = ($page - 1) * $limit; // Calculate the offset based on the current page
                        displayBlogPosts($category = null, $search = null, $page = 1, $limit, $offset); 
                    ?>
                </div>
                <div class="paginations">
                    <?php
                        $totalPosts = getTotalBlogPosts();
                        $totalPages = ceil($totalPosts / $limit); // Calculate the total number of pages
                    ?>    
                    <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                        <li>
                            <a href="blogs?page=1"><i class="fa-solid fa-arrow-left"></i></a>
                        </li>
                        <li>
                            <?php
                            for ($i = 1; $i <= $totalPages; $i++) {
                                echo '<a href="?page=' . $i . '">' . $i . '</a>';
                            }
                            ?>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Blog section end here <<================= -->








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