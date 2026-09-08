<?php
require '../controlador/conexion.php';
require '../funciones/fn-34.php';
$opc_mod = $_POST['dato_0'];
$fn34 = new Fn_34();

if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nueva Linea de Crédito</h5>
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
                                <label class="col-sm-5 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" name="nombre_lineacred" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Descripción</label>
                                <div class="col-sm-7">
                                    <input type="text" name="desc_lineacred" class="form-control" placeholder="">
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
        <button type="button"  onclick="cn34_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn34->fn34_rlinea_creditoes_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Linea de Crédito</h5>
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
                        <form class="form-valide" id="frm_editar" method="post">
                            <input type="hidden" value="2" name="dato_0">
                            <input type="hidden" value="<?php echo $id ?>" name="dato_1">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Nombre</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_lineacred" class="form-control" value="<?php echo ($tupla[0]['nombre_lineacred']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea name="desc_lineacred" id="descripcion" rows="10" class="form-control"><?php echo ($tupla[0]['desc_lineacred']) ?></textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="vendor/summernote/js/summernote.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#descripcion").summernote({
                    height: 190,
                    minHeight: null,
                    maxHeight: null,
                    focus: !1
                }), $(".inline - editor").summernote({
                    airMode: !0
                });
            });
        </script>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button onclick="cn34_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn34->fn34_ravisos_x($id);
    ?>

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
                <button type="button" onclick="cn34_f5(4, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}
if ($opc_mod == 5) {
    $id = $_POST['dato_3'];
    $tupla = $fn34->fn34_rlinea_creditoes_x($id);
    //print_r($tupla);
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nueva Imagen</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_imagen" method="post">
                            <input type="hidden" value="6" name="dato_0">
                            <input type="hidden" value="<?php echo $id ?>" name="dato_1">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  25mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 858 de alto x 910 de ancho</label>
                            </div>
                            <div id="result_img_lineacred">
                                <div class="form-group row offset-3">
                                    <img src="../images/<?php echo $tupla[0]['img_lineacred'] ?>" width="200px" />
                                </div>
                                <input type="text" name="tipo_rep" id="tipo_rep" value="1" hidden="">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">URL</label>
                                    <div class="col-sm-12">
                                        <input type="file" name="img_lineacred" id="img_lineacred" class="form-control" placeholder="">
                                    </div>
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
        <button type="button"  onclick="cn34_f6(<?php echo $id ?>)"  class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}