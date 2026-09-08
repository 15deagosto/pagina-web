<?php

require_once __DIR__ . '/config.local.php';

class Conecciones {

    function crearConexion() {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        //Si sucede algún error la función muere e imprimir el error
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        //Si nada sucede retornamos la conexión
        return $mysqli;
    }
}

?>