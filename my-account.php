<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account | <?php echo _siteconfig('_sitetitle') ?></title>

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
    .upload-image {
        cursor: pointer;
    }
    #imageFile {
        display: none;
    }
</style>
<body>


    <!-- ===============>> Preloader start here <<================= -->
    <?php include('templates/_preloader.php'); ?>
    <!-- ===============>> Preloader end here <<================= -->


    <!-- ===============>> Header section start here <<================= -->
    <?php include('templates/_header.php'); ?>
    <!-- ===============>> Header section end here <<================= -->

    <?php
    if(!isset($_SESSION['userid'])){
        echo "<script>window.location.href = 'signin';</script>";
    }
    if(isset($_FILES['profilepic'])){
        $file = $_FILES['profilepic'];

        // Specify the directory to which the file should be uploaded
        $uploadDir = base_url('uploads/profile/');

        // Generate a unique filename for the uploaded file
        $filename = uniqid() . '_' . $file['name'];

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($file['tmp_name'], $uploadDir . $filename)) {
            echo 'File uploaded successfully.';
        } else {
            echo 'Error uploading file.';
        }
    }
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['dob'];
        $location = $_POST['address'];
        $state = $_POST['country'];
        $pin = $_POST['postcode'];
        $bio = $_POST['bio'];
        updateUser($name, $email, $phone, $bio, $age, $location, $state, $pin);
    }
    if(isset($_GET['purchase'])){
        if($_GET['purchase'] == 'failed'){
            require('includes/_alert.php');
            $alert = new PHPAlert();
            $alert->warn("Purchase Failed");
        }else{
            require('includes/_alert.php');
            $alert = new PHPAlert();
            $alert->success("Purchase Success");
        }
    }
    if(isset($_GET['logout'])){
        session_destroy();
        echo "<script>window.location.href = 'signin';</script>";
    }
    ?>

    <!-- ==========Page Header Section Starts Here========== -->
    <div class="pageheader" style="background-image:url(assets/images/bg/home1/3.png)">
        <div class="container">
            <div class="pageheader__content">
                <h2><?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_username'); ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
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
                <div class="col-lg-12">
                    <div class="coursedetails__content">
                        <div class="coursedetails__header">
                            <div class="row">
                                <div class="col-lg-1">
                                    <form action="" enctype="multipart/form-data" method="post" style="margin-top: 30px;">
                                        <?php
                                        if(singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userdp')){ ?>
                                            <img style="border-radius: 12px;" src="<?php echo base_url('uploads/profile/' . singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userdp')); ?>" class="upload-image" onclick="document.getElementById('imageFile').click();" alt="">
                                            <input type="file" name="profilepic" onchange="this.form.submit()" id="imageFile" name="imageFile">
                                        <?php }else{ ?>
                                            <img src="assets/images/avatar/user.png" alt="" class="upload-image" onclick="document.getElementById('imageFile').click();">
                                            <input type="file" name="profilepic" onchange="this.form.submit()" id="imageFile" name="imageFile">
                                        <?php } ?>
                                    </form>
                                </div>
                                <div class="col-lg-11">
                                    <h3 style="margin-top: 20px;">👋 Welcome, <?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_username'); ?></h3>
                                    <!-- <p>Become a Full-Stack Web Developer with just ONE Course. HTML,CSS,Javascript,
                                    Node,React, MongoBD, Web3 and DApps</p> -->
                                    <div class="coursedetails__focus">
                                        <span style="background-color: #FFE3EC;font-size: 0.75rem;padding: 0.15rem 1rem;border-radius: 50px;color: #081A28;font-weight: 500;text-transform: capitalize;">
                                            <?php 
                                                if(!singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_usermembership')){ ?>
                                                    No Valid Membership
                                                <?php }else{
                                                    echo singleDetail('tblmembership', '_id', singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_usermembership'), '_membershipname');
                                                }
                                            ?>
                                        </span>
                                        <span>
                                            &nbsp;&nbsp;<a class="badge bg-secondary" href="my-account?logout=true"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="coursedetails__info">
                            <ul class="nav nav-pills " id="pills-tab" role="tablist">
                                <li class="nav-item active" role="presentation">
                                    <button class="trk-btn active" id="pills-edit-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-edit-profile" role="tab" aria-controls="pills-edit-profile"
                                        aria-selected="true"><i class="fa-solid fa-pen-to-square"></i> Edit Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="trk-btn" id="pills-transactions-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-transactions" role="tab" aria-controls="pills-transactions"
                                        aria-selected="false"><i class="fa-solid fa-building-columns"></i>Transactions</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="trk-btn" id="pills-my-courses-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-my-courses" role="tab" aria-controls="pills-my-courses"
                                        aria-selected="false"><i class="fa-solid fa-chalkboard-user"></i>My Courses</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="trk-btn" id="pills-my-orders-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-my-orders" role="tab" aria-controls="pills-my-orders"
                                        aria-selected="false"><i class="fa-solid fa-cart-shopping"></i>My Orders</button>
                                </li>
                                <?php
                                if(singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_usertype') == 1){ ?>
                                    <li class="nav-item" role="presentation">
                                        <button class="trk-btn" id="pills-my-instructor-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-my-instructor" role="tab" aria-controls="pills-my-instructor"
                                        aria-selected="false"><i class="fa-solid fa-network-wired"></i>Instructor</button>
                                    </li>
                                <?php }?>
                                <li class="nav-item" role="presentation">
                                    <button class="trk-btn" id="pills-help-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-help" role="tab" aria-controls="pills-help"
                                        aria-selected="false"> <i class="fa-solid fa-phone"></i> Help</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-edit-profile" role="tabpanel" content
                                    aria-labelledby="pills-edit-profile-tab" tabindex="0">
                                    <div class="coursedetails__edit-profile" style="margin-top: 30px;">
                                        <div class="coursedetails__reviewform">
                                            <form class="row g-3" method="post" action="">
                                                <div class="col-lg-3">
                                                    <label for="inputEmail4" class="form-label">Full Name</label>
                                                    <input type="text" name="name" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_username'); ?>" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="inputEmail4" class="form-label">Email Id</label>
                                                    <input type="email" name="email" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_useremail'); ?>" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="inputEmail4" class="form-label">Phone Number</label>
                                                    <input type="tel" name="phone" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userphone'); ?>"  class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="inputPassword4" class="form-label">Date of Birth</label>
                                                    <input type="date" name="dob" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userage'); ?>"  class="form-control" id="inputPassword4">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="inputAddress" class="form-label">Base Currency</label>
                                                    <select name="currency" class="form-control">
                                                        <?php _allcurrency(); ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="inputAddress" class="form-label">Address</label>
                                                    <input type="text" name="address" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userlocation'); ?>"  class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="inputAddress2" class="form-label">Country</label>
                                                    <input type="text" name="country" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userstate'); ?>"  class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="inputZip" class="form-label">Zip</label>
                                                    <input type="text" name="postcode" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userpin'); ?>"  class="form-control" id="inputZip">
                                                </div>
                                                <div class="col-lg-12">
                                                    <label for="inputZip" class="form-label">Biography</label>
                                                    <textarea name="bio" id="" rows="3" class="form-control"><?php echo htmlspecialchars(singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userbio')); ?></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" style="margin-top: 10px;border-radius:12px" name="update" class="trk-btn trk-btn--rounded trk-btn--primary1">Update Profile</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-transactions" role="tabpanel"
                                    aria-labelledby="pills-transactions-tab" tabindex="0">
                                    <div class="coursedetails__transactions">
                                        <div class="coursedetails__transactions">
                                            <div class="coursedetails__reviewform table-responsive">
                                                <table class="table" style="white-space: nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Payment ID</th>
                                                            <th scope="col">Currency</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Offer</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php userTransactions(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-my-courses" role="tabpanel"
                                    aria-labelledby="pills-my-courses-tab" tabindex="0">
                                    <div class="coursedetails__my-courses" style="margin-top: 20px;">
                                        <div class="coursedetails__reviewform" style="padding-top: 10px">
                                            <?php userCourses(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-my-orders" role="tabpanel"
                                    aria-labelledby="pills-my-orders-tab" tabindex="0">
                                    <div class="coursedetails__my-orders">
                                    <div class="coursedetails__my-orders text-center" style="margin-top: 50px;">
                                        <a><img src="assets/gif/16957-comming-soon (1).gif" alt=""></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-my-instructor" role="tabpanel"
                                    aria-labelledby="pills-my-instructor-tab" tabindex="0">
                                    <div class="coursedetails__my-instructor">
                                        <?php 
                                            $lessonPlans = getLessonPlansByTeacherEmail(singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_id')); 
                                            foreach ($lessonPlans as $lessonPlan) { ?>
                                                <div class="coursedetails__coursereviews">
                                                    <div class="coursedetails__coursereviews-author">
                                                        <div class="coursedetails__coursereviews-thumb">
                                                            <img src="<?php echo base_url('uploads/coursethumbnail/' . $lessonPlan['courseThumbnail']); ?>" alt="author">
                                                        </div>
                                                        <div class="coursedetails__coursereviews-designation">
                                                            <h6><?php echo limitText(singleDetail('tbllessons', '_id', $lessonPlan['lessonId'], '_lessonname'), 60); ?></h6>
                                                            Start Date : <span><?php echo date('F d, Y', strtotime($lessonPlan['lessonDate'])); ?></span>&nbsp;|
                                                            Start Time : <span><?php echo date('h:i A', strtotime($lessonPlan['lessonTime'])); ?></span>&nbsp;|
                                                            Time Left : <span><?php echo calculateTimePending(strtotime($lessonPlan['lessonDate']), strtotime($lessonPlan['lessonTime'])); ?></span>
                                                            <blockquote>
                                                            <p><strong>Course :</strong><a href="course-detail?id=<?php echo singleDetail('tblcourse', '_id', $lessonPlan['courseId'], '_parmalink'); ?>"><?php echo limitText(singleDetail('tblcourse', '_id', $lessonPlan['courseId'], '_coursename'), 180); ?></a></p>
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                    <div class="coursedetails__coursereviews-rating">
                                                        <a class='trk-btn trk-btn--rounded trk-btn--primary1' target="_blank" href='<?php echo $lessonPlan["lessonURL"]; ?>'>Join Meet</a>
                                                    </div>
                                                </div>
                                            <?php }
                                        ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-help" role="tabpanel"
                                    aria-labelledby="pills-help-tab" tabindex="0">
                                    <div class="coursedetails__help">
                                        <div class="coursedetails__overview">
                                            <h5>Welcome to the Help Section!</h5>
                                            <p>If you're experiencing any difficulties or have questions regarding your course, we're here to assist you. Our dedicated team of experts is committed to providing you with the support you need to succeed.</p>
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



    <script src="assets/js/custom.js"></script>


</body>

</html>