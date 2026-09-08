<?php
class Fn_21 {
    function fn21_rtasa_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tasa WHERE estado_tasa != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn21_rtasaes_all -- fn21 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn21_ctasa_xdata($nombre_tasa, $tasanominal_tasa,$efectivaanual_tasa,$efectivofin_tasa,$acumulacion_tasa,$interesanual_tasa,$valmin_tasa,$valmax_tasa,$min_tasa,$max_tasa,$desc_tasa, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha=date('Y-m-d');
        $sql = "INSERT INTO tasa(nombre_tasa, tasanominal_tasa,efectivaanual_tasa, efectivofin_tasa, acumulacion_tasa, interesanual_tasa, valmin_tasa, valmax_tasa, min_tasa, max_tasa, desc_tasa, estado_tasa) "
                . " VALUES ('$nombre_tasa', $tasanominal_tasa,$efectivaanual_tasa,$efectivofin_tasa,$acumulacion_tasa,$interesanual_tasa,$valmin_tasa,$valmax_tasa,$min_tasa,$max_tasa,'$desc_tasa', $estado) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn21_rtasa_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from tasa where id_tasa = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn21_rtasaes_x -- fn21";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_tasa' => $menu['id_tasa'],
                'nombre_tasa' => $menu['nombre_tasa'],
                'desc_tasa' => $menu['desc_tasa'],
                'tasanominal_tasa' => $menu['tasanominal_tasa'],
                'efectivaanual_tasa' => $menu['efectivaanual_tasa'],
                'efectivofin_tasa' => $menu['efectivofin_tasa'],
                'acumulacion_tasa' => $menu['acumulacion_tasa'],
                'interesanual_tasa' => $menu['interesanual_tasa'],
                'estado_tasa' => $menu['estado_tasa'],
                'min_tasa' => $menu['min_tasa'],
                'max_tasa' => $menu['max_tasa'],
                'valmin_tasa' => $menu['valmin_tasa'],
                'valmax_tasa' => $menu['valmax_tasa']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn21_utasa_x($nombre_tasa, $tasanominal_tasa,$efectivaanual_tasa,$efectivofin_tasa,$acumulacion_tasa,$interesanual_tasa,$valmin_tasa,$valmax_tasa,$min_tasa,$max_tasa,$desc_tasa, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE tasa SET nombre_tasa = '$nombre_tasa', tasanominal_tasa = $tasanominal_tasa, efectivaanual_tasa = $efectivaanual_tasa, efectivofin_tasa = $efectivofin_tasa, acumulacion_tasa = $acumulacion_tasa, interesanual_tasa = $interesanual_tasa, valmin_tasa = $valmin_tasa, valmax_tasa = $valmax_tasa, min_tasa = $min_tasa, max_tasa = $max_tasa, desc_tasa = '$desc_tasa'"
                . " WHERE id_tasa = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn21_uavisos_ximg($id, $img) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE avisos SET img_avisos = '$img'  "
                . " WHERE id_avisos = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn21_utasa_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE tasa SET estado_tasa = $estado  "
                . " WHERE id_tasa = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn21_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn21_rfrecuencias_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM frecuencia_pago WHERE estado_frecpago = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn21_rfrecuencias_alles -- fn21 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn21_utasa_xfrecuencia_pago($frecuencia_pago, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE tasa SET id_frecuencia = $frecuencia_pago  "
                . " WHERE id_tasa = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn21_rtasas_allx($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tasa WHERE id_prod=$id and estado_tasa != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn21_rtasas_allx -- fn21 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn21_ctasaproducto_xdata($id_prod,$estado_tasa,$tasanominal_tasa,$valmin_tasa,$valmax_tasa,$min_tasa,$max_tasa){
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO tasa(id_prod, estado_tasa,tasanominal_tasa,valmin_tasa,valmax_tasa,min_tasa,max_tasa) "
                . " VALUES ($id_prod, $estado_tasa,$tasanominal_tasa,$valmin_tasa,$valmax_tasa,$min_tasa,$max_tasa) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn21_utasaproducto_x($tasanominal_tasa,$valmin_tasa,$valmax_tasa,$min_tasa,$max_tasa,$id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE tasa SET tasanominal_tasa = $tasanominal_tasa,valmin_tasa = $valmin_tasa,"
                . "valmax_tasa = $valmax_tasa, min_tasa = $min_tasa, max_tasa = $max_tasa  "
                . " WHERE id_tasa = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}
