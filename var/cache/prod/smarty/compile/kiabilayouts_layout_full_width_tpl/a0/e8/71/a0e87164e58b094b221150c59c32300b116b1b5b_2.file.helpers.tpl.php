<?php
/* Smarty version 3.1.39, created on 2022-01-17 03:13:21
  from 'D:\xampp\htdocs\prestashop_17\kiabi\themes\kiabi\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e525216ae6c1_59351539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0e87164e58b094b221150c59c32300b116b1b5b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_17\\kiabi\\themes\\kiabi\\templates\\_partials\\helpers.tpl',
      1 => 1637050485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e525216ae6c1_59351539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\prestashop_17\\kiabi\\var\\cache\\prod\\smarty\\compile\\kiabilayouts_layout_full_width_tpl\\a0\\e8\\71\\a0e87164e58b094b221150c59c32300b116b1b5b_2.file.helpers.tpl.php',
    'uid' => 'a0e87164e58b094b221150c59c32300b116b1b5b',
    'call_name' => 'smarty_template_function_renderLogo_80010960361e5252168f005_50048411',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_80010960361e5252168f005_50048411 */
if (!function_exists('smarty_template_function_renderLogo_80010960361e5252168f005_50048411')) {
function smarty_template_function_renderLogo_80010960361e5252168f005_50048411(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      loading="lazy"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_80010960361e5252168f005_50048411 */
}
