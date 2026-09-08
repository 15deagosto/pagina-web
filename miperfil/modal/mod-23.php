<?php
require '../controlador/conexion.php';
require '../funciones/fn-23.php';
$fn23 = new Fn_23();
$opc_mod = $_POST['dato_0'];

if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo procentaje de inversión SEPS</h5>
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
                                <label class="col-sm-4 col-form-label">Monto desde</label>
                                <div class="col-sm-7">
                                    <input type="text" name="montoin_inversion" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Monto Hasta</label>
                                <div class="col-sm-7">
                                    <input type="text" name="montoout_inversion" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Desde</label>
                                <div class="col-sm-7">
                                    <input type="text" name="diain_inversion" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Hasta</label>
                                <div class="col-sm-7">
                                    <input type="text" name="diaout_inversion" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Porcentaje</label>
                                <div class="col-sm-7">
                                    <input type="text" name="prociento_inversion" class="form-control" placeholder="">
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
        <button type="button"  onclick="cn23_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn23->fn23_rinversionseps_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar procentaje de inversión SEPS</h5>
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
                                <label class="col-sm-4 col-form-label">Monto desde</label>
                                <div class="col-sm-7">
                                    <input type="text" name="montoin_inversion" class="form-control" placeholder="" value="<?php echo ($tupla[0]['montoin_inversion']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Monto Hasta</label>
                                <div class="col-sm-7">
                                    <input type="text" name="montoout_inversion" class="form-control" placeholder="" value="<?php echo ($tupla[0]['montoout_inversion']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Desde</label>
                                <div class="col-sm-7">
                                    <input type="text" name="diain_inversion" class="form-control" placeholder="" value="<?php echo ($tupla[0]['diain_inversion']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Hasta</label>
                                <div class="col-sm-7">
                                    <input type="text" name="diaout_inversion" class="form-control" placeholder="" value="<?php echo ($tupla[0]['diaout_inversion']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Porcentaje</label>
                                <div class="col-sm-7">
                                    <input type="text" name="prociento_inversion" class="form-control" placeholder="" value="<?php echo ($tupla[0]['prociento_inversion']) ?>">
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
        <button onclick="cn23_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    
    
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn23->fn23_ravisos_x($id);
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
                <button type="button" onclick="cn23_f4(4, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}
