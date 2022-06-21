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

  /* Cambiar precio por leyenda */
  add_filter( 'woocommerce_get_price_html', 'cssigniter_change_variable_price_display' );
  function cssigniter_change_variable_price_display( $price ) {
    global $product;

    $product_data = accessProtected($product, 'data');

    if ( $product_data['price'] == 0 ) {
      $price = '<span class="woocommerce-Price-amount amount leyenda_precio"><bdi><span class="woocommerce-Price-currencySymbol"></span>Consultar Telefónicamente</bdi></span>';
      return $price;
    } 

    return $price;
    
  }

  /* Funcion para poder acceder a propiedades protegidas de objetos
  // - Recibe el objeto y la propiedad
  // - Devuelve la propiedad en un array
  */
  function accessProtected($obj, $prop) {
    $reflection = new ReflectionClass($obj);
    $property = $reflection->getProperty($prop);
    $property->setAccessible(true);
    return $property->getValue($obj);
  }

?>