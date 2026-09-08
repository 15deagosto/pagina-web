<?php
class Fn_57 {

    function fn57_rslider_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM slider WHERE est_slider != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn57_rslider_all -- fn57 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn57_rslider_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM slider WHERE est_slider = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn57_rslider_all -- fn57 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn57_cslider_x($nombre, $desc, $url, $estado, $imagen) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO slider(nom_slider, img_slider, desc_slider, est_slider, url_slider) "
                . " VALUES ('$nombre', '$imagen', '$desc', '$estado', '$url') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn57_rslider_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from slider where id_slider = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn57_rslider_x -- fn57";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_slider' => $menu['id_slider'],
                'nom_slider' => $menu['nom_slider'],
                'img_slider' => $menu['img_slider'],
                'desc_slider' => $menu['desc_slider'],
                'est_slider' => $menu['est_slider'],
                'url_slider' => $menu['url_slider'],
                'img1_slider' => $menu['img1_slider'],
                'img2_slider' => $menu['img2_slider'],
                'hoffset1_slider' => $menu['hoffset1_slider'],
                'hoffset2_slider' => $menu['hoffset2_slider'],
                'voffset1_slider' => $menu['voffset1_slider'],
                'voffset2_slider' => $menu['voffset2_slider']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn57_uslider_x($nombre, $desc, $url,$hoffset1_slider,$hoffset2_slider,$voffset1_slider,$voffset2_slider, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE slider SET nom_slider = '$nombre', desc_slider = '$desc', url_slider = '$url',"
                . " hoffset1_slider=$hoffset1_slider,hoffset2_slider=$hoffset2_slider,voffset1_slider=$voffset1_slider, "
                . " voffset2_slider=$voffset2_slider WHERE id_slider = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    
    function fn57_uslider_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE slider SET est_slider = $estado  "
                . " WHERE id_slider = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn57_uslider_xImg($id_slider,$urlimagen) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE slider SET img_slider = '$urlimagen' "
                . " WHERE id_slider = $id_slider ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn57_uslider_xImg1($id_slider,$urlimagen) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE slider SET img1_slider = '$urlimagen' "
                . " WHERE id_slider = $id_slider ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn57_uslider_xImg2($id_slider,$urlimagen) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE slider SET img2_slider = '$urlimagen' "
                . " WHERE id_slider = $id_slider ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}
