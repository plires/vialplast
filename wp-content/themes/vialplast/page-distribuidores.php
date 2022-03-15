<?php get_header(); ?>

<?php require ('inc/capture-variables-get.php'); ?>

<!-- Distribuidores -->
<section class="vialplast_contacto vialplast_distribuidores">

	<section class="container">

		<!-- Informacion y Formulario -->
		<div class="row informacion">

			<div class="col-md-6 datos">
				<div>
					<a class="transition" href="tel:1147527297">Tel. (+54) 11 4752  7297</a><br>
					<a class="transition" href="mailto:info@superfil.com.ar">info@superfil.com.ar</a>
					<p>
						Calle 56 N° 4575 San Martín.</br>
						Buenos Aires. Argentina.
					</p>
				</div>

				<p>
					¿Querés formar parte de nuestro equipo como distribuidor de 
					nuestros productos?
				</p>

				<p>
					Completá el formulario a continuación y nos contactaremos a
					la brevedad.
				</p>

				<p class="last">
					Ofrecemos la mayor variedad de productos viales del mercado
					y la mejor calidad en pos de la seguridad.
				</p>

			</div>

			<div class="col-md-6 formulario">

				<!-- Notifications -->
				<?php include('inc/notifications.php'); ?>

				<form 
					id="form_distribuidores" 
					method="post" 
					action="<?= esc_url( get_stylesheet_directory_uri() ) . '/php/validate-form-contacto.php'; ?>">

	        <input type="hidden" name="origin" value="Formulario de Distribuidores">
	        <input type="hidden" name="section" value="distribuidores">

          <!-- Name -->
					<div class="mb-3">
					  <label for="name" class="form-label">Nombre *</label>
					  <input 
					  	oninput="this.className = 'form-control'" 
					  	type="text" 
					  	class="form-control transition" 
					  	value="<?= $name ?>" 
					  	name="name" 
					  	placeholder="Juan Perez">
					</div>
					<!-- Name end -->

					<!-- Email -->
					<div class="mb-3">
					  <label for="email" class="form-label">Email *</label>
					  <input 
					  	oninput="this.className = 'form-control'" 
					  	type="email" 
					  	class="form-control transition" 
					  	value="<?= $email ?>" 
					  	name="email" 
					  	placeholder="alguien@gmail.com">
					</div>
					<!-- Email end -->

					<!-- Teléfono -->
					<div class="mb-3">
					  <label for="phone" class="form-label">Teléfono *</label>
					  <input 
					  	oninput="this.className = 'form-control'" 
					  	type="text" 
					  	class="form-control transition" 
					  	value="<?= $phone ?>" 
					  	name="phone" 
					  	placeholder="115 047 2459">
					</div>
					<!-- Teléfono end -->

					<!-- Comments -->
					<div class="mb-3">
					  <label for="comments" class="form-label">Comentarios *</label>
					  <textarea 
					  	oninput="this.className = 'form-control'" 
					  	class="form-control transition" 
					  	name="comments" 
					  	rows="3" 
					  	placeholder="Tu consulta..."><?= $comments ?></textarea>
					</div>
					<!-- Comments end -->

					<!-- Enviar -->
					<div class="mb-3 text-right">
					  <button 
	        		id="send" 
	        		class="btn btn-primary btn-out-black mb-3" 
	        		type="button" 
	        		onclick="submitFormContacto('form_distribuidores')">Enviar
	        		<div id="sending_form" class="transition">
		            <div class="ml-1 spinner-border spinner-border-sm text-warning" role="status">
		            </div>
		          </div>
	        	</button>
					</div>
					<!-- Enviar end -->

				</form>
			</div>

		</div>
		<!-- Informacion y Formulario end -->

		<!-- Imagen -->
		<div class="row imagen">
			
			<div class="col-md-12">
				<img 
					class="img_section img-fluid" 
					src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/distribuidores-constructoras/deposito.jpg'; ?>" 
					alt="distribuidores imagen">
			</div>

		</div>
		<!-- Imagen end -->

		<!-- Valores -->
		<div class="row valores">
			
			<div class="col-sm-12 col-lg-3">
				<p class="titulo">La mayor variedad de productos viales del mercado.</p>
			</div>

			<div class="col-sm-4 col-lg-3">
				<div class="content">
					<div class="circle">
						<p>+<span id="linea">0</span></p>
					</div>
					<p class="description">Líneas de <br>productos</p>
				</div>
			</div>

			<div class="col-sm-4 col-lg-3">
				<div class="content">
					<div class="circle">
						<p>+<span id="productos">0</span></p>
					</div>
					<p class="description">Productos <br>diferentes</p>
				</div>
			</div>

			<div class="col-sm-4 col-lg-3">
				<div class="content">
					<div class="circle">
						<p>+<span id="anos">0</span></p>
					</div>
					<p class="description">Años de <br>experiencia</p>
				</div>
			</div>

		</div>
		<!-- Valores end -->

	</section>

	<!-- Ultimos Productos -->
	<?php include('inc/last-products.php'); ?>

</section>
<!-- Distribuidores end -->

<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
<script src="<?= esc_url( get_stylesheet_directory_uri() ) . '/js/countUp.min.js'; ?>"></script>

<!-- Script para los numeros variables de esta pagina -->
<script type="text/javascript">
  var options = {
    useEasing: true, 
    useGrouping: true, 
    separator: '.', 
    decimal: ',', 
  };
  
  var linea = new CountUp('linea', 0, 10, 0, 3, options);
  if (!linea.error) {
    linea.start();
  } else {
    console.error(linea.error);
  }

  var productos = new CountUp('productos', 0, 50, 0, 4, options);
  if (!productos.error) {
    productos.start();
  } else {
    console.error(productos.error);
  }

  var anos = new CountUp('anos', 0, 40, 0, 5, options);
  if (!anos.error) {
    anos.start();
  } else {
    console.error(anos.error);
  }
</script>

<?php get_footer(); ?>