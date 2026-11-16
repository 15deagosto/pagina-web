<?php

class Fn_ahorro {

    function fnahorro_xget_ahorro($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $id = intval($id);
        $sql = "SELECT nombre_prod FROM producto WHERE id_prod = $id AND estado_prod = 1 LIMIT 1";
        $resultado = $mysqlidato->query($sql);
        $titulo = 'Cuenta de Ahorro';
        if ($resultado && $fila = $resultado->fetch_assoc()) {
            $titulo = $fila['nombre_prod'];
        }
        $mysqlidato->close();
        return $titulo;
    }

    function fnahorro_xdescget_ahorro($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $id = intval($id);
        $sql = "SELECT descripcion_prod FROM producto WHERE id_prod = $id AND estado_prod = 1 LIMIT 1";
        $resultado = $mysqlidato->query($sql);
        $desc = 'Encuentra la cuenta de ahorro que se ajusta a tus metas, con el respaldo de una cooperativa regulada por la SEPS.';
        if ($resultado && ($fila = $resultado->fetch_assoc()) && !empty($fila['descripcion_prod'])) {
            $desc = $fila['descripcion_prod'];
        }
        $mysqlidato->close();
        return $desc;
    }

    function fnahorro_xget_datos($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $id = intval($id);
        $sql = "SELECT texto1_prod, texto2_prod, texto3_prod FROM producto WHERE id_prod = $id AND estado_prod = 1 LIMIT 1";
        $resultado = $mysqlidato->query($sql);
        $datos = ['montos' => '', 'tasa' => '', 'notas' => ''];
        if ($resultado && $fila = $resultado->fetch_assoc()) {
            $datos['montos'] = $fila['texto1_prod'];
            $datos['tasa'] = $fila['texto2_prod'];
            $datos['notas'] = $fila['texto3_prod'];
        }
        $mysqlidato->close();
        return $datos;
    }

}
