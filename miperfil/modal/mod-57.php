<?php
require '../controlador/conexion.php';
require '../funciones/fn-57.php';
require '../funciones/fn-91.php';
$opc_mod = $_POST['dato_0'];
$fn57 = new Fn_57();
$fn91 = new Fn_91();


if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo slider</h5>
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
                                    <input type="text" name="nombre" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea name="descripcion" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Url</label>
                                <div class="col-sm-12">
                                    <input type="text" name="url" class="form-control" >
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
        <button type="button"  onclick="cn57_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn57->fn57_rslider_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar "<?php echo ($tupla[0]['nom_slider']) ?>"</h5>
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
                                    <input type="text" name="nombre" class="form-control" value="<?php echo ($tupla[0]['nom_slider']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea name="descripcion" class="form-control"><?php echo ($tupla[0]['desc_slider']) ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Url</label>
                                <div class="col-sm-12">
                                    <input type="text" name="url" class="form-control" value="<?php echo ($tupla[0]['url_slider']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Posición Horizontal Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="hoffset1_slider" class="form-control" value="<?php echo ($tupla[0]['hoffset1_slider']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Posición Vertical Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="voffset1_slider" class="form-control" value="<?php echo ($tupla[0]['voffset1_slider']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Posición Horizontal Sub-Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="hoffset2_slider" class="form-control" value="<?php echo ($tupla[0]['hoffset2_slider']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Posición Vertical Sub-Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="voffset2_slider" class="form-control" value="<?php echo ($tupla[0]['voffset2_slider']) ?>">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" id="div_reseditar"></div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button onclick="cn57_f2()" type="button" class="btn btn-warning">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn57->fn57_rslider_x($id);
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
                        <center><h4>CARGAR IMÁGEN (1920x900)</h4></center>
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
                        "http://project.supaysoft.net:84/proyectos/virgendelcisne/virgendelcisneV5/images/<?php echo ($tupla[0]['img_slider']) ?>"
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
                <button type="button" onclick="cn57_f5(5, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}

if ($opc_mod == 6) {
    $id_slider= $_POST['dato_1'];
    
    $tupla = $fn57->fn57_rslider_x($id_slider);
    
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Editar Imagen</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_editimg" method="post">
                            <input type="hidden" value="6" name="dato_0">
                            <input type="hidden" value="<?php echo $id_slider ?>" name="dato_1">
                             <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 880 de alto x 1920 de ancho</label>
                                <label class="col-sm-12 col-form-label">Formatos webp, jpg, png, tiff</label>
                            </div>
                            <div class="form-group row" id="i_imagenresmod">
                                <img src="../assets/img/<?php echo $tupla[0]['img_slider'] ?>" width="440px" />
                                 
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
        <button type="button" onclick="cn57_f6()" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 7) {
    $id_slider= $_POST['dato_1'];
    
    $tupla = $fn57->fn57_rslider_x($id_slider);
    
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Editar Imagen Título</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_editimg1" method="post">
                            <input type="hidden" value="7" name="dato_0">
                            <input type="hidden" value="<?php echo $id_slider ?>" name="dato_1">
                             <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen recomendado 300x50</label>
                                <label class="col-sm-12 col-form-label">Formatos webp, jpg, png, tiff</label>
                            </div>
                            <div class="form-group row" id="i_imagenresmod1">
                                <img src="../images/<?php echo $tupla[0]['img1_slider'] ?>" width="440px" />
                                 
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
        <button type="button" onclick="cn57_f9(9,<?php echo $id_slider ?>)" class="btn btn-primary" >Sin imagen </button>
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="cn57_f7()" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 8) {
    $id_slider= $_POST['dato_1'];
    
    $tupla = $fn57->fn57_rslider_x($id_slider);
    
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Editar Imagen Sub Título</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_editimg2" method="post">
                            <input type="hidden" value="8" name="dato_0">
                            <input type="hidden" value="<?php echo $id_slider ?>" name="dato_1">
                             <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen recomendado 300x50</label>
                                <label class="col-sm-12 col-form-label">Formatos webp, jpg, png, tiff</label>
                            </div>
                            <div class="form-group row" id="i_imagenresmod2">
                                <img src="../images/<?php echo $tupla[0]['img2_slider'] ?>" width="440px" />
                                 
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
        <button type="button" onclick="cn57_f10(10,<?php echo $id_slider ?>)" class="btn btn-primary" >Sin imagen </button>
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="cn57_f8()" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}