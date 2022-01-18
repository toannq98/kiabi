<?php
/* Smarty version 3.1.39, created on 2022-01-17 09:47:23
  from 'D:\xampp\htdocs\prestashop_17\kiabi\admincp\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e5817b365d82_53925235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32d3eef3ad12cf83e80697ba07e46a3fe9d4ed0d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_17\\kiabi\\admincp\\themes\\default\\template\\content.tpl',
      1 => 1638864897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e5817b365d82_53925235 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
