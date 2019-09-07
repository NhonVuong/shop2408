<?php

include_once "BaseController.php";

class SiginController extends BaseController{
    function getSigin(){
        return $this->loadView('account_page', 'Login');
    }
}

?>