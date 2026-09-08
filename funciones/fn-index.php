<?php

class Fn_index {

    function separar_Texto($texto) {
        $palabras = explode(" ", $texto);
        $array1 = [$palabras[0]]; // Primera palabra
        $array2 = array_slice($palabras, 1); // Resto
        return [$array1, $array2];
    }

    function fnindex_rslider() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM slider where est_slider = 1 "
                . " order by id_slider asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rslider -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rredes() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM redes where estado_redes = 1 "
                . " order by id_redes asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rredes -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rcarrusel($sitio) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM carrusel where estado_carrusel = 1 and sitio_carrusel=$sitio "
                . " order by poc_carrusel asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rcarrusel -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rredes_xtipo($id_tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM redes"
                . " WHERE estado_redes = 1 and tipo_redes = $id_tipo ";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rredes_xtipo -- fnindex";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_redes' => $menu['id_redes'],
                'tipo_redes' => $menu['tipo_redes'],
                'url_redes' => $menu['url_redes'],
                'icono' => $menu['icono'],
                'estado_redes' => $menu['estado_redes']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_ravisos_x() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechaactual = date('Y-m-d');
        $sql2 = "SELECT * FROM avisos"
                . " WHERE est_avisos = 1 and fecini_avisos <= '$fechaactual' and fecfin_avisos>= '$fechaactual' order by id_avisos DESC ";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_ravisos_x -- fnindex";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_avisos' => $menu['id_avisos'],
                'img_avisos' => $menu['img_avisos'],
                'fecini_avisos' => $menu['fecini_avisos'],
                'fecfin_avisos' => $menu['fecfin_avisos'],
                'est_avisos' => $menu['est_avisos']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rredes_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM redes WHERE estado_redes = 1 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rredes_all -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtransparencia() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM transparencia where estado_transp = 1 "
                . " order by id_transp asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rtransparencia -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtestimonios() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM testimonios where est_testimonio = 1 "
                . " order by id_testimonio asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rtestimonios -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtestimoniosfecha() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha = date('Y-m-d');
        $sql2 = "SELECT * FROM testimonios where est_testimonio = 1 and fecini_testimonio<='$fecha' and fecfin_testimonio>='$fecha' "
                . " order by id_testimonio asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rtestimonios -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_ravisos_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechaactual = date('Y-m-d');
        $sql2 = "SELECT * FROM avisos WHERE fecini_avisos<='$fechaactual' and fecfin_avisos>='$fechaactual' and est_avisos = 1 limit 0,1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_ravisos_all -- fn92 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_ravisos_activo() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechaactual = date('Y-m-d');
        $sql2 = "SELECT * FROM avisos WHERE fecini_avisos<='$fechaactual' and fecfin_avisos>='$fechaactual' and est_avisos = 1 limit 0,1";
        ///echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnoticiadetallestado -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_avisos' => $menu['id_avisos'],
                'img_avisos' => $menu['img_avisos'],
                'fecini_avisos' => $menu['fecini_avisos'],
                'fecfin_avisos' => $menu['fecfin_avisos'],
                'est_avisos' => $menu['est_avisos'],
                'url_avisos' => $menu['url_avisos']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rhorarios() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM horario where estado_horario = 1 "
                . " order by id_horario asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rhorarios -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_ravisos() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM avisos where est_avisos = 1 "
                . " order by id_avisos asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rhorarios -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnoticiaestado($estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha = date('Y-m-d');
        $sql2 = "SELECT * FROM noticias where estado_noticia = 1 and tipo_noticia=$estado "
                . " order by id_noticia asc limit 0,1";
        ///echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rhorarios -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnoticiadetallestado($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM noticias where id_noticia = $id limit 0,1";
        ///echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnoticiadetallestado -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_noticia' => $menu['id_noticia'],
                'titulo_noticia' => $menu['titulo_noticia'],
                'resumen_noticia' => $menu['resumen_noticia'],
                'detalle_noticia' => $menu['detalle_noticia'],
                'fechainicio_noticia' => $menu['fechainicio_noticia'],
                'fechafin_noticia' => $menu['fechafin_noticia'],
                'tipo_noticia' => $menu['tipo_noticia'],
                'img_noticia' => $menu['img_noticia'],
                'estado_noticia' => $menu['estado_noticia'],
                'banner_noticia' => $menu['banner_noticia']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnoticiaactivas($tipo, $escala) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha = date('Y-m-d');
        $sql2 = "SELECT * FROM noticias where fechainicio_noticia<='$fecha' and fechafin_noticia>='$fecha' and estado_noticia = 1 and tipo_noticia=$tipo "
                . " order by id_noticia asc limit 0,$escala";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnoticiaactivas -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtextosxtipo($tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM textos where tipo_texto = $tipo and estado_texto=1 limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnoticiadetallestado -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_texto' => $menu['id_texto'],
                'titulo_texto' => $menu['titulo_texto'],
                'resumen_texto' => $menu['resumen_texto'],
                'texto_texto' => $menu['texto_texto'],
                'fecha_texto' => $menu['fecha_texto'],
                'fechafin_noticia' => $menu['fechafin_noticia'],
                'tipo_texto' => $menu['tipo_texto'],
                'estado_texto' => $menu['estado_texto'],
                'desc_texto' => $menu['desc_texto'],
                'desc2_texto' => $menu['desc2_texto'],
                'img_texto' => $menu['img_texto'],
                'tipo_texto' => $menu['tipo_texto'],
                'car1_texto' => $menu['car1_texto'],
                'car2_texto' => $menu['car2_texto'],
                'car3_texto' => $menu['car3_texto'],
                'link_texto' => $menu['link_texto']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rimagen_sitio($sitio_imagen) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM imagenes where sitio_imagen = $sitio_imagen and estado_imagen=1 limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rimagen_sitio -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_imagen' => $menu['id_imagen'],
                'nombre_imagen' => $menu['nombre_imagen'],
                'url_imagen' => $menu['url_imagen'],
                'imagen_imagen' => $menu['imagen_imagen'],
                'estado_imagen' => $menu['estado_imagen'],
                'sitio_imagen' => $menu['sitio_imagen'],
                'img2_imagen' => $menu['img2_imagen'],
                'tipo_imagen' => $menu['tipo_imagen']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_ragencia() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros WHERE estado_nosotros = 1 order by posicion_nosotros  ";
        ///echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_ragencia -- fn54";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnosotros_id($id_nosotros) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros where id_nosotros=$id_nosotros and estado_nosotros=1 limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rimagen_sitio -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_nosotros' => $menu['id_nosotros'],
                'nombre_nosotros' => $menu['nombre_nosotros'],
                'tele1_nosotros' => $menu['tele1_nosotros'],
                'tele2_nosotros' => $menu['tele2_nosotros'],
                'red1_nosotros' => $menu['red1_nosotros'],
                'red2_nosotros' => $menu['red2_nosotros'],
                'x_nosotros' => $menu['x_nosotros'],
                'y_nosotros' => $menu['y_nosotros'],
                'email1_nosotros' => $menu['email1_nosotros'],
                'email2_nosotros' => $menu['email2_nosotros'],
                'direccion_nosotros' => $menu['direccion_nosotros'],
                'cuidad_nosotros' => $menu['cuidad_nosotros'],
                'link_nosotros' => $menu['link_nosotros'],
                'tipo_nosotros' => $menu['tipo_nosotros'],
                'horario_nosotros' => $menu['horario_nosotros'],
                'estado_nosotros' => $menu['estado_nosotros'],
                'imagen_nosotros' => $menu['imagen_nosotros']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn54_cpaginas_xvisita($pagina, $ip) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $a = new Fn_index();
        $fecha = date('Y-m-d');
        $hora = date('H:m:s');
        $pagina = utf8_decode($pagina);
        $paginaxip = $a->fnindex_rippagina($pagina, $ip);
        $sql = "";
        if ($paginaxip->num_rows > 0) {
            $sql = "update paginas set visitas_pagina=visitas_pagina+1 where ip_pagina='$ip'";
        } else {
            $sql = "INSERT INTO paginas(nombre_pagina, url_pagina, visitas_pagina,ip_pagina,final_pagina,hora_pagina) "
                    . " VALUES ('$pagina', '$pagina', 1, '$ip', '$fecha', '$hora') ";
        }

        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fnindex_rippagina($pagina, $ip) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM paginas where nombre_pagina='$pagina' and ip_pagina='$ip'";
        ///echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rippagina -- fn54";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    public function fnindex_tasa_x() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tasa WHERE estado_tasa = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_creditos_x";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_r_ciudad($id_zona) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from zona where nivel_zona = 3 and codigopadre_zona = '" . $id_zona . "'"
                . " order by lugar_zona asc ";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fntrabaja_zona -- fn60";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_zona' => $menu['id_zona'],
                'lugar_zona' => $menu['lugar_zona'],
                'codigopadre_zona ' => $menu['codigopadre_zona '],
                'nivel_zona' => $menu['nivel_zona'],
                'codigoarea_zona' => $menu['codigoarea_zona']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_r_provincia() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from zona where nivel_zona = 2 order by lugar_zona asc ";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_r_provincia -- fn60";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_zona' => $menu['id_zona'],
                'lugar_zona' => $menu['lugar_zona'],
                'codigopadre_zona ' => $menu['codigopadre_zona '],
                'nivel_zona' => $menu['nivel_zona'],
                'codigoarea_zona' => $menu['codigoarea_zona']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtextos_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM textos WHERE estado_texto = 1 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fninfex_rtextos_alles -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtextos_xtipe($tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM textos WHERE estado_texto = 1 and tipo_texto=$tipo ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rtextos_xtipe -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rpersonal_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM personal WHERE estado_per != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rpersonal_all -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rdocumentos_tipo($tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM documentos WHERE tipo3_doc = $tipo and estado_doc=1   ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rdocumentos_tipo -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rdocumentos_all($tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM documentos WHERE estado_doc = 1 and tipo3_doc= $tipo";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rdocumentos_all -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_r_documentos_xid($id_doc) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM documentos WHERE id_doc = $id_doc ";
        ///echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_r_documentos_xid -- fn60";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_doc' => $menu['id_doc'],
                'titulo_doc' => $menu['titulo_doc'],
                'url_doc' => $menu['url_doc'],
                'imagen_doc' => $menu['imagen_doc'],
                'tipo1_doc' => $menu['tipo1_doc'],
                'fecha_doc' => $menu['fecha_doc'],
                'estado_doc' => $menu['estado_doc'],
                'tipo3_doc' => $menu['tipo3_doc']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_r_tasaspa_xid($id_tasapa) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tasaspa WHERE id_tasapa = $id_tasapa ";
        ///echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_r_tasaspa_xid -- fn60";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_tasapa' => $menu['id_tasapa'],
                'nombre_tasapa' => $menu['nombre_tasapa'],
                'desc_tasapa' => $menu['desc_tasapa'],
                'estado_tasapa' => $menu['estado_tasapa'],
                'tipo_tasapa' => $menu['tipo_tasapa']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_tipotrans_xtipo($tipo) {
        $res = "";
        if ($tipo == 1) {
            $res = "INSTRUCTIVO";
        } else if ($tipo == 2) {
            $res = "INDICADORES";
        } else if ($tipo == 3) {
            $res = "GOBERNANZA";
        } else if ($tipo == 4) {
            $res = "INFORMACIÓN FINANCIERA";
        } else if ($tipo == 5) {
            $res = "COSEDE";
        } else if ($tipo == 6) {
            $res = "ORGANIGRAMA";
        }
        return $res;
    }

    function fnindex_rdocumentos_alltp() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM documentos WHERE estado_doc = 1   ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rdocumentos_alltp -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rproducto_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto p INNER JOIN linea_credito lc ON p.id_lineacred=lc.id_lineacred  WHERE estado_prod = 1 order by posicion_prod asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rproducto_alles -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtestimonios_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM testimonios WHERE est_testimonio = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rtestimonios_alles -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnoticias_xarrayall() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM noticias WHERE estado_noticia = 1 order by id_noticia desc";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnoticias_xarrayall -- fnindex";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_noticia' => $menu['id_noticia'],
                'titulo_noticia' => $menu['titulo_noticia'],
                'resumen_noticia' => $menu['resumen_noticia'],
                'detalle_noticia' => $menu['detalle_noticia'],
                'fechainicio_noticia' => $menu['fechainicio_noticia'],
                'fechafin_noticia' => $menu['fechafin_noticia'],
                'tipo_noticia' => $menu['tipo_noticia'],
                'imagenvideo_noticia' => $menu['imagenvideo_noticia'],
                'id_usuario' => $menu['id_usuario'],
                'estado_noticia' => $menu['estado_noticia'],
                'set_imgvideo' => $menu['set_imgvideo'],
                'img_noticia' => $menu['img_noticia'],
                'img2_noticia' => $menu['img2_noticia']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnoticias_xall() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM noticias WHERE estado_noticia = 1 order by fechainicio_noticia desc limit 0,2";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnoticias_xall -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnoticias_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM noticias WHERE estado_noticia = 1 order by fechainicio_noticia desc limit 0,3";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnoticias_alles -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnoticias_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from noticias where id_noticia = $id limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnoticias_x -- fnindex";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_noticia' => $menu['id_noticia'],
                'titulo_noticia' => $menu['titulo_noticia'],
                'resumen_noticia' => $menu['resumen_noticia'],
                'detalle_noticia' => $menu['detalle_noticia'],
                'fechainicio_noticia' => $menu['fechainicio_noticia'],
                'fechafin_noticia' => $menu['fechafin_noticia'],
                'tipo_noticia' => $menu['tipo_noticia'],
                'imagenvideo_noticia' => $menu['imagenvideo_noticia'],
                'id_usuario' => $menu['id_usuario'],
                'estado_noticia' => $menu['estado_noticia'],
                'set_imgvideo' => $menu['set_imgvideo'],
                'img_noticia' => $menu['img_noticia'],
                'img2_noticia' => $menu['img2_noticia']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_reducacion_financiera_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM educacion_financiera WHERE estado_edfi = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_reducacion_financiera_alles -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rproducto_xtextoses($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from producto where id_prod = " . $id . " AND estado_prod = 1 limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rproducto_xtextoses -- fnindex";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'descripcion_prod' => $menu['descripcion_prod'],
                'tipo_prod' => $menu['tipo_prod'],
                'imagen1_prod' => $menu['imagen1_prod'],
                'imagen2_prod' => $menu['imagen2_prod'],
                'texto1_prod' => $menu['texto1_prod'],
                'texto2_prod' => $menu['texto2_prod'],
                'texto3_prod' => $menu['texto3_prod'],
                'codERP_prod' => $menu['codERP_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnosotros_alles($tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros WHERE estado_nosotros =1 AND tipo_nosotros=$tipo ORDER by posicion_nosotros ASC";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnosotros_alles -- fn51 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn54_cagregarcampos() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();

        $sql = "ALTER TABLE avisos ADD url_avisos varchar(300);";

        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fnindex_rproductoarray_xtipo($id_tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = " SELECT * FROM producto "
                . " WHERE tipo_prod = $id_tipo and estado_prod = 1 "
                . " order by posicion_prod asc ";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rproductoarray_xtipo -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'id_lineacred' => $menu['id_lineacred'],
                'nombre_prod' => $menu['nombre_prod'],
                'imagen1_prod' => $menu['imagen1_prod'],
                'imagen2_prod' => $menu['imagen2_prod'],
                'texto1_prod' => $menu['texto1_prod'],
                'texto2_prod' => $menu['texto2_prod'],
                'texto3_prod' => $menu['texto3_prod'],
                'tipo_prod' => $menu['tipo_prod'],
                'estado_prod' => $menu['estado_prod'],
                'icon_prod' => $menu['icon_prod'],
                'posicion_prod' => $menu['posicion_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rproducto_xtipo($id_tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = " SELECT * FROM producto "
                . " WHERE tipo_prod = $id_tipo and estado_prod = 1 "
                . " order by posicion_prod asc ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rproducto_xtipo -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnosotros_x() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = " SELECT * FROM nosotros "
                . " WHERE estado_nosotros = 1 "
                . " order by posicion_nosotros desc ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnosotros_x -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnosotrosbancos_xidnosotros($id_nosotros) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = " SELECT * FROM banco_nosotros "
                . " WHERE estado_bnosotros = 1 and id_nosotros=$id_nosotros ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnosotrosbancos_xidnosotros -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rproducto2_xtipo($id_tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = " SELECT * FROM producto "
                . " WHERE tipo_prod = $id_tipo "
                . " order by nombre_prod asc limit 0,1";
        ///echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rdetvacante_xid -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rproducto_xtitpoidprod($id_tipo, $id_prod) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = " SELECT * FROM producto "
                . " WHERE tipo_prod = $id_tipo and id_prod != $id_prod "
                . " order by nombre_prod asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rproducto_xtipo -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rvacante() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM vacante where estado_vacante = 1 "
                . " order by id_vacante desc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rvacante -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rdetvacante_xid($idvacante) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechaactual = date('Y-m-d');
        $sql2 = "SELECT * FROM vacante WHERE id_vacante = $idvacante limit 0,1";
        ///echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rdetvacante_xid -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_vacante' => $menu['id_vacante'],
                'nombre_vacante' => $menu['nombre_vacante'],
                'tiempo_vacante' => $menu['tiempo_vacante'],
                'desc_vacante' => $menu['desc_vacante'],
                'area_vacante' => $menu['area_vacante'],
                'funcion_vacante' => $menu['funcion_vacante'],
                'presencia_vacante' => $menu['presencia_vacante'],
                'lugar_vacante' => $menu['lugar_vacante'],
                'id_zona' => $menu['id_zona'],
                'niveleduca_vacante' => $menu['niveleduca_vacante'],
                'requisitos_vacante' => $menu['requisitos_vacante'],
                'fechain_vacante' => $menu['fechain_vacante'],
                'fechaout_vacante' => $menu['fechaout_vacante'],
                'estado_vacante' => $menu['estado_vacante'],
                'frame_vacante' => $menu['frame_vacante']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rindicador_xtipo2_maxmin($idtipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT MIN(anio_indicadormes) as minanio , MAX(anio_indicadormes) as maxanio , desc_indicador FROM indicador_mes im , indicador i "
                . "WHERE im.id_indicador= i.id_indicador and i.tipo2_indicador=$idtipo group by desc_indicador ";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rindicador_xtipo2_maxmin -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('minanio' => $menu['minanio'],
                'desc_indicador' => $menu['desc_indicador'],
                'maxanio' => $menu['maxanio']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rindicador_xtipo2($idtipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM indicador WHERE tipo2_indicador = $idtipo and estado_indicador =1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rindicador_xtipo2 -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rindicadormes_xidindicador($idindicador, $anio) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM  indicador_mes WHERE id_indicador = $idindicador and anio_indicadormes = $anio "
                . "and valor_indicadormes>0 order by mes_indicadormes  ";
        // echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rindicadormes_xidindicador -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rzona_all($nivel, $search) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM zona where nivel_zona = $nivel and codigopadre_zona='$search' order by lugar_zona asc  ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rzona_all -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rzona2_all($nivel, $search) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM zona zp where nivel_zona = $nivel and codigopadre_zona='$search' "
                . "order by lugar_zona asc   ";
//        $sql2 = "SELECT * FROM zona zp where nivel_zona = $nivel and codigopadre_zona='$search' "
//                . "and id_zona in(SELECT codigopadre_zona FROM zona z, nosotros n where z.id_zona = zona_nosotros group by lugar_zona order by lugar_zona asc) "
//                . "order by lugar_zona asc   ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rzona_all -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rzona3_all($nivel, $search) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM zona z where nivel_zona = $nivel and codigopadre_zona='$search' group by lugar_zona  order by lugar_zona asc  ";
//        $sql2 = "SELECT * FROM zona z,  nosotros n where z.id_zona = zona_nosotros and nivel_zona = $nivel and codigopadre_zona='$search' group by lugar_zona  order by lugar_zona asc  ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rzona_all -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rzona_nosotros() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT id_nosotros, cuidad_nosotros FROM nosotros GROUP by cuidad_nosotros order by cuidad_nosotros asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rzona_nosotros -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnosotros($search) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros where estado_nosotros=1 ";
//        $sql2 = "SELECT * FROM nosotros where zona_nosotros = '$search' ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnosotros -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_getBrowser($user_agent) {

        if (strpos($user_agent, 'MSIE') !== FALSE)
            return 'Internet explorer';
        elseif (strpos($user_agent, 'Edg') !== FALSE) //Microsoft Edge
            return 'Microsoft Edge';
        elseif (strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
            return 'Microsoft Edge';
        elseif (strpos($user_agent, 'Trident') !== FALSE) //IE 11
            return 'Internet explorer';
        elseif (strpos($user_agent, 'Opera Mini') !== FALSE)
            return "Opera Mini";
        elseif (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
            return "Opera";
        elseif (strpos($user_agent, 'Firefox') !== FALSE)
            return 'Mozilla Firefox';
        elseif (strpos($user_agent, 'Chrome') !== FALSE)
            return 'Google Chrome';
        elseif (strpos($user_agent, 'Safari') !== FALSE)
            return "Safari";
        else
            return 'No hemos podido detectar su navegador';
    }

    function fnindex_getBrowser_version($user_agent) {

        $array = explode(" ", $user_agent);

        $posicion = count($array) - 1;
        $agent = $array[$posicion];
        $array_version = explode("/", $agent);
//            print_r($array_version);
        $version = $array_version[1];
        if (strpos($array_version[0], 'MSIE') !== FALSE)
            return 'Internet explorer v.' . $version;
        elseif (strpos($array_version[0], 'Edg') !== FALSE) //Microsoft Edge
            return 'Microsoft Edge v.' . $version;
        elseif (strpos($array_version[0], 'Edge') !== FALSE) //Microsoft Edge
            return 'Microsoft Edge v.' . $version;
        elseif (strpos($array_version[0], 'Trident') !== FALSE) //IE 11
            return 'Internet explorer v.' . $version;
        elseif (strpos($array_version[0], 'Opera Mini') !== FALSE)
            return "Opera Mini v." . $version;
        elseif (strpos($array_version[0], 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
            return "Opera v." . $version;
        elseif (strpos($array_version[0], 'Firefox') !== FALSE)
            return 'Mozilla Firefox v.' . $version;
        elseif (strpos($array_version[0], 'Chrome') !== FALSE)
            return 'Google Chrome v.' . $version;
        elseif (strpos($array_version[0], 'Safari') !== FALSE)
            return "Safari v." . $version;
        else
            return 'No hemos podido detectar su navegador';
    }

    function fnindex_getPlatform($user_agent) {
        $plataformas = array(
            'Windows 10' => 'Windows NT 10.0+',
            'Windows 8.1' => 'Windows NT 6.3+',
            'Windows 8' => 'Windows NT 6.2+',
            'Windows 7' => 'Windows NT 6.1+',
            'Windows Vista' => 'Windows NT 6.0+',
            'Windows XP' => 'Windows NT 5.1+',
            'Windows 2003' => 'Windows NT 5.2+',
            'Windows' => 'Windows otros',
            'iPhone' => 'iPhone',
            'iPad' => 'iPad',
            'Mac OS X' => '(Mac OS X+)|(CFNetwork+)',
            'Mac otros' => 'Macintosh',
            'Android' => 'Android',
            'BlackBerry' => 'BlackBerry',
            'Linux' => 'Linux',
        );
        foreach ($plataformas as $plataforma => $pattern) {
            if (preg_match('/(?i)' . $pattern . '/', $user_agent))
                return $plataforma;
        }
        return 'Otras';
    }

    function fnindex_verifiview($navegador, $SO, $ip_add, $pagname, $tipo_pagina) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "select * from paginas where browser_pagina = ? and sistema_pagina = ? and ip_pagina = ? and nombre_pagina = ? and tipo_pagina = ?";
        //echo $navegador;
        $stmt = $mysqlidato->prepare($sql2);
        $stmt->bind_param("ssssi", $navegador, $SO, $ip_add, $pagname, $tipo_pagina);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $arreglo = array();
        while ($datos = $resultado->fetch_assoc()) {
            $datosNuevos = array('id_pagina' => $datos['id_pagina'],
                'nombre_pagina' => $datos['nombre_pagina'],
                'url_pagina' => $datos['url_pagina'],
                'visitas_pagina' => $datos['visitas_pagina'],
                'ip_pagina' => $datos['ip_pagina'],
                'browser_pagina' => $datos['browser_pagina'],
                'sistema_pagina' => $datos['sistema_pagina'],
                'final_pagina' => $datos['final_pagina'],
                'hora_pagina' => $datos['hora_pagina']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_u_view_xdata($id_pagina) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechaactual = date('Y-m-d');
        $horaactual = date('h:i:s');
        $sql2 = "UPDATE paginas set visitas_pagina = visitas_pagina + 1, final_pagina = ?, hora_pagina = ?"
                . " WHERE id_pagina = ? ";
        //echo $sql2;
        $resultado = 0;
        $stmt = $mysqlidato->prepare($sql2);
        if ($stmt->bind_param("ssi", $fechaactual, $horaactual, $id_pagina)) {
            if ($stmt->execute()) {
                $resultado = 1;
            } else {
                echo 'Error' . $stmt->error;
                $resultado = 0;
            }
        } else {
            $resultado = 0;
        }
        $mysqlidato->close();
        return $resultado;
    }

    function fnindex_c_view_xdata($nombre_pagina, $url_pagina, $ip_pagina, $browser_pagina, $sistema_pagina, $tipo_pagina, $lugar) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechaactual = date('Y-m-d');
        $horaactual = date('h:i:s');
        $sql2 = "INSERT INTO paginas (nombre_pagina, url_pagina, visitas_pagina, ip_pagina, browser_pagina, sistema_pagina, final_pagina, hora_pagina,tipo_pagina,lugar_pagina)"
                . " VALUES (?,?,1,?,?,?,?,?,?,?)";
        $resultado = 0;
        $stmt = $mysqlidato->prepare($sql2);
        //echo $sql2;
        if ($stmt->bind_param("sssssssis", $nombre_pagina, $url_pagina, $ip_pagina, $browser_pagina, $sistema_pagina, $fechaactual, $horaactual, $tipo_pagina, $lugar)) {
            if ($stmt->execute()) {
                //echo $stmt->errno;
                $resultado = 1;
            } else {
                //echo $stmt->error;
                $resultado = 0;
            }
        } else {
            $resultado = 0;
        }
        //echo 'ERROR: ' . $stmt->error;
        $mysqlidato->close();
        return $resultado;
    }

    function fnindex_verifiviewtest() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "select * from paginas ";
        //echo $navegador;
        $stmt = $mysqlidato->prepare($sql2);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $arreglo = array();
        while ($datos = $resultado->fetch_assoc()) {
            $datosNuevos = array('id_pagina' => $datos['id_pagina'],
                'nombre_pagina' => $datos['nombre_pagina'],
                'url_pagina' => $datos['url_pagina'],
                'visitas_pagina' => $datos['visitas_pagina'],
                'ip_pagina' => $datos['ip_pagina'],
                'browser_pagina' => $datos['browser_pagina'],
                'sistema_pagina' => $datos['sistema_pagina'],
                'final_pagina' => $datos['final_pagina'],
                'hora_pagina' => $datos['hora_pagina']);
            array_push($arreglo, $datos['ip_pagina']);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtasanm_xidprod($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT max(tasanominal_tasa), min(min_tasa), max(max_tasa),min(valmin_tasa),max(valmax_tasa) FROM tasa WHERE estado_tasa = 1 and id_prod = $id limit 0,1";
        //echo $sql2;
        $arreglo = array();

        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rtasa_xidprod -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('min_tasa' => $menu['min(min_tasa)'],
                'max_tasa' => $menu['max(max_tasa)'],
                'tasanominal_tasa' => $menu['max(tasanominal_tasa)'],
                'valmin_tasa' => $menu['min(valmin_tasa)'],
                'valmax_tasa' => $menu['max(valmax_tasa)']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtasanmahorro_xidprod($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT tasanominal_tasa,nombre_prod FROM tasa t, producto p "
                . "WHERE t.id_prod=p.id_prod and estado_tasa = 1 and t.id_prod = $id limit 0,1";
        //echo $sql2;
        $arreglo = array();

        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rtasanmahorro_xidprod -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('tasanominal_tasa' => $menu['tasanominal_tasa'],
                'nombre_prod' => $menu['nombre_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rnosotros_xdi($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechaactual = date('Y-m-d');
        $sql2 = "SELECT * FROM nosotros WHERE id_nosotros=$id limit 0,1";
        ///echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnosotros_xdi -- fnindex";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_nosotros' => $menu['id_nosotros'],
                'nombre_nosotros' => $menu['nombre_nosotros'],
                'tele1_nosotros' => $menu['tele1_nosotros'],
                'red1_nosotros' => $menu['red1_nosotros'],
                'red2_nosotros' => $menu['red2_nosotros'],
                'red3_nosotros' => $menu['red3_nosotros'],
                'red4_nosotros' => $menu['red4_nosotros'],
                'red5_nosotros' => $menu['red5_nosotros'],
                'red6_nosotros' => $menu['red6_nosotros'],
                'x_nosotros' => $menu['x_nosotros'],
                'y_nosotros' => $menu['y_nosotros'],
                'direccion_nosotros' => $menu['direccion_nosotros'],
                'cuidad_nosotros' => $menu['cuidad_nosotros'],
                'horario_nosotros' => $menu['horario_nosotros'],
                'link_nosotros' => $menu['link_nosotros']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rvacante_xdate($search) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtsearch = '';
        if ($search != '') {
            $txtsearch = ' and nombre_vacante like "%' . $search . '%"';
        }
        $sql2 = "SELECT * FROM  vacante where estado_vacante = 1 $txtsearch "
                . " order by fechain_vacante desc ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rvacante_xdate -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rredes_x() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from redes where estado_redes  = 1 ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rredes_x -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rpreguntas_frecuentes_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM preguntas_frecuentes WHERE estado_prefrec = 1 order by orden_prefrec asc";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rpreguntas_frecuentes_all -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtransparencia_xidpadre($id_padre, $tipo_transp) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM transparencia WHERE estado_transp = 1 and pertenece_transp=$id_padre "
                . "and tipo_transp=$tipo_transp order by fecha_transp desc";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rtransparencia_all -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_reducacion_financiera() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha = date('Y-m-d');
        $sql2 = "SELECT * FROM educacion_financiera where  estado_edfi = 1  "
                . " order by orden_edfi asc ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_reducacion_financiera -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_reducacion_financiera_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from educacion_financiera where id_edfi = $id limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rnoticias_x -- fnindex";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_edfi' => $menu['id_edfi'],
                'titulo_edfi' => $menu['titulo_edfi'],
                'url_edfi' => $menu['url_edfi'],
                'fecha_edfi' => $menu['fecha_edfi'],
                'descripcion_edfi' => $menu['descripcion_edfi'],
                'orden_edfi' => $menu['orden_edfi'],
                'imagen_edfi' => $menu['imagen_edfi'],
                'img1_edfi' => $menu['img1_edfi'],
                'img2_edfi' => $menu['img2_edfi'],
                'img3_edfi' => $menu['img3_edfi']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_reducacion_financiera_xnext($id, $step) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        if ($step == 1) {
            $sql2 = "SELECT * from educacion_financiera where id_edfi > $id limit 0,1";
        } else if ($step == 0) {
            $sql2 = "SELECT * from educacion_financiera where id_edfi < $id limit 0,1";
        }

        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_reducacion_financiera_xnext -- fnindex";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_edfi' => $menu['id_edfi'],
                'titulo_edfi' => $menu['titulo_edfi'],
                'url_edfi' => $menu['url_edfi'],
                'descripcion_edfi' => $menu['descripcion_edfi'],
                'orden_edfi' => $menu['orden_edfi'],
                'imagen_edfi' => $menu['imagen_edfi']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rmenupag_xtipe($id, $tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM menupag  WHERE estado_menupag = 1 and idpadre_menupag=$id and tipo_menupag = $tipo";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rmenupag_xtipe -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rmenupagpadre_xtipe($id, $tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM menupag  WHERE estado_menupag = 1 and idpadre_menupag=$id and tipo_menupag = $tipo order by id_menupag DESC";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rmenupag_xtipe -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rpaginasextra_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM paginasextra p , menupag m WHERE m.id_menupag=$id and p.id_menupag=m.id_menupag limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rpaginasextra_x -- fnindex";
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

    function fnindex_rimagenes_xtipe($tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM imagenes WHERE estado_imagen = 1 and sitio_imagen = $tipo ";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn98_rtextos_x -- fn98";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_imagen' => $menu['id_imagen'],
                'nombre_imagen' => $menu['nombre_imagen'],
                'url_imagen' => $menu['url_imagen'],
                'imagen_imagen' => $menu['imagen_imagen'],
                'estado_imagen' => $menu['estado_imagen'],
                'sitio_imagen' => $menu['sitio_imagen']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rimagenes_xtipesitio($sitio, $tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM imagenes WHERE estado_imagen = 1 and sitio_imagen = $sitio and tipo_imagen = $tipo ";
        //echo $sql2;
        $arreglo = array();
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
                'img2_imagen' => $menu['img2_imagen']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtasas_xtipo($tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tasaspa WHERE estado_tasapa = 1 and tipo_tasapa = $tipo ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn98_rtextos_x -- fn98";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rquejas_xid() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT id_queja FROM quejas order by id_queja desc limit 0,1 ";
        //echo $sql2;
        $arreglo = 0;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rquejas_xid -- fn98";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $arreglo = $menu['id_queja'] + 1;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rproducto_xsearch($search) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = " SELECT * FROM producto  WHERE nombre_prod like '%$search%' order by nombre_prod asc  ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rproducto_xsearch -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rmenupag_xsearch($search) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = " SELECT * FROM menupag  WHERE nombre_menupag like '%$search%' and idpadre_menupag!=0 order by nombre_menupag asc   ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rproducto_xsearch -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rcategoriacomercio() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM  categoriacomercio where estado_catcom=1 order by nombre_catcom asc ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rcategoriacomercio -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rcategoriacomercio2($ids) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM  categoriacomercio where estado_catcom=1 and id_catcom not in ($ids) order by nombre_catcom asc ";
        // echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rcategoriacomercio2 -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rcategoriacomercio_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM  categoriacomercio where id_catcom=$id order by nombre_catcom asc ";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rcategoriacomercio_xid -- fn98";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_catcom' => $menu['id_catcom'],
                'nombre_catcom' => $menu['nombre_catcom']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rcountindicador() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT nombre_indicador,tipo_indicador,desc_indicador FROM indicador i GROUP by tipo_indicador,desc_indicador ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rcountindicador -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rindicador_xtipo1_maxmin($idtipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT MIN(anio_indicadormes) as minanio , MAX(anio_indicadormes) as maxanio FROM indicador_mes im , indicador i "
                . "WHERE im.id_indicador= i.id_indicador and i.tipo_indicador=$idtipo ";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rindicador_xtipo1_maxmin -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('minanio' => $menu['minanio'],
                'maxanio' => $menu['maxanio']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rindicador_xtipo1($idtipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM indicador WHERE tipo2_indicador = $idtipo and estado_indicador =1 "
                . "order by id_indicador ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rindicador_xtipo1 -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rtiposerv() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tipo_servicio where estado_tiposerv = 1 "
                . " order by nombre_tiposerv asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rtiposerv -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rindicadorar_xtipo1_maxmin($idtipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM indicador WHERE tipo_indicador = $idtipo and estado_indicador =1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rindicadorar_xtipo1_maxmin -- fn54";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_indicador' => $menu['id_indicador'],
                'nombre_indicador' => $menu['nombre_indicador'],
                'tipo_indicador' => $menu['tipo_indicador']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rservicio_xtipo($id_tiposerv) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM servicio s, tipo_servicio t "
                . " where estado_servicio = 1 and s.id_tiposerv = $id_tiposerv "
                . " and s.id_tiposerv  = t.id_tiposerv and t.estado_tiposerv = 1 and s.estado_servicio = 1 "
                . " order by empresa_servicio asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rservicio_xtipo -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rvacante_usuario_maxid() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT max(id_vacanusu)as id FROM vacante_usuario  limit 0,1";
        //echo $sql2;
        $arreglo = array();

        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rtasa_xidprod -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = $menu['id'] + 1;
        }
        $mysqlidato->close();
        return $datosNuevos;
    }

    function fnindex_rresponsabilidad_socialactivas($tipo, $escala) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha = date('Y-m-d');
        $sql2 = "SELECT * FROM responsabilidad_social where fechainicio_respsocial<='$fecha' and fechafin_respsocial>='$fecha' and estado_respsocial = 1 and tipo_respsocial=$tipo "
                . " order by id_respsocial asc limit 0,$escala";
//        echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rresponsabilidad_socialactivas -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rresponsabilidad_social_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from responsabilidad_social where id_respsocial = $id limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rresponsabilidad_social_x -- fnindex";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_respsocial' => $menu['id_respsocial'],
                'titulo_respsocial' => $menu['titulo_respsocial'],
                'resumen_respsocial' => $menu['resumen_respsocial'],
                'detalle_respsocial' => $menu['detalle_respsocial'],
                'fechainicio_respsocial' => $menu['fechainicio_respsocial'],
                'fechafin_respsocial' => $menu['fechafin_respsocial'],
                'tipo_respsocial' => $menu['tipo_respsocial'],
                'imagenvideo_respsocial' => $menu['imagenvideo_respsocial'],
                'id_usuario' => $menu['id_usuario'],
                'estado_respsocial' => $menu['estado_respsocial'],
                'set_imgvideo' => $menu['set_imgvideo'],
                'img_respsocial' => $menu['img_respsocial'],
                'img2_respsocial' => $menu['img2_respsocial']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rservicios_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT segmento_servicios,empresa_servicios,valor_servicios,estado_servicios "
                . "FROM servicios where estado_servicios = 1 group by segmento_servicios,empresa_servicios,valor_servicios,estado_servicios order by segmento_servicios asc";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rservicios_all -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rservicios_xtext($search) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtsearch = '';
        if ($search != '') {
            $txtsearch = ' and segmento_servicios="' . $search . '" ';
        }
        $sql2 = "SELECT * FROM servicios where estado_servicios = 1 $txtsearch order by empresa_servicios   ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rservicios_xtext -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rlinea_credito_xall() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM linea_credito  WHERE estado_lineacred = 1 order by nombre_lineacred asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rlinea_credito_xall -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rproducto_xlinea($idlinea) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto p "
                . " INNER JOIN linea_credito lc ON p.id_lineacred=lc.id_lineacred  "
                . " WHERE estado_prod = 1 and p.id_lineacred = $idlinea order by posicion_prod asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rproducto_xlinea -- fnindex ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_rproducto_xlineaarray($idlinea) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto p "
                . " INNER JOIN linea_credito lc ON p.id_lineacred=lc.id_lineacred  "
                . " WHERE estado_prod = 1 and p.id_lineacred = $idlinea order by posicion_prod asc ";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rresponsabilidad_social_x -- fnindex";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'id_lineacred' => $menu['id_lineacred'],
                'nombre_prod' => $menu['nombre_prod'],
                'descripcion_prod' => $menu['descripcion_prod'],
                'imagen1_prod' => $menu['imagen1_prod'],
                'imagen2_prod' => $menu['imagen2_prod'],
                'texto1_prod' => $menu['texto1_prod'],
                'texto2_prod' => $menu['texto2_prod'],
                'texto3_prod' => $menu['texto3_prod'],
                'tipo_prod' => $menu['tipo_prod'],
                'estado_prod' => $menu['estado_prod'],
                'icon_prod' => $menu['icon_prod'],
                'posicion_prod' => $menu['posicion_prod'],
                'codERP_prod' => $menu['codERP_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
}
