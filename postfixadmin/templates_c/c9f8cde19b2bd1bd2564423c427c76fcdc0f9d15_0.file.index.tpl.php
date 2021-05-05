<?php
/* Smarty version 3.1.33, created on 2021-03-25 12:32:02
  from '/var/www/html/postfixadmin/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605c82c22ee047_62511941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9f8cde19b2bd1bd2564423c427c76fcdc0f9d15' => 
    array (
      0 => '/var/www/html/postfixadmin/templates/index.tpl',
      1 => 1614889642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:users_menu.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:flash_error.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_605c82c22ee047_62511941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['smarty_template']->value !== 'login' && $_smarty_tpl->tpl_vars['smarty_template']->value !== 'password-recover' && $_smarty_tpl->tpl_vars['smarty_template']->value !== 'password-change') {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "menu.conf", $_smarty_tpl->tpl_vars['smarty_template']->value, 0);
if ($_smarty_tpl->tpl_vars['authentication_has_role']->value['user']) {
$_smarty_tpl->_subTemplateRender('file:users_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else {
$_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}?><div class="container" style="min-width: 600px; width: min-content" role="main"><?php if ($_smarty_tpl->tpl_vars['authentication_has_role']->value['user'] && $_smarty_tpl->tpl_vars['CONF']->value['motd_user']) {?><div id="motd"><?php echo $_smarty_tpl->tpl_vars['CONF']->value['motd_user'];?>
</div><?php } elseif ($_smarty_tpl->tpl_vars['authentication_has_role']->value['global_admin'] && $_smarty_tpl->tpl_vars['CONF']->value['motd_superadmin']) {?><div id="motd"><?php echo $_smarty_tpl->tpl_vars['CONF']->value['motd_superadmin'];?>
</div><?php } elseif ($_smarty_tpl->tpl_vars['authentication_has_role']->value['admin'] && $_smarty_tpl->tpl_vars['CONF']->value['motd_admin']) {?><div id="motd"><?php echo $_smarty_tpl->tpl_vars['CONF']->value['motd_admin'];?>
</div><?php }
$_smarty_tpl->_subTemplateRender('file:flash_error.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['smarty_template']->value) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['smarty_template']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?><h3>Template not found</h3>(<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></div><?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
