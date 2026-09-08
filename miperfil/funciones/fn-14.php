<?php
class Fn_14 {
    function fn14_rusuario_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from usuario where id_usuario = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
           // print_r($_SESSION['sesioncacec']);
            //echo 'wwwwww';
            echo "Error fn14_rusuario_x -- fn11";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_usuario' => $menu['id_usuario'],
                'nombre_usuario' => $menu['nombre_usuario'],
                'apellido_usuario' => $menu['apellido_usuario'],
                'email_usuario' => $menu['email_usuario'],
                'clave_usuario' => $menu['clave_usuario'],
                'fechacreacion_usuario' => $menu['fechacreacion_usuario'],
                'fechacaduca_usuario' => $menu['fechacaduca_usuario'],
                'ingreso_usuario' => $menu['ingreso_usuario'],
                'id_rol' => $menu['id_rol'],
                'estado_usuario' => $menu['estado_usuario'],
                'id_zona' => $menu['id_zona'],
                'sexo_usuario' => $menu['sexo_usuario'],
                'foto_usuario' => $menu['foto_usuario'],
                'direccion_usuario' => $menu['direccion_usuario'],
                'telefono_usuario' => $menu['telefono_usuario'],
                'telefono2_usuario' => $menu['telefono2_usuario']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
}
