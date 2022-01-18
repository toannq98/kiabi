<?php
/* Smarty version 3.1.39, created on 2022-01-17 09:10:01
  from 'D:\xampp\htdocs\prestashop_17\kiabi\themes\kiabi\templates\sub\product_info\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e578b9abf867_72024081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9700f2aa1a4b139bf5584a0ce006a4bc1f7e2efe' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop_17\\kiabi\\themes\\kiabi\\templates\\sub\\product_info\\default.tpl',
      1 => 1642326508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e578b9abf867_72024081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76838689861e578b9abeb74_69514769', 'product_default');
?>


<?php }
/* {block 'product_default'} */
class Block_76838689861e578b9abeb74_69514769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_default' => 
  array (
    0 => 'Block_76838689861e578b9abeb74_69514769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="more-info-product">
	<div class="product-info-left">
		<?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

	</div>
	<div class="product-info-right">
		<div class="product-delivery">
			<h3>Livraison</h3>
			<i class="fa fa-check" style="color:green;"></i> <span style="font-weight:700;">Domicile</span>: 3,95€ - Gratuit dès 50,00€*
			<br><span style="color:#4caf50">Livraison sous 3 à 4 jours ouvrés.</span>
			<br>*Hors Drom-com et Monaco : 14,90€
			<br>
			<br>
			<i class="fa fa-check" style="color:green;"></i> <span style="font-weight:700;">Domicile sur rendez-vous</span>: 6€ ou Gratuit dès 60€ d'achat*. Service éligible selon code postal.
			<br>
			<span style="color:#4caf50">RDV disponible sous 4 jours</span>
			<br>
			<br>
			<i class="fa fa-check" style="color:green;"></i> <span style="font-weight:700;">Point de retrait La Poste ou Mondial Relay</span>: 3,95€ ou Gratuit dès 50€ d'achats
			<br>
			<span style="color:#4caf50">Livraison sous 3 à 4 jours ouvrés</span>
			<br>
			<br>
			<h3>Retrait en magasin</h3>
			<i class="fa fa-check" style="color:green;"></i> <span style="font-weight:700;">Click &amp; Collect</span>: Gratuit dès 15€ d'achat, retrait en magasin, paiement en ligne ou sur place.
			<br>
			<span style="color:#4caf50">Retrait sous 1 à 3 jours ouvrés.</span>
			<br>
			<br>
			<h3>Retour &amp; échange</h3>
			<i class="fa fa-check" style="color:green;"></i> <span style="font-weight:700;">30 jours</span> pour changer d'avis (échanger, retourner ou se rétracter);
			<br>
			<i class="fa fa-check" style="color:green;"></i> Retour en <span style="font-weight:700;">point relais ou par la Poste</span> (en téléchargeant et imprimant votre étiquette retour): 2,95€;
			<br>
			<i class="fa fa-check" style="color:green;"></i> Possibilité de <span style="font-weight:700;">retourner</span> les articles qui ne vous conviennent pas directement <span style="font-weight:700;">dans votre boîte aux lettres</span> : 2.95€ (en téléchargeant et imprimant votre étiquette retour).
			<br>
		</div>
	</div>
</div>
<?php
}
}
/* {/block 'product_default'} */
}
