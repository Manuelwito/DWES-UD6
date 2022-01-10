<?php 

class Vivienda{
    private string $tipoVivienda;
    private float $valorMercado;

    function __construct($tipoVivienda, $valorMercado){
        $this->tipoVivienda = $tipoVivienda;
        $this->valorMercado = $valorMercado;  
    }

    function __get($atributo) {
        return "el valor del atributo es: " . $this->$atributo;
    }

    function __set($atributo, $valor) {
        
        
        switch ($atributo) {
            case "tipoVivienda":
                $this->$atributo=$valor;
                break;
            case "valorMercado":
                if($valor > 0){
                    $this->$atributo=$valor;
                   
                }
                else{
                    echo "el valor no puede ser menor a 0";
           
                }
                break;
            
        }


       
    }

   

}


$miCasa = new Vivienda("hogar", 205);

//invocar al get:
echo $miCasa->tipoVivienda;
echo "<br>";
echo $miCasa->valorMercado;

//invocar al set:

$miCasa->tipoVivienda="mipiso";
echo "<br>";
echo $miCasa->tipoVivienda;
echo "<br>";
$miCasa->valorMercado="300";
echo "<br>";
echo $miCasa->valorMercado;