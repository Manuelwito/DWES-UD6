<?php



function getConnection()
{

    $user = 'root';
    $password = 'root';
    return new PDO('mysql:host=localhost;dbname=instrumentosmusicales', $user, $password);
}

function getInstrumentos()
{
    $db = getConnection();
    echo "conectaado";
    $result = $db->query('SELECT * FROM instrumentos');
    while ($instrumento = $result->fetch())
        $instrumentos[] = $instrumento;
    return $instrumentos;
}

/**FUNCIÓN QUE RECIBE LOS DATOS DE UN INSTRUMENTO Y LOS INSERTA EN LA BASE DE DATOS A TRAVÉS DE UNA CONEXION Y DE UNA SENTENCIA SQL */
function insertaElemento($tipo, $marca, $modelo, $fabricacion, $num_serie, $precio, $imagen)
{
    $db = getConnection();
    $consulta = $db->prepare("INSERT INTO instrumentos (tipo, marca, modelo, fabricacion, num_serie, precio, imagen) VALUES (?, ?, ?, ?, ?, ?, ?)");

    $consulta->bindParam(1, $tipo);
    $consulta->bindParam(2, $marca);
    $consulta->bindParam(3, $modelo);
    $consulta->bindParam(4, $fabricacion);
    $consulta->bindParam(5, $num_serie);
    $consulta->bindParam(6, $precio);
    $consulta->bindParam(7, $imagen);

    $consulta->execute();
    $last_id = $db->lastInsertId();
    echo "se han añadido instrumentos nuevo con el id: $last_id";
    return $last_id;
    $conn = null;
}


function getInstrumento($id)
{
   $db = getConnection();
   $query = 'SELECT * FROM instrumentos WHERE id = ?';
   $stmt = $db->prepare($query);
   $stmt->execute(array($id));
   $instrumento = $stmt->fetch();
   return $instrumento;
}