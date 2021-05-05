<?php
/* Smarty version 3.1.33, created on 2021-03-25 12:32:51
  from '/var/www/html/postfixadmin/templates/list-virtual_alias_domain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605c82f305df33_04252741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19135c0d216d41f6a633713782b542dde003cc8e' => 
    array (
      0 => '/var/www/html/postfixadmin/templates/list-virtual_alias_domain.tpl',
      1 => 1614889642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:list.tpl' => 1,
  ),
),false)) {
function content_605c82f305df33_04252741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('table', 'aliasdomain');
$_smarty_tpl->_assignInScope('struct', $_smarty_tpl->tpl_vars['aliasdomain_data']->value['struct']);
$_smarty_tpl->_assignInScope('msg', $_smarty_tpl->tpl_vars['aliasdomain_data']->value['msg']);
$_smarty_tpl->_assignInScope('id_field', $_smarty_tpl->tpl_vars['msg']->value['id_field']);
$_smarty_tpl->_assignInScope('formconf', $_smarty_tpl->tpl_vars['aliasdomain_data']->value['formconf']);
$_smarty_tpl->_assignInScope('items', $_smarty_tpl->tpl_vars['tAliasDomains']->value);
$_smarty_tpl->_assignInScope('RAW_items', $_smarty_tpl->tpl_vars['RAW_tAliasDomains']->value);?>

<?php $_smarty_tpl->_subTemplateRender('file:list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
