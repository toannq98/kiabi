{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="product-image">
      {block name='product_thumbnail'}
        <a href="{$product.url}" class="thumbnail product-thumbnail">
          <img
            class="img-fluid{if $aplazyload} lazy{/if}"
            {if $aplazyload}data-src{else}src{/if} = "{$product.cover.bySize.home_default.url}"
            alt = "{$product.cover.legend}"
            loading="lazy"
            data-full-size-image-url = "{$product.cover.large.url}"
          >
        </a>
      {/block}
      {block name='product_flags'}
        <ul class="product-flags">
          {foreach from=$product.flags item=flag}
            <li class="product-label {$flag.type}">{$flag.label}</li>
          {/foreach}
        </ul>
      {/block}
      <div class="quickview{if !$product.main_variants} no-variants{/if} hidden-sm-down">
        <a
          href="#"
          class="quick-view"
          data-link-action="quickview"
        >
          <i class="fa fa-expand"></i> <span>{l s='Quick view' mod='appagebuilder'}</span>
        </a>
      </div>
    </div>
    <div class="product-meta">
      <div class="product-description">
        {block name='product_name'}
          <h1 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>
        {/block}

        {block name='product_price_and_shipping'}
          {if $product.show_price}
            <div class="product-price-and-shipping">
              {if $product.has_discount}
                {hook h='displayProductPriceBlock' product=$product type="old_price"}

                <span class="regular-price">{$product.regular_price}</span>
                {if $product.discount_type === 'percentage'}
                  <span class="discount-percentage">{$product.discount_percentage}</span>
                {/if}
              {/if}

              {hook h='displayProductPriceBlock' product=$product type="before_price"}

              <span itemprop="price" class="price">{$product.price}</span>

              {hook h='displayProductPriceBlock' product=$product type='unit_price'}

              {hook h='displayProductPriceBlock' product=$product type='weight'}
            </div>
          {/if}
        {/block}
      </div>
      <div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
        {block name='product_variants'}
          {if $product.main_variants}
            {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
          {/if}
        {/block}
      </div>
    </div>
  </div>
</article>