<?php

require_once("repositorio.php");
require_once("repositorioContactsSQL.php");
require_once("repositorioSalesWhatsAppSQL.php");

class RepositorioSQL extends Repositorio {

  protected $conexion;

  /**
   * [__construct Establece la conexion con la base]
   */
  public function __construct() {

    $dotenv = Dotenv\Dotenv::createImmutable( __DIR__ . '/../' );
    $dotenv->safeLoad();

    try {
      $this->conexion = new PDO($_ENV['REACT_APP_DSN'], $_ENV['REACT_APP_DB_USER'], $_ENV['REACT_APP_DB_PASS']);
    } catch (Exception $e) {
      echo 'No se pudo conectar a la base de datos. Intente en un momento por favor...';
    }

    $this->repositorioContacts = new RepositorioContactsSQL($this->conexion);
    $this->repositorioSalesWhatsApp = new RepositorioSalesWhatsAppSQL($this->conexion);

  }
}

?>