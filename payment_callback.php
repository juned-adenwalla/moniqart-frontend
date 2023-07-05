<?php
include('includes/_functions.php');

// Retrieve the paymentId from the AJAX request
$paymentId = isset($_POST['paymentId']) ? $_POST['paymentId'] : '';
$userId = isset($_POST['userID']) ? $_POST['userID'] : '';
$amount = isset($_POST['amount']) ? $_POST['amount'] : '';
$currency = isset($_POST['currency']) ? $_POST['currency'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$product_type = isset($_POST['product_type']) ? $_POST['product_type'] : '';
$product_id = isset($_POST['product_id']) ? $_POST['product_id'] : '';
$couponcode = isset($_POST['coupon']) ? $_POST['coupon'] : '';

echo paymentCallback($paymentId, $userId, $amount, $currency, $status, $product_type, $product_id, $couponcode);

?>
