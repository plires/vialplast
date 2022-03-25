<?php 

/** Remove product data tabs */
add_filter( 'woocommerce_product_tabs', 'my_remove_product_tabs', 98 );
 
function my_remove_product_tabs( $tabs ) {
  unset( $tabs['description'] ); // To remove the additional information tab
  return $tabs;
}

/**
 * Remover scripts del tema padre (porto).
 *
 * Hooked to the wp_print_scripts action, with a late priority (100),
 * so that it is after the script was enqueued.
 */
function porto_WI_dequeue_script() {
  wp_dequeue_script( 'bootstrap' ); //Bootstrap
}

add_action( 'wp_print_scripts', 'porto_WI_dequeue_script', 100 );

 ?>