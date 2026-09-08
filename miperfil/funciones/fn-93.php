<?php
class Fn_93 {
    function fn93_rsolinversion_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM solicitud_inversion s , producto p where s.id_prod=p.id_prod and  tipo_prod =3";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn93_rsolinversion_all -- fn93 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn93_rsolinversion_fecha($desde, $hasta,$producto,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtfiltro1 ='';
        if($producto!=''){
            $txtfiltro1 = ' and id_prod ='.$producto.' '; 
        }if($estado!=''){
            $txtfiltro1 .= ' and estado_inversion ='.$estado.' '; 
        }
        $sql2 = "SELECT * FROM solicitud_inversion s , producto p   WHERE s.id_prod=p.id_prod and  tipo_prod =3 and fecha_inversion >= '$desde' and fecha_inversion <= '$hasta' $txtfiltro1 order by fecha_inversion desc ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn93_rsolinversion_fecha -- fn93 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function fn93_rsolinversion2_fecha($desde, $hasta,$producto,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtfiltro1 ='';
        if($producto!=''){
            $txtfiltro1 = ' and id_prod ='.$producto.' '; 
        }if($estado!=''){
            $txtfiltro1 .= ' and estado_inversion ='.$estado.' '; 
        }
        $sql2 = "SELECT * FROM solicitud_inversion s , producto  p  WHERE s.id_prod=p.id_prod and  tipo_prod =3 and  fecha_inversion >= '$desde' $txtfiltro1 and fecha_inversion <= '$hasta' order by fecha_inversion desc ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn93_rsolinversion_fecha -- fn93 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function fn93_usolinversion_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE solicitud_inversion SET estado_inversion = $estado  "
                . " WHERE id_inversion = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn93_rsolinversion_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from solicitud_inversion s , producto p  where s.id_prod=p.id_prod and id_inversion = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn93_rsolinversion_x -- fn93";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_inversion' => $menu['id_inversion'],
                'nombre_inversion' => $menu['nombre_inversion'],
                'telefono_inversion' => $menu['telefono_inversion'],
                'entidad_inversion' => $menu['entidad_inversion'],
                'email_inversion' => $menu['email_inversion'],
                'ciudad_inversion' => $menu['ciudad_inversion'],
                'apellido_inversion' => $menu['apellido_inversion'],
                'monto_inversion' => $menu['monto_inversion'],
                'fecha_inversion' => $menu['fecha_inversion'],
                'hora_inversion' => $menu['hora_inversion'],
                'nombre_prod' => $menu['nombre_prod'],
                'acuerdo_inversion' => $menu['acuerdo_inversion']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn93_restado($estado) {
        $texto = 'PENDIENTE';
        if ($estado == 0) {
            $texto = 'PENDIENTE';
        }
        if ($estado == 1) {
            $texto = 'APROBADO';
        }
        
        return $texto;
    }
    
     function fn93_racuerdo($estado) {
        $texto = 'NO ACEPTADO';
        if ($estado == 1) {
            $texto = 'ACEPTADO';
        }
        
        return $texto;
    }
    function fn93_rproducto_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto where estado_prod=1 and  tipo_prod =3 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn93_rproducto_all -- fn93 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn93_rzona_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT zpq.id_zona as idparroquia, zpq.lugar_zona as parroquia , zc.id_zona as idcanton, zc.lugar_zona as canton , zpi.id_zona as idprovincia, "
                . "zpi.lugar_zona as provincia, zp.id_zona as idpais , zp.lugar_zona as pais "
                . "FROM zona zpq, zona zc, zona zpi , zona zp WHERE zpq.codigopadre_zona= zc.id_zona and zc.codigopadre_zona= zpi.id_zona "
                . "and zpi.codigopadre_zona=zp.id_zona and zpq.id_zona='$id';  ";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn93_rzona_xid -- fn93";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('idparroquia' => $menu['idparroquia'],
                'parroquia' => $menu['parroquia'],
                'idcanton' => $menu['idcanton'],
                'canton' => $menu['canton'],
                'idprovincia' => $menu['idprovincia'],
                'provincia' => $menu['provincia'],
                'idpais' => $menu['idpais'],
                'pais' => $menu['pais']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
}
