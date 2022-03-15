<?php get_header(); ?>

<!-- Home -->
<section class="vialplast_home">

	<!-- Header -->
	<section class="row content_header">
		<div class="col-md-12 p-0">
			<div class="container h-100">
				<div class="row h-100">

					<div class="col-md-6 offset-md-3 col-lg-8 offset-lg-2">
						<div>
							<img 
								class="logo_mobile img-fluid" 
								src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/logo-mobile.png'; ?>" 
								alt="logo mobile">
							<img 
								class="circulo img-fluid" 
								src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/circulo.png'; ?>" 
								alt="circulo">
							<h1>Alta tecnología <br>al servicio de la <br>seguridad vial. </h1>
							<a class="transition btn_to" href="#slide_home">
								<img 
									class="flecha img-fluid" 
									src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/flecha.png'; ?>" 
									alt="flecha">
							</a>
						</div>
					</div>

					<div class="col-md-6 offset-md-3 col-lg-8 offset-lg-2">
						<h3>Comprá todos nuestros <br>productos ONLINE.</h3>
						<a class="ver_productos transition" href="#">Ver productos</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- Header end -->

	<!-- Slide Home -->
	<?php include('inc/slide-home.inc.php'); ?>

	<!-- Ultimos Productos -->
	<?php include('inc/last-products.php'); ?>

	<!-- Buscas Otro Producto -->
	<section class="buscar_otro_producto container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h5>¿Buscás otro <br>producto?</h5>
					<a href="#" class="btn btn-primary transition">Escribínos <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Buscas Otro Producto end -->

	<!-- Constructoras y Municipios -->
	<section class="constructoras_municipios container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<h3>Ya son varias empresas constructoras y municipios los que confian en VIALPLAST</h3>
			</div>

			<div class="col-md-8 offset-md-2 content">
				<h4>Constructoras y municipos</h4>
				<a href="#" class="btn btn-primary btn-out-black transition">Contacto directo <i class="fas fa-chevron-right"></i></a>
			</div>
		</div>
	</section>
	<!-- Constructoras y Municipios end -->

	<!-- Faja Caracterisitcas -->
	<?php include('inc/faja-caracterisitcas.inc.php'); ?>

	<!-- Faja Distribuidores -->
	<?php include('inc/faja-distribuidores-marca.inc.php'); ?>
	
</section>
<!-- Home end -->

<?php get_footer(); ?>