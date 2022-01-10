<?php 

class Gato extends Animal{


function __construct($nombre, $patas, $tamanho){
    $this->$nombre = $nombre;
    $this->$patas = $patas;
    $this->$tamanho = $tamanho;
}

}?>