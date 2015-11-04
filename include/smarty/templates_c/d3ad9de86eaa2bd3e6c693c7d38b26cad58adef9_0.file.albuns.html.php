<?php /* Smarty version 3.1.27, created on 2015-11-04 23:18:24
         compiled from "C:\xampp\htdocs\techbook\view\albuns.html" */ ?>
<?php
/*%%SmartyHeaderCode:1888563a8430d75581_50966366%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3ad9de86eaa2bd3e6c693c7d38b26cad58adef9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\techbook\\view\\albuns.html',
      1 => 1446674868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1888563a8430d75581_50966366',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563a8430dbf910_71497797',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563a8430dbf910_71497797')) {
function content_563a8430dbf910_71497797 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1888563a8430d75581_50966366';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gerenciamento de ($nome}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><p>Seção exclusiva a <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p></div>
    </body>
</html>
<?php }
}
?>