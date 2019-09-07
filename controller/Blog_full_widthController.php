<?php

include_once "BaseController.php";

class Blog_full_widthController extends BaseController{
    function getBlog_full_width(){
        return $this->loadView('blog_full_width');
    }
}

?>