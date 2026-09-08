<?php
require '../controlador/conexion.php';
require '../funciones/fn-61.php';
$opc_mod = $_POST['dato_0'];
$fn61 = new Fn_61();


if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo indicador</h5>
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
                                <label class="col-sm-6 col-form-label">Fecha</label>
                                <label class="col-sm-6 col-form-label">Dato</label>
                                <div class="col-sm-6">
                                    <input type="date" name="fecha_indicador" class="form-control" placeholder="" value="">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="dato_indicador" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Sucursal (En caso de ser indicador de crecimiento no se debe ingresar este dato.)</label>
                                <div class="col-sm-12">
                                    <input type="text" name="sucursal_indicador" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tipo indicador</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="tipo_indicador">
                                        <option value="0">-- Seleccionar --</option>
                                        <option value="1">Crecimiento</option>
                                        <option value="2">Crédito</option>
                                        <option value="3">Inversión</option>
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
        <button type="button"  onclick="cn61_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn61->fn61_rindicadores_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar indicador</h5>
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
                                <label class="col-sm-6 col-form-label">Fecha</label>
                                <label class="col-sm-6 col-form-label">Dato</label>
                                <div class="col-sm-6">
                                    <input type="date" name="fecha_indicador" class="form-control" placeholder="" value="<?php echo ($tupla[0]['fecha_indicador']) ?>">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="dato_indicador" class="form-control" placeholder="" value="<?php echo ($tupla[0]['dato_indicador']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Sucursal</label>
                                <div class="col-sm-12">
                                    <input type="text" name="sucursal_indicador" class="form-control" placeholder="" value="<?php echo ($tupla[0]['sucursal_indicador']) ?>">
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
        <button onclick="cn61_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
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
                <button type="button" onclick="cn61_f4(4, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}