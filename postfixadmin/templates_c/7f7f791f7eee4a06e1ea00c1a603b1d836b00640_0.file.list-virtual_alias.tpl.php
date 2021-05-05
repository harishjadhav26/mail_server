<?php
/* Smarty version 3.1.33, created on 2021-03-25 12:32:51
  from '/var/www/html/postfixadmin/templates/list-virtual_alias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605c82f306fc66_60873812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f7f791f7eee4a06e1ea00c1a603b1d836b00640' => 
    array (
      0 => '/var/www/html/postfixadmin/templates/list-virtual_alias.tpl',
      1 => 1614889642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:list.tpl' => 1,
  ),
),false)) {
function content_605c82f306fc66_60873812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('table', 'alias');
$_smarty_tpl->_assignInScope('struct', $_smarty_tpl->tpl_vars['alias_data']->value['struct']);
$_smarty_tpl->_assignInScope('msg', $_smarty_tpl->tpl_vars['alias_data']->value['msg']);
$_smarty_tpl->_assignInScope('id_field', $_smarty_tpl->tpl_vars['msg']->value['id_field']);
$_smarty_tpl->_assignInScope('formconf', $_smarty_tpl->tpl_vars['alias_data']->value['formconf']);
$_smarty_tpl->_assignInScope('items', $_smarty_tpl->tpl_vars['tAlias']->value);
$_smarty_tpl->_assignInScope('RAW_items', $_smarty_tpl->tpl_vars['RAW_tAlias']->value);?>

<?php $_smarty_tpl->_subTemplateRender('file:list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
