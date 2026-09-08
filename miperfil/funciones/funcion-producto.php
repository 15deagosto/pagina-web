<?php

class Producto {

    ///// PRODUCTO REVISION
    function trae_productoestado0() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto p,categoriasprod c,proveedor e where e.id_proveedor=p.id_proveedor and c.id_catprod=p.id_catprod order by id_prod DESC";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe noticias.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'desc_prod' => $menu['desc_prod'],
                'precio1_prod' => $menu['precio1_prod'],
                'precio2_prod' => $menu['precio2_prod'],
                'precio3_prod' => $menu['precio3_prod'],
                'estado_prod' => $menu['estado_prod'],
                'id_catprod' => $menu['id_catprod'],
                'car1_prod' => $menu['car1_prod'],
                'car2_prod' => $menu['car2_prod'],
                'cod_prod' => $menu['cod_prod'],
                'nombre_catprod' => $menu['nombre_catprod'],
                'id_catprod' => $menu['id_catprod'],
                'img_prod' => $menu['img_prod'],
                'id_proveedor' => $menu['id_proveedor'],
                'nombre_proveedor' => $menu['nombre_proveedor']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function trae_productoxcategoria($idcategoria) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto p,categoriasprod c,proveedor e where e.id_proveedor=p.id_proveedor and c.id_catprod=p.id_catprod and p.id_catprod=".$idcategoria." order by id_prod DESC";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe la categoría.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'desc_prod' => $menu['desc_prod'],
                'precio1_prod' => $menu['precio1_prod'],
                'precio2_prod' => $menu['precio2_prod'],
                'precio3_prod' => $menu['precio3_prod'],
                'estado_prod' => $menu['estado_prod'],
                'id_catprod' => $menu['id_catprod'],
                'car1_prod' => $menu['car1_prod'],
                'car2_prod' => $menu['car2_prod'],
                'cod_prod' => $menu['cod_prod'],
                'nombre_catprod' => $menu['nombre_catprod'],
                'id_catprod' => $menu['id_catprod'],
                'img_prod' => $menu['img_prod'],
                'id_proveedor' => $menu['id_proveedor'],
                'nombre_proveedor' => $menu['nombre_proveedor']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function trae_productoxestado($idestado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto p,categoriasprod c,proveedor e where e.id_proveedor=p.id_proveedor and c.id_catprod=p.id_catprod and p.estado_prod=".$idestado." order by id_prod DESC";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe la categoría.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'desc_prod' => $menu['desc_prod'],
                'precio1_prod' => $menu['precio1_prod'],
                'precio2_prod' => $menu['precio2_prod'],
                'precio3_prod' => $menu['precio3_prod'],
                'estado_prod' => $menu['estado_prod'],
                'id_catprod' => $menu['id_catprod'],
                'car1_prod' => $menu['car1_prod'],
                'car2_prod' => $menu['car2_prod'],
                'cod_prod' => $menu['cod_prod'],
                'nombre_catprod' => $menu['nombre_catprod'],
                'id_catprod' => $menu['id_catprod'],
                'img_prod' => $menu['img_prod'],
                'id_proveedor' => $menu['id_proveedor'],
                'nombre_proveedor' => $menu['nombre_proveedor']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    

    ///// PRODUCTO APROBADO
    function trae_productoestado1() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto p,categoriasprod c where c.id_catprod=p.id_catprod and estado_prod=1 order by id_prod DESC";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe noticias.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'desc_prod' => $menu['desc_prod'],
                'precio1_prod' => $menu['precio1_prod'],
                'precio2_prod' => $menu['precio2_prod'],
                'precio3_prod' => $menu['precio3_prod'],
                'estado_prod' => $menu['estado_prod'],
                'id_catprod' => $menu['id_catprod'],
                'car1_prod' => $menu['car1_prod'],
                'car2_prod' => $menu['car2_prod'],
                'cod_prod' => $menu['cod_prod'],
                'nombre_catprod' => $menu['nombre_catprod'],
                'id_catprod' => $menu['id_catprod'],
                'img_prod' => $menu['img_prod'],
                'id_proveedor' => $menu['id_proveedor'],
                'nombre_proveedor' => $menu['nombre_proveedor']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function trae_producto3() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto p,categoriasprod c where c.id_catprod=p.id_catprod and estado_prod=3 order by id_prod DESC";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe noticias.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'desc_prod' => $menu['desc_prod'],
                'precio1_prod' => $menu['precio1_prod'],
                'precio2_prod' => $menu['precio2_prod'],
                'precio3_prod' => $menu['precio3_prod'],
                'estado_prod' => $menu['estado_prod'],
                'id_catprod' => $menu['id_catprod'],
                'car1_prod' => $menu['car1_prod'],
                'car2_prod' => $menu['car2_prod'],
                'cod_prod' => $menu['cod_prod'],
                'nombre_catprod' => $menu['nombre_catprod'],
                'id_catprod' => $menu['id_catprod'],
                'img_prod' => $menu['img_prod'],
                'id_proveedor' => $menu['id_proveedor'],
                'nombre_proveedor' => $menu['nombre_proveedor']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function imagenproducto($idproducto) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from imagenproducto where id_prod=".$idproducto."";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe noticias.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_imagen' => $menu['id_imagen'],
                'nombre_imagen' => $menu['nombre_imagen'],
                'url_imagen' => $menu['url_imagen'],
                'tamanio_imagen' => $menu['tamanio_imagen'],
                'id_prod' => $menu['id_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function trae_categoria() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from categoriasprod where id_catprod!=0";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe noticias.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_catprod' => $menu['id_catprod'],
                'nombre_catprod' => $menu['nombre_catprod'],
                'url_catprod' => $menu['url_catprod'],
                'desc_catprod' => $menu['desc_catprod'],
                'estado_catprod' => $menu['estado_catprod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function trae_proveedor() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from proveedor where id_proveedor!=0";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe noticias.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_proveedor' => $menu['id_proveedor'],
                'nombre_proveedor' => $menu['nombre_proveedor'],
                'representa_proveedor' => $menu['representa_proveedor'],
                'telefono_proveedor' => $menu['telefono_proveedor'],
                'estado_proveedor' => $menu['estado_proveedor']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    

    function trae_subcategoria($categoria) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from categoriasprod where id_catprod=" . $categoria . " order by id_catprod DESC";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe noticias.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_catprod' => $menu['id_catprod'],
                'nombre_catprod' => $menu['nombre_catprod'],
                'url_catprod' => $menu['url_catprod'],
                'padre_catprod' => $menu['padre_catprod'],
                'desc_catprod' => $menu['desc_catprod'],
                'tipo_catprod' => $menu['tipo_catprod'],
                'estado_catprod' => $menu['estado_catprod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function trae_estado($estado) {
        $res = "ACTIVO";
        if ($estado == 1) {
            $res = "ACTIVO";
        } elseif ($estado == 0) {
            $res = "INACTIVO";
        }
        return $res;
    }

    

    function trae_estadocheck($estado) {
        $res = "";
        if ($estado == 1) {
            $res = "checked";
        } elseif ($estado == 0) {
            $res = "";
        }
        return $res;
    }

    function trae_tipo($idtipo) {
        $res = "CATEGORÍA";
        if ($idtipo == 1) {
            $res = "CATEGORÍA";
        } elseif ($idtipo == 2) {
            $res = "SUBCATEGORÍA";
        }
        return $res;
    }

    function trae_estadoproducto($idestado) {
        $res = "REVISIÓN";
        if ($idestado == 0) {
            $res = "REVISIÓN";
        } elseif ($idestado == 1) {
            $res = "APROBADO";
        } elseif ($idestado == 2) {
            $res = "NUEVO";
        } elseif ($idestado == 3) {
            $res = "DESTACADO";
        }

        return $res;
    }

    //INGRESO NUEVOS PROGRAMAS
    function ingresoCategoria() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechaactual = date('Y-m-d');
        $cuenta = 0;
        $categoria = utf8_decode('NUEVA CATEGORIA');
        $cadena = "insert  into `categoriasprod`(`nombre_catprod`,url_catprod,desc_catprod,estado_catprod) "
                . "values ('" . $categoria . "','#','--',0)";
        //echo $cadena;
        //$returna=true;
        //$mysqlidato->query($cadena)
        if ($mysqlidato->query($cadena) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function ingresoProducto() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechaactual = date('Y-m-d');
        $cuenta = 0;
        $producto = utf8_decode('NUEVO PRODUCTO');
        $a=new Producto();
        $cuenta=$a->trae_productocodigowow();        
        $codigo="WOW000".$cuenta;    
        $cadena = "insert  into `producto`(`nombre_prod`,desc_prod,precio1_prod,precio2_prod,estado_prod,id_catprod,cod_prod) "
                . "values ('" . $producto . "','--',0,0,0,0,'".$codigo."')";
        echo $cadena;
        //$returna=true;
        //$mysqlidato->query($cadena)
        if ($mysqlidato->query($cadena) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function trae_productocodigowow() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT count(id_prod) as cuenta from producto";
        $arreglo = 0;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe noticias.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            if($menu['cuenta']==null){
                $arreglo = 0;
            }else{
                $arreglo = $menu['cuenta'];
            }
            
        }
        $mysqlidato->close();
        return $arreglo;
    }

}
