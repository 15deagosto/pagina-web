<?php
class Fn_64 {
    function fn64_rpersonal_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM personal WHERE estado_per != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn64_rpersonal_all -- fn64 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn64_cpersonal_xdata($nombre_per, $apellido_per, $cargo_per, $titulo_per, $telefono1_per, $tipo_per, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO personal(nombre_per, apellido_per, cargo_per, titulo_per, telefono1_per, tipo_per, estado_per) "
                . " VALUES ('$nombre_per', '$apellido_per', '$cargo_per', '$titulo_per', '$telefono1_per', $tipo_per, $estado)";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn64_rpersonal_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from personal where id_per  = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn64_rpersonal_x -- fn64";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_per' => $menu['id_per'],
                'nombre_per' => $menu['nombre_per'],
                'apellido_per' => $menu['apellido_per'],
                'cargo_per' => $menu['cargo_per'],
                'titulo_per' => $menu['titulo_per'],
                'telefono1_per' => $menu['telefono1_per'],
                'telefono2_per' => $menu['telefono2_per'],
                'tipo_per' => $menu['tipo_per'],
                'estado_per' => $menu['estado_per']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn64_rpersonal_xtextos($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from personal where id_prod = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn64_rpersonal_x -- fn64";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'descripcion_prod' => $menu['descripcion_prod'],
                'tipo_prod' => $menu['tipo_prod'],
                'texto1_prod' => $menu['texto1_prod'],
                'texto2_prod' => $menu['texto2_prod'],
                'texto3_prod' => $menu['texto3_prod'],
                'estado_prod' => $menu['estado_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn64_upersonal_x($nombre_per, $apellido_per, $cargo_per, $titulo_per, $telefono1_per, $tipo_per, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE personal SET nombre_per = '$nombre_per', apellido_per = '$apellido_per',cargo_per = '$cargo_per', titulo_per = '$titulo_per', telefono1_per = '$telefono1_per', tipo_per = $tipo_per"
                . " WHERE id_per = $id";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn64_uavisos_ximg($id, $img) {
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
    
    function fn64_upersonal_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE personal SET estado_per = $estado  "
                . " WHERE id_per = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn64_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn64_upersonal_xtexto($texto1_prod, $texto2_prod,$texto3_prod,$id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE personal SET texto1_prod = '".$texto1_prod."',texto2_prod = '".$texto2_prod."',texto3_prod = '".$texto3_prod."' "
                . " WHERE id_prod  = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn64_rrol_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM rol WHERE estado_rol != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn64_rrol_all -- fn64 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn64_rpersonal_xrol($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from rol where id_rol = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn64_upersonal_xrol -- fn64";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_rol' => $menu['id_rol'],
                'nombre_rol' => $menu['nombre_rol'],
                'permiso_rol' => $menu['permiso_rol'],
                'estado_rol' => $menu['estado_rol']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn64_upersonal_xtipo($id,$tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE personal SET tipo_per = $tipo  "
                . " WHERE id_per = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}