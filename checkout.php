<!DOCTYPE html>
<html lang="en">
<?php include('includes/_functions.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Moniqart is a Art studio, belonging to Mona Joy an Artist based in Kopar Khairane NaviMumbai India. School in koparkhairane and Art studio with classes for various art forms and also offers coaching for entrances like NIFT, NID, NATA as well as Elementary and Intermediate Art Exams.">
    <meta name="keywords" content="Moniqart, Art School In Koparkhairane, Art school , Art studio, moniqart drawing school, school in koparkhairane, NIFT, NID, NATA, Paintings, Calligraphy, Guitar Classes, Glass Painting, Canvas Painting">
    <title>Checkout | <?php echo _siteconfig('_sitetitle') ?></title>

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous"></script>


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

    <?php
        if(!isset($_SESSION['userid'])){
            echo "<script>window.location.href = 'signin';</script>";
        }
        if(isset($_GET['id'])){
            $productid = $_GET['id'];
            // singleDetail('tblcourse', '_parmalink', $_GET['id'], '_id'); 
        }
        if(isset($_GET['type'])){
            $producttype = $_GET['type'];
        }
        if($producttype == 'course'){
            $courseDiscountedPrice = singleDetail('tblcourse', '_parmalink', $productid, '_discountprice');
            $accproductid = singleDetail('tblcourse', '_parmalink', $productid, '_id');
        }else if($producttype == 'membership'){
            $courseDiscountedPrice = singleDetail('tblmembership', '_membershippermalink', $productid, '_price');
            $accproductid = singleDetail('tblmembership', '_membershippermalink', $productid, '_id');
        }else{
            echo "<script>window.location.href = 'my-account';</script>";
        }


        // Payment Processing Code 
        require_once 'includes/razorpay-php-2.8.6/Razorpay.php';
        use Razorpay\Api\Api;
        // Initialize Razorpay API with your API credentials
        $api = new Api(_paymentconfig('_apikey'), _paymentconfig('_secretkey'));
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['payment'])) {
            $amount = (int)_conversion(getTotal($courseDiscountedPrice),$_SESSION['baseCurrency']) * 100; // Payment amount in paisa (e.g., 1000 paisa = ₹10)
            $currency = $_SESSION['baseCurrency']; // Payment currency
            if(isset($_SESSION['couponcode'])){
                $couponCode = $_SESSION['couponcode'];
            }else{
                $couponCode = 'Not Applicable';
            }
            $order = $api->order->create(array(
                'amount' => $amount,
                'currency' => $currency,
                'receipt' => 'order_receipt', // Replace with your own unique identifier
                'payment_capture' => 1 // Auto-capture payment
            ));

            $orderId = $order->id;
            $orderAmount = $order->amount;

            // Redirect the user to the Razorpay payment page
            echo "<script src='https://checkout.razorpay.com/v1/checkout.js'></script>";
            echo "<script>
                var options = {
                    'key': '"._paymentconfig('_apikey')."',
                    'amount': $orderAmount,
                    'currency': '$currency',
                    'name': 'Your Company Name',
                    'description': 'Test Payment',
                    'order_id': '$orderId',
                    'handler': function (response) {
                        var paymentId = response.razorpay_payment_id;
                        var amount = $orderAmount / 100;
                        var userID = '".$_SESSION['userid']."';
                        var couponCode = '$couponCode';
                        $.ajax({
                            url: 'payment_callback.php',
                            type: 'POST',
                            data: { paymentId: paymentId, userID: userID, amount: amount, currency : '$currency', status : 'success', product_type : '$producttype', product_id : '$accproductid', coupon : couponCode },
                            success: function (data) {
                                console.log(data);
                                window.location.href = 'my-account?purchase=success';  
                                // Handle the response from the PHP script
                            },
                            error: function (xhr, status, error) {
                                console.log(error);
                                // Handle the error, if any
                            }
                        });
                        
                    },
                    'prefill': {
                        'name': 'John Doe',
                        'email': 'john.doe@example.com'
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.on('payment.failed', function (response) {
                    // Handle the payment failure callback
                    console.log(response.error);
                    window.location.href = 'my-account?purchase=failed';
                    // You can show an error message or redirect to a failure page
                });
                rzp1.open();
            </script>";
        }
    ?>


    <!-- ==========Page Header Section Starts Here========== -->
    <div class="pageheader" style="background-image:url(assets/images/bg/home1/1.webp)">
        <div class="container">
            <div class="pageheader__content">
                <h2>Checkout</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->




    <!-- ============ shop Section start Here========== -->
    <section class="checkout padding-top padding-bottom">
        <div class="container">
            <div class="checkout__wrapper">
                <!-- <form action="#" class="checkout__form"> -->
                    <div class="row g-5">
                        <div class="col-lg-8">
                            <div class="checkout__details" data-aos="fade-right" data-aos-duration="800"
                                data-aos-delay="100">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="checkout__title">
                                            <h5>Checkout</h5>
                                        </div>
                                        <div class="checkout__subtitle">
                                            <p>Billing Details</p>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="first-name"
                                                placeholder="Full name*" name="name" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_username'); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="email" name="email" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_useremail'); ?>" class="form-control" id="last-name"
                                                placeholder="Email ID*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text" name="address" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userlocation'); ?>" class="form-control" id="address" placeholder="Address*"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="tel" name="phone" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userphone'); ?>" class="form-control" id="address2"
                                                placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text" name="country" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userstate'); ?>" class="form-control" id="city" placeholder="Country*"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text" name="postcode" value="<?php echo singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_userpin'); ?>" class="form-control" id="zip-code"
                                                placeholder="Zip Code*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <textarea id="account-desc" name="message" class="form-control" rows="4"
                                                placeholder="Write a message..." cols="50"></textarea>
                                        </div>
                                    </div>

                                    <!-- <div class="account__form-passcheck">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" value="" id="terms-check">
                                            <label for="terms-check" class="form-check-label">
                                                Create an account?
                                            </label>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="order" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                                <div class="checkout__title">
                                    <h5>Order Summary</h5>
                                </div>
                                <div class="order__details table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="2">
                                                    <table class="table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="o-info">
                                                                        <?php
                                                                        if($producttype == 'course'){ ?>
                                                                            <img src="<?php echo base_url('uploads/coursethumbnail/' . singleDetail('tblcourse', '_parmalink', $productid, '_thumbnail')); ?>"
                                                                            alt="course">
                                                                        <?php }else if($producttype == 'membership'){ ?>
                                                                            <img src="<?php echo base_url('uploads/membershipimages/' . singleDetail('tblmembership', '_membershippermalink', $productid, '_img')); ?>"
                                                                            alt="course">
                                                                        <?php } ?>
                                                                        
                                                                        <div class="o-details">
                                                                            <?php 
                                                                                if($producttype == 'course'){ ?>
                                                                                    <a href="course-detail?id=<?php echo $productid; ?>"><?php echo limitText(singleDetail('tblcourse', '_parmalink', $productid, '_coursename'), 50); ?></a>
                                                                                    <div class="c-reviews">
                                                                                        <span style="background-color: #FFE3EC;font-size: 0.75rem;padding: 0.15rem 1rem;border-radius: 50px;color: #081A28;font-weight: 500;text-transform: capitalize;">
                                                                                            <?php echo singleDetail('tblcategory', '_id', singleDetail('tblcourse', '_parmalink', $productid, '_categoryid'), '_categoryname'); ?>
                                                                                        </span>
                                                                                    </div>
                                                                                <?php }else if($producttype == 'membership'){ ?>
                                                                                    <a href="membership"><?php echo limitText(singleDetail('tblmembership', '_membershippermalink', $productid, '_membershipname'), 50); ?></a>
                                                                                    <div class="c-reviews">
                                                                                        <span style="background-color: #FFE3EC;font-size: 0.75rem;padding: 0.15rem 1rem;border-radius: 50px;color: #081A28;font-weight: 500;text-transform: capitalize;">
                                                                                            Duration : <?php echo  singleDetail('tblmembership', '_membershippermalink', $productid, '_duration') ?>&nbsp;Month(s)
                                                                                        </span>
                                                                                    </div>
                                                                                <?php } ?>
                                                                        </div>

                                                                    </div>

                                                                </td>
                                                                <td><span><?php echo currency_symbol($_SESSION['baseCurrency']);echo _conversion($courseDiscountedPrice,$_SESSION['baseCurrency']); ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <?php feeMarkup(); ?>
                                            </tr>
                                            <tr>
                                                <?php
                                                if(isset($_POST['couponsubmit']) && !singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_usermembership')){
                                                    discountMarkup($_POST['coupon'],$producttype,$courseDiscountedPrice);
                                                }?>
                                            </tr>
                                            <tr><?php 
                                                if(singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_usermembership')){ ?>
                                                    <th scope="row"><?php echo singleDetail('tblmembership', '_id', singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_usermembership'), '_membershipname'); $memid = singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_usermembership') ?></th>
                                                    <td><?php
                                                        if(singleDetail('tblmembership', '_id', $memid, '_benefittype') == 'fixed'){ 
                                                            echo '- '.currency_symbol($_SESSION['baseCurrency']); echo _conversion(singleDetail('tblmembership', '_id', $memid, '_benefit'),$_SESSION['baseCurrency']).'';
                                                            $_SESSION['couponcode'] = singleDetail('tblmembership', '_id', $memid, '_membershipname');
                                                            $_SESSION['discount'] = singleDetail('tblmembership', '_id', $memid, '_benefit');
                                                        }else if(singleDetail('tblmembership', '_id', $memid, '_benefittype') == 'percentage'){
                                                            echo '- ' . singleDetail('tblmembership', '_id', $memid, '_benefit') . '%';
                                                            $_SESSION['couponcode'] = singleDetail('tblmembership', '_id', $memid, '_membershipname');
                                                            $_SESSION['discount'] = singleDetail('tblmembership', '_id', $memid, '_benefit');
                                                        }
                                                    ?></td>
                                                <?php }?>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total &#40; <?php echo $_SESSION['baseCurrency']; ?> &#41; <p>Fee included, where applicable</p>
                                                </th>
                                                <td><strong><?php echo currency_symbol($_SESSION['baseCurrency']);
                                                echo _conversion(getTotal($courseDiscountedPrice),$_SESSION['baseCurrency'])
                                                ?></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <?php 
                                    if(!singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_usermembership')){ ?>
                                        <div class="cart__bottom-coupon">
                                        <form action="" method="post" class="coupon">
                                            <div class="input-group">
                                                <input type="text" name="coupon" class="form-control" placeholder="Enter coupon">
                                                <button name="couponsubmit" class="trk-btn trk-btn--border trk-btn--apply">Apply</button>
                                            </div>
                                        </form>
                                    </div>
                                    <?php }else{ ?>
                                        <span class="badge bg-secondary">Subscription Discount Applied</span>
                                    <?php }
                                    ?>
                                </div>
                                <div class="order__option">
                                    <div class="order__option-title">
                                        <p>Payment</p>
                                    </div>
                                    <form method="POST">
                                        <div class="order__option-item">
                                            <div class="form-radio">
                                                <input class="form-radio" required type="radio" name="payment-radio" value=""
                                                    id="card">
                                                <label class="form-check-label" for="card">
                                                    Credit, Netbank, UPI
                                                </label>
                                            </div>
                                            <div class="thumb">
                                                <img style="width: 50px;" src="assets/images/icon/razorpay.png" alt="payment iocn">
                                                <!-- <img src="assets/images/icon/card/2.png" alt="payment iocn"> -->
                                            </div>
                                        </div>
                                        <!-- <div class="order__option-item">
                                            <div class="form-radio">
                                                <input class="form-radio" type="radio" name="payment-radio" value=""
                                                    id="paypalCheck">
                                                <label class="form-check-label" for="paypalCheck">
                                                    Paypal
                                                </label>
                                            </div>
                                            <div class="thumb">
                                                <img src="assets/images/icon/card/3.png" alt="payment iocn">
                                            </div>
                                        </div>
                                        <div class="order__option-item">
                                            <div class="form-radio">
                                                <input class="form-radio" type="radio" name="payment-radio" value=""
                                                    id="cash">
                                                <label class="form-check-label" for="cash">
                                                    Cash on Delivery
                                                </label>
                                            </div>
                                        </div> -->
                                </div>

                                <div class="order__check mt-5">
                                    <div class="form-check">
                                        <input class="form-check-input" required type="checkbox" value="" id="data">
                                        <label class="form-check-label" for="data">
                                            Your personal data will be used to process your order.
                                        </label>
                                    </div>
                                </div>
                                    <button type="submit" name="payment"
                                    class="trk-btn trk-btn--border trk-btn--secondary1 d-block mt-4">Complete Payment</button>
                                </form>    
                            </div>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </section>
    <!-- ============ shop Section Ends Here========== -->





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