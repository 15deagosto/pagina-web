<?php
class Fn_69 {
    function fn69_rmenupag_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM menupag WHERE estado_menupag != -1 and idpadre_menupag = 0 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn69_rmenupag_all -- fn69 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn69_rmenupag_xpadre($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM menupag WHERE estado_menupag != -1 and idpadre_menupag = $id ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn69_rmenupag_all -- fn69 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn69_rtextos_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM textos WHERE estado_texto = 1 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn69_rtextos_alltp -- fn69 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn69_cmenupag_xdata($nombre_menupag, $icono_menupag) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha=date('Y-m-d');
        $sql = "INSERT INTO menupag(nombre_menupag, url_menupag, estado_menupag, icono_menupag, tipo_menupag, idpadre_menupag,target_menupag,desc_menupag) "
                . " VALUES ('$nombre_menupag', '', 0, '$icono_menupag', 0, 0,0,'') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
        
    }
    function fn69_cmenupag2_xdata($nombre_menupag, $url_menupag,$target_menupag,$idpadre_menupag,$desc_menupag,$tipo2_menupag) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha=date('Y-m-d');
        $sql = "INSERT INTO menupag(nombre_menupag, url_menupag, estado_menupag, icono_menupag, tipo_menupag, idpadre_menupag,target_menupag,desc_menupag,tipo2_menupag) "
                . " VALUES ('$nombre_menupag', '$url_menupag', 0, '', 0, $idpadre_menupag,$target_menupag,'$desc_menupag',$tipo2_menupag) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = $mysqlidato->insert_id;
        }
        return $cuenta;
        
    }
    
    function fn69_rmenupag_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from menupag where id_menupag = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn69_rmenupag_x -- fn69";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_menupag' => $menu['id_menupag'],
                'nombre_menupag' => $menu['nombre_menupag'],
                'url_menupag' => $menu['url_menupag'],
                'estado_menupag' => $menu['estado_menupag'],
                'icono_menupag' => $menu['icono_menupag'],
                'tipo_menupag' => $menu['tipo_menupag'],
                'tipo2_menupag' => $menu['tipo2_menupag'],
                'idpadre_menupag' => $menu['idpadre_menupag'],
                'desc_menupag' => $menu['desc_menupag'],
                'target_menupag' => $menu['target_menupag']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn69_umenupag_x($nombre_menupag, $icono_menupag, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE menupag SET nombre_menupag = '$nombre_menupag', icono_menupag = '$icono_menupag' "
                . " WHERE id_menupag = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn69_umenupag2_x($nombre_menupag, $url_menupag,$target_menupag,$desc_menupag,$tipo2_menupag, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE menupag SET nombre_menupag = '$nombre_menupag', url_menupag = '$url_menupag', target_menupag = $target_menupag , desc_menupag = '$desc_menupag',  tipo2_menupag = $tipo2_menupag "
                . " WHERE id_menupag = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn69_umenupag_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE menupag SET estado_menupag = $estado  "
                . " WHERE id_menupag = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn69_umenupag_xtip($id,$tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE menupag SET tipo_menupag = $tipo  "
                . " WHERE id_menupag = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn69_umenupag_submen_xtip($id,$tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE menupag SET tipo_menupag = $tipo  "
                . " WHERE idpadre_menupag = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    
    
    function fn69_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn69_tipo_xid($tip){
        $res="";
        if($tip==0){
            $res="PIE DE PÁGINA";
        }if($tip==1){
           $res="MENÚ"; 
        }
        return $res;
    }
    function fn69_taget_xid($tip){
        $res="";
        if($tip==0){
            $res="Interna";
        }if($tip==1){
           $res="Externa"; 
        }
        return $res;
    }
    function fn69_tipo2_xid($tip){
        $res="";
        if($tip==0){
            $res="Existente";
        }if($tip==1){
           $res="Nueva"; 
        }
        return $res;
    }
    
    function fn69_cpaginasextra_xdata($titulo_paginaex, $tipo_paginaex,$id_menupag) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha=date('Y-m-d');
        $sql = "INSERT INTO paginasextra(titulo_paginaex, tipo_paginaex, id_menupag) "
                . " VALUES ('$titulo_paginaex', $tipo_paginaex, $id_menupag) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
        
    }
    
    function fn69_rpaginasextra_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from paginasextra where id_menupag = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn69_rmenupag_x -- fn69";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_paginaex' => $menu['id_paginaex'],
                'titulo_paginaex' => $menu['titulo_paginaex'],
                'tipo_paginaex' => $menu['tipo_paginaex'],
                'text1_paginaex' => $menu['text1_paginaex'],
                'text3_paginaex' => $menu['text3_paginaex'],
                'url_paginaex' => $menu['url_paginaex'],
                'estado_paginaex' => $menu['estado_paginaex'],
                'imagen_paginaex' => $menu['imagen_paginaex'],
                'id_menupag' => $menu['id_menupag']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    
}
