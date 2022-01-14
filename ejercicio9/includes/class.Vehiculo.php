<?php 

abstract class Vehiculo{
    private string $color;
    private float $peso;

function __construct($color, $peso){
    $this->color = $color;  
    $this->peso= $peso;  
}

public function circula(){
    return "El vehículo está circulando";
}

abstract protected function añadir_persona($peso_persona);
    
function __get($atributo){
    return $this->$atributo;
}

function __set($atributo, $valor){
        
    $this->$atributo = $valor;                
}

public static function ver_atributo($objeto){
    
    if(isset($objeto->peso)){
        echo "Peso: ". $objeto->peso;
        echo "</br>";
    }
    if(property_exists(get_parent_class($objeto), 'numero_puertas')){
       echo "Puertas: ". $objeto->numero_puertas;
       echo "</br>";

    }

}

function __toString(){
    return "<p>Vehiculo con color: ".$this->color."<br></p><p>Peso: ".$this->peso."<br></p></p> ";
}

}
