<?php
/* Smarty version 3.1.33, created on 2021-03-25 12:32:34
  from '/var/www/html/postfixadmin/templates/editform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605c82e26f3379_39087061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5175c4b1b48afe3dbedfeeac9eb58f7436172d00' => 
    array (
      0 => '/var/www/html/postfixadmin/templates/editform.tpl',
      1 => 1614889642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c82e26f3379_39087061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/postfixadmin/lib/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<form name="edit_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" method="post" action="" class="form-horizontal">
    <div id="edit_form" class="panel panel-default">
        <div class="panel-heading"><h4><?php echo $_smarty_tpl->tpl_vars['formtitle']->value;?>
</h4></div>
        <div class="panel-body enable-asterisk">
            <input class="flat" type="hidden" name="table" value="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
"/>
            <input class="flat" type="hidden" name="token" value="<?php echo rawurlencode($_SESSION['PFA_token']);?>
"/>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['struct']->value, 'field', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['display_in_form'] == 1) {?>

                    <?php if ($_smarty_tpl->tpl_vars['table']->value == 'foo' && $_smarty_tpl->tpl_vars['key']->value == 'bar') {?>
                        <div class="form-group">Special handling (complete table row) for <?php echo $_smarty_tpl->tpl_vars['table']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</div>
                    <?php } else { ?>
                        <div class="form-group <?php if ($_smarty_tpl->tpl_vars['fielderror']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>has-error<?php }?>">
                            <label class="col-md-4 col-sm-4 control-label" for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
                            <div class="col-md-6 col-sm-8">
                                <?php if ($_smarty_tpl->tpl_vars['field']->value['editable'] == 0) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'enma') {?>
                                        <?php echo $_smarty_tpl->tpl_vars['struct']->value[$_smarty_tpl->tpl_vars['key']->value]['options'][$_smarty_tpl->tpl_vars['value_'.($_smarty_tpl->tpl_vars['key']->value)]->value];?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['value_'.($_smarty_tpl->tpl_vars['key']->value)]->value;?>

                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['table']->value == 'foo' && $_smarty_tpl->tpl_vars['key']->value == 'bar') {?>
                                        Special handling (td content) for <?php echo $_smarty_tpl->tpl_vars['table']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['key']->value;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'bool') {?>
                                        <div class="checkbox"><label>
                                                <input type="checkbox" value='1'
                                                       name="value[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]"<?php ob_start();
echo $_smarty_tpl->tpl_vars['value_'.($_smarty_tpl->tpl_vars['key']->value)]->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?> checked="checked"<?php }?>/>
                                            </label></div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'enum') {?>
                                        <select class="form-control" name="value[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                            <?php echo smarty_function_html_options(array('output'=>$_smarty_tpl->tpl_vars['struct']->value[$_smarty_tpl->tpl_vars['key']->value]['options'],'values'=>$_smarty_tpl->tpl_vars['struct']->value[$_smarty_tpl->tpl_vars['key']->value]['options'],'selected'=>$_smarty_tpl->tpl_vars['value_'.($_smarty_tpl->tpl_vars['key']->value)]->value),$_smarty_tpl);?>

                                        </select>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'enma') {?>
                                        <select class="form-control" name="value[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['struct']->value[$_smarty_tpl->tpl_vars['key']->value]['options'],'selected'=>$_smarty_tpl->tpl_vars['value_'.($_smarty_tpl->tpl_vars['key']->value)]->value),$_smarty_tpl);?>

                                        </select>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'list') {?>
                                        <select class="form-control" name="value[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][]" size="10"
                                                multiple="multiple">
                                            <?php echo smarty_function_html_options(array('output'=>$_smarty_tpl->tpl_vars['struct']->value[$_smarty_tpl->tpl_vars['key']->value]['options'],'values'=>$_smarty_tpl->tpl_vars['struct']->value[$_smarty_tpl->tpl_vars['key']->value]['options'],'selected'=>$_smarty_tpl->tpl_vars['value_'.($_smarty_tpl->tpl_vars['key']->value)]->value),$_smarty_tpl);?>

                                        </select>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'pass' || $_smarty_tpl->tpl_vars['field']->value['type'] == 'b64p') {?>
                                        <input class="form-control" type="password" name="value[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]"/>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'txtl') {?>
                                        <textarea class="form-control" rows="10" cols="35" name="value[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value_'.($_smarty_tpl->tpl_vars['key']->value)]->value, 'field2', false, 'key2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key2']->value => $_smarty_tpl->tpl_vars['field2']->value) {
echo $_smarty_tpl->tpl_vars['field2']->value;?>
&#10;<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></textarea>
                                    <?php } else { ?>
                                        <input class="form-control" type="text" name="value[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]"
                                               value="<?php echo $_smarty_tpl->tpl_vars['value_'.($_smarty_tpl->tpl_vars['key']->value)]->value;?>
"/>
                                    <?php }?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['table']->value == 'foo' && $_smarty_tpl->tpl_vars['key']->value == 'bar') {?>
                                    <span class="help-block">Special handling (td content) for <?php echo $_smarty_tpl->tpl_vars['table']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</span>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['fielderror']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['fielderror']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</span>
                                    <?php } else { ?>
                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['field']->value['desc'];?>
</span>
                                    <?php }?>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>

                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
        <div class="panel-footer">
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group pull-right">
                    <input class="btn btn-primary" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['submitbutton']->value;?>
"/>
                </div>
            </div>
        </div>

    </div>
</form>
<?php }
}
