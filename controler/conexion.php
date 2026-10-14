<?php

require_once __DIR__ . '/config.local.php';

class Conecciones {

    function crearConexion() {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        //Si sucede algún error la función muere e imprimir el error
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        // La conexión usaba por defecto latin1: MySQL convertía al vuelo las
        // columnas utf8mb4 a latin1 (perdiendo tildes/ñ) y viceversa en los
        // INSERT, causando los "mojibake" en todo el sitio. Forzamos utf8mb4
        // para que las columnas se lean/escriban tal cual están declaradas.
        $mysqli->set_charset('utf8mb4');
        //Si nada sucede retornamos la conexión
        return $mysqli;
    }
}

?>