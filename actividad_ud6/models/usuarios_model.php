<?php


function getConnection()
{

    $user = 'root';
    $password = 'root';
    return new PDO('mysql:host=localhost;dbname=instrumentosmusicales', $user, $password);
}

//ESTA FALLANDO LA CONSULTA, ARREGLARLOS DESDE AQUÍ!!!!
function obtenerUsuario($nombre)
{
    $db = getConnection();
    $query = $db->prepare('SELECT * FROM usuarios WHERE nombre=?');
    $stmt = $db->prepare($query);
    $stmt->execute($nombre);
    $usuario = $stmt->fetch();
    return $usuario;
}
