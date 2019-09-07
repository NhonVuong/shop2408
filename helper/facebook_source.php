<?php

include_once './Facebook/autoload.php';
include_once './fbconfig.php';
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email'];
$loginUrl = $helper->getLoginUrl('https://shop2408/helper/fb-callback.php', $permissions);

?>