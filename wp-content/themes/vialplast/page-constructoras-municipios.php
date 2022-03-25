<?php get_header(); ?>

<?php require ('inc/capture-variables-get.php'); ?>

<!-- Constructoras -->
<section class="vialplast_contacto vialplast_distribuidores vialplast_constructoras">

	<section class="container">

		<!-- Informacion y Formulario -->
		<div class="row informacion">

			<div class="col-md-6 datos">
				
				<div>
					<a class="transition" href="tel:1147527297">Tel. (+54) 11 4752  7297</a><br>
					<a class="transition" href="mailto:info@vialplast.com.ar">info@vialplast.com.ar</a>
					<p>
						Calle 56 N° 4575 San Martín.</br>
						Buenos Aires. Argentina.
					</p>
				</div>

				<p>
					Contamos con personal abocado a la atención a empresas constructoras y municipios con el fin de brindar el mejor 
					asesoramiento.
				</p>

				<p>
					A lo largo de nuestra historia hemos ganado vasta experiencia en licitaciones y ventas a grandes proyectos del tipo público y privado.
				</p>

				<p class="last">
					Contactate con nuestro equipo completando el formulario y responderemos a la brevedad cualquier inquietud.
				</p>

			</div>

			<div class="col-md-6 formulario">

				<!-- Notifications -->
				<?php include('inc/notifications.php'); ?>

				<form 
					id="form_contructoras" 
					method="post" 
					action="<?= esc_url( get_stylesheet_directory_uri() ) . '/php/validate-form-contacto.php'; ?>">

	        <input type="hidden" name="origin" value="Formulario de Constructoras y Municipios">
	        <input type="hidden" name="section" value="constructoras-municipios">

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
	        		onclick="submitFormContacto('form_contructoras')">Enviar
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
					src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/distribuidores-constructoras/constructoras.jpg'; ?>" 
					alt="constructoras imagen">
			</div>

		</div>
		<!-- Imagen end -->

	</section>

	<!-- Galeria Logos -->
	<?php include('inc/galeria-logos.php'); ?>

	<!-- Ultimos Productos -->
	<?php include('inc/last-products.php'); ?>

</section>
<!-- Constructoras end -->

<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>


<?php get_footer(); ?>