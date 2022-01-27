<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <title>Elimina Elemento</title>
</head>

<body>
    <nav>
        <ul>
            
            <h1>Producto:</h1>
            <table border="1">
                <tr>
                    <th>id</th>
                    <th>TIPO</th>
                    <th>MARCA</th>
                    <th>MODELO</th>
                    <th>FABRICACION</th>
                    <th>NUMERO DE SERIE</th>
                    <th>PRECIO</th>

                </tr>
                <tr>
                    <td><?php echo $instrumento['id'] ?></td>
                    <td><?php echo $instrumento['tipo'] ?></td>
                    <td><?php echo $instrumento['marca'] ?></td>
                    <td><?php echo $instrumento['modelo'] ?></td>
                    <td><?php echo $instrumento['fabricacion'] ?></td>
                    <td><?php echo $instrumento['num_serie'] ?></td>
                    <td><?php echo $instrumento['precio'] ?></td>
                </tr>
            </table>


            <form action="index.php?controller=instrumentos&action=eliminar" method="POST" class="form-register" enctype="multipart/form-data">
                <h2 class="form-titulo">¿Seguro que desea eliminar el producto?</h2>
                <div class="contenedor-inputs">
                <input type="hidden" name="id" value="<?php echo $instrumento['id'] ?>">
                    <input type="submit" value="Eliminar" class="btn-enviar">
                    <div id="errores"></div>
                </div>
            </form>
        </ul>
    </nav>
</body>

</html>