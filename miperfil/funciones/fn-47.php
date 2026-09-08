<?php
class Fn_47 {
    function fn47_rcontactanos_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM  contactanos order by fecha_contactanos desc";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn47_rcontactanos_all -- fn47 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn47_rcontactanos_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from contactanos  where id_contactanos = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn47_rcontactanos_x -- fn47";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_contactanos' => $menu['id_contactanos'],
                'nombre_contactanos' => $menu['nombre_contactanos'],
                'email_contactanos' => $menu['email_contactanos'],
                'requerimiento_contactanos' => $menu['requerimiento_contactanos'],
                'msg_contactanos' => $menu['msg_contactanos'],
                'suscribe_contactanos' => $menu['suscribe_contactanos'],
                'fecha_contactanos' => $menu['fecha_contactanos']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function fn47_rrequerimiento($val) {
        $txt = 'Requerimiento';
        if($val==2){
            $txt = 'Consulta';
        }if($val==3){
            $txt = 'Trasferencias';
        }if($val==4){
            $txt = 'Pagos';
        }
        return $txt;
    }
    
    function get_contactanos_filto($fdesde,$fhasta, $tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $txtfiltro1 = '';
        if($tipo!=''){
            $txtfiltro1 .= ' AND requerimiento_contactanos = '.$tipo.' ';
        }   
        
        $sql2 = "select * from contactanos  WHERE fecha_contactanos >= '$fdesde' and fecha_contactanos<='$fhasta' $txtfiltro1  ORDER by fecha_contactanos  DESC ";
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
    function fn47_racuerdo($estado) {
        $texto = 'NO ACEPTADO';
        if ($estado == 1) {
            $texto = 'ACEPTADO';
        }
        
        return $texto;
    }
}
