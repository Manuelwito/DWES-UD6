<?php 

class Coche extends Cuatro_ruedas{
    
private int $numero_cadenas_nieve;

function __construct($color, $peso, $numero_puertas, $numero_cadenas_nieve){
    parent::__construct($color, $peso, $numero_puertas);
      
   
    $this->numero_cadenas_nieve = $numero_cadenas_nieve;  
   
}

public function añadir_cadenas($num){
    if(is_int($num)==true){
        $this->numero_cadenas_nieve = $this->numero_cadenas_nieve+$num;
        }else{
            echo "algo fue mal";
        }
    }

public function quitar_cadenas($num){
    if(is_int($num)==true){
        $this->numero_cadenas_nieve = $this->numero_cadenas_nieve-$num;
        }else{
            echo "algo fue mal";
        }
    }

    function añadir_persona($peso_persona){
        $this->peso = $this->peso+$peso_persona;
    }
    
function __toString(){
        return "<p>Vehiculo con color: ".$this->color."<br></p><p>Peso: ".$this->peso."<br></p><p>Numero de cadenas: ".$this->numero_cadenas_nieve."<br></p></p> ";
    }
}

?>