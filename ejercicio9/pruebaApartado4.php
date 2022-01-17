<?php
/**Crea el fichero pruebaApartado4.php, crea un dos ruedas transparente de 1550 kg.
Añada una persona de 70 kg y muestre su peso total.
Cambie a verde el color del objeto dos ruedas. Incluya una cilindrada de 1000.
Muestre todos los valores de los atributos del dos ruedas con la función ver_atributo.
Cree un camión blanco de 6000 kg.
Añada una persona de 84 kg. Vuelva a pintarlo, en color azul. Incluye 2 puertas.
Muestre todos los valores de los atributos del camión con la función ver_atributo.

 */
function __autoload($name) {
      include_once 'includes/class.' . $name . '.php';
   }

   $coche1 = new Dos_ruedas("transparente", 1550, 49);
   

   echo "<br>";
   echo $coche1;
   echo $coche1->añadir_persona(70);
   echo "<br>";
   echo "SE HAN AÑADIDO un gordaco de 700 KG";
   echo $coche1->peso;

   echo "<br>";
   echo $coche1->color="amarillo";
   echo "<br>";

   echo $coche1->color;
   echo "SE HA CAMBIADO DE COLOR A AMARILLO";
   
   
   $camion = new Camion("blaco", 6000., 2, 6);
   $camion->añadir_persona(84.);
   $camion->repintar("azul");
   $camion->numeroPuertas=2;
   Vehiculo::ver_atributo($camion);
 
   $moto1 = new Dos_Ruedas("transparente", 1550.,125);
   $moto1->añadir_persona(70.);
   $moto1->color="verde";
   $moto1->__set("cilindrada",1000);
   Vehiculo::ver_atributo($moto1);

  
/* solucion samu: 
  $moto = new Dos_ruedas(1550, 'transparente',500);
  $moto->añadir_persona(70);
  echo "El vehiculo pesa en total: " .  $moto->peso;
  echo "<br>";
  $moto->color = 'Verde';
  $moto->cilindrada = 1000;
  echo "Moto: <br>";
  Vehiculo::ver_atributo($moto);
  echo "<br>";
  echo "Camion: <br>";
  $camion = new Camion(6000, 'blanco', 0, 5);
  $camion->añadir_persona(84);
  $camion->repintar('azul');
  $camion->numero_puertas += 2;
  Vehiculo::ver_atributo($camion);

    */
   ?>
   