<?php 
/**La clase Local: (class.local.php)
Atributos privados ciudad y calle (cadenas), número de plantas (entero entre 1 y 10), area y dimensiones (instancia de la clase dimensiones).
Constructor que reciba todos los atributos. Antes de dar valor al atributo dimensiones, hay que usar la instrucción que comprueba que el objeto que recibimos como parámetro es una instancia de la clase Dimensiones.

Implementar sólo los consultores de las propiedades dimensiones y area (ancho x largo).

Método __toString() que compondrá una cadena con las dimensiones de la siguiente forma:
<p>Ciudad: <valor><br></p><p>Calle: <valor><br></p><p>Plantas: <valor><br></p><p>Dimensiones: (<valor>)<br></p>

Añadir el método __clone(), encargado de realizar una copia por defecto del objeto Dimensiones.
Comprobaremos en el constructor que los valores asignados estén dentro del rango y sean del tipo correspondiente. De no cumplirse en alguno de los casos mostraremos un error y terminaremos la ejecución.
 */

include_once "class.dimensiones.php";

class Local
{
    private string $calle;
    private string $ciudad;
    private int $plantas;
    // private float $area;
    private Dimensiones $dimensiones;

    /**
     * Constructor de la clase. Comprueba que el objeto dimensiones sea de tipo dimensiones en el set.
     * 
     */
    function __construct($calle, $ciudad, $plantas, $dimensiones)
    {
            $this->calle = $calle;  
            $this->ciudad= $ciudad;         
            //Comprueba planta
            if($plantas > 0 && $plantas <= 10){
                $this->plantas = $plantas;
            }
            else{
                echo "ERROR!! la calle no puede ser mayor que 10 ni menor que 0";
                die();
            }        
            //$this->area = $area;
            //Comprueba dimensiones
            if($dimensiones instanceof Dimensiones){
                $this->dimensiones = $dimensiones;
            }
            else{

                echo "ERROR!! al introducir las dimensiones.";
                die();
            }


        
       
    }

    /**
     * solo de dimensiones. invocará al to string de dimensiones.
     */
    function __get($atributo)
    {
        if($atributo instanceof Dimensiones){
                return "el valor de las dimensiones es: " . $this->dimensiones;
        }
        else{
                return $this->$atributo;
        } 
      /*      case "area":
                return $this->dimensiones->alto* $this->dimensiones->ancho;              
      */         
       
    }

    /**
     * Metodo set para que se modifique la calle solo de 1 a 10 a través de un switch case que identifica si es ese atributo u otro.
     * 
     * TODO!!!
     */
    function __set($atributo, $valor)
    {

        switch ($atributo) {
            case "dimensiones":
                if($atributo instanceof Dimensiones){
                    $this->dimensiones = $valor;
                }
                else{
                    echo "error al introducir las dimensiones.";
                }
                break;
            case "calle":
                if($valor > 0 && $valor <= 10){
                    $this->calle=$valor;
                }
                else{
                    echo "la calle no puede ser mayor que 10 ni menor que 0";
                }        
                break;   
        }            
    }


    /**
     * Método __toString() que compondrá una cadena con las dimensiones de la siguiente forma:
        <p>Ciudad: <valor><br></p><p>Calle: <valor><br></p><p>Plantas: <valor><br></p><p>Dimensiones: (<valor>)<br></p>
     */
    function __toString()
    {
       return "<p>Ciudad: ".$this->ciudad."<br></p><p>Calle: ".$this->calle."<br></p><p>Plantas: ".$this->plantas."<br></p><p>Dimensiones: (".$this->dimensiones.")<br></p>";
    }

    /**
     * el método __clone(), encargado de realizar una copia por defecto del objeto Dimensiones.
     */
    function __clone()
    {     
        $this->dimensiones = clone $this->dimensiones;
    }

}

/*
$objetoDimensiones = new Dimensiones(4, 5, 6);
$local = new Local("Tetuan", "Sevilla", 1, $objetoDimensiones);

//invocar al get:
echo $local->dimensiones;
echo "<br>";
echo $local;
echo "<br>";
echo "<br>";
echo "<br>";
//set
$local->calle=11;


//invocar al get:
echo $local->calle;
echo "<br>";
echo $local;
echo "<br>";
*/