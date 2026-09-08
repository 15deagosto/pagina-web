<?php

class Fn13 {

    //inicio funciones opc
    function fn13_r_rol_x_xestado() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM rol WHERE estado_rol>0";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, error en fn13_r_rol_x_xestado.";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        return $arreglo;
    }

   
    function fn13_rol_xid($id_rol){
         $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "select * from rol p where id_rol =?";
        $stmt = $mysqlidato->prepare($sql2);

        $stmt->bind_param("i", $id_rol);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $arreglo = array();
        while ($datos = $resultado->fetch_assoc()) {
            $datosNuevos = array('id_rol' => $datos['id_rol'],
                'nombre_rol' => $datos['nombre_rol'],
                'permiso_rol' => $datos['permiso_rol']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function fn13_menu_xrol($id_rol,$id_menu) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT count(id_menu) as cuenta FROM rolmenu rm WHERE id_rol=$id_rol and id_menu =$id_menu ";
        //echo $sql2;
        $arreglo=0;
        // print_r($resultado);
        if (!$resultado = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, error en fn13_menu_xrol.";

            exit;
        } else {
            while ($datos = $resultado->fetch_assoc()) {
                
                $arreglo=$datos['cuenta'];
            }
        }

        $mysqlidato->close();
        return $arreglo;
    }
    function fn13_menucompleto_xrol($id_padre){
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM menu m WHERE estado_menu=1 and pertenece_menu=$id_padre ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, error en fn13_menucompleto_xrol.";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        return $arreglo;
    }
    function fn13_menusub_xrol($id_rol,$id_padre){
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM rolmenu rm, menu m WHERE rm.id_menu=m.id_menu and estado_menu=1 and id_rol=$id_rol and pertenece_menu=$id_padre ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, error en fn13_menucompleto_xrol.";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        return $arreglo;
    }
    function fn13_menuvalida_xrol($id_rol,$id_padre){
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM rolmenu m WHERE id_rol=$id_rol and id_menu=$id_padre ";
       // echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, error en fn13_menuvalida_xrol.";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        return $arreglo;
    }
 

    function fn13_u_rolmenu_xid($id_rol, $id_menu) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "insert into rolmenu (id_rol,id_menu ) values (?,?) ";
        $resultado = 0;
        $stmt = $mysqlidato->prepare($sql2);

        if ($stmt->bind_param("ii", $id_rol, $id_menu)) {
            if ($stmt->execute()) {
                $resultado = 1;
            } else {
                $resultado = 0;
            }
        } else {
            $resultado = 0;
        }

        $mysqlidato->close();
        return $resultado;
    }
    function fn13_c_menu_xdata($url_menu, $nombre_menu,$pertenece_menu,$icon_menu,$estado_menu) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "insert into menu (id_menu,nombre_menu,pertenece_menu,url_menu,desc_menu,icon_menu,estado_menu) "
                . "values (?,?,?,?,'',?,?) ";
        $resultado = 0;
        $stmt = $mysqlidato->prepare($sql2);

        if ($stmt->bind_param("issssi", $url_menu, $nombre_menu,$pertenece_menu,$url_menu,$icon_menu,$estado_menu)) {
            if ($stmt->execute()) {
                $resultado = 1;
            } else {
                $resultado = 0;
            }
        } else {
            $resultado = 0;
        }

        $mysqlidato->close();
        return $resultado;
    }
function fn13_d_rolmenu_xid($id_rol, $id_menu) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "delete from rolmenu where id_rol=? and id_menu=?";
        $resultado = 0;
        $stmt = $mysqlidato->prepare($sql2);

        if ($stmt->bind_param("ii", $id_rol, $id_menu)) {
            if ($stmt->execute()) {
                $resultado = 1;
            } else {
                $resultado = 0;
            }
        } else {
            $resultado = 0;
        }

        $mysqlidato->close();
        return $resultado;
    }
    

    function fn41_r_color_xestado($estado) {
        $res = "#ff7c00";
        if ($estado == 1) {
            $res = "#fff99d";
        }
        if ($estado == 2) {
            $res = "#ffae00";
        }
        return $res;
    }

    function fn41_r_color1_xestado($estado) {
        $res = "#ffae00";
        if ($estado == 1) {
            $res = "#ffffff";
        }
        if ($estado == 2) {
            $res = "#b7e83e";
        }
        return $res;
    }

    function fn41_r_menu_xid($id_menu) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "select * from menu p where id_menu =?";
        $stmt = $mysqlidato->prepare($sql2);

        $stmt->bind_param("i", $id_menu);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $arreglo = array();
        while ($datos = $resultado->fetch_assoc()) {
            $datosNuevos = array('id_menu' => $datos['id_menu'],
                'nombre_menu' => $datos['nombre_menu'],
                'pertenece_menu' => $datos['pertenece_menu'],
                'url_menu' => $datos['url_menu'],
                'desc_menu' => $datos['desc_menu'],
                'icon_menu' => $datos['icon_menu'],
                'estado_menu' => $datos['estado_menu']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function fn13_r_codigo_xid(){
       
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "select id_menu from menu p order by id_menu desc limit 0,1 ";
       // echo $sql2;
        $arreglo = 0;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, error en fn13_r_codigo_xid.";
            exit;
        } else {
            while ($datos = $resultado2->fetch_assoc()) {
            $arreglo = $datos['id_menu']+1;
        }
        }
        return $arreglo;
    }
    function fn41_r_contrato_x_id($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "select * from contrato where id_contrato =?";
        $stmt = $mysqlidato->prepare($sql2);

        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $arreglo = array();
        while ($datos = $resultado->fetch_assoc()) {
            $datosNuevos = array('id_contrato' => $datos['id_contrato'],
                'num_contrato' => $datos['num_contrato'],
                'fecha_contrato' => $datos['fecha_contrato'],
                'valor_contrato' => $datos['valor_contrato'],
                'cuotas_contrato' => $datos['cuotas_contrato'],
                'cod_emp' => $datos['cod_emp'],
                'fechadesde_contrato' => $datos['fechadesde_contrato'],
                'fechahasta_contrato' => $datos['fechahasta_contrato']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function send_mail($email, $user, $cod) {
        $res = 0;

        require '../../phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->SMTPAutoTLS = false;
        $mail->Host = "mail.supaysoft.net";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = "arkanial@supaysoft.net";
        $mail->Password = "arka2020dev";
        $mail->setFrom('arkanial@supaysoft.net', 'COMUNIDAD ARKANIAL');
        $mail->addAddress($email, 'CÓDIGO DE CONFIRMACIÓN');

        $mail->Subject = 'CAMBIO DE CONTRASEÑA';
        $uniqueid = uniqid('np');
        $message .= '<img src="' . $link . 'images/logo.png" alt="" style="max-width:400px;"/>
            <table width=100% border=1>
            <tr>
                    <table width=100% style="background-color:#3c4858; font-size:15px; color:#fff">
                    <tr> 
                    <td width=20%>
                    </td>
                    <td width=60%>
                    <h2>HOLA ' . $user . '</h2>
                    <h4>Código para Verficar Cambio de Contraseña: ' . $cod . '</h4>    
                    <small>Si no solicitaste cambio de contraseña, haz caso omiso a este email</small>    
                    </td>
                    <td width=20%>
                    </td>
                    </tr>
                    </table>


            </tr>
            </table>
     </tr>   
     </table>
            <p style="color:#3c4858; font-size:10px;">Por favor no respondas a este E-mail, es un e-mail automático.</p>';
        $mail->CharSet = 'UTF-8';
        $mail->msgHTML($message);

        $mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
        if (!$mail->send()) {
            $res = 0;
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $res = 1;
        }
        return $res;
    }

    ///////////////SHOP
    //fin funciones cn
}

?>