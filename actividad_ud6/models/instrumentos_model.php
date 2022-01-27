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
    $result = $db->query('SELECT * FROM instrumentos');
    while ($instrumento = $result->fetch())
        $instrumentos[] = $instrumento;
    return $instrumentos;
}

/**FUNCIÓN QUE RECIBE LOS DATOS DE UN INSTRUMENTO Y LOS INSERTA EN LA BASE DE DATOS A TRAVÉS DE UNA CONEXION Y DE UNA SENTENCIA SQL */
function insertaElemento($tipo, $marca, $modelo, $fabricacion, $num_serie, $precio)
{
    $db = getConnection();
    $consulta = $db->prepare("INSERT INTO `instrumentos` (`tipo`, `marca`, `modelo`, `fabricacion`, `num_serie`, `precio`, `imagen`) VALUES (?, ?, ?, ?, ?, ?, '');");

    $consulta->bindParam(1, $tipo);
    $consulta->bindParam(2, $marca);
    $consulta->bindParam(3, $modelo);
    $consulta->bindParam(4, $fabricacion);
    $consulta->bindParam(5, $num_serie);
    $consulta->bindParam(6, $precio);
    //   $consulta->bindParam(7, $imagen);

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

/*
**editarElemento** que recibirá todos los datos que componen a un elemento y actualizará todos sus valores, 
devolverá true en caso de que se haya editado correctamente y false en caso contrario.
*/
function editElement($id, $tipo, $marca, $modelo, $fabricacion, $num_serie, $precio)
{
    $db = getConnection();
    $consulta = $db->prepare('UPDATE `instrumentos` SET `tipo` = ?, `marca` = ?, `modelo` = ?, `fabricacion` = ?, `num_serie` = ?, `precio` = ? WHERE `instrumentos`.`id` = ? ;');
    $consulta->bindParam(1, $tipo);
    $consulta->bindParam(2, $marca);
    $consulta->bindParam(3, $modelo);
    $consulta->bindParam(4, $fabricacion);
    $consulta->bindParam(5, $num_serie);
    $consulta->bindParam(6, $precio);
    // $consulta->bindParam(7, $imagen);
    $consulta->bindParam(7, $id);

    $editados = $consulta->execute();

    if ($editados > 0) {
        echo "se han editado $editados instrumentos";
    } else {
        echo "no se han editado ninguno algo fue mal";
    }

    $conn = null;
}

/** FUNCIÓN QUE RECIBE UN ID DE UN INSTRUMENTO DE LA BASE DE DATOS Y A TRAVÉS DE UNA SENTENCIA SQL ELIMINA ESE ARTÍCULO
 * RETURN: boolean true si se ha eliminado correctamente.
 *  
 * @param id información del instrumento que se desea eliminar.
 * 
 */
function deleteElement($id)
{
    $db = getConnection();
    $consulta = $db->prepare("DELETE FROM `instrumentos` WHERE `id` = ? ;");
    $consulta->bindParam(1, $id);

    $borrados = $consulta->execute();

    if ($borrados > 0) {

        echo "se han eliminado $borrados";
    } else {
        echo "no se han eliminado";
    }
    $conn = null;
}
