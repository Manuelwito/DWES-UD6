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


class Local
{
    private string $calle;
    private string $ciudad;
    private int $plantas;
    private float $area;
    private Dimensiones $dimensiones;

    function __construct($calle, $ciudad, $plantas, $area, $dimensiones)
    {
        $this->calle = $calle;
        $this->ciudad = $ciudad;
        $this->plantas = $plantas;
        $this->area = $area;
        $this->dimensiones = $dimensiones;
    }


    function __get($atributo)
    {
        switch ($atributo) {
            case "dimensiones":
                return "el valor de las dimensiones es: " . $this->dimensiones;
                break;
            case "area":
                return $this->dimensiones->alto* $this->dimensiones->ancho;              
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
