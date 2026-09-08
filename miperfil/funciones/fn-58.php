<?php
class Fn_58 {
    function fn58_rtrabajonosotros_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM  vacante_usuario vs ,vacante v WHERE vs.id_vacante=v.id_vacante and  est_vacanusu != -1 ORDER by fecha_vacanusu desc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn58_rtrabajonosotros_all -- fn55 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    
    function fn58_rtrabajonosotros_xvacante($limit) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT count(vs.id_vacante) as cv , v.* FROM  vacante_usuario vs ,vacante v WHERE vs.id_vacante=v.id_vacante and  est_vacanusu != -1 group by vs.id_vacante limit 0,$limit";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn58_rtrabajonosotros_all -- fn55 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn58_rtrabajonosotros_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from vacante_usuario vs ,vacante v where vs.id_vacante= v.id_vacante and  id_vacanusu = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn58_rtrabajonosotros_x -- fn55";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_vacanusu' => $menu['id_vacanusu'],
                'id_vacante' => $menu['id_vacante'],
                'identificacion_vacanusu' => $menu['identificacion_vacanusu'],
                'nombre_vacanusu' => $menu['nombre_vacanusu'],
                'apellido_vacanusu' => $menu['apellido_vacanusu'],
                'nacionalidad_vacanusu' => $menu['nacionalidad_vacanusu'],
                'fechnacimiento_vacanusu' => $menu['fechnacimiento_vacanusu'],
                'telefono_vacanusu' => $menu['telefono_vacanusu'],
                'email_vacanusu' => $menu['email_vacanusu'],
                'discapacidad_vacanusu' => $menu['discapacidad_vacanusu'],
                'porcentdiscap_vacanusu' => $menu['porcentdiscap_vacanusu'],
                'niveledu_vacanusu' => $menu['niveledu_vacanusu'],
                'tituloaca_vacanusu' => $menu['tituloaca_vacanusu'],
                'intitucion_vacanusu' => $menu['intitucion_vacanusu'],
                'areaexplab_vacanusu' => $menu['areaexplab_vacanusu'],
                'aniosxp_vacanusu' => $menu['aniosxp_vacanusu'],
                'conocimientos_vacanusu' => $menu['conocimientos_vacanusu'],
                'documento_vacanusu' => $menu['documento_vacanusu'],
                'politicas_vacanusu' => $menu['politicas_vacanusu'],
                'est_vacanusu' => $menu['est_vacanusu'],
                'fecha_vacanusu' => $menu['fecha_vacanusu'],
                'nombre_vacante' => $menu['nombre_vacante']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function fn58_rvacante_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM vacante where estado_vacante=1 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn43_rvacante_all -- fn58 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn58_uvacante_usuario_estado($id, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE vacante_usuario SET est_vacanusu = $estado  "
                . " WHERE id_vacanusu = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function get_vacante_usuario_filto($fdesde,$fhasta, $vacante, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtfiltro1 = '';
        if($vacante!=''){
            $txtfiltro1 .= ' AND id_vacante = "'.$vacante.'" ';
        }if($estado!=''){
            $txtfiltro1 .= ' AND est_vacanusu  = "'.$estado.'" ';
        }      
        
        $sql2 = "select * from vacante_usuario WHERE fecha_vacanusu >= '$fdesde' and fecha_vacanusu<='$fhasta' $txtfiltro1  ORDER by fecha_vacanusu  DESC ";
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
    
    function get_vacante_usuario_filto2($fdesde,$fhasta, $vacante, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtfiltro1 = '';
        if($vacante!=''){
            $txtfiltro1 .= ' AND vs.id_vacante = "'.$vacante.'" ';
        }if($estado!=''){
            $txtfiltro1 .= ' AND vs.est_vacanusu  = "'.$estado.'" ';
        }      
        
        $sql2 = "select * from vacante_usuario vs ,vacante v  WHERE vs.id_vacante= v.id_vacante and vs.fecha_vacanusu >= '$fdesde' and vs.fecha_vacanusu<='$fhasta' $txtfiltro1  ORDER by vs.fecha_vacanusu  DESC ";
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
    
    function fn58_restado($estado) {
        $texto = 'PENDIENTE';
        if ($estado == 0) {
            $texto = 'PENDIENTE';
        }
        if ($estado == 1) {
            $texto = 'ATENDIDO';
        }
        
        return $texto;
    }
    function fn58_racuerdo($estado) {
        $texto = 'NO ACEPTADO';
        if ($estado == 1) {
            $texto = 'ACEPTADO';
        }
        
        return $texto;
    }
}
