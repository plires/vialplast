<?php 

/** Remove product data tabs */
add_filter( 'woocommerce_product_tabs', 'my_remove_product_tabs', 98 );
 
function my_remove_product_tabs( $tabs ) {
  unset( $tabs['description'] ); // To remove the additional information tab
  return $tabs;
}

 ?>