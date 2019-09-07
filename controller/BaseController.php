<?php
include_once "helper/Cart.php";
session_start();
include_once "model/TypeProductModel.php";

class BaseController{

    private $domain = null;
    private $url = null;

    function __construct(){
        $this->domain = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'];
        
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $this->url = $this->domain.$_SERVER['REQUEST_URI'];
    }

    function loadView($view, $title = 'Home', $data = []){

        $domain = $this->domain;
        $url = $this->url;
        
        $model = new TypeProductModel();
        $categories = $model->selectCategories();
        $allType = $model->countProductByType();
        // print_r($categories);
        // die();
        include_once "view/layout.view.php";
        // include_once "../account_page.php";
    }

    

    function loadHtmlAjax($view, $data = []){
        
        include_once "view/ajax/$view.view.php";
    }


}

?>