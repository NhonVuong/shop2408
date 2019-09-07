<?php

include_once "BaseController.php";

class _404_Controller extends BaseController{
    function get404(){
        return $this->loadView('404');
    }
}

?>