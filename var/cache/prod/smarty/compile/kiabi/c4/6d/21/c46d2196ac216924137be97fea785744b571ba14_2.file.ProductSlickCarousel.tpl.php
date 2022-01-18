<?php
/* Smarty version 3.1.39, created on 2022-01-17 03:13:20
  from 'D:\xampp\htdocs\prestashop_17\kiabi\modules\appagebuilder\views\templates\hook\ProductSlickCarousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e52520c11b38_60542771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c46d2196ac216924137be97fea785744b571ba14' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_17\\kiabi\\modules\\appagebuilder\\views\\templates\\hook\\ProductSlickCarousel.tpl',
      1 => 1597978458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e52520c11b38_60542771 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->

<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
	<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
		<div class="slick-row">
			<div class="timeline-wrapper clearfix prepare"
				data-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'], ENT_QUOTES, 'UTF-8');?>
" 
				data-xl="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['xl']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['xl'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-lg="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['lg']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['lg'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-md="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['md']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['md'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-sm="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['sm']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['sm'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-m="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['m']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['m'], ENT_QUOTES, 'UTF-8');
}?>"
			>
				<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>			
					<div class="timeline-parent">
						<?php
$_smarty_tpl->tpl_vars['foo_child'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo_child']->step = 1;$_smarty_tpl->tpl_vars['foo_child']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo_child']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['slick_row']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['slick_row'])+1)/abs($_smarty_tpl->tpl_vars['foo_child']->step));
if ($_smarty_tpl->tpl_vars['foo_child']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo_child']->value = 1, $_smarty_tpl->tpl_vars['foo_child']->iteration = 1;$_smarty_tpl->tpl_vars['foo_child']->iteration <= $_smarty_tpl->tpl_vars['foo_child']->total;$_smarty_tpl->tpl_vars['foo_child']->value += $_smarty_tpl->tpl_vars['foo_child']->step, $_smarty_tpl->tpl_vars['foo_child']->iteration++) {
$_smarty_tpl->tpl_vars['foo_child']->first = $_smarty_tpl->tpl_vars['foo_child']->iteration === 1;$_smarty_tpl->tpl_vars['foo_child']->last = $_smarty_tpl->tpl_vars['foo_child']->iteration === $_smarty_tpl->tpl_vars['foo_child']->total;?>
							<div class="timeline-item">
								<div class="animated-background">					
									<div class="background-masker content-top"></div>							
									<div class="background-masker content-second-line"></div>							
									<div class="background-masker content-third-line"></div>							
									<div class="background-masker content-fourth-line"></div>
								</div>
							</div>
						<?php }
}
?>
					</div>
				<?php }
}
?>
			</div>
			<div class="list-product-slick-carousel slick-slider slick-loading <?php if ((isset($_smarty_tpl->tpl_vars['productClassWidget']->value))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productClassWidget']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">		
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'position', 'mypLoop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']++;
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['product_item_path']->value))) {?>
						<div class="slick-slide <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
							<div class="item">
		                    	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['product_item_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?>
		                   	</div>
						</div>
	                <?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	<?php } else { ?>
		<p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products at this time.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>	
	<?php }
}?>

<?php echo '<script'; ?>
 type="text/javascript">
ap_list_functions.push(function(){
	$('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').imagesLoaded( function() {
		$('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').slick(
			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_custom_status']) {?>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_custom'], ENT_QUOTES, 'UTF-8');?>

			<?php } else { ?>
			{
				centerMode: <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode'])) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode']) {?>true<?php } else { ?>false<?php }?>,
				centerPadding: '<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'])) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'], ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>px',
				dots: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {?>true<?php } else { ?>false<?php }?>,
				infinite: <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_loopinfinite'])) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_loopinfinite']) {?>true<?php } else { ?>false<?php }?>,
				vertical: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_vertical']) {?>true<?php } else { ?>false<?php }?>,
				verticalSwiping : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_vertical']) {?>true<?php } else { ?>false<?php }?>,
				autoplay: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_autoplay']) {?>true<?php } else { ?>false<?php }?>,
				pauseonhover: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_pauseonhover']) {?>true<?php } else { ?>false<?php }?>,
				autoplaySpeed: 2000,
				arrows: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_arrows']) {?>true<?php } else { ?>false<?php }?>,
				rows: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_row'], ENT_QUOTES, 'UTF-8');?>
,
				slidesToShow: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoshow'], ENT_QUOTES, 'UTF-8');?>
,
				slidesToScroll: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoshow'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoscroll'], ENT_QUOTES, 'UTF-8');
}?>,
				rtl: <?php if ((isset($_smarty_tpl->tpl_vars['IS_RTL']->value)) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>true<?php } else { ?>false<?php }?>,
				responsive: [
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formAtts']->value['slick_items_custom'], 'mobile', false, NULL, 'mobiles', array (
));
$_smarty_tpl->tpl_vars['mobile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mobile']->value) {
$_smarty_tpl->tpl_vars['mobile']->do_else = false;
?>
					{
					breakpoint: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile']->value[0], ENT_QUOTES, 'UTF-8');?>
,
					settings: {
						centerMode: <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode'])) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode']) {?>true<?php } else { ?>false<?php }?>,
						centerPadding: '<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'])) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'], ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>px',
						slidesToShow: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile']->value[1], ENT_QUOTES, 'UTF-8');?>
,
						slidesToScroll: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile']->value[1], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoscroll'], ENT_QUOTES, 'UTF-8');
}?>,
					}
					},
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				]
			}
			<?php }?>
		);
		$('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').removeClass('slick-loading').addClass('slick-loaded').parents('.slick-row').addClass('hide-loading');
	});
});
<?php echo '</script'; ?>
>
<?php }
}
