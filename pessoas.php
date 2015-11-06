<?php

require_once 'sm.php';
require_once 'core/cPessoas.php';


$sm->assign('nome', 'Pessoas');
$sm->display('pessoas.html');