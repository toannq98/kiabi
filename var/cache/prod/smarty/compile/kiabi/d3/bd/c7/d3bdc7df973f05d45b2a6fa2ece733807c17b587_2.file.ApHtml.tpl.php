<?php
/* Smarty version 3.1.39, created on 2022-01-17 03:13:23
  from 'D:\xampp\htdocs\prestashop_17\kiabi\modules\appagebuilder\views\templates\hook\ApHtml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e52523340c16_92264665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3bdc7df973f05d45b2a6fa2ece733807c17b587' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_17\\kiabi\\modules\\appagebuilder\\views\\templates\\hook\\ApHtml.tpl',
      1 => 1548646431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e52523340c16_92264665 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
<div<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])) && $_smarty_tpl->tpl_vars['formAtts']->value['id']) {?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' ));?>
"<?php }
if (!(isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'])) || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'full') {?>    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['class']))) {?> class="block <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' ));?>
</h4>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html']))) {?>
        <div class="block_content"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['content_html'];?>
</div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
    <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';
} elseif ((isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'])) && ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion' || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen')) {?>    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['class']))) {?> class="block block-toggler <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen') {?> accordion_small_screen<?php }?>"<?php }?>>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
    <div class="title clearfix" data-target="#footer-html-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
        <h4 class="title_block"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' ));?>
</h4>
        <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
    </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
    <div class="collapse block_content" id="footer-html-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html']))) {?>
        <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['content_html'];?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
    <?php }?>
    </div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    
<?php }?>
</div><?php }
}
