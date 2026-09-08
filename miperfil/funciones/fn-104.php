<?php
class Fn_104 {
    function fn104_rquejas_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM quejas q , nosotros n where q.id_gencia=n.id_nosotros";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn104_rquejas_all -- fn104 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn104_rquejas_xagencia($LIMIT) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT COUNT(id_gencia) AS ca, n.*  FROM quejas q , nosotros n where q.id_gencia=n.id_nosotros GROUP BY id_gencia LIMIT 0,$LIMIT";
        
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn104_rquejas_all -- fn104 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn104_uquejas_estado($id, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE quejas SET estado_queja = $estado  "
                . " WHERE id_queja = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn54_rquejas_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT q.*,n.*,z.lugar_zona as lugar_zona , zp.lugar_zona as padrelugar_zona from quejas q , nosotros n , zona z , zona zp where q.id_gencia=n.id_nosotros and z.id_zona=q.id_zona and z.codigopadre_zona=zp.id_zona and id_queja = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn54_ravisos_x -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_queja' => $menu['id_queja'],
                'id_gencia' => $menu['id_gencia'],
                'cedula_queja' => $menu['cedula_queja'],
                'nombre_queja' => $menu['nombre_queja'],
                'telefono1_queja' => $menu['telefono1_queja'],
                'telefono2_queja' => $menu['telefono2_queja'],
                'email_queja' => $menu['email_queja'],
                'direccion_queja' => $menu['direccion_queja'],
                'referencia_queja' => $menu['referencia_queja'],
                'fecha_queja' => $menu['fecha_queja'],
                'hora_queja' => $menu['hora_queja'],
                'mensaje_queja' => $menu['mensaje_queja'],
                'peticion_queja' => $menu['peticion_queja'],
                'estado_queja' => $menu['estado_queja'],
                'lugar_zona' => $menu['lugar_zona'],
                'padrelugar_zona' => $menu['padrelugar_zona'],
                'nombre_nosotros' => $menu['nombre_nosotros']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function fn104_tipo_quejas($tipos){
        $res="";
        if($tipos==1){
            $res="VENTANILLA";
        }
        if($tipos==2){
            $res="INVERSIONES";
        }
        if($tipos==3){
            $res="ATENCIÓN AL CLIENTE";
        }
        if($tipos==4){
            $res="CRÉDITO";
        }
        if($tipos==5){
            $res="JEFE DE OFICINA";
        }
        if($tipos==6){
            $res="COBRANZAS";
        }
        if($tipos==7){
            $res="CALL CENTER";
        }
        return $res;
    }
    
    function get_quejas_filto($fdesde,$fhasta, $agencia, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
           
        
        $sql2 = "select * from quejasaras q , nosotros n  WHERE q.id_gencia=n.id_nosotros ORDER by q.fecha_saras  DESC ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe visitas.";
            exit;
        } else {
            $arreglo = $resultado2;
        }

        $mysqlidato->close();
        return $arreglo;
    }
    
    function get_quejas_filto2($fdesde,$fhasta, $agencia, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtfiltro1 = '';
        if($agencia!=''){
            $txtfiltro1 .= ' AND q.id_gencia = "'.$agencia.'" ';
        }if($estado!=''){
            $txtfiltro1 .= ' AND q.estado_queja  = "'.$estado.'" ';
        }      
        
        $sql2 = "select q.*,n.*,z.lugar_zona as lugar_zona , zp.lugar_zona as padrelugar_zona from quejas q , nosotros n , zona z , zona zp WHERE q.id_gencia=n.id_nosotros and z.id_zona=q.id_zona and z.codigopadre_zona=zp.id_zona And q.fecha_queja >= '$fdesde' and q.fecha_queja<='$fhasta' $txtfiltro1  ORDER by q.fecha_queja  DESC ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe visitas.";
            exit;
        } else {
            $arreglo = $resultado2;
        }

        $mysqlidato->close();
        return $arreglo;
    }
    function fn104_rnosotros_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros where estado_nosotros=1 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn104_rnosotros_all -- fn104 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function fn104_restado($estado) {
        $texto = 'PENDIENTE';
        if ($estado == 0) {
            $texto = 'PENDIENTE';
        }
        if ($estado == 1) {
            $texto = 'ATENDIDO';
        }
        
        return $texto;
    }
    function fn104_racuerdo($estado) {
        $texto = 'NO ACEPTADO';
        if ($estado == 1) {
            $texto = 'ACEPTADO';
        }
        
        return $texto;
    }
}
