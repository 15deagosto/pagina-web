<?php
// TEMPORAL para debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Verifica si los archivos incluidos existen
$required_files = [
    '../controler/conexion.php',
    '../funciones/fn-sesion.php',
    '../funciones/fn-alert.php'
];

foreach ($required_files as $file) {
    if (!file_exists($file)) {
        die("Error: Archivo no encontrado: $file");
    }
}

include '../controler/conexion.php';
include '../funciones/fn-sesion.php';
require '../funciones/fn-alert.php';

$a = new Fn_sesion();
$fnalert = new Fn_alert();

if (isset($_GET['sesionout'])) {
    unset($_SESSION['sesiongonzanama']);
    header('Location: ../login.php?msg=Sesión cerrada correctamente');
    exit();
}

if (isset($_SESSION['sesiongonzanama'])) {
    header('Location: ../miperfil/index.php?opc=14');
    exit();
}

// Verifica si se enviaron datos POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['usernames']) || !isset($_POST['passs']) || 
        empty(trim($_POST['usernames'])) || empty(trim($_POST['passs']))) {
        header('Location: ../login.php?msg=Ingrese el usuario y la contraseña');
        exit();
    }
    
    $user = trim($_POST['usernames']);
    $pass = trim($_POST['passs']);
    
    try {
        $sesion = $a->fn_ruser_x($user, $pass);
        
        if ($sesion && $sesion->num_rows > 0) {
            $arreglo = array();
            while ($menu = $sesion->fetch_assoc()) {
                $arreglo[] = array(
                    'Id' => $menu['id_usuario'],
                    'Nombresesion' => $menu['nombre_usuario'],
                    'Apellidosesion' => $menu['apellido_usuario'],
                    'Mailusuario' => $menu['email_usuario'],
                    'Roll' => $menu['id_rol'],
                    'Nombre_rol' => $menu['nombre_rol'],
                    'Estado' => $menu['estado_usuario'],
                    'Foto' => $menu['foto_usuario'],
                    'Ruc' => '0000000000',
                    'Tele' => $menu['telefono_usuario'],
                    'Dire' => $menu['direccion_usuario'],
                    'Ivitado' => '0'
                );
            }
            
            $_SESSION['sesiongonzanama'] = $arreglo;
            header('Location: ../miperfil/index.php?opc=14');
            exit();
        } else {
            header('Location: ../login.php?msg=Usuario o contraseña incorrectos');
            exit();
        }
    } catch (Exception $e) {
        error_log("Error en sesión: " . $e->getMessage());
        header('Location: ../login.php?msg=Error en el servidor. Intente más tarde.'.$e->getMessage());
        exit();
    }
} else {
    // Si no es POST, redirige al login
    header('Location: ../login.phpss');
    exit();
}