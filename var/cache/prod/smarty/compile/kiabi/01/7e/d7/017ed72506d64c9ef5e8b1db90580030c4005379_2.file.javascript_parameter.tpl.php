<?php
/* Smarty version 3.1.39, created on 2022-01-17 03:13:19
  from 'D:\xampp\htdocs\prestashop_17\kiabi\modules\leobootstrapmenu\views\templates\hook\javascript_parameter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e5251f7a7777_61155178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '017ed72506d64c9ef5e8b1db90580030c4005379' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_17\\kiabi\\modules\\leobootstrapmenu\\views\\templates\\hook\\javascript_parameter.tpl',
      1 => 1558079243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e5251f7a7777_61155178 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	
	var FancyboxI18nClose = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var FancyboxI18nNext = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var FancyboxI18nPrev = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var current_link = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_link']->value, ENT_QUOTES, 'UTF-8');?>
";		
	var currentURL = window.location;
	currentURL = String(currentURL);
	currentURL = currentURL.replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
	current_link = current_link.replace("https://","").replace("http://","").replace("www.","");
	var text_warning_select_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select One to remove?','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var text_confirm_remove_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure to remove footer row?','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var close_bt_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var list_menu = [];
	var list_menu_tmp = {};
	var list_tab = [];
	var isHomeMenu = 0;
	
<?php echo '</script'; ?>
><?php }
}
