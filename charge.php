<?php
session_start();
  require_once('vendor/autoload.php');
  include_once 'model/CheckoutModel.php';

  \Stripe\Stripe::setApiKey('sk_test_7ZOG74rLQkW2L6RcWAKgQb4h00uPAF4qrQ');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

//  $first_name = $POST['first_name'];
//  $last_name = $POST['last_name'];
 $email = $POST['email'];
 $token = $POST['stripeToken'];
 $price = 0;
 if($_SESSION['promotion_price'] != 0){
    $price = $_SESSION['promotion_price'];
 }
 else{
    $price = $_SESSION['price'];
 }
// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $price,
  "currency" => "vnd",
  "description" => "Success",
  "customer" => $customer->id
));
$toke = trim($_GET['token']); 
$model = new CheckoutModel();
$bill = $model->findBillByToken($toke);
$c = $model->completeStatusBill($bill->id);

$_SESSION['success'] = 'Đặt hàng thành công, thông tin đơn hàng được gửi về email, vui lòng kiểm tra email để hoàn tất đơn hàng';
                       
header('Location:trang-chu');
unset($_SESSION['cart']);
?>