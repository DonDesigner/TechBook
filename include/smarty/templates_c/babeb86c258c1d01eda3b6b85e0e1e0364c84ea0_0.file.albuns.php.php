<?php /* Smarty version 3.1.27, created on 2015-11-04 23:15:00
         compiled from "C:\xampp\htdocs\techbook\albuns.php" */ ?>
<?php
/*%%SmartyHeaderCode:12131563a8364360766_46076427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'babeb86c258c1d01eda3b6b85e0e1e0364c84ea0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\techbook\\albuns.php',
      1 => 1446675212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12131563a8364360766_46076427',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563a83643933f1_56260544',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563a83643933f1_56260544')) {
function content_563a83643933f1_56260544 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12131563a8364360766_46076427';
echo '<?php

';?>require_once 'sm.php';
require_once 'core/cAlbum.php';


$sm->assign('nome', 'Teste');
$sm->display('albuns.php');<?php }
}
?>