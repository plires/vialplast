<?php get_header(); ?>

<!-- Empresa -->
<section class="vialplast_empresa">

  <!-- Informacion -->
  <section class="container-fluid informacion">
    <div class="row">

      <div class="data">
        <h2>Sobre <br>Nosotros</h2>
        <p>
          Desarrollamos y comercializamos <span>productos de alta calidad para contribuir a la seguridad vial.</span>
          <span>Vialplast</span> es una unidad de negocio perteneciente a <span>Summit-Group</span>, ubicados en el
          partido de San Martín,
          Provincia de Buenos Aires, Argentina. <span>La planta industrial, administración y ventas ocupan 7000 m2 y un
            equipo de trabajo de 50 personas.</span>
        </p>
        <p>
          En el año 2023 desarrollamos una alianza estratégica adicionando productos <span>Jordan-plas</span>,
          convirtiendonos en distribuidor oficial de dicha empresa con el fin de ampliar la gama de productos y
          afianzarnos en el mercado vial.
        </p>
      </div>

      <div class="images">
        <img class="img-fluid img_empresa"
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