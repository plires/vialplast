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

  function accessProtected($obj, $prop) {
    $reflection = new ReflectionClass($obj);
    $property = $reflection->getProperty($prop);
    $property->setAccessible(true);
    return $property->getValue($obj);
  }

  // Filtro para agregar contenido al final de las descripciones de la pagina ds producto.
  // Si el producto en cuestion tiene habilitado un minimo de ventas en unidades (mayor a 1) (esto 
  // se hace desde el plugin "WC Min Max Quantities")
  // Se visualizara un mensaje con esa informacion al final de la descripcion.
  // Si el producto no tiene habilitada esta funcion en dicho plugin, si ignora simplemente
  add_filter( 'the_content', 'customizing_woocommerce_description' );
  function customizing_woocommerce_description( $content ) {

    if ( is_product() ) {

      global $product;
      $observation = '';
      $stock_quantity = ($product->get_stock_quantity());
      
      foreach ($product->get_meta_data() as $object) {
        $enabled = true;
        
        $data = accessProtected($object, 'data');

        if( $data['key'] === '_wcmmq_enable' && $data['value'] === 'no' ) {
          $enabled = false;
          break;
        }

        if( $data['key'] === '_wcmmq_min_qty') {
          $minimum_sales = (int)$data['value'];
        }
      }

      if( $enabled && $minimum_sales > 1 && $stock_quantity > 0 ) {

        $observation = 'venta mínima de ' . $minimum_sales . ' unidades' ;

        // El contenido personalizado
        $custom_content = '<p class="observation">' . __($observation, "woocommerce").'</p>';
  
        // Insertar el contenido personalizado al final.
        $content .= $custom_content;
      }

    }

    return $content;

  }

  function getFormatPrice($price_product, $unit_sales, $price_per_meter, $unit_show ) {
    return '<span class="regular_price_product woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>' . $price_product . ' <span class="medida">'. $unit_sales .'</span></bdi></span>
        <span class="custom_price_product woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>' . number_format( $price_per_meter, 0, "," ,".") . ' <span class="medida">'. $unit_show .'</span></bdi></span>';
  }

  // Definir función para calcular precio por metro lineal
  function calculate_price_according_to_product( $price_html, $product ) {

    // Obtener longitud del rollo en metros (suponiendo 10 metros)
    $roll_length = (float) $product->get_length() / 100;
    
    $unit_sales = $product->get_attribute( 'unidad_precio_de_venta' ); // Obtener la unidad de venta
    $unit_show = $product->get_attribute( 'unidad_precio_a_mostrar' ); // Obtener la unidad de precio a mostrar
    $pieces_per_package = (float) $product->get_attribute( 'piezas-por-paquete' ); // Obtener las piezas por paquete (si existe)

    // Obtener el precio del producto del HTML
    preg_match( '/<bdi><span class="woocommerce-Price-currencySymbol">&#36;<\/span>(.*)<\/bdi>/', $price_html, $matches );

    $price_product = $matches[1];
    
    // Extraer el precio como float
    $total_price = (float) str_replace( array( ',', '.' ), '', $price_product ); // Eliminar comas y puntos si las hubiera

    // Verificar si el producto tiene el atributo "unidad de venta" con valor "Kit" o "Unidad"
    if ( $unit_sales === 'Kit' || $unit_sales === 'Unidad' ) {

      if ( isset( $price_product ) ) {
        return '<span class="price_kit woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>' . $price_product . ' <span class="medida">'. $unit_sales .'</span></bdi></span>';
        
      }
      
    }

    // Verificar si el producto tiene el atributo "unidad de venta" con valor "Rollo" o "Tira" y que su longitud sea diferente a 0
    if ( $unit_sales === 'Rollo' || $unit_sales === 'Tira' && $roll_length != 0 ) {

      if ( isset( $price_product ) ) {
        // Calcular precio por metro lineal
        $price_per_meter = $total_price / $roll_length;

        // Redondear el precio por metro lineal
        $price_per_meter = round( $price_per_meter );

        // Formatear el precio por ML y con el símbolo de moneda y retornarlo
        return getFormatPrice($price_product, $unit_sales, $price_per_meter, $unit_show );

      }
      
    }

    // Verificar si el producto tiene el atributo "unidad de venta" con valor "Paquete" y que su Cantidad de piezas por paquete sea mayor a 1
    if ( $unit_sales === 'Paquete' && $pieces_per_package > 1 ) {

      if ( isset( $price_product ) ) {
        // Calcular precio por pieza
        $price_per_piece = $total_price / $pieces_per_package;
        
        // Redondear el precio  por metro pieza
        $price_per_piece = round( $price_per_piece );
        
        // Formatear el precio por pieza y con el símbolo de moneda y retornarlo
        return getFormatPrice( $price_product, $unit_sales, $price_per_piece, $unit_show );
        
      }
      
    }

    // Si no es un producto que se vende por rollo, tira o paquete retornar el precio HTML original
    return $price_html;
  }
  
  add_filter( 'woocommerce_get_price_html', 'calculate_price_according_to_product', 10, 2 );

?>