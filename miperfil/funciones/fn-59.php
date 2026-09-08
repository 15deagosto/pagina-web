<?php
class Fn_59 {

    function fn59_rhorarios_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM horario WHERE estado_horario != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn59_rhorarios_all -- fn59 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn59_chorarios_x($dia_horario, $hora_inicio, $hora_final, $tipo_horario, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO horario(dia_horario, horaini_horario, horafin_horario, tipo_horario, estado_horario) "
                . " VALUES ('$dia_horario', '$hora_inicio', '$hora_final', '$tipo_horario', '$estado') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn59_rhorarios_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from horario where id_horario = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn59_rhorarios_x -- fn59";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_horario' => $menu['id_horario'],
                'dia_horario' => $menu['dia_horario'],
                'horaini_horario' => $menu['horaini_horario'],
                'horafin_horario' => $menu['horafin_horario'],
                'tipo_horario' => $menu['tipo_horario'],
                'estado_horario' => $menu['estado_horario']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn59_uhorarios_x($dia_horario, $hora_inicio, $hora_final, $tipo_horario, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE horario SET dia_horario = '$dia_horario', horaini_horario = '$hora_inicio', horafin_horario = '$hora_final', tipo_horario = '$tipo_horario' "
                . " WHERE id_horario = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn59_uhorarios_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE horario SET estado_horario = $estado  "
                . " WHERE id_horario = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}
