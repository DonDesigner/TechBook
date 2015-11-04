<?php /* Smarty version 3.1.27, created on 2015-11-04 23:24:07
         compiled from "view\albuns.html" */ ?>
<?php
/*%%SmartyHeaderCode:24255563a85878d4316_41563459%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f362f83573d9799b608d724195820b2b8cf0213a' => 
    array (
      0 => 'view\\albuns.html',
      1 => 1446675838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24255563a85878d4316_41563459',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563a858790eca8_05807859',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563a858790eca8_05807859')) {
function content_563a858790eca8_05807859 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24255563a85878d4316_41563459';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gerenciamento de <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div> 
            <h2> Gerenciamento de <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</h2>
        </div>
        <div>
            <a href="albuns.php">Albuns</a> | 
            <a href="amigos.php">Amigos</a> | 
            <a href="comfotos.php">Comentar Fotos</a> | 
            <a href="fotos.php">Fotos</a> | 
            <a href="mensagens.php">Mensagens</a> | 
            <a href="pessoas.php">Pessoas</a> 
        </div>
    </body>
</html>
<?php }
}
?>