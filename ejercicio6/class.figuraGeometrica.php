<?php 
/*Desarrolla el código PHP necesario para llevar a cabo la siguiente jerarquía de clases:
FiguraGeometrica y sus métodos son abstractos.
FiguraGeometrica incluye un atributo que es el color.
El método Dibuja muestra por pantalla el tipo de figura y el color.
El método Area devuelve el área de la figura geométrica, añade los atributos necesarios a cada clase. (por ejemplo para el cuadrado tendremos que tenemos el tamaño del lado).
Haz pruebas para comprobar que todo funciona correctamente y que los objetos creados son instancias de FiguraGeometrica.

*/
abstract class FiguraGeometrica{
  
    private string $tipo;
    private string $color;

    function __construct($tipo, $color){
        $this->tipo = $tipo;    
        $this->color = $color; 
    }

    function __get($atributo) {
        return "el valor del atributo es: " . $this->$atributo;
    }

    
    abstract protected function area();

    abstract protected function dibuja();    
   

}


class Cuadrado extends FiguraGeometrica
{
    public float $lado;

    function __construct($lado, $tipo, $color){
        $this->lado = $lado;  
        $this->tipo = $tipo;    //SE PONEN LOS ATRIBUTOS DE LA CLASE PADRE TAMBIÉN ASI
        $this->color = $color;  //ESTO TAMBIEN ES UN ATRIBUTO DE LA CLASE PADRE
    }

    public function area() {
        return "El area de la figura es: " . $this->lado* $this->lado;
    }

    public function dibuja() {
        return $this->tipo . $this->color;
    }
}


class Triangulo extends FiguraGeometrica
{
    public float $base;
    public float $altura;

    function __construct($base, $altura, $tipo, $color){
        $this->base = $base;   
        $this->altura = $altura;  
        $this->tipo = $tipo;    //SE PONEN LOS ATRIBUTOS DE LA CLASE PADRE TAMBIÉN ASI
        $this->color = $color;  //ESTO TAMBIEN ES UN ATRIBUTO DE LA CLASE PADRE
    }

    public function area() {
        return "El area de la figura es: " . $this->base* $this->altura;
    }

    public function dibuja() {
        return $this->tipo . $this->color;
    }
}

class Circulo extends FiguraGeometrica
{
    public float $radio;
    

    function __construct($radio, $tipo, $color){
        $this->radio = $radio; 
        $this->tipo = $tipo;    //SE PONEN LOS ATRIBUTOS DE LA CLASE PADRE TAMBIÉN ASI
        $this->color = $color;  //ESTO TAMBIEN ES UN ATRIBUTO DE LA CLASE PADRE  
    }

    public function area() {
        return "El area de la figura es: " . $this->radio* pi();
    }

    public function dibuja() {
        return $this->tipo . $this->color;
    }
}



$cuadrado = new Cuadrado(4, "Cuadrado", "blanco");

//COMPRUEBA EL CUADRADO
echo $cuadrado->area();
echo "<br>";
echo $cuadrado->dibuja();
echo "<br>";
var_dump($cuadrado instanceof FiguraGeometrica);
echo "<br>";

$triangulo = new Triangulo(3, 4, "TRIANGULO", "blanco");

//COMPRUEBA EL TRIANGULO
echo $triangulo->area();
echo "<br>";
echo $triangulo->dibuja();
echo "<br>";
var_dump($triangulo instanceof FiguraGeometrica);
echo "<br>";

$ciruclo = new Circulo(4, "CIRCULO", "rojo");

//COMPRUEBA EL CIRCULO
echo $ciruclo->area();
echo "<br>";
echo $ciruclo->dibuja();
echo "<br>";
var_dump($ciruclo instanceof FiguraGeometrica);
echo "<br>";
?>