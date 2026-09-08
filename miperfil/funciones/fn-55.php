<?php
class Fn_55 {
    function fn55_rtestimonios_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM testimonios WHERE est_testimonio != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn55_rtestimonios_all -- fn55 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn55_rtestimonios_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM testimonios WHERE est_testimonio = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn55_rtestimonios_all -- fn55 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn55_ctestimonios_x($nombre, $apellido_testimonio,$lugar_testimonio, $fecha_inicio,$resumen_testimonio, $fecha_final, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO testimonios(nom_testimonio,apellido_testimonio,lugar_testimonio,resumen_testimonio,  fecini_testimonio, fecfin_testimonio, est_testimonio) "
                . " VALUES ('$nombre','$apellido_testimonio','$lugar_testimonio','$resumen_testimonio', '$fecha_inicio', '$fecha_final', '$estado') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn55_rtestimonios_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from testimonios where id_testimonio = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn55_rtestimonios_x -- fn55";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_testimonio' => $menu['id_testimonio'],
                'nom_testimonio' => $menu['nom_testimonio'],
                'resumen_testimonio' => $menu['resumen_testimonio'],
                'apellido_testimonio' => $menu['apellido_testimonio'],
                'fecini_testimonio' => $menu['fecini_testimonio'],
                'img_testimonio' => $menu['img_testimonio'],
                'lugar_testimonio' => $menu['lugar_testimonio'],
                'est_testimonio' => $menu['est_testimonio']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn55_utestimonios_x($nombre, $apellido_testimonio,$lugar_testimonio, $resumen_testimonio, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE testimonios SET nom_testimonio = '$nombre', apellido_testimonio = '$apellido_testimonio', lugar_testimonio = '$lugar_testimonio',resumen_testimonio='$resumen_testimonio'"
                . " WHERE id_testimonio = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn55_utestimonios_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE testimonios SET est_testimonio = $estado  "
                . " WHERE id_testimonio = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn55_utestimonios_xImg($imagen, $urlimagen,$id_testimonio) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE testimonios SET $imagen = '$urlimagen' "
                . " WHERE id_testimonio  = $id_testimonio ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}
