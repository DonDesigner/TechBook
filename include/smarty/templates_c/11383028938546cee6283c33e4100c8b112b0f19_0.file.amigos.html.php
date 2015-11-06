<?php /* Smarty version 3.1.27, created on 2015-11-06 02:25:00
         compiled from "view\amigos.html" */ ?>
<?php
/*%%SmartyHeaderCode:18909563c016c03c982_94376873%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11383028938546cee6283c33e4100c8b112b0f19' => 
    array (
      0 => 'view\\amigos.html',
      1 => 1446773043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18909563c016c03c982_94376873',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563c016c082e91_35809941',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563c016c082e91_35809941')) {
function content_563c016c082e91_35809941 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18909563c016c03c982_94376873';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<p>Área única para <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>

<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>