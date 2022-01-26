<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Edita elemento</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="../index.php">Página principal</a></li>
            <li><a href="create.php">Nuevo elemento</a></li>
            <li><a href="../index.php">Lista de instrumentos</a></li>
            <li><a href="import.php">Importar elementos</a></li>
        </ul>
    </nav>

    <?php

    function filtrado($datos)
    {
        $datos = trim($datos); //Elimina espacios antes y después de los datos

        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //  if ($_FILES["fileToUpload"]["name"] == "") {

        //      $nombreFoto = $arrayconinstrumentos['imagen'];
        //  } else {


        //    $nombreFoto = $_FILES["fileToUpload"]["name"];
        //        $tmp = $_FILES["fileToUpload"]["tmp_name"];


        //        if (move_uploaded_file($tmp, "images/" . $nombreFoto)) {
        //            chmod("images/" . $nombreFoto, 0777);

        //            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        //        } else {
        //            echo "Sorry, there was an error uploading your file.";
        //        }
        //    }


        editarElemento(
            $_POST["id"],
            filtrado($_POST["tipo"]),
            filtrado($_POST["marca"]),
            filtrado($_POST["modelo"]),
            filtrado($_POST["fabricacion"]),
            filtrado($_POST["num_serie"]),
            filtrado($_POST["precio"]),
            $nombreFoto
        );


        header("Location: /actividad_ud6/index.php");
    }
    ?>

    <form action="index.php?controller=instrumentos&action=editar" method="POST" class="form-register" enctype="multipart/form-data">

        <h2 class="form-titulo">Características:</h2>
        <div class="contenedor-inputs">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <!--aquí va el id, es hidden por lo tanto no es visible en la web, pero si accesible desde PHP -->
            <input type="text" name="tipo" placeholder="tipo" value="<?php echo $instrumento['tipo'] ?>" class="input-100" required>
            <input type="text" name="marca" placeholder="marca" value="<?php echo $instrumento['marca'] ?>" class="input-100" required>
            <input type="text" name="modelo" placeholder="modelo" value="<?php echo $instrumento['modelo'] ?>" class="input-100" required>
            <input type="number" name="num_serie" placeholder="num_serie" value="<?php echo $instrumento['num_serie'] ?>" class="input-48" required>
            <input type="number" name="precio" placeholder="precio" value="<?php echo $instrumento['precio'] ?>" class="input-48" required>
            <input type="date" name="fabricacion" placeholder="fabricacion" value="<?php echo $instrumento['fabricacion'] ?>" class="input-100" required>
            <img name="avatarActual" width=200px src="images/<?php echo $instrumento['imagen'] ?>" height='auto' width='auto'>

            <!-- Aquí tienes que cargar la imagen actual -->

            <input type="file" name="fileToUpload" accept="image/png, image/jpeg" class="input-100">
            <input type="submit" value="Editar" class="btn-enviar">
            <div id="errores"></div>
        </div>
    </form>
</body>

</html>