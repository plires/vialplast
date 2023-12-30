<?php get_header(); ?>

<?php require ('inc/capture-variables-get.php'); ?>

<!-- Contacto -->
<section class="vialplast_contacto">

  <section class="container">

    <!-- Informacion y Formulario -->
    <div class="row informacion">

      <div data-aos="fade-up" class="col-md-6 datos">
        <div>
          <a class="transition" href="tel:1147527297">Tel. (+54) 11 4752 7297</a><br>
          <a class="transition" href="mailto:info@vialplast.com.ar">info@vialplast.com.ar</a>
          <p>
            Calle 56 N° 4575 San Martín.</br>
            Buenos Aires. Argentina.
          </p>
        </div>

        <p>
          Si tenes alguna pregunta completá el formulario de contacto. <br>
          Nuestro equipo de atención al cliente puede ayudarte
        </p>
      </div>

      <div data-aos="fade-up" class="col-md-6 formulario">

        <div id="notifications" class="row">
          <div class="col-md-12">
            <?php if (isset($msg_success)): ?>

            <div id="msg_success" class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>¡Consulta recibida!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <ul style="padding: 0;">
                <li><?php echo $msg_success; ?></li>
              </ul>
            </div>

            <?php endif ?>
          </div>

          <div class="col-md-12">
            <?php if (isset($errors) && !empty($errors) ): ?>

            <div id="error_seguro" class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <ul style="padding: 0;">

                <?php foreach ($errors as $error): ?>
                <li><?= $error ?> </li>
                <?php endforeach ?>

              </ul>
            </div>

            <?php endif ?>
          </div>
        </div>

        <form id="form_contacto" method="post"
          action="<?= esc_url( get_stylesheet_directory_uri() ) . '/php/validate-form-contacto.php'; ?>">

          <input type="hidden" name="origin" value="Formulario de Contactos">
          <input type="hidden" name="section" value="contacto">

          <!-- Name -->
          <div class="mb-3">
            <label for="name" class="form-label">Nombre *</label>
            <input oninput="this.className = 'form-control'" type="text" class="form-control transition"
              value="<?= $name ?>" name="name" placeholder="Juan Perez">
          </div>
          <!-- Name end -->

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email *</label>
            <input oninput="this.className = 'form-control'" type="email" class="form-control transition"
              value="<?= $email ?>" name="email" placeholder="alguien@gmail.com">
          </div>
          <!-- Email end -->

          <!-- Teléfono -->
          <div class="mb-3">
            <label for="phone" class="form-label">Teléfono *</label>
            <input oninput="this.className = 'form-control'" type="text" class="form-control transition"
              value="<?= $phone ?>" name="phone" placeholder="115 047 2459">
          </div>
          <!-- Teléfono end -->

          <!-- Comments -->
          <div class="mb-3">
            <label for="comments" class="form-label">Comentarios *</label>
            <textarea oninput="this.className = 'form-control'" class="form-control transition" name="comments" rows="3"
              placeholder="Tu consulta..."><?= $comments ?></textarea>
          </div>
          <!-- Comments end -->

          <!-- Enviar -->
          <div class="mb-3 text-right">
            <button id="send" class="btn btn-primary btn-out-black mb-3" type="button"
              onclick="submitFormContacto('form_contacto')">Enviar
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

    <!-- Mapa -->
    <div data-aos="fade-up" class="row mapa">

      <div class="col-md-12">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.9067195216385!2d-58.548125684366276!3d-34.58122676381612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb779a0e3d0ff%3A0x46d82ea5a09636a3!2sC.%2056%204575%2C%20B1650%20Villa%20Lynch%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1643384978408!5m2!1ses-419!2sar"
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

    </div>
    <!-- Mapa end -->

  </section>

  <!-- Faja Distribuidores y Marcas -->
  <?php include('inc/faja-distribuidores-marca.inc.php'); ?>

</section>
<!-- Contacto end -->

<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>

<?php 
	echo "
	<script>
		var recaptchaKeySite = '".RECAPTCHA_KEY_SITE."'
	</script>
	";
?>

<script src="<?= esc_url( get_stylesheet_directory_uri() ) . '/js/init-aos.js'; ?>"></script>

<?php get_footer(); ?>