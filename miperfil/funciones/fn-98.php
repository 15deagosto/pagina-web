<?php
class Fn_98 {
    function fn98_rimagenes_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM imagenes WHERE estado_imagen != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn98_rimagenes_all -- fn98 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn98_rtextos_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM imagenes WHERE estado_imagen = 1 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn98_rtextos_alltp -- fn98 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn98_cimagenes_xdata($nombre_imagen, $url_imagen) {
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
    
    function fn98_rimagenes_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from  imagenes where id_imagen = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn98_rtextos_x -- fn98";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_imagen' => $menu['id_imagen'],
                'nombre_imagen' => $menu['nombre_imagen'],
                'url_imagen' => $menu['url_imagen'],
                'imagen_imagen' => $menu['imagen_imagen'],
                'estado_imagen' => $menu['estado_imagen'],
                'sitio_imagen' => $menu['sitio_imagen'],
                'img2_imagen' => $menu['img2_imagen'],
                'tamanio_imagen' => $menu['tamanio_imagen']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn98_uimagenes_x($nombre_imagen, $url_imagen, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE imagenes SET nombre_imagen = '$nombre_imagen', url_imagen = '$url_imagen'"
                . " WHERE id_imagen = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn98_uimagenes_xest($id,$estado) {
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
    
    function fn98_uimagenes_xtip($id,$tipo) {
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
    
    
    
    function fn98_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn98_tipo_xid($tip){
        $res="IMÁGENES PÁGINAS";
        if($tip==1){
            $res="BANNER PAGINAS";
        }
        return $res;
    }
    
    function fn98_uimg_xid($id,$img) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE imagenes SET imagen_imagen = '$img'  "
                . " WHERE id_imagen = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn98_uimg2_xid($id,$img) {
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
