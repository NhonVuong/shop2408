<?php

include_once "BaseController.php";

class Contact_usController extends BaseController{
    function getContact_us(){
        return $this->loadView('contact_us');
    }
}

?>