<?php
    require 'funciones.php';
    require 'config/database.php';
    require __DIR__ . '/../vendor/autoload.php';

    //Conectarnos a la BD
    $conexion = conectarDB();

    //Importamos el uso de la clase
    use App\ActiveRecord;

    //Al ser ESTATICO, no requiere instancearse
    ActiveRecord::setDB($conexion);