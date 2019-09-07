<?php

include_once "BaseController.php";
class Single_postController extends BaseController{
    function getSingle_Post(){
        return $this->loadView('single_post');
    }
}

?>