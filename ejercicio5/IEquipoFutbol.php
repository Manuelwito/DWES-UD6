<?php
/**A partir de la interfaz definida en los comentarios de la diapositiva, desarrolla la clase EquipoFutbol que implemente dicha interfaz.
Deberá tener un atributo que sea el número de jugadores en plantilla.
Deberá tener un atributo que sea el nombre del equipo.
El método juegaPartido devolverá por pantalla el nombre del equipo y la palabra “VICTORIA”.
Desarrolla otra interfaz que sea ICampeonato, en dicha interfaz:
Incluye un método que devuelva el nombre del campeonato.
Modifica la clase EquipoFutbol para que también implemente la interfaz ICampeonato.
 */

interface IEquipoFutbol{
    public function getNumeroJugadores();
    public function juegaPartido();
}

interface ICampeonato{
    public function getNombreCampeonato();

}

class EquipoFutbol implements IEquipoFutbol, ICampeonato{

    public $nombreEquipo;
    public $numeroJugadores;


    function __construct($nombreEquipo, $numeroJugadores){
        $this->nombreEquipo = $nombreEquipo;
        $this->numeroJugadores = $numeroJugadores;
    
    }

    function getNumeroJugadores() {
        return $this->numeroJugadores;
    }

    function juegaPartido() {
        return "el nombre del equipo es ". $this->nombreEquipo . " - VICTORIA";
    }

    function getNombreCampeonato(){
        return $this->nombreEquipo;
    }
    function __get($atributo) {
        return "el valor del atributo es: " . $this->$atributo;
    }

    function __set($atributo, $valor) {

    }

}

$equipaso = new EquipoFutbol("SevillaFC", 27);

//invocar al get:
echo $equipaso->getNumeroJugadores();
echo "<br>";
echo $equipaso->juegaPartido();

var_dump($equipaso instanceof IEquipoFutbol);
var_dump($equipaso instanceof ICampeonato);



?>