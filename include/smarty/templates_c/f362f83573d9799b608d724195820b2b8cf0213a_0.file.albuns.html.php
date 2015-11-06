<?php /* Smarty version 3.1.27, created on 2015-11-06 02:22:13
         compiled from "view\albuns.html" */ ?>
<?php
/*%%SmartyHeaderCode:14022563c00c564d370_19063754%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f362f83573d9799b608d724195820b2b8cf0213a' => 
    array (
      0 => 'view\\albuns.html',
      1 => 1446772928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14022563c00c564d370_19063754',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563c00c5683e83_06838064',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563c00c5683e83_06838064')) {
function content_563c00c5683e83_06838064 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14022563c00c564d370_19063754';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<p>Área reservada a <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>


<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            
<?php }
}
?>