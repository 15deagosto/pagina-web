<?php
class Fn_97 {
    function fn97_rpaginasextra_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM paginasextra p , menupag m WHERE estado_paginaex != -1 and p.id_menupag=m.id_menupag ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn97_rpaginasextra_all -- fn97 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn97_rtextos_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM textos WHERE estado_texto = 1 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn97_rtextos_alltp -- fn97 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn97_ctextos_xdata($titulo_texto, $texto_texto, $resumen_texto, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha=date('Y-m-d');
        $sql = "INSERT INTO textos(titulo_texto, texto_texto, fecha_texto, tipo_texto, resumen_texto, estado_texto) "
                . " VALUES ('$titulo_texto', '$texto_texto', '$fecha', 0, $resumen_texto, $estado) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
        
    }
    
    function fn97_rpaginasextra_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM paginasextra p , menupag m WHERE id_paginaex=$id and p.id_menupag=m.id_menupag";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn97_rtextos_x -- fn97";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_paginaex' => $menu['id_paginaex'],
                'titulo_paginaex' => $menu['titulo_paginaex'],
                'tipo_paginaex' => $menu['tipo_paginaex'],
                'text1_paginaex' => $menu['text1_paginaex'],
                'text2_paginaex' => $menu['text2_paginaex'],
                'text3_paginaex' => $menu['text3_paginaex'],
                'url_paginaex' => $menu['url_paginaex'],
                'estado_paginaex' => $menu['estado_paginaex'],
                'imagen_paginaex' => $menu['imagen_paginaex'],
                'nombre_menupag' => $menu['nombre_menupag'],
                'id_menupag' => $menu['id_menupag']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn97_upaginasextra_x($titulo_paginaex, $text1_paginaex,$text2_paginaex,$text3_paginaex, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE paginasextra SET titulo_paginaex = '$titulo_paginaex', text1_paginaex = '$text1_paginaex', text2_paginaex = '$text2_paginaex', text3_paginaex = '$text3_paginaex' "
                . " WHERE id_paginaex = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn97_upaginasextra_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE paginasextra SET estado_paginaex = $estado  "
                . " WHERE id_paginaex = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn97_upaginasextra_xtip($id,$tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE paginasextra SET tipo_paginaex = $tipo  "
                . " WHERE id_paginaex = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    
    
    function fn97_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn97_tipo_xid($tip){
        $res="";
        if($tip==0){
            $res="TEMPLATE 1 ";
        }if($tip==1){
           $res="TEMPLATE 2"; 
        }
        return $res;
    }
    
    function fn97_uimg_xid($id,$img) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE paginasextra SET imagen_paginaex = '$img'  "
                . " WHERE id_paginaex = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}
