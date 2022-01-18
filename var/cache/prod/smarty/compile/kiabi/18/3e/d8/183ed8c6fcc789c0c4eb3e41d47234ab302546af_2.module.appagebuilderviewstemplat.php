<?php
/* Smarty version 3.1.39, created on 2022-01-17 03:13:21
  from 'module:appagebuilderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e52521077d52_63599239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '183ed8c6fcc789c0c4eb3e41d47234ab302546af' => 
    array (
      0 => 'module:appagebuilderviewstemplat',
      1 => 1641702474,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e52521077d52_63599239 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['st_att_list_groups']->value))) {?>
<div class="st_attr_list_container <?php if ($_smarty_tpl->tpl_vars['st_att_list_center']->value) {?> st_attr_list_text_center<?php }?>">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['st_att_list_groups']->value, 'group', false, 'id_attribute_group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
    <?php if (count($_smarty_tpl->tpl_vars['group']->value['attributes']) && ($_smarty_tpl->tpl_vars['st_att_list_show']->value == 1 || array_sum($_smarty_tpl->tpl_vars['group']->value['attributes_quantity']))) {?>
        <div class="st_attr_list_item">
            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
 :</strong>
            <?php if (($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'color' && $_smarty_tpl->tpl_vars['st_att_list_color']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['st_att_list_show']->value == 1 || $_smarty_tpl->tpl_vars['group']->value['attributes_quantity'][$_smarty_tpl->tpl_vars['id_attribute']->value]) {?>
                        <span class="st_attr_list_swatch" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" style="<?php if ($_smarty_tpl->tpl_vars['group']->value['colors'][$_smarty_tpl->tpl_vars['id_attribute']->value]['type']) {?>background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['colors'][$_smarty_tpl->tpl_vars['id_attribute']->value]['value'], ENT_QUOTES, 'UTF-8');?>
');<?php } else { ?>background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['colors'][$_smarty_tpl->tpl_vars['id_attribute']->value]['value'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"></span>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['st_att_list_show']->value == 1 || $_smarty_tpl->tpl_vars['group']->value['attributes_quantity'][$_smarty_tpl->tpl_vars['id_attribute']->value]) {?>
                        <span class="st_attr_list_text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
}
