<?php /* Smarty version 3.1.27, created on 2015-11-06 02:54:39
         compiled from "view\pessoas.html" */ ?>
<?php
/*%%SmartyHeaderCode:31058563c085f3411c9_74182988%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb5546747a63b4ff0e84be71e735e7080358a38a' => 
    array (
      0 => 'view\\pessoas.html',
      1 => 1446774877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31058563c085f3411c9_74182988',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563c085f383850_90327668',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563c085f383850_90327668')) {
function content_563c085f383850_90327668 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31058563c085f3411c9_74182988';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<p> Manutenção e adição de <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>

<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>