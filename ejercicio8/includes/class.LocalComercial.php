<?php
/**
 * La clase LocalComercial que heredará de Local: (class.localcomercial.php)
*Con los atributos privados razón social (cadena) y número licencia (cadena).
*Método __toString() que compondrá una cadena con las dimensiones de la siguiente forma:
*<p><datos del local></p><p>Razón Social: <valor><br></p><p>Número de Licencia: <valor><br></p>
*Comprobar en el constructor que los valores asignados estén dentro del rango y sean del tipo correspondiente. De no cumplirse en alguno de los casos mostraremos un error y terminaremos la ejecución.

 */




class LocalComercial extends Local
{
   
    private string $razonsocial;
    private string $numerolicencia;

    /**
     * Constructor de la clase. Comprueba que el objeto dimensiones sea de tipo dimensiones en el set.
     * 
     */
    function __construct($calle, $ciudad, $plantas, $dimensiones, $razonsocial, $numerolicencia)
    {
        parent::__construct($calle, $ciudad, $plantas, $dimensiones);
      
        if(is_string($razonsocial)){
            $this->razonsocial = $razonsocial;
        }
        else{
            echo " ERROR!! al introducir las razon social.";
            die();
        }
        if(is_string($numerolicencia)){
            $this->numerolicencia = $numerolicencia;
        }
        else{
            echo " ERROR!! al introducir las numero licencia.";
            die();
        }     
    }



    function __toString()
    {
       return "<p>Ciudad: ".$this->ciudad."<br></p><p>Calle: ".$this->calle."<br></p><p>Plantas: ".$this->plantas."<br></p><p>Dimensiones: (".$this->dimensiones.")<br></p><p>Razón Social: ".$this->razonsocial."<br></p><p>Número de Licencia: ".$this->numerolicencia."<br></p> ";
    }

    
}

/*

$objetoDimensiones = new Dimensiones(4, 5, 6);
$localcomercial = new LocalComercial("Tetuan", "Sevilla", 1, $objetoDimensiones, "panaderia", "adfae214231");

//invocar al get:

echo "<br>";
echo $localcomercial;
echo "<br>";
echo "<br>";
echo "<br>";
//set
$localcomercial->calle=11;


//invocar al get:
echo $localcomercial->calle;
echo "<br>";
echo $localcomercial;
echo "<br>";

*/