<?php

if (isset($_SESSION['sesiongonzanama'])) {
    
    $sesion = $_SESSION['sesiongonzanama'];
    $nombreusu_open = $sesion[0]['Nombresesion'];
    $apellidousu_open = $sesion[0]['Apellidosesion'];
    $idusu_open = $sesion[0]['Id'];
    $emailusu_open = $sesion[0]['Mailusuario'];
    $idroll_open = $sesion[0]['Roll'];
    $nombreroll_open = $sesion[0]['Nombre_rol'];
    $estadousu_open= $sesion[0]['Estado'];
    $fotousu_open = $sesion[0]['Foto'];
    $rucusu_open = $sesion[0]['Ruc'];
    $telefusu_open = $sesion[0]['Tele'];
    $dirusu_open = $sesion[0]['Dire'];
    $tipousu_open = $sesion[0]['Tipo'];
    $numerousus = 1;
}