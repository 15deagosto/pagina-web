<?php

class Fn_report {

    //FUNCIONES DE LOS 2 REPORTES
    function fnrep_rfunciones_xidf($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM financiador WHERE id_finan = $id";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rfunciones_xidf";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rfunciones_xidfunico($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM financiador WHERE id_finan = $id limit 0,1";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn202_rfinanciamiento_partida_concepto_x -- fn202 ";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_finan' => $menu['id_finan'],
                'nombre_finan' => $menu['nombre_finan'],
                'ident_finan' => $menu['ident_finan'],
                'estado_finan' => $menu['estado_finan']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rcosto_xidfinancosto($id_finan, $costopadre) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM costo c WHERE id_finan = $id_finan and id_padrecosto=$costopadre";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rcosto_xidfinancosto -- fn202 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rpartidas_xidfinancosto($id_finan, $id_costo, $id_padrepartida, $j, $stylecolorceldas4, $stylecolorceldas7, $nombrecosto, $objPHPExcel, $activo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM partida c WHERE id_finan = $id_finan and id_costo=$id_costo and id_padrepartida=$id_padrepartida and estado_partida=1";
        // echo $sql2;
        $a = new Fn_report();
        $f = 1;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn202_rfinanciamiento_partida_concepto_x -- fn202 ";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            //$nombrepartida=$nombrepartida.'/'.$menu['nombre_partida'].'<br>';
            $nombrepartida = utf8_encode($menu['nombre_partida']);
            //echo $nombrepartida;
            $id_partidapadre = $menu['id_partida'];
            $objPHPExcel->getActiveSheet()->getStyle("A" . $j)->getFont()->setSize(8);
//            if ($activo == 1) {
//                $objPHPExcel->getActiveSheet()->getStyle('A' . $j . ':T' . $j)->applyFromArray($stylecolorceldas4);
//            }
//            if ($activo == 2) {
//
//                $objPHPExcel->getActiveSheet()->getStyle('A' . $j . ':T' . $j)->applyFromArray($stylecolorceldas7);
//            }

            $sql_subpartidas = "SELECT * FROM partida c WHERE id_finan = $id_finan and id_padrepartida=$id_partidapadre and estado_partida=1";
            $resultado_subpartidas = $mysqlidato->query($sql_subpartidas);
            if ($resultado_subpartidas->num_rows > 0) {
                $id_costo = 0;
                $activo = 2;
                $j = $a->fnrep_rpartidas_xidfinancosto($id_finan, $id_costo, $id_partidapadre, $j + 1, $stylecolorceldas4, $stylecolorceldas7, $nombrecosto, $objPHPExcel, $activo);
            } else {
                //Esta funcion trae las partidas financiadas se deben agrupar y solo estas autocntar mayores a cero
                $concepto_partida = $a->fnrep_rfinanciamiento_xidfinan_partida_concepto($id_finan, $id_partidapadre);

                if (count($concepto_partida) > 0) {

                    $nombre_concepto = utf8_encode($concepto_partida[0]['nombre_concepto']);
                    $objPHPExcel->getActiveSheet()->setCellValue('A' . $j, ' FINANCIAMIENTO: ' . $nombre_concepto . '/' . $nombrepartida . '/' . $nombrecosto);
                    $objPHPExcel->getActiveSheet()->setCellValue('B' . $j, $concepto_partida[0]['producto_concepto']);
                    $factura = $a->fnrep_rfactura_xidfinan($concepto_partida[0]['id_financia']);
                    if (count($factura) > 0) {
                        $objPHPExcel->getActiveSheet()->setCellValue('C' . $j, $factura[0]['nombreprov_factura']);
                        $objPHPExcel->getActiveSheet()->setCellValue('D' . $j, $factura[0]['codigo_factura']);
                        $objPHPExcel->getActiveSheet()->setCellValue('E' . $j, $factura[0]['mes_factura']);
                        $objPHPExcel->getActiveSheet()->setCellValue('F' . $j, $factura[0]['concepto_factura']);
                        $objPHPExcel->getActiveSheet()->setCellValue('G' . $j, $factura[0]['fecha_factura']);
                        $objPHPExcel->getActiveSheet()->setCellValue('H' . $j, $factura[0]['fechapago_factura']);
                        $objPHPExcel->getActiveSheet()->setCellValue('I' . $j, $factura[0]['acredita_factura']);
                        $objPHPExcel->getActiveSheet()->setCellValue('J' . $j, number_format($factura[0]['valor_factura'], 2) . '$');
                        $financiadoresextra = $a->fnfinextra_partida($id_partidapadre,$id_finan);
                        if (count($financiadoresextra) > 0) {
                            $objPHPExcel->getActiveSheet()->setCellValue('K21', $financiadoresextra[0]['nombre_finan']);
                            $concepto_partidaextra = $a->fnrep_rfinanciamiento_xidfinan_partida($financiadoresextra[0]['id_finan'], $id_partidapadre);
                            if (count($concepto_partidaextra) > 0) {
                                $objPHPExcel->getActiveSheet()->setCellValue('K' . $j, $concepto_partidaextra[0]['valor_factura']);
                                $objPHPExcel->getActiveSheet()->setCellValue('L' . $j, 0);
                            }
                        }
                        if (count($financiadoresextra) > 1) {
                            $letras = array('M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'V', 'W', 'X', 'Y', 'Z');
                            $i = 0;
                            $d = 0;
                            while ($i < count($financiadoresextra)) {
                                $objPHPExcel->getActiveSheet()->setCellValue($letras[$d] . '22', $financiadoresextra[$i]['nombre_finan']);
                                $concepto_partidaextra = $a->fnrep_rfinanciamiento_xidfinan_partida($financiadoresextra[$i]['id_finan'], $id_partidapadre);
                                if (count($concepto_partidaextra) > 0) {
                                    $objPHPExcel->getActiveSheet()->setCellValue($letras[$d] . '' . $j, $concepto_partidaextra[0]['valor_factura']);
                                    $objPHPExcel->getActiveSheet()->setCellValue($letras[$d] . '' . $j, 0);
                                }
                                
                                $i++;
                                $d = $d + 2;
                            }
                        }
                    } else {
                        $objPHPExcel->getActiveSheet()->setCellValue('C' . $j, 'S/N');
                        $objPHPExcel->getActiveSheet()->setCellValue('D' . $j, 'S/N');
                        $objPHPExcel->getActiveSheet()->setCellValue('E' . $j, 'S/N');
                        $objPHPExcel->getActiveSheet()->setCellValue('F' . $j, 'S/N');
                        $objPHPExcel->getActiveSheet()->setCellValue('G' . $j, 'S/N');
                        $objPHPExcel->getActiveSheet()->setCellValue('H' . $j, 'S/N');
                        $objPHPExcel->getActiveSheet()->setCellValue('I' . $j, 'S/N');
                        $objPHPExcel->getActiveSheet()->setCellValue('J' . $j, number_format(0, 2) . '$');
                    }
                    $f++;
                } else {
                    $objPHPExcel->getActiveSheet()->getStyle('A' . $j . ':T' . $j)->applyFromArray($stylecolorceldas4);
                    $objPHPExcel->getActiveSheet()->setCellValue('A' . $j, ' ' . $nombrepartida . '/' . $nombrecosto);
                    //$objPHPExcel->getActiveSheet()->setCellValue('B' . $j, $f);
                }
            }



            $j++;
        }
        $arreglo = $j;
        $mysqlidato->close();
        return $arreglo;
    }

    function fnfinextra_partida($id_partidapadre,$id_finan) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM partida p,financiador f WHERE p.id_finan=f.id_finan and p.id_finan!=$id_finan and id_partida = $id_partidapadre";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnfinextra_partida -- fn202 ";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_finan' => $menu['id_finan'],
                'nombre_finan' => $menu['nombre_finan'],
                'ident_finan' => $menu['ident_finan'],
                'estado_finan' => $menu['estado_finan']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rfinanciamiento_xidfinan_partida_concepto($id_finan, $id_partidapadre) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM financiamiento f, concepto c WHERE c.id_concepto=f.id_concepto and id_finan = $id_finan and id_partida=$id_partidapadre";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rfinanciamiento_xidfinan_partida_concepto -- fn202 ";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_financia' => $menu['id_financia'],
                'cantidad_financia' => $menu['cantidad_financia'],
                'id_finan' => $menu['id_finan'],
                'id_concepto' => $menu['id_concepto'],
                'restric_financia' => $menu['restric_financia'],
                'estado_financia' => $menu['estado_financia'],
                'id_partida' => $menu['id_partida'],
                'nombre_concepto' => $menu['nombre_concepto'],
                'cantidad_concepto' => $menu['cantidad_concepto'],
                'costouni_concepto' => $menu['costouni_concepto'],
                'producto_concepto' => $menu['producto_concepto']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rfinanciamiento_xidfinan_partida($id_finan, $id_partidapadre) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM financiamiento f, factura c WHERE c.id_financia=f.id_financia and f.id_finan = $id_finan and f.id_partida=$id_partidapadre";
        
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rfactura_xidfinan -- fn202 ";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_factura' => $menu['id_factura'],
                'nombreprov_factura' => $menu['nombreprov_factura'],
                'codigo_factura' => $menu['codigo_factura'],
                'mes_factura' => $menu['mes_factura'],
                'concepto_factura' => $menu['concepto_factura'],
                'fecha_factura' => $menu['fecha_factura'],
                'fechapago_factura' => $menu['fechapago_factura'],
                'acredita_factura' => $menu['acredita_factura'],
                'valor_factura' => $menu['valor_factura'],
                'estado_factura' => $menu['estado_factura'],
                'doc_factura' => $menu['doc_factura'],
                'id_financia' => $menu['id_financia']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rfactura_xidfinan($id_financia) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM factura WHERE id_financia = $id_financia";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rfactura_xidfinan -- fn202 ";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_factura' => $menu['id_factura'],
                'nombreprov_factura' => $menu['nombreprov_factura'],
                'codigo_factura' => $menu['codigo_factura'],
                'mes_factura' => $menu['mes_factura'],
                'concepto_factura' => $menu['concepto_factura'],
                'fecha_factura' => $menu['fecha_factura'],
                'fechapago_factura' => $menu['fechapago_factura'],
                'acredita_factura' => $menu['acredita_factura'],
                'valor_factura' => $menu['valor_factura'],
                'estado_factura' => $menu['estado_factura'],
                'doc_factura' => $menu['doc_factura'],
                'id_financia' => $menu['id_financia']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rconceptovalor_xidproyecto($id_proy) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT sum(cantidad_concepto*costouni_concepto) as suma FROM concepto WHERE id_proy = $id_proy";
        // $arreglo =0;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            // echo "Error fnrep_rconceptovalor_xidproyecto -- fn202 ";
            $arreglo = 0;
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $arreglo = $menu['suma'];
        }
        $mysqlidato->close();
        //return $arreglo;
    }

    function fnrep_rproyecto_xidf($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM proyecto WHERE id_proy = $id limit 0,1";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn202_rfinanciamiento_partida_concepto_x -- fn202 ";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_proy' => $menu['id_proy'],
                'nombre_proy' => $menu['nombre_proy'],
                'desc_proy' => $menu['desc_proy'],
                'obj_proy' => $menu['obj_proy'],
                'tiempo_proy' => $menu['tiempo_proy'],
                'estado_proy' => $menu['estado_proy']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rpartidas_xidf($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM financiamiento f, partida p WHERE f.id_finan = $id AND f.id_partida = p.id_partida";
        echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rpartidas_xidf";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rpartpadre_xidf($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM partida WHERE id_partida = $id";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rpartidas_xidf";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rpadrepartida_xid($id, $idpartida) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM financiamiento f, partida p WHERE f.id_finan = $id AND f.id_partida = $idpartida AND f.id_partida = p.id_partida";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rpartidas_xidf";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_ridcosto_xidf($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM costo WHERE id_costo = $id";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rpartidas_xidf";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rcospadre_xidf($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM costo WHERE id_costo = $id";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rpartidas_xidf";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rpartidas_xid($idcospartida) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM partida WHERE id_costo = $idcospartida";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rpartidas_xidf";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rconcepto_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM concepto WHERE id_concepto = $id";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rpartidas_xidf";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnrep_rfacturas_xidc($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM factura WHERE id_concepto = $id";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnrep_rpartidas_xidf";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

}
