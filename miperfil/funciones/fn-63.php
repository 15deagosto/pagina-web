<?php

class Fn_63 {

    function fn63_wscredito_all($secuencial_empresa) {
        $url_endpoint = 'https://enlinea.sumakkawsay.fin.ec/API';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url_endpoint . '/api/v1.0/Prestamo/ObtenerTiposPrestamo',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{ "secuencialEmpresa": ' . $secuencial_empresa . '}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $json_data = json_decode($response, true);
        return $json_data;
    }

    function fn63_wsinversiones_all($secuencial_empresa) {
        $url_endpoint = 'https://enlinea.sumakkawsay.fin.ec/API';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url_endpoint . '/api/v1.0/Deposito/ObtenerTiposDeposito',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{ "secuencialEmpresa": ' . $secuencial_empresa . '}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $json_data = json_decode($response, true);
        return $json_data;
    }

    function fn63_rproducto_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto WHERE estado_prod != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn63_rproducto_all -- fn63 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn63_rproducto_licre_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto p INNER JOIN linea_credito lc ON p.id_lineacred=lc.id_lineacred  WHERE estado_prod != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn63_rproducto_all -- fn63 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn63_rproducto_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto p INNER JOIN linea_credito lc ON p.id_lineacred=lc.id_lineacred  WHERE estado_prod = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn63_rproductolinea_credito_all -- fn63 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn63_cproducto_xdataERP($nombre_prod, $descripcion_prod, $tipo_prod, $codERP_prod, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO producto(nombre_prod, descripcion_prod, tipo_prod, codERP_prod,estado_prod) "
                . " VALUES ('$nombre_prod', '$descripcion_prod', $tipo_prod,'$codERP_prod',$estado) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fn63_cproducto_xdata($nombre_prod, $descripcion_prod, $tipo_prod, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO producto(nombre_prod, descripcion_prod, tipo_prod,estado_prod) "
                . " VALUES ('$nombre_prod', '$descripcion_prod', $tipo_prod,$estado) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fn63_rproducto_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto where id_prod = " . $id . " limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn63_rproducto_x -- fn63";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'descripcion_prod' => $menu['descripcion_prod'],
                'tipo_prod' => $menu['tipo_prod'],
                'estado_prod' => $menu['estado_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn63_rproducto_xtextos($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto where id_prod = " . $id . " limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn63_rproducto_x -- fn63";
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

    function fn63_rproducto_xtextoses($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto where id_prod = " . $id . " AND estado_prod = 1 limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn63_rproducto_xtextoses -- fn63";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'descripcion_prod' => $menu['descripcion_prod'],
                'tipo_prod' => $menu['tipo_prod'],
                'imagen1_prod' => $menu['imagen1_prod'],
                'imagen2_prod' => $menu['imagen2_prod'],
                'texto1_prod' => $menu['texto1_prod'],
                'texto2_prod' => $menu['texto2_prod'],
                'texto3_prod' => $menu['texto3_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn63_rproducto_xtextoses2($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto where id_prod = " . $id . " AND estado_prod != -1 limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn63_rproducto_xtextoses -- fn63";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'descripcion_prod' => $menu['descripcion_prod'],
                'tipo_prod' => $menu['tipo_prod'],
                'imagen1_prod' => $menu['imagen1_prod'],
                'imagen2_prod' => $menu['imagen2_prod'],
                'texto1_prod' => $menu['texto1_prod'],
                'texto2_prod' => $menu['texto2_prod'],
                'texto3_prod' => $menu['texto3_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn63_uproducto_x($nombre_prod, $descripcion_prod, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE producto SET nombre_prod = '$nombre_prod', descripcion_prod = '$descripcion_prod' "
                . " WHERE id_prod = $id";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fn63_utipoproducto_x($tipo_prod, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE producto SET tipo_prod = $tipo_prod "
                . " WHERE id_prod = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fn63_ulineaproducto_x($id_lineacred, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE producto SET id_lineacred = $id_lineacred "
                . " WHERE id_prod = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fn63_uavisos_ximg($id, $img) {
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

    function fn63_uproducto_xest($id, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE producto SET estado_prod = $estado  "
                . " WHERE id_prod = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fn63_estado_xid($id_estado) {
        $res = "INACTIVO";
        if ($id_estado == 1) {
            $res = "ACTIVO";
        }
        return $res;
    }

    function fn63_uproducto_xtexto($texto1_prod, $texto2_prod, $texto3_prod, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE producto SET texto1_prod = '$texto1_prod',texto2_prod = '$texto2_prod',texto3_prod = '$texto3_prod' "
                . " WHERE id_prod  = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fn63_uproducto_xImg($imagen, $urlimagen, $id_prod) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE producto SET $imagen = '$urlimagen' "
                . " WHERE id_prod  = $id_prod ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fn63_rproducto_xrol($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from rol where id_rol = " . $id . " limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn63_uproducto_xrol -- fn63";
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

    function fn63_uproducto_xrol($id, $idrol) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE producto SET id_rol = $idrol  "
                . " WHERE id_usuario = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fn63_rproducto_xlinea($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto p INNER JOIN linea_credito lc on p.id_lineacred=lc.id_lineacred where id_prod = " . $id . " limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn63_rproducto_x -- fn63";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'descripcion_prod' => $menu['descripcion_prod'],
                'tipo_prod' => $menu['tipo_prod'],
                'id_lineacred' => $menu['id_lineacred'],
                'nombre_lineacred' => $menu['nombre_lineacred'],
                'estado_prod' => $menu['estado_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn63_tipo_xid($tip) {
        $res = "";
        if ($tip == 1) {
            $res = "Ahorro";
        }if ($tip == 2) {
            $res = "Crédito";
        }if ($tip == 3) {
            $res = "Inversión";
        }
        return $res;
    }

    function fn63_ucantproduc_x($posicion_prod, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE producto SET posicion_prod = $posicion_prod "
                . " WHERE id_prod = $id";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fn63_rproducto_xcodERP($codERP_prod) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto where codERP_prod = '" . $codERP_prod . "' limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn63_rproducto_xcodERP -- fn63";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'descripcion_prod' => $menu['descripcion_prod'],
                'tipo_prod' => $menu['tipo_prod'],
                'imagen1_prod' => $menu['imagen1_prod'],
                'imagen2_prod' => $menu['imagen2_prod'],
                'texto1_prod' => $menu['texto1_prod'],
                'texto2_prod' => $menu['texto2_prod'],
                'texto3_prod' => $menu['texto3_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
}
