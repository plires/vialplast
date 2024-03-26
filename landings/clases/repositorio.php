<?php

abstract class Repositorio {
  protected $repositorioContacts;
  protected $repositorioSalesWhatsApp;

  public function getRepositorioContacts() {
    return $this->repositorioContacts;
  }

  public function getRepositorioSalesWhatsApp() {
    return $this->repositorioSalesWhatsApp;
  }
  
}

?>