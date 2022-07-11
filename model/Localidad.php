<?php
class Localidad {
  private $idlocalidad;
  private $nombre;
  private $idprovincia;

  public function __construct($idlocalidad, $nombre, $idprovincia)
  {
    $this->idlocalidad = $idlocalidad;
    $this->nombre = $nombre;
    $this->idprovincia = $idprovincia;
  }

  /**
   * Get the value of idlocalidad
   */
  public function getIdlocalidad()
  {
    return $this->idlocalidad;
  }

  /**
   * Set the value of idlocalidad
   */
  public function setIdlocalidad($idlocalidad): self
  {
    $this->idlocalidad = $idlocalidad;

    return $this;
  }

  /**
   * Get the value of nombre
   */
  public function getNombre()
  {
    return $this->nombre;
  }

  /**
   * Set the value of nombre
   */
  public function setNombre($nombre): self
  {
    $this->nombre = $nombre;

    return $this;
  }

  /**
   * Get the value of idprovincia
   */
  public function getIdprovincia()
  {
    return $this->idprovincia;
  }

  /**
   * Set the value of idprovincia
   */
  public function setIdprovincia($idprovincia): self
  {
    $this->idprovincia = $idprovincia;

    return $this;
  }
}
?>