<html>

<head>
    <title>Catálogo Instrumentos</title>
</head>

<body>
    <h1>Productos dados de alta en nuestra tienda</h1>
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
        <?php foreach ($instrumentos as $instrumento) : ?>
            <tr>
                <td><?php echo $instrumento['id'] ?></td>
                <td><?php echo $instrumento['tipo'] ?></td>
                <td><?php echo $instrumento['marca'] ?></td>
                <td><?php echo $instrumento['modelo'] ?></td>
                <td><?php echo $instrumento['fabricacion'] ?></td>
                <td><?php echo $instrumento['num_serie'] ?></td>
                <td><?php echo $instrumento['precio'] ?></td>
                <td><a href="index.php?controller=instrumentos&action=ver&id=<?php echo $instrumento['id'] ?>">detalle</a></td>
                <td><a href="index.php?controller=instrumentos&action=update&id=<?php echo $instrumento['id'] ?>">editar</a></td>
                <td><a href="index.php?controller=instrumentos&action=delete&id=<?php echo $instrumento['id'] ?>">borrar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>