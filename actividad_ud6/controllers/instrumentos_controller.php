<?php

function listar()
{
    echo "listar";
    //se incluy el modelo
    require 'models/instrumentos_model.php';
    //En $libros teenemos un array con todos los libros gracias al modelo
    $instrumentos = getInstrumentos();
    //La vista recibe un array para mostrarlo por pantalla
    include 'views/instrumentos_listar.php';
}

function ver ()
{
   if ( !isset ( $_GET [ 'id' ] ) )
      die("No has especificado un identificador de instrumento.");
   $id = $_GET [ 'id' ];
   //Incluimos el modelo correspondiente
   require 'models/instumentos_model.php';
   //Le pide al modelo el libro con id = $id
   $instrumento = getInstrumento($id);
   if ($instrumento === null)
      die("Identificador de instrumento incorrecto");
   //Pasamos a la vista toda la información que se desea representar
   include('views/instrumentos_ver.php');
}

function crear()
{
        $tipo = $_POST[ 'tipo' ];
        $marca = $_POST[ 'marca'];
        $modelo = $_POST[ 'modelo'];
        $fabricacion = $_POST[ 'fabricacion'];
        $num_serie = $_POST[ 'num_serie'];
        $num_serie = $_POST[ 'precio'];
        $imagen = $_POST[ 'imagen'];
        require 'models/instrumentos_model.php';
   insertaElemento($tipo, $marca, $modelo, $fabricacion, $num_serie, $precio, $imagen);

 
}


