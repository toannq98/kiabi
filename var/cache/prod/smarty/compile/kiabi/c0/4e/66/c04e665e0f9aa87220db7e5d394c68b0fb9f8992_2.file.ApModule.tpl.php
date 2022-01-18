<?php
/* Smarty version 3.1.39, created on 2022-01-17 03:13:22
  from 'D:\xampp\htdocs\prestashop_17\kiabi\modules\appagebuilder\views\templates\hook\ApModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e52522458c79_67322391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c04e665e0f9aa87220db7e5d394c68b0fb9f8992' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_17\\kiabi\\modules\\appagebuilder\\views\\templates\\hook\\ApModule.tpl',
      1 => 1548646430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e52522458c79_67322391 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';
echo $_smarty_tpl->tpl_vars['apContent']->value;
echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';
}
}
