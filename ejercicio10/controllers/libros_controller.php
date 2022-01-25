<?php 
//se incluy el modelo
require 'models/libros_model.php';
//En $libros teenemos un array con todos los libros gracias al modelo
$libros = getLibros();
//La vista recibe un array para mostrarlo por pantalla
include 'views/libros_listar.php';
