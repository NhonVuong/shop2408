<?php

include_once "controller/SiginController.php";
!isset($_SESSION) ? session_start() : '';
$c = new SiginController();
return $c->getSigin();

?>