<?php

include_once "controller/Shopping_gridController.php";
$c = new Shopping_gridController;

if(isset($_POST['idType'])){
    return $c->getProductMenuLeft();
}
return $c->getShopping_Grid();

?>