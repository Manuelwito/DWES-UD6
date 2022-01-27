
        
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <title>Páginal principal</title>
</head>
<body>
    <nav>
        <ul>
            <li><a class="active" href="index.php">Pagina principal</a></li>
            <li><a href="views/instrumentos_crear.php">Nuevo instrumento</a></li>
            <li><a href="index.php">Listar el inventario de instrumentos</a></li>
        </ul>
    </nav>
    <h1>The music store</h1>
    <p>Se trata de una página web que podría ser utilizada para la venta de instrumentos músicales. Por ellos tenemos una base de datos con los tipos de instrumentos, la marca, el modelo, el numero de serie, el año de fabricacion, y un campo para introducir una fotografía del instrumento.</p>

    <?php
      
      //La carpeta donde buscaremos los controladores  
      define ('CONTROLLERS_FOLDERS', "controllers/");

      //si no se indica un controlador, este es el controlador que se usará
      define('DEFAULT_CONTROLLER', "instrumentos");

      //Si no se indica una acción, esta acción es la que se usará
      define("DEFAULT_ACTION", "listar");


      //Obtenemos el controlador.
      //Si el usuario no lo introduce, seleccionamos el de por defecto.
      $controller = DEFAULT_CONTROLLER;
      if ( !empty( $_GET[ 'controller' ]))
      $controller = $_GET [ 'controller' ];
  
      $action = DEFAULT_ACTION;
      //Obtenemos la accion seleccionada
      //Si el usuario no la introduce, seleccionamos la de por defecto
      if( !empty ( $_GET[ 'action' ] ) )
              $action = $_GET[ 'action' ];


      //ya tenemos el controlador y la accion
      //formamos el nombre del fichero que contiene nuestro controlador
      $controller = CONTROLLERS_FOLDERS . $controller . '_controller.php';

      //si la variable $controller es un fichero lo requeriremos

      try{
              if ( is_file( $controller ))
              require_once($controller);


              else
                      throw new Exception("la accion no existe - 404 not found");
              
              //Si la variable $action es una funcion la ejecutamos o detenemos el escript 

              if ( is_callable($action))
                      $action();
              else
                      throw new Exception("la accion no existe - 404 not found");
              } 
      catch (Exception $e){
              echo 'Excepcion capturada: '. $e->getMessage(). "\n";
      }
      ?>
 


</body>
</html>
   