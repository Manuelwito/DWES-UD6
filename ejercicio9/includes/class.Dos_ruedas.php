<?php 

class Dos_ruedas extends Vehiculo{
    

function __construct($color, $peso, $cilindrada){
    parent::__construct($color, $peso);
      
    $this->cilindrada = $cilindrada;  
   
}

public function poner_gasolina($litros){
   
    if(is_float($litros)==true){
    $peso_gasolina = 0.0;
    $peso_gasolina = $litros *1.50;
    $this->peso = $this->peso+$peso_gasolina;
    }
    else{
        echo "ERROR introduzca un número float con la gasolina.";
    }

}
function añadir_persona($peso_persona){
    $this->peso = $this->peso+$peso_persona+1.5;
}
}
?>