<?php
//  if(!isset($_SESSION)) session_start();
include_once "BaseController.php";
if(!isset($_SESSION)) session_start();
include_once "model/Account_pageModel.php";
include_once "model/TypeProductModel.php";


class Account_pageController extends BaseController{

    function dangkiTK($username, $password, $fullname, $gender, $address, $email, $phone){
        $userModel = new Account_pageModel();
        $check=$userModel->selectUser($username);
         if($check==false){
             $userModel->insertUser($username, $password, $fullname, $birthdate=null, 
                                    $gender, $address, $email, $phone);
            $_SESSION['success']='Đăng Kí Thành Công';          
             if(isset($_SESSION['error'])){
                 unset($_SESSION['error']);
             }           
             header('location:SignIn');         
         }else{
             $_SESSION['error']='Đăng Kí Thất Bại';
             // if(isset($_SESSION['error'])){
             //     unset($_SESSION['error']);
             // }  
             header('location:SignIn');
         }
     }
     
    function dangnhapTk($username, $password){
        $userModel = new Account_pageModel();
        $check=$userModel->selectLogin($username,$password);
        if($check==false){
            $_SESSION['error']='Sai username hoặc password';
            header('location:SignIn');
        }else{
            $_SESSION['name']=$username;   
            if(isset($_SESSION['error'])){
                unset($_SESSION['error']);
            }                  
            header('location:trang-chu'); 
        }
        
        // return $this->loadView('account_page','Login');
    }

    function dangXuatTk(){
        unset($_SESSION['name']);
        session_destroy();
         header('location:trang-chu'); 
         exit;
     }

}    

?>