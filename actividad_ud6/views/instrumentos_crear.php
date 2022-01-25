<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Crea elemento</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a class="active" href="create.php">Nuevo instrumento</a></li>
            <li><a href="list.php">Lista de instrumentos</a></li>
            <li><a href="import.php">Importar instrumentos</a></li>
        </ul>
    </nav>

    <?php

    

    $tipo = "";
    $marca = "";
    $modelo = "";
    $fabricacion = "";
    $num_serie = "";
    $precio = "";
    $imagen = "";


    function filtrado($datos)
    {
        $datos = trim($datos); //Elimina espacios antes y después de los datos

        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombreFoto = $_FILES["fileToUpload"]["name"];
        $tmp = $_FILES["fileToUpload"]["tmp_name"];


        if (move_uploaded_file($tmp, "images/" . $nombreFoto)) {
            chmod("images/" . $nombreFoto, 0777);

            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        $tipo = filtrado($_POST["tipo"]);
        $marca = filtrado($_POST["marca"]);
        $modelo = filtrado($_POST["modelo"]);
        $fabricacion = filtrado($_POST["fabricacion"]);
        $num_serie = filtrado($_POST["num_serie"]);
        $precio = filtrado($_POST["precio"]);

        header("Location: /actividad_ud6/index.php");
        echo "añadido correctamente id: " . $id;
    }


    ?>

    <form action="../index.php?controller=instrumentos&action=crear" method="POST" class="form-register" enctype="multipart/form-data">

        <h2 class="form-titulo">Instrumento:</h2>
        <div class="contenedor-inputs">
            <input type="text" name="tipo" placeholder="Tipo" class="input-100" required>
            <input type="text" name="marca" placeholder="Marca" class="input-100" required>
            <input type="text" name="modelo" placeholder="Modelo" class="input-100" required>
            <input type="number" name="precio" placeholder="Precio" class="input-48" required>
            <input type="number" name="num_serie" placeholder="Numero de serie" class="input-48" required>
            <input type="date" name="fabricacion" placeholder="Fabricacion" class="input-100" required>
            <input type="file" name="fileToUpload" accept="image/png, image/jpeg" class="input-100">
            <input type="submit" value="Registrar" class="btn-enviar">
            <div id="errores"></div>
        </div>
    </form>
</body>

</html>