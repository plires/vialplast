<?php

/**
 * Simple product add to cart
 *
 * @version     3.4.0
 */

defined('ABSPATH') || exit;

global $product, $porto_settings;

if (! $product->is_purchasable()) {
	return;
}

echo wc_get_stock_html($product); // WPCS: XSS ok.

if ($product->is_in_stock()) : ?>

	<?php do_action('woocommerce_before_add_to_cart_form'); ?>

	<form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action('woocommerce_before_add_to_cart_button'); ?>

		<?php
		do_action('woocommerce_before_add_to_cart_quantity');

		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
				'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
				'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
			)
		);

		do_action('woocommerce_after_add_to_cart_quantity');
		?>

		<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>

		<?php do_action('woocommerce_after_add_to_cart_button'); ?>
	</form>

	<?php do_action('woocommerce_after_add_to_cart_form'); ?>

<?php else: ?>
	<a href="<?= esc_url(get_site_url() . '/contacto/'); ?>" class="single_add_to_cart_button button alt btn_consultar">CONSULTAR</a>
<?php endif; ?>
<?php
$terms = wp_get_post_terms(get_the_id(), 'product_tag');
if (count($terms) > 0) {

	foreach ($terms as $term) {
		$term_name = $term->name;
		if (strpos($term_name, '.pdf') !== false) { // Verifica si el nombre contiene ".pdf".
			// Construye la URL del archivo PDF.
			$upload_dir = wp_upload_dir(); // Obtiene el directorio de subida.
			$pdf_url = $upload_dir['baseurl'] . '/2024/12/'; // Genera la URL completa.
?>
			<hr>
			<a href="<?= esc_url($pdf_url) . $term_name; ?>" class="btn-pdf transition" target="_blank" rel="noopener noreferrer">
				<img width="32" src="<?= esc_url($pdf_url) . 'pdf.png'; ?>" alt="descarga de PDF"> <br>Descargar Kit de Instalación
			</a>
<?php
			break; // Termina el bucle al encontrar el primer término que cumpla la condición.
		}
	}
}
?>