<?php
class Fn_49 {
    function fn49_rempresa_all($fechin, $fechout) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM  empresa where fechain_empresa>= '$fechin' and fechain_empresa<= '$fechout'";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn49_rcontactanos_all -- fn49 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn49_rempresa_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from empresa e , contactosempresa c WHERE e.id_empresa=c.id_empresa and e.id_empresa=$id limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn49_rempresa_x -- fn49";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_empresa' => $menu['id_empresa'],
                'nombre_empresa' => $menu['nombre_empresa'],
                'desc_empresa' => $menu['desc_empresa'],
                'tlf1_empresa' => $menu['tlf1_empresa'],
                'tlf2_empresa' => $menu['tlf2_empresa'],
                'email_empresa' => $menu['email_empresa'],
                'id_zona' => $menu['id_zona'],
                'representante_empresa' => $menu['representante_empresa'],
                'tlfrep_empresa' => $menu['tlfrep_empresa'],
                'tlf2rep_empresa' => $menu['tlf2rep_empresa'],
                'emailrep_empresa' => $menu['emailrep_empresa'],
                'actividad_empresa' => $menu['actividad_empresa'],
                'tipo_empresa' => $menu['tipo_empresa'],
                'ruc_empresa' => $menu['ruc_empresa'],
                'fechinsri_empresa' => $menu['fechinsri_empresa'],
                'tipopersona_empresa' => $menu['tipopersona_empresa'],
                'paisrepre_empresa' => $menu['paisrepre_empresa'],
                'prodprincipal_empresa' => $menu['prodprincipal_empresa'],
                'anio_empresa' => $menu['anio_empresa'],
                'ingreso_empresa' => $menu['ingreso_empresa'],
                'egreso_empresa' => $menu['egreso_empresa'],
                'utilidadbruto_empresa' => $menu['utilidadbruto_empresa'],
                'pasivos_empresa' => $menu['pasivos_empresa'],
                'activos_empresa' => $menu['activos_empresa'],
                'patrimonio_empresa' => $menu['patrimonio_empresa'],
                'terminos_empresa' => $menu['terminos_empresa'],
                'id_conemp' => $menu['id_conemp'],
                'nombre_conemp' => $menu['nombre_conemp'],
                'tlf1_conemp' => $menu['tlf1_conemp'],
                'tlf2_conemp' => $menu['tlf2_conemp'],
                'email_conemp' => $menu['email_conemp'],
                'apellido_conemp' => $menu['apellido_conemp'],
                'cargo_conemp' => $menu['cargo_conemp']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn49_rrelacioncomercial_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM relacioncomercial r , categoriacomercio c WHERE r.id_catcom=c.id_catcom and id_empresa = $id  ORDER by id_relcom ASC";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn49_rrelacioncomercial_xid -- fn49 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn49_rreferencia_xid($id,$tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM referencia WHERE id_empresa = $id AND tipo_referencia=$tipo   ORDER by id_referencia  ASC";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn49_rreferencia_xid -- fn49 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn49_rzona_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT c.lugar_zona as canton , pr.lugar_zona as provincia , p.lugar_zona as pais "
                . "from zona c , zona pr , zona p where c.codigopadre_zona=pr.id_zona "
                . "and pr.codigopadre_zona=p.id_zona and c.id_zona='$id'";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn49_rzona_x -- fn49";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('canton' => $menu['canton'],
                'provincia' => $menu['provincia'],
                'pais' => $menu['pais']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
}
