<?php

class Fn_alert {

    function fnalert_info($texto) {
        $mensaje = '<div class="row">'
                . '<div class="col-md-12 info-alert">'
                . '<center><i class="fa fa-info mr-10 ml-20"></i> '.$texto.'</center>'
                . '</div>'
                . '</div>';
        return $mensaje;
    }

    function fnalert_sucess($texto) {
        $mensaje = '<div class="row">'
                . '<div class="col-md-12 info-sucess">'
                .'<center><i class="fa fa-2x fa-check mr-10 ml-20" style="color:green;padding: 10px 20px;"></i></center>'
                . '<center><h5  style="padding: 5px 0px;">'.$texto.'</h5></center>'
                . '</div>'
                . '</div>';
        return $mensaje;
    }
}
