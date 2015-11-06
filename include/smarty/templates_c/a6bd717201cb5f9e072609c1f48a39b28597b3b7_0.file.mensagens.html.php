<?php /* Smarty version 3.1.27, created on 2015-11-06 02:50:25
         compiled from "view\mensagens.html" */ ?>
<?php
/*%%SmartyHeaderCode:4505563c0761078120_89136028%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6bd717201cb5f9e072609c1f48a39b28597b3b7' => 
    array (
      0 => 'view\\mensagens.html',
      1 => 1446774511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4505563c0761078120_89136028',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563c07610ba7b8_44965753',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563c07610ba7b8_44965753')) {
function content_563c07610ba7b8_44965753 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4505563c0761078120_89136028';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<p>Descrição das <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>
<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>