<?php
require '../controlador/conexion.php';
require '../funciones/fn-64.php';
$opc_mod = $_POST['dato_0'];
$fn64 = new Fn_64();


if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo Personal</h5>
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
                                    <input type="text" name="nombre_per" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Apellido</label>
                                <div class="col-sm-12">
                                    <input type="text" name="apellido_per" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Cargo</label>
                                <div class="col-sm-12">
                                    <input type="text" name="cargo_per" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="titulo_per" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Teléfono</label>
                                <div class="col-sm-12">
                                    <input type="text" name="telefono1_per" class="form-control" placeholder="">
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
        <button type="button"  onclick="cn64_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn64->fn64_rpersonal_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Personal</h5>
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
                                    <input type="text" name="nombre_per" class="form-control" value="<?php echo ($tupla[0]['nombre_per']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Apellido</label>
                                <div class="col-sm-12">
                                    <input type="text" name="apellido_per" class="form-control" value="<?php echo ($tupla[0]['apellido_per']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Cargo</label>
                                <div class="col-sm-12">
                                    <input type="text" name="cargo_per" class="form-control" value="<?php echo ($tupla[0]['cargo_per']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="titulo_per" class="form-control" value="<?php echo ($tupla[0]['titulo_per']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Teléfono</label>
                                <div class="col-sm-12">
                                    <input type="text" name="telefono1_per" class="form-control" value="<?php echo ($tupla[0]['telefono1_per']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tipo</label>
                                <div class="col-sm-12">
                                    <select  name="tipo_per" class="form-control">
                                        <option value="1" <?php if( ($tupla[0]['tipo_per']) == 1){echo("selected");}?>>GOBIERNO COOPERATIVO</option>
                                        <option value="2" <?php if( ($tupla[0]['tipo_per']) == 2){echo("selected");}?>>STAF EJECUTIVO</option>
                                        
                                    </select>
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
        <button onclick="cn64_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn64->fn64_ravisos_x($id);
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
                <button type="button" onclick="cn64_f9(7, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}

if ($opc_mod == 5) {
    $id = $_POST['dato_1'];
    $tupla = $fn64->fn64_rpersonal_xtextos($id);
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
                                    <label class="col-sm-12 col-form-label">Texto 1</label>
                                    <div class="col-sm-12">
                                        <textarea  name="texto1_prod" rows="5" cols="47"><?php echo ($tupla[0]['texto1_prod']) ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Texto 1</label>
                                    <div class="col-sm-12">
                                        <textarea  name="texto2_prod" rows="5" cols="47"><?php echo ($tupla[0]['texto2_prod']) ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Texto 3</label>
                                    <div class="col-sm-12">
                                        <textarea  name="texto3_prod" rows="5" cols="47"><?php echo ($tupla[0]['texto3_prod']) ?></textarea>

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
            <button onclick="cn64_f5()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
        </div>
    </div>
    <?php
}