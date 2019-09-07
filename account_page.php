<?php 
include_once "controller/Account_pageController.php";
// session_start();
$userController=new Account_pageController();
if(isset($_POST['btn-DK'])){
  $username=$_POST['username'];
  $fullname=$_POST['fullname'];
	$password=$_POST['pass'];
  $phone=$_POST['phone'];
  // $birthdate=$_POST['birthdate']; 
  $gender=$_POST['gender']; 
  $address=$_POST['address']; 
  $email=$_POST['email'];
	return $userController->dangkiTK($username, $password, $fullname, $gender, $address, $email, $phone);	
}else if(isset($_POST['btn-DN'])){
	$username=$_POST['username'];
  $password=$_POST['pass'];
	return $userController->dangnhapTk($username,$password);
	
}

?>