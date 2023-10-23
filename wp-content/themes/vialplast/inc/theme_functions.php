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

  // Devuelve el precio o leyenda segun el stock del producto
  add_filter( 'woocommerce_get_price_html', 'vialplast_woocommerce_get_price_html', 100, 2 );
  function vialplast_woocommerce_get_price_html( $price, $product ) {

    if ( $product->is_in_stock() ) {
      return $price;
    } else {
      $price = '<span class="leyenda_precio">consultar precio por cantidad</span>';
      return $price;
    }

  }

  // Modifica el texto del boton "agregar al carrito" si no tiene stock el producto
  add_filter( 'woocommerce_product_add_to_cart_text', function( $text ) {

    global $product;

    if ( !$product->is_in_stock() ) {
      $text = __( 'CONSULTAR', 'woocommerce' );
      return $text;
    } 

    return $text;

  } );

  // Al borrar un producto de woocommerce, elimina las imagenes asociadas a ese producto de manera automatica
  add_action('before_delete_post', 'dcms_delete_product_images', 10, 1);

  function dcms_delete_product_images($post_id)
  {
    $product = wc_get_product($post_id);

    if ( ! $product) return;

    $featured_image_id = $product->get_image_id();
    $image_galleries_id = $product->get_gallery_image_ids();

    if (!empty($featured_image_id)) {
      wp_delete_post($featured_image_id);
    }

    if (!empty($image_galleries_id)) {
      foreach ($image_galleries_id as $single_image_id) {
        wp_delete_post($single_image_id);
      }
    }
  }

?>