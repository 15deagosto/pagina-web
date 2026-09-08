<?php
class Fn_22 {
    function fn22_rinversion_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM inversion ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn22_rinversion_all -- fn22 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn22_rinversion_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM inversion p INNER JOIN linea_credito lc ON p.id_lineacred=lc.id_lineacred  WHERE estado_prod = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn22_rinversionlinea_credito_all -- fn22 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    

    function fn22_cinversion_xdata($montoin_inversion, $montoout_inversion, $diain_inversion, $diaout_inversion,$prociento_inversion) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO inversion(montoin_inversion, montoout_inversion, diain_inversion,diaout_inversion,prociento_inversion) "
                . " VALUES ( $montoin_inversion, $montoout_inversion, $diain_inversion, $diaout_inversion, $prociento_inversion) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn22_rinversion_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from inversion where id_inversion = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn22_rinversion_x -- fn22";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_inversion' => $menu['id_inversion'],
                'montoin_inversion' => $menu['montoin_inversion'],
                'montoout_inversion' => $menu['montoout_inversion'],
                'diain_inversion' => $menu['diain_inversion'],
                'diaout_inversion' => $menu['diaout_inversion'],
                'prociento_inversion' => $menu['prociento_inversion']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn22_uinversion_x($montoin_inversion, $montoout_inversion, $diain_inversion, $diaout_inversion,$prociento_inversion, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE inversion SET montoin_inversion = $montoin_inversion, montoout_inversion = $montoout_inversion , diain_inversion = $diain_inversion, diaout_inversion = $diaout_inversion, prociento_inversion = $prociento_inversion"
                . " WHERE id_inversion = $id";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}