<?php
require '../controlador/conexion.php';
require '../funciones/fn-54.php';
$opc_mod = $_POST['dato_0'];
$fn54 = new Fn_54();

if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo Documento</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="1" name="dato_0">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_transp" class="form-control" placeholder="">
                                </div>
                                <label class="col-sm-12 col-form-label">Tipo</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="tipo_transp">
                                        <option value="0">TRANSPARENCIA DE LA INFORMACIÓN</option>
                                        <option value="1">BUENA GOBERNANZA</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="cn54_001_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}
if ($opc_mod == 2) {
    //echo $id = $_POST['dato_1'];
    $id = $_POST['dato_1'];
    $tupla = $fn54->fn54_rtransparencia_xid($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Transparencia</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="col-md-12" id="div_editar"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_editar" >
                            <input type="hidden" name="dato_0" value="2">
                            <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                            <label class="col-sm-12 col-form-label">Título</label>
                            <div class="col-sm-12">
                                <input type="text" name="nombre_transp" value="<?php echo ($tupla[0]['nombre_transp']) ?>" class="form-control" placeholder="">
                            </div>
                            <label class="col-sm-12 col-form-label">Tipo</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="tipo_transp">
                                    <option value="0" <?php if($tupla[0]['tipo_transp']==0) echo "selected"; ?>>TRANSPARENCIA DE LA INFORMACIÓN</option>
                                    <option value="1" <?php if($tupla[0]['tipo_transp']==1) echo "selected"; ?>>BUENA GOBERNANZA</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button onclick="cn54_002_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn54->fn54_rtransparencia_xid($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Documento de Transparencia</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body" id="div_editarimagen">
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form">
                    <form class="form-valide" id="frm_documento" >
                        <center><h4>CARGAR DOCUMENTO</h4></center>
                        <input type="hidden" name="dato_0" value="3">
                        <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                        <div id="i_resdoc" class="text-center"><br>
                             <a href="../../doctransparencia/<?php echo ($tupla[0]['url_transp']) ?>" target="_blank">DOCUMENTO</a>
                        </div>
                       
                        <input id="kv-explorer" name="dato_5"  type="file" data-theme="fas">
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="cn76_004_f3()" class="btn btn-warning">Guardar imagen</button>
    </div>
    <?php
}

if ($opc_mod == 4) {
    $id = $_POST['dato_1'];
    ?>
    <div class="modal-content" id="content_sm">
        <div class="modal-header">
            <h5 class="modal-title">Eliminar registro</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="POST" id="frm_delete">
                <input type="hidden" name="dato_0" value="4">
                <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                <label> Está seguro que desea eliminar este registro ?</label>
                <button type="button" class="btn btn-danger light" data-dismiss="modal">NO</button>
                <button type="button" onclick="cn54_f5(5, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}
if ($opc_mod == 5) {
    $id_transp = $_POST['dato_1'];
    $fecha = date('Y-m-d');
    ?>
    <!-- Material color picker -->
    <div class="modal-header">
        <h5 class="modal-title">Nueva descarga</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo1" method="post">
                            <input type="hidden" value="6" name="dato_0">
                            <input type="hidden" value="<?php echo $id_transp ?>" id="i_dato1" name="dato_1">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Nombre</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_transp" class="form-control" placeholder="">
                                </div>
                                <label class="col-sm-12 col-form-label">Resumen</label>
                                <div class="col-sm-12">
                                    <input type="text" name="resumen_transp" class="form-control" placeholder="">
                                </div>
                                <label class="col-sm-12 col-form-label">Fecha</label>
                                <div class="col-sm-12">
                                    <input type="date" name="fecha_transp" value="<?php echo $fecha ?>" class="form-control" placeholder="">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="cn54_006_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}
if ($opc_mod == 6) {
    $id_hijo = $_POST['dato_1'];
    $id_padre = $_POST['dato_2'];
    $tupla = $fn54->fn54_rtransparencia_xid($id_hijo);
    ?>
    <!-- Material color picker -->
    <div class="modal-header">
        <h5 class="modal-title">Nueva descarga</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_edita1" method="post">
                            <input type="hidden" value="7" name="dato_0">
                            <input type="hidden" value="<?php echo $id_hijo ?>" name="dato_1">
                            <input type="hidden" value="<?php echo $id_padre ?>" name="dato_2" id="i_padre">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Nombre</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_transp" value="<?php echo ($tupla[0]['nombre_transp']) ?>" class="form-control" placeholder="">
                                </div>
                                <label class="col-sm-12 col-form-label">Resumen</label>
                                <div class="col-sm-12">
                                    <input type="text" name="resumen_transp" value="<?php echo ($tupla[0]['resumen_transp']) ?>" class="form-control" placeholder="">
                                </div>
                                <label class="col-sm-12 col-form-label">Fecha</label>
                                <div class="col-sm-12">
                                    <input type="date" name="fecha_transp" value="<?php echo ($tupla[0]['fecha_transp']) ?>" class="form-control" placeholder="">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="cn54_007_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}