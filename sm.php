<?php

require_once 'include/smarty/libs/Smarty.class.php';

$sm = new Smarty();

$sm->setCompileDir('include/smarty/templates_c/');
$sm->setCacheDir('include/smarty/cache/');
$sm->setTemplateDir("view/");

?>