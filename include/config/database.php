<?php 
    // : mysqli =Indica que retornara una instancia de mysqli
    function conectarDB() : mysqli {
        $conexion = new mysqli('localhost', 'root', 'Aqui va tu password', 'bienesraicescrud');

        if(!$conexion) {
            echo "Error de conexión";
            exit;
        }

        return $conexion;
    }