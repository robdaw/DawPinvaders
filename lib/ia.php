<?php
/**
 * Clase creada por Roberto Sánchcez Camacho
 * clase Inteligencia artificial
 */
class ia
{

  // Declaración de una propiedad
  public $columna=1;
  public $fila=1;

  // Declaración de un método
  public function getColumna() {
    $this->columna=rand(0,3);
    return $this->columna;
  }
  public function getFila() {
    $this->fila=rand(0,3);
    return $this->fila;
  }

}

?>
