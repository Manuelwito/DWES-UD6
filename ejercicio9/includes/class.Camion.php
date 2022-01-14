<?php 

class Camion extends Cuatro_ruedas{
    
    private int $longitud;

function __construct($color, $peso, $numero_puertas, $longitud){
    parent::__construct($color, $peso, $numero_puertas);
      
   
    $this->longitud = $longitud;  
   
}

public function añadir_remolque($longitud_remolque){
    if(is_int($longitud_remolque)==true){
        $this->longitud = $this->longitud+$longitud_remolque;
        }else{
            echo "algo fue mal";
        }
    
}

function añadir_persona($peso_persona){
    $this->peso = $this->peso+$peso_persona;
}
}
