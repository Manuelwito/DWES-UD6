<?php

function obtenerPassword()
{  
    if (!isset($_POST['nombre']))
        die("NO HA ESPECIFICADO NOMBRE DE USUARIO.");
    $nombre = $_POST['nombre'];
    //Incluimos el modelo correspondiente
    require 'models/usuarios_model.php';
    //Le pide al modelo el libro con id = $id
    $usuario = obtenerUsuario($nombre);
    if ($usuario === null)
        die("El usuario no existe");
    //Pasamos a la vista toda la información que se desea representar

    if ($usuario) {
        $contraseniaEncr = $usuario["pass"];
        $retorno = $contraseniaEncr;
        $retorno = password_verify($contrasenia, $contraseniaEncr);

        if ($retorno) {

            echo "Contraseña correcta";

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nombre'] = $usuario['nombre'];

            include('views/instrumentos_listar.php');
        } else {
            echo "Contraseña incorrecta";
            include('views/usuarios_login.php');
        }
    } else {
        echo "Usuario o contraseña incorrecto";
        include('views/usuarios_login.php');
    }
}
