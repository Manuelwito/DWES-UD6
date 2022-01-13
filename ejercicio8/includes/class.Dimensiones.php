<?php

/**La clase Dimensiones (class.dimensiones.php):
Atributos privados alto, ancho y largo, floats.
Constructor que reciba todos los atributos.
Propiedades alto, ancho y largo implementando sus consultores y modificadores.
Método __toString() que compondrá una cadena con las dimensiones de la siguiente forma:
alto=<valor>,ancho=<valor>,largo=<valor>
El constructor deberá llamar a los setters que comprobarán que los valores asignados sean de tipo float y mayores que uno. De no cumplirse en alguno de los casos mostraremos un error y terminaremos la ejecución.
 */
class Dimensiones
{
    private float $alto;
    private float $ancho;
    private float $largo;

    function __construct($alto, $ancho, $largo)
    {
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->largo = $largo;
    }

    function __get($atributo)
    {
        return "el valor del atributo es: " . $this->$atributo;
    }

    function __set($atributo, $valor)
    {
     
            if($valor > 0 && is_float($valor) == true){
                $this->$atributo=$valor;
            }
            else{
                echo "el valor no puede ser menor a 0 ni distinto de float";
            }
    }

    function __toString()
    {
       return "alto=".$this->alto.",ancho=".$this->ancho.",largo=".$this->largo;
    }

}
/*
$objetoDimensiones = new Dimensiones(-4, 5, 6);

//invocar al get:
echo $objetoDimensiones->alto;
echo "<br>";
echo $objetoDimensiones->ancho;
echo "<br>";
echo $objetoDimensiones->largo;
echo "<br>";
echo "<br>";
//set
$objetoDimensiones->alto=-2.2;


//invocar al get:
echo $objetoDimensiones->alto;
echo "<br>";
echo $objetoDimensiones->ancho;
echo "<br>";
echo $objetoDimensiones->largo;*/