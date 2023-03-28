<?php
    require 'include/app.php';

    $conexion = conectarDB();

    //Crear usuario
    $email = 'testeo@hotmail.com';
    $password = 12345;
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    //Query para crear
    //$query = "INSERT INTO usuarios (email, password) VALUES ('pruebas@gmail.com', 123456);";
    //$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${password}');";
    $query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}');";

    //Agregar a la BD
    mysqli_query($conexion, $query);


    echo $query;