<?php
/* Smarty version 3.1.33, created on 2021-03-25 12:32:02
  from '/var/www/html/postfixadmin/templates/flash_error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605c82c234f585_02875710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b683be6a0b22970adb2aa15bbae31d378819465' => 
    array (
      0 => '/var/www/html/postfixadmin/templates/flash_error.tpl',
      1 => 1614889642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c82c234f585_02875710 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->
<br clear="all"/><br/>
<?php if (isset($_SESSION['flash'])) {
if (isset($_SESSION['flash']['info'])) {?><div class="alert alert-info" role="alert"><ul class="flash-info"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['flash']['info'], 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8', true);?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
if (isset($_SESSION['flash']['error'])) {?><div class="alert alert-danger" role="alert"><ul class="flash-error"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['flash']['error'], 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8', true);?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
}
}
}
