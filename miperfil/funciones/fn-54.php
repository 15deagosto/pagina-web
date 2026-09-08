<?php
class Fn_54 {
    function fn54_rtransparencia_xpadre($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM transparencia WHERE estado_transp != -1 and pertenece_transp=$id order by id_transp asc";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn54_rtransparencia_xpadre -- fn54 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn54_ctransparencia_x($nombre_transp,$resumen_transp,$fecha, $tipo_transp, $estado,$id_padre) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
//        $fecha=date('Y-m-d');
        $sql = "INSERT INTO transparencia(nombre_transp, resumen_transp, url_transp,mes_transp,fecha_transp,posi_transp,estado_transp,icon_transp,"
                . "tipo_transp,pertenece_transp) "
                . " VALUES ('$nombre_transp','$resumen_transp','','','$fecha',1,'$estado','',$tipo_transp,$id_padre) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn54_rtransparencia_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from transparencia where id_transp = $id limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn54_rtransparencia_xid -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_transp' => $menu['id_transp'],
                'nombre_transp' => $menu['nombre_transp'],
                'resumen_transp' => $menu['resumen_transp'],
                'url_transp' => $menu['url_transp'],
                'fecha_transp' => $menu['fecha_transp'],
                'posi_transp' => $menu['posi_transp'],
                'estado_transp' => $menu['estado_transp'],
                'tipo_transp' => $menu['tipo_transp'],
                'pertenece_transp' => $menu['pertenece_transp']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn54_utransparencia_xid($nombre_transp, $tipo_transp, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE transparencia SET nombre_transp = '$nombre_transp', tipo_transp = $tipo_transp "
                . " WHERE id_transp = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn54_utransparencia_xidfecha($nombre_transp, $resumen_transp,$fecha_transp, $id_hijo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE transparencia SET nombre_transp = '$nombre_transp', resumen_transp = '$resumen_transp',fecha_transp='$fecha_transp' "
                . " WHERE id_transp = $id_hijo ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn54_utransparencia_xdocumento($id, $dato) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE transparencia SET url_transp = '$dato'  "
                . " WHERE id_transp = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn54_utransparencia_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE transparencia SET estado_transp = $estado  "
                . " WHERE id_transp = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}
