<?php

function __autoload($name) {
      include_once 'includes/class.' . $name . '.php';
   }

   $vehiculo = new Vehiculo("rojo", 450);
   
   echo $vehiculo->circula();
   echo "<br>";
   echo $vehiculo;
   //echo $vehiculo->añadir_persona(50);
   //echo $vehiculo->añadir_persona(60);
   echo "<br>";
   echo "SE HAN AÑADIDO DOS PERSONITAS DE 50 Y 60 KG";
   echo $vehiculo;
   echo "<br>";

   $moto = new Dos_ruedas("azul", 190, 49);

   echo $moto;
   $moto->poner_gasolina(9.0);
   echo $moto;
   
   ?>