<?php
/* Smarty version 3.1.33, created on 2021-03-25 12:45:13
  from '/var/www/html/postfixadmin/templates/list-virtual_mailbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605c85d963dba6_38038438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bfe12e960b1c3169f8bb136ed785c7a7b3dc379' => 
    array (
      0 => '/var/www/html/postfixadmin/templates/list-virtual_mailbox.tpl',
      1 => 1614889642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c85d963dba6_38038438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/postfixadmin/lib/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (isset($_smarty_tpl->tpl_vars['search']->value['_'])) {?>
    <?php $_smarty_tpl->_assignInScope('search', $_smarty_tpl->tpl_vars['search']->value['_']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('search', '');
}?>

	<thead>
	<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tr_header');?>

		<?php if ($_smarty_tpl->tpl_vars['CONF']->value['show_status'] === 'YES') {?><th></th><?php }?>
		<th><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_mailbox_username'];?>
</th>
		<?php if ($_smarty_tpl->tpl_vars['display_mailbox_aliases']->value == true) {?>
			<th><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['to'];?>
</th>
		<?php }?>
		<th><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['name'];?>
</th>
		<?php if ($_smarty_tpl->tpl_vars['CONF']->value['quota'] === 'YES') {?><th><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_mailbox_quota'];?>
</th><?php }?>
		<th><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['last_modified'];?>
</th>
		<th><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['active'];?>
</th>
		<?php $_smarty_tpl->_assignInScope('colspan', ((string)($_smarty_tpl->tpl_vars['colspan']->value-6)));?>
		<th colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
">&nbsp;</th>
	</tr>
	</thead>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tMailbox']->value, 'item', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
		<tr>
			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['show_status'] === 'YES') {?>
				<td><?php echo $_smarty_tpl->tpl_vars['gen_show_status_mailbox']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</td>
			<?php }?>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['search']->value == '') {?>
					<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>

				<?php } else { ?>
					<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['username'],$_smarty_tpl->tpl_vars['search']->value,"<span class='searchresult'>".((string)$_smarty_tpl->tpl_vars['search']->value)."</span>");?>

				<?php }?>
			</td>
			<?php if ($_smarty_tpl->tpl_vars['display_mailbox_aliases']->value == true) {?>
				<td>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['goto_mailbox'] == 1) {?>
					Mailbox<br/>
				<?php } else { ?>
					Forward only<br/>
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['goto_other'], 'item2', false, 'j');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['j']->value => $_smarty_tpl->tpl_vars['item2']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['search']->value == '') {?>
						<?php echo $_smarty_tpl->tpl_vars['item2']->value;?>

					<?php } else { ?>
						<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['search']->value,"<span class='searchresult'>".((string)$_smarty_tpl->tpl_vars['search']->value)."</span>");?>

					<?php }?>
					<br/>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</td>
			<?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['quota'] === 'YES') {?>
				<td>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['quota'] == 0) {?>
					<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_unlimited'];?>

				<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['quota'] < 0) {?>
					<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_disabled'];?>

				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['boolconf_used_quotas']->value) {?>


						<?php if ($_smarty_tpl->tpl_vars['divide_quota']->value['percent'][$_smarty_tpl->tpl_vars['i']->value] > $_smarty_tpl->tpl_vars['CONF']->value['quota_level_high_pct']) {?>
							<?php $_smarty_tpl->_assignInScope('quota_level', "high");?>
						<?php } elseif ($_smarty_tpl->tpl_vars['divide_quota']->value['percent'][$_smarty_tpl->tpl_vars['i']->value] > $_smarty_tpl->tpl_vars['CONF']->value['quota_level_med_pct']) {?>
							<?php $_smarty_tpl->_assignInScope('quota_level', "mid");?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('quota_level', "low");?>
						<?php }?>
						<div class="quota quota_<?php echo $_smarty_tpl->tpl_vars['quota_level']->value;?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['divide_quota']->value['quota_width'][$_smarty_tpl->tpl_vars['i']->value];?>
px;"></div>
						<div class="quota_bg"></div></div>
						<div class="quota_text quota_text_<?php echo $_smarty_tpl->tpl_vars['quota_level']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['divide_quota']->value['current'][$_smarty_tpl->tpl_vars['i']->value];?>
 / <?php echo $_smarty_tpl->tpl_vars['divide_quota']->value['quota'][$_smarty_tpl->tpl_vars['i']->value];?>
</div>
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['divide_quota']->value['quota'][$_smarty_tpl->tpl_vars['i']->value];?>

					<?php }?>
				<?php }?>
				</td>
			<?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['modified'];?>
</td>
			<td><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url_editactive');?>
mailbox&amp;id=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['username']);?>
&amp;active=<?php if (($_smarty_tpl->tpl_vars['item']->value['active'] == 0)) {?>1<?php } else { ?>0<?php }?>&amp;token=<?php echo rawurlencode($_SESSION['PFA_token']);?>
"
				><?php if ($_smarty_tpl->tpl_vars['item']->value['active'] == 1) {
echo $_smarty_tpl->tpl_vars['PALANG']->value['YES'];
} else {
echo $_smarty_tpl->tpl_vars['PALANG']->value['NO'];
}?></a></td>
			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['vacation_control_admin'] === 'YES' && $_smarty_tpl->tpl_vars['CONF']->value['vacation'] === 'YES') {?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['v_active'] !== -1) {?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['v_active'] == 1) {?>
						<?php $_smarty_tpl->_assignInScope('v_active', $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_vacation_edit']);?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('v_active', $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_vacation_option']);?>
					<?php }?>
					<td><a class="btn btn-warning" href="vacation.php?username=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['username']);?>
"><?php echo $_smarty_tpl->tpl_vars['v_active']->value;?>
</a></td>
				<?php }?>
			<?php } else { ?>
					<td>&nbsp;</td>
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('edit_aliases', 0);?>
			<?php if ($_smarty_tpl->tpl_vars['authentication_has_role']->value['global_admin'] !== true && $_smarty_tpl->tpl_vars['CONF']->value['alias_control_admin'] === 'YES') {
$_smarty_tpl->_assignInScope('edit_aliases', 1);
}?>
			<?php if ($_smarty_tpl->tpl_vars['authentication_has_role']->value['global_admin'] == true && $_smarty_tpl->tpl_vars['CONF']->value['alias_control'] === 'YES') {
$_smarty_tpl->_assignInScope('edit_aliases', 1);
}?>
			<?php if ($_smarty_tpl->tpl_vars['edit_aliases']->value == 1) {?>
				<td><a class="btn btn-primary" href="edit.php?table=alias&amp;edit=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['username']);?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['alias'];?>
</a></td>
			<?php }?>
			<td><a class="btn btn-primary" href="edit.php?table=mailbox&amp;edit=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['username']);?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['edit'];?>
</a></td>
			<td>
				<form method="post" action="delete.php">
					<input type="hidden" name="table" value="mailbox">
					<input type="hidden" name="delete" value="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['item']->value['username']);?>
">
					<input type="hidden" name="token" value="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_SESSION['PFA_token']);?>
">
					<button type="submit" class="btn btn-danger" onclick="return confirm ('<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['confirm'];
echo $_smarty_tpl->tpl_vars['PALANG']->value['mailboxes'];?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
');">
						<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['del'];?>

					</button>
				</form>
			</td>
		</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
<?php }
}
