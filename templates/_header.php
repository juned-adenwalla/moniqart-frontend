<?php 
session_start();
include('includes/_functions.php');
date_default_timezone_set(_siteconfig('_timezone'));

if (isset($_POST['currency'])) {
    $_SESSION['baseCurrency'] = $_POST['currency'];
}else{
    if(!isset($_SESSION['baseCurrency'])){
        $_SESSION['baseCurrency'] = 'INR';
    }
}
if(!isset($_POST['payment'])){
    $_SESSION['discount'] = null;
}

?>
<header class="header-section brand-1">
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="header-start header-start--style1">
                        <div class="logo">
                            <a href="index">
                                <img style="width: 180px;" src="<?php echo base_url('uploads/images/' . _siteconfig('_sitelogo')); ?>" alt="logo">
                            </a>
                        </div>
                        <div class="menu-area">
                            <ul class="menu menu--style1">
                                <li>
                                    <a href="<?php echo frontend_url(''); ?>">Homes </a>
                                    <!-- <ul class="submenu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                    </ul> -->
                                </li>
                                <li>
                                    <a href="courses">Courses</a>
                                    <!-- <ul class="submenu">
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="course-details.html">Courses Details</a></li>
                                        <li><a href="course-category.html">Course Category</a></li>
                                        <li><a href="course-category.html">Course Category</a></li>
                                        <li><a href="mentors.html">Mentors</a></li>
                                        <li><a href="mentor-details.html">Mentor Details</a></li>
                                    </ul> -->
                                </li>
                                <li>
                                    <a href="blogs">Blogs</a>
                                    <!-- <ul class="submenu">
                                        <li><a href="blogs.html">Blogs </a></li>
                                        <li><a href="blogs-2.html">Blogs 2 </a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul> -->
                                </li>
                                <li>
                                    <a href="about-us">About Us</a>
                                    <!-- <ul class="submenu">
                                                                                <li><a href="about.html">About Us</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="signup.html">Sign Up</a></li>
                                        <li><a href="signin.html">Sign In</a></li>
                                        <li><a href="forgot-pass.html">Reset Password</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                        
                                    </ul> -->

                                </li>
                                <li>
                                    <a href="contact">Contact Us</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="header-end">
                        <div class="menu-area">
                            <div class="header-btn">
                                <form action="#" method="post">
                                    <select name="currency" onchange="this.form.submit()">
                                        <?php _allcurrency(); ?>
                                    </select>
                                </form>
                                    <?php 
                                    if(isset($_SESSION['userid'])){ ?>
                                        <a href="my-account" class="trk-btn trk-btn--rounded trk-btn--primary1">
                                            <span>Dashboard</span>
                                        </a>
                                    <?php }else{ ?>
                                        <a href="signup" class="trk-btn trk-btn--rounded trk-btn--primary1">
                                            <span>Signup</span>
                                        </a>
                                    <?php }
                                    ?>
                                </a>
                            </div>

                            <!-- toggle icons -->
                            <div class="header-bar d-xl-none home1">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>