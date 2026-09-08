<?php
require '../controlador/conexion.php';
require '../funciones/fn-69.php';
$opc_mod = $_POST['dato_0'];
$fn69 = new Fn_69();


if ($opc_mod == 1) {
    ?>
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo Menú</h5>
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
                                <label class="col-sm-12 col-form-label">Título Menú</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_menupag" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Icono</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="icono_menupag" onchange="js69_ricon(this.value)">
                                        <option value=""   value="">SIN ICONO</option>
                                        <option value="icon-comunication-menu.svg"   value="">icon-comunication-menu.svg</option>
                                        <option value="icon-institucional-menu.svg">icon-institucional-menu.svg</option>
                                        <option value="icon-agencia-menu.svg">icon-agencia-menu.svg</option>
                                        <option value="icon-credito-menu.svg">icon-credito-menu.svg</option>
                                        <option value="icon-inversion-menu_1.svg" >icon-inversion-menu_1.svg</option>
                                        <option value="icon-transparencia-menu.svg" >icon-transparencia-menu.svg</option>
                                        <option value="icon-privacidad-menu.svg" >icon-privacidad-menu.svg</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label id="lb_icon"></label>
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
        <button type="button"  onclick="cn69_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
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
    $tupla = $fn69->fn69_rmenupag_x($id);
    //print_r($tupla);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Menú</h5>
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
                                <label class="col-sm-12 col-form-label">Título Menú</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_menupag" class="form-control" placeholder="" value="<?php echo ($tupla[0]['nombre_menupag']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Icono</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="icono_menupag" onchange="js69_ricon(this.value)">
                                        <option value="<?php echo $tupla[0]['icono_menupag'] ?>"   value=""><?php echo $tupla[0]['icono_menupag'] ?></option>
                                        <option value=""   value="">SIN ICONO</option>
                                        <option value="icon-comunication-menu.svg">icon-comunication-menu.svg</option>
                                        <option value="icon-institucional-menu.svg">icon-institucional-menu.svg</option>
                                        <option value="icon-agencia-menu.svg">icon-agencia-menu.svg</option>
                                        <option value="icon-credito-menu.svg">icon-credito-menu.svg</option>
                                        <option value="icon-inversion-menu_1.svg" >icon-inversion-menu_1.svg</option>
                                        <option value="icon-transparencia-menu.svg" >icon-transparencia-menu.svg</option>
                                        <option value="icon-privacidad-menu.svg" >icon-privacidad-menu.svg</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label id="lb_icon"><img src="../assets/images/<?php echo $tupla[0]['icono_menupag'] ?>" width="75" height="height" alt=""/></label>
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
        <button onclick="cn69_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
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
                <button type="button" onclick="cn69_f7(5, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}
if ($opc_mod == 5) {
    $id = $_POST['dato_1'];
    $tupla = $fn69->fn69_rmenupag_x($id);
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
                            <input type="hidden" value="7" name="dato_0">
                            <input type="hidden" value="<?php echo $id ?>" name="dato_1">
                            <input type="hidden" value="<?php echo $tupla[0]['tipo_menupag'] ?>" name="dato_2">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Título Menú</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_menupag" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tipo de página</label>
                                <div class="col-sm-12">
                                    <select class="form-control" onchange="js69_r002(this.value,<?php echo $id ?>)"  name="tipo2_menupag">
                                        <option value="0">Existente</option>
                                        <option value="1">Nueva</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="text"  id="url_menupag" name="url_menupag" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL (Interna / Externa)</label>
                                <div class="col-sm-12">
                                    <select class="form-control"  name="target_menupag">
                                        <option value="0">Interna</option>
                                        <option value="1">Externa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea name="desc_menupag" class="form-control" rows="5" cols="10"></textarea>
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
        <button type="button"  onclick="cn69_c007_fx()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
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
if ($opc_mod == 6) {
    $id = $_POST['dato_1'];
    $idpadre = $_POST['dato_2'];
    $tupla = $fn69->fn69_rmenupag_x($id);
    $txttarget = $fn69->fn69_taget_xid($tupla[0]['target_menupag']);
    $txttipo2 = $fn69->fn69_tipo2_xid($tupla[0]['tipo2_menupag']);
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
                        <form class="form-valide" id="frm_editar" method="post">
                            <input type="hidden" value="8" name="dato_0">
                            <input type="hidden" value="<?php echo $id ?>" name="dato_1">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Título Menú</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_menupag" class="form-control" placeholder="" value="<?php echo ($tupla[0]['nombre_menupag']) ?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tipo de página</label>
                                <div class="col-sm-12">
                                    <select class="form-control" onchange="js69_r002(this.value,<?php echo $id ?>)"  name="tipo2_menupag">
                                        <option value="<?php echo $tupla[0]['tipo2_menupag'] ?>"><?php echo $txttipo2 ?></option>
                                        <option value="0">Existente</option>
                                        <option value="1">Nueva</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="text"  id="url_menupag" name="url_menupag" class="form-control" value="<?php echo ($tupla[0]['url_menupag']) ?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL (Interna / Externa)</label>
                                <div class="col-sm-12">
                                    <select class="form-control"  name="target_menupag">
                                        <option value="<?php echo $tupla[0]['target_menupag'] ?>"><?php echo $txttarget ?></option>
                                        <option value="0">Interna</option>
                                        <option value="1">Externa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea name="desc_menupag" class="form-control" rows="5" cols="10"><?php echo ($tupla[0]['desc_menupag']) ?></textarea>
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
        <button type="button"  onclick="cn69_c008_fx()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
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

