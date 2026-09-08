<?php

class Fn_sesion {

    function fn_ruser_x($user, $pass) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $user = mysqli_real_escape_string($mysqlidato, $user);
        $pass = mysqli_real_escape_string($mysqlidato, $pass);
        $clave= md5($user.''.$pass);
        /*
        $sql2 = " SELECT * FROM usuario u,rol r"
                . " WHERE r.id_rol = u.id_rol and email_usuario='" . $user . "' 
	            and clave_usuario=MD5(CONCAT('" . $user . "''" . $pass . "')) "
                . " and estado_usuario!=0 limit 0,1";
        */
        $sql2 = " SELECT * FROM usuario u,rol r"
                . " WHERE r.id_rol = u.id_rol and email_usuario='".$user."' 
	            and clave_usuario=MD5(CONCAT('" . $user . "','" . $pass . "'))"
                . " and estado_usuario!=0 limit 0,1";
        //echo $sql2;
        
        $arreglo;
        //echo $sql2;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe un usuario con esos datos.";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
 function fn_ruserlist_x() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
      
        $sql2 = " SELECT * FROM usuario u,rol r"
                . " WHERE r.id_rol = u.id_rol and u.id_rol=1";
        //echo $sql2;
        
        $arreglo;
        //echo $sql2;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe un usuario con esos datos.";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function fn_uuser_xemail($email) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechavisita = date('Y-m-d');
        $sql = " UPDATE usuario SET ingreso_usuario='" . $fechavisita . "' 
				where email_usuario='" . $email . "'";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fnsesion_rusuario_xemail($email) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from usuario where email_usuario='" . $email . "' and estado_usuario = 1 ";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo " Error fnindex_rusuario_xemail -- fnindex";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_usuario' => $menu['id_usuario'],
                'nombre_usuario' => $menu['nombre_usuario'],
                'apellido_usuario' => $menu['apellido_usuario']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnsesion_cusuario_x($nombre, $apellido, $email, $fechacreacion, $fechacaduca, $ingreso, $id_rol, $direccion1, $ruc, $telf1, $pass) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO usuario(clave_usuario,nombre_usuario,apellido_usuario,email_usuario,fechacreacion_usuario,fechacaduca_usuario,ingreso_usuario,id_rol ,estado_usuario,foto_usuario,direccion1_usuario,ruc_usuario,telf1_usuario) "
                . " VALUES (MD5(CONCAT('" . $email . "','" . $pass . "')),'$nombre','$apellido','$email','$fechacreacion','$fechacaduca','$ingreso',$id_rol,1,'avatar_user.png','$direccion1','$ruc','$telf1') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fnsesion_checkemail($email) {
        $opc = 0;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $opc = 1;
        }
        return $opc;
    }

    function fnsesion_check_xidusu($email,$tiposocial,$password) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM usuario u, rol r WHERE u.id_rol=r.id_rol and email_usuario='$email' and estado_usuario = 1 "
                . " and tiposesion_usuario = $tiposocial and clave_usuario = MD5(CONCAT('" . $email . "','" . $password . "')) limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fns_check_xidusu";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_usuario' => $menu['id_usuario'],
                'nombre_usuario' => $menu['nombre_usuario'],
                'apellido_usuario' => $menu['apellido_usuario'],
                'email_usuario' => $menu['email_usuario'],
                'clave_usuario' => $menu['clave_usuario'],
                'fechacreacion_usuario' => $menu['fechacreacion_usuario'],
                'nombre_rol' => $menu['nombre_rol'],
                'fechacaduca_usuario' => $menu['fechacaduca_usuario'],
                'ingreso_usuario' => $menu['ingreso_usuario'],
                'id_rol' => $menu['id_rol'],
                'id_zona' => $menu['id_zona'],
                'sexo_usuario' => $menu['sexo_usuario'],
                'foto_usuario' => $menu['foto_usuario'],
                'direccion1_usuario' => $menu['direccion1_usuario'],
                'direccion2_usuario' => $menu['direccion2_usuario'],
                'id_empresa' => $menu['id_empresa'],
                'codigo_usuario' => $menu['codigo_usuario'],
                'tipo_cliente' => $menu['tipo_cliente'],
                'tiposesion_usuario' => $menu['tiposesion_usuario'],
                'telf1_usuario' => $menu['telf1_usuario']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fnsesion_udatein_xidusu($idusuario) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $hoy = date('Y-m-d');
        $sql = "UPDATE usuario set ingreso_usuario='" . $hoy . "' "
                . " where id_usuario=" . $idusuario . "";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fnsesion_rusuario_lastid() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT max(id_usuario) as cuenta FROM usuario ";
        //echo $sql2;
        $arreglo = 0;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe el producto.";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $arreglo =  $menu['cuenta'] + 1;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fnsesion_cuusuario_x($id_usuario,$nombre_usuario,$apellido_usuario,$email_usuario,$password,$foto_usuario,$tiposesion_usuario) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $hoy = date('Y-m-d');
        $caduca = date("Y-m-d",strtotime($hoy."+ 1 year"));
        $sql = "INSERT INTO `usuario`(`id_usuario`, `nombre_usuario`, "
                . "`apellido_usuario`, `email_usuario`, `clave_usuario`,"
                . " `fechacreacion_usuario`, `fechacaduca_usuario`, "
                . "`ingreso_usuario`, `id_rol`, `estado_usuario`, `id_zona`,"
                . " `sexo_usuario`, `foto_usuario`, `direccion1_usuario`, "
                . "`direccion2_usuario`, `ruc_usuario`, `id_empresa`, `codigo_usuario`, "
                . "`tipo_cliente`, `tiposesion_usuario`) "
                . " VALUES ($id_usuario,'$nombre_usuario','$apellido_usuario',"
                . " '$email_usuario',MD5(CONCAT('" . $email_usuario . "','" . $password . "')),"
                . " '$hoy','$caduca','$hoy',4,1,"
                . " 'EC1701','MASCULINO','$foto_usuario','','',"
                . " '',1,0,1,$tiposesion_usuario)";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fnsesion_generaPass() {
        //Se define una cadena de caractares. Te recomiendo que uses esta.
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        //Obtenemos la longitud de la cadena de caracteres
        $longitudCadena = strlen($cadena);

        //Se define la variable que va a contener la contraseña
        $pass = "";
        //Se define la longitud de la contraseña, en mi caso 10, pero puedes poner la longitud que quieras
        $longitudPass = 10;

        //Creamos la contraseña
        for ($i = 1; $i <= $longitudPass; $i++) {
            //Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
            $pos = rand(0, $longitudCadena - 1);

            //Vamos formando la contraseña en cada iteraccion del bucle, añadiendo a la cadena $pass la letra correspondiente a la posicion $pos en la cadena de caracteres definida.
            $pass .= substr($cadena, $pos, 1);
        }
        return $pass;
    }
    
    function fnsesion_ruser_xidusu($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM usuario u, rol r WHERE u.id_rol=r.id_rol and estado_usuario = 1 "
                . " and u.id_usuario = $id limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fns_check_xidusu";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_usuario' => $menu['id_usuario'],
                'nombre_usuario' => $menu['nombre_usuario'],
                'apellido_usuario' => $menu['apellido_usuario'],
                'email_usuario' => $menu['email_usuario'],
                'clave_usuario' => $menu['clave_usuario'],
                'fechacreacion_usuario' => $menu['fechacreacion_usuario'],
                'nombre_rol' => $menu['nombre_rol'],
                'fechacaduca_usuario' => $menu['fechacaduca_usuario'],
                'ingreso_usuario' => $menu['ingreso_usuario'],
                'id_rol' => $menu['id_rol'],
                'id_zona' => $menu['id_zona'],
                'sexo_usuario' => $menu['sexo_usuario'],
                'foto_usuario' => $menu['foto_usuario'],
                'direccion1_usuario' => $menu['direccion1_usuario'],
                'direccion2_usuario' => $menu['direccion2_usuario'],
                'id_empresa' => $menu['id_empresa'],
                'codigo_usuario' => $menu['codigo_usuario'],
                'tipo_cliente' => $menu['tipo_cliente'],
                'tiposesion_usuario' => $menu['tiposesion_usuario'],
                'telf1_usuario' => $menu['telf1_usuario']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fnsesion_rusuario_xemail2($email) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from usuario where email_usuario = '" . $email . "' ";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo " Error fntienda_rusuario_xid -- fntienda";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('nombre_usuario' => $menu['nombre_usuario'],
                'apellido_usuario' => $menu['apellido_usuario'],
                'email_usuario' => $menu['email_usuario']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fnsesion_cuusuarioinv_x($id_usuario, $nombre_usuario, $apellido_usuario, $email_usuario, $password, $foto_usuario, $tiposesion_usuario, $email2_usuario) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $hoy = date('Y-m-d');
        $caduca = date("Y-m-d", strtotime($hoy . "+ 1 year"));
        $sql = "INSERT INTO `usuario`(`id_usuario`, `nombre_usuario`, "
                . "`apellido_usuario`, `email_usuario`, `clave_usuario`,"
                . " `fechacreacion_usuario`, `fechacaduca_usuario`, "
                . "`ingreso_usuario`, `id_rol`, `estado_usuario`, `id_zona`,"
                . " `sexo_usuario`, `foto_usuario`, `direccion1_usuario`, "
                . "`direccion2_usuario`, `ruc_usuario`, `id_empresa`, `codigo_usuario`, "
                . "`tipo_cliente`, `tiposesion_usuario`, email2_usuario) "
                . " VALUES ($id_usuario,'$nombre_usuario','$apellido_usuario',"
                . " '$email_usuario',MD5(CONCAT('" . $email_usuario . "','" . $password . "')),"
                . " '$hoy','$caduca','$hoy',4,1,"
                . " 'EC1701','MASCULINO','$foto_usuario','','',"
                . " '',1,0,1,$tiposesion_usuario,'$email2_usuario')";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    
    function fnsesion_udatepass_xidusu($id_usuario,$clave) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $hoy = date('Y-m-d');
        $sql = "UPDATE usuario set clave_usuario=MD5(CONCAT(email_usuario,'$clave')) "
                . " where id_usuario=$id_usuario";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}
