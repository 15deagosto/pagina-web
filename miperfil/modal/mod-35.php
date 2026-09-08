<?php
require '../controlador/conexion.php';
require '../funciones/fn-35.php';
require '../funciones/fn-91.php';
require '../controlador/config.php';
$opc_mod = $_POST['dato_0'];
$fn35 = new Fn_35();
$fn91 = new Fn_91();

if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nueva noticia</h5>
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
                                    <input type="text" name="titulo" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Resumen</label>
                                <div class="col-sm-12">
                                    <textarea name="resumen" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
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
        <button type="button"  onclick="cn35_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn35->fn35_rresponsabilidad_social_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar "<?php echo ($tupla[0]['titulo_respsocial']) ?>"</h5>
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
                                <label class="col-sm-12 col-form-label">Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="titulo" class="form-control" value="<?php echo ($tupla[0]['titulo_respsocial']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Resumen</label>
                                <div class="col-sm-12">
                                    <textarea name="resumen" class="form-control"><?php echo ($tupla[0]['resumen_respsocial']) ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea name="descripcion" id="descripcion" class="form-control"><?php echo $tupla[0]['detalle_respsocial'] ?></textarea>
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
        <button onclick="cn35_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn35->fn35_rresponsabilidad_social_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Imagen "<?php echo ($tupla[0]['nom_slider']) ?>"</h5>
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
                                URLPRINCIPAL."assets/images/<?php echo ($tupla[0]['img_respsocial']) ?>"
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
                <button type="button" onclick="cn35_f7(7, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}

if ($opc_mod == 6) {
    $qImg = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $id_respsocial = $_POST['dato_3'];
    $tupla = $fn35->fn35_rresponsabilidad_social_x($id_respsocial);
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
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="6" name="dato_0">
                            <input type="hidden" value="<?php echo $tupla[0]['img_respsocial'] ?>" name="img_ant">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 1700 de alto x 1920 de ancho</label>
                            </div>
                            <div class="form-group row offset-3" id="result_img">
                                <?php if ($qImg == 1) { ?>
                                    <img src="../assets/images/<?php echo $tupla[0]['img_respsocial'] ?>" width="200px" />
                                <?php } ?> 
                                <div id="cargando_img" class="bg_load" style="display: none" >
                                    <img class="loader_animation" src="../images/loading-gif.gif"  /><br>
                                </div>
                            </div>
                            <input type="text" name="tipo_rep" id="tipo_rep" value="1" hidden="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="file" name="url_rep" id="url_rep" class="form-control" placeholder="">
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
        <button type="button"  onclick="cn35_f6(<?php echo $qImg ?>,<?php echo $id_respsocial ?>,<?php echo $id ?>)"  class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}
if ($opc_mod == 7) {
    $qImg = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $id_respsocial = $_POST['dato_3'];
    $tupla = $fn35->fn35_rresponsabilidad_social_x($id_respsocial);
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nueva Imagen Detalle</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevoimgdetalle" method="post">
                            <input type="hidden" value="8" name="dato_0" id="idato_0">
                            <input type="hidden" value="<?php echo $tupla[0]['img2_respsocial'] ?>" name="img_ant">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 1700 de alto x 1920 de ancho</label>
                            </div>
                            <div class="form-group row offset-3" id="result_img">
                                <?php if ($qImg == 1) { ?>
                                    <img src="../assets/images/<?php echo $tupla[0]['img2_respsocial'] ?>" width="200px" />
                                <?php } ?> 
                                <div id="cargando_img" class="bg_load" style="display: none" >
                                    <img class="loader_animation" src="../images/loading-gif.gif"  /><br>
                                </div>
                            </div>
                            <input type="text" name="tipo_rep" id="tipo_rep" value="1" hidden="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="file" name="url_rep" id="url_rep" class="form-control" placeholder="">
                                </div>
                            </div>
                            <button type="button"  onclick="cn35_f9(<?php echo $qImg ?>,<?php echo $id_respsocial ?>,<?php echo $id ?>)"  class="btn btn-danger" > <i class="fa fa-times"></i> Eliminar imágen </button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="cn35_f8(<?php echo $qImg ?>,<?php echo $id_respsocial ?>,<?php echo $id ?>)"  class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}