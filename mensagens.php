<?php
require_once 'sm.php';
require_once 'core/cMensagens.php';

$sm->assign('nome', 'Mensagens');
$sm->display('mensagens.html');