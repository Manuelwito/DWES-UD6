<?php 
/*Desarrolla el código PHP necesario para llevar a cabo la siguiente jerarquía de clases:
FiguraGeometrica y sus métodos son abstractos.
FiguraGeometrica incluye un atributo que es el color.
El método Dibuja muestra por pantalla el tipo de figura y el color.
El método Area devuelve el área de la figura geométrica, añade los atributos necesarios a cada clase. (por ejemplo para el cuadrado tendremos que tenemos el tamaño del lado).
Haz pruebas para comprobar que todo funciona correctamente y que los objetos creados son instancias de FiguraGeometrica.

*/
abstract class FiguraGeometrica{
  

    function __construct(){
        
    }

    function __get($atributo) {
        return "el valor del atributo es: " . $this->$atributo;
    }

    
    abstract protected function area();

    abstract protected function dibuja();    
   

}


class Cuadrado extends FiguraGeometrica
{
    protected function area() {
        return "ClaseConcreta1";
    }

    public function dibuja() {
        return;
    }
}


?>