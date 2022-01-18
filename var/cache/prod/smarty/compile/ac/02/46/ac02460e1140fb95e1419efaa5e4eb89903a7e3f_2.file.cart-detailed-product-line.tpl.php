<?php
/* Smarty version 3.1.39, created on 2022-01-17 11:26:43
  from 'D:\xampp\htdocs\prestashop_17\kiabi\themes\kiabi\templates\checkout\_partials\cart-detailed-product-line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e598c30faac7_73968697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac02460e1140fb95e1419efaa5e4eb89903a7e3f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_17\\kiabi\\themes\\kiabi\\templates\\checkout\\_partials\\cart-detailed-product-line.tpl',
      1 => 1642435413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e598c30faac7_73968697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <div class="product-line-grid">
   <!--  product line left content: image-->
   <div class="product-line-grid-left">
     <span class="product-image media-middle">
       <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
         <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy">
       <?php } else { ?>
         <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" />
       <?php }?>
     </span>
   </div>
   <div class="product-line-grid-right product-line-actions">
     <div class="shopping-cart-item-data-first-line">
       <div class="shopping-cart-item-description">
         <div class="product-line-info">
           <a class="label shopping-cart-item-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-id_customization="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
         </div>
 
         <div class="product-line-info product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>">
             <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
               <div class="product-discount">
                 <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                 <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                   <span class="discount discount-percentage">
                       -<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'], ENT_QUOTES, 'UTF-8');?>

                     </span>
                 <?php } else { ?>
                   <span class="discount discount-amount">
                       -<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_to_display'], ENT_QUOTES, 'UTF-8');?>

                     </span>
                 <?php }?>
               </div>
             <?php }?>
             <div class="current-price">
               <span class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
               <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
                 <div class="unit-price-cart"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</div>
               <?php }?>
             </div>
             <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

         </div>
 
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
           <div class="product-line-info <?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['attribute']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
             <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
             <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
           </div>
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 
         <?php if (is_array($_smarty_tpl->tpl_vars['product']->value['customizations']) && count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
           <br>
           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91381245761e598c30ecd78_05852504', 'cart_detailed_product_line_customization');
?>

         <?php }?>
       </div>
       <div class="shopping-cart-item-remove">
         <div class="cart-line-product-actions">
           <a
               class                       = "remove-from-cart"
               rel                         = "nofollow"
               href                        = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
               data-link-action            = "delete-from-cart"
               data-id-product             = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
               data-id-product-attribute   = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
               data-id-customization   	  = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
           >
             <?php if (empty($_smarty_tpl->tpl_vars['product']->value['is_gift'])) {?>
               <span class="material-icons">close</span>
             <?php }?>
           </a>
 
           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109223498561e598c30f5d94_19245417', 'hook_cart_extra_product_actions');
?>

 
         </div>
       </div>
     </div>
     <div class="shopping-cart-item-data-second-line">
       <div class="shopping-cart-item-quantity-container">
         <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['is_gift'])) {?>
           <span class="gift-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
         <?php } else { ?>
           <input
             class="js-cart-line-product-quantity"
             data-down-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
             data-up-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
             data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
             data-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
             type="number"
             inputmode="numeric"
             pattern="[0-9]*"
             value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
             name="product-quantity-spin"
             aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%productName% product quantity field','sprintf'=>array('%productName%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
"
           />
         <?php }?>
       </div>
       <div class="shopping-cart-item-price-normal">
         <span class="product-price">
             <strong>
               <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['is_gift'])) {?>
                 <span class="gift"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
               <?php } else { ?>
                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>

               <?php }?>
             </strong>
         </span>
       </div>
     </div>
   </div>
   <div class="clearfix"></div>
 </div>
 <?php }
/* {block 'cart_detailed_product_line_customization'} */
class Block_91381245761e598c30ecd78_05852504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_product_line_customization' => 
  array (
    0 => 'Block_91381245761e598c30ecd78_05852504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
               <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
               <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
                         <span aria-hidden="true">&times;</span>
                       </button>
                       <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
                     </div>
                     <div class="modal-body">
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                         <div class="product-customization-line row">
                           <div class="col-sm-3 col-xs-4 label">
                             <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                           </div>
                           <div class="col-sm-9 col-xs-8 value">
                             <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                               <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                 <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                               <?php } else { ?>
                                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                               <?php }?>
                             <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                               <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy">
                             <?php }?>
                           </div>
                         </div>
                       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                     </div>
                   </div>
                 </div>
               </div>
             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           <?php
}
}
/* {/block 'cart_detailed_product_line_customization'} */
/* {block 'hook_cart_extra_product_actions'} */
class Block_109223498561e598c30f5d94_19245417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_cart_extra_product_actions' => 
  array (
    0 => 'Block_109223498561e598c30f5d94_19245417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartExtraProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

           <?php
}
}
/* {/block 'hook_cart_extra_product_actions'} */
}
