<?php 

class Animal{

    public $nombre;
    public $patas;
    public $tamanho;

function __construct($nombre, $patas, $tamanho){
    $this->$nombre = $nombre;
    $this->$patas = $patas;
    $this->$tamanho = $tamanho;
}

  function get_nombre() {
    return $this->nombre;
  }

  function get_patas() {
    return $this->patas;
  }

  function get_tamanho() {
    return $this->tamanho;
  }
}?>