<?php 
/**
 * La clase Cine que heredará de LocalComercial: (class.cine.php)
*Atributo privado aforoSala (entero mayor que 0).
*Método __toString() que compondrá una cadena con las dimensiones de la siguiente forma:
*<p><datos del local comercial></p><p>Aforo: <valor><br></p>
*Comprobar en el constructor que el valor del aforo sea un entero mayor que cero. De no cumplirse en alguno de los casos mostraremos un error y terminaremos la ejecución.
*Fuera de la carpeta includes crea un fichero llamado cinecito.php y añade al principio del fichero la función que se encarga de incluir la definición de la clase que no ha sido declarada.
 */




Class Cine extends LocalComercial{
    
    private int $aforosala;



    function __construct($calle, $ciudad, $plantas, $dimensiones, $razonsocial, $numerolicencia, $aforoSala) { //En parametros tienen que entrar todos los atributos
        
        parent::__construct($calle, $ciudad, $plantas, $dimensiones, $razonsocial, $numerolicencia); //Constructor de la clase hija
        $this->aforosala = $aforoSala; //atributos de la clase hija
    }
 
    function __toString()
    {
        return "<p><datos del local comercial>".parent::__toString()."</p><p>Aforo: ".$this->aforosala."<br></p>";
    }
}



/*COMPROBACIONES::


$objetoDimensiones = new Dimensiones(4, 5, 6);
$cine = new Cine("Tetuan", "Sevilla", 4, $objetoDimensiones, "cinema", "23432432", 33);

$objetoDimensiones2 = new Dimensiones(5, 5, 6);
$cine2 = new Cine("Pelicano", "Sevilla", 1, $objetoDimensiones, "cinema", "22", 66);

$objetoDimensiones3 = new Dimensiones(7, 5, 6);
$cine3 = new Cine("Malvarosa", "Sevilla", 2, $objetoDimensiones, "cinema", "33", 35);

//invocar al get:
echo $cine->dimensiones;
echo "<br>";
echo $cine;
echo "<br>";
echo "<br>";
echo "<br>";
//set



//invocar al get:

*/