<?php get_header(); ?>

<?php require ('inc/capture-variables-get.php'); ?>

<!-- Constructoras -->
<section class="vialplast_contacto vialplast_distribuidores vialplast_constructoras">

  <section class="container">

    <!-- Informacion y Formulario -->
    <div class="row informacion">

      <div data-aos="fade-up" class="col-md-6 datos">

        <p>
          <span>En VIALPAST te asesoramos y cubrimos tus necesidades.</span>
        </p>
        <p>
          - Colaboramos y asesoramos a los municipios en el armado
          de pliegos.
        </p>
        <p>
          - Guiamos y orientamos a las constructoras con los productos
          adecuados en función de la necesidad a cubrir.
        </p>

        <div class="formulario">

          <h2>FORMULARIO DE CONTACTO</h2>
          <h4>Te contactaremos a la brevedad.</h4>

          <!-- Notifications -->
          <?php include('inc/notifications.php'); ?>

          <form id="form_contructoras" method="post"
            action="<?= esc_url( get_stylesheet_directory_uri() ) . '/php/validate-form-contacto.php'; ?>">

            <input type="hidden" name="origin" value="Formulario de Constructoras y Municipios">
            <input type="hidden" name="section" value="constructoras-municipios">

            <!-- Name -->
            <div class="mb-3">
              <input oninput="this.className = 'form-control'" type="text" class="form-control transition"
                value="<?= $name ?>" name="name" placeholder="Nombre:">
            </div>
            <!-- Name end -->

            <!-- Email -->
            <div class="mb-3">
              <input oninput="this.className = 'form-control'" type="email" class="form-control transition"
                value="<?= $email ?>" name="email" placeholder="Email:">
            </div>
            <!-- Email end -->

            <!-- Teléfono -->
            <div class="mb-3">
              <input oninput="this.className = 'form-control'" type="text" class="form-control transition"
                value="<?= $phone ?>" name="phone" placeholder="Telefono:">
            </div>
            <!-- Teléfono end -->

            <!-- Comments -->
            <div class="mb-3">
              <textarea oninput="this.className = 'form-control'" class="form-control transition" name="comments"
                rows="3" placeholder="Mensaje"><?= $comments ?></textarea>
            </div>
            <!-- Comments end -->

            <!-- Enviar -->
            <div class="mb-3 text-right">
              <button id="send" class="btn btn-primary btn-out-black mb-3" type="button"
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

      <div data-aos="fade-up" class="col-md-6 content_img_slide">

        <div id="carouselDistribuidores" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/distribuidores-constructoras/slide-constructora-a.jpg'; ?>"
                class="d-block w-100" alt="slide constructora a">
            </div>
            <div class="carousel-item">
              <img
                src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/distribuidores-constructoras/slide-constructora-b.jpg'; ?>"
                class="d-block w-100" alt="slide constructora b">
            </div>
            <div class="carousel-item">
              <img
                src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/distribuidores-constructoras/slide-constructora-c.jpg'; ?>"
                class="d-block w-100" alt="slide constructora c">
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Informacion y Formulario end -->

  </section>

  <!-- Galeria Logos -->
  <?php include('inc/galeria-logos.php'); ?>

  <!-- Ultimos Productos -->
  <?php include('inc/last-products.php'); ?>

  <!-- Valores -->
  <div class="container">
    <?php include('inc/valores.php'); ?>
  </div>

</section>
<!-- Constructoras end -->

<script src="<?= esc_url( get_stylesheet_directory_uri() ) . '/js/countUp.min.js'; ?>"></script>
<script src="<?= esc_url( get_stylesheet_directory_uri() ) . '/js/numbers.js'; ?>"></script>
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