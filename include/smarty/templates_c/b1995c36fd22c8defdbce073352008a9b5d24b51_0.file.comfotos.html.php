<?php /* Smarty version 3.1.27, created on 2015-11-06 02:32:19
         compiled from "view\comfotos.html" */ ?>
<?php
/*%%SmartyHeaderCode:10970563c032307f6f0_40729519%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1995c36fd22c8defdbce073352008a9b5d24b51' => 
    array (
      0 => 'view\\comfotos.html',
      1 => 1446773233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10970563c032307f6f0_40729519',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563c03230bdef9_59662357',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563c03230bdef9_59662357')) {
function content_563c03230bdef9_59662357 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10970563c032307f6f0_40729519';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<p><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 suporte</p>
<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>