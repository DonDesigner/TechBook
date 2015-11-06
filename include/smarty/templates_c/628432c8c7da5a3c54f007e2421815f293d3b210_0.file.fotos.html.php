<?php /* Smarty version 3.1.27, created on 2015-11-06 02:45:19
         compiled from "view\fotos.html" */ ?>
<?php
/*%%SmartyHeaderCode:28971563c062faab8a3_30818989%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '628432c8c7da5a3c54f007e2421815f293d3b210' => 
    array (
      0 => 'view\\fotos.html',
      1 => 1446773915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28971563c062faab8a3_30818989',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563c062faea0b5_50830282',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563c062faea0b5_50830282')) {
function content_563c062faea0b5_50830282 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28971563c062faab8a3_30818989';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<p>teste de <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>
<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>