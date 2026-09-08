<?php
require '../controlador/conexion.php';
require '../funciones/fn-66.php';
require '../funciones/fn-91.php';
$opc_mod = $_POST['dato_0'];
$fn66 = new Fn_66();
$fn91 = new Fn_91();

if ($opc_mod == 1) {
    $fechaactual=date("Y-m-d");
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo Educación Financiera</h5>
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
                                    <input type="text" name="titulo_edfi" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Fecha</label>
                                <div class="col-sm-12">
                                    <input type="date" name="fecha_edfi" class="form-control" value="<?php echo $fechaactual ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Resumen</label>
                                <div class="col-sm-12">
                                    <textarea  name="resumen_edfi" rows="5" cols="47" style="width:100%"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea id="descripcion" name="descripcion_edfi" rows="5" cols="47" style="width:100%"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Orden</label>
                                <div class="col-sm-12">
                                    <input type="text" name="orden_edfi" class="form-control" value="1">
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
        <button type="button"  onclick="cn66_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn66->fn66_reducacion_financiera_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Educación Financiera</h5>
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
                                    <input type="text" name="titulo_edfi" class="form-control" value="<?php echo ($tupla[0]['titulo_edfi']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Fecha</label>
                                <div class="col-sm-12">
                                    <input type="date" name="fecha_edfi" class="form-control" value="<?php echo ($tupla[0]['fecha_edfi']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Resumen</label>
                                <div class="col-sm-12">
                                    <textarea  name="resumen_edfi" rows="5" cols="47" style="width:100%"><?php echo ($tupla[0]['resumen_edfi']) ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea id="descripcion" name="descripcion_edfi" rows="5" cols="47" style="width:100%"><?php echo ($tupla[0]['descripcion_edfi']) ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Orden</label>
                                <div class="col-sm-12">
                                    <input type="text" name="orden_edfi" class="form-control" value="<?php echo ($tupla[0]['orden_edfi']) ?>">
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
        <button onclick="cn66_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
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
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn66->fn66_ravisos_x($id);
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
                <button type="button" onclick="cn66_f7(7, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}

if ($opc_mod == 5) {
    $qImg= $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $id_edfi = $_POST['dato_3'];
    
    $tupla= $fn66->fn66_reducacion_financiera_x($id_edfi);
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Editar Video</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="5" name="dato_0">
<!--                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 1700 de alto x 1920 de ancho</label>
                            </div>-->
                            <div class="form-group row ">
                                <?php if( $tupla[0]['url_edfi']!='' ) {?>
                                <iframe width="560" height="315" src="../assets/images/<?php echo ($tupla[0]['url_edfi']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <!--<img src="../assets/images/<?php echo ($tupla[0]['imagen_edfi']) ?>" width="200px" />-->
                                 <?php }else{?> 
                                <div style="text-align: center ;width: 100%">SIN VIDEO</div>
                                <?php }?> 
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
        <button type="button"  onclick="cn66_u005_fX(<?php echo $qImg ?>,<?php echo $id_edfi ?>,<?php echo $id ?>)" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}
if ($opc_mod == 6) {
    $qImg= $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $id_edfi = $_POST['dato_3'];
    
    $tupla= $fn66->fn66_reducacion_financiera_x($id_edfi);
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
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="6" name="dato_0">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 1700 de alto x 1920 de ancho</label>
                            </div>
                            <div class="form-group row offset-3" id="i_imagen1">
                                 <?php if($tupla[0]['imagen_edfi']!='ninguno.png' ) {?>
                                <img src="../assets/img/<?php echo ($tupla[0]['imagen_edfi']) ?>" width="200px" />
                                 <?php }else{?> 
                                SIN IMAGEN
                                <?php }?> 
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
        <button type="button"  onclick="cn66_f6(<?php echo $qImg ?>,<?php echo $id_edfi ?>,<?php echo $id ?>)" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}if ($opc_mod == 7) {
    $qImg= $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $id_edfi = $_POST['dato_3'];
    
    $tupla= $fn66->fn66_reducacion_financiera_x($id_edfi);
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
                        <form class="form-valide" id="frm_nuevo1" method="post">
                            <input type="hidden" value="8" name="dato_0">
                            <input type="text" name="img_rep" value="1" hidden="">
                            <input type="text" name="dato_2" value="<?php echo $id_edfi ?>" hidden="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Primera Imagen</label>
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 1700 de alto x 1920 de ancho</label>
                            </div>
                            <div class="form-group row offset-3" id="i_imagen1">
                                 <?php if($tupla[0]['img1_edfi']!='' ) {?>
                                <a style="cursor: pointer; color: red;" onclick="cn66_009_f6(9,1,<?php echo $id_edfi ?>)">Borrar Imagen</a>
                                <img src="../assets/images/<?php echo ($tupla[0]['img1_edfi']) ?>" width="200px" />
                                 <?php }else{?> 
                                SIN IMAGEN
                                <?php }?> 
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Imagen 1</label>
                                <div class="col-sm-12">
                                    <input type="file" name="img_edfi" id="img1_edfi" class="form-control" placeholder="">
                                </div>
                            </div>
                             <button type="button" onclick="cn66_008_f6(1)" class="btn btn-warning" >Guardar </button>
                        </form>
                    </div>
                    <hr>
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo2" method="post">
                            <input type="hidden" value="8" name="dato_0">
                            <input type="text" name="img_rep" value="2" hidden="">
                            <input type="text" name="dato_2" value="<?php echo $id_edfi ?>" hidden="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Segunda Imagen</label>
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 1700 de alto x 1920 de ancho</label>
                            </div>
                            <div class="form-group row offset-3" id="i_imagen2">
                                 <?php if($tupla[0]['img2_edfi']!='' ) {?>
                                <a style="cursor: pointer; color: red;" onclick="cn66_009_f6(9,2,<?php echo $id_edfi ?>)">Borrar Imagen</a>
                                <img src="../assets/images/<?php echo ($tupla[0]['img2_edfi']) ?>" width="200px" />
                                 <?php }else{?> 
                                SIN IMAGEN
                                <?php }?> 
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Imagen 2</label>
                                <div class="col-sm-12">
                                    <input type="file" name="img_edfi" id="img2_edfi" class="form-control" placeholder="">
                                </div>
                            </div>
                             <button type="button" onclick="cn66_008_f6(2)" class="btn btn-warning" >Guardar </button>
                        </form>
                    </div>
                    <hr>
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo3" method="post">
                            <input type="hidden" value="8" name="dato_0">
                            <input type="text" name="img_rep" value="3" hidden="">
                            <input type="text" name="dato_2" value="<?php echo $id_edfi ?>" hidden="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Terecera Imagen</label>
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 1700 de alto x 1920 de ancho</label>
                            </div>
                            <div class="form-group row offset-3" id="i_imagen3">
                                 <?php if($tupla[0]['img3_edfi']!='' ) {?>
                                <a style="cursor: pointer; color: red;" onclick="cn66_009_f6(9,3,<?php echo $id_edfi ?>)">Borrar Imagen</a>
                                <img src="../assets/images/<?php echo ($tupla[0]['img3_edfi']) ?>" width="200px" />
                                 <?php }else{?> 
                                SIN IMAGEN
                                <?php }?> 
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Imagen 3</label>
                                <div class="col-sm-12">
                                    <input type="file" name="img_edfi" id="img3_edfi" class="form-control" placeholder="">
                                </div>
                            </div>
                            <button type="button" onclick="cn66_008_f6(3)" class="btn btn-warning" >Guardar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        
    </div>
    <?php
}