<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>

<?php

  // $sku = $product->get_sku();

  // if ($sku === 'CC-PV70') {
  //   echo "<div class='promo_mayo_ind'>VALOR <strong>$15.040</strong> DESDE 10 U.</br>OFERTA HASTA EL 17 DE MAYO</div>";
  // }

  // if ($sku === 'CC-A70') {
  //   echo "<div class='promo_mayo_ind'>VALOR <strong>$9.365</strong> DESDE 10 U.</br>OFERTA HASTA EL 17 DE MAYO</div>";
  // }

  // if ($sku === 'CC-PV90') {
  //   echo "<div class='promo_mayo_ind'>VALOR <strong>$18.912</strong> DESDE 5 U.</br>OFERTA HASTA EL 17 DE MAYO</div>";
  // }

  // if ($sku === 'DM-80') {
  //   echo "<div class='promo_mayo_ind'>VALOR <strong>$22.748</strong> DESDE 10 U.</br>OFERTA HASTA EL 17 DE MAYO</div>";
  // }

  // if ($sku === 'VC2019/1') {
  //   echo "<div class='promo_mayo_ind'>VALOR <strong>$40.317</strong> DESDE 5 U.</br>OFERTA HASTA EL 17 DE MAYO</div>";
  // }

  // if ($sku === 'RDM200') {
  //   echo "<div class='promo_mayo_ind'>VALOR <strong>$3.896</strong> DESDE 20 U.</br>OFERTA HASTA EL 17 DE MAYO</div>";
  // }

?>
