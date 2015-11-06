<?php /* Smarty version 3.1.27, created on 2015-11-06 02:57:11
         compiled from "C:\xampp\htdocs\techbook\view\cabecalho.html" */ ?>
<?php
/*%%SmartyHeaderCode:21539563c08f79f6c45_88943106%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c264dce3acf57b282e02403ab9530ccdfd0673a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\techbook\\view\\cabecalho.html',
      1 => 1446774966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21539563c08f79f6c45_88943106',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563c08f7a2d747_24389280',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563c08f7a2d747_24389280')) {
function content_563c08f7a2d747_24389280 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21539563c08f79f6c45_88943106';
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
        <link rel="stylesheet" type="text/css" href="view/css/geral.css">
    </head>
    <body>
        <div class="cabecalho"> 
            <h2> Gerenciamento de <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</h2>
        </div>
        <div class="menu_principal">
            <a href="albuns.php">Albuns</a> | 
            <a href="amigos.php">Amigos</a> | 
            <a href="comfotos.php">Comentar Fotos</a> | 
            <a href="fotos.php">Fotos</a> | 
            <a href="mensagens.php">Mensagens</a> | 
            <a href="pessoas.php">Pessoas</a> 
        </div>
        
        <div class="corpo">
            <?php }
}
?>