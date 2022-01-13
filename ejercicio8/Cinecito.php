<?php

function __autoload($name) {
      include_once 'includes/class.' . $name . '.php';
   }

//COMPROBAMOS LOS CINES. Primero creo objeto dimensiones para almacenarlo 
   $objetoDimensiones = new Dimensiones(4, 5, 6);
   $cine = new Cine("Tetuan", "Sevilla", 4, $objetoDimensiones, "cinema", "23432432", 33); //Creamos el cine con sus atributos
   
   $objetoDimensiones2 = new Dimensiones(5, 5, 6);
   $cine2 = new Cine("Pelicano", "Sevilla", 1, $objetoDimensiones, "cinema", "22", 66);
   
   $objetoDimensiones3 = new Dimensiones(7, 5, 6);
   $cine3 = new Cine("Malvarosa", "Sevilla", 2, $objetoDimensiones, "cinema", "33", 35);

   $cine4 = clone $cine2;

   //ESTO CAMBIA EL ATRIBUTO ALTO DEL OBJETO DIMENSIONES QUE ESTÁ EN LA CLASE CINE ********************OJO!!! QUE ESTO PUEDE CAER.
   $cine4->dimensiones->alto=7.0;
   
   //invocar al get:

   echo $cine;
   echo "<br>";
   echo "<br>";
   echo $cine2;
   echo "<br>";
   echo $cine3;
   echo "<br>";
   echo "<br>";
   echo $cine4;
   echo "<br>";
   echo "<br>";
   //set

   ?>