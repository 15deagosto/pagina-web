<?php

class Fn_alert {

    function fnalert_edit($opc) {
        if ($opc == 1) {
            $msg = '<div style = "width: 100%;" class = "alert alert-secondary alert-dismissible alert-alt fade show">
                <button type = "button" class = "close h-100" data-dismiss = "alert" aria-label = "Close"><span><i class = "mdi mdi-close"></i></span>
                </button>
                <strong>Éxito!</strong> Editado correctamente.
                </div>';
        } else if ($opc == 0)  {
            $msg = '<div style = "width: 100%;" class="alert alert-dark alert-dismissible alert-alt fade show">
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Error!</strong> Sucedió un error al editar.
                </div>';
        }else {
            $msg = '<div style = "width: 100%;" class="alert alert-dark alert-dismissible alert-alt fade show">
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Error!</strong> Sucedió un error al subir el archivo.
                </div>';
        }
        return $msg;
    }
    
    function fnalert_delete($opc) {
        if ($opc == 1) {
            $msg = '<div style = "width: 100%;" class = "alert alert-secondary alert-dismissible alert-alt fade show">
                <button type = "button" class = "close h-100" data-dismiss = "alert" aria-label = "Close"><span><i class = "mdi mdi-close"></i></span>
                </button>
                <strong>Éxito!</strong> Eliminado correctamente.
                </div>';
        } else {
            $msg = '<div style = "width: 100%;" class="alert alert-dark alert-dismissible alert-alt fade show">
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Error!</strong> Sucedió un error al eliminar.
                </div>';
        }
        return $msg;
    }
    
    function fnalert_create($opc) {
        if ($opc == 1) {
            $msg = '<div style = "width: 100%;" class = "alert alert-secondary alert-dismissible alert-alt fade show">
                <button type = "button" class = "close h-100" data-dismiss = "alert" aria-label = "Close"><span><i class = "mdi mdi-close"></i></span>
                </button>
                <strong>Éxito!</strong> Creado correctamente.
                </div>';
        } else {
            $msg = '<div style = "width: 100%;" class="alert alert-dark alert-dismissible alert-alt fade show">
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Error!</strong> Sucedió un error al crear.
                </div>';
        }
        return $msg;
    }

    function fnalert_file($opc) {
        if ($opc == 1) {
            $msg = '<div style = "width: 100%;" class = "alert alert-secondary alert-dismissible alert-alt fade show">
                <button type = "button" class = "close h-100" data-dismiss = "alert" aria-label = "Close"><span><i class = "mdi mdi-close"></i></span>
                </button>
                <strong>Éxito!</strong> Archivo cargado correctamente.
                </div>';
        } else if($opc == 2){
            $msg = '<div style = "width: 100%;" class="alert alert-dark alert-dismissible alert-alt fade show">
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Error!</strong> Sucedió un error al cargar el archivo.
                </div>';
        }else if($opc == 3){
            $msg = '<div style = "width: 100%;" class="alert alert-dark alert-dismissible alert-alt fade show">
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Error!</strong> Error en formato o tamaño de archivo.
                </div>';
        }else if($opc == 4){
            $msg = '<div style = "width: 100%;" class="alert alert-dark alert-dismissible alert-alt fade show">
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Error!</strong> Error en tamaño de archivo.
                </div>';
        }
        return $msg;
    }
    function fnalert_extencion() {
    
        $msg = '<div style = "width: 100%;" class="alert alert-dark alert-dismissible alert-alt fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Extención del Archivo incorecto.
            </div>';
        
        return $msg;
    }
    
    function fnalert_create2($opc) {
        if ($opc > 0) {
            $msg = '<div style = "width: 100%;" class = "alert alert-secondary alert-dismissible alert-alt fade show">
                <button type = "button" class = "close h-100" data-dismiss = "alert" aria-label = "Close"><span><i class = "mdi mdi-close"></i></span>
                </button>
                <strong>Éxito!</strong> Creado correctamente.
                </div>';
        } else {
            $msg = '<div style = "width: 100%;" class="alert alert-dark alert-dismissible alert-alt fade show">
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Error!</strong> Sucedió un error al crear.
                </div>';
        }
        return $msg;
    }
    
    function fnalert_createpag($opc) {
        if ($opc == 1) {
            $msg = '<div style = "width: 100%;" class = "alert alert-secondary alert-dismissible alert-alt fade show">
                <button type = "button" class = "close h-100" data-dismiss = "alert" aria-label = "Close"><span><i class = "mdi mdi-close"></i></span>
                </button>
                <strong>Éxito!</strong> Pagina creada correctamente.
                </div>';
        } else {
            $msg = '<div style = "width: 100%;" class="alert alert-dark alert-dismissible alert-alt fade show">
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Error!</strong> Sucedió un error al crear la pagina.
                </div>';
        }
        return $msg;
    }
}
