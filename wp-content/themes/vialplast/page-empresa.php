<?php get_header(); ?>

<!-- Empresa -->
<section class="vialplast_empresa">

	<!-- Informacion -->
	<section class="container-fluid informacion">
		<div class="row">

			<div class="data">
				<h2>Sobre <br>Nosotros</h2>
				<p>
					Desarrollamos y comercializamos <span>productos de alta calidad con el compromiso de contribuir a la seguridad vial.</span> Con más de 10 líneas de productos en constante actualización, poseemos uno de los <span>catálogos más amplios en materia vial.</span>
				</p>
				<p>
					Formamos parte del grupo empresario <span>Summit Group</span> nos encontramos en el partido de San Martín, provincia de Buenos Aires, República Argentina. La planta industrial, administración y ventas ocupan aproximadamente <span>7000 m2 y un plantel de 50 personas.</span>
				</p>
				<p>
					Contamos con un departamento de ventas idóneo, que en conjunto con el departamento técnico, presta un completo asesoramiento al comprador. <span>El área de Producción posee 16 líneas de extrusión, procesando aproximadamente 2400 toneladas al año.</span>
				</p>
			</div>

			<div class="images">
				<img 
					class="img-fluid img_empresa" 
					src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/empresa/header.jpg'; ?>" 
					alt="empresa productos vialplast">
			</div>

		</div>
	</section>
	<!-- Informacion end -->

	<!-- Faja Caracterisitcas -->
	<?php include('inc/faja-caracterisitcas.inc.php'); ?>
	
	<!-- Galeria empresa -->
	<?php include('inc/galeria-empresa.php'); ?>

	<!-- Faja Caracterisitcas -->
	<?php include('inc/faja-distribuidores-marca.inc.php'); ?>
	
</section>
<!-- Empresa end -->

<?php get_footer(); ?>