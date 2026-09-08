<?php

require_once __DIR__ . '/../../controler/config.local.php';

class Conecciones {

    function crearConexion() {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        //Si sucede algún error la función muere e imprimir el error
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $mysqli->set_charset("utf8mb4");
        $mysqli->query("SET NAMES 'utf8mb4'");
        $mysqli->query("SET CHARACTER SET utf8mb4");
        //Si nada sucede retornamos la conexión
        return $mysqli;
    }

    function crearConexionPDO() {
        try {
            $con = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . '', DB_USER, DB_PASS);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error conectando con la base de datos: ' . $e->getMessage();
        }
        return $con;
    }

    function geturl() {
        $url = "https://cooperativa15deagosto.fin.ec/";
        return $url;
    }

    function geturl_prueba() {
        $url = "https://beta.cooperativa15deagosto.fin.ec/";
        return $url;
    }

}

?>