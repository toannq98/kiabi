<?php
/* Smarty version 3.1.39, created on 2022-01-17 10:13:41
  from 'D:\xampp\htdocs\prestashop_17\kiabi\themes\kiabi\templates\checkout\_partials\cart-summary-product-line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e587a5b70b96_34759823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b0f2cd125fd0c7befa4c1a4b10ab92fb421dfcc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_17\\kiabi\\themes\\kiabi\\templates\\checkout\\_partials\\cart-summary-product-line.tpl',
      1 => 1637050485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e587a5b70b96_34759823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13299638661e587a5b6b440_91625918', 'cart_summary_product_line');
?>

<?php }
/* {block 'cart_summary_product_line'} */
class Block_13299638661e587a5b6b440_91625918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_product_line' => 
  array (
    0 => 'Block_13299638661e587a5b6b440_91625918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="media-left">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
      <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
        <img class="media-object" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy">
      <?php } else { ?>
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" />
      <?php }?>
    </a>
  </div>
  <div class="media-body">
    <span class="product-name">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noopener noreferrer nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
    </span>
    <span class="product-quantity">x<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="product-price float-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <div class="product-line-info product-line-info-secondary text-muted">
            <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
            <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <br/>
  </div>
<?php
}
}
/* {/block 'cart_summary_product_line'} */
}
