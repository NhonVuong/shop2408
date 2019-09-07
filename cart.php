<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    header('Location:404.html');
    return;
}
include_once "controller/Shopping_cartController.php";
$c = new Shopping_cartController;

if(isset($_POST['action']) && $_POST['action'] == 'update'){
    return $c->updateCart();
} 

elseif(isset($_POST['action']) && $_POST['action'] == 'delete'){
    return $c->deleteCart();
} 
else return $c->addToCart();

?>