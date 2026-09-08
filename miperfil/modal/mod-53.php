<?php
require '../controlador/conexion.php';
require '../funciones/fn-53.php';
$opc_mod = $_POST['dato_0'];
$fn53 = new Fn_53();


if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo aviso</h5>
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
                                <label class="col-sm-6 col-form-label">Fecha inicio</label>
                                <label class="col-sm-6 col-form-label">Fecha fin</label>
                                <div class="col-sm-6">
                                    <input type="date" name="fechainicio" class="form-control" placeholder="">
                                </div>
                                <div class="col-sm-6">
                                    <input type="date" name="fechafin" class="form-control" placeholder="">
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
        <button type="button"  onclick="cn53_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    echo $id = $_POST['dato_1'];
    $tupla = $fn53->fn53_ravisos_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar aviso</h5>
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
                                <label class="col-sm-6 col-form-label">Fecha inicio</label>
                                <label class="col-sm-6 col-form-label">Fecha fin</label>
                                <div class="col-sm-6">
                                    <input type="date" name="fechainicio" class="form-control" value="<?php echo ($tupla[0]['fecini_avisos']) ?>">
                                </div>
                                <div class="col-sm-6">
                                    <input type="date" name="fechafin" class="form-control" value="<?php echo ($tupla[0]['fecfin_avisos']) ?>">
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
        <button onclick="cn53_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn53->fn53_ravisos_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Imagen avisos</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body" id="div_editarimagen">
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form">
                    <form class="form-valide" id="frm_imagen" >
                        <center><h4>CARGAR IMÁGEN</h4></center>
                        <input type="hidden" name="dato_0" value="3">
                        <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                        <div class="file-loading">
                            <input id="kv-explorer" name="dato_5"  type="file" data-theme="fas">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/fileup-v2/js/locales/es.js" type="text/javascript"></script>
        <script src="js/fileup-v2/js/fileinput.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $("#kv-explorer").fileinput({
                    theme: 'explorer-fas',
                    maxFileSize: 6000,
                    maxFileCount: 1,
                    showUpload: false,
                    allowedFileExtensions: ['jpg', 'png', 'gif'],
                    initialPreviewAsData: true,
                    initialPreview: [
                        "http://supaysoft.sytes.net:84/proyectos/cacec/cacecV2/images/<?php echo ($tupla[0]['img_avisos']) ?>"
                    ],
                    initialPreviewConfig: [
                        {caption: "<?php echo ($tupla[0]['img_url']) ?>", size: 329892, width: "120px", url: "{$url}", key: 1}
                    ]
                });
            });
        </script>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="cn76_f3()" class="btn btn-warning">Guardar imagen</button>
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
                <button type="button" onclick="cn53_f5(5, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}