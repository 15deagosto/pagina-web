<?php
class Fn_62 {
    function fn62_rtextos_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM textos WHERE estado_texto != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn62_rtextos_all -- fn62 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn62_rtextos_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM textos WHERE estado_texto = 1 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn62_rtextos_alltp -- fn62 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn62_ctextos_xdata($titulo_texto, $texto_texto, $resumen_texto,$desc_texto, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha=date('Y-m-d');
        $sql = "INSERT INTO textos(titulo_texto, texto_texto, fecha_texto, tipo_texto, resumen_texto,desc_texto, estado_texto) "
                . " VALUES ('$titulo_texto', '$texto_texto', '$fecha', 0, '$resumen_texto','$desc_texto' $estado) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
        
    }
    
    function fn62_rtextos_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from textos where id_texto = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn62_rtextos_x -- fn62";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_texto' => $menu['id_texto'],
                'titulo_texto' => $menu['titulo_texto'],
                'resumen_texto' => $menu['resumen_texto'],
                'texto_texto' => $menu['texto_texto'],
                'fecha_texto' => $menu['fecha_texto'],
                'tipo_texto' => $menu['tipo_texto'],
                'desc_texto' => $menu['desc_texto'],
                'estado_texto' => $menu['estado_texto'],
                'img_texto' => $menu['img_texto'],
                'car1_texto' => $menu['car1_texto'],
                'car2_texto' => $menu['car2_texto'],
                'car3_texto' => $menu['car3_texto'],
                'link_texto' => $menu['link_texto']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn62_utextos_x($titulo_texto, $texto_texto, $resumen_texto,$desc_texto,$car1_texto,$car2_texto,$car3_texto, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE textos SET titulo_texto = '$titulo_texto', texto_texto = '$texto_texto', "
                . "resumen_texto = '$resumen_texto', desc_texto='$desc_texto',car1_texto='$car1_texto',car2_texto='$car2_texto', "
                . " car3_texto='$car3_texto' WHERE id_texto = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn62_utextos_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE textos SET estado_texto = $estado  "
                . " WHERE id_texto = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn62_utextos_xtip($id,$tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE textos SET tipo_texto = $tipo  "
                . " WHERE id_texto = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    
    
    function fn62_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn62_tipo_xid($tip){
        $res="";
        if($tip==1){
            $res="BUENAS PRÁCTICAS AMBIENTALES";
        }if($tip==2){
           $res="TRASPARENCIA"; 
        }if ($tip==3){
           $res="POLÍTICA DE PRIVACIDAD"; 
        }if ($tip==4){
           $res="RESPONSABILIDAD SOCIAL"; 
        }if ($tip==5){
           $res="MISION Y VISION"; 
        }
        return $res;
    }
    
    function fn62_uimg_xid($id,$img) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE textos SET img_texto = '$img'  "
                . " WHERE id_texto = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}
