<?php
/* Smarty version 3.1.33, created on 2021-03-25 12:32:02
  from '/var/www/html/postfixadmin/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605c82c232b630_01474196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba58428d0f8be6ba3b0f5b80bc8915cdbe3a45a1' => 
    array (
      0 => '/var/www/html/postfixadmin/templates/header.tpl',
      1 => 1614889642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c82c232b630_01474196 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="<?php if (isset($_SESSION['lang'])) {
echo $_SESSION['lang'];
}?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <title>Postfix Admin - <?php echo $_SERVER['HTTP_HOST'];?>
</title>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['CONF']->value['theme_favicon'];?>
"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CONF']->value['theme_css'];?>
"/>
    <?php if ($_smarty_tpl->tpl_vars['CONF']->value['theme_custom_css']) {?>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CONF']->value['theme_custom_css'];?>
"/>
    <?php }?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rel_path']->value;?>
jquery-1.12.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rel_path']->value;?>
css/bootstrap-3.4.1-dist/js/moment-with-locales.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rel_path']->value;?>
css/bootstrap-3.4.1-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rel_path']->value;?>
css/bootstrap-3.4.1-dist/js/bootstrap-datetimepicker.min.js"><?php echo '</script'; ?>
>
</head>
<body class="lang-<?php if (isset($_SESSION['lang'])) {
echo $_SESSION['lang'];
}?> page-<?php echo $_smarty_tpl->tpl_vars['smarty_template']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['table']->value)) {?>page-<?php echo $_smarty_tpl->tpl_vars['smarty_template']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['table']->value;
}?>">
<?php }
}
