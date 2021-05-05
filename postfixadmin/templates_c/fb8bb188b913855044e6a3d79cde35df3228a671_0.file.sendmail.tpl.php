<?php
/* Smarty version 3.1.33, created on 2021-03-27 11:25:02
  from '/var/www/html/postfixadmin/templates/sendmail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605f160e26bc62_77063421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb8bb188b913855044e6a3d79cde35df3228a671' => 
    array (
      0 => '/var/www/html/postfixadmin/templates/sendmail.tpl',
      1 => 1614889642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605f160e26bc62_77063421 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="mailbox" method="post" action="" class="form-horizontal">
    <div id="edit_form" class="panel panel-default">
        <div class="panel-heading"><h4><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pSendmail_welcome'];?>
</h4></div>
        <div class="panel-body enable-asterisk">
            <input class="flat" type="hidden" name="token" value="<?php echo rawurlencode($_SESSION['PFA_token']);?>
"/>
            <div class="form-group">
                <label class="col-md-4 col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['from'];?>
:</label>
                <div class="col-md-6 col-sm-8"><p class="form-control-static"><em><?php echo $_smarty_tpl->tpl_vars['smtp_from_email']->value;?>
</em></p></div>
            </div>
            <div class="form-group">
                <label class="col-md-4 col-sm-4 control-label" for="fTo"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pSendmail_to'];?>
:</label>
                <div class="col-md-6 col-sm-8"><input class="form-control" type="text" name="fTo" id="fTo"/></div>
            </div>
            <div class="form-group">
                <label class="col-md-4 col-sm-4 control-label" for="fSubject"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['subject'];?>
:</label>
                <div class="col-md-6 col-sm-8"><input class="form-control" type="text" name="fSubject" id="fSubject"
                                                      value="<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pSendmail_subject_text'];?>
"/></div>
            </div>
            <div class="form-group">
                <label class="col-md-4 col-sm-4 control-label" for="fBody"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pSendmail_body'];?>
:</label>
                <div class="col-md-6 col-sm-8"><textarea class="form-control" rows="10" cols="60" name="fBody"
                                                         id="fBody"><?php echo $_smarty_tpl->tpl_vars['CONF']->value['welcome_text'];?>
</textarea></div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group pull-right">
                    <input class="btn btn-primary" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pSendmail_button'];?>
"/>
                </div>
            </div>
        </div>
    </div>
</form>
<?php }
}
