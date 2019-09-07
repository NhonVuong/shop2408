<?php
include_once "controller/SearchController.php";
$c = new SearchController;

if(isset($_POST['idType'])){
    return $c->getProductMenuLeft();
}

return $c->getSearch();
?>