<?php
/* Smarty version 4.3.4, created on 2024-10-14 08:34:16
  from '/var/www/html/openemr/templates/x12_partners/general_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_670cd78889ebb6_92936868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '138115790b60e0a1968c45b3fa92e27db9fc775b' => 
    array (
      0 => '/var/www/html/openemr/templates/x12_partners/general_list.html',
      1 => 1700108885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670cd78889ebb6_92936868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/openemr/library/smarty/plugins/function.xlt.php','function'=>'smarty_function_xlt',),));
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['CURRENT_ACTION']->value;?>
action=edit&id=default" onclick="top.restoreSession()" class="btn btn-secondary btn-add">
    <?php echo smarty_function_xlt(array('t'=>'Add New Partner'),$_smarty_tpl);?>

</a>
<br /><br />
<div class="table-responsive">
  <table class="table table-striped">
      <thead>
      <tr>
          <th><?php echo smarty_function_xlt(array('t'=>'Name'),$_smarty_tpl);?>
</th>
          <th><?php echo smarty_function_xlt(array('t'=>'Submitter Name (If applicable)'),$_smarty_tpl);?>
</th>
          <th><?php echo smarty_function_xlt(array('t'=>'Sender ID'),$_smarty_tpl);?>
</th>
          <th><?php echo smarty_function_xlt(array('t'=>'Receiver ID'),$_smarty_tpl);?>
</th>
          <th><?php echo smarty_function_xlt(array('t'=>'Version'),$_smarty_tpl);?>
</th>
      </tr>
      </thead>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partners']->value, 'partner');
$_smarty_tpl->tpl_vars['partner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['partner']->value) {
$_smarty_tpl->tpl_vars['partner']->do_else = false;
?>
      <tr>
          <td>
              <a href="<?php echo $_smarty_tpl->tpl_vars['CURRENT_ACTION']->value;?>
action=edit&x12_partner_id=<?php echo attr($_smarty_tpl->tpl_vars['partner']->value->id);?>
" onclick="top.restoreSession()">
                  <?php echo text($_smarty_tpl->tpl_vars['partner']->value->get_name());?>
&nbsp;
              </a>
          </td>
          <td><?php echo text($_smarty_tpl->tpl_vars['partner']->value->get_x12_submitter_name());?>
&nbsp;</td>
          <td><?php echo text($_smarty_tpl->tpl_vars['partner']->value->get_x12_sender_id());?>
&nbsp;</td>
          <td><?php echo text($_smarty_tpl->tpl_vars['partner']->value->get_x12_receiver_id());?>
&nbsp;</td>
          <td><?php echo text($_smarty_tpl->tpl_vars['partner']->value->get_x12_version());?>
&nbsp;</td>
      </tr>
      <?php
}
if ($_smarty_tpl->tpl_vars['partner']->do_else) {
?>
      <tr>
          <td colspan="4"><?php echo smarty_function_xlt(array('t'=>'No Partners Found'),$_smarty_tpl);?>
</td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
</div>
<?php }
}
