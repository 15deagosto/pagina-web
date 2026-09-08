<?php
require '../controlador/conexion.php';
require '../funciones/fn-21.php';
require '../funciones/fn-63.php';
require '../funciones/fn-91.php';
$fn21 = new Fn_21();
$fn63 = new Fn_63();
$fn91 = new Fn_91();
$opc_mod = $_POST['dato_0'];


if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo Producto</h5>
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
                                    <input type="text" name="nombre_prod" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea  name="descripcion_prod" rows="5" cols="47"></textarea></textarea>
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
        <button type="button"  onclick="cn63_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn63->fn63_rproducto_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Producto</h5>
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
                                    <input type="text" name="nombre_prod" class="form-control" value="<?php echo ($tupla[0]['nombre_prod']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="descripcion_prod" rows="5" cols="47"><?php echo ($tupla[0]['descripcion_prod']) ?></textarea>
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
        <button onclick="cn63_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    
    
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn63->fn63_ravisos_x($id);
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
                <button type="button" onclick="cn63_f9(9, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}

if ($opc_mod == 5) {
    $id = $_POST['dato_1'];
    $tupla = $fn63->fn63_rproducto_xtextos($id);
    ?>
    <div class="modal-content" id="content_sm">
        <div class="modal-header">
            <h5 class="modal-title">Editar texto  <?php echo ($tupla[0]['nombre_prod']) ?></h5>
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
                            <form class="form-valide" id="frm_editartxt" method="post">
                                <input type="hidden" value="5" name="dato_0">
                                <input type="hidden" value="<?php echo $id ?>" name="dato_1">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Características</label>
                                    <div class="col-sm-10">
                                        <textarea  name="texto1_prod" id="txt1" rows="5" cols="70"><?php echo ($tupla[0]['texto1_prod']) ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Requisitos</label>
                                    <div class="col-sm-10">
                                        <textarea  name="texto2_prod" id="txt2" rows="5" cols="70"><?php echo ($tupla[0]['texto2_prod']) ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Otro Texto</label>
                                    <div class="col-sm-10">
                                        <textarea  name="texto3_prod" id="txt3" rows="5" cols="70"><?php echo ($tupla[0]['texto3_prod']) ?></textarea>

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
            <button onclick="cn63_f5()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
        </div>
    </div>
    <script>
            $(document).ready(function () {
                $("#txt1").summernote({
                    height: 190,
                    minHeight: null,
                    maxHeight: null,
                    focus: !1
                }), $(".inline - editor").summernote({
                    airMode: !0
                });
                
                $("#txt2").summernote({
                    height: 190,
                    minHeight: null,
                    maxHeight: null,
                    focus: !1
                }), $(".inline - editor").summernote({
                    airMode: !0
                });
                
                $("#txt3").summernote({
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

if ($opc_mod == 6) {
    $qImg= $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $id_prod = $_POST['dato_3'];
    $tupla = $fn63->fn63_rproducto_xtextoses2($id_prod);
    //print_r($tupla);
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
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 858x910</label>
                            </div>
                            <div class="form-group row offset-3" id="i_imagenres1">
                                 <?php if($qImg==1 ) {?>
                                <img src="../assets/images/<?php echo $tupla[0]['imagen1_prod'] ?>" width="200px" />
                                 <?php }elseif($qImg==2 ) {?>
                                <img src="../assets/images/<?php echo $tupla[0]['imagen2_prod'] ?>" width="200px" />
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
        <button type="button"  onclick="cn63_f6(<?php echo $qImg ?>,<?php echo $id_prod ?>,<?php echo $id ?>)" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 7) {
    $id_prod = $_POST['dato_1'];
    $tabla = $fn21->fn21_rtasas_allx($id_prod);
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Rango de Tasas </h4>
                        <small style="color: red">Si no existe minimo ni máximo, dejar en cero</small>
                        <div class="btn-group mb-2">
                            <button onclick="cn63_f10(10,<?php echo $id_prod ?>)" type="button"  class="btn btn-primary light  px-3" data-toggle="dropdown">
                                <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" id="table63mod">
                            <table id="example4" class="display table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th>Tasa nominal anual / mensual</th>
                                        <th>Monto min</th>
                                        <th>Monto max</th>
                                        <th>Meses min</th>
                                        <th>Meses max</th>
                                        <th>Estado</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($menu = $tabla->fetch_assoc()) {
                                        $st = $menu['estado_tasa'];
                                        $id = $menu['id_tasa'];
                                        $estado = $fn63->fn63_estado_xid($st);
                                        ?>
                                        <tr>
                                            <td> <input type="text" id="tasanominal_tasa<?php echo $id ?>"  class="form-control" value="<?php echo ($menu['tasanominal_tasa']) ?>"></td>
                                            <td> <input type="text" id="valmin_tasa<?php echo $id ?>" class="form-control" value="<?php echo ($menu['valmin_tasa']) ?>"></td>
                                            <td> <input type="text" id="valmax_tasa<?php echo $id ?>" class="form-control" value="<?php echo ($menu['valmax_tasa']) ?>"></td>
                                            <td> <input type="text" id="min_tasa<?php echo $id ?>" class="form-control" value="<?php echo ($menu['min_tasa']) ?>"></td>
                                            <td> <input type="text" id="max_tasa<?php echo $id ?>" class="form-control" value="<?php echo ($menu['max_tasa']) ?>"> </td>
                                            <td>
                                                <div id="fill_<?php echo $id ?>">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <?php
                                                        if ($st == 0) {
                                                            ?>
                                                            <input value="1" name="estado" onchange="cn63_f11(11, <?php echo $id ?>, this.value,<?php echo $id_prod ?>)" 
                                                                   type="checkbox" class="custom-control-input" id="customCheckBoxtasa<?php echo $id ?>" required>
                                                            <label class="custom-control-label" for="customCheckBoxtasa<?php echo $id ?>">Inactivo</label>
                                                            <?php
                                                        } else if ($st == 1) {
                                                            ?>
                                                            <input value="0" name="estado" onchange="cn63_f11(11, <?php echo $id ?>, this.value,<?php echo $id_prod ?>)" 
                                                                   checked type="checkbox" class="custom-control-input" id="customCheckBoxtasa<?php echo $id ?>" required>
                                                            <label class="custom-control-label" for="customCheckBoxtasa<?php echo $id ?>">Activo</label>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button onclick="cn63_f12(12,<?php echo $id ?>,<?php echo $id_prod ?>)"  class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-save"></i></button>
                                                    

                                                </div>												
                                            </td>												
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#example3').dataTable();
    </script>
    <?php
}
if ($opc_mod == 8) {
    $qImg= $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $id_prod = $_POST['dato_3'];
    $tupla = $fn63->fn63_rproducto_xtextoses2($id_prod);
    //print_r($tupla);
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Imagen Banner</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="14" name="dato_0">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 1305 de alto x 400 de ancho</label>
                            </div>
                            <div class="form-group row offset-3" id="i_imagenres2">
                                 <?php if($qImg==1 ) {?>
                                <img src="../assets/images/<?php echo $tupla[0]['imagen2_prod'] ?>" width="200px" />
                                 <?php }elseif($qImg==2 ) {?>
                                <img src="../assets/images/<?php echo $tupla[0]['imagen2_prod'] ?>" width="200px" />
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
        <button type="button"  onclick="cn63_f14(<?php echo $qImg ?>,<?php echo $id_prod ?>,<?php echo $id ?>)" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}
if ($opc_mod == 9) {
     ?>
     <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Sincronizar</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body modal-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="1" name="dato_0">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Módulo para sincronizar productos de <br> créditos y depósitos ERP </label>
                                <div class="col-sm-12">
                                    <br>
                                    <button onclick="cn63_f15(15)" type="button" class="btn btn-warning light"> <i class="fa fa-refresh"></i> Sincronizar ahora</button>
                                </div>
                                <div style="margin-top: 15px;" class="col-sm-12" id="div_result_cn63_f15"></div>
                            </div>
                            
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