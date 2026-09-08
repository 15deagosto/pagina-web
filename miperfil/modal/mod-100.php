<?php
require '../controlador/conexion.php';
require '../funciones/fn-100.php';
require '../funciones/fn-91.php';
$opc_mod = $_POST['dato_0'];
$fn100 = new Fn_100();
$fn91 = new Fn_91();

if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nueva Vacante</h5>
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
        <button type="button"  onclick="cn100_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn100->fn100_rnoticias_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar "<?php echo ($tupla[0]['nombre_vacante']) ?>"</h5>
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
                                    <input type="text" name="nombre_vacante" class="form-control" value="<?php echo ($tupla[0]['nombre_vacante']) ?>">
                                </div>
                            </div>
<!--                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="col-form-label">Tiempo</label>
                                    <div class="">
                                        <input type="text" name="tiempo_vacante" class="form-control" value="<?php echo ($tupla[0]['tiempo_vacante']) ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-form-label">Área</label>
                                    <div class="">
                                        <input type="text" name="area_vacante" class="form-control" value="<?php echo ($tupla[0]['area_vacante']) ?>">
                                    </div>   
                                </div>
                            </div>-->
<!--                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="col-form-label">Tipo</label>
                                    <div class="">
                                        <input type="text" name="tipo_vacante" class="form-control" value="<?php echo ($tupla[0]['tipo_vacante']) ?>">
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-form-label">Modo</label>
                                    <div class="">
                                        <input type="text" name="presencia_vacante" class="form-control" value="<?php echo ($tupla[0]['presencia_vacante']) ?>">
                                    </div>   
                                </div>
                            </div>-->
<!--                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="col-form-label">Lugar</label>
                                    <div class="">
                                        <input type="text" name="lugar_vacante" class="form-control" value="<?php echo ($tupla[0]['lugar_vacante']) ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-form-label">Nivel Requerido</label>
                                    <div class="">
                                        <input type="text" name="niveleduca_vacante" class="form-control" value="<?php echo ($tupla[0]['niveleduca_vacante']) ?>">
                                    </div>  
                                </div>
                            </div>-->
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="col-form-label">Fecha Inicio</label>
                                    <div class="">
                                        <input type="date" name="fechain_vacante" class="form-control" value="<?php echo ($tupla[0]['fechain_vacante']) ?>">
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-form-label">Fecha Fin</label>
                                    <div class="">
                                        <input type="date" name="fechaout_vacante" class="form-control" value="<?php echo ($tupla[0]['fechaout_vacante']) ?>">
                                    </div>
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
        <button onclick="cn100_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn100->fn100_rnoticias_x($id);
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
                        "http://project.supaysoft.net:84/proyectos/virgendelcisne/virgendelcisneV5/images/<?php echo ($tupla[0]['img_noticia']) ?>"
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
                <button type="button" onclick="cn100_f7(7, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}

if ($opc_mod == 6) {
    $qImg = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $id_noticia = $_POST['dato_3'];
    $tupla = $fn100->fn100_rnoticias_x($id_noticia);
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
                            <input type="hidden" value="<?php echo $tupla[0]['img_vacante'] ?>" name="img_ant">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 1447 de alto x 681 de ancho</label>
                            </div>
                            <div class="form-group row offset-3" id="result_img">
                                <?php if ($qImg == 1) { ?>
                                    <img src="../images/<?php echo $tupla[0]['img_vacante'] ?>" width="200px" />
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
        <button type="button"  onclick="cn100_f6(<?php echo $qImg ?>,<?php echo $id_noticia ?>,<?php echo $id ?>)"  class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}
if ($opc_mod == 7) {
    $qImg = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $id_noticia = $_POST['dato_3'];
    $tupla = $fn100->fn100_rnoticias_x($id_noticia);
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
                            <input type="hidden" value="<?php echo $tupla[0]['img2_noticia'] ?>" name="img_ant">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 1447 de alto x 681 de ancho</label>
                            </div>
                            <div class="form-group row offset-3" id="result_img">
                                <?php if ($qImg == 1) { ?>
                                    <img src="../images/<?php echo $tupla[0]['img2_noticia'] ?>" width="200px" />
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
                            <button type="button"  onclick="cn100_f9(<?php echo $qImg ?>,<?php echo $id_noticia ?>,<?php echo $id ?>)"  class="btn btn-danger" > <i class="fa fa-times"></i> Eliminar imágen </button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="cn100_f8(<?php echo $qImg ?>,<?php echo $id_noticia ?>,<?php echo $id ?>)"  class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}
if ($opc_mod == 8) {
    $id = $_POST['dato_1'];
    $tupla = $fn100->fn100_rnoticias_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Textos "<?php echo ($tupla[0]['nombre_vacante']) ?>"</h5>
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
                            <input type="hidden" name="dato_0" value="10">
                            <input type="hidden" name="dato_1" value="<?php echo $id ?>">

                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Frame Facebook</label>
                                <div class="col-sm-12">
                                    <textarea name="frame_vacante" rows="5" class="form-control"><?php echo ($tupla[0]['frame_vacante']) ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Funciones</label>
                                <div class="col-sm-12">
                                    <textarea name="funcion_vacante" id="funciones" rows="5" class="form-control"><?php echo ($tupla[0]['funcion_vacante']) ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Requisitos</label>
                                <div class="col-sm-12">
                                    <textarea name="requisitos_vacante" id="requisitos" rows="5" class="form-control"><?php echo ($tupla[0]['requisitos_vacante']) ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea name="desc_vacante" id="descripcion" class="form-control"><?php echo ($tupla[0]['desc_vacante']) ?></textarea>
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
                $("#funciones").summernote({
                    height: 190,
                    minHeight: null,
                    maxHeight: null,
                    focus: !1
                }), $("#requisitos").summernote({
                    height: 190,
                    minHeight: null,
                    maxHeight: null,
                    focus: !1
                }), $("#descripcion").summernote({
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
        <button onclick="cn100_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}