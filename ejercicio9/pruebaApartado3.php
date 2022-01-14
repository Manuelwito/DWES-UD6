<?php

function __autoload($name) {
      include_once 'includes/class.' . $name . '.php';
   }

   $coche1 = new Coche("azul", 650, 4, 2);
   

   echo "<br>";
   echo $coche1;
   echo $coche1->añadir_persona(700);
   echo "<br>";

  
   echo "<br>";
   echo "SE HAN AÑADIDO un gordaco de 700 KG";
   echo $coche1;
   echo "<br>";

   echo $coche1->repintar("amarillo");
   echo "<br>";

   echo $coche1->añadir_cadenas(3);
   echo "SE HAN AÑADIDO 3 CADENAS Y SE HA PINTADO DE AMARILLO.  SON 10.000 EUROS";
   echo $coche1;
   echo "<br>";



   $moto = new Dos_ruedas("azul", 190, 49);

   echo $moto->color;
   echo $moto->peso;

   $moto->poner_gasolina(9.0);
   echo $moto;
   
   ?>
   