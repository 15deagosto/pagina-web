<?php

class Fn_menu{
    
    function fn_rmenu_xrol($id_rol) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM menu m, rolmenu rm WHERE m.estado_menu = 1 "
                . "AND rm.id_menu = m.id_menu AND rm.id_rol = " . $id_rol . " "
                . "AND m.pertenece_menu = 0";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, este sitio web está experimentando problemas. 888 ";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_menu' => $menu['id_menu'],
                'nombre_menu' => $menu['nombre_menu'],
                'pertenece_menu' => $menu['pertenece_menu'],
                'url_menu' => $menu['url_menu'],
                'desc_menu' => $menu['desc_menu'],
                'icon_menu' => $menu['icon_menu'],
                'estado_menu' => $menu['estado_menu']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn_chkmenu_x($id_rol, $opc) {

        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT COUNT(id_rolmenu) AS cuenta FROM menu m, rolmenu rm WHERE m.estado_menu = 1 AND rm.id_menu = m.id_menu "
                . "AND rm.id_rol = " . $id_rol . " AND m.url_menu =" . $opc . "";
        //echo $sql2;
        $arreglo = 0;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe menú para el usuario.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $arreglo = $menu['cuenta'];
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn_rmenu_xid($id_menu) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM menu m WHERE m.estado_menu = 1 AND m.pertenece_menu = " . $id_menu . "";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, este sitio web está experimentando problemas ____ .";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_menu' => $menu['id_menu'],
                'nombre_menu' => $menu['nombre_menu'],
                'pertenece_menu' => $menu['pertenece_menu'],
                'url_menu' => $menu['url_menu'],
                'desc_menu' => $menu['desc_menu'],
                'icon_menu' => $menu['icon_menu'],
                'estado_menu' => $menu['estado_menu']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn_rsubmen_x($id_menu, $idrol) {
        
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM menu m,rolmenu r "
                . "WHERE m.id_menu=r.id_menu and m.estado_menu = 1 AND m.pertenece_menu = " . $id_menu . " and id_rol=" . $idrol . "";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, este sitio web está experimentando problemas //// .";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_menu' => $menu['id_menu'],
                'nombre_menu' => $menu['nombre_menu'],
                'pertenece_menu' => $menu['pertenece_menu'],
                'url_menu' => $menu['url_menu'],
                'desc_menu' => $menu['desc_menu'],
                'icon_menu' => $menu['icon_menu'],
                'estado_menu' => $menu['estado_menu']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn_rpadre_xid($opc) {

        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM menu m WHERE m.id_menu = " . $opc . " ";
        //echo $sql2;
        $arreglo = 0;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe menú para el usuario.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $arreglo = $menu['pertenece_menu'];
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn_rPDOpadre_xid($opc) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexionPDO();
        $params = [];
        $params['id_menu'] = $opc;
        $stmt = $mysqlidato->prepare('SELECT pertenece_menu FROM menu m WHERE m.url_menu =:id_menu');
        $stmt->execute($params);
        $menu = $stmt->fetch();
        return $menu[0];
    }

}