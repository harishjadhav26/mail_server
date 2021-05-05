<?php
/* Smarty version 3.1.33, created on 2021-03-25 12:32:19
  from '/var/www/html/postfixadmin/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605c82d3afefb1_10643918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d9217a9ab64a7cdf6cccdb9f1858727d61a7063' => 
    array (
      0 => '/var/www/html/postfixadmin/templates/menu.tpl',
      1 => 1614889642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c82d3afefb1_10643918 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->
<?php if (!empty($_GET) && !empty($_GET['domain'])) {?>        <?php $_smarty_tpl->_assignInScope('url_domain', $_GET['domain']);
ob_start();
echo rawurlencode($_smarty_tpl->tpl_vars['url_domain']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('url_domain', "&amp;domain=".$_prefixVariable1);
}?>

<nav class="navbar navbar-default fixed-top"><div class="container-fluid"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>                <a class="navbar-brand" href='main.php'><img id="login_header_logo" src="images/postbox.png" alt="Logo"/></a></div><div id="navbar" class="collapse navbar-collapse"><ul class="nav navbar-nav">                    <?php if ($_smarty_tpl->tpl_vars['authentication_has_role']->value['global_admin']) {?><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_list_admin');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_list_admin'];?>
 <span class="caret"></span></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_list_admin');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_list_admin'];?>
</a></li><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_create_admin');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_create_admin'];?>
</a></li></ul></li>
                    <?php } else { ?>
                        <li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_main');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_main'];?>
</a></li>
                    <?php }?>
                                        <li><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_list_domain');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_list_domain'];?>
 <span class="caret"></span></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_list_domain');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_list_domain'];?>
</a></li><?php if ($_smarty_tpl->tpl_vars['authentication_has_role']->value['global_admin']) {?><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_edit_domain');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_create_domain'];?>
</a></li><?php }?></ul></li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_list_virtual');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_list_virtual'];?>
 <span class="caret"></span></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_list_virtual');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_list_virtual'];?>
</a></li><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_create_mailbox');
echo $_smarty_tpl->tpl_vars['url_domain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['add_mailbox'];?>
</a></li><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_create_alias');
echo $_smarty_tpl->tpl_vars['url_domain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['add_alias'];?>
</a></li><?php if ($_smarty_tpl->tpl_vars['boolconf_alias_domain']->value) {?><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_create_alias_domain');
echo $_smarty_tpl->tpl_vars['url_domain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['add_alias_domain'];?>
</a></li><?php }?></ul></li>
                                        <?php if ($_smarty_tpl->tpl_vars['CONF']->value['fetchmail'] === 'YES') {?>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_fetchmail');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_fetchmail'];?>
 <span class="caret"></span></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_fetchmail');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_fetchmail'];?>
</a></li><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_fetchmail_new_entry');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pFetchmail_new_entry'];?>
</a></li></ul></li>
                    <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['CONF']->value['sendmail'] === 'YES') {?>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_sendmail');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_sendmail'];?>
 <span class="caret"></span></a><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_sendmail');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_sendmail'];?>
</a></li><?php if ($_smarty_tpl->tpl_vars['authentication_has_role']->value['global_admin'] || (isset($_smarty_tpl->tpl_vars['CONF']->value['sendmail_all_admins']) && $_smarty_tpl->tpl_vars['CONF']->value['sendmail_all_admins'] === 'YES')) {?><li><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_broadcast_message');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_broadcast_message'];?>
</a></li><?php }?></ul></li>
                    <?php }?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                                        <li><a class="btn btn-default navbar-btn btn-sm" type="button"
                           href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_password');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_password'];?>
</a></li>
                                        <?php if ($_smarty_tpl->tpl_vars['authentication_has_role']->value['global_admin'] && $_smarty_tpl->tpl_vars['CONF']->value['database_type'] !== 'pgsql' && $_smarty_tpl->tpl_vars['CONF']->value['backup'] === 'YES') {?>
                        <li><a class="btn btn-default navbar-btn btn-sm" type="button"
                               href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_backup');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_backup'];?>
</a></li>
                    <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['CONF']->value['logging'] === 'YES') {?>
                        <li><a class="btn btn-default navbar-btn btn-sm" type="button"
                               href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_viewlog');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_viewlog'];?>
</a></li>
                    <?php }?>
                                        <li><a class="btn btn-default navbar-btn btn-sm" type="button"
                           href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_logout');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_logout'];?>
</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

<?php }
}
