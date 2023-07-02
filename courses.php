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
                    <form action="#" method="post">
                        <select name="category" class="form-select" onchange="this.form.submit()">
                            <option value="#">Category</option>
                            <?php category_filter(); ?>
                        </select>
                    </form>
                </div>
                <div class="course__topbar-right">
                    <div class="course__search">
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
            </div>

            <div class="course__wrapper" data-aos="fade-up" data-aos-duration="1000">
                <div class="row g-4">
                    <?php 
                        if(isset($_POST['category'])){
                            displayCourses($_POST['category'], null, 'grid', 5);
                        }else{
                            displayCourses(null, null, 'grid', 5);
                        }
                    ?>
                </div>
                <div class="paginations">
                    <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-left"></i></a>
                        </li>
                        <li>
                            <a href="#" class="active">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li class="d-none d-sm-block">
                            <a href="#">3</a>
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