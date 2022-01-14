<?php 

class Cuatro_ruedas extends Vehiculo{
    

function __construct($color, $peso, $numero_puertas){
    parent::__construct($color, $peso);
      
   
    $this->numero_puertas = $numero_puertas;  
   
}

public function repintar($color){
    if(is_string($color)==true){
    $this->color = $color;
    }else{
        echo"debe de indicar el color bien";
    }
}

function añadir_persona($peso_persona){
    $this->peso = $this->peso+$peso_persona;
}


}
?>