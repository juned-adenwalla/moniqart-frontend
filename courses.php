<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Courses | <?php echo _siteconfig('_sitetitle') ?></title>

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
    <div class="pageheader" style="background-image:url(assets/images/bg/home1/2.jpg)">
        <div class="container">
            <div class="pageheader__content">
                <h2>All Courses</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Courses</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->




    <!-- ==========Courses Section start Here========== -->
    <div class="course course--style1 padding-top padding-bottom">
        <div class="container">
            <div class="course__topbar mb-5" data-aos="fade-up" data-aos-duration="800">
                <div class="course__topbar-left">
                    <form action="#" method="get">
                        <select name="category" class="form-select" onchange="this.form.submit()">
                            <option value="#">Category</option>
                            <?php category_filter(); ?>
                        </select>
                    </form>
                </div>
                <div class="course__topbar-right">
                    <div class="course__search">
                        <div class="body">
                            <form class="" action="#" method="get">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search">
                                    <button type="submit" class="search-btn"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="course__wrapper" data-aos="fade-up" data-aos-duration="1000">
                <div class="row g-4">
                    <?php 
                        $limit = 10;
                        $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number from the query string
                        $offset = ($page - 1) * $limit; // Calculate the offset based on the current page
                        if(isset($_GET['category'])){
                            displayCourses($_GET['category'], null, 'grid', $limit, $offset);
                        }else if(isset($_GET['search'])){
                            displayCourses(null, $_GET['search'], 'grid', $limit, $offset);
                        }else{
                            displayCourses(null, null, 'grid', $limit, $offset);
                        }
                    ?>
                </div>
                <div class="paginations">
                    <?php
                        // Display the pagination links
                        if(isset($_GET['search'])){
                            $totalCourses = getTotalCourses(null, $_GET['search']); // Function to get the total number of courses based on the filters
                        }else if(isset($_GET['category'])){
                            $totalCourses = getTotalCourses($_GET['category'], null);
                        }else{
                            $totalCourses = getTotalCourses();
                        }                   
                        $totalPages = ceil($totalCourses / $limit); // Calculate the total number of pages
                    ?>
                    <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                        <li>
                            <a href="courses?page=1"><i class="fa-solid fa-arrow-left"></i></a>
                        </li>
                        <li>
                            <?php 
                                for ($i = 1; $i <= $totalPages; $i++){
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