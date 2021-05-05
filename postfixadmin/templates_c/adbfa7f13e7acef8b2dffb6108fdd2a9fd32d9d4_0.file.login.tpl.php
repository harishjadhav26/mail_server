<?php
/* Smarty version 3.1.33, created on 2021-03-25 12:32:02
  from '/var/www/html/postfixadmin/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605c82c2385d93_52332924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adbfa7f13e7acef8b2dffb6108fdd2a9fd32d9d4' => 
    array (
      0 => '/var/www/html/postfixadmin/templates/login.tpl',
      1 => 1614889642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c82c2385d93_52332924 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href='main.php'><img id="login_header_logo" src="<?php echo $_smarty_tpl->tpl_vars['CONF']->value['theme_logo'];?>
"
                                                         alt="Logo"/></a>
            <?php if ($_smarty_tpl->tpl_vars['CONF']->value['show_header_text'] === 'YES' && $_smarty_tpl->tpl_vars['CONF']->value['header_text']) {?>
                <h2><?php echo $_smarty_tpl->tpl_vars['CONF']->value['header_text'];?>
</h2>
            <?php }?>
        </div>
    </div>
</nav>

<div id="login" class="container">

    <h2 class="h2"><?php if ($_smarty_tpl->tpl_vars['logintype']->value == 'admin') {
echo $_smarty_tpl->tpl_vars['PALANG']->value['pLogin_welcome'];
} else {
echo $_smarty_tpl->tpl_vars['PALANG']->value['pUsersLogin_welcome'];
}?></h2>

    <div class="well">

        <form name="frmLogin" method="post" action="" role="form" class="form-signin">
            <input type="hidden" name="token" value="<?php echo rawurlencode($_SESSION['PFA_token']);?>
"/>
            <div class="form-group">
                <label for="fUsername"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pLogin_username'];?>
:</label>
                <input class="form-control" type="text" name="fUsername" id="fUsername"/>
            </div>
            <div class="form-group">
                <label for="fPassword"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['password'];?>
:</label>
                <input class="form-control" type="password" name="fPassword" id="fPassword"/>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['forgotten_password_reset']->value) {?>
                <div class="form-group row">
                    <div class="col-sm-6 col-sm-offset-3 reset-button">
                        <a class="btn btn-default btn-block" role="button" href="password-recover.php">
                            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                            <?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pUsersLogin_password_recover'];?>
</a>
                    </div>
                </div>
            <?php }?>
            <div class="form-group">
                <label for=lang><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pLogin_language'];?>
:</label>
                <?php echo $_smarty_tpl->tpl_vars['language_selector']->value;?>

            </div>
            <div class="text-center">
                <button class="btn btn-primary btn-lg" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pLogin_button'];?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pLogin_button'];?>
</button>
            </div>
        </form>
        <?php if ($_smarty_tpl->tpl_vars['logintype']->value == 'admin') {?>
            <br/>
            <div class="text-center">
                <a href="users/"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pLogin_login_users'];?>
</a>
            </div>
        <?php }?>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        document.frmLogin.fUsername.focus();
    <?php echo '</script'; ?>
>
</div>

<?php }
}
