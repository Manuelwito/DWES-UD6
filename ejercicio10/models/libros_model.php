<?php
        $user='root';
        $password = 'root';
        $db = new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password);
        $result = $db->query('SELECT titulo, precio FROM libros');
        while ($libro = $result->fetch())
            $libros[] = $libro;
