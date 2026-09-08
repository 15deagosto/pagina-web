<?php
require '../controlador/conexion.php';
require '../funciones/fn-97.php';
$opc_mod = $_POST['dato_0'];
$fn97 = new Fn_97();


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
                                    <input type="text" name="titulo_texto" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripcion</label>
                                <div class="col-sm-12">
                                    <input type="text" name="resumen_texto" class="form-control" placeholder="" >
                                </div>
                                
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Texto</label>
                                <div class="col-sm-12">
                                    <textarea type="text" id="texto_texto" name="texto_texto" class="form-control"></textarea>
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
        <button type="button"  onclick="cn97_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
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
    $tupla = $fn97->fn97_rpaginasextra_x($id);
    //print_r($tupla);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Página del Menú "<?php echo ($tupla[0]['nombre_menupag']) ?>"</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="col-md-12" id="div_editar"></div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-4 col-xs-6">
                    <form id="i_imagen">
                        <input type="hidden" name="dato_0" value="9">
                        <label for="heard">Subir imágen</label>
                        <input type="file" name="dato_1" class="form-control col-md-12 col-xs-12">
                        <button type="button" class="btn btn-primary" onclick="cn97_c009_fx()">Subir Imágen</button>
                        <hr>

                    </form>
                </div> 
                <div class="col-md-6 col-sm-4 col-xs-6">
                    <div id="i_resimagen"></div>
                    <p style="color:red">Ayuda</p><br>
                    <small style="color: green">Use el click derecho para copiar la imágen subida.</small><br>
                    <small style="color: green">Use CTRL+V para pegar en el edito de textos.</small>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_editar" method="post">
                            <input type="hidden" value="2" name="dato_0">
                            <input type="hidden" value="<?php echo $id ?>" name="dato_1">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="titulo_paginaex" class="form-control" placeholder="" value="<?php echo $tupla[0]['titulo_paginaex'] ?>">
                                </div>
                                
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Texto 1</label>
                                <div class="col-sm-12">
                                    <textarea type="text" name="text1_paginaex" class="form-control i_detalle"><?php echo $tupla[0]['text1_paginaex'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Texto 2</label>
                                <div class="col-sm-12">
                                    <textarea type="text" name="text2_paginaex"class="form-control i_detalle"><?php echo $tupla[0]['text2_paginaex'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Texto 3</label>
                                <div class="col-sm-12">
                                    <textarea type="text" name="text3_paginaex"  class="form-control i_detalle"><?php echo $tupla[0]['text3_paginaex'] ?></textarea>
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
                $(".i_detalle").summernote({
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
        <button onclick="cn97_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
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
                <button type="button" onclick="cn97_f7(5, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}
if ($opc_mod == 5) {
    $id = $_POST['dato_1'];
    $tupla = $fn97->fn97_rpaginasextra_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Imagen "<?php echo ($tupla[0]['titulo_texto']) ?>"</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body" >
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form">
                    <form class="form-valide" id="frm_imagen" >
                        <center><h4>CARGAR IMÁGEN</h4></center>
                        <input type="hidden" name="dato_0" value="7" id="idato_0">
                        <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                        <div id="div_editarimagen">
                            <?php if($tupla[0]['imagen_paginaex'] != 'ninguno.png' && $tupla[0]['imagen_paginaex'] != ''){ ?>
                            <img src="../assets/images/<?php echo $tupla[0]['imagen_paginaex'] ?>" width="200px" />
                            <?php }else{  ?>
                            <center><h5> Sin imagen</h5></center>
                            <?php } ?>
                        </div>
                        <input  name="dato_5"  type="file" data-theme="fas"><hr>
                         <button type="button"  onclick="cn97_f8()"  class="btn btn-danger" > <i class="fa fa-times"></i> Eliminar imágen </button>
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
        <button type="button" onclick="cn97_f7()" class="btn btn-warning">Guardar imagen</button>
    </div>
    <?php
}