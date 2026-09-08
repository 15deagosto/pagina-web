<?php
class Fn_102 {
    function fn102_rcarrusel_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM carrusel WHERE estado_carrusel != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn102_rcarrusel_all -- fn102 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn102_rtextos_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM imagenes WHERE estado_imagen = 1 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn102_rtextos_alltp -- fn102 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn102_cimagenes_xdata($nombre_imagen, $url_imagen) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        
        $sql = "INSERT INTO imagenes(nombre_imagen, url_imagen, estado_imagen, sitio_imagen) "
                . " VALUES ('$nombre_imagen', '$url_imagen', 0, 0) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
        
    }
    
    function fn102_rcarrousel_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from carrusel where id_carrusel = $id limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn102_rcarrousel_xid -- fn102";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_carrusel' => $menu['id_carrusel'],
                'img_carrusel' => $menu['img_carrusel'],
                'estado_carrusel' => $menu['estado_carrusel'],
                'url_carrusel' => $menu['url_carrusel'],
                'poc_carrusel' => $menu['poc_carrusel']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn102_uurl_x($url_carrusel, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE carrusel SET url_carrusel = '$url_carrusel' WHERE id_carrusel = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn102_uimagenes_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE imagenes SET estado_imagen = $estado  "
                . " WHERE id_imagen = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn102_uimagenes_xtip($id,$tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE imagenes SET tipo_imagen = $tipo  "
                . " WHERE id_imagen = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    
    
    function fn102_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn102_tipo_xid($tip){
        $res="IMÁGENES PÁGINAS";
        if($tip==1){
            $res="BANNER PAGINAS";
        }
        return $res;
    }
    
    function fn102_uimgcarusel_xid($id,$img) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE carrusel SET img_carrusel = '$img'  "
                . " WHERE id_carrusel = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn102_uimg2_xid($id,$img) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE imagenes SET img2_imagen = '$img'  "
                . " WHERE id_imagen = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}
