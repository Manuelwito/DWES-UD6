<?php 
/**
 * La clase Cine que heredará de LocalComercial: (class.cine.php)
*Atributo privado aforoSala (entero mayor que 0).
*Método __toString() que compondrá una cadena con las dimensiones de la siguiente forma:
*<p><datos del local comercial></p><p>Aforo: <valor><br></p>
*Comprobar en el constructor que el valor del aforo sea un entero mayor que cero. De no cumplirse en alguno de los casos mostraremos un error y terminaremos la ejecución.


POR AQUÍ!!!!
*Fuera de la carpeta includes crea un fichero llamado cinecito.php y añade al principio del fichero la función que se encarga de incluir la definición de la clase que no ha sido declarada.

 */


function __autoload($name) {
      include_once 'includes/class.' . $name . '.php';
   }

Class Cine extends LocalComercial{
    
    private int $aforosala;



    function __construct($calle, $ciudad, $plantas, $dimensiones, $razonsocial, $numerolicencia, $aforoSala) {
        
        parent::__construct($calle, $ciudad, $plantas, $dimensiones, $razonsocial, $numerolicencia);
        $this->aforosala = $aforoSala;
    }
 
    function __toString()
    {
        return "<p><datos del local comercial>".parent::__toString()."</p><p>Aforo: ".$this->aforosala."<br></p>";
    }
}
