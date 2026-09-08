<?php
require '../controlador/conexion.php';
require '../funciones/fn-98.php';
$opc_mod = $_POST['dato_0'];
$fn98 = new Fn_98();


if ($opc_mod == 1) {
    ?>
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo Texto</h5>
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
                                    <input type="text" name="nombre_imagen" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="text" name="url_imagen" class="form-control" placeholder="" >
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
        <button type="button"  onclick="cn98_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <script>
            $(document).ready(function () {
                $("#texto_texto").summernote({
                    height: 190,
                    minHeight: null,
                    maxHeight: null,
                    focus: !1
                }), $(".inline - editor").summernote({
                    airMode: !0
                });
            });
        </script>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn98->fn98_rimagenes_x($id);
    //print_r($tupla);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Texto</h5>
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
                                <label class="col-sm-12 col-form-label">Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_imagen" class="form-control" placeholder="" value="<?php echo $tupla[0]['nombre_imagen'] ?>">
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="text" name="url_imagen" class="form-control" placeholder="" value="<?php echo $tupla[0]['url_imagen'] ?>" >
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
            $(document).ready(function () {
                $("#i_detalle").summernote({
                    height: 190,
                    minHeight: null,
                    maxHeight: null,
                    focus: !1
                }), $(".inline - editor").summernote({
                    airMode: !0
                });
            });
        </script>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button onclick="cn98_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
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
                <button type="button" onclick="cn98_f7(5, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}
if ($opc_mod == 5) {
    $id = $_POST['dato_1'];
    $tupla = $fn98->fn98_rimagenes_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Imagen "<?php echo ($tupla[0]['nombre_imagen']) ?>"</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body" >
        <div class="row">
            <div class="col-md-12">
                <a href="../../../../../AppData/Local/Temp/Cambiar Cambiar .url"></a>
                <div class="basic-form">
                    <form class="form-valide" id="frm_imagen" >
                        <center><h4>CARGAR IMÁGEN (<?php echo ($tupla[0]['tamanio_imagen']) ?>)</h4></center>
                        <input type="hidden" name="dato_0" value="7" id="idato_0">
                        <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                        <div id="div_editarimagen">
                            <?php if($tupla[0]['imagen_imagen'] != 'ninguno.png' && $tupla[0]['imagen_imagen'] != ''){ ?>
                            <img src="../images/<?php echo $tupla[0]['imagen_imagen'] ?>" width="200px" />
                            <?php }else{  ?>
                            <center><h5> Sin imagen</h5></center>
                            <?php } ?>
                        </div>
                        <input  name="dato_5"  type="file" data-theme="fas"><hr>
                         <!--<button type="button"  onclick="cn98_f8()"  class="btn btn-danger" > <i class="fa fa-times"></i> Eliminar imágen </button>-->
                    </form>
                </div>
            </div>
        </div>
<!--        <script src="js/fileup-v2/js/locales/es.js" type="text/javascript"></script>
        <script src="js/fileup-v2/js/fileinput.js" type="text/javascript"></script>-->
        <script>
//            $(document).ready(function () {
//                $("#kv-explorer").fileinput({
//                    theme: 'explorer-fas',
//                    maxFileSize: 6000,
//                    maxFileCount: 1,
//                    showUpload: false,
//                    allowedFileExtensions: ['jpg', 'png', 'gif'],
//                    initialPreviewAsData: true,
//                    initialPreview: [
//                        "https://www.virgendelcisne.fin.ec/images/<?php echo ($tupla[0]['img_texto']) ?>"
//                    ],
//                    initialPreviewConfig: [
//                        {caption: "<?php echo ($tupla[0]['img_texto']) ?>", size: 329892, width: "120px", url: "{$url}", key: 1}
//                    ]
//                });
//            });
        </script>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="cn98_f7()" class="btn btn-warning">Guardar imagen</button>
    </div>
    <?php
}
if ($opc_mod == 6) {
    $id = $_POST['dato_1'];
    $tupla = $fn98->fn98_rimagenes_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Imagen Secundaria "<?php echo ($tupla[0]['nombre_imagen']) ?>"</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body" >
        <div class="row">
            <div class="col-md-12">
                <a href="../../../../../AppData/Local/Temp/Cambiar Cambiar .url"></a>
                <div class="basic-form">
                    <form class="form-valide" id="frm_imagen" >
                        <center><h4>CARGAR IMÁGEN (1380x1670)</h4></center>
                        <input type="hidden" name="dato_0" value="9" id="idato_0">
                        <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                        <div id="div_editarimagen">
                            <?php if($tupla[0]['img2_imagen'] != 'ninguno.png' && $tupla[0]['img2_imagen'] != ''){ ?>
                            <img src="../images/<?php echo $tupla[0]['img2_imagen'] ?>" width="200px" />
                            <?php }else{  ?>
                            <center><h5> Sin imagen</h5></center>
                            <?php } ?>
                        </div>
                        <input  name="dato_5"  type="file" data-theme="fas"><hr>
<!--                         <button type="button" onclick="cn98_f8()"  class="btn btn-danger" > <i class="fa fa-times"></i> Eliminar imágen </button>-->
                    </form>
                </div>
            </div>
        </div>
<!--        <script src="js/fileup-v2/js/locales/es.js" type="text/javascript"></script>
        <script src="js/fileup-v2/js/fileinput.js" type="text/javascript"></script>-->
        <script>
//            $(document).ready(function () {
//                $("#kv-explorer").fileinput({
//                    theme: 'explorer-fas',
//                    maxFileSize: 6000,
//                    maxFileCount: 1,
//                    showUpload: false,
//                    allowedFileExtensions: ['jpg', 'png', 'gif'],
//                    initialPreviewAsData: true,
//                    initialPreview: [
//                        "https://www.virgendelcisne.fin.ec/images/<?php echo ($tupla[0]['img_texto']) ?>"
//                    ],
//                    initialPreviewConfig: [
//                        {caption: "<?php echo ($tupla[0]['img_texto']) ?>", size: 329892, width: "120px", url: "{$url}", key: 1}
//                    ]
//                });
//            });
        </script>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="cn98_f9()" class="btn btn-warning">Guardar imagen</button>
    </div>
    <?php
}