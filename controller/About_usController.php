<?php

include_once "BaseController.php";
class About_usController extends BaseController{
    function getAbout_us(){
        return $this->loadView('about_us');
    }
}

?>