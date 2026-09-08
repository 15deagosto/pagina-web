<?php
class Fn_indicadores {
    function fnindex_rindicador($dato) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT year(fecha_indicador) as anio,dato_indicador,tipo_indicador,sucursal_indicador,estado_indicador,fecha_indicador "
                . "FROM indicadores where tipo_indicador = $dato and estado_indicador = 1 "
                . " order by anio asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rcrecimiento -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
}
