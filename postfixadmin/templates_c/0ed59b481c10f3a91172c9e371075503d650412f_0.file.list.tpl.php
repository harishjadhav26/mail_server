<?php
/* Smarty version 3.1.33, created on 2021-03-25 12:32:23
  from '/var/www/html/postfixadmin/templates/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605c82d7d960b2_31566823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ed59b481c10f3a91172c9e371075503d650412f' => 
    array (
      0 => '/var/www/html/postfixadmin/templates/list.tpl',
      1 => 1614889642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c82d7d960b2_31566823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/postfixadmin/lib/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'/var/www/html/postfixadmin/lib/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="panel panel-default">

<?php if ((count($_smarty_tpl->tpl_vars['admin_list']->value) > 1)) {?>
<div class="panel-heading">
<form name="frmOverview" method="post" action="">
        <?php echo smarty_function_html_options(array('name'=>'username','output'=>$_smarty_tpl->tpl_vars['admin_list']->value,'values'=>$_smarty_tpl->tpl_vars['admin_list']->value,'selected'=>$_smarty_tpl->tpl_vars['admin_selected']->value,'onchange'=>"this.form.submit();"),$_smarty_tpl);?>

        <noscript><input class="button" type="submit" name="go" value="<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['go'];?>
" /></noscript>
</form>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msg']->value['show_simple_search']) {?>
    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'form_search');?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msg']->value['show_simple_search']) {?>
    <?php if ((count($_smarty_tpl->tpl_vars['search']->value) > 0)) {?>
        <div class='searchparams'>
            <p><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['searchparams'];?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search']->value, 'field', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
                <span><?php if ($_smarty_tpl->tpl_vars['struct']->value[$_smarty_tpl->tpl_vars['key']->value]['label']) {
echo $_smarty_tpl->tpl_vars['struct']->value[$_smarty_tpl->tpl_vars['key']->value]['label'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>
                    <?php if (isset($_smarty_tpl->tpl_vars['searchmode']->value[$_smarty_tpl->tpl_vars['key']->value])) {
echo $_smarty_tpl->tpl_vars['searchmode']->value[$_smarty_tpl->tpl_vars['key']->value];
} else { ?>=<?php }?> <?php echo $_smarty_tpl->tpl_vars['field']->value;?>

                </span>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <span><a href="list.php?table=<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
&reset_search=1">[x]</a></span>
        </div>
    <?php }
}?>

<table class="table table-hover" border=0 id='admin_table'><!-- TODO: 'admin_table' needed because of CSS for table header -->

<?php if ($_smarty_tpl->tpl_vars['msg']->value['list_header']) {?>
	<?php $_smarty_tpl->_assignInScope('colcount', 2);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['struct']->value, 'field', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['field']->value['display_in_list'] == 1 && $_smarty_tpl->tpl_vars['field']->value['label']) {?>			<?php $_smarty_tpl->_assignInScope('colcount', $_smarty_tpl->tpl_vars['colcount']->value+1);?>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<thead>
	<tr>
		<th style="text-align:center;" colspan="<?php echo $_smarty_tpl->tpl_vars['colcount']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value[$_smarty_tpl->tpl_vars['msg']->value['list_header']];?>
</th>
	</tr>
	</thead>
<?php }?>

<thead>
<tr class="header">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['struct']->value, 'field', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['display_in_list'] == 1 && $_smarty_tpl->tpl_vars['field']->value['label']) {?>            <th><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</th>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
</tr>
</thead>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RAW_items']->value, 'RAW_item', false, 'itemkey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemkey']->value => $_smarty_tpl->tpl_vars['RAW_item']->value) {
?>
    <?php $_smarty_tpl->_assignInScope('item', $_smarty_tpl->tpl_vars['items']->value[htmlentities($_smarty_tpl->tpl_vars['itemkey']->value,@constant('ENT_QUOTES'),'UTF-8',false)]);?>     <tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['struct']->value, 'field', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['display_in_list'] == 1 && $_smarty_tpl->tpl_vars['field']->value['label']) {?>

            <?php if ($_smarty_tpl->tpl_vars['field']->value['linkto'] != '' && ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['id_field']->value] != '' || $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['id_field']->value] > 0)) {?>
                <?php ob_start();
echo rawurlencode($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['id_field']->value]);
$_prefixVariable1 = ob_get_clean();
ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['linkto'],'%s',$_prefixVariable1);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('linkto', $_prefixVariable2);?>                 <?php $_smarty_tpl->_assignInScope('linktext', "<a href='".((string)$_smarty_tpl->tpl_vars['linkto']->value)."'>".((string)$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value])."</a>");?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('linktext', $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['table']->value == 'foo' && $_smarty_tpl->tpl_vars['key']->value == 'bar') {?>
                <td>Special handling (complete table row) for <?php echo $_smarty_tpl->tpl_vars['table']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
            <?php } else { ?>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['table']->value == 'foo' && $_smarty_tpl->tpl_vars['key']->value == 'bar') {?>
                        Special handling (td content) for <?php echo $_smarty_tpl->tpl_vars['table']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['key']->value;?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['table']->value == 'aliasdomain' && $_smarty_tpl->tpl_vars['key']->value == 'target_domain' && $_smarty_tpl->tpl_vars['struct']->value['target_domain']['linkto'] == 'target') {?>
                        <a href="list-virtual.php?domain=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['target_domain']);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['target_domain'];?>
</a>
                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'active') {?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['_can_edit']) {?>
                            <a class="btn btn-warning" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_editactive');
echo $_smarty_tpl->tpl_vars['table']->value;?>
&amp;id=<?php echo rawurlencode($_smarty_tpl->tpl_vars['RAW_item']->value[$_smarty_tpl->tpl_vars['id_field']->value]);?>
&amp;active=<?php if (($_smarty_tpl->tpl_vars['item']->value['active'] == 0)) {?>1<?php } else { ?>0<?php }?>&amp;token=<?php echo rawurlencode($_SESSION['PFA_token']);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['_active'];?>
</a>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['_active'];?>

                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'bool') {?>
                        <?php $_smarty_tpl->_assignInScope('tmpkey', "_".((string)$_smarty_tpl->tpl_vars['key']->value));
echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['tmpkey']->value];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'list') {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value], 'field2', false, 'key2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key2']->value => $_smarty_tpl->tpl_vars['field2']->value) {
echo $_smarty_tpl->tpl_vars['field2']->value;?>
<br> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'pass') {?>
                        (hidden)
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'quot') {?>
                        <?php $_smarty_tpl->_assignInScope('tmpkey', "_".((string)$_smarty_tpl->tpl_vars['key']->value)."_percent");?>

                        <?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['tmpkey']->value] > 90) {?>
                            <?php $_smarty_tpl->_assignInScope('quota_level', "high");?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['tmpkey']->value] > 55) {?>
                            <?php $_smarty_tpl->_assignInScope('quota_level', "mid");?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('quota_level', "low");?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['tmpkey']->value] > -1) {?>
                            <div class="quota quota_<?php echo $_smarty_tpl->tpl_vars['quota_level']->value;?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['tmpkey']->value]*1.2;?>
px;"></div>
                            <div class="quota_bg"></div></div>
                            <div class="quota_text quota_text_<?php echo $_smarty_tpl->tpl_vars['quota_level']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['linktext']->value;?>
</div>
                        <?php } else { ?>
                            <div class="quota_bg quota_no_border"></div></div>
                            <div class="quota_text"><?php echo $_smarty_tpl->tpl_vars['linktext']->value;?>
</div>
                        <?php }?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'txtl') {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value], 'field2', false, 'key2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key2']->value => $_smarty_tpl->tpl_vars['field2']->value) {
echo $_smarty_tpl->tpl_vars['field2']->value;?>
<br> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'html') {?>
                        <?php echo $_smarty_tpl->tpl_vars['RAW_item']->value[$_smarty_tpl->tpl_vars['key']->value];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['linktext']->value;?>

                    <?php }?>
                </td>
            <?php }?>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <td><?php if ($_smarty_tpl->tpl_vars['item']->value['_can_edit']) {?>
            <a class="btn btn-primary" href="edit.php?table=<?php echo rawurlencode($_smarty_tpl->tpl_vars['table']->value);?>
&amp;edit=<?php echo rawurlencode($_smarty_tpl->tpl_vars['RAW_item']->value[$_smarty_tpl->tpl_vars['id_field']->value]);?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['edit'];?>
</a>
        <?php } else { ?>&nbsp;
        <?php }?>
    </td>
    <td><?php if ($_smarty_tpl->tpl_vars['item']->value['_can_delete']) {?>
        <form method="post" action="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_delete');?>
">
            <input type="hidden" name="table" value="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
">
            <input type="hidden" name="delete" value="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['RAW_item']->value[$_smarty_tpl->tpl_vars['id_field']->value]);?>
">
            <input type="hidden" name="token" value="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_SESSION['PFA_token']);?>
">

            <button class="btn btn-danger" onclick="return confirm('<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['PALANG']->value[$_smarty_tpl->tpl_vars['msg']->value['confirm_delete']],'%s',$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['id_field']->value]);?>
')">
                <?php echo $_smarty_tpl->tpl_vars['PALANG']->value['del'];?>

            </button>
        </form>
    <?php } else { ?>&nbsp;<?php }?>
</td>
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<div class="panel-footer">
	<div class="btn-toolbar" role="toolbar">
		<div class="btn-group pull-right">
		<?php if ($_smarty_tpl->tpl_vars['msg']->value['can_create']) {?>
		<a href="edit.php?table=<?php echo rawurlencode($_smarty_tpl->tpl_vars['table']->value);?>
" role="button" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['PALANG']->value[$_smarty_tpl->tpl_vars['formconf']->value['create_button']];?>
</a>
		<?php }?>
		<a href="list.php?table=<?php echo rawurlencode($_smarty_tpl->tpl_vars['table']->value);?>
&amp;output=csv&amp;domain=<?php echo $_smarty_tpl->tpl_vars['domain_selected']->value;?>
" role="button" class="btn btn-default"><span class="glyphicon glyphicon-export" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['PALANG']->value['download_csv'];?>
</a>
		</div>
	</div>
</div>

</div>
<?php }
}
