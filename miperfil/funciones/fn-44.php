<?php
class Fn_44 {
    function fn44_rsolcredito_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM solicitud_credito sc, producto p WHERE  sc.id_prod=p.id_prod order by fecha_credito desc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn44_rsolcredito_all -- fn44 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn44_rsolcredito_fecha($desde, $hasta, $prod, $st) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        
        $txtfiltro1 ='';
        if($prod!=''){
            $txtfiltro1 = ' and sc.id_prod ='.$prod.' '; 
        }if($st!=''){
            $txtfiltro1 .= ' and sc.estado_credito ='.$st.' '; 
        }
        $sql2 = "SELECT * FROM solicitud_credito sc , tasa t , producto p  WHERE t.id_tasa=sc.id_tasa and sc.id_prod=p.id_prod  and sc.fecha_credito >= '$desde' and sc.fecha_credito <= '$hasta' $txtfiltro1 order by sc.fecha_credito desc ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn44_rsolcredito_all -- fn44 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
      function fn44_uproducto_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE solicitud_credito SET estado_credito = $estado  "
                . " WHERE id_credito = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn44_rscredito_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from solicitud_credito sc, tasa t , producto p  where sc.id_tasa=t.id_tasa and sc.id_prod=p.id_prod and  sc.id_credito = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn44_rscredito_x -- fn44";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_credito' => $menu['id_credito'],
                'nombre_credito' => $menu['nombre_credito'],
                'telefono_credito'=> $menu['telefono_credito'],
                'entidad_credito' => $menu['entidad_credito'],
                'email_credito' => $menu['email_credito'],
                'ciudad_credito' => $menu['ciudad_credito'],
                'apellido_credito' => $menu['apellido_credito'],
                'monto_credito' => $menu['monto_credito'],
                'tiempo_credito' => $menu['tiempo_credito'],
                'fecha_credito' => $menu['fecha_credito'],
                'tasanominal_tasa' => $menu['tasanominal_tasa'],
                'hora_credito' => $menu['hora_credito'],
                'nombre_prod' => $menu['nombre_prod'],
                'acuerdo_credito' => $menu['acuerdo_credito']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn44_rpedido_fechas($desde, $hasta) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tienda t, formadepago f, usuario u, tiendaproducto tp, producto p"
                . "  where f.id_formapago = t.id_formapago and t.id_usuario=u.id_usuario and p.id_prod=tp.id_prod and tp.id_tienda=t.id_tienda and fecha_tienda<='$hasta' and fecha_tienda>='$desde'";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn44_rpedido_fechas -- fn76 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
     function fn44_restado($estado) {
        $texto = 'PENDIENTE';
        if ($estado == 0) {
            $texto = 'PENDIENTE';
        }
        if ($estado == 1) {
            $texto = 'APROBADO';
        }
        
        return $texto;
    }
    
     function fn44_racuerdo($estado) {
        $texto = 'NO ACEPTADO';
        if ($estado == 1) {
            $texto = 'ACEPTADO';
        }
        
        return $texto;
    }
    function fn44_rproducto_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto where estado_prod=1 and  tipo_prod =1 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn45_rproducto_all -- fn45 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn44_rzona_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT zpq.id_zona as idparroquia, zpq.lugar_zona as parroquia , zc.id_zona as idcanton, zc.lugar_zona as canton , zpi.id_zona as idprovincia, "
                . "zpi.lugar_zona as provincia, zp.id_zona as idpais , zp.lugar_zona as pais "
                . "FROM zona zpq, zona zc, zona zpi , zona zp WHERE zpq.codigopadre_zona= zc.id_zona and zc.codigopadre_zona= zpi.id_zona "
                . "and zpi.codigopadre_zona=zp.id_zona and zpq.id_zona='$id';  ";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn44_rzona_xid -- fn44";
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

