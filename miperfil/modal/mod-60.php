<?php
require '../controlador/conexion.php';
require '../funciones/fn-60.php';
$opc_mod = $_POST['dato_0'];
$fn60 = new Fn_60();


if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo trabajo</h5>
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
                                <label class="col-sm-12 col-form-label">Nombre</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_trabajo" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tipo empleo</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="tipo_trabajo">
                                        <option value="0">-- Seleccionar --</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Temporal</option>
                                    </select>
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
        <button type="button"  onclick="cn60_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn60->fn60_rtipoempleo_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar empleo</h5>
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
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Nombre</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_trabajo" class="form-control" placeholder="" value="<?php echo ($tupla[0]['nombre_tipoempleo']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea name="descripcion" id="descripcion" class="form-control"><?php echo ($tupla[0]['descripcion_tipoempleo']) ?></textarea>
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
        <button onclick="cn60_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
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
                <button type="button" onclick="cn60_f4(4, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}