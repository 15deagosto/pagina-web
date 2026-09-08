<?php
class Fn42 {
    // SELECT TABLA DE VISITAS
    function get_visitas() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "select id_pagina,nombre_pagina,url_pagina,COUNT(id_pagina) as vp ,ip_pagina,"
                . "browser_pagina,sistema_pagina,final_pagina,hora_pagina,tipo_pagina from paginas "
                . "WHERE tipo_pagina=1 GROUP by nombre_pagina ORDER by vp  DESC LIMIT 0,20";
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
    function get_visitas_limit($limit) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "select id_pagina,nombre_pagina,url_pagina,COUNT(id_pagina) as vp ,ip_pagina,"
                . "browser_pagina,sistema_pagina,final_pagina,hora_pagina,tipo_pagina from paginas "
                . "WHERE tipo_pagina=1 GROUP by nombre_pagina ORDER by vp  DESC LIMIT 0,$limit";
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
    
    function get_pagvisitas() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "select id_pagina,nombre_pagina,url_pagina,COUNT(id_pagina) as vp ,ip_pagina,"
                . "browser_pagina,sistema_pagina,final_pagina,hora_pagina,tipo_pagina from paginas "
                . "WHERE tipo_pagina=1 GROUP by nombre_pagina ORDER by vp  DESC LIMIT 0,20";
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
    function get_navegavisitas() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "select id_pagina,nombre_pagina,url_pagina,COUNT(id_pagina) as vp ,ip_pagina,"
                . "browser_pagina,sistema_pagina,final_pagina,hora_pagina,tipo_pagina from paginas "
                . "WHERE tipo_pagina=1 GROUP by browser_pagina ORDER by vp  DESC LIMIT 0,20";
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
    
    function get_sovisitas() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "select id_pagina,nombre_pagina,url_pagina,COUNT(id_pagina) as vp ,ip_pagina,"
                . "browser_pagina,sistema_pagina,final_pagina,hora_pagina,tipo_pagina from paginas "
                . "WHERE tipo_pagina=1 GROUP by sistema_pagina ORDER by vp  DESC LIMIT 0,20";
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
    
    function get_visitas_filto($fdesde,$fhasta,$pag,$nav,$so) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtfiltro1 = '';
        if($pag!=''){
            $txtfiltro1 .= ' AND nombre_pagina = "'.$pag.'" ';
        }if($nav!=''){
            $txtfiltro1 .= ' AND browser_pagina  = "'.$nav.'" ';
        }if($so!=''){
            $txtfiltro1 .= ' AND sistema_pagina  = "'.$so.'" ';
        }       
        
        $sql2 = "select id_pagina,nombre_pagina,url_pagina,COUNT(id_pagina) as vp ,ip_pagina,"
                . "browser_pagina,sistema_pagina,final_pagina,hora_pagina,tipo_pagina from paginas "
                . "WHERE tipo_pagina=1 and final_pagina >= '$fdesde' and final_pagina<='$fhasta' $txtfiltro1 GROUP by nombre_pagina,browser_pagina,sistema_pagina ORDER by vp  DESC ";
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
    function get_visitas_filto1($fdesde,$fhasta,$pag,$nav,$so) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtfiltro1 = '';
        if($pag!=''){
            $txtfiltro1 .= ' AND nombre_pagina = "'.$pag.'" ';
        }if($nav!=''){
            $txtfiltro1 .= ' AND browser_pagina  = "'.$nav.'" ';
        }if($so!=''){
            $txtfiltro1 .= ' AND sistema_pagina  = "'.$so.'" ';
        }       
        
        $sql2 = "select id_pagina,nombre_pagina,url_pagina,COUNT(id_pagina) as vp ,ip_pagina,"
                . "browser_pagina,sistema_pagina,final_pagina,hora_pagina,tipo_pagina from paginas "
                . "WHERE tipo_pagina=1 and final_pagina >= '$fdesde' and final_pagina<='$fhasta' $txtfiltro1 GROUP by nombre_pagina ORDER by vp  DESC ";
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
    function get_visitas_filto2($fdesde,$fhasta,$pag,$nav,$so) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtfiltro1 = '';
        if($pag!=''){
            $txtfiltro1 .= ' AND nombre_pagina = "'.$pag.'" ';
        }if($nav!=''){
            $txtfiltro1 .= ' AND browser_pagina  = "'.$nav.'" ';
        }if($so!=''){
            $txtfiltro1 .= ' AND sistema_pagina  = "'.$so.'" ';
        }       
        
        $sql2 = "select id_pagina,nombre_pagina,url_pagina,COUNT(id_pagina) as vp ,ip_pagina,"
                . "browser_pagina,sistema_pagina,final_pagina,hora_pagina,tipo_pagina from paginas "
                . "WHERE tipo_pagina=1 and final_pagina >= '$fdesde' and final_pagina<='$fhasta' $txtfiltro1 GROUP by browser_pagina ORDER by vp  DESC ";
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
    
    function get_visitas_filto3($fdesde,$fhasta,$pag,$nav,$so) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtfiltro1 = '';
        if($pag!=''){
            $txtfiltro1 .= ' AND nombre_pagina = "'.$pag.'" ';
        }if($nav!=''){
            $txtfiltro1 .= ' AND browser_pagina  = "'.$nav.'" ';
        }if($so!=''){
            $txtfiltro1 .= ' AND sistema_pagina  = "'.$so.'" ';
        }       
        
        $sql2 = "select id_pagina,nombre_pagina,url_pagina,COUNT(id_pagina) as vp ,ip_pagina,"
                . "browser_pagina,sistema_pagina,final_pagina,hora_pagina,tipo_pagina from paginas "
                . "WHERE tipo_pagina=1 and final_pagina >= '$fdesde' and final_pagina<='$fhasta' $txtfiltro1 GROUP by sistema_pagina ORDER by vp  DESC ";
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
    
    function get_total($nombre) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM paginas WHERE nombre_pagina = '$nombre'";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe noticias.";
            exit;
        } else {
            $arreglo = $resultado2;
        }

        $mysqlidato->close();
        return $arreglo;
    }
}
